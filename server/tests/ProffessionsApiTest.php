<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProffessionsApiTest extends TestCase
{
    use MakeProffessionsTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateProffessions()
    {
        $proffessions = $this->fakeProffessionsData();
        $this->json('POST', '/api/v1/proffessions', $proffessions);

        $this->assertApiResponse($proffessions);
    }

    /**
     * @test
     */
    public function testReadProffessions()
    {
        $proffessions = $this->makeProffessions();
        $this->json('GET', '/api/v1/proffessions/'.$proffessions->id);

        $this->assertApiResponse($proffessions->toArray());
    }

    /**
     * @test
     */
    public function testUpdateProffessions()
    {
        $proffessions = $this->makeProffessions();
        $editedProffessions = $this->fakeProffessionsData();

        $this->json('PUT', '/api/v1/proffessions/'.$proffessions->id, $editedProffessions);

        $this->assertApiResponse($editedProffessions);
    }

    /**
     * @test
     */
    public function testDeleteProffessions()
    {
        $proffessions = $this->makeProffessions();
        $this->json('DELETE', '/api/v1/proffessions/'.$proffessions->iidd);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/proffessions/'.$proffessions->id);

        $this->assertResponseStatus(404);
    }
}
