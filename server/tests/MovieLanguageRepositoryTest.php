<?php

use App\Models\MovieLanguage;
use App\Repositories\MovieLanguageRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MovieLanguageRepositoryTest extends TestCase
{
    use MakeMovieLanguageTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var MovieLanguageRepository
     */
    protected $movieLanguageRepo;

    public function setUp()
    {
        parent::setUp();
        $this->movieLanguageRepo = App::make(MovieLanguageRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateMovieLanguage()
    {
        $movieLanguage = $this->fakeMovieLanguageData();
        $createdMovieLanguage = $this->movieLanguageRepo->create($movieLanguage);
        $createdMovieLanguage = $createdMovieLanguage->toArray();
        $this->assertArrayHasKey('id', $createdMovieLanguage);
        $this->assertNotNull($createdMovieLanguage['id'], 'Created MovieLanguage must have id specified');
        $this->assertNotNull(MovieLanguage::find($createdMovieLanguage['id']), 'MovieLanguage with given id must be in DB');
        $this->assertModelData($movieLanguage, $createdMovieLanguage);
    }

    /**
     * @test read
     */
    public function testReadMovieLanguage()
    {
        $movieLanguage = $this->makeMovieLanguage();
        $dbMovieLanguage = $this->movieLanguageRepo->find($movieLanguage->id);
        $dbMovieLanguage = $dbMovieLanguage->toArray();
        $this->assertModelData($movieLanguage->toArray(), $dbMovieLanguage);
    }

    /**
     * @test update
     */
    public function testUpdateMovieLanguage()
    {
        $movieLanguage = $this->makeMovieLanguage();
        $fakeMovieLanguage = $this->fakeMovieLanguageData();
        $updatedMovieLanguage = $this->movieLanguageRepo->update($fakeMovieLanguage, $movieLanguage->id);
        $this->assertModelData($fakeMovieLanguage, $updatedMovieLanguage->toArray());
        $dbMovieLanguage = $this->movieLanguageRepo->find($movieLanguage->id);
        $this->assertModelData($fakeMovieLanguage, $dbMovieLanguage->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteMovieLanguage()
    {
        $movieLanguage = $this->makeMovieLanguage();
        $resp = $this->movieLanguageRepo->delete($movieLanguage->id);
        $this->assertTrue($resp);
        $this->assertNull(MovieLanguage::find($movieLanguage->id), 'MovieLanguage should not exist in DB');
    }
}
