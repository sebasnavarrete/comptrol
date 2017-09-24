<?php

use Faker\Factory as Faker;
use App\Models\Project;
use App\Repositories\ProjectRepository;

trait MakeProjectTrait
{
    /**
     * Create fake instance of Project and save it in database
     *
     * @param array $projectFields
     * @return Project
     */
    public function makeProject($projectFields = [])
    {
        /** @var ProjectRepository $projectRepo */
        $projectRepo = App::make(ProjectRepository::class);
        $theme = $this->fakeProjectData($projectFields);
        return $projectRepo->create($theme);
    }

    /**
     * Get fake instance of Project
     *
     * @param array $projectFields
     * @return Project
     */
    public function fakeProject($projectFields = [])
    {
        return new Project($this->fakeProjectData($projectFields));
    }

    /**
     * Get fake data of Project
     *
     * @param array $postFields
     * @return array
     */
    public function fakeProjectData($projectFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'name' => $fake->word,
            'type' => $fake->randomDigitNotNull,
            'status' => $fake->randomDigitNotNull,
            'cost' => $fake->randomDigitNotNull,
            'budget' => $fake->randomDigitNotNull,
            'currency' => $fake->randomDigitNotNull,
            'payMode' => $fake->randomDigitNotNull,
            'commission' => $fake->randomDigitNotNull,
            'oTime' => $fake->randomDigitNotNull,
            'pTime' => $fake->randomDigitNotNull,
            'mTime' => $fake->randomDigitNotNull,
            'eTime' => $fake->randomDigitNotNull,
            'dailyDedication' => $fake->randomDigitNotNull,
            'initialDate' => $fake->date('Y-m-d H:i:s'),
            'internalDeadline' => $fake->date('Y-m-d H:i:s'),
            'clientDeadline' => $fake->date('Y-m-d H:i:s'),
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s'),
            'deleted_at' => $fake->date('Y-m-d H:i:s')
        ], $projectFields);
    }
}
