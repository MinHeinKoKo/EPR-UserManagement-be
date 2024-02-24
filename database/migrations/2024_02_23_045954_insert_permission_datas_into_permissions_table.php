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
        Schema::table('permissions', function (Blueprint $table){
            Schema::disableForeignKeyConstraints();
            DB::table('permissions')->truncate();
            Schema::enableForeignKeyConstraints();

            $data = [
                [
                    'id' => 1,
                    'name' => 'create',
                    'feature_id' => 1,
                    'created_at' => Carbon::now()
                ],
                [
                    'id' => 2,
                    'name' => 'show',
                    'feature_id' => 2,
                    'created_at' => Carbon::now()
                ],
                [
                    'id' => 3,
                    'name' => 'update',
                    'feature_id' => 1,
                    'created_at' => Carbon::now()
                ],
                [
                    'id' => 4,
                    'name' => 'delete',
                    'feature_id' => 2,
                    'created_at' => Carbon::now()
                ],
            ];
            DB::table('permissions')->insert($data);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();
        DB::table('permissions')->truncate();
        Schema::enableForeignKeyConstraints();
    }
};
