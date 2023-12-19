<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Employee;
use App\Vendor;
use App\User;
use App\Laptop;
use App\Printer;
use App\Webcam;
use App\Headphone;
use App\Projector;
Use App\Rfdivice;
use App\Wifidivice;
use App\Scanner;
use App\Monitor;
use App\Mouse;
use App\Keyboard;
use App\Desktop;
use App\Switchs;
use Illuminate\Support\Facades\Auth;

$productCount =0;
$assetCount = 0;
$laptopCount = 0;
$desktopCount = 0;
// $switchCount = 0;
$printerCount = 0;
$headphoneCount = 0;
$webcamCount = 0;
$projectorCount = 0;
// $digitalnotepadCount = 0;
// $digitalxpnotepadCount = 0;
$rfdeviceCount = 0;
$wifideviceCount = 0;
$MonitorCount = 0;
$MouseCount = 0;
$ScannerCount = 0;
$scrapCount = 0;
$campusassetCount = 0;
$employeeCount = 0;
$vendorCount = 0;
class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $laptop = 'Laptop';
        $desktop = 'Desktop';
        $switch = 'Switch';
        $printer = 'Printer';
        $headphone = 'Headphone';
        $webcam = 'Webcam';
        $projector = 'Projector';
        // $digitalnotepad = 'Digital Notepad';
        // $digitalxpnotepad = 'Digital XP Notepad';
        $rfdivice = 'RF Device';
        $scrap = 'N';

        $userId = Auth::check() ? Auth::id() : true;

        $location = User::where('id', $userId)->value('location');

        $user_type = User::where('id', $userId)->value('user_type');

        if($user_type =='user') {
            $productCount = Product::where('currentStatus','1')->where('location',$location)->count(); 
            $desktopCount = Desktop::where('status','Y')->where('location',$location)->count();
            $laptopCount = Laptop::where('status','Y')->where('location',$location)->count();
            $switchCount = Switchs::where('status','Y')->where('location',$location)->count();
            $printerCount = Printer::where('status','Y')->where('location',$location)->count();
            $headphoneCount = Headphone::where('status','Y')->where('location',$location)->count();
            $webcamCount = Webcam::where('status','Y')->where('location',$location)->count();
            $rfdiviceCount = Rfdivice::where('status','Y')->where('location',$location)->count();
            $wifidiviceCount = Wifidivice::where('status','Y')->where('location',$location)->count();
            $monitorCount = Monitor::where('status','Y')->where('location',$location)->count();
            $mouseCount = Mouse::where('status','Y')->where('location',$location)->count();
            $keyboardCount = Keyboard::where('status','Y')->where('location',$location)->count();
            $scannerCount = Scanner::where('status','Y')->where('location',$location)->count();
            $projectorCount = Projector::where('status','Y')->where('location',$location)->count();
           
         } else  {
            $productCount = Product::count();
            $desktopCount = Desktop::count();
            $laptopCount = Laptop::count();
            $switchCount = Switchs::count();
            $printerCount = Printer::count();
            $headphoneCount = Headphone::count();
            $webcamCount = Webcam::count();
            $rfdiviceCount = Rfdivice::count();
            $wifidiviceCount = Wifidivice::count();
            $monitorCount = Monitor::count();
            $mouseCount = Mouse::count();
            $keyboardCount = Keyboard::count();
            $scannerCount = Scanner::count();
            $projectorCount = Projector::count();
           
         }
        $userCount = User::all()->count();
        $employeeCount = Employee::all()->count();
        $vendorCount = Vendor::all()->count();
        
        
        $scrapCount = Product::where('currentStatus', '<=', $scrap)->count();


        return view('home', compact('productCount','laptopCount','desktopCount','switchCount','printerCount','headphoneCount','webcamCount','projectorCount',
        'rfdiviceCount','wifidiviceCount','keyboardCount','scannerCount','monitorCount','mouseCount','scrapCount','userCount','employeeCount','vendorCount'));
    }
}
