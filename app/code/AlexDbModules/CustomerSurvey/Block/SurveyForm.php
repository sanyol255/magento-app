<?php
/**
 * Block SurveyForm

 * @category  AlexDbModules
 * @package   AlexDbModules\CustomerSurvey
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Alex
 */

namespace AlexDbModules\CustomerSurvey\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

/**
 * Class SurveyForm
 * @package AlexDbModules\CustomerSurvey\Block
 */
class SurveyForm extends Template
{
    /**
     *Path to action for writing form data to database
     */
    const FORM_ACTION = '/customersurvey/survey/store';
    /**
     * SurveyForm constructor.
     * @param Context $context
     * @param array $data
     */
    public function __construct(Context $context, array $data = [])
    {
        parent::__construct($context, $data);
    }

    /**
     * @return string
     */
    public function getFormAction()
    {
        return self::FORM_ACTION;
    }
}
