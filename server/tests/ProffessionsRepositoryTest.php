<?php

use App\Models\Proffessions;
use App\Repositories\ProffessionsRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProffessionsRepositoryTest extends TestCase
{
    use MakeProffessionsTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var ProffessionsRepository
     */
    protected $proffessionsRepo;

    public function setUp()
    {
        parent::setUp();
        $this->proffessionsRepo = App::make(ProffessionsRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateProffessions()
    {
        $proffessions = $this->fakeProffessionsData();
        $createdProffessions = $this->proffessionsRepo->create($proffessions);
        $createdProffessions = $createdProffessions->toArray();
        $this->assertArrayHasKey('id', $createdProffessions);
        $this->assertNotNull($createdProffessions['id'], 'Created Proffessions must have id specified');
        $this->assertNotNull(Proffessions::find($createdProffessions['id']), 'Proffessions with given id must be in DB');
        $this->assertModelData($proffessions, $createdProffessions);
    }

    /**
     * @test read
     */
    public function testReadProffessions()
    {
        $proffessions = $this->makeProffessions();
        $dbProffessions = $this->proffessionsRepo->find($proffessions->id);
        $dbProffessions = $dbProffessions->toArray();
        $this->assertModelData($proffessions->toArray(), $dbProffessions);
    }

    /**
     * @test update
     */
    public function testUpdateProffessions()
    {
        $proffessions = $this->makeProffessions();
        $fakeProffessions = $this->fakeProffessionsData();
        $updatedProffessions = $this->proffessionsRepo->update($fakeProffessions, $proffessions->id);
        $this->assertModelData($fakeProffessions, $updatedProffessions->toArray());
        $dbProffessions = $this->proffessionsRepo->find($proffessions->id);
        $this->assertModelData($fakeProffessions, $dbProffessions->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteProffessions()
    {
        $proffessions = $this->makeProffessions();
        $resp = $this->proffessionsRepo->delete($proffessions->id);
        $this->assertTrue($resp);
        $this->assertNull(Proffessions::find($proffessions->id), 'Proffessions should not exist in DB');
    }
}
