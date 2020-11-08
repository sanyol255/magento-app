<?php
/**
 * CustomerSurvey/Index Action
 *
 * @category  AlexDbModules
 * @package   AlexDbModules\CustomerSurvey
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Alex
 */

namespace AlexDbModules\CustomerSurvey\Controller\CustomerSurvey;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\Action\HttpPostActionInterface;
use Magento\Framework\View\Result\PageFactory;

/**
 * Class Index
 * @package AlexDbModules\CustomerSurvey\Controller\Index
 */
class Index extends Action implements HttpGetActionInterface, HttpPostActionInterface
{
    /**
     * @var PageFactory
     */
    protected $surveyFormFactory;

    /**
     * Index constructor.
     * @param Context $context
     * @param PageFactory $surveyFormFactory
     */
    public function __construct(Context $context, PageFactory $surveyFormFactory)
    {
        parent::__construct($context);
        $this->surveyFormFactory = $surveyFormFactory;
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|\Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        $survey = $this->surveyFormFactory->create();
        return $survey;
    }
}
