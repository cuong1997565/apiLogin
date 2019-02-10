<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(PostDatabaseSeeder::class);
    }
}



class PostDatabaseSeeder extends Seeder{
        public function run(){
            DB::table('posts')->insert([
            [
            'title' => 'bai 1',
            'body' => 'blue'
            ],
              [
                'title' => 'bai 2',
                'body' => 'pink'
              ],
               [
                'title' => 'bai 3',
                'body' => 'pink 1'
              ]
             ]);
        }
}
