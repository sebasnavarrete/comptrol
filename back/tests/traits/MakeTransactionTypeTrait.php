<?php

use Faker\Factory as Faker;
use App\Models\TransactionType;
use App\Repositories\TransactionTypeRepository;

trait MakeTransactionTypeTrait
{
    /**
     * Create fake instance of TransactionType and save it in database
     *
     * @param array $transactionTypeFields
     * @return TransactionType
     */
    public function makeTransactionType($transactionTypeFields = [])
    {
        /** @var TransactionTypeRepository $transactionTypeRepo */
        $transactionTypeRepo = App::make(TransactionTypeRepository::class);
        $theme = $this->fakeTransactionTypeData($transactionTypeFields);
        return $transactionTypeRepo->create($theme);
    }

    /**
     * Get fake instance of TransactionType
     *
     * @param array $transactionTypeFields
     * @return TransactionType
     */
    public function fakeTransactionType($transactionTypeFields = [])
    {
        return new TransactionType($this->fakeTransactionTypeData($transactionTypeFields));
    }

    /**
     * Get fake data of TransactionType
     *
     * @param array $postFields
     * @return array
     */
    public function fakeTransactionTypeData($transactionTypeFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'name' => $fake->word,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s'),
            'deleted_at' => $fake->date('Y-m-d H:i:s')
        ], $transactionTypeFields);
    }
}
