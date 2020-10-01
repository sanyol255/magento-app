<?php
/**
 * Block Hello

 * @category  AlexModules
 * @package   AlexModules\HelloWorld
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Alex
 */

namespace AlexModules\HelloWorld\Block;

use Magento\Framework\View\Element\Template;

/**
 * Class Hello
 * @package AlexModules\HelloWorld\Block
 */
class Hello extends Template
{
    /**
     * @return string
     */
    public function getText() {
        return "Hello World from Magento module!";
    }
}
