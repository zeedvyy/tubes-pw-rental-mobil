<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
    return view('User.landingPage.landing-page');
});

//Auth
Route::get('/login', function () {
    return view('Auth.login');
});
Route::get('/register', function () {
    return view('Auth.register');
});
//Login
Route::post('actionLogin', [AuthController::class, 'actionLogin'])->name('actionLogin');
//Register

Route::get('/logout', [AuthController::class, 'actionLogout'])->name('logout');

Route::group(['middleware' => ['auth', 'CekRole:customer']], function () {

});

// Route::get('/input-ulasan', function () {
//     return view('User.ulasan.input-ulasan');
// });

// Route::get('/ulasan-with-user', function () {
//     return view('User.ulasan.ulasan-with-user', [
//         'ulasan' => [
//             [
//                 "id" => "1",
//                 "tgl" => "11-Oct-2023",
//                 "nama" => "Simon Agis",
//                 "rating" => "Baik",
//                 "ulasan" => "Mobilnya bagus, pelayanannya juga bagus. Pelayannya ramah-ramah. Pokoknya recommended banget deh.",
//             ],
//             [
//                 "id" => "2",
//                 "tgl" => "11-Oct-2023",
//                 "nama" => "Simon Agis",
//                 "rating" => "Cukup",
//                 "ulasan" => "Mobilnya bagus, pelayanannya juga bagus. Pelayannya ramah-ramah. Pokoknya recommended banget deh.",
//             ],
//             [
//                 "id" => "3",
//                 "tgl" => "11-Oct-2023",
//                 "nama" => "Simon Agis",
//                 "rating" => "Kurang",
//                 "ulasan" => "Mobilnya bagus, pelayanannya juga bagus. Pelayannya ramah-ramah. Pokoknya recommended banget deh.",
//             ],
//         ]
//     ]);
// });

// Route::get('/ulasan-no-user', function () {
//     return view('User.ulasan.ulasan-no-user', [
//         'ulasan' => [
//             [
//                 "id" => "1",
//                 "tgl" => "11-Oct-2023",
//                 "nama" => "Simon Agis",
//                 "rating" => "Baik",
//                 "ulasan" => "Mobilnya bagus, pelayanannya juga bagus. Pelayannya ramah-ramah. Pokoknya recommended banget deh.",
//             ],
//             [
//                 "id" => "2",
//                 "tgl" => "11-Oct-2023",
//                 "nama" => "Simon Agis",
//                 "rating" => "Cukup",
//                 "ulasan" => "Mobilnya bagus, pelayanannya juga bagus. Pelayannya ramah-ramah. Pokoknya recommended banget deh.",
//             ],
//             [
//                 "id" => "3",
//                 "tgl" => "11-Oct-2023",
//                 "nama" => "Simon Agis",
//                 "rating" => "Kurang",
//                 "ulasan" => "Mobilnya bagus, pelayanannya juga bagus. Pelayannya ramah-ramah. Pokoknya recommended banget deh.",
//             ],
//         ]
//     ]);
// });

// Route::get('/cara-order-no-user', function () {
//     return view('User.caraOrder.cara-order-no-user');
// });

// Route::get('/cara-order-with-user', function () {
//     return view('User.caraOrder.cara-order-with-user');
// });

// Route::get('/kontak-with-user', function () {
//     return view('User.kontak.kontak-with-user');
// });

// Route::get('/kontak-no-user', function () {
//     return view('User.kontak.kontak-no-user');
// });

// Route::get('/profile', function () {
//     return view('User.profile.profile', [
//         'user' => [
//             "nama" => "Simon Agis",
//             "email" => "user1@gmail.com",
//             "username" => "User1",
//             "alamat" => "Jl. Kaliurang KM 14,5",
//             "no-telp" => "081234567890",
//             "password" => "user1",
//         ],
//         'transaksi' => [
//             [
//                 "id" => "1",
//                 "lokasi" => "Kampus 3 Bonaventura UAJY",
//                 "tgl-pengambilan" => "11-Oct-2023",
//                 "jam-pengambilan" => "10:00",
//                 "tgl-pengembalian" => "15-Oct-2023",
//                 "jam-pengembalian" => "10:00",
//                 "mobil" => "Toyota Avanza - Hitam",
//                 "total" => "Rp1,000,000",
//                 "status" => "Sudah Dibayar",
//                 "deadline" => "-",
//             ],
//             [
//                 "id" => "2",
//                 "lokasi" => "Kampus 3 Bonaventura UAJY",
//                 "tgl-pengambilan" => "16-Oct-2023",
//                 "jam-pengambilan" => "10:00",
//                 "tgl-pengembalian" => "20-Oct-2023",
//                 "jam-pengembalian" => "10:00",
//                 "mobil" => "Toyota Avanza - Hitam",
//                 "total" => "Rp1,000,000",
//                 "status" => "Belum Dibayar",
//                 "deadline" => "23-Oct-2023 10:00",
//             ]
//         ]
//     ]);
// });

// Route::get('/profileAdmin', function () {
//     return view('Admin.profileAdmin.profile', [
//         'admin' => [
//             "nama" => "Simon Agis",
//             "email" => "admin1@gmail.com",
//             "username" => "admin1",
//             "alamat" => "Jl. Dirgantara N0.15",
//             "no-telp" => "089876543212",
//             "password" => "admin1",
//         ],
//     ]);
// });

// Route::get('/inputUser', function () {
//     return view('Admin.dataUser.input-user');
// });

// Route::get('/editUser', function () {
//     return view('Admin.dataUser.edit-user', [
//         'user' => [
//             "nama" => "Simon Agis",
//             "email" => "user@gmail.com",
//             "username" => "User1",
//             "alamat" => "Jl. Kaliurang KM 14,5",
//             "no-telp" => "081234567890",
//             "password" => "user1",
//         ],
//     ]);
// });


// Route::get('/dataUser', function () {
//     return view('Admin.dataUser.data-user', [
//         'data_user' => [
//             [
//                 "id" => "1",
//                 "nama" => "Simon Agis",
//                 "email" => "user@gmail.com",
//                 "username" => "User1",
//                 "alamat" => "Jl. Kaliurang KM 14,5",
//                 "no_telp" => "081234567890",
//             ],
//             [
//                 "id" => "2",
//                 "nama" => "Simon Agis",
//                 "email" => "user@gmail.com",
//                 "username" => "User1",
//                 "alamat" => "Jl. Kaliurang KM 14,5",
//                 "no_telp" => "081234567890",
//             ]
//         ]
//     ]);
// });

// Route::get('/inputMobil', function () {
//     return view('Admin.dataMobil.input-mobil');
// });

// Route::get('/editMobil', function () {
//     return view('Admin.dataMobil.edit-mobil', [
//         'mobil' => [
//             "model" => "Toyota Avanza",
//             "bahan_bakar" => "Bensin",
//             "transmisi" => "Automatic",
//             "jumlah_kursi" => 4,
//             "tahun_produksi" => 2018,
//             "warna" => "Hitam",
//             "tarif" => 250000,
//             "status" => "Ready",
//         ],
//     ]);
// });

// Route::get('/dataMobil', function () {
//     return view('Admin.dataMobil.data-mobil', [
//         'data_mobil' => [
//             [
//                 "id" => "1",
//                 "bahan_bakar" => "Bensin",
//                 "transmisi" => "Automatic",
//                 "jumlah_kursi" => 4,
//                 "tahun_produksi" => 2018,
//                 "warna" => "Hitam",
//                 "tarif" => "Rp250000/hari",
//                 "status" => "Ready",
//             ],
//             [
//                 "id" => "2",
//                 "bahan_bakar" => "Bensin",
//                 "transmisi" => "Automatic",
//                 "jumlah_kursi" => 4,
//                 "tahun_produksi" => 2018,
//                 "warna" => "Hitam",
//                 "tarif" => "Rp250000/hari",
//                 "status" => "Tidak Ready",
//             ]
//         ]
//     ]);
// });

// Route::get('/editTransaksi', function () {
//     return view('Admin.dataTransaksi.edit-transaksi', [
//         'user' => [
//             [
//                 "username" => "User1",
//             ],
//             [
//                 "username" => "User2",
//             ]
//         ],
//         'mobil' => [
//             [
//                 "model" => "Toyota Avanza - Hitam",
//             ],
//             [
//                 "model" => "Toyota Avanza - Hitam",
//             ]
//         ]
//     ]);
// });

// Route::get('/inputTransaksi', function () {
//     return view('Admin.dataTransaksi.input-transaksi', [
//         'user' => [
//             [
//                 "username" => "User1",
//             ],
//             [
//                 "username" => "User2",
//             ]
//         ],
//         'mobil' => [
//             [
//                 "model" => "Toyota Avanza - Hitam",
//             ],
//             [
//                 "model" => "Toyota Avanza - Hitam",
//             ]
//         ]
//     ]);
// });

// Route::get('/dataTransaksi', function () {
//     return view('Admin/dataTransaksi/data-transaksi', [
//         'data_transaksi' => [
//             [
//                 "id" => "1",
//                 "lokasi" => "Kampus 3 Bonaventura UAJY",
//                 "tgl_pengambilan" => "11-Oct-2023",
//                 "jam_pengambilan" => "10:00",
//                 "tgl_pengembalian" => "15-Oct-2023",
//                 "jam_pengembalian" => "10:00",
//                 "mobil" => "Toyota Avanza - Hitam",
//                 "total" => "Rp1,000,000",
//                 "status" => "Sudah Dibayar",
//                 "deadline" => "-",
//             ],
//             [
//                 "id" => "2",
//                 "lokasi" => "Kampus 3 Bonaventura UAJY",
//                 "tgl_pengambilan" => "16-Oct-2023",
//                 "jam_pengambilan" => "10:00",
//                 "tgl_pengembalian" => "20-Oct-2023",
//                 "jam_pengembalian" => "10:00",
//                 "mobil" => "Toyota Avanza - Hitam",
//                 "total" => "Rp1,000,000",
//                 "status" => "Belum Dibayar",
//                 "deadline" => "23-Oct-2023 10:00",
//             ]
//         ]
//     ]);
// });

// Route::get('/register', function () {
//     return view('User.register.register');
// });

// Route::get('/login', function () {
//     return view('User.login.login', [
//         'user' => [
//             "username" => "User1",
//             "password" => "User1",
//             "role" => "user",
//         ],
//         'admin' => [
//             "username" => "Admin1",
//             "password" => "Admin1",
//             "role" => "admin",
//         ],
//     ]);
// });

// Route::get('/landing-page-admin', function () {
//     return view(
//         'Admin.landingPage.landing-page-admin',
//         [
//             'user' => [
//                 [
//                     "nama" => "Simon Agis",
//                 ],
//                 [
//                     "nama" => "Simon Agis",
//                 ]
//             ],
//             "mobil" => [
//                 [
//                     "nama" => "Toyota Avanza",
//                 ],
//                 [
//                     "nama" => "Toyota Avanza",
//                 ]
//             ],
//             "transaksi" => [
//                 [
//                     "nama" => "Toyota Avanza",
//                 ],
//                 [
//                     "nama" => "Toyota Avanza",
//                 ]
//             ],
//         ]
//     );
// });

// Route::get('/landing-with-user', function () {
//     return view('User.landingPage.landing-page-with-user');
// });

// Route::get('/', function () {
//     return view('User.landingPage.landing-page-no-user');
// });

// Route::get('/landing-no-user', function () {
//     return view('User.landingPage.landing-page-no-user');
// });

// Route::get('/list-mobil-select', function () {
//     return view('User/mobil/list-mobil-select', [
//         'mobil' => [
//             [
//                 "model" => "Toyota Avanza",
//                 "gambar" => asset('img/avanza.jpg'),
//                 "bahan-bakar" => "Bensin",
//                 "transmisi" => "Automatic",
//                 "jmlh-kursi" => "4",
//                 "tahun" => "2018",
//                 "warna" => "Hitam",
//                 "tarif" => 250000,
//                 "status" => "ready",
//             ],
//             [
//                 "model" => "Toyota Avanza",
//                 "gambar" => asset('img/avanza.jpg'),
//                 "bahan-bakar" => "Bensin",
//                 "transmisi" => "Automatic",
//                 "jmlh-kursi" => "4",
//                 "tahun" => "2018",
//                 "warna" => "Hitam",
//                 "tarif" => 250000,
//                 "status" => "ready",
//             ],
//             [
//                 "model" => "Toyota Avanza",
//                 "gambar" => asset('img/avanza.jpg'),
//                 "bahan-bakar" => "Bensin",
//                 "transmisi" => "Automatic",
//                 "jmlh-kursi" => "4",
//                 "tahun" => "2018",
//                 "warna" => "Hitam",
//                 "tarif" => 250000,
//                 "status" => "ready",
//             ],
//             [
//                 "model" => "Toyota Avanza",
//                 "gambar" => asset('img/avanza.jpg'),
//                 "bahan-bakar" => "Bensin",
//                 "transmisi" => "Automatic",
//                 "jmlh-kursi" => "4",
//                 "tahun" => "2018",
//                 "warna" => "Hitam",
//                 "tarif" => 250000,
//                 "status" => "ready",
//             ],
//         ]
//     ]);
// });
// Route::get('/list-mobil-no-user', function () {
//     return view('User/mobil/list-mobil-no-user', [
//         'mobil' => [
//             [
//                 "model" => "Toyota Avanza",
//                 "gambar" => asset('img/avanza.jpg'),
//                 "bahan-bakar" => "Bensin",
//                 "transmisi" => "Automatic",
//                 "jmlh-kursi" => "4",
//                 "tahun" => "2018",
//                 "warna" => "Hitam",
//                 "tarif" => 250000,
//                 "status" => "ready",
//             ],
//             [
//                 "model" => "Toyota Avanza",
//                 "gambar" => asset('img/avanza.jpg'),
//                 "bahan-bakar" => "Bensin",
//                 "transmisi" => "Automatic",
//                 "jmlh-kursi" => "4",
//                 "tahun" => "2018",
//                 "warna" => "Hitam",
//                 "tarif" => 250000,
//                 "status" => "ready",
//             ],
//             [
//                 "model" => "Toyota Avanza",
//                 "gambar" => asset('img/avanza.jpg'),
//                 "bahan-bakar" => "Bensin",
//                 "transmisi" => "Automatic",
//                 "jmlh-kursi" => "4",
//                 "tahun" => "2018",
//                 "warna" => "Hitam",
//                 "tarif" => 250000,
//                 "status" => "ready",
//             ],
//             [
//                 "model" => "Toyota Avanza",
//                 "gambar" => asset('img/avanza.jpg'),
//                 "bahan-bakar" => "Bensin",
//                 "transmisi" => "Automatic",
//                 "jmlh-kursi" => "4",
//                 "tahun" => "2018",
//                 "warna" => "Hitam",
//                 "tarif" => 250000,
//                 "status" => "ready",
//             ],
//         ]
//     ]);
// });

// Route::get('/list-mobil-with-user', function () {
//     return view('User/mobil/list-mobil-with-user', [
//         'mobil' => [
//             [
//                 "model" => "Toyota Avanza",
//                 "gambar" => asset('img/avanza.jpg'),
//                 "bahan-bakar" => "Bensin",
//                 "transmisi" => "Automatic",
//                 "jmlh-kursi" => "4",
//                 "tahun" => "2018",
//                 "warna" => "Hitam",
//                 "tarif" => 250000,
//                 "status" => "ready",
//             ],
//             [
//                 "model" => "Toyota Avanza",
//                 "gambar" => asset('img/avanza.jpg'),
//                 "bahan-bakar" => "Bensin",
//                 "transmisi" => "Automatic",
//                 "jmlh-kursi" => "4",
//                 "tahun" => "2018",
//                 "warna" => "Hitam",
//                 "tarif" => 250000,
//                 "status" => "ready",
//             ],
//             [
//                 "model" => "Toyota Avanza",
//                 "gambar" => asset('img/avanza.jpg'),
//                 "bahan-bakar" => "Bensin",
//                 "transmisi" => "Automatic",
//                 "jmlh-kursi" => "4",
//                 "tahun" => "2018",
//                 "warna" => "Hitam",
//                 "tarif" => 250000,
//                 "status" => "ready",
//             ],
//             [
//                 "model" => "Toyota Avanza",
//                 "gambar" => asset('img/avanza.jpg'),
//                 "bahan-bakar" => "Bensin",
//                 "transmisi" => "Automatic",
//                 "jmlh-kursi" => "4",
//                 "tahun" => "2018",
//                 "warna" => "Hitam",
//                 "tarif" => 250000,
//                 "status" => "ready",
//             ],
//         ]
//     ]);
// });

// Route::get('/home-no-user', function () {
//     return view('User/landing-page-no-user');
// });

// Route::get('/home-user', function () {
//     return view('User/landing-page-with-user');
// });


// Route::get('/confirm-transaksi', function () {
//     return view('User/transaksi/confirm-transaksi', [
//         'transaksi' => [
//             "id" => "1",
//             "lokasi" => "Kampus 3 Bonaventura UAJY",
//             "tgl-pengambilan" => "16-Oct-2023",
//             "jam-pengambilan" => "10:00",
//             "tgl-pengembalian" => "20-Oct-2023",
//             "jam-pengembalian" => "10:00",
//             "mobil" => "Toyota Avanza - Hitam",
//             "total" => "Rp1,000,000",
//         ],
//     ]);
// });

// Route::get('/detail-transaksi', function () {
//     return view('User/transaksi/detail-transaksi', [
//         'transaksi' => [
//             "id" => "2",
//             "lokasi" => "Kampus 3 Bonaventura UAJY",
//             "tgl-pengambilan" => "16-Oct-2023",
//             "jam-pengambilan" => "10:00",
//             "tgl-pengembalian" => "20-Oct-2023",
//             "jam-pengembalian" => "10:00",
//             "mobil" => "Toyota Avanza - Hitam",
//             "total" => "Rp1,000,000",
//             "status" => "Belum Dibayar",
//             "deadline" => "23-Oct-2023 10:00",
//         ],
//     ]);
// });

// Route::get('/detail-transaksi-dibayar', function () {
//     return view('User/transaksi/detail-transaksi', [
//         'transaksi' => [
//             "id" => "1",
//             "lokasi" => "Kampus 3 Bonaventura UAJY",
//             "tgl-pengambilan" => "16-Oct-2023",
//             "jam-pengambilan" => "10:00",
//             "tgl-pengembalian" => "20-Oct-2023",
//             "jam-pengembalian" => "10:00",
//             "mobil" => "Toyota Avanza - Hitam",
//             "total" => "Rp1,000,000",
//             "status" => "Sudah Dibayar",
//             "deadline" => "-",
//         ],
//     ]);
// });

