<?php

use App\Models\Peoples;
use App\Repositories\PeoplesRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PeoplesRepositoryTest extends TestCase
{
    use MakePeoplesTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var PeoplesRepository
     */
    protected $peoplesRepo;

    public function setUp()
    {
        parent::setUp();
        $this->peoplesRepo = App::make(PeoplesRepository::class);
    }

    /**
     * @test create
     */
    public function testCreatePeoples()
    {
        $peoples = $this->fakePeoplesData();
        $createdPeoples = $this->peoplesRepo->create($peoples);
        $createdPeoples = $createdPeoples->toArray();
        $this->assertArrayHasKey('id', $createdPeoples);
        $this->assertNotNull($createdPeoples['id'], 'Created Peoples must have id specified');
        $this->assertNotNull(Peoples::find($createdPeoples['id']), 'Peoples with given id must be in DB');
        $this->assertModelData($peoples, $createdPeoples);
    }

    /**
     * @test read
     */
    public function testReadPeoples()
    {
        $peoples = $this->makePeoples();
        $dbPeoples = $this->peoplesRepo->find($peoples->id);
        $dbPeoples = $dbPeoples->toArray();
        $this->assertModelData($peoples->toArray(), $dbPeoples);
    }

    /**
     * @test update
     */
    public function testUpdatePeoples()
    {
        $peoples = $this->makePeoples();
        $fakePeoples = $this->fakePeoplesData();
        $updatedPeoples = $this->peoplesRepo->update($fakePeoples, $peoples->id);
        $this->assertModelData($fakePeoples, $updatedPeoples->toArray());
        $dbPeoples = $this->peoplesRepo->find($peoples->id);
        $this->assertModelData($fakePeoples, $dbPeoples->toArray());
    }

    /**
     * @test delete
     */
    public function testDeletePeoples()
    {
        $peoples = $this->makePeoples();
        $resp = $this->peoplesRepo->delete($peoples->id);
        $this->assertTrue($resp);
        $this->assertNull(Peoples::find($peoples->id), 'Peoples should not exist in DB');
    }
}
