<?php

use Illuminate\Database\Seeder;

class AddDefaultUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\User::query()->find(1);
        if (!empty($user)) {
            return;
        }

        $user = new \App\User();
        $user->password = \Illuminate\Support\Facades\Hash::make('Test@ro.ru');
        $user->name = 'Test@ro.ru';
        $user->email = 'Test@ro.ru';
        $user->is_admin = 1;
        $user->save();
    }
}
