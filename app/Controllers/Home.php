<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function beranda()
    {
        return view('beranda');
    }

    public function tentang()
    {
        return view('tentang');
    }

    public function artikel()
    {
        return view('artikel');
    }

    public function detail_artikel()
    {
        return view('detail-artikel');
    }

    public function produk()
    {
        return view('produk');
    }

    public function detail_produk()
    {
        return view('detail-produk');
    }

    public function aktivitas()
    {
        return view('aktivitas');
    }

    public function detail_aktivitas()
    {
        return view('detail-aktivitas');
    }

    public function kontak()
    {
        return view('kontak');
    }

    public function planner()
    {
        return view('content-planner');
    }

    public function calender()
    {
        return view('content-calender');
    }

}
