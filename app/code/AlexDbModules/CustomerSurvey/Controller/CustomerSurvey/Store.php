<?php
/**
 *CustomerSurvey/Store Action for writing data from form to database

 * @category  AlexDbModules
 * @package   AlexDbModules\CustomerSurvey
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Alex
 */
namespace AlexDbModules\CustomerSurvey\Controller\CustomerSurvey;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\ObjectManagerInterface;

/**
 * Class Store
 * @package AlexDbModules\CustomerSurvey\Controller\CustomerSurvey
 */
class Store extends Action
{
    /**
     * Store constructor.
     * @param Context $context
     * @param ObjectManagerInterface $objectManager
     * @param ResultFactory $resultFactory
     */
    public function __construct(Context $context, ObjectManagerInterface $objectManager, ResultFactory $resultFactory)
    {
        parent::__construct($context);
        $this->_objectManager = $objectManager;
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|void
     */
    public function execute()
    {
        $post = (array) $this->getRequest()->getPost();
        $surveyData = $this->_objectManager->create('AlexDbModules\CustomerSurvey\Model\Survey');

        $surveyData->setData('customer_name', $post['customer_name']);
        $surveyData->setData('customer_age', $post['customer_age']);
        $surveyData->setData('customer_email', $post['customer_email']);
        $surveyData->setData('favorite_store_section', $post['favorite_store_section']);
        $surveyData->setData('preferred_payment_method', $post['preferred_payment_method']);
        $surveyData->setData('desirable_store_section', $post['desirable_store_section']);
        $surveyData->setData('average_monthly_spending', $post['currency_sign'] . $post['amount_of_money']);
        $surveyData->save();

        $this->_redirect('survey/customersurvey/result');
    }
}
