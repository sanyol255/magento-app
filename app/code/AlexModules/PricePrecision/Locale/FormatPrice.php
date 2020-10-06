<?php
namespace AlexModules\PricePrecision\Locale;

use Magento\Framework\Locale\Format;

class FormatPrice extends Format
{
    public function getPriceFormat($localeCode = null, $currencyCode = null)
    {
        $result = parent::getPriceFormat($localeCode, $currencyCode);
        $result['precision'] = 1;
        $result['requiredPrecision'] = 1;
        return $result;
    }
}
