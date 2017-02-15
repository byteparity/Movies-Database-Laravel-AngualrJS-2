<?php

use App\Models\Movies;
use App\Repositories\MoviesRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MoviesRepositoryTest extends TestCase
{
    use MakeMoviesTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var MoviesRepository
     */
    protected $moviesRepo;

    public function setUp()
    {
        parent::setUp();
        $this->moviesRepo = App::make(MoviesRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateMovies()
    {
        $movies = $this->fakeMoviesData();
        $createdMovies = $this->moviesRepo->create($movies);
        $createdMovies = $createdMovies->toArray();
        $this->assertArrayHasKey('id', $createdMovies);
        $this->assertNotNull($createdMovies['id'], 'Created Movies must have id specified');
        $this->assertNotNull(Movies::find($createdMovies['id']), 'Movies with given id must be in DB');
        $this->assertModelData($movies, $createdMovies);
    }

    /**
     * @test read
     */
    public function testReadMovies()
    {
        $movies = $this->makeMovies();
        $dbMovies = $this->moviesRepo->find($movies->id);
        $dbMovies = $dbMovies->toArray();
        $this->assertModelData($movies->toArray(), $dbMovies);
    }

    /**
     * @test update
     */
    public function testUpdateMovies()
    {
        $movies = $this->makeMovies();
        $fakeMovies = $this->fakeMoviesData();
        $updatedMovies = $this->moviesRepo->update($fakeMovies, $movies->id);
        $this->assertModelData($fakeMovies, $updatedMovies->toArray());
        $dbMovies = $this->moviesRepo->find($movies->id);
        $this->assertModelData($fakeMovies, $dbMovies->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteMovies()
    {
        $movies = $this->makeMovies();
        $resp = $this->moviesRepo->delete($movies->id);
        $this->assertTrue($resp);
        $this->assertNull(Movies::find($movies->id), 'Movies should not exist in DB');
    }
}
