<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QRCode extends Controller
{
    public function scanQRCode(){
        $data = array(
            'title' => 'Scan QR Code'

            );

        return view('backEnd.qr.scanqrcode')->with($data);
    }

    public function getQRCodeValue(){
        $QRCodeReader = new Libern\QRCodeReader\QRCodeReader();
        $qrcode_text = $QRCodeReader->decode(base64_encode("image_stream"));
        return $qrcode_text;
    }

    public function generateQRCode(){
        //return "Generating QRCode...";
        //return QrCode::size(500)->generate('Te Amo My Queen Pusheen');
        //return "{!! QrCode::generate('Welcome to kerneldev.com!'); !!}";

        $data = array(
            'categoryID' => '123456789'

            );

        return view('backEnd.qr.generateqrcode')->with($data);
    }
}
