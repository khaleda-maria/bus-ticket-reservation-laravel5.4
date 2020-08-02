<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use Illuminate\Support\Facades\Redirect;

class BusController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }
    
      public function add_bus_details(){
        $bus_details = view('admin.pages.add_bus_details');
        return view('admin.admin_master')->with('content',$bus_details);
    }
      public function add_route_details(){
        $bus_details = view('admin.pages.add_route');
        return view('admin.admin_master')->with('content',$bus_details);
    }

    public function save_bus_details(Request $request) {

        $data = array();
        $data['bus_name'] = $request->bus_name;
        $data['bus_type'] = $request->bus_type;
        $data['start_point'] = $request->start_point;
        $data['bus_layout'] = $request->bus_layout;
        $data['end_point'] = $request->end_point;
        $data['total_seat'] = $request->total_seat;
        $data['regi_number'] = $request->regi_number;
        $data['regular_fare'] = $request->regular_fare;
        $data['f_class_fare'] = $request->f_class_fare;
        $data['start_time'] = $request->start_time;
        $data['arrival_time'] = $request->arrival_time;
        $data['blocked_seats'] = $request->blocked_seats;
        

        DB::table('tbl_bus_details')
                ->insert($data);
        Session::put('message', ' Bus Details Saved Successfully !');
        return Redirect::to('/add-bus-details');
    }
    
    public function manage_bus_details(){

        
        $b_details_info = DB::table('tbl_bus_details')
            ->join('tbl_route', 'tbl_bus_details.start_point', '=', 'tbl_route.route_id')
            ->select('tbl_bus_details.*', 'tbl_route.start_point')
            ->get();

        foreach($b_details_info as $b){
            $b->end_point = $this->routeById($b->end_point);
        }

            // echo "<pre>";
            // print_r($b_details_info);
            // exit();
        $bus_details = view('admin.pages.manage_bus_details')->with('b_details_info',$b_details_info);
        return view('admin.admin_master')->with('content',$bus_details);
    }

    public function routeById($id)
    {
        return DB::table('tbl_route')->where('route_id',$id)->first()->start_point;
    }


    public function manage_route(){
        
        $route_details = view('admin.pages.manage_route');
        return view('admin.admin_master')->with('content',$route_details);
    }

    public function save_route_details(Request $request) {
        $data = array();
        $data['start_point'] = $request->start_point;
        $data['end_point'] = $request->end_point;
      

        DB::table('tbl_route')
                ->insert($data);
        Session::put('message', ' Route Name Saved Successfully !');
        return Redirect::to('/add-route-details');
    }

    public function add_counter() {
        $counter_details = view('admin.pages.add_counter');
        return view('admin.admin_master')->with('content',$counter_details);
    }
    public function save_counter(Request $request){
       $data = array();
        $data['counter_name'] = $request->counter_name;
        $data['route_id'] = $request->route_id;
        $data['bus_id'] = $request->bus_id;
        $data['contact'] = $request->contact;
      

        DB::table('tbl_counter')
                ->insert($data);
        Session::put('message', ' Counter Details Saved Successfully !');
        return Redirect::to('/add-counter');
    }

      public function manage_counter() {
        $counter_info = DB::table('tbl_counter')->where('c_status',1)->get();
        $counter_details = view('admin.pages.manage_counter')->with('counter_info',$counter_info);
        return view('admin.admin_master')->with('content',$counter_details);
    }

    //  public function add_blocked_seat() {
    //     $blocked_seat = view('admin.pages.add_blocked_seat');
    //     return view('admin.admin_master')->with('content',$blocked_seat);
    // }

    // public function save_blocked_seat(Request $request){
    //   $data = array();
    //     $data['bus_id'] = $request->bus_id;
    //     $data['start_point'] = $request->start_point;
    //    $data['end_point'] = $request->end_point;
    //    $data['blocked_seats'] = $request->blocked_seats;
    //         DB::table('tbl_blocked_seats')
    //             ->insert($data);
    //     Session::put('message', ' Blocked Seats Saved Successfully !');
    //     return Redirect::to('/add-blocked-seats');
    // }


  
  
}
