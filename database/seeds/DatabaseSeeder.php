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
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
          'name' => 'administrator',
          'email' => 'admin@vleugels.be',
          'password' => bcrypt('vleugels'),
          'admin' => 1
        ]);

        DB::table('users')->insert([
          'name' => 'gewone gebruiker',
          'email' => 'gewoon@fake.be',
          'password' => bcrypt('vleugels'),
          'admin' => 0
        ]);   
        
        // mutualiteiten
        DB::table('mutualities')->insert([
           'naam' => 'Christelijke Mutualiteiten' 
        ]); 

        DB::table('mutualities')->insert([
           'naam' => 'Bond Moyson' 
        ]); 
        
        
    }
}
