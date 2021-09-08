<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleAdmin = Role::create(['name' =>'administrator']);
        $roleTask = Role::create(['name' =>'askmaster']);
        $roleCap = Role::create(['name' =>' aptain']);
        $roleCoach = Role::create(['name' =>'coach']);
        $roleTrainer = Role::create(['name' =>'trainer']);
        $roleBlog = Role::create(['name' =>'journalist']);
        $roleSpon = Role::create(['name' =>'sponsor']);
        $roleData = Role::create(['name' =>'dataengineer']);

        Permission::create(['name' =>'administrator.dashboard']);

        Permission::create(['name' =>'administrator.animal.index']);
        Permission::create(['name' =>'administrator.animal.edit']);
        Permission::create(['name' =>'administrator.animal.create']);
        Permission::create(['name' =>'administrator.animal.destroy']);

        Permission::create(['name' =>'administrator.avenger.index']);
        Permission::create(['name' =>'administrator.avenger.edit']);
        Permission::create(['name' =>'administrator.avenger.create']);
        Permission::create(['name' =>'administrator.avenger.destroy']);

        Permission::create(['name' =>'administrator.blog.index']);
        Permission::create(['name' =>'administrator.blog.edit']);
        Permission::create(['name' =>'administrator.blog.create']);
        Permission::create(['name' =>'administrator.blog.destroy']);

        Permission::create(['name' =>'administrator.regulation.index']);
        Permission::create(['name' =>'administrator.regulation.edit']);
        Permission::create(['name' =>'administrator.regulation.create']);
        Permission::create(['name' =>'administrator.regulation.destroy']);

        Permission::create(['name' =>'administrator.player.index']);
        Permission::create(['name' =>'administrator.player.edit']);
        Permission::create(['name' =>'administrator.player.create']);
        Permission::create(['name' =>'administrator.player.destroy']);
    }
}
