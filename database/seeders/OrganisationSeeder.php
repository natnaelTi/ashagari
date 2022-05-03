<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Organisation;

class OrganisationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Organisation::create([
            'name' => 'Ashagari Charitable Organisation',
            'bio' => 'Ashagari Charitable Organisation (ACO) is an NGO legally established and residing in Ethiopia, and initially registered under the Federal Democratic Republic of Ethiopia; Agency For Civil Society Organisation with registration number of 5806. Ashagari means "... the one who helps transform ...", and with the vision of transformation, Ashagari\'s chief aim is to equip youth, women and leaders with the right combination of skill development tools to unleash their potential. Hence our principal focus areas are personal and community developments.',
            'year' => 2014,
            'primary_phone' => '+251-118-222-332',
            'secondary_phone' => '+251-937-882-858',
            'primary_email' => 'ashagari.ngo@gmail.com',
            'location' => 'Bole, Friendship Building, 6F-604/3; Addis Ababa, Ethiopia',
            'filepath' => 'Ashagari.Charitable.Organisation.logo.svg',
            'user_id' => '2'
        ]);
    }
}
