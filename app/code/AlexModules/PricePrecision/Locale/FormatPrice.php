<?php
/**
 * Module PricePrecision registration

 * @category  AlexModules
 * @package   AlexModules\PricePrecision
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Alex
 */
namespace AlexModules\PricePrecision\Locale;

use Magento\Framework\Locale\Format;

/**
 * Class FormatPrice
 * @package AlexModules\PricePrecision\Locale
 */
class FormatPrice extends Format
{
    /**
     * Changing price precision from 2 decimal places to 1
     * @param null $localeCode
     * @param null $currencyCode
     * @return array
     */
    public function getPriceFormat($localeCode = null, $currencyCode = null)
    {
        $result = parent::getPriceFormat($localeCode, $currencyCode);
        $result['precision'] = 1;
        $result['requiredPrecision'] = 1;
        return $result;
    }
}
