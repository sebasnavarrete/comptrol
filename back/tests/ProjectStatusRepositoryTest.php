<?php

use App\Models\ProjectStatus;
use App\Repositories\ProjectStatusRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProjectStatusRepositoryTest extends TestCase
{
    use MakeProjectStatusTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var ProjectStatusRepository
     */
    protected $projectStatusRepo;

    public function setUp()
    {
        parent::setUp();
        $this->projectStatusRepo = App::make(ProjectStatusRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateProjectStatus()
    {
        $projectStatus = $this->fakeProjectStatusData();
        $createdProjectStatus = $this->projectStatusRepo->create($projectStatus);
        $createdProjectStatus = $createdProjectStatus->toArray();
        $this->assertArrayHasKey('id', $createdProjectStatus);
        $this->assertNotNull($createdProjectStatus['id'], 'Created ProjectStatus must have id specified');
        $this->assertNotNull(ProjectStatus::find($createdProjectStatus['id']), 'ProjectStatus with given id must be in DB');
        $this->assertModelData($projectStatus, $createdProjectStatus);
    }

    /**
     * @test read
     */
    public function testReadProjectStatus()
    {
        $projectStatus = $this->makeProjectStatus();
        $dbProjectStatus = $this->projectStatusRepo->find($projectStatus->id);
        $dbProjectStatus = $dbProjectStatus->toArray();
        $this->assertModelData($projectStatus->toArray(), $dbProjectStatus);
    }

    /**
     * @test update
     */
    public function testUpdateProjectStatus()
    {
        $projectStatus = $this->makeProjectStatus();
        $fakeProjectStatus = $this->fakeProjectStatusData();
        $updatedProjectStatus = $this->projectStatusRepo->update($fakeProjectStatus, $projectStatus->id);
        $this->assertModelData($fakeProjectStatus, $updatedProjectStatus->toArray());
        $dbProjectStatus = $this->projectStatusRepo->find($projectStatus->id);
        $this->assertModelData($fakeProjectStatus, $dbProjectStatus->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteProjectStatus()
    {
        $projectStatus = $this->makeProjectStatus();
        $resp = $this->projectStatusRepo->delete($projectStatus->id);
        $this->assertTrue($resp);
        $this->assertNull(ProjectStatus::find($projectStatus->id), 'ProjectStatus should not exist in DB');
    }
}
