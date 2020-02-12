<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        factory( App\User::class, 10 )->create()->each( function ( $user ) {
            $user->contacts()->saveMany( factory( App\Contact::class, rand(10, 30) )->make() );
        } );
    }
}
