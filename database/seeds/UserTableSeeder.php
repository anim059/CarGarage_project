<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Role;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::truncate();
        DB::table('role_user')->truncate();

        $adminrole=Role::where('name','admin')->first();
        $userrole=Role::where('name','user')->first();

        $admin=User::create([
          'name'=>'admin',
          'email'=>'admin@gmail.com',
          'password'=>Hash::make('adminadmin')
        ]);
        $user=User::create([
          'name'=>'user',
          'email'=>'user@gmail.com',
          'password'=>Hash::make('password')
        ]);

        $admin->roles()->attach($adminrole);
        $user->roles()->attach($userrole);
    }
}
