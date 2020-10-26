<?php
/**
 * Block FeedbackForm

 * @category  AlexDbModules
 * @package   AlexDbModules\CustomerFeedback
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Alex
 */

namespace AlexDbModules\CustomerFeedback\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

/**
 * Class FeedbackForm
 * @package AlexDbModules\CustomerFeedback\Block
 */
class FeedbackForm extends Template
{
    /**
     * FeedbackForm constructor.
     * @param Context $context
     * @param array $data
     */
    public function __construct(Context $context, array $data = [])
    {
        parent::__construct($context, $data);
    }

    public function getFormAction()
    {
        return '/feedback/customer/store';
    }
}
