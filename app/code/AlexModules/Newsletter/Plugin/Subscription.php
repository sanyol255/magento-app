<?php

namespace AlexModules\Newsletter\Plugin;

use Magento\Newsletter\Controller\Manage\Index;
class Subscription extends Index
{
    public function aroundExecute(\Magento\Newsletter\Controller\Manage\Index $subject, $result)
    {
        $this->_view->loadLayout();
        $this->_view->getPage()->getConfig()->getTitle()->set(__('Підписка на новини нашого сайту'));
        $this->_view->renderLayout();
    }
}
