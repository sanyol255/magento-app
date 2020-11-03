<?php
/**
 * Model Survey

 * @category  AlexDbModules
 * @package   AlexDbModules\CustomerSurvey
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Alex
 */
namespace AlexDbModules\CustomerSurvey\Model;

use Magento\Framework\Model\AbstractModel;


/**
 * Class Survey
 * @package AlexDbModules\CustomerSurvey\Model
 */
class Survey extends AbstractModel
{
    /**
     * Initialization of Survey Model
     */
    protected function _construct()
    {
        $this->_init('AlexDbModules\CustomerSurvey\Model\ResourceModel\Survey');
    }
}
