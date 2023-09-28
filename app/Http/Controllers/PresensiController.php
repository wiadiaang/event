<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peserta;
use App\Models\Presensi;
use DB;
use DataTables;
use QrCode;
use Carbon\Carbon;

class PresensiController extends Controller
{
    //index
    public function index()
    {
       

        return view('presensi/index',[
           "title" => "Presensi"]);


    }


     // get for list
     public function getPresensi()
     {


          $result = Presensi::join('tbl_peserta', 'tbl_peserta.id_peserta', '=', 'tbl_presensi.peserta_id')
                      ->join('tbl_event', 'tbl_event.event_id', '=', 'tbl_presensi.event_id')
                      ->get(['tbl_presensi.*', 'tbl_event.nama_event','tbl_peserta.*']);

        return DataTables::of($result)
                ->addIndexColumn()
                ->addColumn('photo', function ($row) {
                              $url= asset('files/'.$row->photo);
                              return '<div class="d-flex align-items-center"><img src="'.$url.'" class="rounded img-fluid avatar-65 me-3"  alt="'. $row->nama_peserta.'" loading="lazy" height="50" width="50"/></div>';})
               
                ->addColumn('action', function($row){
                    $actionBtn = ' <div class="d-flex justify-content-evenly">
                                   
                                       
                                        <a  class="btn btn-primary btn-icon btn-sm rounded-pill ms-2 delete-confirm" href="" data-id='. $row->presensi_id. ' role="button">
                                            <span class="btn-inner">
                                                <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.4" d="M19.643 9.48851C19.643 9.5565 19.11 16.2973 18.8056 19.1342C18.615 20.8751 17.4927 21.9311 15.8092 21.9611C14.5157 21.9901 13.2494 22.0001 12.0036 22.0001C10.6809 22.0001 9.38741 21.9901 8.13185 21.9611C6.50477 21.9221 5.38147 20.8451 5.20057 19.1342C4.88741 16.2873 4.36418 9.5565 4.35445 9.48851C4.34473 9.28351 4.41086 9.08852 4.54507 8.93053C4.67734 8.78453 4.86796 8.69653 5.06831 8.69653H18.9388C19.1382 8.69653 19.3191 8.78453 19.4621 8.93053C19.5953 9.08852 19.6624 9.28351 19.643 9.48851Z" fill="currentColor"></path>
                                                    <path d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </a>
                                    </div>';
                    return $actionBtn;
                })

                ->rawColumns(['action','photo'])
                ->make(true);
     }

     // post presensi
     public function post(Request $request)
     {
           // validate post
           $this->validate($request, [
            'qr_code' => 'required|string|max:255'
         ]);

         $no = Peserta::select('id_peserta', 'event_id')
                            ->where('no_peserta', '=', $request->qr_code)
                            ->first();
        
        
        $dt = Carbon::now()->timezone('Asia/Jakarta');


        $dt->toTimeString();

         $checkIn = Presensi::select('peserta_id','presensi_id')
                        ->where('peserta_id', '=', $no->id_peserta)
                        ->first();

       
    

         if(empty($checkIn)){

            $post = Presensi::create([

                'event_id' => $no->event_id,
                'peserta_id' => $no->id_peserta,
                'jam_checkin' => $dt->toTimeString(),
                // 'jam_checkout' => $no->id_peserta,
                             
                         
             ]);


             return response()->json(['status' => 200,]);
             
         }else{


            $id = $checkIn->presensi_id ; // mendapat kan presensi ID jika sudah presensi

            $post = Presensi::findOrFail($id);

            $post->update([


                'jam_checkout' => $dt->toTimeString(),
                             
                         
             ]);

             return response()->json(['status' => 200,]);
              

         }
                


       
        
     }

     public function webCame()
     {
    

        return view('presensi/presensi',[
            "title" => "Presensi"]);
     }

        // delete
        public function delete($id)
        {
            $post = Presensi::findOrFail($id);
            $post->delete();
        }
}
