<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MovieReviewsApiTest extends TestCase
{
    use MakeMovieReviewsTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateMovieReviews()
    {
        $movieReviews = $this->fakeMovieReviewsData();
        $this->json('POST', '/api/v1/movieReviews', $movieReviews);

        $this->assertApiResponse($movieReviews);
    }

    /**
     * @test
     */
    public function testReadMovieReviews()
    {
        $movieReviews = $this->makeMovieReviews();
        $this->json('GET', '/api/v1/movieReviews/'.$movieReviews->id);

        $this->assertApiResponse($movieReviews->toArray());
    }

    /**
     * @test
     */
    public function testUpdateMovieReviews()
    {
        $movieReviews = $this->makeMovieReviews();
        $editedMovieReviews = $this->fakeMovieReviewsData();

        $this->json('PUT', '/api/v1/movieReviews/'.$movieReviews->id, $editedMovieReviews);

        $this->assertApiResponse($editedMovieReviews);
    }

    /**
     * @test
     */
    public function testDeleteMovieReviews()
    {
        $movieReviews = $this->makeMovieReviews();
        $this->json('DELETE', '/api/v1/movieReviews/'.$movieReviews->iidd);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/movieReviews/'.$movieReviews->id);

        $this->assertResponseStatus(404);
    }
}
