<?php
namespace App\Controllers;

//Calling Model
use App\Models\KotaModel;
use App\Models\ProvinsiModel;

class Kota extends BaseController
{
    public function __construct()
    {
        //Load Model Terkait
        $this->KotaModel = new KotaModel();
        $this->ProvinsiModel = new ProvinsiModel();
    }

    public function list()
    {
        //Query Data Kota
        $list = $this->KotaModel->select('kota.id, kota.provinsi_id, kota.nama AS city, provinsi.nama AS prov, provinsi.wilayah')->join('provinsi','kota.provinsi_id = provinsi.id')->orderBy('kota.provinsi_id, kota.id')->findAll();

        $output = [
            'list' => $list,
        ];

        return view('kota_list', $output);
    }

    public function insert()
    {
        //select data from table kategori (untuk data di selectbox/dropdown)
        $data_prov = $this->ProvinsiModel->orderBy('wilayah')->findAll();

        $output = [
            'data_prov' => $data_prov,
        ];

        return view('kota_insert', $output);
    }

    public function insert_save()
    {
        $prov = $this->request->getVar('provinsi');
        $kota = $this->request->getVar('nama_kota');

        //insert data ke table buku
        $this->KotaModel->insert([
            'provinsi_id' => $prov,
            'nama' => $kota,
        ]);

        return redirect()->to('kota');
    }

    public function update($id)
    {
        //select data kategori yang dipilih (filter by id)
        $data =  $this->KotaModel->where('id', $id)->first();
        
        //select data from table kategori (untuk data di selectbox/dropdown)
        $data_kategori = $this->ProvinsiModel->orderBy('wilayah')->findAll();

        $output = [
            'data' => $data,
            'data_kategori' => $data_kategori,
        ];

        return view('kota_update', $output);
    }

    public function update_save($id)
    {
        $prov = $this->request->getVar('nama_prov');
        $kota = $this->request->getVar('nama_kota');

        //update data ke table buku filter by id
        $this->KotaModel->update($id, [
            'provinsi_id' => $prov,
            'nama' => $kota,
        ]);

        return redirect()->to('kota/');
    }

    public function delete($id)
    {   
        //delete data table buku filter by id
        $this->KotaModel->delete($id);
        return redirect()->to('kota/');
    }
}