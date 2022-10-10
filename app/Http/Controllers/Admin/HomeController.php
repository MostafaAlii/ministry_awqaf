<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function verse()
    {
        return view('admin.verse.index');
    }

    public function verse_create()
    {
        return view('admin.verse.create');
    }


    public function conversations()
    {
       return view('admin.conversations.index');
    }

    public function conversations_create()
    {
       return view('admin.conversations.create');
    }


    public function fatwas()
    {
        return view('admin.fatwas.index');
    }

    public function fatwas_create()
    {
        return view('admin.fatwas.create');
    }


    public function paragraph()
    {
        return view('admin.paragraph.index');
    }


    public function paragraph_create()
    {
        return view('admin.paragraph.create');
    }

    /**
     * The Holy Quran List Index النص
     */
    public function quran_text() {
        return view('admin.theHolyQuran.theQuranicText.index');
    }
    public function quran_text_create() {
        return view('admin.theHolyQuran.theQuranicText.create');
    }
    /**
     * The Holy Quran recitation التلاوات القرانية
     */
    public function quran_recitation() {
        return view('admin.theHolyQuran.quran_recitation.index');
    }
    public function quran_recitation_create() {
        return view('admin.theHolyQuran.quran_recitation.create');
    }
    /**
     * The Holy Quran audio interpretation التفسير الصوتى
     */
    public function quran_audio_interpretation() {
        return view('admin.theHolyQuran.quran_audio_interpretation.index');
    }
    public function quran_audio_interpretation_create() {
        return view('admin.theHolyQuran.quran_audio_interpretation.create');
    }
    /**
     * The Holy Quran visual interpretation التفسير المرئى
     */
    public function quran_visual_interpretation() {
        return view('admin.theHolyQuran.quran_visual_interpretation.index');
    }
    public function quran_visual_interpretation_create() {
        return view('admin.theHolyQuran.quran_visual_interpretation.create');
    }
    /**
     * The Holy Quran Read interpretation التفسير المقروء
     */
    public function quran_read_interpretation() {
        return view('admin.theHolyQuran.quran_read_interpretation.index');
    }
    public function quran_read_interpretation_create() {
        return view('admin.theHolyQuran.quran_read_interpretation.create');
    }
    /**
     * The Holy Quran Text interpretation التفسير النصى
     */
    public function quran_text_interpretation() {
        return view('admin.theHolyQuran.quran_text_interpretation.index');
    }
    public function quran_text_interpretation_create() {
        return view('admin.theHolyQuran.quran_text_interpretation.create');
    }
    /**
     * Prophetic tradition الحديث الشريف
     */
    public function prophetic_tradition() {
        return view('admin.prophetic_tradition.index');
    }
    public function prophetic_tradition_create() {
        return view('admin.prophetic_tradition.create');
    }

    /**
     * Prophetic tradition Read Interpretation الحديث الشريف التفسير المقروء
     */
    public function prophetic_tradition_read_interpretation() {
        return view('admin.prophetic_tradition.read_interpretation.index');
    }
    public function prophetic_tradition_create_read_interpretation() {
        return view('admin.prophetic_tradition.read_interpretation.create');
    }
        /**
     * الكتب فى الاحاديث الشريفة
     */
    public function hadithBooks() {
        return view('admin.prophetic_tradition.books.index');
    }
    public function hadithBooks_create() {
        return view('admin.prophetic_tradition.books.create');
    }
    // الابواب فى الحديث الشريف
    public function hadithSections() {
        return view('admin.prophetic_tradition.sections.index');
    }
    public function hadithSections_create() {
        return view('admin.prophetic_tradition.sections.create');
    }
    // نص الحديث فى الاحاديث الشريفة
    public function hadithText() {
        return view('admin.prophetic_tradition.hadithText.index');
    }
    public function hadithText_create() {
        return view('admin.prophetic_tradition.hadithText.create');
    }

    public function product()
    {
        return view('admin.product.index');
    }

    public function product_create()
    {
        return view('admin.product.create');
    }

    public function threads()
    {
        return view('admin.threads.index');
    }

    public function threads_create()
    {
        return view('admin.threads.create');
    }


    public function books()
    {
        return view('admin.books.index');
    }

    public function books_create()
    {
        return view('admin.books.create');
    }

    public function articles()
    {
        return view('admin.articles.index');
    }

    public function articles_create()
    {
        return view('admin.articles.create');
    }

    public function catalog()
    {
        return view('admin.catalog.index');
    }

    public function catalog_create()
    {
        return view('admin.catalog.create');
    }

    public function quranboards()
    {
        return view('admin.quranboards.index');
    }

    public function quranboards_create()
    {
        return view('admin.quranboards.create');
    }

    public function hadithcouncils()
    {
        return view('admin.hadithcouncils.index');
    }

    public function hadithcouncils_create()
    {
        return view('admin.hadithcouncils.create');
    }

    public function sciencecouncils()
    {
        return view('admin.sciencecouncils.index');
    }

    public function sciencecouncils_create()
    {
        return view('admin.sciencecouncils.create');
    }

    public function councilsislam()
    {
        return view('admin.councilsislam.index');
    }

    public function councilsislam_create()
    {
        return view('admin.councilsislam.create');
    }
    
    public function homefatwas()
    {
        return view('admin.homefatwas.index');
    }

    public function homefatwas_create()
    {
        return view('admin.homefatwas.create');
    }


    public function related_sites()
    {
        return view('admin.related_sites.index');
    }

    public function related_sites_create()
    {
        return view('admin.related_sites.create');
    }

    public function contactus()
    {
        return view('admin.contactus.index');
    }

    // Main Setting الاعدادات العامة
    public function settings() {
        return view('admin.main-setting.index');
    }


}
