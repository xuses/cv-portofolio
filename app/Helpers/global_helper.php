<?php

use App\Models\metadata;

function get_meta_value($meta_key)
{
    $data = metadata::where('meta_key', $meta_key)->first();
    if ($data){
        return $data->meta_value;
    }
}

function set_about_nama($nama)
{
    //
    $arr = explode(" ", $nama);//idx 1 Andri idx 2 ansyah
    $kataakhir = end($arr);
    $kataakhir2 = "<span class='text-primary'>$kataakhir</span>";
    array_pop($arr);// Andri
    $namaAwal = implode("", $arr);
    return $namaAwal . " " . $kataakhir2;
}

function set_list_Penghargaan($isi)
{
    //
    $isi = str_replace("<li>", '<li><span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>', $isi);
    $isi = str_replace("<ul>", '<ul class="fa-ul mb-0">', $isi);
    return $isi;
}

function set_list_workflow($isi)
{
    //
    $isi = str_replace("<li>", '<li><span class="fa-li"><i class="fas fa-check"></i></span>', $isi);
    $isi = str_replace("<ul>", '<ul class="fa-ul mb-0">', $isi);
    return $isi;
}