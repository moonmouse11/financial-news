<?php

namespace Database\Seeders\Users;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        (new User([
            'first_name' => 'Админ',
            'last_name' => 'Админский',
            'surname' => 'Админович',
            'email' => 'admin@admin.admin',
            'email_verified_at' => now(),
            'is_admin' => true,
            'password' => Hash::make('admin')
        ]))->save();

        (new User([
            'first_name' => 'Экономист',
            'last_name' => 'Экономный',
            'surname' => null,
            'email' => 'money@more.money',
            'email_verified_at' => now(),
            'is_admin' => true,
            'password' => Hash::make('economy')
        ]))->save();

        (new User([
            'first_name' => 'Трейдер',
            'last_name' => 'Прогоревший',
            'surname' => 'Трейдерович',
            'email' => 'sale@parent.flat',
            'email_verified_at' => now(),
            'is_admin' => true,
            'password' => Hash::make('salesalesale')
        ]))->save();

        (new User([
            'first_name' => 'Скам',
            'last_name' => 'Мамонтов',
            'surname' => 'Рефералович',
            'email' => 'write@me.looser',
            'email_verified_at' => now(),
            'is_admin' => true,
            'password' => Hash::make('scamscamscam')
        ]))->save();
    }
}