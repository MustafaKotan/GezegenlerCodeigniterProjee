<?php

namespace App\Models;

use CodeIgniter\Model;
//varsa kullanicilar yoksa gezegenler tabloda gösterlir
class AnasayfaModel extends Model
{
    protected $table = 'kullanicilar';

    public function kayitlar()
    {
        $this->table = 'gezegenler';

        return $this->findAll();
    }

    public function kayit_detay($url)
    {
        //// 'gezegenler' tablosuna sorgu yapmak üzere tablo adını değiştirir.
        $this->table = 'gezegenler';
//    // Belirli bir 'url' değerine sahip kaydı bulur ve geri döndürür.
        return $this->where('url',$url)->find();
    }
}