<?php

use Faker\Factory as Faker;
use App\Models\UserRole;
use App\Repositories\UserRoleRepository;

trait MakeUserRoleTrait
{
    /**
     * Create fake instance of UserRole and save it in database
     *
     * @param array $userRoleFields
     * @return UserRole
     */
    public function makeUserRole($userRoleFields = [])
    {
        /** @var UserRoleRepository $userRoleRepo */
        $userRoleRepo = App::make(UserRoleRepository::class);
        $theme = $this->fakeUserRoleData($userRoleFields);
        return $userRoleRepo->create($theme);
    }

    /**
     * Get fake instance of UserRole
     *
     * @param array $userRoleFields
     * @return UserRole
     */
    public function fakeUserRole($userRoleFields = [])
    {
        return new UserRole($this->fakeUserRoleData($userRoleFields));
    }

    /**
     * Get fake data of UserRole
     *
     * @param array $postFields
     * @return array
     */
    public function fakeUserRoleData($userRoleFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'name' => $fake->word,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s'),
            'deleted_at' => $fake->date('Y-m-d H:i:s')
        ], $userRoleFields);
    }
}
