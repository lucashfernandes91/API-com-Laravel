<?php

use Illuminate\Database\Seeder;
use App\Models\Company;

class CompaniesTableSeeder extends Seeder
{
    public function run()
    {
        Company::create([
            'name'      => str_random(10),
            'email'     => str_random(10).'@gmail.com',
            'website'   => 'www.'.str_random(10).'.com',
            'logo'      => str_random(8).'.jpg',
            'password' => bcrypt('secret'),
        ]);
    }
}
