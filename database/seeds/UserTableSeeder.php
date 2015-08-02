<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder {

    public function run() {
        DB::table( 'users' )->delete();

        User::create( [
            'name' => 'yinchuandong',
            'email' => '123@qq.com',
            'password' => bcrypt('123')
            ] );
    }

}
