<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Feature;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();


        $features = ['user', 'role' , 'product'];
        $permissions = ['view', 'create', 'update', 'delete'];

        foreach ($features as $f){
            $feature = Feature::create([
                'name' => 'user'
            ]);

            foreach ($permissions as $p){
                Permission::create([
                    'name' => $p,
                    'feature_id' => $feature->id
                ]);
            }

        }


         \App\Models\User::factory()->create([
             'name' => 'Min Hein',
             'username' => 'MinHein',
             'email' => 'admin@gmail.com',
             'role_id' => 1,
             'phone' => fake()->phoneNumber(),
             'address' => fake()->address(),
             'password' => Hash::make('password'),
             'gender' => 'Male',
         ]);
    }
}
