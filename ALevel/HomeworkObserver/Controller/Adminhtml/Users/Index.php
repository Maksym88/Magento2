<?php

namespace ALevel\HomeworkObserver\Controller\Adminhtml\Users;

use Magento\Backend\App\Action;
use Magento\Framework\Controller\ResultFactory;

/**
 * Class Index
 * @package ALevel\Event\Controller\Adminhtml\Users
 */
class Index extends Action
{
    /**
     * @return Page|\Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $page = $this->resultFactory->create(ResultFactory::TYPE_PAGE);

        $page->setActiveMenu('ALevel_Homework::alevel_homework');
        $page->getConfig()->getTitle()->prepend(__('ALevel Homework'));
        return $page;
    }

    /**
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('ALevel_HomeworkObserver::users_list_access');
    }
}
