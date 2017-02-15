<?php

use Faker\Factory as Faker;
use App\Models\MovieGenres;
use App\Repositories\MovieGenresRepository;

trait MakeMovieGenresTrait
{
    /**
     * Create fake instance of MovieGenres and save it in database
     *
     * @param array $movieGenresFields
     * @return MovieGenres
     */
    public function makeMovieGenres($movieGenresFields = [])
    {
        /** @var MovieGenresRepository $movieGenresRepo */
        $movieGenresRepo = App::make(MovieGenresRepository::class);
        $theme = $this->fakeMovieGenresData($movieGenresFields);
        return $movieGenresRepo->create($theme);
    }

    /**
     * Get fake instance of MovieGenres
     *
     * @param array $movieGenresFields
     * @return MovieGenres
     */
    public function fakeMovieGenres($movieGenresFields = [])
    {
        return new MovieGenres($this->fakeMovieGenresData($movieGenresFields));
    }

    /**
     * Get fake data of MovieGenres
     *
     * @param array $postFields
     * @return array
     */
    public function fakeMovieGenresData($movieGenresFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'movie_id' => $fake->randomDigitNotNull,
            'genre_id' => $fake->randomDigitNotNull,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $movieGenresFields);
    }
}
