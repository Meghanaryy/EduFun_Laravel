<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Category;
use App\Models\Writer;

class PageController extends Controller
{
    public function home() {
        $articles = Article::latest()->take(3)->get();
        return view('home', compact('articles'));
    }

    public function category() {
        $categories = \App\Models\Category::whereIn('name', [
        'DataScience',
        'Network Security'
        ])->get();

        return view('category', compact('categories'));
    }
    public function categoryDetail($id){
        $category = \App\Models\Category::findOrFail($id);
        $articles = \App\Models\Article::where('category_id', $id)->get();

        return view('category-detail', compact('category', 'articles'));
    }

    public function detail($id) {
        $article = Article::findOrFail($id);
        return view('detail', compact('article'));
    }


    public function writers()
    {
    $writers = [
            (object)[
                'name' => 'Meghan Hillary Mardjohan',
                'specialization' => 'Data Science',
                'image' => 'writer1.jpeg',
            ],
            (object)[
                'name' => 'Hillary Mardjohan',
                'specialization' => 'Network Security',
                'image' => 'writer2.jpg',
            ],
            (object)[
                'name' => 'Mardjohan',
                'specialization' => 'Data Science',
                'image' => 'writer3.jpg',
            ],
        ];

        return view('writers', compact('writers'));
    }

    public function about() {
        return view('about');
    }

        public function dataScience()
    {
        $courses = [
            [
                'title' => 'Introduction to Data Science',
                'description' => 'mengenalkan konsep dasar Data Science meliputi pengumpulan data, pembersihan data, eksplorasi data, dan dasar pemodelan sederhana. Cocok untuk pemula yang ingin memahami alur kerja sebuah data project',
                'image' => 'img/introduction.jpeg'
            ],
            [
                'title' => 'Machine Learning Fundamentals',
                'description' => 'Membahas algoritma machine learning yang paling umum digunakan seperti Linear Regression, Decision Tree, KNN, dan Naive Bayes. Termasuk contoh implementasi dan evaluasi model secara praktis.',
                'image' => 'img/machine.jpeg'
            ],
            [
                'title' => 'Data Visualization with Python',
                'description' => 'Fokus pada teknik visualisasi menggunakan Matplotlib dan Seaborn untuk membuat grafik yang informatif.',
                'image' => 'img/python.jpg'
            ],
        ];

        return view('category.data-science', compact('courses'));
    }

    public function networkSecurity()
    {
        $courses = [
            [
                'title' => 'Network Security Essentials',
                'description' => 'Course pengantar tentang keamanan jaringan: firewall, IDS/IPS, enkripsi dasar, dan serangan jaringan yang umum. Cocok untuk memahami fondasi dari sistem keamanan modern.',
                'image' => 'img/essentials.jpg'
            ],
            [
                'title' => 'Ethical Hacking & Penetration Testing Basics',
                'description' => 'Membahas konsep dasar etical hacking, reconnaissance, scanning, dan teknik penetrasi sederhana yang digunakan untuk menguji keamanan sistem secara legal dan terstruktur.',
                'image' => 'img/maxresdefault.jpg'
            ],
            [
                'title' => 'Secure Network Architecture',
                'description' => 'Membahas cara mendesain arsitektur jaringan yang aman, termasuk network segmentation, zero-trust model, VPN, dan best practice implementasi keamanan pada infrastruktur perusahaan.',
                'image' => 'img/secure.jpeg'
            ],
        ];

        return view('category.network-security', compact('courses'));
    }
}
