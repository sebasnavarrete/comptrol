<?php

use App\Models\UserRole;
use App\Repositories\UserRoleRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserRoleRepositoryTest extends TestCase
{
    use MakeUserRoleTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var UserRoleRepository
     */
    protected $userRoleRepo;

    public function setUp()
    {
        parent::setUp();
        $this->userRoleRepo = App::make(UserRoleRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateUserRole()
    {
        $userRole = $this->fakeUserRoleData();
        $createdUserRole = $this->userRoleRepo->create($userRole);
        $createdUserRole = $createdUserRole->toArray();
        $this->assertArrayHasKey('id', $createdUserRole);
        $this->assertNotNull($createdUserRole['id'], 'Created UserRole must have id specified');
        $this->assertNotNull(UserRole::find($createdUserRole['id']), 'UserRole with given id must be in DB');
        $this->assertModelData($userRole, $createdUserRole);
    }

    /**
     * @test read
     */
    public function testReadUserRole()
    {
        $userRole = $this->makeUserRole();
        $dbUserRole = $this->userRoleRepo->find($userRole->id);
        $dbUserRole = $dbUserRole->toArray();
        $this->assertModelData($userRole->toArray(), $dbUserRole);
    }

    /**
     * @test update
     */
    public function testUpdateUserRole()
    {
        $userRole = $this->makeUserRole();
        $fakeUserRole = $this->fakeUserRoleData();
        $updatedUserRole = $this->userRoleRepo->update($fakeUserRole, $userRole->id);
        $this->assertModelData($fakeUserRole, $updatedUserRole->toArray());
        $dbUserRole = $this->userRoleRepo->find($userRole->id);
        $this->assertModelData($fakeUserRole, $dbUserRole->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteUserRole()
    {
        $userRole = $this->makeUserRole();
        $resp = $this->userRoleRepo->delete($userRole->id);
        $this->assertTrue($resp);
        $this->assertNull(UserRole::find($userRole->id), 'UserRole should not exist in DB');
    }
}
