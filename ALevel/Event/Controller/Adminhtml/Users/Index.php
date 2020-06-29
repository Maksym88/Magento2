<?php

namespace ALevel\Event\Controller\Adminhtml\Users;

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

        $page->setActiveMenu('ALevel_Event::alevel_event');
        $page->getConfig()->getTitle()->prepend(__('ALevel_Event'));
        return $page;
    }

    /**
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('ALevel_Event::users_list_access');
    }
}
