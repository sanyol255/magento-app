<?php
/**
 * Plugin for changing Newsletter subscription page

 * @category  AlexModules
 * @package   AlexModules\Newsletter
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Alex
 */

namespace AlexModules\Newsletter\Plugin;

use Magento\Newsletter\Controller\Manage\Index;

/**
 * Class Subscription
 * @package AlexModules\Newsletter\Plugin
 */
class Subscription extends Index
{
    /**
     * @param Index $subject
     * @param $result
     * Overriding default title for newsletter subscription page
     */
    public function aroundExecute(\Magento\Newsletter\Controller\Manage\Index $subject, $result)
    {
        $this->_view->loadLayout();
        $this->_view->getPage()->getConfig()->getTitle()->set(__('Підписка на новини нашого сайту'));
        $this->_view->renderLayout();
    }
}
