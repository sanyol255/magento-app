<?php
/**
 * Collection Survey

 * @category  AlexDbModules
 * @package   AlexDbModules\CustomerSurvey
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Alex
 */
namespace AlexDbModules\CustomerSurvey\Model\ResourceModel\Survey;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * Class Collection
 * @package AlexDbModules\CustomerSurvey\Model\ResourceModel\Survey
 */
class Collection extends AbstractCollection
{
    /**
     *Initialization of Collection with Survey Model and Resource Model
     */
    public function _construct()
    {
        $this->_init('AlexDbModules\CustomerSurvey\Model\Survey', 'AlexDbModules\CustomerSurvey\Model\ResourceModel\Survey');
    }
}
