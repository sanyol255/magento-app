<?php
/**
 * Block SurveyResult

 * @category  AlexDbModules
 * @package   AlexDbModules\CustomerSurvey
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Alex
 */

namespace AlexDbModules\CustomerSurvey\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use AlexDbModules\CustomerSurvey\ViewModel\SurveyResultsList as SurveyResultsViewModel;

/**
 * Class SurveyResult
 * @package AlexDbModules\CustomerSurvey\Block
 */
class SurveyResult extends Template
{
    /**
     * @var SurveyResultsViewModel
     */
    protected $surveyResultsViewModel;

    /**
     * SurveyResult constructor.
     * @param Context $context
     * @param SurveyResultsViewModel $surveyResultsViewModel
     * @param array $data
     */
    public function __construct(Context $context, SurveyResultsViewModel $surveyResultsViewModel, array $data = [])
    {
        parent::__construct($context, $data);
        $this->surveyResultsViewModel = $surveyResultsViewModel;
    }

    /**
     * @return mixed
     * Method that outputs survey data from database
     */
    public function getSurveyList()
    {
        return $this->surveyResultsViewModel->getSurveyResults();
    }

}
