<?php

/**
 * Created by PhpStorm.
 * User: furkankaplan
 * Date: 2.05.2017
 * Time: 22:48
 */
class Films{
    public function getFilmsByID($id){
        global $db;
        $filmler = $db ->prepare("select * from filmler where id=? ");
        $filmler -> execute(array($id));
        $dizi = $filmler -> fetch(PDO::FETCH_ASSOC);
        return $dizi;
    }

    public function getFilmsByGosterimTuru($offset){
        global $db;
        $filmler = $db ->prepare("select * from filmler where gosterim_turu='".$offset."'");
        $filmler -> execute(array());
        $dizi = $filmler -> fetchALL(PDO::FETCH_ASSOC);
        return $dizi;
    }

    public function updateFilms($tarih, $seans, $isim, $stars, $ozet,$fragman, $poster, $gosterim_turu,$id){
        global $db;
        $filmler= $db->prepare("update filmler set gosterim_tarihi=?,seans=?,film_adi=?,oyuncular=?,ozet=?,fragman=?,afis=?,gosterim_turu=? where id=?");
        $updateing = $filmler -> execute(array($tarih,$seans,$isim,$stars,$ozet,$fragman,$poster,$gosterim_turu,$id));
        return $updateing;
    }

    public function getFilmAdi($dizi){
        return $dizi["film_adi"];
    }

    public function getOyuncular($dizi){
        return $dizi["oyuncular"];
    }

    public function getOzet($dizi){
        return $dizi["ozet"];
    }

    public function getSeans($dizi){
        return $dizi["seans"];
    }

    public function getAfis($dizi){
        return $dizi["afis"];
    }

    public function getFragman($dizi){
        return $dizi["fragman"];
    }


    public function getGosterimTarihi($dizi){
        return $dizi["gosterim_tarihi"];
    }


    public function getID($dizi){
        return $dizi["id"];
    }

}

class Seats{
    public function getSeatsByLike($value){
        global $db;
        $a= $db->prepare ("select * from koltuklar where koltuk_adi like '%".$value."%'");
        $a -> execute(array());
        $adizi=$a->fetchALL(PDO::FETCH_ASSOC);
        return $adizi;
    }

    public function writeSeats($dizi){
        $koltuk_adi=  $dizi["koltuk_adi"];
        $durum= $dizi["durum"];

        if($durum=='0'){
            $hazir = "disabled";
        }
        else{
            $hazir=" ";
        }

        return '<button class="btn btn-success"  '.$hazir.' value="'.$koltuk_adi.'">' .$koltuk_adi. '</button>';
    }
}

class Kullanicilar{
    public function login($email, $sifre){
        global $db;
        $sorgu=$db->prepare("select * from kullanicilar where uye_eposta=? and uye_sifre=?");
        $sorgu->execute(array($email,$sifre));
        $dizi=$sorgu->fetch(PDO::FETCH_ASSOC);
        $sayi=$sorgu->rowCount();
        if(!$sayi){ // üye bilgileri yanlış ise.
            return "ERROR";
        }else{
            return $dizi;
        }
    }

    public function updateKullanicilar($isim, $soyisim,$sifre,$eposta,$id){
        global $db;
        $kullanicilar= $db->prepare("update kullanicilar set uye_adi=?, uye_soyadi=?, uye_sifre=?, uye_eposta=? where id=?");

        $updateing = $kullanicilar -> execute(array($isim,$soyisim,$sifre,$eposta,$id));
        return $updateing;
    }

    public function getUyeAdi($dizi){
        return $dizi["uye_adi"];
    }

    public function getUyeStatu($dizi){
        return $dizi["uye_statu"];
    }

    public function getUyeSoyadi($dizi){
        return $dizi["uye_soyadi"];
    }

    public function getUyeSifre($dizi){
        return $dizi["uye_sifre"];
    }

    public function getUyeEposta($dizi){
        return $dizi["uye_eposta"];
    }

    public function getUyeID($dizi){
        return $dizi["uye_id"];
    }
}

class Sosyalmedya{
    public function getSosyalmedya(){
        global $db;
        $sosyalmedya = $db ->prepare("select * from sosyalmedya");
        $sosyalmedya -> execute(array());
        $dizi = $sosyalmedya -> fetch(PDO::FETCH_ASSOC);
        return $dizi;
    }

    public function updateSosyalmedya($facebook,$googleplus,$instagram){
        global $db;
        $sosyalmedya= $db->prepare("update sosyalmedya set facebook=?,googleplus=?,instagram=?");
        $updateing = $sosyalmedya -> execute(array($facebook,$googleplus,$instagram));
        return $updateing;
    }

    public function getFacebook($dizi){
        return $dizi["facebook"];
    }

    public function getGooglePlus($dizi){
        return $dizi["googleplus"];
    }

    public function getInstagram($dizi){
        return $dizi["instagram"];
    }
}

class Slider{

    public function getSlider($id){
        global $db;
        $slider_film = $db ->prepare("select * from slider_film where id=? ");
        $slider_film -> execute(array($id));
        $elements = $slider_film -> fetch(PDO::FETCH_ASSOC);
        return $elements;
    }
    public function insertSlider($slidename,$isim,$slidewriting,$slidelink){
        global $db;
        $slider_film = $db->prepare("insert into slider set slayt_adi=?, slide_resim=?, slide_yazi=?, slide_linki=? ");
        $adding = $slider_film -> execute(array($slidename,$isim,$slidewriting,$slidelink));
        return $adding;
    }
    public function getAdi($dizi){
        return $dizi["slider_adi"];
    }

    public function getLink($dizi){
        return $dizi["slider_link"];
    }

    public function getResmi($dizi){
        return $dizi["slider_resmi"];
    }
    public function getYazi($dizi){
        return $dizi["slider_yazi"];
    }

    public function getID($dizi){
        return $dizi["id"];
    }

}

class SliderFilm{
    public function updateSliderFilm($slayt_adi,$slide_resim,$slide_yazi,$slide_link,$id){
        global $db;
        $sorgu2=$db->prepare("update slider_film set slider_adi=?,slider_resmi=?,slider_yazi=?,slide_link=? where id=?");
        $slayt_duzenle=$sorgu2->execute(array($slayt_adi,$slide_resim,$slide_yazi,$slide_link,$id));
        return $slayt_duzenle;
    }
}