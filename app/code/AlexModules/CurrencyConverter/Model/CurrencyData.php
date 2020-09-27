<?php
namespace AlexModules\CurrencyConverter\Model;

class CurrencyData
{
    //Exchange rating for dollar, euro and rouble in grivnias
    protected $dollar = 28;
    protected $euro = 33;
    protected $rouble = 0.4;

    public function dollarExchangeRate()
    {
        return 'Долар: ' . $this->dollar;
    }

    public function euroExchangeRate()
    {
        return 'Євро: ' . $this->euro;
    }

    public function roubleExchangeRate()
    {
        return 'Рубль: ' . $this->rouble;
    }
}
