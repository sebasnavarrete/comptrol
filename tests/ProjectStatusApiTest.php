<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProjectStatusApiTest extends TestCase
{
    use MakeProjectStatusTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateProjectStatus()
    {
        $projectStatus = $this->fakeProjectStatusData();
        $this->json('POST', '/api/v1/projectStatuses', $projectStatus);

        $this->assertApiResponse($projectStatus);
    }

    /**
     * @test
     */
    public function testReadProjectStatus()
    {
        $projectStatus = $this->makeProjectStatus();
        $this->json('GET', '/api/v1/projectStatuses/'.$projectStatus->id);

        $this->assertApiResponse($projectStatus->toArray());
    }

    /**
     * @test
     */
    public function testUpdateProjectStatus()
    {
        $projectStatus = $this->makeProjectStatus();
        $editedProjectStatus = $this->fakeProjectStatusData();

        $this->json('PUT', '/api/v1/projectStatuses/'.$projectStatus->id, $editedProjectStatus);

        $this->assertApiResponse($editedProjectStatus);
    }

    /**
     * @test
     */
    public function testDeleteProjectStatus()
    {
        $projectStatus = $this->makeProjectStatus();
        $this->json('DELETE', '/api/v1/projectStatuses/'.$projectStatus->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/projectStatuses/'.$projectStatus->id);

        $this->assertResponseStatus(404);
    }
}
