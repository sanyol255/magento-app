<?php
/**
 * CustomerSurvey/Result Action
 *
 * @category  AlexDbModules
 * @package   AlexDbModules\CustomerSurvey
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Alex
 */

namespace AlexDbModules\CustomerSurvey\Controller\CustomerSurvey;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;


/**
 * Class Result
 * @package AlexDbModules\CustomerSurvey\Controller\CustomerSurvey
 */
class Result extends Action
{
    /**
     * @var PageFactory
     */
    protected $surveyResultFactory;

    /**
     * Index constructor.
     * @param Context $context
     * @param PageFactory $surveyResultFactory
     */
    public function __construct(Context $context, PageFactory $surveyResultFactory)
    {
        parent::__construct($context);
        $this->surveyResultFactory = $surveyResultFactory;
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|\Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        $surveyResult = $this->surveyResultFactory->create();
        return $surveyResult;
    }
}
