<?php

namespace AlexModules\HelloWorld\Block;

use Magento\Framework\View\Element\Template;

class Hello extends Template
{
    public function getText() {
        return "Hello World from Magento module!";
    }
}
