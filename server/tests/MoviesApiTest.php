<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MoviesApiTest extends TestCase
{
    use MakeMoviesTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateMovies()
    {
        $movies = $this->fakeMoviesData();
        $this->json('POST', '/api/v1/movies', $movies);

        $this->assertApiResponse($movies);
    }

    /**
     * @test
     */
    public function testReadMovies()
    {
        $movies = $this->makeMovies();
        $this->json('GET', '/api/v1/movies/'.$movies->id);

        $this->assertApiResponse($movies->toArray());
    }

    /**
     * @test
     */
    public function testUpdateMovies()
    {
        $movies = $this->makeMovies();
        $editedMovies = $this->fakeMoviesData();

        $this->json('PUT', '/api/v1/movies/'.$movies->id, $editedMovies);

        $this->assertApiResponse($editedMovies);
    }

    /**
     * @test
     */
    public function testDeleteMovies()
    {
        $movies = $this->makeMovies();
        $this->json('DELETE', '/api/v1/movies/'.$movies->iidd);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/movies/'.$movies->id);

        $this->assertResponseStatus(404);
    }
}
