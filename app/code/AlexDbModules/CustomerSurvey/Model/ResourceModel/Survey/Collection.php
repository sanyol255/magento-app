<?php
/**
 * Collection Survey

 * @category  AlexDbModules
 * @package   AlexDbModules\CustomerSurvey
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Alex
 */
namespace AlexDbModules\CustomerSurvey\Model\ResourceModel\Survey;

use AlexDbModules\CustomerSurvey\Model\ResourceModel\Survey as ResourceSurvey;
use AlexDbModules\CustomerSurvey\Model\Survey;
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
        $this->_init(Survey::class, ResourceSurvey::class);
    }

    /**
     *Method for joining store_section_name column to customer_survey table
     */
    public function joinStoreSectionNames()
    {
        $this->join(
            $this->getTable('store_section_names'),
            'main_table.favorite_store_section_id=' . $this->getTable('store_section_names') . '.id',
            ['store_section_name']
        );
    }
}
