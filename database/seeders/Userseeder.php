<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use function PHPUnit\Framework\isNull;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = User::where('email','sajib@gmail.com')->first();

        if(is_null($user)){
            $user = new User();
            $user->name = "sajib saha";
            $user->email = "sajib@gmail.com";
            $user->password = Hash::make('12345678');
            $user->save();
        }


    }
}
