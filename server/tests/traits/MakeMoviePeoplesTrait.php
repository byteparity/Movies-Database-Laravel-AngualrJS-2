<?php

use Faker\Factory as Faker;
use App\Models\MoviePeoples;
use App\Repositories\MoviePeoplesRepository;

trait MakeMoviePeoplesTrait
{
    /**
     * Create fake instance of MoviePeoples and save it in database
     *
     * @param array $moviePeoplesFields
     * @return MoviePeoples
     */
    public function makeMoviePeoples($moviePeoplesFields = [])
    {
        /** @var MoviePeoplesRepository $moviePeoplesRepo */
        $moviePeoplesRepo = App::make(MoviePeoplesRepository::class);
        $theme = $this->fakeMoviePeoplesData($moviePeoplesFields);
        return $moviePeoplesRepo->create($theme);
    }

    /**
     * Get fake instance of MoviePeoples
     *
     * @param array $moviePeoplesFields
     * @return MoviePeoples
     */
    public function fakeMoviePeoples($moviePeoplesFields = [])
    {
        return new MoviePeoples($this->fakeMoviePeoplesData($moviePeoplesFields));
    }

    /**
     * Get fake data of MoviePeoples
     *
     * @param array $postFields
     * @return array
     */
    public function fakeMoviePeoplesData($moviePeoplesFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'movie_id' => $fake->randomDigitNotNull,
            'people_id' => $fake->randomDigitNotNull,
            'proffession_id' => $fake->randomDigitNotNull,
            'name_in_movie' => $fake->word,
            'character_in_movie' => $fake->word,
            'movie_people_description' => $fake->text,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $moviePeoplesFields);
    }
}
