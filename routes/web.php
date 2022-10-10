<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

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



require __DIR__ . '/auth.php';


Route::get('/', function () {
    return view('welcome');
});





Route::middleware('auth')->group(function () {

    Route::get('/admins', function () {
        return view('admin.index');
    })->name('admins');


    // الايات
    Route::get('verse', [HomeController::class, 'verse'])->name('verse');
    Route::get('verse/create', [HomeController::class, 'verse_create'])->name('verse.create');


    // الاحاديث
    Route::get('conversations', [HomeController::class, 'conversations'])->name('conversations');
    Route::get('conversations/create', [HomeController::class, 'conversations_create'])->name('conversations.create');



    // الفتاوي
    Route::get('fatwas', [HomeController::class, 'fatwas'])->name('fatwas');
    Route::get('fatwas/create', [HomeController::class, 'fatwas_create'])->name('fatwas.create');


    // فقره عن الكتب
    Route::get('paragraph', [HomeController::class, 'paragraph'])->name('paragraph');
    Route::get('paragraph/create', [HomeController::class, 'paragraph_create'])->name('paragraph.create');

    // القران الكريم النصوص القرانية
    Route::get('theQuranicText', [HomeController::class, 'quran_text'])->name('theQuranicText');
    Route::get('theQuranicText/create', [HomeController::class, 'quran_text_create'])->name('theQuranicText.create');


    // القران الكر التلاوات
    Route::get('quran_recitation', [HomeController::class, 'quran_recitation'])->name('quran_recitation');
    Route::get('quran_recitation/create', [HomeController::class, 'quran_recitation_create'])->name('quran_recitation.create');

    // القران الكريم التفسير الصوتى
    Route::get('quran_audio_interpretation', [HomeController::class, 'quran_audio_interpretation'])->name('quran_audio_interpretation');
    Route::get('quran_audio_interpretation/create', [HomeController::class, 'quran_audio_interpretation_create'])->name('quran_audio_interpretation.create');

    // القران الكريم التفسير المرئى
    Route::get('quran_visual_interpretation', [HomeController::class, 'quran_visual_interpretation'])->name('quran_visual_interpretation');
    Route::get('quran_visual_interpretation/create', [HomeController::class, 'quran_visual_interpretation_create'])->name('quran_visual_interpretation.create');

    // القران الكريم التفسير المقروء
    Route::get('quran_read_interpretation', [HomeController::class, 'quran_read_interpretation'])->name('quran_read_interpretation');
    Route::get('quran_read_interpretation/create', [HomeController::class, 'quran_read_interpretation_create'])->name('quran_read_interpretation.create');

    // القران الكريم التفسير النصى
    Route::get('quran_text_interpretation', [HomeController::class, 'quran_text_interpretation'])->name('quran_text_interpretation');
    Route::get('quran_text_interpretation/create', [HomeController::class, 'quran_text_interpretation_create'])->name('quran_text_interpretation.create');

    // الحديث الشريف
    Route::get('hadith', [HomeController::class, 'prophetic_tradition'])->name('hadith.index');
    Route::get('hadith/create', [HomeController::class, 'prophetic_tradition_create'])->name('hadith.create');

    // التفسير المقروء للحديث الشريف
    Route::get('hadithRead_interpretation', [HomeController::class, 'prophetic_tradition_read_interpretation'])->name('hadithRead_interpretation.index');
    Route::get('hadithRead_interpretation/create', [HomeController::class, 'prophetic_tradition_create_read_interpretation'])->name('hadithRead_interpretation.create');

    // كتب الاحاديث الشريفة
    Route::get('hadithBooks', [HomeController::class, 'hadithBooks'])->name('hadithBooks.index');
    Route::get('hadithBooks/create', [HomeController::class, 'hadithBooks_create'])->name('hadithBooks.create');

    // ابواب الاحاديث الشريفة
    Route::get('hadithSections', [HomeController::class, 'hadithSections'])->name('hadithSections.index');
    Route::get('hadithSections/create', [HomeController::class, 'hadithSections_create'])->name('hadithSections.create');

    // نص الحديث فى الاحاديث الشريفة
    Route::get('hadithText', [HomeController::class, 'hadithText'])->name('hadithText.index');
    Route::get('hadithText/create', [HomeController::class, 'hadithText_create'])->name('hadithText.create');
    

    // الاقسام
    Route::get('product', [HomeController::class, 'product'])->name('product');
    Route::get('product/create', [HomeController::class, 'product_create'])->name('product.create');

    // المواضيع
    Route::get('threads', [HomeController::class, 'threads'])->name('threads');
    Route::get('threads/create', [HomeController::class, 'threads_create'])->name('threads.create');

    // الكتب
    Route::get('books', [HomeController::class, 'books'])->name('books');
    Route::get('books/create', [HomeController::class, 'books_create'])->name('books.create');

    // المقالات
    Route::get('articles', [HomeController::class, 'articles'])->name('articles');
    Route::get('articles/create', [HomeController::class, 'articles_create'])->name('articles.create');

    // فهرس الكتب
    Route::get('catalog', [HomeController::class, 'catalog'])->name('catalog');
    Route::get('catalog/create', [HomeController::class, 'catalog_create'])->name('catalog.create');


    // مجالس القران الكريم
    Route::get('quranboards', [HomeController::class, 'quranboards'])->name('quranboards');
    Route::get('quranboards/create', [HomeController::class, 'quranboards_create'])->name('quranboards.create');

    // مجالس الحديث الشريف
    Route::get('hadithcouncils', [HomeController::class, 'hadithcouncils'])->name('hadithcouncils');
    Route::get('hadithcouncils/create', [HomeController::class, 'hadithcouncils_create'])->name('hadithcouncils.create');


    // مجالس العلوم الاخري
    Route::get('sciencecouncils', [HomeController::class, 'sciencecouncils'])->name('sciencecouncils');
    Route::get('sciencecouncils/create', [HomeController::class, 'sciencecouncils_create'])->name('sciencecouncils.create');


    // مجالس الاسلام واركانه
    Route::get('councilsislam', [HomeController::class, 'councilsislam'])->name('councilsislam');
    Route::get('councilsislam/create', [HomeController::class, 'councilsislam_create'])->name('councilsislam.create');

    // الفاتوي الصفحه الرئسيه
    Route::get('homefatwas', [HomeController::class, 'homefatwas'])->name('homefatwas');
    Route::get('homefatwas/create', [HomeController::class, 'homefatwas_create'])->name('homefatwas.create');
  
    // الفاتوي الصفحه الرئسيه
    Route::get('related_sites', [HomeController::class, 'related_sites'])->name('related_sites');
    Route::get('related_sites/create', [HomeController::class, 'related_sites_create'])->name('related_sites.create');


    // تواصل معانا
    Route::get('contactus', [HomeController::class, 'contactus'])->name('contactus');

    // MainSetting الاعدادات العامة
    Route::get('main-setting', [HomeController::class, 'settings'])->name('main-setting');



});
