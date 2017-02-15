<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(GenresTableSeeder::class);
        $this->call(MoviesTableSeeder::class);
		$this->call(PeoplesTableSeeder::class);
        $this->call(ProffessionsTableSeeder::class);
        $this->call(MovieGenresTableSeeder::class);
        $this->call(MovieLanguageTableSeeder::class);
        $this->call(MoviePeoplesTableSeeder::class);
        $this->call(MovieReviewsTableSeeder::class);
        
    }
}
