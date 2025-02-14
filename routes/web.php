<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('welcome');
});

Route::get('/tampilan', function () {
    return view('tampilan');
});

Route::get('/tampilan/{nilai}-{nilai2}', function ($nilai, $nilai2) {
    return view('tampilan', [
        'nilai_1' => $nilai,
        'nilai_2' => $nilai2
    ]);
});

Route::get('/biodataku/{nama}/{asal_daerah}/{prodi}/{angkatan}', function ($nama, $asal_daerah, $prodi, $angkatan) {
    return view('biodataku', data: [
        'nama' => $nama,
        'asal_daerah' => $asal_daerah,
        'prodi' => $prodi,
        'angkatan' => $angkatan
    ]);
});

// section baru

Route::get('/dashboard', function () {
    return view('latihan2.dashboard');
})->name('dashboard');

Route::get('/daftar', function () {
    return view('latihan2.daftar');
})->name('daftar');

// ujian
Route::get('/my/home', function () {
    return view('ujian.home');
})->name('my.home');

Route::get('my/nama', function () {
    return view('ujian.nama');
})->name('nama');

Route::get('my/asal_daerah', function () {
    return view('ujian.asal_daerah');
})->name('asal_daerah');

Route::get('my/prodi', function () {
    return view('ujian.prodi');
})->name('prodi');

Route::get('my/angkatan', function () {
    return view('ujian.angkatan');
})->name('angkatan');

// Route::get('my/students', function () {
//     $students = Student::all();
//     return view("ujian.student", ["students" => $students]);
// });

// Route::get('my/students/create', function () {
//     Student::create([
//         "nim" => "F1E123007",
//         "name" => "Sasa",
//         "prodi" => "Teknik Informatika",
//         "angkatan" => 2022,
//         "asal" => "Jambi",
//         "alamat" => "Pattimura"
//     ]);
// });

// Route::get("my/students/update/{id}", function ($id) {
//     Student::find($id)->update([
//         "nim" => "F1E123007 update",
//         "name" => "Sasa update",
//         "prodi" => "Teknik Informatika update",
//         "angkatan" => 2022,
//         "asal" => "Jambi update",
//         "alamat" => "Pattimura update"
//     ]);
//     echo "Data dengan id $id berhasil diupdate";
// });


// Route::get("my/students/delate/{id}", function ($id) {
//     Student::find($id)->delete();
//     echo "Data dengan id $id berhasil di hapus";
// });

// Route::get('my/products', function () {
//     $products = Product::all();
//     return view("ujian.products", ["products" => $products]);
// });

// Route::get('my/products/create', function () {
//     Product::create([
//         "nim" => "F1E123007",
//         "name" => "Sasa",
//         "prodi" => "Teknik Informatika",
//         "angkatan" => 2022,
//         "asal" => "Jambi",
//         "alamat" => "Pattimura"
//     ]);
// });

// Route::get("my/products/update/{id}", function ($id) {
//     Product::find($id)->update([
//         "nim" => "F1E123007 update",
//         "name" => "Sasa update",
//         "prodi" => "Teknik Informatika update",
//         "angkatan" => 2022,
//         "asal" => "Jambi update",
//         "alamat" => "Pattimura update"
//     ]);
//     echo "Data dengan id $id berhasil diupdate";
// });


// Route::get("my/products/delate/{id}", function ($id) {
//     Product::find($id)->delete();
//     echo "Data dengan id $id berhasil di hapus";
// });

Route::resource("/student", StudentController::class);


