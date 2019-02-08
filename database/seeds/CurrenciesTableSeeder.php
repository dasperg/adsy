<?php

use App\Currency;
use Illuminate\Database\Seeder;

class CurrenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Default currency [CHF]
        $currency = new Currency();
        $currency->id = Currency::CHF;
        $currency->default = true;
        $currency->code = 'CHF';
        $currency->save();

        //2nd common currency [EUR]
        $currency = new Currency();
        $currency->id = Currency::EUR;
        $currency->default = false;
        $currency->code = 'EUR';
        $currency->save();

        //3rd common currency [USD]
        $currency = new Currency();
        $currency->id = Currency::USD;
        $currency->default = false;
        $currency->code = 'USD';
        $currency->save();
    }
}
