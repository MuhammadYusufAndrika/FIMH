<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\Description;
use App\Models\Service;
use App\Models\VisiMisi;
use App\Models\tentangkami;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Models\Events;

class HomeController extends Controller
{
    public function index()
    {
        $tentangkami = tentangKami::first();
        $visimisi = VisiMisi::first();
        $events = Events::latest()->take(6)->get(); // Maksimal 6 berita terbaru
        // Pisahkan visi dan misi
        $visi = $visimisi ? [$visimisi->visi] : [];
        $misi = $visimisi ? explode("\n", $visimisi->misi) : [];

        return view('home', compact('tentangkami', 'visi', 'misi' , 'events'));
    }
}
