<?php

namespace App\Controllers;

class Tentang extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Roda Gila Store',
            'logo' => 'Roda Gila'

        ];

        return view('tentang', $data);
    }
}
