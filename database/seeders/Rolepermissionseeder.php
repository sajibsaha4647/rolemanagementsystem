<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class Rolepermissionseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superadmin = Role::create(['name' => 'superadmin']);
        $admin = Role::create(['name' => 'admin']);
        $author = Role::create(['name' => 'author']);
        $editor = Role::create(['name' => 'editor']);
        $member = Role::create(['name' => 'member']);


        $permissions =[

            //deshboard
            'deshboard.view',

            //admin permission
            'blog.create',
            'blog.edit',
            'blog.delete',
            'blog.view',
            'blog.approve',

            //role permission
            'role.create',
            'role.edit',
            'role.delete',
            'role.view',
            'role.approve',

            //profile permission
            'profile.create',
            'profile.edit',
            'profile.delete',
            'profile.view',

        ];

        //assign permission
        foreach($permissions as $permission ){

              Permission::create(['name' => $permission]);
            $superadmin->givePermissionTo($permission);

        }

    }
}
