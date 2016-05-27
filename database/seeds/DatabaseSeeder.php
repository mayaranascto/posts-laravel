<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use SimpleBlog\Users;
use SimpleBlog\Posts;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        Model::unguard();

        Users::truncate();
        Posts::truncate();

        factory(Users::class, 5)->create();
        factory(Posts::class, 100)->create();

        Model::reguard();
    }
}
