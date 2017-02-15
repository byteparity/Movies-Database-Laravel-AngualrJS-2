<?php

use Faker\Factory as Faker;
use App\Models\Peoples;
use App\Repositories\PeoplesRepository;

trait MakePeoplesTrait
{
    /**
     * Create fake instance of Peoples and save it in database
     *
     * @param array $peoplesFields
     * @return Peoples
     */
    public function makePeoples($peoplesFields = [])
    {
        /** @var PeoplesRepository $peoplesRepo */
        $peoplesRepo = App::make(PeoplesRepository::class);
        $theme = $this->fakePeoplesData($peoplesFields);
        return $peoplesRepo->create($theme);
    }

    /**
     * Get fake instance of Peoples
     *
     * @param array $peoplesFields
     * @return Peoples
     */
    public function fakePeoples($peoplesFields = [])
    {
        return new Peoples($this->fakePeoplesData($peoplesFields));
    }

    /**
     * Get fake data of Peoples
     *
     * @param array $postFields
     * @return array
     */
    public function fakePeoplesData($peoplesFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'first_name' => $fake->word,
            'last_name' => $fake->word,
            'gender' => $fake->randomDigitNotNull,
            'born_date' => $fake->word,
            'people_image' => $fake->word,
            'people_description' => $fake->text,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $peoplesFields);
    }
}
