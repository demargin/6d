<?php
namespace Database\Seeders;

use App\Models\Student_Model;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Utiliza el modelo y la fábrica con los nombres correctos
        \App\Models\Student_Model::factory(10)->create();
    }
}
