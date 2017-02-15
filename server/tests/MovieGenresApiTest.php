<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MovieGenresApiTest extends TestCase
{
    use MakeMovieGenresTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateMovieGenres()
    {
        $movieGenres = $this->fakeMovieGenresData();
        $this->json('POST', '/api/v1/movieGenres', $movieGenres);

        $this->assertApiResponse($movieGenres);
    }

    /**
     * @test
     */
    public function testReadMovieGenres()
    {
        $movieGenres = $this->makeMovieGenres();
        $this->json('GET', '/api/v1/movieGenres/'.$movieGenres->id);

        $this->assertApiResponse($movieGenres->toArray());
    }

    /**
     * @test
     */
    public function testUpdateMovieGenres()
    {
        $movieGenres = $this->makeMovieGenres();
        $editedMovieGenres = $this->fakeMovieGenresData();

        $this->json('PUT', '/api/v1/movieGenres/'.$movieGenres->id, $editedMovieGenres);

        $this->assertApiResponse($editedMovieGenres);
    }

    /**
     * @test
     */
    public function testDeleteMovieGenres()
    {
        $movieGenres = $this->makeMovieGenres();
        $this->json('DELETE', '/api/v1/movieGenres/'.$movieGenres->iidd);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/movieGenres/'.$movieGenres->id);

        $this->assertResponseStatus(404);
    }
}
