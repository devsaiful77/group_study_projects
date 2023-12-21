<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            [
                'name' => 'create-user',
                'guard_name' => 'admin',
            ],
            [
                'name' => 'edit-user',
                'guard_name' => 'admin',
            ],
            [
                'name' => 'list-user',
                'guard_name' => 'admin',
            ],
            [
                'name' => 'delete-user',
                'guard_name' => 'admin',
            ]
        ];


        foreach($permissions as $permission){
            Permission::create($permission);
        }


    }
}
