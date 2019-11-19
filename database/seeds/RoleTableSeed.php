<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = new Role();
        $role_user->name='author';
        $role_user->description='A normal user';
        $role_user->level='3';
        $role_user->save();

        $role_user = new Role();
        $role_user->name='editor';
        $role_user->description='A redactor user';
        $role_user->level='2';
        $role_user->save();

        $role_user = new Role();
        $role_user->name='admin';
        $role_user->description='A god user';
        $role_user->level='1';
        $role_user->save();
    }
}
