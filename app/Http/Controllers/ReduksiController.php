<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reduksimsatu;
use App\Reduksimdua;
use App\Reduksimtiga;
use App\Reduksimempat;
use App\Reduksimlima;
use App\Reduksimenam;
use App\ReduksifalsePositive;
use App\ReduksifalseNegative;
use App\Reduksilk;

class ReduksiController extends Controller
{

     public function fungsiPhy()
    {
        return view('fungsi_phy');
    }

     public function tentangPhy()
    {
        return view('tentang_phy');
    }
     public function panduanPhy()
    {
        return view('panduan_phy');
    }
     public function perancangPhy()
    {
        return view('perancang_phy');
    }


    public function reduksi()
    {
        return view('daftar_reduksi');
    }

    public function tampilReduksi()
    {
    	$tampilReduksi = Reduksimsatu::paginate(1);
    	//paginate
        return view('tampil_reduksi', compact(['tampilReduksi']));
    }

    public function createmsatu()
	{
   return view('form_msatu');
	}

    public function tambahReduksi(Request $request)
    {
        $tambahreduksi = Reduksimsatu::create([
            'des_msc' => $request->des_msc,
            'des_kon' => $request->des_kon,
            'model_reduksi' => $request->model_reduksi,
            'text_reduksi' => $request->text_reduksi,
           
        ]);

        return redirect('tampilReduksi');

     }

    
    public function edit($id)
	{
        $editreduksi = Reduksimsatu::findOrFail($id);

        return view('edit', compact('editreduksi'));
	}

    public function update(Request $request, $id)
	{
        $reduksimsatu = Reduksimsatu::findOrFail($id);
        
        $reduksimsatu->des_msc = $request->des_msc;
        $reduksimsatu->des_kon =$request->des_kon;
        $reduksimsatu->model_reduksi = $request->model_reduksi;
        $reduksimsatu->text_reduksi = $request->text_reduksi;
        $reduksimsatu->save();
       
        return redirect('/tampilReduksi')->with('success', 'Student updated successfully');
	}






    //reduksi M 2

     public function tampilReduksidua()
    {
        $tampilReduksimdua = Reduksimdua::paginate(1);
        //paginate
        return view('tampil_reduksimdua', compact(['tampilReduksimdua']));
    }

    public function create()
    {
    return view('create');
    }


     public function tambahReduksidua(Request $request)
    {
        $tambahreduksi = Reduksimdua::create([
            'des_mscdua' => $request->des_mscdua,
            'des_kondua' => $request->des_kondua,
            'model_reduksidua' => $request->model_reduksidua,
            'text_reduksidua' => $request->text_reduksidua,
           
        ]);

        return redirect('tampilReduksidua');

     }


      public function editmdua($id)
    {
        $editreduksimdua = Reduksimdua::findOrFail($id);

        return view('editmdua', compact('editreduksimdua'));
    }

    public function updatemdua(Request $request, $id)
    {
        $reduksimdua = Reduksimdua::findOrFail($id);
        
        $reduksimdua->des_mscdua = $request->des_mscdua;
        $reduksimdua->des_kondua =$request->des_kondua;
        $reduksimdua->model_reduksidua = $request->model_reduksidua;
        $reduksimdua->text_reduksidua = $request->text_reduksidua;
        $reduksimdua->save();
       
        return redirect('/tampilReduksidua')->with('success', 'Student updated successfully');
    }






    
    //contoler reduksi m3

    public function tampilReduksitiga()
    {
        $tampilReduksimtiga = Reduksimtiga::paginate(1);
        //paginate
        return view('tampil_reduksimtiga', compact(['tampilReduksimtiga']));
    }

    public function createmtiga()
    {
   return view('form_mtiga');
    }


    public function tambahReduksitiga(Request $request)
    {
        $tambahReduksimtiga = Reduksimtiga::create([
            'des_msctiga' => $request->des_msctiga,
            'des_kontiga' => $request->des_kontiga,
            'model_reduksitiga' => $request->model_reduksitiga,
            'text_reduksitiga' => $request->text_reduksitiga,
        ]);

        return redirect('tampilReduksitiga');
    }

    public function editmtiga($id)
    {
        $editreduksimtiga = Reduksimtiga::findOrFail($id);

        return view('editmtiga', compact(['editreduksimtiga']));
    }

    public function updateReduksitiga(Request $request, $id)

    {
        $reduksimtiga = Reduksimtiga::findOrFail($id);

        $reduksimtiga->des_msctiga = $request->des_msctiga;
        $reduksimtiga->des_kontiga =$request->des_kontiga;
        $reduksimtiga->model_reduksitiga = $request->model_reduksitiga;
        $reduksimtiga->text_reduksitiga = $request->text_reduksitiga;
        $reduksimtiga->save();

        return redirect('tampilReduksitiga');

    }


    //controller m4


    public function tampilReduksiempat()
    {
        $tampilReduksimempat = Reduksimempat::paginate(1);
        //paginate
        return view('tampil_reduksimempat', compact(['tampilReduksimempat']));
    }

    public function createmempat()
    {
   return view('form_mempat');
    }


    public function tambahReduksiempat(Request $request)
    {
        $tambahReduksimempat = Reduksimempat::create([
            'des_mscempat' => $request->des_mscempat,
            'des_konempat' => $request->des_konempat,
            'model_reduksiempat' => $request->model_reduksiempat,
            'text_reduksiempat' => $request->text_reduksiempat,
        ]);

        return redirect('tampilReduksiempat');
    }

    public function editmempat($id)
    {
        $editreduksimempat = Reduksimempat::findOrFail($id);

        return view('editmempat', compact(['editreduksimempat']));
    }

    public function updateReduksiempat(Request $request, $id)

    {
        $reduksimempat = Reduksimempat::findOrFail($id);

        $reduksimempat->des_mscempat = $request->des_mscempat;
        $reduksimempat->des_konempat =$request->des_konempat;
        $reduksimempat->model_reduksiempat = $request->model_reduksiempat;
        $reduksimempat->text_reduksiempat = $request->text_reduksiempat;
        $reduksimempat->save();

        return redirect('tampilReduksiempat');

    }

    //controller m5


    public function tampilReduksilima()
    {
        $tampilReduksimlima = Reduksimlima::paginate(1);
        //paginate
        return view('tampil_reduksimlima', compact(['tampilReduksimlima']));
    }

    public function createmlima()
    {
   return view('form_mlima');
    }


    public function tambahReduksilima(Request $request)
    {
        $tambahReduksimlima = Reduksimlima::create([
            'des_msclima' => $request->des_msclima,
            'des_konlima' => $request->des_konlima,
            'model_reduksilima' => $request->model_reduksilima,
            'text_reduksilima' => $request->text_reduksilima,
        ]);

        return redirect('tampilReduksilima');
    }

    public function editmlima($id)
    {
        $editreduksimlima = Reduksimempat::findOrFail($id);

        return view('editmlima', compact(['editreduksimlima']));
    }

    public function updateReduksilima(Request $request, $id)

    {
        $reduksimlima = Reduksimlima::findOrFail($id);

        $reduksimlima->des_msclima = $request->des_msclima;
        $reduksimlima->des_konlima =$request->des_konlima;
        $reduksimlima->model_reduksilima = $request->model_reduksilima;
        $reduksimlima->text_reduksilima = $request->text_reduksilima;
        $reduksimlima->save();

        return redirect('tampilReduksilima');

    }




    //controler m6enam


    public function tampilReduksienam()
    {
        $tampilReduksimenam = Reduksimenam::paginate(1);
        //paginate
        return view('tampil_reduksimenam', compact(['tampilReduksimenam']));
    }

    public function createmenam()
    {
   return view('form_menam');
    }


    public function tambahReduksienam(Request $request)
    {
        $tambahReduksimenam = Reduksimenam::create([
            'des_mscenam' => $request->des_mscenam,
            'des_konenam' => $request->des_konenam,
            'model_reduksienam' => $request->model_reduksienam,
            'text_reduksienam' => $request->text_reduksienam,
        ]);

        return redirect('tampilReduksienam');
    }

    public function editmenam($id)
    {
        $editreduksimenam = Reduksimenam::findOrFail($id);

        return view('editmenam', compact(['editreduksimenam']));
    }

    public function updateReduksienam(Request $request, $id)

    {
        $reduksimenam = Reduksimenam::findOrFail($id);

        $reduksimenam->des_mscenam = $request->des_mscenam;
        $reduksimenam->des_konenam =$request->des_konenam;
        $reduksimenam->model_reduksienam = $request->model_reduksienam;
        $reduksimenam->text_reduksienam = $request->text_reduksienam;
        $reduksimenam->save();

        return redirect('tampilReduksienam');

    }


     //controler False Positive


    public function tampilReduksifalsePositive()
    {
        $tampilReduksifalsePositive = ReduksifalsePositive::paginate(1);
        //paginate
        return view('tampil_reduksifalsePositive', compact(['tampilReduksifalsePositive']));
    }

    public function createfalsePositive()
    {
   return view('form_falsePositive');
    }


    public function tambahReduksifalsePositive(Request $request)
    {
        $tambahReduksifalsePositive = ReduksifalsePositive::create([
            
            'model_reduksifalsePositive' => $request->model_reduksifalsePositive,
            'text_reduksifalsePositive' => $request->text_reduksifalsePositive,
        ]);

        return redirect('tampilReduksifalsePositive');
    }

    public function editfalsePositive($id)
    {
        $editreduksifalsePositive = ReduksifalsePositive::findOrFail($id);

        return view('editfalsePositive', compact(['editreduksifalsePositive']));
    }

    public function updateReduksifalsePositive(Request $request, $id)

    {
        $reduksifalsePositive = ReduksifalsePositive::findOrFail($id);

        
        $reduksifalsePositive->model_reduksifalsePositive = $request->model_reduksifalsePositive;
        $reduksifalsePositive->text_reduksifalsePositive = $request->text_reduksifalsePositive;
        $reduksifalsePositive->save();

        return redirect('tampilReduksifalsePositive');

    }




    //Controler False Negative

     public function tampilReduksifalseNegative()
    {
        $tampilReduksifalseNegative = ReduksifalseNegative::paginate(1);
        //paginate
        return view('tampil_reduksifalseNegative', compact(['tampilReduksifalseNegative']));
    }

    public function createfalseNegative()
    {
   return view('form_falseNegative');
    }


    public function tambahReduksifalseNegative(Request $request)
    {
        $tambahReduksifalseNegative = ReduksifalseNegative::create([
            
            'model_reduksifalseNegative' => $request->model_reduksifalseNegative,
            'text_reduksifalseNegative' => $request->text_reduksifalseNegative,
        ]);

        return redirect('tampilReduksifalseNegative');
    }

    public function editfalseNegative($id)
    {
        $editreduksifalseNegative = ReduksifalseNegative::findOrFail($id);

        return view('editfalseNegative', compact(['editreduksifalseNegative']));
    }

    public function updateReduksifalseNegative(Request $request, $id)

    {
        $reduksifalseNegative = ReduksifalseNegative::findOrFail($id);

        
        $reduksifalseNegative->model_reduksifalseNegative = $request->model_reduksifalseNegative;
        $reduksifalseNegative->text_reduksifalseNegative = $request->text_reduksifalseNegative;
        $reduksifalseNegative->save();

        return redirect('tampilReduksifalseNegative');

    }









        //Controler Lack Of KnowlkLack

     public function tampilReduksilk()
    {
        $tampilReduksilk = Reduksilk::paginate(1);
        //paginate
        return view('tampil_reduksilk', compact(['tampilReduksilk']));
    }

    public function createlk()
    {
   return view('form_lk');
    }


    public function tambahReduksilk(Request $request)
    {
        $tambahReduksilk = Reduksilk::create([
            
            'model_reduksilk' => $request->model_reduksilk,
            'text_reduksilk' => $request->text_reduksilk,
        ]);

        return redirect('tampilReduksilk');
    }

    public function editlk($id)
    {
        $editreduksilk= Reduksilk::findOrFail($id);

        return view('editlk', compact(['editreduksilk']));
    }

    public function updateReduksilk(Request $request, $id)

    {
        $reduksilk= Reduksilk::findOrFail($id);

        
        $reduksilk->model_reduksilk = $request->model_reduksilk;
        $reduksilk->text_reduksilk = $request->text_reduksilk;
        $reduksilk->save();

        return redirect('tampilReduksilk');

    }


}   