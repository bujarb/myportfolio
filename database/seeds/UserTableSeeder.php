<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Bujar Begisholli";
        $user->email = "begisholli.bujar@gmail.com";
        $user->password = bcrypt('bujar123');
        $user->save();
    }
}
