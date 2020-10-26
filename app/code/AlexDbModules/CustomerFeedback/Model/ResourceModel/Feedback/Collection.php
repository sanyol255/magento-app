<?php
namespace AlexDbModules\CustomerFeedback\Model\ResourceModel\Feedback;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    public function _construct()
    {
        $this->_init('AlexDbModules\CustomerFeedback\Model\Feedback', 'AlexDbModules\CustomerFeedback\Model\ResourceModel\Feedback');
    }
}
