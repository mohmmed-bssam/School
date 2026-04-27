<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cache
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Permissions
        $permissions = [
            'manage users',
            'manage teachers',
            'manage students',
            'manage courses',
            'manage lessons',
            'manage quizzes',
            'view reports',
            'view courses',
            'solve quizzes',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Roles
        $admin = Role::firstOrCreate(['name' => 'admin']);
        $teacher = Role::firstOrCreate(['name' => 'teacher']);
        $student = Role::firstOrCreate(['name' => 'student']);

        // Assign Permissions
        $admin->syncPermissions(Permission::all());

        $teacher->syncPermissions([
            'manage courses',
            'manage lessons',
            'manage quizzes',
            'view reports',
            'view courses',
        ]);

        $student->syncPermissions([
            'view courses',
            'solve quizzes',
        ]);
    }
}
