<?php

use App\Models\TransactionStatus;
use App\Repositories\TransactionStatusRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TransactionStatusRepositoryTest extends TestCase
{
    use MakeTransactionStatusTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var TransactionStatusRepository
     */
    protected $transactionStatusRepo;

    public function setUp()
    {
        parent::setUp();
        $this->transactionStatusRepo = App::make(TransactionStatusRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateTransactionStatus()
    {
        $transactionStatus = $this->fakeTransactionStatusData();
        $createdTransactionStatus = $this->transactionStatusRepo->create($transactionStatus);
        $createdTransactionStatus = $createdTransactionStatus->toArray();
        $this->assertArrayHasKey('id', $createdTransactionStatus);
        $this->assertNotNull($createdTransactionStatus['id'], 'Created TransactionStatus must have id specified');
        $this->assertNotNull(TransactionStatus::find($createdTransactionStatus['id']), 'TransactionStatus with given id must be in DB');
        $this->assertModelData($transactionStatus, $createdTransactionStatus);
    }

    /**
     * @test read
     */
    public function testReadTransactionStatus()
    {
        $transactionStatus = $this->makeTransactionStatus();
        $dbTransactionStatus = $this->transactionStatusRepo->find($transactionStatus->id);
        $dbTransactionStatus = $dbTransactionStatus->toArray();
        $this->assertModelData($transactionStatus->toArray(), $dbTransactionStatus);
    }

    /**
     * @test update
     */
    public function testUpdateTransactionStatus()
    {
        $transactionStatus = $this->makeTransactionStatus();
        $fakeTransactionStatus = $this->fakeTransactionStatusData();
        $updatedTransactionStatus = $this->transactionStatusRepo->update($fakeTransactionStatus, $transactionStatus->id);
        $this->assertModelData($fakeTransactionStatus, $updatedTransactionStatus->toArray());
        $dbTransactionStatus = $this->transactionStatusRepo->find($transactionStatus->id);
        $this->assertModelData($fakeTransactionStatus, $dbTransactionStatus->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteTransactionStatus()
    {
        $transactionStatus = $this->makeTransactionStatus();
        $resp = $this->transactionStatusRepo->delete($transactionStatus->id);
        $this->assertTrue($resp);
        $this->assertNull(TransactionStatus::find($transactionStatus->id), 'TransactionStatus should not exist in DB');
    }
}
