<?php

use App\Models\MovieReviews;
use App\Repositories\MovieReviewsRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MovieReviewsRepositoryTest extends TestCase
{
    use MakeMovieReviewsTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var MovieReviewsRepository
     */
    protected $movieReviewsRepo;

    public function setUp()
    {
        parent::setUp();
        $this->movieReviewsRepo = App::make(MovieReviewsRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateMovieReviews()
    {
        $movieReviews = $this->fakeMovieReviewsData();
        $createdMovieReviews = $this->movieReviewsRepo->create($movieReviews);
        $createdMovieReviews = $createdMovieReviews->toArray();
        $this->assertArrayHasKey('id', $createdMovieReviews);
        $this->assertNotNull($createdMovieReviews['id'], 'Created MovieReviews must have id specified');
        $this->assertNotNull(MovieReviews::find($createdMovieReviews['id']), 'MovieReviews with given id must be in DB');
        $this->assertModelData($movieReviews, $createdMovieReviews);
    }

    /**
     * @test read
     */
    public function testReadMovieReviews()
    {
        $movieReviews = $this->makeMovieReviews();
        $dbMovieReviews = $this->movieReviewsRepo->find($movieReviews->id);
        $dbMovieReviews = $dbMovieReviews->toArray();
        $this->assertModelData($movieReviews->toArray(), $dbMovieReviews);
    }

    /**
     * @test update
     */
    public function testUpdateMovieReviews()
    {
        $movieReviews = $this->makeMovieReviews();
        $fakeMovieReviews = $this->fakeMovieReviewsData();
        $updatedMovieReviews = $this->movieReviewsRepo->update($fakeMovieReviews, $movieReviews->id);
        $this->assertModelData($fakeMovieReviews, $updatedMovieReviews->toArray());
        $dbMovieReviews = $this->movieReviewsRepo->find($movieReviews->id);
        $this->assertModelData($fakeMovieReviews, $dbMovieReviews->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteMovieReviews()
    {
        $movieReviews = $this->makeMovieReviews();
        $resp = $this->movieReviewsRepo->delete($movieReviews->id);
        $this->assertTrue($resp);
        $this->assertNull(MovieReviews::find($movieReviews->id), 'MovieReviews should not exist in DB');
    }
}
