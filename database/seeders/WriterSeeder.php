<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Writer;
class WriterSeeder extends Seeder {
    public function run(){
        Writer::create(['name'=>'Meghan Hillary Mardjohan','bio'=>'Instructor and content author.','avatar'=>null]);
        Writer::create(['name'=>'Hillary Mardjohan','bio'=>'Contributor.','avatar'=>null]);
    }
}
