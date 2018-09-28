<?php

use Illuminate\Database\Seeder;
use App\Movie;
use App\User;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('movie_user')->truncate();
        DB::table('movies')->truncate();
        \DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        Movie::create(['title' => 'Step Brothers','release_year' => 2008]);
        Movie::create(['title' => 'Black Hawk Down','release_year' => 2002]);
        Movie::create(['title' => 'Dumb and Dumber','release_year' => 1994]);
        Movie::create(['title' => 'Last of the Mohicans','release_year' => 1992]);
        Movie::create(['title' => 'The Godfather','release_year' => 1972]);
        Movie::create(['title' => 'The Black Panther','release_year' => 2018]);
        Movie::create(['title' => 'Rain Man','release_year' => 1988]);

        $user = User::find(1);
        $movieIds = [1,2,3,4,5];
        $user->movies()->attach($movieIds);

        $user = User::find(2);
        $movieIds = [1,2,3,6,7];
        $user->movies()->attach($movieIds);
    }
}
