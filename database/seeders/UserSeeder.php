<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::create(['name'=>'admin']);
        $user = Role::create(['name'=>'user']);
       
        Permission::create(['name'=>'create-listing']);
        Permission::create(['name'=>'delete-listing']);
        Permission::create(['name'=>'edit-listing']);
        Permission::create(['name'=> 'record-logs']);
        Permission::create(['name'=> 'manage-users']);
        Permission::create(['name'=>'manage']);

        $user->givePermissionTo('create-listing', 'edit-listing');
        $admin->givePermissionTo('record-payments', 'manage-users', 'create-listing', 'delete-listing', 'edit-listing', 'manage');
       
        User::find(1)->assignRole('admin');
        User::find(2)->assignRole('user');
       
    
    }
}
