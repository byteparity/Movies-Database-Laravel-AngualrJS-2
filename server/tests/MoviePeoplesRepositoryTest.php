<?php

use App\Models\MoviePeoples;
use App\Repositories\MoviePeoplesRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MoviePeoplesRepositoryTest extends TestCase
{
    use MakeMoviePeoplesTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var MoviePeoplesRepository
     */
    protected $moviePeoplesRepo;

    public function setUp()
    {
        parent::setUp();
        $this->moviePeoplesRepo = App::make(MoviePeoplesRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateMoviePeoples()
    {
        $moviePeoples = $this->fakeMoviePeoplesData();
        $createdMoviePeoples = $this->moviePeoplesRepo->create($moviePeoples);
        $createdMoviePeoples = $createdMoviePeoples->toArray();
        $this->assertArrayHasKey('id', $createdMoviePeoples);
        $this->assertNotNull($createdMoviePeoples['id'], 'Created MoviePeoples must have id specified');
        $this->assertNotNull(MoviePeoples::find($createdMoviePeoples['id']), 'MoviePeoples with given id must be in DB');
        $this->assertModelData($moviePeoples, $createdMoviePeoples);
    }

    /**
     * @test read
     */
    public function testReadMoviePeoples()
    {
        $moviePeoples = $this->makeMoviePeoples();
        $dbMoviePeoples = $this->moviePeoplesRepo->find($moviePeoples->id);
        $dbMoviePeoples = $dbMoviePeoples->toArray();
        $this->assertModelData($moviePeoples->toArray(), $dbMoviePeoples);
    }

    /**
     * @test update
     */
    public function testUpdateMoviePeoples()
    {
        $moviePeoples = $this->makeMoviePeoples();
        $fakeMoviePeoples = $this->fakeMoviePeoplesData();
        $updatedMoviePeoples = $this->moviePeoplesRepo->update($fakeMoviePeoples, $moviePeoples->id);
        $this->assertModelData($fakeMoviePeoples, $updatedMoviePeoples->toArray());
        $dbMoviePeoples = $this->moviePeoplesRepo->find($moviePeoples->id);
        $this->assertModelData($fakeMoviePeoples, $dbMoviePeoples->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteMoviePeoples()
    {
        $moviePeoples = $this->makeMoviePeoples();
        $resp = $this->moviePeoplesRepo->delete($moviePeoples->id);
        $this->assertTrue($resp);
        $this->assertNull(MoviePeoples::find($moviePeoples->id), 'MoviePeoples should not exist in DB');
    }
}
