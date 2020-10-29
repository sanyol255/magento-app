<?php
/**
 * Resource Model Feedback

 * @category  AlexDbModules
 * @package   AlexDbModules\CustomerFeedback
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Alex
 */
namespace AlexDbModules\CustomerFeedback\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

/**
 * Class Feedback
 * @package AlexDbModules\CustomerFeedback\Model\ResourceModel
 */
class Feedback extends AbstractDb
{
    /**
     *Initialization of Feedback Resource Model with table name and primary key
     */
    protected function _construct()
    {
        $this->_init('customer_feedback_info', 'id');
    }
}
