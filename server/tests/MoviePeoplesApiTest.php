<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MoviePeoplesApiTest extends TestCase
{
    use MakeMoviePeoplesTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateMoviePeoples()
    {
        $moviePeoples = $this->fakeMoviePeoplesData();
        $this->json('POST', '/api/v1/moviePeoples', $moviePeoples);

        $this->assertApiResponse($moviePeoples);
    }

    /**
     * @test
     */
    public function testReadMoviePeoples()
    {
        $moviePeoples = $this->makeMoviePeoples();
        $this->json('GET', '/api/v1/moviePeoples/'.$moviePeoples->id);

        $this->assertApiResponse($moviePeoples->toArray());
    }

    /**
     * @test
     */
    public function testUpdateMoviePeoples()
    {
        $moviePeoples = $this->makeMoviePeoples();
        $editedMoviePeoples = $this->fakeMoviePeoplesData();

        $this->json('PUT', '/api/v1/moviePeoples/'.$moviePeoples->id, $editedMoviePeoples);

        $this->assertApiResponse($editedMoviePeoples);
    }

    /**
     * @test
     */
    public function testDeleteMoviePeoples()
    {
        $moviePeoples = $this->makeMoviePeoples();
        $this->json('DELETE', '/api/v1/moviePeoples/'.$moviePeoples->iidd);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/moviePeoples/'.$moviePeoples->id);

        $this->assertResponseStatus(404);
    }
}
