<?php

namespace Keiwen\RiotApi\Dto\Map;
use Keiwen\RiotApi\Dto\Data\ImageDto;
use Keiwen\RiotApi\Dto\DtoParent;


/**
 * This object contains map details data.
 */
class MapDetailsDto extends DtoParent
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
     * @return int
     */
    public function getMapId()
    {
        return $this->get('mapId', 0);
    }


    /**
     * @param int $mapId
     * @return static
     */
    public function setMapId(int $mapId)
    {
        return $this->set('mapId', $mapId);
    }

    /**
     *
     * @return string
     */
    public function getMapName()
    {
        return $this->get('mapName', '');
    }


    /**
     * @param string $mapName
     * @return static
     */
    public function setMapName(string $mapName)
    {
        return $this->set('mapName', $mapName);
    }

    /**
     *
     * @return int[]
     */
    public function getUnpurchasableItemList()
    {
        return $this->get('unpurchasableItemList', array());
    }


    /**
     * @param int[] $unpurchasableItemList
     * @return static
     */
    public function setUnpurchasableItemList(array $unpurchasableItemList)
    {
        return $this->set('unpurchasableItemList', $unpurchasableItemList);
    }


}