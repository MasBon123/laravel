<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\MyController;
use App\http\Controllers\PostController;
use App\http\Controllers\BarangController;
use App\http\Controllers\PesananController;
use App\http\Controllers\PembelianController;
use App\http\Controllers\PembeliController;
use App\http\Controllers\SuplierController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function () {
    return'<h1>Halo Dunia</h1>';
});

Route::get('biodata/{nama}/{jenis}/{hobi}/{status}/{domisili}/',function($nama,$jenis,$hobi,$status,$domisili){
    echo "Nama Saya : " .$nama;
    echo "<br>Jenis Kelamin : " .$jenis;
    echo "<br>Hobi : " .$hobi;
    echo "<br>Status : " .$status;
    echo "<br>Domisili : " .$domisili;
});

Route::get('input/{nama}/',function($nama){
    echo"Nama Saya : " .$nama;
});

Route::get('pol/{nama}/{usia?}',function($nama,$usia=17){
    echo"Nama Saya : " .$nama. "<br>";
    echo"Usia Saya : " .$usia;
});

Route::get('ujian/{nama}/{kelas}/{MTK?}/{IND?}/{INGR?}/{PRO?}',function($nama,$kelas,$MTK=0,$IND=0,$INGR=0,$PRO=0){
    echo"Nama Saya : " .$nama;
    echo"<br>Kelas : " .$kelas;
    echo"<br>Matematika : " .$MTK;
    echo"<br>Indonesia : " .$IND;
    echo"<br>Inggris : " .$INGR;
    echo"<br>Produktif : " .$PRO;
    $rata=$MTK+$IND+$INGR+$PRO/4;
    echo "<br>rata: $rata";
});

Route::get('pesanan/{makananan?}/{minuman?}/{cemilan?}',function($a=null,$b=null,$c=null){
    if( $a == null && $b == null && $c == null) {
        $pesan = "Anda Tidak memesan apapun, Silahkan pulang";
    } if ($a !== null) {
        $pesan = "Anda Memesan <br> Makanan :  $a <br>"; 
    } if ($a !== null && $b !== null) {
        $pesan = "Anda Memesan <br> Makanan :  $a <br> Minuman : $b <br>"; 
    } if ($a !== null && $b !== null && $c !== null) {
        $pesan = "Anda Memesan <br> Makanan :  $a <br> Minuman : $b <br> Cemilan :  $c"; 
    }
    return $pesan;
});

Route::get('/jojo', function () {
    return view('halo');
});

Route::get('/hal2', function () {
    $nama = "jojo";
    return view('halo','');

});

Route::get('/siswa', function () {
    $siswas = [
        ['id' => 1,
        'nama' => 'aditya',
        'username' => 'Aditya',
        'email' => 'aditya@gmail.com',
        'alamat' => 'bandung',
        'mapel' => [
            'mapel1' => 'bahasa indonesia',
            'maoel2' => 'bahhasa inggris',
            'mapel3' => 'bahasa sunda'
        ]
        ]
    ];
    return view('siswa', compact('siswas'));

});


Route::get('/datasiswa', function () {
    $data = [
        ['Nis' => 123 ,'nama' => 'jojo', 'jk' => 'laki-laki', 'jurusan' => 'RPL', 'kelas' => 'RPL1', 'wali kelas' => 'Masbon'],
        ['Nis' => 123 ,'nama' => 'jojo', 'jk' => 'laki-laki', 'jurusan' => 'RPL', 'kelas' => 'RPL1', 'wali kelas' => 'Masbon'],
        ['Nis' => 123 ,'nama' => 'jojo', 'jk' => 'laki-laki', 'jurusan' => 'RPL', 'kelas' => 'RPL1', 'wali kelas' => 'Masbon']
    ];
    return view('datasiswa', compact('data'));

});

Route::get('/hobi', function () {
    $hobi = [
        ['nis' => 1,
        'nama' => 'jujun',
        'kelas' => 'RPL1',
        'hobi' => [
            'hobi1' => 'gelut',
            'hobi2' => 'sare',
            'hobi3' => 'ngopi',
            'hobi4' => 'ulin'
        ]
        ],
        ['nis' => 2,
        'nama' => 'japra',
        'kelas' => '15RPL2',
        'hobi' => [
            'hobi1' => 'mancing',
            'hobi2' => 'maen slot',
            'hobi3' => 'togel',
            'hobi4' => 'berenang'
        ]
        ]
        
    ];
    return view('hobi', compact('hobi'));

});

Route::get('/testmodel', function () {
    $query = App\Models\Post::all();
    return $query;
});

Route::get('/test-post', function () {
    $query = App\Models\Post::all();
    return view('test-post', compact('query'));
});
Route::get('/test-biodata', function () {
    $query = App\Models\Biodatas::all();
    return view('biodatas', compact('query'));

});



//Route::get('contoh', function() {
 //   return view('sample');
//});


Route::get('/contoh', [MyController::class, 'tampilkan']);
Route::get('/artikel', [PostController::class,'data']);
Route::get('/barang', [BarangController::class, 'data']);
Route::get('/pesanan', [PesananController::class, 'data']);
Route::get('/pembelian', [PembelianController::class, 'data']);
Route::get('/pembeli', [PembeliController::class, 'data']);
Route::get('/suplier', [SuplierController::class, 'data']);
