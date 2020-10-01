<?php
/**
 * Observer for modifying product name on details page
 *
 * @category  AlexModules
 * @package   AlexModules\ProductData
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Alex
 */
namespace AlexModules\ProductData\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

/**
 * Class ProductObserver
 * @package AlexModules\ProductData\Observer
 */
class ProductObserver implements ObserverInterface
{
    /**
     * @param Observer $observer
     * Adding suffix after product name on details page
     */
    public function execute(Observer $observer)
    {
        $product = $observer->getProduct();
        $originalName = $product->getName();
        $modifiedName = $originalName . ' - The best product';
        $product->setName($modifiedName);
    }
}
