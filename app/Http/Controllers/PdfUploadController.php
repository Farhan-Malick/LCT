<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use setasign\Fpdf\Fpdf;
use setasign\Fpdi\Fpdi;
use App\Models\ETicket;
// use Imagick;

class PdfUploadController extends Controller
{
    //

    public static function countPages($path) {

        $pdftext = file_get_contents($path);

        $num = preg_match_all("/\/Page\W/", $pdftext, $dummy);

        return $num;
      }

    public function store(Request $request)
    {
        if ($request->hasFile('etickets')) {
            $etickets = $request->file('etickets');
            $etickets_name = time().'_'.$etickets->getClientOriginalName();
            $etickets->move(public_path('etickets'), $etickets_name);
            $filename = public_path('etickets/'.$etickets_name);
            $sourceFilePages = $this->countPages($filename);

            $savePath = public_path('etickets/');
            $fileNames = array();
            for ($i = 1; $i <= $sourceFilePages; $i++) {
                $file_name_out = basename($filename, '.pdf').'_'.$i.'.jpg';
                array_push($fileNames, ["filename" => $file_name_out]);
                exec('gs -dQUIET -dSAFER -dBATCH -dNOPAUSE -dNOPROMPT -dMaxBitmap=500000000 -dAlignToPixels=0 -dGridFitTT=2 "-sDEVICE=pngalpha" -dTextAlphaBits=4 -dGraphicsAlphaBits=4 "-r300x300" -dPrinted=false -dFirstPage='.$i.' -dLastPage='.$i.' -sOutputFile='.$savePath.$file_name_out.' '.$filename, $output);
                // exec('"C:\Program Files\gs\gs10.00.0\bin\gswin64c.exe" -dQUIET -dSAFER -dBATCH -dNOPAUSE -dNOPROMPT -dMaxBitmap=500000000 -dAlignToPixels=0 -dGridFitTT=2 "-sDEVICE=pngalpha" -dTextAlphaBits=4 -dGraphicsAlphaBits=4 "-r300x300" -dPrinted=false -dFirstPage=1 -dLastPage=1 -sOutputFile='.$savePath.'Pic-%d.png '.$filename, $output);
            }
            // exec('"C:\Program Files\gs\gs10.00.0\bin\gswin64c.exe" -dQUIET -dSAFER -dBATCH -dNOPAUSE -dNOPROMPT -dMaxBitmap=500000000 -dAlignToPixels=0 -dGridFitTT=2 "-sDEVICE=pngalpha" -dTextAlphaBits=4 -dGraphicsAlphaBits=4 "-r300x300" -dPrinted=false -dFirstPage=1 -dLastPage=1 -sOutputFile='.$savePath.'Pic-%d.png '.$filename, $output);
            return response()->json($fileNames);
        }
        return response(422)->json(["message" => "File is not supported."]);
    }
    public function view_tickets($id, Request $request)
    {
        $e_tickets = ETicket::where('ticketlisting_id',$id)->get();
        $Download = ETicket::where('ticketlisting_id',$id)->get();
        // dd($Download);
        return view('/Admin/pages/viewTickets',compact('e_tickets','Download'));
    }
}
