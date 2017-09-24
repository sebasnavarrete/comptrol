<?php

use Faker\Factory as Faker;
use App\Models\ProjectStatus;
use App\Repositories\ProjectStatusRepository;

trait MakeProjectStatusTrait
{
    /**
     * Create fake instance of ProjectStatus and save it in database
     *
     * @param array $projectStatusFields
     * @return ProjectStatus
     */
    public function makeProjectStatus($projectStatusFields = [])
    {
        /** @var ProjectStatusRepository $projectStatusRepo */
        $projectStatusRepo = App::make(ProjectStatusRepository::class);
        $theme = $this->fakeProjectStatusData($projectStatusFields);
        return $projectStatusRepo->create($theme);
    }

    /**
     * Get fake instance of ProjectStatus
     *
     * @param array $projectStatusFields
     * @return ProjectStatus
     */
    public function fakeProjectStatus($projectStatusFields = [])
    {
        return new ProjectStatus($this->fakeProjectStatusData($projectStatusFields));
    }

    /**
     * Get fake data of ProjectStatus
     *
     * @param array $postFields
     * @return array
     */
    public function fakeProjectStatusData($projectStatusFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'name' => $fake->word,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s'),
            'deleted_at' => $fake->date('Y-m-d H:i:s')
        ], $projectStatusFields);
    }
}
