<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PeoplesApiTest extends TestCase
{
    use MakePeoplesTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreatePeoples()
    {
        $peoples = $this->fakePeoplesData();
        $this->json('POST', '/api/v1/peoples', $peoples);

        $this->assertApiResponse($peoples);
    }

    /**
     * @test
     */
    public function testReadPeoples()
    {
        $peoples = $this->makePeoples();
        $this->json('GET', '/api/v1/peoples/'.$peoples->id);

        $this->assertApiResponse($peoples->toArray());
    }

    /**
     * @test
     */
    public function testUpdatePeoples()
    {
        $peoples = $this->makePeoples();
        $editedPeoples = $this->fakePeoplesData();

        $this->json('PUT', '/api/v1/peoples/'.$peoples->id, $editedPeoples);

        $this->assertApiResponse($editedPeoples);
    }

    /**
     * @test
     */
    public function testDeletePeoples()
    {
        $peoples = $this->makePeoples();
        $this->json('DELETE', '/api/v1/peoples/'.$peoples->iidd);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/peoples/'.$peoples->id);

        $this->assertResponseStatus(404);
    }
}
