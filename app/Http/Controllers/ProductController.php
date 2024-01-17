<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\Response;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kasir.productTambah');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $request->validate([
            'namaProduct' => ['required','string','max:200',],
            'linkProduct' => ['required','string'],
            'fotoProduct' => ['required','image','mimes:jpeg,png,jpg,gif,svg','max:2048',],
        ],[
            'namaProduct.required'=>'Nama Product Tidak Boleh Kosong',
            'linkProduct.required'=>'Link Product Tidak Boleh Kosong',
            'fotoProduct.required'=>'Foto Product Tidak Boleh Kosong',
            'fotoProduct.image'=>'Foto Product Harus Berupa File Gambar',
        ]);
        $data = Product::create([
            'namaProduct' => $request->namaProduct,
            'linkProduct' => $request->linkProduct,
            'fotoProduct' => $request->fotoProduct,
        ]);
        if($request->hasFile('fotoProduct')){
            $request->file('fotoProduct')->move('fotoproduct/',$request->file('fotoProduct')->getClientOriginalName());
            $data->fotoProduct = $request->file('fotoProduct')->getClientOriginalName();
            $data->save();
        }
        return redirect()->intended('/produk')->with('success','Data Berhasil Ditambahkan');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request){
    if(request()->ajax()){
        $product= DB::table('products as p')->select(
            'p.id',
            'p.namaProduct',
            'p.linkProduct',
            'p.fotoProduct',
        )->get();
        return DataTables::of($product)
        ->addIndexColumn()
        ->addColumn('action', function($product){
            return '<a href="'.route('produkEdit',$product->id).'"><button type="submit" data-target="#updateForm"
            data-toggle="modal" class="btn btn-warning"><i class="fas fa-edit" style="font-size: 15px"></i></button>
            </a>
            <a href="'.route('produkDelete',$product->id).'"><button type="submit"class="btn btn-danger show_confirm" style="font-size: 13px">
            <i class="fa fa-trash"></i></button>
            </a>
';
        })->rawColumns(['action'])
        ->make(true);
    }
}
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $product = DB::table('products')->where('id', $id)->first();
        return view('kasir.produkUpdate', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $data = Product::find($id);
        $data->namaProduct = $request->namaProduct;
        $data->linkProduct = $request->linkProduct;
        $data->fotoProduct = $request->fotoProduct;

        if($request->hasFile('fotoProduct')){
            $request->file('fotoProduct')->move('fotoproduct/',$request->file('fotoProduct')->getClientOriginalName());
            $data->fotoProduct = $request->file('fotoProduct')->getClientOriginalName();
            $data->save();
        }
        return redirect()->intended('/produk')->with('success','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
       DB::table('products')->where('id',$id)->delete();
         return redirect()->intended('/produk')->with('success','Data Berhasil Dihapus');
    }

    public function getProductAll(){
        $product = DB::table('product')
        ->select('id','namaProduct','linkProduct','fotoProduct')
        ->get();

        return DataTables::of($product)
        ->addColumn('action', function ($product) {
            $html = '<a href=""><i class="fas fa-edit" style="font-size: 15px"></i></a>';
            return $html;
        })
        ->make(true);
    }
    public function getAll(){
        $user = Auth::user();
        $hastBooking = 0;
        $booking = Booking::where('user_id', $user->id)->exists();
        if($booking){
            $hastBooking = 1;
        }

        $barber = DB::table('barbers')->get();
        $product = DB::table('products')->get();
        return view('dashboard', compact('product','barber','hastBooking'));
    }
    public function getsemua(){
        $barber = DB::table('barbers')->get();
        $product = DB::table('products')->get();
        return view('welcome', compact('product','barber'));
    }
}

