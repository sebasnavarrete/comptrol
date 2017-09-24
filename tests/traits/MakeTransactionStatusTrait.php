<?php

use Faker\Factory as Faker;
use App\Models\TransactionStatus;
use App\Repositories\TransactionStatusRepository;

trait MakeTransactionStatusTrait
{
    /**
     * Create fake instance of TransactionStatus and save it in database
     *
     * @param array $transactionStatusFields
     * @return TransactionStatus
     */
    public function makeTransactionStatus($transactionStatusFields = [])
    {
        /** @var TransactionStatusRepository $transactionStatusRepo */
        $transactionStatusRepo = App::make(TransactionStatusRepository::class);
        $theme = $this->fakeTransactionStatusData($transactionStatusFields);
        return $transactionStatusRepo->create($theme);
    }

    /**
     * Get fake instance of TransactionStatus
     *
     * @param array $transactionStatusFields
     * @return TransactionStatus
     */
    public function fakeTransactionStatus($transactionStatusFields = [])
    {
        return new TransactionStatus($this->fakeTransactionStatusData($transactionStatusFields));
    }

    /**
     * Get fake data of TransactionStatus
     *
     * @param array $postFields
     * @return array
     */
    public function fakeTransactionStatusData($transactionStatusFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'name' => $fake->word,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s'),
            'deleted_at' => $fake->date('Y-m-d H:i:s')
        ], $transactionStatusFields);
    }
}
