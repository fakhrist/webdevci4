<?php
namespace App\Controllers;

//memanggil model
use App\Models\ProvinsiModel;

class Provinsi extends BaseController
{
    public function __construct()
    {
        //load model untuk digunakan
        $this->ProvinsiModel = new ProvinsiModel();
    }

    public function list()
    {
        //select data from table kategori
        $list = $this->ProvinsiModel->select('id, nama, wilayah')->orderBy('id')->findAll();

        $output = [
            'list' => $list,
        ];

        return view('provinsi_list', $output);
    }

    public function insert()
    {
        return view('provinsi_insert');
    }

    public function insert_save()
    {
        $nama = $this->request->getVar('nama');
        $zona = $this->request->getVar('zona_waktu');

        //insert data ke table kategori
        $this->ProvinsiModel->insert([
            'nama' => $nama,
            'wilayah' => $zona,
        ]);

        return redirect()->to('provinsi');
    }

}