<?php

namespace ALevel\User\DataProvider;

use Magento\Ui\DataProvider\ModifierPoolDataProvider;
use Magento\Framework\App\Request\DataPersistorInterface;
use ALevel\User\Api\Model\UserInterface;
use ALevel\User\Model\ResourceModel\User\Collection;
use ALevel\User\Model\ResourceModel\User\CollectionFactory;

class UserProvider extends ModifierPoolDataProvider
{
    /**
     * @var Collection
     */
    private $colleciton;

    /**
     * @var DataPersistorInterface
     */
    private $dataPersistor;

    /**
     * @var array
     */
    private $loadedData = [];

    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        CollectionFactory $collectionFactory,
        DataPersistorInterface $dataPersistor,
        array $meta = [],
        array $data = []
    ) {
        $this->collection = $collectionFactory->create();
        $this->dataPersistor = $dataPersistor;
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }

    public function getData()
    {
        if (!empty($this->loadedData)) {
            return $this->loadedData;
        }

        $items = $this->collection->getItems();
        /** @var UserInterface $block */
        foreach ($items as $user) {
            $this->loadedData[$user->getId()] = $user->getData();
        }

        $data = $this->dataPersistor->get('user');
        if (!empty($data)) {
            $user = $this->collection->getNewEmptyItem();
            $user->setData($data);
            $this->loadedData[$user->getId()] = $user->getData();
            $this->dataPersistor->clear('user');
        }

        return $this->loadedData;
    }
}

