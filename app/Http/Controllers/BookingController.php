<?php
namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\Response;
use App\Models\User;
use App\Models\Haircut;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $booking = Booking::get();
        $users = User::get();
        $haircuts = Haircut::get();
        return view('kasir.bookingTambah',compact('users','haircuts','booking'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::get();
        $haircuts = Haircut::get();
        return view('kasir.bookingTambah',compact('users','haircuts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $request->validate([
            'user_id' => ['required','string','max:200'],
            'haircuts_id' => ['required','string','max:200'],
            'tanggalPesan' => ['required','string','max:200'],
            'jamPesan' => ['required','string','max:200'],
        ],[
            'user_id.required'=>'Nama User Tidak Boleh Kosong',
            'haircuts_id.required'=>'Nama Model Tidak Boleh Kosong',
            'tanggalPesan.required'=>'Tanggal Pesan Tidak Boleh Kosong',
            'jamPesan.required'=>'Jam Pesan Tidak Boleh Kosong',
        ]);
        $idNama = User::where('id',$request->id)->first();
        $idHair = Haircut::where('id',$request->id)->first();
        $now = now();
        $data = Booking::create([
            'id' => $request->id,
            'user_id' => $request->user_id,
            'haircuts_id' => $request->haircuts_id,
            'tanggalPesan' => $request->tanggalPesan,
            'jamPesan' => $request->jamPesan,
        ]);
        
        $data->save();
        return redirect()->intended('/dashboardadmin')->with('success','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request){
        if(request()->ajax()){
            $booking= DB::table('bookings as b')->select(
                'b.id',
                'u.fullname',
                'h.namaModel',
                'b.tanggalPesan',
                'b.jamPesan',
            )
            ->join('users as u','u.id','=','b.user_id')
            ->join('haircuts as h','h.id','=','b.haircuts_id')
            ->get();
            return DataTables::of($booking)
            ->addIndexColumn()
            ->addColumn('action', function($booking){
                return '
                <a href="'.route('bookingDelete',$booking->id).'"><button type="submit"class="btn btn-danger show_confirm" style="font-size: 13px">
                <i class="fa fa-trash"></i></button>
                </a>
    ';
            })->rawColumns(['action'])
            ->make(true);
        }
    }

    public function bookingjam(){
        date_default_timezone_set('Asia/Jakarta');
        $booking = Booking::where('jamPesan','08:00:00')->exists();
        $booking1 = Booking::where('jamPesan','09:00:00')->exists();
        $booking2 = Booking::where('jamPesan','10:00:00')->exists();
        $booking3 = Booking::where('jamPesan','11:00:00')->exists();
        $booking4 = Booking::where('jamPesan','12:00:00')->exists();
        $booking5 = Booking::where('jamPesan','13:00:00')->exists();
        $booking6 = Booking::where('jamPesan','14:00:00')->exists();
        $booking7 = Booking::where('jamPesan','15:00:00')->exists();
        $booking8 = Booking::where('jamPesan','16:00:00')->exists();
        $booking9 = Booking::where('jamPesan','17:00:00')->exists();
        $booking10 = Booking::where('jamPesan','18:00:00')->exists();
        $booking11 = Booking::where('jamPesan','19:00:00')->exists();
        $booking12 = Booking::where('jamPesan','20:00:00')->exists();
        // $booking = Booking::all();
        // $booking = Carbon::parse($booking->jamPesan.'08:00:00')->toPeriod($booking->jamPesan.'20:00:00', '1 hour');
        $disable = '';
        $disable1 = '';
        $disable2 = '';
        $disable3 = '';
        $disable4 = '';
        $disable5 = '';
        $disable6 = '';
        $disable7 = '';
        $disable8 = '';
        $disable9 = '';
        $disable10 = '';
        $disable11 = '';
        $disable12 = '';
        if ($booking) {
            $disable = 'disabled';
        }
        if ($booking1) {
            $disable1 = 'disabled';
        }
        if ($booking2) {
            $disable2 = 'disabled';
        }
        if ($booking3) {
            $disable3 = 'disabled';
        }
        if ($booking4) {
            $disable4 = 'disabled';
        }
        if ($booking5) {
            $disable5 = 'disabled';
        }
        if ($booking6) {
            $disable6 = 'disabled';
        }
        if ($booking7) {
            $disable7 = 'disabled';
        }
        if ($booking8) {
            $disable8 = 'disabled';
        }
        if ($booking9) {
            $disable9 = 'disabled';
        }
        if ($booking10) {
            $disable10 = 'disabled';
        }
        if ($booking11) {
            $disable11 = 'disabled';
        }
        if ($booking12) {
            $disable12 = 'disabled';
        }
        return view('booking',compact('disable','disable1','disable2','disable3','disable4','disable5','disable6','disable7','disable8','disable9','disable10','disable11','disable12'));
    }
    public function storeBooking(Request $request){
        date_default_timezone_set('Asia/Jakarta');
        $idNama = User::where('id',$request->id)->first();
        $idHair = Haircut::where('id',$request->id)->first();
        $now = now();
        $check = Booking::where('jamPesan',$request->jamPesan)->exists();
        if ($check) {
            Alert::error('Jam Sudah Terisi', 'Gagal');
            return redirect()->intended('/booking');
            
        }
        $data = Booking::create([
            'id' => $request->id,
            'user_id' => $request->user_id,
            'haircuts_id' => $request->haircuts_id,
            'tanggalPesan' => $request->tanggalPesan,
            'jamPesan' => $request->jamPesan,
        ]);
        
        $data->save();
        return redirect()->intended('/bookingberhasil')->with('success','Data Berhasil Ditambahkan');
    }

    public function bookingBerhasil(){
        date_default_timezone_set('Asia/Jakarta');
        $users = Auth::user();
        $booking = Booking::where('user_id',$users->id)->orderBy('created_at','desc')->first();
     $haircuts = Haircut::where('id',$booking->haircuts_id)->first(); 

        return view('bookingBerhasil',compact('users','booking','haircuts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
    
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('bookings')->where('id',$id)->delete();
        return redirect()->intended('/dashboardadmin')->with('success','Data Berhasil Dihapus');
    }

    public function confirmbook($jam,$id){
        
        $getjam = $jam;
        // $booking = Booking::get();
        // $users = User::get();
        $haircuts = Haircut::findorfail($id);
        return view('bookingKonfirmasi',compact('getjam','haircuts'));
        
    }

   
}
