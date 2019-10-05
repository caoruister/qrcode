<?php

namespace App\Http\Controllers\Api;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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
        $imageFormat = $request->image_format;
        $imageWidth = $request->image_width;
        $download = $request->download;

        $client = new Client();
        $url = 'https://api.qr-code-generator.com/v1/create?access-token=' . config("tool.access_token");

        Log::info("qr code text:" . $qrCodeText);

        $params = array(
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
        );

        if ($download == 1) {
            $params['image_format'] = $imageFormat;
            $params['image_width'] = $imageWidth;
            $params['download'] = $download;
            $params['access-token'] = config("tool.access_token");

            $response = $client->request('GET', $url, [
                'query' => $params,
            ]);
            $contents = $response->getBody()->getContents();

//            Storage::disk('local')->put(Str::uuid().'.PNG', $contents);
            return response($contents)
                ->header('Content-Type', 'image/png')
                ->header('content-disposition', 'attachment; filename="frame.png"');
        } else {
            $response = $client->request('POST', $url, [
                'form_params' => $params
            ]);
            $contents = $response->getBody()->getContents();
            return response($contents)
                ->header('Content-Type', 'image/svg+xml');
        }
    }

    protected function genQRCode($qrCodeText) {
        $client = new Client(['verify' => false]);
        $url = 'https://api.qr-code-generator.com/v1/create?access-token=' . config("tool.access_token");

        Log::info("qr code text:" . $qrCodeText);

        $params = array(
            'qr_code_text' => $qrCodeText,
            'image_format' => 'PNG',
            'image_width' => '300',
            'download' => 1,
            'access-token' => config("tool.access_token"),
        );

        $response = $client->request('GET', $url, [
            'query' => $params
        ]);
        $contents = $response->getBody()->getContents();

        $imageId = Str::uuid();

        Storage::disk('local')->put($imageId.'.png', $contents);
        return $imageId;
    }

    public function createNew(Request $request)
    {
        $qrcode_type_id = $request->qrcode_type_id;
        $folder_id = $request->folder_id;
        $trackable = $request->trackable;
        $active = $request->active;
        $title = $request->title;
        $qr_code_text = $request->qr_code_text;

        $userId = Auth::id();

        Log::info("current user:" . $request->user('api')->id ?? 0);

        $qrImageId = $this->genQRCode($qr_code_text);

        Log::info("qr image id:" . $qrImageId);

        $params = array();
        $params['user_id'] = $userId;
        $params['image_url'] = Storage::url($qrImageId.'.png');
        $params['folder_id'] = $folder_id || 0;

        $code = Str::random(6);
        $params['short_code'] = $code;
        $params['short_url'] = config('app.url').$code;
        $params['target_url'] = $qr_code_text;
        $params['status'] = $active || 'active';
        $params['style'] = '';
        $params['title'] = $title || '';
        $params['total_scans'] = 0;
        $params['trackable'] = $trackable || 0;
        $params['unique_scans'] = $title || 0;
        $params['type_id'] = $qrcode_type_id || 0;
        $params['type_name'] = $qrcode_type_id || 0;

        DB::insert('insert into qr_code (user_id, image_url, folder_id, short_code, short_url, target_url, status, style, title, total_scans, trackable, unique_scans, type_id, type_name) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', $params);

        response()->json(['success']);
    }

    public function codes(Request $request)
    {
        $page = $request->page;
        $perPage = $request->per_page;
        $sort = $request->sort;
        $status = $request->status;
        $expand = $request->expand;

        $userId = Auth::id();

        $results = DB::select('select * from qr_code where user_id = :id', ['id' => $userId]);
    }
}
