<?php

namespace App\Controllers;

class Services extends BaseController
{
    public function layanan()
    {
        echo view('layanan');
    }
    public function terjemahan()
    {
        echo view('terjemahan');
    }
}
