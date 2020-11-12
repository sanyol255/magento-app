<?php

namespace AlexDbModules\CustomerSurvey\Setup\Patch\Data;

use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;

class AddStoreSectionNames implements DataPatchInterface
{
    protected $dataSetup;

    public function __construct(ModuleDataSetupInterface $dataSetup)
    {
        $this->dataSetup = $dataSetup;
    }

    public function apply()
    {
        $this->dataSetup->startSetup();
        $setup = $this->dataSetup;

        $data[] = ['id' => 1, 'store_section_name' => 'Women'];
        $data[] = ['id' => 2, 'store_section_name' => 'Men'];
        $data[] = ['id' => 3, 'store_section_name' => 'Gear'];
        $data[] = ['id' => 4, 'store_section_name' => 'Training'];

        $this->dataSetup->getConnection()->insertArray(
            $this->dataSetup->getTable('store_section_names'),
            ['id', 'store_section_name'],
            $data
        );
    }

    public function getAliases()
    {
        return [];
    }

    public static function getDependencies()
    {
        return [];
    }
}
