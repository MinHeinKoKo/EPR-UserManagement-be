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
            DB::table('features')->truncate();
            Schema::enableForeignKeyConstraints();

            $data = [
                [
                    'id' => 1,
                    'name' => 'testing',
                    'created_at' => Carbon::now()
                ],
                [
                    'id' => 2,
                    'name' => 'migration',
                    'created_at' => Carbon::now()
                ],
            ];
            DB::table('features')->insert($data);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();
        DB::table('features')->truncate();
        Schema::enableForeignKeyConstraints();
    }
};
