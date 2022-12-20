<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use setasign\Fpdf\Fpdf;
use setasign\Fpdi\Fpdi;

class PdfUploadController extends Controller
{
    //

    Public Static function create_preview_images($file_name) {

        // Strip document extension
        $file_name = basename($file_name, '.pdf');
    
        // Convert this document
        // Each page to single image
        $img = new imagick($file_name);
    
        // Set background color and flatten
        // Prevents black background on objects with transparency
        $img->setImageBackgroundColor('white');
        $img = $img->flattenImages();
    
        // Set image resolution
        // Determine num of pages
        $img->setResolution(300,300);
        $num_pages = $img->getNumberImages();
    
        // Compress Image Quality
        $img->setImageCompressionQuality(100);
    
        // Convert PDF pages to images
        for($i = 0;$i < $num_pages; $i++) {         
    
            // Set iterator postion
            $img->setIteratorIndex($i);
    
            // Set image format
            $img->setImageFormat('jpeg');
    
            // Write Images to temp 'upload' folder     
            $img->writeImage(public_path('etickets').'\/'.$file_name.'-'.$i.'.jpg');
        }
    
        $img->destroy();
    }

    public function store(Request $request){


        // dd($request->file('etickets'));
        if($request->hasFile('etickets')){
            $etickets = $request->file('etickets');
            $etickets_name = time().'_'.$etickets->getClientOriginalName();
            $etickets->move(public_path('etickets'), $etickets_name);
            $pdf = new FPDI();
            $filename = public_path('etickets').'\/'.$etickets_name;
            $this->create_preview_images($filename);
            /* $pagecount = $pdf->setSourceFile($filename);
            // Split each page into a new PDF
            for ($i = 1; $i <= $pagecount; $i++) {
                $new_pdf = new FPDI();
                $new_pdf->AddPage();
                $new_pdf->setSourceFile($filename);
                $new_pdf->useTemplate($new_pdf->importPage($i));
                
                try {
                    $new_filename = str_replace('.pdf', '', $filename).'_'.$i.".pdf";
                    $new_jpeg_filename = str_replace('.pdf', '', $filename).'_'.$i.".jpg";
                    $new_pdf->Output($new_filename, "F");
                    $result = 0;
                    $arr = array();
                    exec( "convert -density 300 {$new_filename} {$new_jpeg_filename}", $arr, $result );
                    echo "Page ".$i." split into ".$new_filename.'|||'.$new_jpeg_filename.'|||'.$result."<br />\n";
                } catch (Exception $e) {
                    echo 'Caught exception: ',  $e->getMessage(), "\n";
                }
            }
            return $pagecount; */
        }

    }
}
