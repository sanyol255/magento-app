<?php
/**
 * Model CustomOptions
 * @category  AlexModules
 * @package   AlexModules\StoreProductsTypes
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Alex
 */
namespace AlexModules\StoreProductsTypes\Model;

use Magento\Framework\Option\ArrayInterface;

/**
 * Class CustomOptions
 * @package AlexModules\StoreProductsTypes\Model
 */
class CustomOptions implements ArrayInterface
{
    /**
     * Constants for custom options in field
     */
    const MONOTYPED = 'Store with one product type';
    const POLYTYPED = 'Store with several products types';

    /**
     * @return array|array[]
     * Rewriting default values of Yesno system config
     */
    public function toOptionArray()
    {
        return [['value' => 1, 'label' => self::MONOTYPED], ['value' => 0, 'label' => self::POLYTYPED]];
    }
}
