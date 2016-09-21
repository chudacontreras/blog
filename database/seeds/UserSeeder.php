<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class UserSeeder extends Seeder
{

	public function run()
	{

		DB::table('users')->insert([
				'name'		=>	'Jesus Contreras',
				'email'		=>	'admin@gmail.com',
				'password'	=>	bcrypt('admin'),
				'type'		=>	'admin'

			]);

	}
}