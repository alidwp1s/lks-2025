<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
  public function run()
  {
    $data = [
      ['username' => 'admin1', 'password' => 'halouniverse1!', 'role' => 'admin'],
      ['username' => 'admin2', 'password' => 'halouniverse2!', 'role' => 'admin'],
      ['username' => 'dev1', 'password' => 'halobyte1!', 'role' => 'developer'],
      ['username' => 'dev2', 'password' => 'halobyte2!', 'role' => 'developer'],
      ['username' => 'pemain1', 'password' => 'halodunia1!', 'role' => 'player'],
      ['username' => 'pemain2', 'password' => 'halodunia2!', 'role' => 'player'],
    ];

    foreach ($data as $user) {
      User::create([
        'username' => $user['username'],
        'password' => Hash::make($user['password']),
        'role' => $user['role']
      ]);
    }
  }
}
