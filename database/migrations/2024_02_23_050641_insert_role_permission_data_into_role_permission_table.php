<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('roles_permissions', function (Blueprint $table){
            Schema::disableForeignKeyConstraints();
            DB::table('roles_permissions')->truncate();
            Schema::enableForeignKeyConstraints();

            $data = [
                [
                    'id' => 1,
                    'role_id' => 1,
                    'permission_id' => 1,
                    'created_at' => Carbon::now()
                ],
                [
                    'id' => 2,
                    'role_id' => 1,
                    'permission_id' => 2,
                    'created_at' => Carbon::now()
                ],
                [
                    'id' => 3,
                    'role_id' => 1,
                    'permission_id' => 4,
                    'created_at' => Carbon::now()
                ],
                [
                    'id' => 4,
                    'role_id' => 1,
                    'permission_id' => 3,
                    'created_at' => Carbon::now()
                ],
            ];
            DB::table('roles_permissions')->insert($data);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();
        DB::table('roles_permissions')->truncate();
        Schema::enableForeignKeyConstraints();
    }
};
