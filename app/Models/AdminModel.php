<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class AdminModel extends Model
{

    //awal model admin ->untuk menu tagihan 
    public function allDataTagihan()
    {
        return  DB::table('tbl_tagihan')
            ->orderBy('id_tagihan', 'asc')
            ->get();
    }

    public function detailDataTagihan($id_tagihan)
    {
        return DB::table('tbl_tagihan')->where('id_tagihan', $id_tagihan)->first();
    }

    public function addData($data)
    {
        DB::table('tbl_tagihan')->insert($data);
    }

    public function editData($id_tagihan, $data)
    {
        DB::table('tbl_tagihan')
            ->where('id_tagihan', $id_tagihan)
            ->update($data);
    }

    public function deleteData($id_tagihan)
    {
        DB::table('tbl_tagihan')
            ->where('id_tagihan', $id_tagihan)
            ->delete();
    }
    //akhir model admin ->untuk menu tagihan 

    public function allDataUsers()
    {
        return  DB::table('tbl_user')->get();
    }

    public function addDataUsers($data)
    {
        DB::table('tbl_user')->insert($data);
    }

    public function detailDataUsers($id_user)
    {
        return DB::table('tbl_user')->where('id_user', $id_user)->first();
    }

    public function editDataUsers($id_user, $data)
    {
        DB::table('tbl_user')
            ->where('id_user', $id_user)
            ->update($data);
    }

    public function deleteDataUsers($id_user)
    {
        DB::table('tbl_user')
            ->where('id_user', $id_user)
            ->delete();
    }

    // model untuk transaksi admin
    public function allTransaksiAdmin()
    {
        return  DB::table('tbl_transaksi_admin')
            ->leftJoin('tbl_user', 'tbl_user.id_user', '=', 'tbl_transaksi_admin.id_user')
            ->leftJoin('tbl_tagihan', 'tbl_tagihan.id_tagihan', '=', 'tbl_transaksi_admin.id_tagihan')
            ->leftJoin('tbl_status', 'tbl_status.id_status', '=', 'tbl_transaksi_admin.id_status')
            ->get();
    }

    public function inputDataTagihan($data)
    {
        DB::table('tbl_transaksi_admin')->insert($data);
    }

    public function get_data_tagihan()
    {
        return  DB::table('tbl_tagihan')
            ->orderBy('id_tagihan', 'asc')
            ->get();
    }
}
