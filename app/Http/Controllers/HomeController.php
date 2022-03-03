<?php

namespace App\Http\Controllers;

use App\Models\Truyen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    private $manga;
    public function __construct()
    {
        $this->manga = new Truyen();
    }
    public function index()
    {
        $truyen= $this->manga->getAllManga();
        
        return view('home', compact('truyen'));
    }

    public function product($id)
    {
        // $tttruyen= Truyen::where('IDTRUYEN', $req->id)->first();
        //$thongtin= $this->manga->getInfoManga();
        $tttruyen = DB::table('truyens')->whereRaw('IDTRUYEN= ?', $id )->first();

        // $thog= DB::select('SELECT * FROM truyens WHERE IDTRUYEN= ?', $req);
        // dd($thog);
         
        //dd($tttruyen);

        // foreach($tttruyen as $tr)
        //     {
        //         echo $tr->IDTRUYEN. '<br/>';
        //         echo $tr->TENTRUYEN;
        //     }


        //die($tttruyen);

        

        return view('product-detail', compact('tttruyen'));
    }
    

}
