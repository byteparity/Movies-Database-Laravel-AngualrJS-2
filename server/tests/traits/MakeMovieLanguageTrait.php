<?php

use Faker\Factory as Faker;
use App\Models\MovieLanguage;
use App\Repositories\MovieLanguageRepository;

trait MakeMovieLanguageTrait
{
    /**
     * Create fake instance of MovieLanguage and save it in database
     *
     * @param array $movieLanguageFields
     * @return MovieLanguage
     */
    public function makeMovieLanguage($movieLanguageFields = [])
    {
        /** @var MovieLanguageRepository $movieLanguageRepo */
        $movieLanguageRepo = App::make(MovieLanguageRepository::class);
        $theme = $this->fakeMovieLanguageData($movieLanguageFields);
        return $movieLanguageRepo->create($theme);
    }

    /**
     * Get fake instance of MovieLanguage
     *
     * @param array $movieLanguageFields
     * @return MovieLanguage
     */
    public function fakeMovieLanguage($movieLanguageFields = [])
    {
        return new MovieLanguage($this->fakeMovieLanguageData($movieLanguageFields));
    }

    /**
     * Get fake data of MovieLanguage
     *
     * @param array $postFields
     * @return array
     */
    public function fakeMovieLanguageData($movieLanguageFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'lang_name' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $movieLanguageFields);
    }
}
