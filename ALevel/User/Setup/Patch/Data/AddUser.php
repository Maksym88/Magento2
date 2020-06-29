<?php

namespace ALevel\User\Setup\Patch\Data;

use ALevel\User\Model\UserFactory;
use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\DB\TransactionFactory;

class AddUser implements DataPatchInterface
{
    private $modelFactory;

    private $transactionFactory;

    public function __construct(
        UserFactory $userFactory,
        TransactionFactory $transactionFactory
    ) {
        $this->modelFactory         = $userFactory;
        $this->transactionFactory   = $transactionFactory;
    }

    /**
     * @inheritDoc
     */
    public static function getDependencies()
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function getAliases()
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function apply()
    {
        /** @var \Magento\Framework\DB\Transaction $transaction */
        $transaction = $this->transactionFactory->create();

        for ($i = 0; $i < 10; $i++) {
            $model = $this->modelFactory->create();
            $model->setName(sprintf("Vasya_%d", $i));
            $model->setAge(rand(18, 999));
            $transaction->addObject($model);
        }

        $transaction->save();
    }
}
