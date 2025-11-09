<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Category;
class CategorySeeder extends Seeder {
    public function run(){
        $cats = [
            ['name'=>'Data Science','slug'=>'data-science','description'=>'Courses in data science'],
            ['name'=>'Network Security','slug'=>'network-security','description'=>'Courses in network security']
        ];
        foreach($cats as $c) Category::create($c);
    }
}
