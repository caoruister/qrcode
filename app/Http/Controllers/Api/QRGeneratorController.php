<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class QRGeneratorController extends Controller
{

    public function create(Request $request)
    {
        $frameName = $request->frame_name;
        $qrCodeText = $request->qr_code_text;
        $frameText = $request->frame_text;
        $frameIconName = $request->frame_icon_name;
        $frameColor = $request->frame_color;
        $foregroundColor = $request->foreground_color;
        $qrCodeLogo = $request->qr_code_logo;

        $client = new Client();
        $url = 'https://api.qr-code-generator.com/v1/create?access-token=EBephxedmZHs9OWzR2Kbv-125ifulLI1LemyW4NO2hwWifAzpHadEVcOq-OkFtNz';

        Log::info("qr code text:".$qrCodeText);

        $response = $client->request('POST', $url, [
            'form_params' => [
                'frame_name' => $frameName,
                'qr_code_text' => $qrCodeText,
                'frame_text' => 'Scan me',
                'frame_icon_name' => 'mobile',
                'frame_color' => $frameColor,
                'foreground_color' => $foregroundColor,
                'qr_code_logo' => $qrCodeLogo,
                'marker_left_template' => 'version1',
                'marker_right_template' => 'version1',
                'marker_bottom_template' => 'version1',
            ]
        ]);

        $contents = $response->getBody()->getContents();

        return response($contents)
            ->header('Content-Type', 'image/svg+xml');
    }
}
