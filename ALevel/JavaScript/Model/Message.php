<?php

namespace ALevel\JavaScript\Model;

use Magento\Framework\Model\AbstractModel;
use ALevel\JavaScript\Api\Data\MessageInterface;
use ALevel\JavaScript\Model\ResourceModel\Message as ResourceModelMessage;

/**
 * Class Message.
 *
 * @package ALevel\JavaScript\Model
 */
class Message extends AbstractModel implements MessageInterface
{
    /**
     *  Initialize resource model.
     */
    protected function _construct()
    {
        $this->_init(ResourceModelMessage::class);
    }

    /**
     * @return mixed|void
     */
    public function getMessage()
    {
        return $this->_getData(self::MESSAGE);
    }

    /**
     * @param $message
     * @return mixed|void
     */
    public function setMessage($message)
    {
        $this->setData(self::MESSAGE, $message);
    }

    /**
     * @return mixed|void
     */
    public function getName()
    {
        return $this->_getData(self::NAME);
    }

    /**
     * @param $name
     * @return mixed|void
     */
    public function setName($name)
    {
        $this->setData(self::NAME, $name);
    }
}
