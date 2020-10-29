<?php
/**
 * Model Feedback

 * @category  AlexDbModules
 * @package   AlexDbModules\CustomerFeedback
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Alex
 */
namespace AlexDbModules\CustomerFeedback\Model;

use Magento\Framework\Model\AbstractModel;

/**
 * Class Feedback
 * @package AlexDbModules\CustomerFeedback\Model
 */
class Feedback extends AbstractModel
{
    /**
     * Initialization of Feedback Model
     */
    protected function _construct()
    {
        $this->_init('AlexDbModules\CustomerFeedback\Model\ResourceModel\Feedback');
    }
}
