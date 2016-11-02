<?php

namespace Keiwen\RiotApi\Dto\Shard;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 */
class TranslationDto extends DtoParent
{


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
    public function getLocale()
    {
        return $this->get('locale', '');
    }


    /**
     * @param string $locale
     * @return static
     */
    public function setLocale(string $locale)
    {
        return $this->set('locale', $locale);
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