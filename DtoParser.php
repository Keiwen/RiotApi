<?php


$stringIn = '
        paramOne	int	Description one.
        paramTwo	smthg Description two awesome
';
$stringInTwo = '
        paramOne	int	Another description.
        paramTwo	smthg Description two awesome
        paramThree	int	Different attribute.
';

echo (new DtoParser($stringIn))->code;
var_dump((new DtoCompare($stringIn, $stringInTwo))->getDiff());



class DtoParser
{

    public $code;
    /** @var DtoAttribute[] */
    public $attr = array();

    public function __construct(string $attributeList)
    {
        $attributeList = explode(PHP_EOL, trim($attributeList));
        $code = '';
        $nested = array();

        foreach($attributeList as $attr) {
            $attr = trim($attr);
            if(empty($attr)) continue;
            $attr = preg_replace('/\s+/', ' ',$attr);
            $attr = explode(' ', $attr, 3);
            $attrType = $attr[1];
            $attrDesc = empty($attr[2]) ? '' : $attr[2];
            $attrName = $attr[0];
            $attr = new DtoAttribute($attrName, $attrType, $attrDesc);
            if($attr->nest) {
                $nested[] = $attr->name;
            }
            $this->attr[] = $attr;
            $code .= $attr->getCode();
        }

        if(!empty($nested)) {
            $elmts = array();
            foreach($nested as $n) {
                $elmts[] = '$included[\'' . $n . '\'] = ClassToDetermine::class;';
            }
            $include = '
            //TODO complete include classes
            /**
             * @inheritdoc
             */
            protected static function includedJsonObjects()
            {
                $included = parent::includedJsonObjects();
                ' . implode(PHP_EOL, $elmts) . '
                return $included;
            }
            ';
            $code = $include . PHP_EOL . $code;
        }
        $this->code = $code;
    }

}


class DtoAttribute
{
    public $name;
    public $type;
    public $desc;
    public $default;
    public $alert = array();
    public $nest = false;

    public function __construct(string $name, string $type, string $desc = '')
    {
        $this->name = $name;
        $this->desc = $desc;
        $alert = array();
        switch($type) {
            case 'int':
            case 'long':
                $type = 'int';
                $default = 0;
                break;
            case 'double':
            case 'float':
                $type = 'float';
                $default = 0;
                break;
            case 'string':
                $default = '\'\'';
                break;
            case 'boolean':
            case 'bool':
                $type = 'bool';
                $default = 'false';
                break;
            default:
                //type not recognized, alert (should be array or nested object)
                $alert[] = '//TODO type ' . $type;
                $type = 'array';
                $default = 'array()';
                $this->nest = true;
                break;
        }
        //alert if legal values limited
        if(strpos($desc, 'Legal value') !== false) {
            $alert[] = '//TODO use constants';
        }
        $this->type = $type;
        $this->default = $default;
        $this->alert = $alert;
    }

    public function getGetter()
    {
        return '
            /**
             * ' . $this->desc . '
             * @return ' . $this->type . '
             */
            public function get' . ucfirst($this->name) . '()
            {
                return $this->get(\'' . $this->name . '\', ' . $this->default . ');
            }
        ';
    }

    public function getSetter()
    {
        return '
            /**
             * @param ' . $this->type . ' $' . $this->name . '
             * @return static
             */
            public function set' . ucfirst($this->name) . '(' . $this->type . ' $' . $this->name . ')
            {
                return $this->set(\'' . $this->name . '\', $' . $this->name . ');
            }
        ';

    }

    public function getCode()
    {
        $getter = $this->getGetter();
        $setter = $this->getSetter();
        return implode(PHP_EOL, $this->alert) . $getter . PHP_EOL . $setter;
    }

}

class DtoCompare
{

    public $combine = array();

    public function __construct($first, $second)
    {
        $parserFirst = new DtoParser($first);
        $parserSecond = new DtoParser($second);
        $attrFirst = $parserFirst->attr;
        $attrSecond = $parserSecond->attr;
        foreach($attrFirst as $attr) {
            $this->combine($attr, true);
        }
        foreach($attrSecond as $attr) {
            $this->combine($attr, false);
        }
        ksort($this->combine);
    }

    private function combine(DtoAttribute $attr, $first = true)
    {
        if(isset($this->combine[$attr->name])) {
            $input = $first ? 'first' : 'second';
            $this->combine[$attr->name][$input] = $attr;
        } else {
            $this->combine[$attr->name] = array(
                'first' => $first ? $attr : null,
                'second' => $first ? null : $attr,
            );
        }
    }

    public function getDiff($common = false, $ignoreDesc = false)
    {
        $diff = array();
        foreach($this->combine as $attr => $combine) {
            if($ignoreDesc) {
                $first = $combine['first'];
                $second = $combine['second'];
                if(!empty($first)) $first->desc = '';
                if(!empty($second)) $second->desc = '';
                $similar = $first == $second;
            } else {
                $similar = $combine['first'] == $combine['second'];
            }
            if($similar == $common) $diff[$attr] = $combine;
        }
        return $diff;
    }




}