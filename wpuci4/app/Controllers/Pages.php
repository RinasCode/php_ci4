<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
      $data = [
         'title' => 'Home | Rina Sismita',
         'test' => ['satu', 'dua', 'tiga']
      ];
      // pakai view layout.
      //  echo view ('layout/header',$data); 
      //  echo view ('pages/home'$data); 
      //  echo view ('layout/footer');  
       return view ('pages/home', $data); 
       
    }
 
    public function about()
    {  

      $data = [
         'title' => 'About Me'
      ];

      //  echo view ('layout/header', $data); 
      return view ('pages/about', $data); 
      //  echo view ('layout/footer'); 
    }

    public function contact()
    {
      $data = [
         'title' => 'Contact Us',
         'alamat' => [
            [
               'tipe' => 'Rumah',
               'alamat' => 'Jl. Abc No. 123',
               'kota' => 'Bandung'
            ],
            [
               'tipe' => 'Kantor',
               'alamat' => 'Jl. Setiabudi No. 193',
               'kota' => 'Bandung'
            ]
         ]
      ];

      //  echo view ('layout/header', $data); 
      return view ('pages/contact', $data); 
      //  echo view ('layout/footer'); 
    }
}

