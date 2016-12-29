<?php

namespace Keiwen\RiotApi\Dto\Shard;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 */
class MessageDto extends DtoParent
{


    /**
     * @inheritdoc
     */
    protected static function includedJsonObjects()
    {
        $included = parent::includedJsonObjects();
        $included['translations'] = TranslationDto::class;
        return $included;
    }


    /**
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->get('author', '');
    }


    /**
     * @param string $author
     * @return static
     */
    public function setAuthor(string $author)
    {
        return $this->set('author', $author);
    }

    /**
     *
     * @return string
     */
    public function getContent()
    {
        return $this->get('content', '');
    }


    /**
     * @param string $content
     * @return static
     */
    public function setContent(string $content)
    {
        return $this->set('content', $content);
    }

    /**
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->get('created_at', '');
    }


    /**
     * @param string $createdAt
     * @return static
     */
    public function setCreatedAt(string $createdAt)
    {
        return $this->set('created_at', $createdAt);
    }

    /**
     *
     * @return string
     */
    public function getId()
    {
        return $this->get('id', '');
    }


    /**
     * @param string $id
     * @return static
     */
    public function setId(string $id)
    {
        return $this->set('id', $id);
    }

    /**
     *
     * @return string
     */
    public function getSeverity()
    {
        return $this->get('severity', '');
    }


    /**
     * @param string $severity
     * @return static
     */
    public function setSeverity(string $severity)
    {
        return $this->set('severity', $severity);
    }

    /**
     *
     * @return TranslationDto[]
     */
    public function getTranslations()
    {
        return $this->get('translations', array());
    }


    /**
     * @param TranslationDto[] $translations
     * @return static
     */
    public function setTranslations($translations)
    {
        if(empty($translations)) $translations = array();
        return $this->set('translations', $translations);
    }

    /**
     *
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->get('updated_at', '');
    }


    /**
     * @param string $updatedAt
     * @return static
     */
    public function setUpdatedAt(string $updatedAt)
    {
        return $this->set('updated_at', $updatedAt);
    }


}