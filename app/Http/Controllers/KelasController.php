<?php

namespace App\Http\Controllers;
use Auth;
use Str;
use App\Guru;
use App\AnggotaKelas;
use App\Kelas;
use App\PesertaUjian;
use App\HasilUjian;
use App\SoalTk1;
use App\SoalTk2;
use App\SoalTk3;
use App\SoalTk4;
use App\JawabanTk1;
use App\JawabanTk2;
use App\JawabanTk3;
use App\JawabanTk4;
use App\Ujian;
use App\MiskonsepsiDetail;
use App\Reduksimsatu;
use App\Reduksimdua;
use App\Reduksimtiga;
use App\Reduksimempat;
use App\Reduksimlima;
use App\Reduksimenam;
use App\ReduksifalsePositive;
use App\ReduksifalseNegative;
use App\Reduksilk;
use Illuminate\Http\Request;

class KelasController extends Controller
{

  //Bagian Guru
    public function getKelas()
    {
      try {
        $kelas         = Kelas::where('guru_id',Auth::user()->guru->id)->where('isdelete',false)->get();
        return view('kelas.getKelas',['kelas' => $kelas]);
      } catch (\Exception $e) {
        return redirect()->route('profilGuru')->with('error','Mohon lengkapi profil anda');
      }

    }

    public function createKelas()
    {
      try {
        $guru = Guru::where('guru_id',auth()->user()->guru->id);
        return view('kelas.createKelas');

      } catch (\Exception $e) {
        return redirect()->route('profilGuru')->with('error','Mohon lengkapi profil anda');
      }
    }

    public function storeKelas(Request $request)
    {
        $kode_kelas = Str::random(6);
        $guru_id = Auth::user()->guru->id;
        $kelas = Kelas::create([
            'guru_id' => $guru_id,
            'nama_kelas' => $request->nama_kelas,
            'deskripsi' => $request->deskripsi,
            'kode_kelas' => $kode_kelas,
        ]);
        //dd('oke');
        return redirect()->route('getKelas')->with('success','Kelas baru berhasil dibuat');
    }

    public function showKelas($id)
    {
        $kelas           = Kelas::find($id);
        $anggotakelas    = AnggotaKelas::where('kelas_id',$id)->join('siswa','anggota_kelas.siswa_id','=','siswa.id')
                          ->orderBy('siswa.nama_lengkap')->get();
        $ujian = Ujian::where('kelas_id',$id)->where('isdelete',0)->get();

        return view('kelas.showKelas', compact('kelas','anggotakelas','ujian'));
    }

    public function deleteKelas($id)
    {
        Kelas::whereId($id)->update([
            'isdelete'=>true
        ]);

        return redirect()->back();
    }

    //Bagian Siswa
    public function getKelasSiswa()
    {
      try {
        $anggotaKelas = AnggotaKelas::where('siswa_id',Auth::user()->siswa->id)->get();
        return view('anggotakelas.getKelasSiswa',['anggotaKelas' => $anggotaKelas]);
      } catch (\Exception $e) {
        return redirect()->route('profilSiswa')->with('error','Mohon lengkapi profil anda');
      }

    }

    public function gabungKelasSiswa(Request $request)
    {
        if (Kelas::where('kode_kelas',$request->kode_kelas)) {
            $anggotaKelas = new AnggotaKelas;
            $anggotaKelas->siswa_id = auth()->user()->siswa->id;
            $idkelas = Kelas::where('kode_kelas',$request->kode_kelas)->get();
            foreach ($idkelas as $item) {
                $id = $item->id;
            }
            $anggotaKelas->kelas_id = $id;

            if (AnggotaKelas::where('kelas_id',$id)->where('siswa_id',auth()->user()->siswa->id)->exists()) {
                return redirect()->route('getKelasSiswa')->withSuccess('Kamu sudah tergabung dalam kelas ini');
            } else {
                $anggotaKelas->save();
                return redirect()->route('getKelasSiswa')->withSuccess('Berhasil bergabung ke kelas baru');
            }
        }

    }
    public function showKelasSiswa($id)
    {

        $kelas              = Kelas::find($id);
        $anggotakelas       = AnggotaKelas::where('kelas_id',$id)->join('siswa','anggota_kelas.siswa_id','=','siswa.id')
                            ->orderBy('siswa.nama_lengkap')->get();
        $siswa_id                   = auth()->user()->siswa->id;
        $anggota_kelas_id           = AnggotaKelas::where('siswa_id',$siswa_id)->where('kelas_id',$id)->value('id');

        $hasil_ujian               = PesertaUjian::where('anggota_kelas_id',$anggota_kelas_id)->where('status',1)->get();
        return view('anggotakelas.showKelasSiswa', ['anggotakelas' => $anggotakelas, 'hasil_ujian'=> $hasil_ujian], compact('kelas'));
    }

  public function hasilUjian($id){
  $peserta_ujian = PesertaUjian::find($id);
  $hasil_ujian = HasilUjian::where('peserta_ujian_id', $peserta_ujian->id)->get();
  
    return view('anggotakelas.hasilUjian', ['peserta_ujian' => $peserta_ujian, 'hasil_ujian' => $hasil_ujian]);
    }

  public function videoFalseNegative($id){
      $hasil_ujian = HasilUjian::find($id);
      $peserta_ujian = PesertaUjian::where('id', $hasil_ujian->peserta_ujian_id)->first();
      $ReduksifalseNegative = ReduksifalseNegative::paginate(1);

      return view('anggotakelas.falseNegative', ['hasil_ujian' => $hasil_ujian, 'peserta_ujian' => $peserta_ujian, 'ReduksifalseNegative' => $ReduksifalseNegative,]);
    }

  public function videoFalsePositve($id){
      $hasil_ujian = HasilUjian::find($id);
      $peserta_ujian = PesertaUjian::where('id', $hasil_ujian->peserta_ujian_id)->first();
      $ReduksifalsePositive = ReduksifalsePositive::paginate(1);

      return view('anggotakelas.falsePositive', ['hasil_ujian' => $hasil_ujian, 'peserta_ujian' => $peserta_ujian, 'ReduksifalsePositive' => $ReduksifalsePositive,]);
    }

  public function videoLackOfKnowladge($id){
      $hasil_ujian = HasilUjian::find($id);
      $peserta_ujian = PesertaUjian::where('id', $hasil_ujian->peserta_ujian_id)->first();
      $Reduksilk = Reduksilk::paginate(1);

      return view('anggotakelas.LackOfKnowladge', ['hasil_ujian' => $hasil_ujian, 'peserta_ujian' => $peserta_ujian, 'Reduksilk' => $Reduksilk,]);
    }


  public function videoMiskonsepsi($id){
      $hasil_ujian = HasilUjian::find($id);
      $peserta_ujian = PesertaUjian::where('id', $hasil_ujian->peserta_ujian_id)->first();

      return view('anggotakelas.miskonsepsi', ['hasil_ujian' => $hasil_ujian, 'peserta_ujian' => $peserta_ujian,]);
    }

     public function videoMiskonsepsi1($id){
      $hasil_ujian = HasilUjian::find($id);
      $peserta_ujian = PesertaUjian::where('id', $hasil_ujian->peserta_ujian_id)->first();
      $Reduksimsatu = Reduksimsatu::paginate(1);

      return view('anggotakelas.miskonsepsiSatu', ['hasil_ujian' => $hasil_ujian, 'peserta_ujian' => $peserta_ujian, 'Reduksimsatu' => $Reduksimsatu,]);
    }

     public function videoMiskonsepsi2($id){
      $hasil_ujian = HasilUjian::find($id);
      $peserta_ujian = PesertaUjian::where('id', $hasil_ujian->peserta_ujian_id)->first();
      $Reduksimdua = Reduksimdua::paginate(1);

      return view('anggotakelas.miskonsepsiDua', ['hasil_ujian' => $hasil_ujian, 'peserta_ujian' => $peserta_ujian, 'Reduksimdua' => $Reduksimdua]);
    }

    public function videoMiskonsepsi3($id){
      $hasil_ujian = HasilUjian::find($id);
      $peserta_ujian = PesertaUjian::where('id', $hasil_ujian->peserta_ujian_id)->first();
      $Reduksimtiga = Reduksimtiga::paginate(1);

      return view('anggotakelas.miskonsepsiTiga', ['hasil_ujian' => $hasil_ujian, 'peserta_ujian' => $peserta_ujian, 'Reduksimtiga' => $Reduksimtiga]);
    }

    public function videoMiskonsepsi4($id){
      $hasil_ujian = HasilUjian::find($id);
      $peserta_ujian = PesertaUjian::where('id', $hasil_ujian->peserta_ujian_id)->first();
      $Reduksimempat = Reduksimempat::paginate(1);

      return view('anggotakelas.miskonsepsiEmpat', ['hasil_ujian' => $hasil_ujian, 'peserta_ujian' => $peserta_ujian, 'Reduksimempat' => $Reduksimempat]);
    }
    public function videoMiskonsepsi5($id){
      $hasil_ujian = HasilUjian::find($id);
      $peserta_ujian = PesertaUjian::where('id', $hasil_ujian->peserta_ujian_id)->first();
      $Reduksimlima = Reduksimlima::paginate(1);


      return view('anggotakelas.miskonsepsiLima', ['hasil_ujian' => $hasil_ujian, 'peserta_ujian' => $peserta_ujian, 'Reduksimlima' => $Reduksimlima]);
    }
    public function videoMiskonsepsi6($id){
      $hasil_ujian = HasilUjian::find($id);
      $peserta_ujian = PesertaUjian::where('id', $hasil_ujian->peserta_ujian_id)->first();
      $Reduksimenam = Reduksimenam::paginate(1);

      return view('anggotakelas.miskonsepsiEnam', ['hasil_ujian' => $hasil_ujian, 'peserta_ujian' => $peserta_ujian, 'Reduksimenam' => $Reduksimenam]);
    }

    //LANJUT BUAT FUNGSi

}
