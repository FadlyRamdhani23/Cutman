<?php

namespace App\Http\Controllers;

use App\Models\Haircut;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\Response;

class HaircutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kasir.rambutTambah');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'namaModel' => ['required','string','max:200',],
            'fotoModel' => ['required','image','mimes:jpeg,png,jpg,gif,svg','max:2048',],
        ],[
            'namaModel.required'=>'Nama Model Tidak Boleh Kosong',
            'fotoModel.required'=>'Foto Model Tidak Boleh Kosong',
            'fotoModel.image'=>'Foto Model Harus Berupa File Gambar',
        
        ]);
        $data = Haircut::create([
            'namaModel' => $request->namaModel,
            'fotoModel' => $request->fotoModel,
        ]);
        if($request->hasFile('fotoModel')){
            $request->file('fotoModel')->move('fotorambut/',$request->file('fotoModel')->getClientOriginalName());
            $data->fotoModel = $request->file('fotoModel')->getClientOriginalName();
            $data->save();
        }
        return redirect()->intended('/rambut')->with('success','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        if ($request->ajax()) {
            $rambut = DB::table('haircuts as h')->select(
            'h.id',
            'h.namaModel',
            'h.fotoModel',
            )->get();
        return DataTables::of($rambut)
        ->addIndexColumn()
        ->addColumn('action', function ($rambut) {
            return '<a href="'.route('rambutEdit',$rambut->id).'"><button type="submit" data-target="#updateForm"
            data-toggle="modal" class="btn btn-warning"><i class="fas fa-edit" style="font-size: 15px"></i></button>
            </a>
            <a href="'.route('rambutDelete',$rambut->id).'"><button type="submit"class="btn btn-danger show_confirm" style="font-size: 13px">
            <i class="fa fa-trash"></i></button>
            </a>
';
        })->rawColumns(['action'])
        ->make(true);
        }
        

    }

public function getHaircut($jam){
    $getjam = $jam;
    $rambut = DB::table('haircuts')->get();
    return view('bookingPotongan', compact('rambut', 'getjam'));
}


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rambut = DB::table('haircuts')->where('id', $id)->first();
        return view('kasir.rambutUpdate', compact('rambut'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'namaModel' => ['required','string','max:200',],
            'fotoModel' => ['required','image','mimes:jpeg,png,jpg,gif,svg','max:200'],
        ],[
            'namaModel.required'=>'Nama Model Tidak Boleh Kosong',
            'fotoModel.required'=>'Foto Model Tidak Boleh Kosong',
            'fotoModel.image'=>'Foto Model Harus Berupa File Gambar',
        
        ]);
        $data = Haircut::find($id);
        $data->namaModel = $request->namaModel;
        $data->fotoModel = $request->fotoModel;

        if($request->hasFile('fotoModel')){
            $request->file('fotoModel')->move('fotorambut/',$request->file('fotoModel')->getClientOriginalName());
            $data->fotoModel = $request->file('fotoModel')->getClientOriginalName();
            $data->save();
        }
        
        return redirect()->intended('/rambut')->with('success','Data Berhasil Diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('haircuts')->where('id', $id)->delete();
        return redirect()->intended('/rambut')->with('success','Data Berhasil Dihapus');
    }

    public function getRambutAll()
    {
        $rambut = DB::table('haircuts')
        ->select('id','namaModel','fotoModel')
        ->orderBy('id','desc')
        ->get();

        return DataTables::of($rambut)
            ->addColumn('action', function ($rambut) {
                $html = '<a href=""><i class="fas fa-edit" style="font-size: 15px"></i></a>';
                return $html;
            })
            ->make(true);
    }
}
