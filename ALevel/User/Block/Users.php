<?php

namespace ALevel\ALevel_User\User\Block;

use ALevel\User\Api\Repository\UserRepositoryInterface;
use Magento\Framework\Api\SearchCriteriaBuilder;
use Magento\Framework\Serialize\SerializerInterface;
use Magento\Framework\View\Element\Template;

class Users extends Template
{
    /**
     * @var UserRepositoryInterface
     */
    private $repository;

    /**
     * @var SearchCriteriaBuilder
     */
    private $searchCriteriaBuilder;

    /**
     * @var SerializerInterface
     */
    private $serializer;

    public function __construct(
        Template\Context $context,
        UserRepositoryInterface $repository,
        SearchCriteriaBuilder $searchCriteriaBuilder,
        SerializerInterface $serializer,
        array $data = []
    ) {
        $this->repository = $repository;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
        $this->serializer = $serializer;
        parent::__construct($context, $data);
    }

    public function getUsers()
    {
        $searchCriteria = $this->searchCriteriaBuilder
                               ->addFilter('age', 500, 'lt')
                               ->setPageSize(10)
                               ->create();

        $users = $this->repository->getList($searchCriteria);

        return $users;
    }

    public function getJsonConfig()
    {
        $users = $this->getUsers()->getItems();
        $config = [];

        foreach ($users as $user) {
            $config[] = $user->getData();
        }

        return $this->serializer->serialize($config);
    }
}
