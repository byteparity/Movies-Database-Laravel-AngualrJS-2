<?php

use App\Models\MovieGenres;
use App\Repositories\MovieGenresRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MovieGenresRepositoryTest extends TestCase
{
    use MakeMovieGenresTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var MovieGenresRepository
     */
    protected $movieGenresRepo;

    public function setUp()
    {
        parent::setUp();
        $this->movieGenresRepo = App::make(MovieGenresRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateMovieGenres()
    {
        $movieGenres = $this->fakeMovieGenresData();
        $createdMovieGenres = $this->movieGenresRepo->create($movieGenres);
        $createdMovieGenres = $createdMovieGenres->toArray();
        $this->assertArrayHasKey('id', $createdMovieGenres);
        $this->assertNotNull($createdMovieGenres['id'], 'Created MovieGenres must have id specified');
        $this->assertNotNull(MovieGenres::find($createdMovieGenres['id']), 'MovieGenres with given id must be in DB');
        $this->assertModelData($movieGenres, $createdMovieGenres);
    }

    /**
     * @test read
     */
    public function testReadMovieGenres()
    {
        $movieGenres = $this->makeMovieGenres();
        $dbMovieGenres = $this->movieGenresRepo->find($movieGenres->id);
        $dbMovieGenres = $dbMovieGenres->toArray();
        $this->assertModelData($movieGenres->toArray(), $dbMovieGenres);
    }

    /**
     * @test update
     */
    public function testUpdateMovieGenres()
    {
        $movieGenres = $this->makeMovieGenres();
        $fakeMovieGenres = $this->fakeMovieGenresData();
        $updatedMovieGenres = $this->movieGenresRepo->update($fakeMovieGenres, $movieGenres->id);
        $this->assertModelData($fakeMovieGenres, $updatedMovieGenres->toArray());
        $dbMovieGenres = $this->movieGenresRepo->find($movieGenres->id);
        $this->assertModelData($fakeMovieGenres, $dbMovieGenres->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteMovieGenres()
    {
        $movieGenres = $this->makeMovieGenres();
        $resp = $this->movieGenresRepo->delete($movieGenres->id);
        $this->assertTrue($resp);
        $this->assertNull(MovieGenres::find($movieGenres->id), 'MovieGenres should not exist in DB');
    }
}
