<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// if the class couldn't be found, 
		// then run the commond 'composer dump-autoload'
		// or 'php artisan migrate:refresh --seed'
		$this->call('PageTableSeeder');
		$this->call('UserTableSeeder');
	}

}
