<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class LandingController extends Controller
{
    public function index(){
        $apiUrl = env('API_BE_URL')."api/v1/izidok";
        $data['title'] = 'Home';
        $response = Http::get($apiUrl);
        if ($response->successful()) {
            $res = $response->json();
            $data += $res['data'];
            return view('welcome', $data);
        }else{
            return 'API NOT WORKING';
        }
    }

    public function newsUpdate(){
        $apiUrl = env('API_BE_URL')."api/v1/izidok";
        $data['title'] = 'Home';
        $data['page'] = 'news-update';
        $response = Http::get($apiUrl);
        if ($response->successful()) {
            $res = $response->json();
            $data += $res['data'];
            return view('landing.others.news-update', $data);
        }else{
            return 'API NOT WORKING';
        }
    }

    public function newsUpdateDetail($slug){
        $data = [
            'title' => 'News & Update Detail',
            'page' => 'news-update'
        ];
        $apiUrl = env('API_BE_URL')."api/v1/news/".$slug;
        $response = Http::get($apiUrl);
        $res = $response->json();
        $data += $res['data'];
        return view('landing.others.news-detail', $data);
    }

    public function lang($locale){
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }

    public function sendMail(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'pilihan' => 'required',
            'profesi' => 'required',
            'pesan' => 'required',
        ]);
        $mailSubject = 'Pesan Hubungi Kami Website izidok';
        
        if ($validator->fails()) {
            $errMessage = $validator->errors()->first();
            $resp = [
                'status' => false,
                'message' => $errMessage
            ];
            return response()->json($resp);
        }

        $receiver = env('MAIL_RECIPIENT');
        $cc = env('MAIL_CC');

        try {
            Mail::send('mail.hubungi-kami', $request->all(), function ($msg) use ($receiver, $cc, $mailSubject) {
                $msg->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
                $msg->to(explode(',',$receiver))->subject($mailSubject);
            });

            $resp = [
                'status' => true,
                'message' => ''
            ];
        } catch (\Throwable $th) {
            $resp = [
                'status' => false,
                'message' => $th->getMessage()
            ];
        }

        return response()->json($resp);
    }

    public function privacyPolicy(){
        $data = [
            'title' => 'Term Condition & Privacy Policy',
            'page' => 'privacy-policy'
        ];
        return view('landing.others.privacy-policy', $data);
    }
    
    public function faq(){
        $data = [
            'title' => 'Frequently Asked Questions',
            'page' => 'faq'
        ];
        return view('landing.others.faq', $data);
    }
}
