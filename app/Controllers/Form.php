<?php

namespace App\Controllers;

class Form extends BaseController
{
    public function post_request()
    {
        //memanggil view
        return view('post_request');
    }

    public function post_response()
    {
        //data diambil dari view get_request
        $nama = $this->request->getVar('nama');
        $usia = $this->request->getVar('usia');

        if($usia<=5){
            $rentang_umur = 'Balita';
        }elseif($usia<=12){
            $rentang_umur = 'Anak';
        }elseif($usia<=12){
            $rentang_umur = 'Remaja';
        }elseif($usia<=50){
            $rentang_umur = 'Dewasa';
        }elseif($usia<=100){
            $rentang_umur = 'Lansia';
        }else{
            $rentang_umur = 'Tidak Terdefinisi';
        }
        
        //data dikirim ke view get_response
        $output = [
            'nama' => $nama,
            'rentang_umur' => $rentang_umur,
        ];

        //memanggil view dengan membawa data output
        return view('post_response', $output);
    }

    public function get_request()
    {
        //memanggil view
        return view('get_request');
    }

    //$tanda diambil dari config/routes get_response/$1
    public function get_response($tanda)
    {   

        if($tanda=="jalan"){
            $tanda_warna = 'green';
        }elseif($tanda=="pelan"){
            $tanda_warna = 'orange';
        }elseif($tanda=="berhenti"){
            $tanda_warna = 'red';
        }else{
            $tanda_warna = '';
        }

        //data dikirim ke view get_response
        $output = [
            'tanda' => $tanda,
            'warna' => $tanda_warna
        ];

        //memanggil view dengan membawa data output
        return view('get_response', $output);
    }
}