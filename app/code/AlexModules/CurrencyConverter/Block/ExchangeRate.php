<?php
/**
 * Block for exchange rate

 * @category  AlexModules
 * @package   AlexModules\CurrencyConverter
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Alex
 */
namespace AlexModules\CurrencyConverter\Block;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use AlexModules\CurrencyConverter\Model\CurrencyData;

/**
 * Class ExchangeRate
 * @package AlexModules\CurrencyConverter\Block
 */
class ExchangeRate extends Template
{
    /**
     * @var CurrencyData
     */
    private $currencyData;

    /**
     * ExchangeRate constructor.
     * @param Context $context
     * @param CurrencyData $currencyData  - getting currency exchanging rating from
     * AlexModules\CurrencyConverter\Model\CurrencyData
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
