<?php

namespace AlexModules\ProductData\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class ProductObserver implements ObserverInterface
{
    public function execute(Observer $observer)
    {
        $product = $observer->getProduct();
        $originalName = $product->getName();
        $modifiedName = $originalName . ' - The best product';
        $product->setName($modifiedName);
    }
}
