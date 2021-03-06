<?php
/**
 * Model ProductTypes
 * @category  AlexModules
 * @package   AlexModules\StoreProductsTypes
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Alex
 */
namespace AlexModules\StoreProductsTypes\Model;

use Magento\Framework\Option\ArrayInterface;

/**
 * Class ProductTypes
 * @package AlexModules\StoreProductsTypes\Model
 */
class ProductTypes implements ArrayInterface
{
    /**
     * @return array|\string[][]
     */
    public function toOptionArray()
    {
        return [
            [
                'label' => 'Simple product',
                'value' => 'simple',
            ], [
                'label' => 'Configurable product',
                'value' => 'configurable',
            ], [
                'label' => 'Grouped product',
                'value' => 'grouped',
            ], [
                'label' => 'Virtual product',
                'value' => 'virtual',
            ], [
                'label' => 'Bundle product',
                'value' => 'bundle',
            ], [
                'label' => 'Downloadable product',
                'value' => 'downloadable',
            ],
        ];
    }
}
