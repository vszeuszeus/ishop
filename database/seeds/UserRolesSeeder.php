<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['user'=> 'member', 'role'=> 4],
            ['user'=> 'admin', 'role'=> 1],
            ['user'=> 'baseManager1', 'role'=> 3],
            ['user'=> 'baseManager2', 'role'=> 3],
            ['user'=> 'baseManager3', 'role'=> 3]
        ];

        $roles = ['superadmin', 'admin', 'manager', 'member'];

        foreach($roles as $role){
            Role::create([
                'name' => $role,
                'translate' => $role
            ]);
        }
        foreach($users as $user):
            $newuser = User::create([
                'name' => $user['user'],
                'login' => $user['user'],
                'email' => $user['user'].'@mail.ru',
                'password' => bcrypt('123123')
            ]);
            $newuser->roles()->attach($user['role']);
        endforeach;
    }
}
