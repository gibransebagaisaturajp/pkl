<?php

use Illuminate\Database\Seeder;
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
        $adminRole = new Role();
        $adminRole->name = "Admin";
        $adminRole->display_name = "admin";
        $adminRole->save();

        
        $memberRole = new Role();
        $memberRole->name = "Penjualan";
        $memberRole->display_name = "penjualan";
        $memberRole->save();


        $admin = new User();
        $admin->name = 'Admin';
        $admin->email = 'admin@gmail.com';
        $admin->password = bcrypt('admin123');
        $admin->save();
        // $admin->attachRole($adminRole);
        $member = new User();
        $member->name = 'Penjualan';
        $member->email = 'penjualan@gmail.com';
        $member->password = bcrypt('penjualan123');
        $member->save();
    }
}
