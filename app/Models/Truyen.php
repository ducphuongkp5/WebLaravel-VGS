<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Truyen extends Model
{
    use HasFactory;
    
    protected $table='truyens'; // khai bao table
    public function getAllManga(){
        $truyen= Truyen::all();
        return $truyen;
    }

    public function getInfoManga(){
        
    }
    public function addManga($data){
        DB::insert('INSERT INTO truyens (IDTRUYEN,TENTRUYEN,ANHTRUYEN,THELOAITRUYEN,GIOITHIEU,SOCHAPTER,VIEW,LUOTTHEODOI,TACGIA,TINHTRANG,TENKHAC,LastChapter,LastUpdate) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)', $data);
    }
    public function updateManga($data){
        DB::update('UPDATE truyens SET (IDTRUYEN,TENTRUYEN,ANHTRUYEN,THELOAITRUYEN,GIOITHIEU,SOCHAPTER,VIEW,LUOTTHEODOI,TACGIA,TINHTRANG,TENKHAC,LastChapter,LastUpdate) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)', $data);

    }
    public function deleteManga($id){

    }
}
