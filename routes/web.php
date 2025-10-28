<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profil/{nama}', function ($nama) {
    return "Halo, ini adalah profil milik: <b>$nama</b>";
});

Route::get('/produk/{kategori}/{id}', function ($kategori, $id) {
 return "Kategori: <b>$kategori</b> <br> ID Produk: <b>$id</b>";
});

Route::get('/profil/{nama}', function ($nama) {
 return view('profil', ['nama' => $nama]);
});



Route::get('/tiket/{tempat}/{harga}', function ($tempat, $harga) {
    return view('tiket', [
        'tempat' => $tempat,
        'harga' => $harga
    ]);
});
