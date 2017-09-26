<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserRoleApiTest extends TestCase
{
    use MakeUserRoleTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateUserRole()
    {
        $userRole = $this->fakeUserRoleData();
        $this->json('POST', '/api/v1/userRoles', $userRole);

        $this->assertApiResponse($userRole);
    }

    /**
     * @test
     */
    public function testReadUserRole()
    {
        $userRole = $this->makeUserRole();
        $this->json('GET', '/api/v1/userRoles/'.$userRole->id);

        $this->assertApiResponse($userRole->toArray());
    }

    /**
     * @test
     */
    public function testUpdateUserRole()
    {
        $userRole = $this->makeUserRole();
        $editedUserRole = $this->fakeUserRoleData();

        $this->json('PUT', '/api/v1/userRoles/'.$userRole->id, $editedUserRole);

        $this->assertApiResponse($editedUserRole);
    }

    /**
     * @test
     */
    public function testDeleteUserRole()
    {
        $userRole = $this->makeUserRole();
        $this->json('DELETE', '/api/v1/userRoles/'.$userRole->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/userRoles/'.$userRole->id);

        $this->assertResponseStatus(404);
    }
}
