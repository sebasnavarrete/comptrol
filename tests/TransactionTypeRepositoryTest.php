<?php

use App\Models\TransactionType;
use App\Repositories\TransactionTypeRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TransactionTypeRepositoryTest extends TestCase
{
    use MakeTransactionTypeTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var TransactionTypeRepository
     */
    protected $transactionTypeRepo;

    public function setUp()
    {
        parent::setUp();
        $this->transactionTypeRepo = App::make(TransactionTypeRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateTransactionType()
    {
        $transactionType = $this->fakeTransactionTypeData();
        $createdTransactionType = $this->transactionTypeRepo->create($transactionType);
        $createdTransactionType = $createdTransactionType->toArray();
        $this->assertArrayHasKey('id', $createdTransactionType);
        $this->assertNotNull($createdTransactionType['id'], 'Created TransactionType must have id specified');
        $this->assertNotNull(TransactionType::find($createdTransactionType['id']), 'TransactionType with given id must be in DB');
        $this->assertModelData($transactionType, $createdTransactionType);
    }

    /**
     * @test read
     */
    public function testReadTransactionType()
    {
        $transactionType = $this->makeTransactionType();
        $dbTransactionType = $this->transactionTypeRepo->find($transactionType->id);
        $dbTransactionType = $dbTransactionType->toArray();
        $this->assertModelData($transactionType->toArray(), $dbTransactionType);
    }

    /**
     * @test update
     */
    public function testUpdateTransactionType()
    {
        $transactionType = $this->makeTransactionType();
        $fakeTransactionType = $this->fakeTransactionTypeData();
        $updatedTransactionType = $this->transactionTypeRepo->update($fakeTransactionType, $transactionType->id);
        $this->assertModelData($fakeTransactionType, $updatedTransactionType->toArray());
        $dbTransactionType = $this->transactionTypeRepo->find($transactionType->id);
        $this->assertModelData($fakeTransactionType, $dbTransactionType->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteTransactionType()
    {
        $transactionType = $this->makeTransactionType();
        $resp = $this->transactionTypeRepo->delete($transactionType->id);
        $this->assertTrue($resp);
        $this->assertNull(TransactionType::find($transactionType->id), 'TransactionType should not exist in DB');
    }
}
