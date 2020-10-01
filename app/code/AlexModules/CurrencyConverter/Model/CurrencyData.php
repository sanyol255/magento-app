<?php
/**
 * Model CurrencyData

 * @category  AlexModules
 * @package   AlexModules\CurrencyConverter
 * @author    Kovalchuk Oleksandr sanyol255@gmail.com
 * @copyright 2020 Alex
 */
namespace AlexModules\CurrencyConverter\Model;

/**
 * Class CurrencyData - exchange rating for dollar, euro and rouble in grivnias
 * @package AlexModules\CurrencyConverter\Model
 */
class CurrencyData
{
    /**
     * @var int
     */
    protected $dollar = 28;
    /**
     * @var int
     */
    protected $euro = 33;
    /**
     * @var float
     */
    protected $rouble = 0.4;

    /**
     * @return string
     */
    public function dollarExchangeRate()
    {
        return 'Долар: ' . $this->dollar;
    }

    /**
     * @return string
     */
    public function euroExchangeRate()
    {
        return 'Євро: ' . $this->euro;
    }

    /**
     * @return string
     */
    public function roubleExchangeRate()
    {
        return 'Рубль: ' . $this->rouble;
    }
}
