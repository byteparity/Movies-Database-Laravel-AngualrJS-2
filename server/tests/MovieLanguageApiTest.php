<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MovieLanguageApiTest extends TestCase
{
    use MakeMovieLanguageTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateMovieLanguage()
    {
        $movieLanguage = $this->fakeMovieLanguageData();
        $this->json('POST', '/api/v1/movieLanguages', $movieLanguage);

        $this->assertApiResponse($movieLanguage);
    }

    /**
     * @test
     */
    public function testReadMovieLanguage()
    {
        $movieLanguage = $this->makeMovieLanguage();
        $this->json('GET', '/api/v1/movieLanguages/'.$movieLanguage->id);

        $this->assertApiResponse($movieLanguage->toArray());
    }

    /**
     * @test
     */
    public function testUpdateMovieLanguage()
    {
        $movieLanguage = $this->makeMovieLanguage();
        $editedMovieLanguage = $this->fakeMovieLanguageData();

        $this->json('PUT', '/api/v1/movieLanguages/'.$movieLanguage->id, $editedMovieLanguage);

        $this->assertApiResponse($editedMovieLanguage);
    }

    /**
     * @test
     */
    public function testDeleteMovieLanguage()
    {
        $movieLanguage = $this->makeMovieLanguage();
        $this->json('DELETE', '/api/v1/movieLanguages/'.$movieLanguage->iidd);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/movieLanguages/'.$movieLanguage->id);

        $this->assertResponseStatus(404);
    }
}
