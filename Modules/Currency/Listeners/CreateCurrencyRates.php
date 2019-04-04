<?php

namespace Modules\Currency\Listeners;

use Modules\Setting\Events\SettingSaved;
use Modules\Currency\Entities\CurrencyRate;

class CreateCurrencyRates
{
    /**
     * Handle the event.
     *
     * @param \Modules\Setting\Events\SettingSaved $event
     * @return void
     */
    public function handle(SettingSaved $event)
    {
        CurrencyRate::insert($this->rates());
    }

    /**
     * Get the currency rates.
     *
     * @return array
     */
    private function rates()
    {
        $currencyRates = CurrencyRate::pluck('currency');
        $defaultCurrency = request('default_currency');

        return collect(request('supported_currencies'))->reject(function ($currency) use ($defaultCurrency, $currencyRates) {
            return $currencyRates->contains($currency);
        })->map(function ($currency) use ($defaultCurrency) {
            return [
                'currency' => $currency,
                'rate' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        })->all();
    }
}
