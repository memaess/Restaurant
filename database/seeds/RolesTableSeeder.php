<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'administrator']);
        Role::create(['name' => 'operator']);
        Role::create(['name' => 'employee-waiters']);
        Role::create(['name' => 'employee-cashier']);
        Role::create(['name' => 'employee-kitchen']);
    }
}
