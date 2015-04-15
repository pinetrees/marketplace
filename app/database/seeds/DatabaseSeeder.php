<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('RoleTableSeeder');
		$this->command->info('Role table seeded.');

		$this->call('RegionTableSeeder');
		$this->command->info('Region table seeded.');

		$this->call('CategoryTableSeeder');
		$this->command->info('Category table seeded.');

		$this->call('UserTableSeeder');
		$this->command->info('User table seeded.');

		$this->call('ProjectTableSeeder');
		$this->command->info('Project table seeded.');

		$this->call('ServiceTableSeeder');
		$this->command->info('Service table seeded.');

		$this->call('CategoryProjectTableSeeder');
		$this->command->info('Category Project table seeded.');

		$this->call('PageTableSeeder');
		$this->command->info('Page table seeded.');

		$this->call('ContentTableSeeder');
		$this->command->info('Content table seeded.');

		$this->call('SettingsTableSeeder');
		$this->command->info('Settings table seeded.');

		$this->call('ThreadTableSeeder');
		$this->command->info('Thread table seeded.');

		$this->call('MessageTableSeeder');
		$this->command->info('Message table seeded.');

		$this->call('ResponseTableSeeder');
		$this->command->info('Response table seeded.');

		$this->call('CopyTableSeeder');
		$this->command->info('Copy table seeded.');
	}

}
