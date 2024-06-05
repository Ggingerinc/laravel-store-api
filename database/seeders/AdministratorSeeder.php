<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use function Pest\Laravel\json;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $administrator = new User();
        $administrator->username = "admin";
        $administrator->name = "Store Admin";
        $administrator->email = "admin@store.com";
        $administrator->roles = json_encode(["ADMIN"]);
        $administrator->password = Hash::make("examplestore");
        $administrator->avatar = "not-yet-any.png";
        $administrator->address = "Indonesia, World";

        $administrator->save();

        $this->command->info("User admin has been insert");

    }
}
