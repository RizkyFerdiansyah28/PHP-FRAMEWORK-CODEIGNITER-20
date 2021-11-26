<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\KAtegori_M;

class Menu extends BaseController
{
    public function index()
    {
        return view('mennu/form');
    }
    
    public function insert()
    {
        $file = $this->request->getFile('gambar');
        
        $name = $file->getName();
        
        $file->move('.upload');
        echo $name."sudah di upload";
    }
    
    public function option()
    {
        $model = new Kategori_M();
        $kategori = $model->FindAll();
        $data=[
            'kategori'=>$kategori
        ]
        return view('template/option', $data);
    }
    
}

