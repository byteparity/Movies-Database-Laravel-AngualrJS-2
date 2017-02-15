<?php

use App\Models\Genres;
use App\Repositories\GenresRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class GenresRepositoryTest extends TestCase
{
    use MakeGenresTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var GenresRepository
     */
    protected $genresRepo;

    public function setUp()
    {
        parent::setUp();
        $this->genresRepo = App::make(GenresRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateGenres()
    {
        $genres = $this->fakeGenresData();
        $createdGenres = $this->genresRepo->create($genres);
        $createdGenres = $createdGenres->toArray();
        $this->assertArrayHasKey('id', $createdGenres);
        $this->assertNotNull($createdGenres['id'], 'Created Genres must have id specified');
        $this->assertNotNull(Genres::find($createdGenres['id']), 'Genres with given id must be in DB');
        $this->assertModelData($genres, $createdGenres);
    }

    /**
     * @test read
     */
    public function testReadGenres()
    {
        $genres = $this->makeGenres();
        $dbGenres = $this->genresRepo->find($genres->id);
        $dbGenres = $dbGenres->toArray();
        $this->assertModelData($genres->toArray(), $dbGenres);
    }

    /**
     * @test update
     */
    public function testUpdateGenres()
    {
        $genres = $this->makeGenres();
        $fakeGenres = $this->fakeGenresData();
        $updatedGenres = $this->genresRepo->update($fakeGenres, $genres->id);
        $this->assertModelData($fakeGenres, $updatedGenres->toArray());
        $dbGenres = $this->genresRepo->find($genres->id);
        $this->assertModelData($fakeGenres, $dbGenres->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteGenres()
    {
        $genres = $this->makeGenres();
        $resp = $this->genresRepo->delete($genres->id);
        $this->assertTrue($resp);
        $this->assertNull(Genres::find($genres->id), 'Genres should not exist in DB');
    }
}
