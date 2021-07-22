<?php
namespace App\Controllers;
class Page extends BaseController
{
    public function about()
    {
        return view('about', [
            'title' => 'Halaman About', 'content' => 'ini adalah'
        ]);
    }

    public function iuran()
    {
        return view('iuran', [
            'title' => 'Halaman Iuran'
        ]);
    }

   
}