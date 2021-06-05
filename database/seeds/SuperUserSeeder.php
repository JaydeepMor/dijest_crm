<?php

use App\User;
use Illuminate\Database\Seeder;

class SuperUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id'            => 1,
            'name'          => 'Superadmin',
            'email'         => 'it.jaydeep.mor@gmail.com',
            'password'      => Hash::make('Shiv@CRM1434'),
            'is_superadmin' => User::SUPERADMIN
        ]);
    }
}
