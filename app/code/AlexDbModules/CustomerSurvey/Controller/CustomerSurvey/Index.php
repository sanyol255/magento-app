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
use Magento\Framework\View\Result\PageFactory;

/**
 * Class Index
 * @package AlexDbModules\CustomerSurvey\Controller\Index
 */
class Index extends Action
{
    /**
     * @var PageFactory
     */
    protected $surveyFactory;

    /**
     * Index constructor.
     * @param Context $context
     * @param PageFactory $surveyFactory
     */
    public function __construct(Context $context, PageFactory $surveyFactory)
    {
        parent::__construct($context);
        $this->surveyFactory = $surveyFactory;
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|\Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        $surveyForm = $this->surveyFactory->create();
        return $surveyForm;
    }
}
