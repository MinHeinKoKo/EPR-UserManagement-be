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
        Schema::table('roles', function (Blueprint $table){
            Schema::disableForeignKeyConstraints();
            DB::table('roles')->truncate();
            Schema::enableForeignKeyConstraints();

            $data = [
                [
                    'id' => 1,
                    'name' => "admin",
                    'created_at' => Carbon::now()
                ]
            ];
            DB::table('roles')->insert($data);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();
        DB::table('roles')->truncate();
        Schema::enableForeignKeyConstraints();
    }
};
