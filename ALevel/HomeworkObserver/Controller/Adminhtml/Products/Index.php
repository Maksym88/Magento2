<?php

namespace ALevel\HomeworkObserver\Controller\Adminhtml\Products;

use Magento\Backend\App\Action;
use Magento\Backend\Model\View\Result\Page;
use Magento\Framework\Controller\ResultFactory;

/**
 * Class Index
 * @package ALevel\HomeworkObserver\Controller\Adminhtml\Products
 */
class Index extends Action
{
    /**
     * @return Page|\Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $page =  $resultJson = $this->resultFactory->create(ResultFactory::TYPE_PAGE);

        $page->setActiveMenu('ALevel_HomeworkObserver::alevel_homework_products');
        $page->getConfig()->getTitle()->prepend(__('ALevel_HomeworkObserver'));
        return $page;
    }

    /**
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('ALevel_HomeworkObserver::products_list_access');
    }
}
