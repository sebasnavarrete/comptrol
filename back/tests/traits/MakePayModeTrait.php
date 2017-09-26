<?php

use Faker\Factory as Faker;
use App\Models\PayMode;
use App\Repositories\PayModeRepository;

trait MakePayModeTrait
{
    /**
     * Create fake instance of PayMode and save it in database
     *
     * @param array $payModeFields
     * @return PayMode
     */
    public function makePayMode($payModeFields = [])
    {
        /** @var PayModeRepository $payModeRepo */
        $payModeRepo = App::make(PayModeRepository::class);
        $theme = $this->fakePayModeData($payModeFields);
        return $payModeRepo->create($theme);
    }

    /**
     * Get fake instance of PayMode
     *
     * @param array $payModeFields
     * @return PayMode
     */
    public function fakePayMode($payModeFields = [])
    {
        return new PayMode($this->fakePayModeData($payModeFields));
    }

    /**
     * Get fake data of PayMode
     *
     * @param array $postFields
     * @return array
     */
    public function fakePayModeData($payModeFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'name' => $fake->word,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s'),
            'deleted_at' => $fake->date('Y-m-d H:i:s')
        ], $payModeFields);
    }
}
