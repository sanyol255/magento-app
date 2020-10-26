<?php
namespace AlexDbModules\CustomerFeedback\Model;

use Magento\Framework\Model\AbstractModel;

class Feedback extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('AlexDbModules\CustomerFeedback\Model\ResourceModel\Feedback');
    }
}
