<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TransactionStatusApiTest extends TestCase
{
    use MakeTransactionStatusTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateTransactionStatus()
    {
        $transactionStatus = $this->fakeTransactionStatusData();
        $this->json('POST', '/api/v1/transactionStatuses', $transactionStatus);

        $this->assertApiResponse($transactionStatus);
    }

    /**
     * @test
     */
    public function testReadTransactionStatus()
    {
        $transactionStatus = $this->makeTransactionStatus();
        $this->json('GET', '/api/v1/transactionStatuses/'.$transactionStatus->id);

        $this->assertApiResponse($transactionStatus->toArray());
    }

    /**
     * @test
     */
    public function testUpdateTransactionStatus()
    {
        $transactionStatus = $this->makeTransactionStatus();
        $editedTransactionStatus = $this->fakeTransactionStatusData();

        $this->json('PUT', '/api/v1/transactionStatuses/'.$transactionStatus->id, $editedTransactionStatus);

        $this->assertApiResponse($editedTransactionStatus);
    }

    /**
     * @test
     */
    public function testDeleteTransactionStatus()
    {
        $transactionStatus = $this->makeTransactionStatus();
        $this->json('DELETE', '/api/v1/transactionStatuses/'.$transactionStatus->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/transactionStatuses/'.$transactionStatus->id);

        $this->assertResponseStatus(404);
    }
}
