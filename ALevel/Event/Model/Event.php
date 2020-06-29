<?php

namespace ALevel\Event\Model;

use ALevel\Event\Model\ResourceModel\Customer as ResourceModelCustomer;
use Magento\Framework\Model\AbstractModel;

use ALevel\Event\Api\Data\EventInterface;
use ALevel\Event\Model\ResourceModel\Event as ResourceModelEvent;

/**
 * Class Event
 * @package ALevel\Event\Model
 */
class Event extends AbstractModel implements EventInterface
{
    protected function _construct()
    {
        $this->_init(ResourceModelEvent::class);
    }

    /**
     * @return mixed|string
     */
    public function getName()
    {
        return $this->_getData(self::NAME);
    }

    public function setName($name)
    {
        $this->setData(self::NAME, $name);
    }

    public function setIsEnabled(bool $flag): EventInterface
    {
        $this->setData(self::IS_ENABLED, $flag);

        return $this;
    }

    /**
     * @return bool
     */
    public function isEnabled(): bool
    {
        return $this->_getData(self::IS_ENABLED);
    }

    /**
     * @param array $ids
     * @return EventInterface
     */
    public function setProductsIds(array $ids): EventInterface
    {
        $this->setData(self::ITEMS, $ids);

        return $this;
    }

    /**
     * @return array|null
     */
    public function getProductsIds(): ?array
    {
        return $this->getData(self::NAME); // TODO JSON ?
    }

}
