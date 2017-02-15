<?php

use Faker\Factory as Faker;
use App\Models\MovieReviews;
use App\Repositories\MovieReviewsRepository;

trait MakeMovieReviewsTrait
{
    /**
     * Create fake instance of MovieReviews and save it in database
     *
     * @param array $movieReviewsFields
     * @return MovieReviews
     */
    public function makeMovieReviews($movieReviewsFields = [])
    {
        /** @var MovieReviewsRepository $movieReviewsRepo */
        $movieReviewsRepo = App::make(MovieReviewsRepository::class);
        $theme = $this->fakeMovieReviewsData($movieReviewsFields);
        return $movieReviewsRepo->create($theme);
    }

    /**
     * Get fake instance of MovieReviews
     *
     * @param array $movieReviewsFields
     * @return MovieReviews
     */
    public function fakeMovieReviews($movieReviewsFields = [])
    {
        return new MovieReviews($this->fakeMovieReviewsData($movieReviewsFields));
    }

    /**
     * Get fake data of MovieReviews
     *
     * @param array $postFields
     * @return array
     */
    public function fakeMovieReviewsData($movieReviewsFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'movie_id' => $fake->randomDigitNotNull,
            'user_id' => $fake->randomDigitNotNull,
            'rating' => $fake->randomDigitNotNull,
            'rating_description' => $fake->text,
            'helpful_count' => $fake->randomDigitNotNull,
            'unhelpful_count' => $fake->randomDigitNotNull,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $movieReviewsFields);
    }
}
