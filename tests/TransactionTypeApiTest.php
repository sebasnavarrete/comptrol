<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TransactionTypeApiTest extends TestCase
{
    use MakeTransactionTypeTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateTransactionType()
    {
        $transactionType = $this->fakeTransactionTypeData();
        $this->json('POST', '/api/v1/transactionTypes', $transactionType);

        $this->assertApiResponse($transactionType);
    }

    /**
     * @test
     */
    public function testReadTransactionType()
    {
        $transactionType = $this->makeTransactionType();
        $this->json('GET', '/api/v1/transactionTypes/'.$transactionType->id);

        $this->assertApiResponse($transactionType->toArray());
    }

    /**
     * @test
     */
    public function testUpdateTransactionType()
    {
        $transactionType = $this->makeTransactionType();
        $editedTransactionType = $this->fakeTransactionTypeData();

        $this->json('PUT', '/api/v1/transactionTypes/'.$transactionType->id, $editedTransactionType);

        $this->assertApiResponse($editedTransactionType);
    }

    /**
     * @test
     */
    public function testDeleteTransactionType()
    {
        $transactionType = $this->makeTransactionType();
        $this->json('DELETE', '/api/v1/transactionTypes/'.$transactionType->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/transactionTypes/'.$transactionType->id);

        $this->assertResponseStatus(404);
    }
}
