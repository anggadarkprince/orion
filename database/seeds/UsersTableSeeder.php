<?php

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('app_users')->insert([
            'name' => 'Angga Ari Wijaya',
            'username' => 'anggadarkprince',
            'email' => 'anggadarkprince@gmail.com',
            'password' => bcrypt('Angga1234'),
            'about' => 'Introvert Engineer who change the world someday',
            'contact' => '0009999887',
            'location' => 'Gresik, Indonesia',
            'gender' => 'male',
            'birthday' => '1992-05-26',
            'is_activated' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        factory(User::class, 50)->create();
    }
}
