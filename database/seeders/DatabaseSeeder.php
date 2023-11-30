<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // SEEDER DATA ADMIN
        DB::table('users')->insert([
            'role' => 'admin',
            'nama' => 'Administrator',
            'email' => 'yayasansinhudy@gmail.com',
            'email_verified_at' => Carbon::now()->toDateTimeString(),
            'password' => Hash::make('@Alhudy06'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // SEEDER DATA KELAS
        DB::table('kelas')->insert([
            'namaKelas' => '1 Adam',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('kelas')->insert([
            'namaKelas' => '1 Idris',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('kelas')->insert([
            'namaKelas' => '1 Nuh',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('kelas')->insert([
            'namaKelas' => '2 Sholeh',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('kelas')->insert([
            'namaKelas' => '2 Ibrahim',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('kelas')->insert([
            'namaKelas' => '3 Luth',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('kelas')->insert([
            'namaKelas' => '3 Ismail',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('kelas')->insert([
            'namaKelas' => '4 Yusuf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('kelas')->insert([
            'namaKelas' => '4 Ayyub',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('kelas')->insert([
            'namaKelas' => '5 Syuaib',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('kelas')->insert([
            'namaKelas' => '6 Dzulkifli',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
