<?php

namespace Database\Seeders;

use App\Models\UserInfo;
use Illuminate\Database\Seeder;

class UserInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 11; $i++) {
            $data = [
                'about' => "about " . rand(1,100),
                'first_name' => "name " . rand(1,100),
                'second_name' => "Sec name " . rand(1,100),
                'user_id' => $i,
                'sex_id' => rand(1,2),
                'speciality_id' => rand(1,9),
            ];
            UserInfo::insert($data);
        }
    }
}
