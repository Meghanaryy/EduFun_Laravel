<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\Writer;
use Illuminate\Support\Str;
class PostSeeder extends Seeder {
    public function run(){
        $ds = Category::where('slug','data-science')->first();
        $ns = Category::where('slug','network-security')->first();
        $w1 = Writer::first();
        $w2 = Writer::skip(1)->first();
        $posts = [
            ['Intro to Machine Learning','ML basics and concepts...',$ds->id,$w1->id],
            ['Deep Learning Overview','Overview of DL...',$ds->id,$w2->id],
            ['Data Wrangling Basics','Cleaning and preprocessing...',$ds->id,$w1->id],
            ['Software Security Fundamentals','Secure coding and threats...',$ns->id,$w1->id],
            ['Network Administration 101','Network admin basics...',$ns->id,$w2->id],
            ['Popular Network Technology','Trends in networking...',$ns->id,$w1->id],
        ];
        foreach($posts as $p){
            Post::create([
                'title'=>$p[0],
                'slug'=>Str::slug($p[0]),
                'excerpt'=>$p[1],
                'body'=>$p[1].' Full material content here.',
                'category_id'=>$p[2],
                'writer_id'=>$p[3],
                'published_at'=>now(),
                'views'=>rand(1,200)
            ]);
        }
    }
}
