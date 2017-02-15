<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class GenresApiTest extends TestCase
{
    use MakeGenresTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateGenres()
    {
        $genres = $this->fakeGenresData();
        $this->json('POST', '/api/v1/genres', $genres);

        $this->assertApiResponse($genres);
    }

    /**
     * @test
     */
    public function testReadGenres()
    {
        $genres = $this->makeGenres();
        $this->json('GET', '/api/v1/genres/'.$genres->id);

        $this->assertApiResponse($genres->toArray());
    }

    /**
     * @test
     */
    public function testUpdateGenres()
    {
        $genres = $this->makeGenres();
        $editedGenres = $this->fakeGenresData();

        $this->json('PUT', '/api/v1/genres/'.$genres->id, $editedGenres);

        $this->assertApiResponse($editedGenres);
    }

    /**
     * @test
     */
    public function testDeleteGenres()
    {
        $genres = $this->makeGenres();
        $this->json('DELETE', '/api/v1/genres/'.$genres->iidd);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/genres/'.$genres->id);

        $this->assertResponseStatus(404);
    }
}
