<?php

use App\Models\PayMode;
use App\Repositories\PayModeRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PayModeRepositoryTest extends TestCase
{
    use MakePayModeTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var PayModeRepository
     */
    protected $payModeRepo;

    public function setUp()
    {
        parent::setUp();
        $this->payModeRepo = App::make(PayModeRepository::class);
    }

    /**
     * @test create
     */
    public function testCreatePayMode()
    {
        $payMode = $this->fakePayModeData();
        $createdPayMode = $this->payModeRepo->create($payMode);
        $createdPayMode = $createdPayMode->toArray();
        $this->assertArrayHasKey('id', $createdPayMode);
        $this->assertNotNull($createdPayMode['id'], 'Created PayMode must have id specified');
        $this->assertNotNull(PayMode::find($createdPayMode['id']), 'PayMode with given id must be in DB');
        $this->assertModelData($payMode, $createdPayMode);
    }

    /**
     * @test read
     */
    public function testReadPayMode()
    {
        $payMode = $this->makePayMode();
        $dbPayMode = $this->payModeRepo->find($payMode->id);
        $dbPayMode = $dbPayMode->toArray();
        $this->assertModelData($payMode->toArray(), $dbPayMode);
    }

    /**
     * @test update
     */
    public function testUpdatePayMode()
    {
        $payMode = $this->makePayMode();
        $fakePayMode = $this->fakePayModeData();
        $updatedPayMode = $this->payModeRepo->update($fakePayMode, $payMode->id);
        $this->assertModelData($fakePayMode, $updatedPayMode->toArray());
        $dbPayMode = $this->payModeRepo->find($payMode->id);
        $this->assertModelData($fakePayMode, $dbPayMode->toArray());
    }

    /**
     * @test delete
     */
    public function testDeletePayMode()
    {
        $payMode = $this->makePayMode();
        $resp = $this->payModeRepo->delete($payMode->id);
        $this->assertTrue($resp);
        $this->assertNull(PayMode::find($payMode->id), 'PayMode should not exist in DB');
    }
}
