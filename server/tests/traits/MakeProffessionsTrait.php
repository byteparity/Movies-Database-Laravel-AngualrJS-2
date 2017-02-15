<?php

use Faker\Factory as Faker;
use App\Models\Proffessions;
use App\Repositories\ProffessionsRepository;

trait MakeProffessionsTrait
{
    /**
     * Create fake instance of Proffessions and save it in database
     *
     * @param array $proffessionsFields
     * @return Proffessions
     */
    public function makeProffessions($proffessionsFields = [])
    {
        /** @var ProffessionsRepository $proffessionsRepo */
        $proffessionsRepo = App::make(ProffessionsRepository::class);
        $theme = $this->fakeProffessionsData($proffessionsFields);
        return $proffessionsRepo->create($theme);
    }

    /**
     * Get fake instance of Proffessions
     *
     * @param array $proffessionsFields
     * @return Proffessions
     */
    public function fakeProffessions($proffessionsFields = [])
    {
        return new Proffessions($this->fakeProffessionsData($proffessionsFields));
    }

    /**
     * Get fake data of Proffessions
     *
     * @param array $postFields
     * @return array
     */
    public function fakeProffessionsData($proffessionsFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'proffession_type' => $fake->word,
            'proffession_description' => $fake->text,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $proffessionsFields);
    }
}
