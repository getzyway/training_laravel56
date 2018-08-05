<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as UserMod;
use \App\Exports\BladeExport; 

class DemoController extends Controller
{
    public function index()
    {
       return "Demo One";
    }

    public function demotwo()
    {
        return "Method POST: demotwo";
    }

    public function demothree()
    {
        return "Method GET, POST : demothree";
    }

    public function demofour()
    {
        return "Method GET, POST, PUT/PATCH, DELETE : demofour";
    }
    public function testlinenoti()
    {
        $line_noti_token = "YH5JVooScQ0A2uNfhCozRrCpr5500okgkb3HCIyZmVd";
        
        $message = array(
          'message' => "Hello World",//required message
          'stickerPackageId'=> 2,
          'stickerId'=> 34
        );
        
        notify_message($message,$line_noti_token);
        
        return 'ok';
    }

    public function testexcel(){
        $arr = array(
            'xx' => 'xx',
            'yy' => 'yy'
        );

        $user = UserMod::all();
        return \Excel::download(new BladeExport($arr), 'invoices.xlsx');


    }

}
