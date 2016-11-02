<?php

namespace Keiwen\RiotApi\Dto\Mastery;
use Keiwen\RiotApi\Dto\Data\ImageDto;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains mastery data.
 */
class MasteryDto extends DtoParent
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
     * @return string[]
     */
    public function getDescription()
    {
        return $this->get('description', array());
    }


    /**
     * @param string[] $description
     * @return static
     */
    public function setDescription(array $description)
    {
        return $this->set('description', $description);
    }

    /**
     *
     * @return int
     */
    public function getId()
    {
        return $this->get('id', 0);
    }


    /**
     * @param int $id
     * @return static
     */
    public function setId(int $id)
    {
        return $this->set('id', $id);
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
     * Legal values: Cunning, Ferocity, Resolve
     * @return string
     */
    public function getMasteryTree()
    {
        return $this->get('masteryTree', 'Cunning');
    }


    /**
     * @param string $masteryTree
     * @return static
     */
    public function setMasteryTree(string $masteryTree)
    {
        return $this->set('masteryTree', $masteryTree);
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
    public function getPrereq()
    {
        return $this->get('prereq', '');
    }


    /**
     * @param string $prereq
     * @return static
     */
    public function setPrereq(string $prereq)
    {
        return $this->set('prereq', $prereq);
    }

    /**
     *
     * @return int
     */
    public function getRanks()
    {
        return $this->get('ranks', 0);
    }


    /**
     * @param int $ranks
     * @return static
     */
    public function setRanks(int $ranks)
    {
        return $this->set('ranks', $ranks);
    }

    /**
     *
     * @return string[]
     */
    public function getSanitizedDescription()
    {
        return $this->get('sanitizedDescription', array());
    }


    /**
     * @param string[] $sanitizedDescription
     * @return static
     */
    public function setSanitizedDescription(array $sanitizedDescription)
    {
        return $this->set('sanitizedDescription', $sanitizedDescription);
    }


}