<?php

namespace Database\Seeders;

use App\Models\OauthClient;
use Illuminate\Database\Seeder;

class OauthClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OauthClient::factory()->create([
            'name' => 'main client',
            'secret' => bcrypt('uJjon2ZfjH2OGXxPhCvwHOWQOVVSvcGqrdH8ZxuL'),
            'password_client' => true,
            'personal_access_client' => false
        ]);
    }
}
