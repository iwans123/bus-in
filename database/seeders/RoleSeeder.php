<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Auth\Events\Registered;
use App\Models\User;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'admin',
            'guard_name' => 'web',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Role::create([
            'name' => 'ppns',
            'guard_name' => 'web',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Role::create([
            'name' => 'penguji',
            'guard_name' => 'web',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Role::create([
            'name' => 'post',
            'guard_name' => 'web',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        $admin = User::create([
            'name' => 'Ahmad Yusuf Ismail',
            'nip' => '198811142009121003',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'remember_token' => \Str::random(60),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $admin->assignRole('admin');
        event(new Registered($admin));

    }
}
