<?php

namespace App\Http\Controllers;

use App\CustomClasses\ItalyAssessment\ItalyClass;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Lava;
use PDF;

class ItalyController extends Controller
{
    public function index()
    {
        $italyClass = new ItalyClass();
        $html = $italyClass->loadHtml();
        return view('tool.italyassessment.report.report', ['report' => $html, 'intro'=>false, 'pdf'=>true]);
    }

    public function pdf()
    {
        $italyClass = new ItalyClass();
        $html = $italyClass->loadHtml();
        //return view('tool.italyassessment.report.report', ['report' => $html, 'intro'=>false]);
        $pdf = PDF::loadView('tool.italyassessment.report.report', ['report'=>$html, 'intro'=>false, 'pdf'=>true])
            ->setOption('margin-top', 20)
            ->setOption('margin-left', 0)
            ->setOption('margin-right', 0)
            //->setOption('window-status', 'chartrendered')
            ->setOption('header-html', session('url').'/'.session('localeUrl').'template/'.session('template').'/report/header')
            ->setOption('header-spacing', 5)
            ->setOption('footer-html', session('url').'/'.session('localeUrl').'template/'.session('template').'/report/footer')
            ->setOption('footer-spacing', 2);
            //->setOption('replace', $headervars);
            
        return $pdf->inline('invoice.pdf');
    }
}
