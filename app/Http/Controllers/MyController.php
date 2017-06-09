<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //passing data basic
    public function percobaan()
    {
    	$a = "Ari Ardiansyah";
    	return "Nama Saya Adalah : ".$a;
    }
    //passing data view
    public function percobaan2()
    {
    	return view('about');
    }
    //passing data
    public function percobaan3()
    {
    	$a = 'Ari Ardiansyah';
    	return view('latihan.saya', compact('a'));
    }
     public function percobaan4()
    {
    	$a = 'Ari Ardiansyah';
    	$b = 'XII RPL 1';
    	$c = 'SMK ASSALAAM';
    	return view('latihan.saya', compact('a','b','c'));
    }
    public function percobaan5()
    {
    	$a=1;
    	$b=2;
    	$c=3;
    	return view('seleksi',compact('a','b','c'));
    }
    public function percobaan6()
    { 
        $nomor=99;
    	$buah = ['mangga','jeruk','apel','anggur'];
    	return view('buah',compact('nomor','buah'));
    }

    public function percobaan7()
    { 
        $binatang = ['Sapi','Monyet','Ikan Tuna','Belalang','Burung Kakatua'];
        $komputer = ['Asus','Dell','Toshiba','Samsung','Acer','Axioo','Hp'];
        $buah = ['Mangga','Jeruk','Apel','Anggur','Melon','Manggis'];
        return view('latihan.all',compact('binatang','buah','komputer'));
    }

    public function param($id)
    {
        $campur = ['binatang'=>['Sapi','Monyet','Ikan Tuna','Belalang','Burung Kakatua'],
                    'komputer'=>['Asus','Dell','Toshiba','Samsung','Acer','Axioo','Hp'],
                    'buah'=>['Mangga','Jeruk','Apel','Anggur','Melon','Manggis']];
        $data=$campur[$id];
        return view('all',compact('data'));

    }

  
}
