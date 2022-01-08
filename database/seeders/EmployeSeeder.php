<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EmployeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employes')->insert([
        [
            'nama' => "Ayu Septa",
            'total_gaji' => 4500000,
            'created_at'=>now(),
            'updated_at'=>now(),
        ],
        [
            'nama' => "Andini A",
            'total_gaji' => 5000000,
            'created_at'=>now(),
            'updated_at'=>now(),
        ],
        [
            'nama' => "Sapta Andi",
            'total_gaji' => 5000000,
            'created_at'=>now(),
            'updated_at'=>now(),
        ],[
            'nama' => "Rizal Ari",
            'total_gaji' => 7500000,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]]
    );
    }
}
