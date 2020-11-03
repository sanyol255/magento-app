<?php
/**
 * Resource Model Survey

 * @category  AlexDbModules
 * @package   AlexDbModules\CustomerSurvey
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Alex
 */
namespace AlexDbModules\CustomerSurvey\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

/**
 * Class Survey
 * @package AlexDbModules\CustomerSurvey\Model\ResourceModel
 */
class Survey extends AbstractDb
{
    /**
     *Initialization of Survey Resource Model with table name and primary key
     */
    protected function _construct()
    {
        $this->_init('customer_survey', 'id');
    }
}
