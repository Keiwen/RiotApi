<?php

namespace Keiwen\RiotApi\Dto\Champion;
use Keiwen\RiotApi\Dto\Data\ImageDto;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains champion passive data.
 */
class ChampionPassiveDto extends DtoParent
{




    /**
     * @inheritdoc
     */
    protected static function includedJsonObjects()
    {
        $included = parent::includedJsonObjects();
        $included['image'] = ImageDto::class;
        return $included;
    }



    /**
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->get('description', '');
    }


    /**
     * @param string $description
     * @return static
     */
    public function setDescription(string $description)
    {
        return $this->set('description', $description);
    }

    /**
     *
     * @return ImageDto
     */
    public function getImage()
    {
        return $this->get('image', new ImageDto());
    }


    /**
     * @param ImageDto $image
     * @return static
     */
    public function setImage(ImageDto $image)
    {
        return $this->set('image', $image);
    }

    /**
     *
     * @return string
     */
    public function getName()
    {
        return $this->get('name', '');
    }


    /**
     * @param string $name
     * @return static
     */
    public function setName(string $name)
    {
        return $this->set('name', $name);
    }

    /**
     *
     * @return string
     */
    public function getSanitizedDescription()
    {
        return $this->get('sanitizedDescription', '');
    }


    /**
     * @param string $sanitizedDescription
     * @return static
     */
    public function setSanitizedDescription(string $sanitizedDescription)
    {
        return $this->set('sanitizedDescription', $sanitizedDescription);
    }




}