// app/database/seeds/UserTableSeeder.php

<?php

class UserTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('users')->delete();
		User::create(array(
			'nick'     => 'neo',
			'email'    => 'neo@beta.com',
			'password' => Hash::make('awesome'),
		));
	}

}
