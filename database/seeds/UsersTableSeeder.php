<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::insert([
             
            'name' => 'Mr Victor N. Sunday ',
            'email' => 'victorsunday@gmail.com',
            'password' => bcrypt('eagleeyes'),
            'member' => 'Staff',
            'department' => 'Geography',
            'osmusername' => 'University of Port Harcourt',
            'avatar' => 'user.png',
            'gender' => 'Male',
            'agree' =>'I Agree',
            'phone' => ' 08063908020',
            'isAdmin' => '1',
        ]);
        App\User::insert([
            'name' => 'Ikeogu Emmanuel Chidera',
            'email' => 'ikeogu322@gmail.com',
            'password' => bcrypt('ikeogu12'),
            'member' => 'UnderGraduate',
            'department' => 'Computer Science',
            'osmusername' => 'University of Port Harcourt',
            'avatar' => 'user.png',
            'gender' => 'Male',
            'agree' =>'I Agree',
            'phone' => ' 08133627610',
            'isAdmin' => '1',
        ]);
    }
}
