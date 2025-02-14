<?php

namespace Database\Seeders;

use App\Models\Student;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 100; $i++)

            Student::create([
                "nim" => "F1E123007$i",
                "name" => "Sabrina Wahida Ramadhani ke-$i",
                "prodi" => "Sistem Informasi",
                "angkatan" => 2000 + $i,
                "asal" => "Jambi",
                "alamat" => "Pattimura"
            ]);

        Student::create([
            "nim" => Str::random(8),
            "name" => Str::random(20),
            "prodi" => Str::random(15),
            "angkatan" => rand(2000, 2024),
            "asal" => Str::random(15),
            "alamat" => Str::random(50)
        ]);
    }
}
