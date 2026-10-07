<?php

use Illuminate\Support\Facades\Route;
use App\Models\Berita;

Route::get('/', function () {
    return view('home',[
        "title" => "Home",
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile",
        "name" => "Ibrahim",
        "nim" => "13242520019",
        "prodi" => "Teknologi Informasi",
        "gambar" => "images/LAs.jpg",
    ]);
});


     

Route::get('/berita', function () use ($data_berita) {
    return view('berita', [
        "title" => "Berita",
        "beritas" => Berita::ambildata()
    ]);
});

/// routing untuk handling 1 berita
Route::get('berita/{slug}', function ($slug){
     return view('beritatunggal',[
        "title" => "judul berita tunggal",
        ]);
});


Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact",
    ]);
});

Route::get('/news', function () {
    $data_berita = [
    [
        "judul" => "MBG Mas Bahlil Ganteng",
        "slug" => "mbg-mas-bahlil-ganteng",
        "Penulis" => "Bahlil",
        "konten" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima sequi aspernatur accusantium impedit doloribus reiciendis sapiente aperiam eligendi consequuntur, ea placeat in debitis deleniti harum. Quis exercitationem corrupti ad, vel harum repellendus rerum in! Laborum distinctio commodi esse, nihil quas mollitia adipisci neque hic exercitationem excepturi, doloremque ut architecto ullam eum harum, pariatur cum tenetur deleniti aliquid voluptatibus ipsum. Quidem ut eaque, illo reiciendis repellat inventore earum officiis doloribus molestiae ipsam doloremque quod cumque aliquid natus eligendi eum a vero fuga dolorum dignissimos expedita minima sequi iure? Rem repudiandae dolor fuga voluptatem et quo maiores, vel esse tenetur obcaecati alias facere eveniet quia temporibus eius aliquam itaque iure molestias velit nulla eaque! Voluptatem qui veritatis velit, rem id dolorem quaerat. Ipsum accusantium saepe perspiciatis laborum fugiat. Cum eaque perferendis rem illum eligendi, accusamus fugit temporibus ratione magnam nesciunt laboriosam voluptatem quae, dolore inventore consequatur! Magnam commodi beatae nihil ratione perferendis.",
    ],
    [
        "judul" => "Indonesia Juara Dunia",
        "slug" => "indonesia-juara-dunia",
        "Penulis" => "Luhut",
        "konten" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
    ],
];
$singlenews = [];

foreach($data_berita as $berita){

    if($berita["slug"] === $slug)
    {
        $singlenews = $berita;
    }
}
    return view('beritatunggal', [
        "title" => $singlenews['judul'],
        "singlenews" => $singlenews,
    ]);
});