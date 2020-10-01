<?php
/**
 * Block for currency converter

 * @category  AlexModules
 * @package   AlexModules\CurrencyConverter
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Alex
 */
namespace AlexModules\CurrencyConverter\Block;

use AlexModules\CurrencyConverter\Model\CurrencyData;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

/**
 * Class Converter
 * @package AlexModules\Converter\Block
 */
class Converter extends Template
{
    /**
     * @var CurrencyData
     */
    private $currencyData;

    /**
     * Converter constructor.
     * @param Context $context
     * @param CurrencyData $currencyData
     * @param array $data
     */
    public function __construct(Context $context, CurrencyData $currencyData, array $data = [])
    {
        $this->currencyData = $currencyData;
        parent::__construct($context, $data);
    }

    /**
     * @return CurrencyData
     */
    public function getCurrency()
    {
        return $this->currencyData;
    }
}
