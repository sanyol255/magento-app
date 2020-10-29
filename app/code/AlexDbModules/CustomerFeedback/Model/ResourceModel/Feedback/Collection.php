<?php
/**
 * Collection Feedback

 * @category  AlexDbModules
 * @package   AlexDbModules\CustomerFeedback
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Alex
 */
namespace AlexDbModules\CustomerFeedback\Model\ResourceModel\Feedback;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * Class Collection
 * @package AlexDbModules\CustomerFeedback\Model\ResourceModel\Feedback
 */
class Collection extends AbstractCollection
{
    /**
     *Initialization of Collection with Feedback Model and Resource Model
     */
    public function _construct()
    {
        $this->_init('AlexDbModules\CustomerFeedback\Model\Feedback', 'AlexDbModules\CustomerFeedback\Model\ResourceModel\Feedback');
    }
}
