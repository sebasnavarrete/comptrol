<?php

use Faker\Factory as Faker;
use App\Models\Currency;
use App\Repositories\CurrencyRepository;

trait MakeCurrencyTrait
{
    /**
     * Create fake instance of Currency and save it in database
     *
     * @param array $currencyFields
     * @return Currency
     */
    public function makeCurrency($currencyFields = [])
    {
        /** @var CurrencyRepository $currencyRepo */
        $currencyRepo = App::make(CurrencyRepository::class);
        $theme = $this->fakeCurrencyData($currencyFields);
        return $currencyRepo->create($theme);
    }

    /**
     * Get fake instance of Currency
     *
     * @param array $currencyFields
     * @return Currency
     */
    public function fakeCurrency($currencyFields = [])
    {
        return new Currency($this->fakeCurrencyData($currencyFields));
    }

    /**
     * Get fake data of Currency
     *
     * @param array $postFields
     * @return array
     */
    public function fakeCurrencyData($currencyFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'name' => $fake->word,
            'symbol' => $fake->word,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s'),
            'deleted_at' => $fake->date('Y-m-d H:i:s')
        ], $currencyFields);
    }
}
