<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'admin'
        ]);
        Role::create([
            'name' => 'customer'
        ]);
        $user = User::create([
            'name'=>'super admin',
            'email'=>'admin@aa.net',
            'password'=>bcrypt('123456789')
        ]);
        $user->assignRole('admin');
    }
}
