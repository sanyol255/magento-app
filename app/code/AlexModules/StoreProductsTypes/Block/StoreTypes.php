<?php
/**
 * Block StoreTypes

 * @category  AlexModules
 * @package   AlexModules\StoreProductsTypes
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Alex
 */

namespace AlexModules\StoreProductsTypes\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\Framework\App\Config\ScopeConfigInterface;

/**
 * Class StoreTypes
 * @package AlexModules\StoreProductsTypes\Block
 */

class StoreTypes extends Template
{
    /**
     * @var ScopeConfigInterface
     */
    protected $scopeConfig;

    /**
     * StoreTypes constructor.
     * @param Context $context
     * @param ScopeConfigInterface $scopeConfig
     * @param array $data
     */
    public function __construct(Context $context, ScopeConfigInterface $scopeConfig, array $data = [])
    {
        parent::__construct($context, $data);
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * @return array
     * Array data with store name, description and type(s) for outputting in storetypes/index/index
     */
    public function getStore()
    {
        $storeName = $this->scopeConfig->getValue('store_products_types/store/name');
        $storeDescription = $this->scopeConfig->getValue('store_products_types/store/description');
        $isMonotyped = $this->scopeConfig->getValue('store_products_types/store_types/is_monotyped');
        $monotype = $this->scopeConfig->getValue('store_products_types/store_types/monotype');
        $polytype = $this->scopeConfig->getValue('store_products_types/store_types/polytype');
        $storeTypes = ($isMonotyped == 1) ? $monotype : $polytype;
        return [$storeName, $storeDescription, $storeTypes];
    }
}
