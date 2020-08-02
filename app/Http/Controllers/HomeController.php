<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $main_content = view('pages.main_content');
        return view('master')->with('home_content', $main_content);
    }

    public function check_bus_availability(Request $request) {

        $start_point = $request->start_point;
        $end_point = $request->end_point;
        $date = $request->date;

        $date = date_create($date);
        $date = $date->format('d/m/Y');

        // echo $start_point;
        // exit();
        
        $bus_details =
        DB::table('tbl_bus_details')
        ->leftjoin('tbl_passenger', function($join){
            $join->on('tbl_bus_details.bus_id', '=', 'tbl_passenger.bus_id');
           $join->on('tbl_bus_details.start_point', '=', 'tbl_passenger.start_point');
            $join->on('tbl_bus_details.end_point', '=', 'tbl_passenger.end_point');
        })
        ->where('tbl_bus_details.start_point', '=', $start_point)
        ->where('tbl_bus_details.end_point', '=', $end_point)
        
        ->where('bus_status', 1)
        ->select( 'tbl_bus_details.*',
          DB::raw('SUM(CASE WHEN tbl_passenger.date = \''.$date.'\' THEN tbl_passenger.no_of_sits ELSE 0 END) as total_sales'),
         DB::raw('GROUP_CONCAT(CASE WHEN tbl_passenger.date = \''.$date.'\' THEN tbl_passenger.sits ELSE 0 END SEPARATOR \', \') as soldseats'))
        ->groupBy('tbl_bus_details.bus_id')
        ->get();

        foreach($bus_details as $b){
            $b->end_point = $this->routeById($b->end_point);
            $b->start_point = $this->routeById($b->start_point);
        }
        // echo "<pre>";
        // print_r($bus_details);
        // exit();

        if (count($bus_details)==0) {

            Session::put('message', 'Sorry, No Buses are Available');
            return Redirect::to('/');


        } else {
// echo "<pre>";
// print_r($route_info);
//     exit();


           $available_bus = view('pages.available_bus')->with('bus_details', $bus_details);
           return view('master')->with('home_content', $available_bus);
       }
   }

   public function routeById($id)
   {
    return DB::table('tbl_route')->where('route_id',$id)->first()->start_point;
}

public function seat_view(Request $request){
    $bus_id = $request->bus_id;
    $soldseats = $request->soldseats;
    $blocked_seats = $request->blocked_seats;
    $bus_info = DB::table('tbl_bus_details')
    ->where('bus_id',$bus_id)

    ->first();
    $route_id = $bus_info->start_point;

    $counter_info = DB::table('tbl_counter')->where('bus_id',$bus_id)->where('route_id',$route_id)->get();
//          echo "<pre>";
// print_r($bus_info);
//     exit();

    $seat_view = view('pages.seat_view')
    ->with('bus_info', $bus_info)
    ->with('counter_info', $counter_info)
    ->with(compact('bus_id','soldseats','blocked_seats'));
    return view('master')->with('home_content', $seat_view);
}




public function seat_fare($id)
{
    $fare = DB::table('tbl_bus_details')->where('bus_id',$id)->first()->regular_fare;
    return $fare;
}

public function save_passenger(Request $request){

    $date = date("d/m/Y ");

    $result = "";
    $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwx1234567890@#$%&";
    $char_array = str_split($chars);
    for($i = 1; $i<= 7; $i++){
        $rand_chars = array_rand($char_array);
        $result .= $char_array[$rand_chars];
    }
    

    $data = array();
    $data['bus_id'] = $request->bus_id;
    $data['start_point'] = $request->start_point;
    $data['end_point'] = $request->end_point;
    $data['name'] = $request->name;
    $data['email'] = $request->email;
    $data['contact'] = $request->contact;
    $data['ticket_id'] = $result;
    $data['address'] = $request->address;
    $data['b_point'] = $request->b_point;
    $data['date'] = $date;
    $data['no_of_sits'] = $request->no_of_sits;
    $data['cost'] = $request->cost;
    $data['sits'] = $request->sits;
// print_r($data);
//         exit();
    DB::table('tbl_passenger')->insert($data);
    Session::put('message', 'successfully booked');
    return Redirect::to('/');

}







}
