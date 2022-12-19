<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Smalot\PdfParser\Parser;

class PdfUploadController extends Controller
{
    //
   

    public function store(Request $request){
        
        
        
        $file = $request->file('file');
        
        $pdfParser = new Parser();
        $pdf = $pdfParser->parseFile($file->path());
        $content = $pdf->getText();
        return $content;

    }
}
