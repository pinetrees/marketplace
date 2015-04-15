<?php
// app/database/seeds/UserTableSeeder.php

class UserTableSeeder extends Seeder 
{

	public function run()
	{
		DB::table('users')->delete();

		$user = User::create(array(
			'role_id'	=> 1,
			'first_name'	=> 'admin',
			'last_name'	=> 'esm',
			'company'	=> 'Environmental Services Marketplace',
			'email'		=> 'admin@esm.com',
			'username'	=> 'admin',
			'phone'		=> '(111) 111-1111',
			'website'	=> 'admin.esm.com',
			'password'	=> Hash::make('password')
		));
		$user->createDefaultSettings();

		$user = User::create(array(
			'role_id'	=> 2,
			'first_name'	=> 'provider',
			'last_name'	=> 'esm',
			'company'	=> 'Environmental Services Provider',
			'email'		=> 'provider@esm.com',
			'username'	=> 'provider',
			'phone'		=> '(222) 222-2222',
			'website'	=> 'provider.esm.com',
			'password'	=> Hash::make('password')
		));
		$user->createDefaultSettings();

		$user = User::create(array(
			'role_id'	=> 3,
			'first_name'	=> 'buyer',
			'last_name'	=> 'esm',
			'company'	=> 'Environmental Services Buyer',
			'email'		=> 'buyer@esm.com',
			'username'	=> 'buyer',
			'phone'		=> '(333) 333-3333',
			'website'	=> 'buyer.esm.com',
			'password'	=> Hash::make('password')
		));
		$user->createDefaultSettings();

		for( $i = 2; $i <= 3; $i++ )
		{

				$user = User::create(array(
					'role_id'	=> 2,
					'first_name'	=> 'provider' . $i,
					'last_name'	=> 'esm',
					'company'	=> 'Environmental Services Provider ' . $i,
					'email'		=> 'provider' . $i . '@esm.com',
					'username'	=> 'provider' . $i,
					'phone'		=> '(222) 222-2222',
					'website'	=> 'provider' . $i . '.esm.com',
					'password'	=> Hash::make('password')
				));
				$user->createDefaultSettings();

		}

		for( $i = 2; $i <= 3; $i++ )
		{

				$user = User::create(array(
					'role_id'	=> 3,
					'first_name'	=> 'buyer' . $i,
					'last_name'	=> 'esm',
					'company'	=> 'Environmental Services Buyer ' . $i,
					'email'		=> 'buyer' . $i . '@esm.com',
					'username'	=> 'buyer' . $i,
					'phone'		=> '(222) 222-2222',
					'website'	=> 'buyer' . $i . '.esm.com',
					'password'	=> Hash::make('password')
				));
				$user->createDefaultSettings();

		}

	}

}
