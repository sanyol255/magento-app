<?php
namespace AlexDbModules\CustomerFeedback\Controller\Customer;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\ObjectManagerInterface;
use Magento\Framework\Controller\ResultFactory;

class Store extends Action
{
    protected $_objectManager;

    public function __construct(ObjectManagerInterface $objectManager)
    {
        $this->_objectManager = $objectManager;
    }

    public function execute()
    {
        $post = $this->getRequest()->getPostValue();
        $model = $this->_objectManager->create('AlexDbModules\CustomerFeedback\Model\Feedback');
        $model->setData('customer_name', $post['customer_name']);
        $model->setData('email', $post['email']);
        $model->setData('customer_message', $post['customer_message']);
        $model->save();
    }
}








