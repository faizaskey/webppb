<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function profile()
    {
        echo view("profile");
    }
    public function download()
    {
        echo view("download");
    }
    public function gallery()
    {
        echo view("gallery");
    }
    public function contact()
    {
        $data['name'] = "Pusbasa";
        echo view("contact", $data);
    }
    public function faqs()
    {
        // membuat data untuk dikirim ke view
        $data['data_faqs'] = [
            [
                'question' => 'Pelayanan apa yang disediakan oleh Pusat Pengembangan Bahasa (PPB) UIN Jakarta?',
                'answer' => 'PPB melayani tes Bahasa Inggris, Bahasa Arab (TOAFL), Tes Bahasa Indonesia (BIPA) baik untuk mahasiswa dan umum.'
            ],
            [
                'question' => 'Kapan pelaksanaan tes dan berapa biayanya?',
                'answer' => 'PPB melaksanakan tes setiap hari Rabu dan Kamis. Biaya 75 ribu untuk mahasiswa dan 100 ribu untuk umum.'
            ],
            [
                'question' => 'Apakah PPB melayani kursus bahasa asing?',
                'answer' => 'Ya, PPB melayani kursus bahasa asing mencakup Bahasa Inggris, Arab, Perancis dan BIPA.'
            ],
            [
                'question' => 'Kapan waktu pelaksanaan kursus?',
                'answer' => 'Waktu pelaksanaan kursus akan diumumkan setiap bulannya untuk waktu dan biaya akan ditetapkan nanti.'
            ],
            [
                'question' => 'Apakah PPB melayani terjemahan dokumen?',
                'answer' => 'Ya, PPB menerima pelayanan terjemahan dokumen resmi, seperti ijazah atau transkrip nilai, abstrak dan dokumen lainnya.'
            ]

        ];

        // load view dengan data
        echo view("faqs", $data);
    }
}
