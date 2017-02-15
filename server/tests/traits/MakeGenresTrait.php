<?php

use Faker\Factory as Faker;
use App\Models\Genres;
use App\Repositories\GenresRepository;

trait MakeGenresTrait
{
    /**
     * Create fake instance of Genres and save it in database
     *
     * @param array $genresFields
     * @return Genres
     */
    public function makeGenres($genresFields = [])
    {
        /** @var GenresRepository $genresRepo */
        $genresRepo = App::make(GenresRepository::class);
        $theme = $this->fakeGenresData($genresFields);
        return $genresRepo->create($theme);
    }

    /**
     * Get fake instance of Genres
     *
     * @param array $genresFields
     * @return Genres
     */
    public function fakeGenres($genresFields = [])
    {
        return new Genres($this->fakeGenresData($genresFields));
    }

    /**
     * Get fake data of Genres
     *
     * @param array $postFields
     * @return array
     */
    public function fakeGenresData($genresFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'genre_type' => $fake->word,
            'genre_description' => $fake->text,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $genresFields);
    }
}
