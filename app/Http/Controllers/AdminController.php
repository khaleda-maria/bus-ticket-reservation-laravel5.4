<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;
use Session;
use Cart;

class AdminController extends Controller {

    public function index() {
        return view('admin.login');
    }

  

    public function admin_login_check(Request $request) {
              $email_address=$request->admin_email;
        $password=$request->admin_password;
        
        $admin_info = DB::table('tbl_admin')
                ->where('admin_email',$email_address)
                ->where('admin_password',$password)
                ->first();

        if($admin_info)
        {
            Session::put('admin_name',$admin_info->admin_name);
            Session::put('admin_id',$admin_info->admin_id);
            return Redirect::to('/admin-master');
        }
        else{
            Session::put('exception','Your user id or password invalide !');
            return Redirect::to('/admin');
        }

    }


    public function Passenger_details(){
        $p_info = DB::table('tbl_passenger')
          ->join('tbl_bus_details', 'tbl_passenger.bus_id', '=', 'tbl_bus_details.bus_id')
          ->join('tbl_route', 'tbl_passenger.start_point', '=', 'tbl_route.route_id')
        
          //->where('tbl_passenger.follower_id', '=', 3)
           ->select('tbl_passenger.*', 'tbl_bus_details.bus_name', 'tbl_route.start_point','tbl_route.end_point')
          
           ->get(); 
    
        $p_details = view('admin.pages.passenger_details')->with('pessenger_info',$p_info);
         return view('admin.admin_master')->with('content',$p_details);
       
    }
    
    public function admin_master(){
        return view('admin.admin_master');
    }
    
  

    
    public function logout()
    {
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        
        Session::put('message','You are Logged Out!!!');
        return Redirect::to('/admin');
    }
    

}
