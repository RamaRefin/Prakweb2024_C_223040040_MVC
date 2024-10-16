<?php

class About {
    public function index($nama = 'asep', $pekerjaan = 'Pacul')
    {
        echo "Halo, nama saya $nama, Saya seorang $pekerjaan";
    }
    public function page() 
    {
        echo 'About/page';
    }
}