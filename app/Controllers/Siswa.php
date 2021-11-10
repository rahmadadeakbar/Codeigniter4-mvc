<?php

namespace App\Controllers;

class Siswa extends BaseController
{
    public function index()
    {
        echo'Halo ini adalah controller siswa<a href="'.route_to('profil').'">Link ke Routing Profil</a>';
    }

    public function nama()
    {
        echo'hai saya adalah budi';
    }

    public function profil()
    {
        echo 'ini adalah metode profil controller siswa';
    }
}
