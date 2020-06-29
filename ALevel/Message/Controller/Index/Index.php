<?php

namespace ALevel\Message\Controller\Index;

use Magento\Framework\Controller\ResultFactory;

/**
 * Class Index
 * @package ALevel\Message\Controller\Index
 */
class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);

        return $resultPage;
    }
}