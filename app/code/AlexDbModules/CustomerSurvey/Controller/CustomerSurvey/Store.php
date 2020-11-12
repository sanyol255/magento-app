<?php
/**
 *CustomerSurvey/Store Action for writing data from form to database

 * @category  AlexDbModules
 * @package   AlexDbModules\CustomerSurvey
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Alex
 */
namespace AlexDbModules\CustomerSurvey\Controller\CustomerSurvey;

use AlexDbModules\CustomerSurvey\Api\Data\SurveyInterfaceFactory;
use AlexDbModules\CustomerSurvey\Api\SurveyRepositoryInterface;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;

/**
 * Class Store
 * @package AlexDbModules\CustomerSurvey\Controller\CustomerSurvey
 */
class Store extends Action
{
    /**
     * @var SurveyInterfaceFactory
     */
    protected $surveyInterfaceFactory;
    /**
     * @var SurveyRepositoryInterface
     */
    protected $surveyRepository;

    /**
     * Store constructor.
     * @param Context $context
     * @param SurveyInterfaceFactory $surveyInterfaceFactory
     * @param SurveyRepositoryInterface $surveyRepository
     */
    public function __construct(
        Context $context,
        SurveyInterfaceFactory $surveyInterfaceFactory,
        SurveyRepositoryInterface $surveyRepository
    ) {
        parent::__construct($context);
        $this->surveyInterfaceFactory = $surveyInterfaceFactory;
        $this->surveyRepository = $surveyRepository;
    }

    /**
     * Creating model object, assigning data from form to it and saving data to database with repository
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|void
     */
    public function execute()
    {
        $model = $this->surveyInterfaceFactory->create();
        $model->setName($this->getRequest()->getParam('customer_name'))
              ->setAge($this->getRequest()->getParam('customer_age'))
              ->setEmail($this->getRequest()->getParam('customer_email'))
              ->setFavoriteStoreSectionId((int)$this->getRequest()->getParam('favorite_store_section_id'))
              ->setPaymentMethod($this->getRequest()->getParam('preferred_payment_method'))
              ->setDesirableStoreSection($this->getRequest()->getParam('desirable_store_section'))
              ->setAverageMonthlySpending($this->getRequest()->getParam('average_monthly_spending'));
        $this->surveyRepository->save($model);

        $this->_redirect('survey/customersurvey/result');
    }
}
