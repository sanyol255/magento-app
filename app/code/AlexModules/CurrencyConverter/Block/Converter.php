<?php
namespace AlexModules\CurrencyConverter\Block;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use AlexModules\CurrencyConverter\Model\CurrencyData;

class Converter extends Template
{
    private $currencyData;

    public function __construct(Context $context, CurrencyData $currencyData, array $data = [])
    {
        $this->currencyData = $currencyData;
        parent::__construct($context, $data);
    }

    public function getCurrency()
    {
        return $this->currencyData;
    }
}
