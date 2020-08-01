<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'id' => 1,
            'full_name' => 'Maesaraga Kelana',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('user'),
			'email_verified_at' => date('Y-m-d H:i:s'),
            'gender' => 'Laki Laki',
            'date_of_birth' => '2003-01-02',
            'phone' => '082125648834',
            'address' => 'Unexpected Error In Line 200',
            'photo' => 'default-user.png'
        ]);
        $user->assignRole('administrator');
    }
}
