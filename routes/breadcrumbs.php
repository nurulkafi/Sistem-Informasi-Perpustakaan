<?php
Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
});

//Penulis
Breadcrumbs::for('admin.author.index', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Data Penulis', route('admin.author.index'));
});
Breadcrumbs::for('admin.author.create', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Data Penulis', route('admin.author.index'));
    $trail->push('Tambah Data Penulis', route('admin.author.create'));
});
Breadcrumbs::for('admin.author.edit', function ($trail,$author) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Data Penulis', route('admin.author.index'));
    $trail->push('Edit Data Penulis', route('admin.author.edit',$author));
});
//buku
Breadcrumbs::for('admin.book.index', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Data Buku', route('admin.book.index'));
});
Breadcrumbs::for('admin.book.create', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Data Buku', route('admin.book.index'));
    $trail->push('Tambah Data Buku', route('admin.author.create'));
});
Breadcrumbs::for('admin.book.edit', function ($trail,$book) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Data Buku', route('admin.book.index'));
    $trail->push('Ubah Data Buku', route('admin.book.edit',$book));
});