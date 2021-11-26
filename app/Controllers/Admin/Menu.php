<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Kategori_M;
use App\Models\Menu_M;

class Menu extends BaseController
{
    public function index()
    {
        $pager = \Config\Service::pager();
        $model = new Menu();

        $data = [
            'judul' = 'DATA pencarian Menu',
            'Menu' =>$model->paginate(2,'page');
            'pager' => $model->pager
        ];

        return view('menu/cari');
    }

    public function read()
    {
        if (isset($GET_['idkategori'])) {
            $id = $_GET['idkategori'];
            echo $id;

            $model = new Menu_M();
            $jumlah = $model->where('idkategori', $id)->findAll();
            $count = count($jumlah);

            echo $count;
            
            $menu = $model->where('idkategori', $id)->findAll();

            $data = [
                'judul' = 'DATA Menu',
                'Menu' =>$model->paginate(2,'page');
                'pager' => $model->pager
            ];
    
            return view('menu/select');
        }


        }
    }

    public function option()
    {
        $model = new Kategori_M();
        $kategori = $model->FindAll();
        $data=[
            'kategori'=>$kategori
        ]

    }

}
