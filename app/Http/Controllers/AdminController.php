<?php

namespace App\Http\Controllers;

use App\Models\Chap;
use App\Models\Truyen;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    private $manga;

    public function __construct()
    {
         $this->manga= new Truyen();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
           
        // $user= User::find(1); // lenh select
        //dd($user); // ==printf_r
        
        $chap= Truyen::all();

        return view('admin.admin', compact('chap'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //create
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //read
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
        //update
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function delete(){
         return view('admin.delete');
     }

     public function postAddManga(Request $request){

        $request->validate([
            'tentruyen'=>'required|min:5',
            'theloai'=>'required'
        ],[
            'tentruyen.required' =>'Ho ten bat buo nhap',
            'tentruyen.min'=> 'ho ten lon hon 5 ki tu',
            'theloai.required' =>'The loai phai nhap',
            
        ]);

        $dataInsert= [
            10,
            $request->tentruyen,
            $request->anhtruyen,
            $request->theloai,
            $request->gioithieu,
            0,
            0,
            0,
            $request->tacgia,
            'Dang tien hanh',
            $request->tenkhac,
            0,
            '03/03/22'
        ];

        $this->manga->addManga($dataInsert);

        return redirect()->route('admin.index')->with('msg', 'Them thanh cong');
     }

    public function updateManga(Request $request, $id){
        
    }
    public function deleteManga(Request $request,$id){

    }
    public function destroy($id)
    {
        //delete
    }
}
