<?php

use Faker\Factory as Faker;
use App\Models\Movies;
use App\Repositories\MoviesRepository;

trait MakeMoviesTrait
{
    /**
     * Create fake instance of Movies and save it in database
     *
     * @param array $moviesFields
     * @return Movies
     */
    public function makeMovies($moviesFields = [])
    {
        /** @var MoviesRepository $moviesRepo */
        $moviesRepo = App::make(MoviesRepository::class);
        $theme = $this->fakeMoviesData($moviesFields);
        return $moviesRepo->create($theme);
    }

    /**
     * Get fake instance of Movies
     *
     * @param array $moviesFields
     * @return Movies
     */
    public function fakeMovies($moviesFields = [])
    {
        return new Movies($this->fakeMoviesData($moviesFields));
    }

    /**
     * Get fake data of Movies
     *
     * @param array $postFields
     * @return array
     */
    public function fakeMoviesData($moviesFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'title' => $fake->word,
            'running_time' => $fake->word,
            'release_date' => $fake->word,
            'image' => $fake->word,
            'movie_description' => $fake->text,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $moviesFields);
    }
}
