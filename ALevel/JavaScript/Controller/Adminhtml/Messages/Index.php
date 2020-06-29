<?php

namespace ALevel\JavaScript\Controller\Adminhtml\Messages;

use Magento\Backend\App\Action;
use Magento\Backend\Model\View\Result\Page;
use Magento\Framework\Controller\ResultFactory;


class Index extends Action
{
    /**
     * @return Page|\Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $page =  $resultJson = $this->resultFactory->create(ResultFactory::TYPE_PAGE);

        $page->setActiveMenu('ALevel_JavaScript::alevel_javascript');
        $page->getConfig()->getTitle()->prepend(__('ALevel_JavaScript'));
        return $page;
    }

    /**
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('ALevel_JavaScript::alevel_javascript');
    }
}
