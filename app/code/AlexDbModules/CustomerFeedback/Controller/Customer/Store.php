<?php
/**
 *CustomerFeedback/Store Action for writing data from form to database

 * @category  AlexDbModules
 * @package   AlexDbModules\CustomerFeedback
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Alex
 */
namespace AlexDbModules\CustomerFeedback\Controller\Customer;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\ObjectManagerInterface;

/**
 * Class Store
 * @package AlexDbModules\CustomerFeedback\Controller\Customer
 */
class Store extends Action
{
    /**
     * Store constructor.
     * @param Context $context
     * @param ObjectManagerInterface $objectManager
     */
    public function __construct(Context $context, ObjectManagerInterface $objectManager)
    {
        parent::__construct($context);
        $this->_objectManager = $objectManager;
    }

    /**
     * Getting data from form post method and writing it to database
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|void
     */
    public function execute()
    {
        $post = (array) $this->getRequest()->getPostValue();
        $feedback = $this->_objectManager->create('AlexDbModules\CustomerFeedback\Model\Feedback');
        $feedback->setData('customer_name', $post['customer_name']);
        $feedback->setData('email', $post['email']);
        $feedback->setData('customer_message', $post['customer_message']);
        $feedback->save();
        print 'Feedback was successfully added!';
    }
}
