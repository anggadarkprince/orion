<?php

use App\UserRole;
use Illuminate\Database\Seeder;

class UserRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('app_user_roles')->insert([
            [
                'user_id' => '1',
                'role_id' => '1',
            ],
        ]);

        factory(UserRole::class, 49)->create();
    }
}
