<?php

namespace App\Http\Controllers;
use Auth;
use Str;
use App\Guru;
use App\AnggotaPesan;
use App\Pesan;
use App\PesertaUjian;
use App\HasilUjian;
use App\Ujian;
use Illuminate\Http\Request;

class PesanController extends Controller
{

  //Bagian Guru
    public function getPesan()
    {
      try {
        $pesan         = Pesan::where('kode_pesan',Auth::user()->guru->id)->where('isdelete',false)->get();
        return view('pesan.getPesan',['pesan' => $pesan]);
      } catch (\Exception $e) {
        return redirect()->route('profilGuru')->with('error','Mohon lengkapi profil anda');
      }

    }

    public function createPesan()
    {
      try {
        $pesan = Guru::where('kode_pesan',auth()->user()->guru->id);
        return view('Pesan.createPesan');

      } catch (\Exception $e) {
        return redirect()->route('profilGuru')->with('error','Mohon lengkapi profil anda');
      }
    }

    public function storePesan(Request $request)
    {
        $kode_Pesan = Str::random(6);
       // $guru_id = Auth::user()->guru->id;
        $pesan = pesan::create([
            'kode_pesan' => $request->nama_kesalahan,
            'pesan' => $request->pesan,
          
        ]);
        //dd('oke');
        return redirect()->route('getPesan')->with('success','Pesan baru berhasil dibuat');
    }

    public function showPesan($id)
    {
        $Pesan           = Pesan::find($id);
        $anggotaPesan    = AnggotaPesan::where('Pesan_id',$id)->join('siswa','anggota_Pesan.siswa_id','=','siswa.id')
                          ->orderBy('siswa.nama_lengkap')->get();
        $ujian = Ujian::where('Pesan_id',$id)->where('isdelete',0)->get();

        return view('Pesan.showPesan', compact('Pesan','anggotaPesan','ujian'));
    }

    public function deletePesan($id)
    {
        Pesan::whereId($id)->update([
            'isdelete'=>true
        ]);

        return redirect()->back();
    }
}

    //Bagian Siswa
    