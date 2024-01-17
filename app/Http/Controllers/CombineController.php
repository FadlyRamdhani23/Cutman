<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class CombineController extends Controller
{
    public function getAll(){
        $allData = DB::table('combines as c')
            ->select(
                'b.namaBarber as barber_name', 
                'b.fotoBarber as barber_photo',
                'b.descBarber as barber_desc',
                'b.twitterBarber as barber_twitter',
                'b.instagramBarber as barber_instagram',
                'b.facebookBarber as barber_facebook',
                'b.linkedinBarber as barber_youtube',
                'p.namaProduct as product_name',
                'p.fotoProduct as product_photo',
                'p.linkProduct as product_link',
                'h.namaModel as haircut_name'
                )
                ->join('users as u', 'c.users_id', '=', 'u.id')
            ->join('barbers as b', 'c.barbers_id', '=', 'b.id')
            ->join('products as p', 'c.products_id', '=', 'p.id')
            ->join('haircuts as h', 'c.haircuts_id', '=', 'h.id')
            ->join('bookings as bo', 'c.booking_id', '=', 'bo.id')
            ->get();
            return view('welcome', compact('allData'));
    }
}
