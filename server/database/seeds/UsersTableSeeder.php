<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Sagar Patel',
                'email' => 'hello@byteparity.com',
                'password' => '$2y$10$fHfI246ac.PmzD/bllNzfOcDOoE9C0ZLhQgDeatPuy./yhIdwDWMa',
                'role' => 1,
                'remember_token' => 'FVaIr9qNkEvMbRPLP4ostESLap0OKhMvY6vXnFq75MgYjTjs4ILS0phHcN3m',
                'created_at' => '2017-01-23 04:17:05',
                'updated_at' => '2017-02-13 07:08:48',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Rishikesh',
                'email' => 'rishi@test.com',
                'password' => '$2y$10$eyXI3lgOyWwvMvzz9CLt9eaqoe2.yMWYHH2z0tkiogY8qyF9xCdJ6',
                'role' => 0,
                'remember_token' => NULL,
                'created_at' => '2017-01-23 04:55:56',
                'updated_at' => '2017-01-23 04:55:56',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Maneshwar Patel',
                'email' => 'manu@test.com',
                'password' => '$2y$10$axGL.anuGE6bhqtlW2b31.Sw/iPkQy4ypVJqMQXULctaPY4yvZywy',
                'role' => 0,
                'remember_token' => NULL,
                'created_at' => '2017-01-31 05:54:04',
                'updated_at' => '2017-01-31 05:54:04',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'yatin patel',
                'email' => 'y@p.com',
                'password' => '$2y$10$Sl9bTjAGozQerzEai8AV9OB9/L7H/iNZ4I88PUVKLpdV/Ypgwt86G',
                'role' => 0,
                'remember_token' => NULL,
                'created_at' => '2017-02-07 09:48:48',
                'updated_at' => '2017-02-07 09:48:48',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}