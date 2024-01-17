<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barber;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\Response;


class BarberController extends Controller
{
    public function index()
    {
        return view('kasir.barberTambah');
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        $request->validate([
            'namaBarber' => ['required','string','max:200',],
            'fotoBarber' => ['required','image','mimes:jpeg,png,jpg,gif,svg','max:2048',],
            'descBarber' => ['required','string','max:200',],
            
        ],[
            'namaBarber.required'=>'Nama Barber Tidak Boleh Kosong',
            'fotoBarber.required'=>'Foto Barber Tidak Boleh Kosong',
            'fotoBarber.image'=>'Foto Barber Harus Berupa File Gambar',
            'descBarber.required'=>'Deskripsi Barber Tidak Boleh Kosong',
        ]);
        $data = Barber::create([
            'namaBarber' => $request->namaBarber,
            'fotoBarber' => $request->fotoBarber,
            'descBarber' => $request->descBarber,
            'twitterBarber' => $request->twitterBarber,
            'facebookBarber' => $request->facebookBarber,
            'instagramBarber' => $request->instagramBarber,
            'linkedinBarber' => $request->linkedinBarber,
        ]);
        if($request->hasFile('fotoBarber')){
            $request->file('fotoBarber')->move('fotobarber/',$request->file('fotoBarber')->getClientOriginalName());
            $data->fotoBarber = $request->file('fotoBarber')->getClientOriginalName();
            $data->save();
        }
        return redirect()->intended('/barber')->with('success','Data Berhasil Ditambahkan');
    }

    public function show(Request $request)
    {
        if ($request->ajax()) {
            $barber = DB::table('barbers as b')->select
            ('b.id',
            'b.namaBarber',
            'b.fotoBarber',
            'b.descBarber',
            'b.twitterBarber',
            'b.facebookBarber',
            'b.instagramBarber',
            'b.linkedinBarber'
            )->get();
            return Datatables::of($barber)
            ->addIndexColumn()
            ->addColumn('action', function ($barber) {
                return '<a href="'.route('barberEdit',$barber->id).'"><button type="submit" data-target="#updateForm"
                data-toggle="modal" class="btn btn-warning"><i class="fas fa-edit" style="font-size: 15px"></i></button>
                </a>
                <a href="'.route('barberDelete',$barber->id).'"><button type="submit"class="btn btn-danger show_confirm" style="font-size: 13px">
                <i class="fa fa-trash"></i></button>
                </a>';
            })->rawColumns(['action'])
            ->make(true);
        }
            
    }

    public function edit($id)
    {
        $barber = DB::table('barbers')->where('id',$id)->first();
        return view('kasir.barberUpdate',compact('barber'));
    }

    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'namaBarber' => ['required','string','max:200',],
        //     'fotoBarber' => ['required','image','mimes:jpeg,png,jpg,gif,svg','max:200'],
        //     'descBarber' => ['required','string','max:200',],
        //     'twitterBarber' => ['string','max:200',],
        //     'facebookBarber' => ['string','max:200',],
        //     'instagramBarber' => ['string','max:200',],
        //     'linkedinBarber' => ['string','max:200',],
        // ]);
        $data = Barber::find($id);
        $data->namaBarber = $request->namaBarber;
        $data->fotoBarber = $request->fotoBarber;
        $data->descBarber = $request->descBarber;
        $data->twitterBarber = $request->twitterBarber;
        $data->facebookBarber = $request->facebookBarber;
        $data->instagramBarber = $request->instagramBarber;
        $data->linkedinBarber = $request->linkedinBarber;

        if($request->hasFile('fotoBarber')){
            $request->file('fotoBarber')->move('fotobarber/',$request->file('fotoBarber')->getClientOriginalName());
            $data->fotoBarber = $request->file('fotoBarber')->getClientOriginalName();
            $data->save();
        }

        return redirect()->intended('/barber')->with('success','Data Berhasil Diubah');
    }

    public function destroy($id)
    {
        $data = Barber::find($id);
        $data->delete();
        return redirect()->intended('/barber')->with('success','Data Berhasil Dihapus');
    }

    public function getBarber(){
        $barber = DB::table('barbers')->get();
        return view('welcome', compact('barber'));
    }
}
