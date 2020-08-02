@extends('admin.admin_master')
@section('content')



<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header text-center" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Bus Details Form</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content text-center ">
            <h3 style="color: orangered"><?php
                $message = Session::get('message');
                if ($message) {
                    echo $message;
                    Session::put('message', '');
                }
                ?></h3>
            
            <?php  $route_info = DB::table('tbl_route')->where('route_status',1)->get()?>
            
            {!! Form::open(['url' =>'/save-bus-details','class'=>'form-horizontal','method'=>'post']) !!}

            <div class="form-group">
                <label class="control-label col-sm-4">Bus Name:</label>
                <div class="col-sm-6">
                    <input name="bus_name" type="text" class="form-control">
                   
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4">Bus Type:</label>
                <div class="col-sm-6">
                    <Select name="bus_type" type="text" class="form-control">
                        <option>--Select Bus Type--</option>
                        <option value="AC">AC</option>
                        <option value="NON AC">NON AC</option>
                        <option value="Sleeper">Sleeper</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4">Bus Layout:</label>
                <div class="col-sm-6">
                    
                       <Select name="bus_layout" type="text" class="form-control">
                       
                        <option value="0">2*2</option>
                        <option value="1">1*2</option>
                        <option value="2">2*3</option>
                       
                        
                       
                    </select>
                    
                </div>
            </div><div class="form-group">
                <label class="control-label col-sm-4">Start Point:</label>
                <div class="col-sm-6">
                       
                       <Select name="start_point" type="text" class="form-control">
                        @foreach($route_info as $r_info)
                         
                        <option value="{{$r_info->route_id}}">{{$r_info->start_point}}</option>
                       
                        
                        @endforeach
                    </select>
                    
                </div>
            </div>
           
            <div class="form-group">
                <label class="control-label col-sm-4">End Point:</label>
                <div class="col-sm-6">
                    <Select name="end_point" type="text" class="form-control">
                        @foreach($route_info as $r_info)
                        <option value="{{$r_info->route_id}}">{{$r_info->end_point}}</option>
                       
                        
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4">Total Seats:</label>
                <div class="col-sm-6">
                    <input type="text" name="total_seat" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4">Registration No :</label>
                <div class="col-sm-6">
                    <input type="text" name="regi_number" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4">Regular Fare :</label>
                <div class="col-sm-6">
                    <input type="text" name="regular_fare" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4">First Class Fare :</label>
                <div class="col-sm-6">
                    <input type="text" name="f_class_fare" class="form-control" placeholder="Insert If Any">
                </div>
            </div>
            
          
            
            <div class="form-group " style="padding-left: 30px; padding-right: 20px;" >
                <label class="control-label col-sm-4">Start Time:</label>
                <div class="col-sm-6 input-group date" id='timepicker'>
                    <input type="text"  name="start_time" class="form-control">
                    <span class="input-group-addon">
                        <span class="fa fa-clock-o"></span>
                    </span>

                </div>
            </div>
            <div class="form-group " style="padding-left: 30px; padding-right: 20px;" >
                <label class="control-label col-sm-4">Arrival Time:</label>
                <div class="col-sm-6 input-group date" id='timepicker1'>
                    <input type="text"  name="arrival_time" class="form-control">
                    <span class="input-group-addon">
                        <span class="fa fa-clock-o"></span>
                    </span>

                </div>
            </div>
             <div class="form-group">
                <label class="control-label col-sm-4">Blocked Seats :</label>
                <div class="col-sm-6">
                    <input type="text" name="blocked_seats" class="form-control" placeholder="If Any (example...A1,A2,..J5)">
                </div>
            </div>
              


            <div class="form-group" style="padding-bottom: 20px;">
                <div class="col-sm-offset-3 col-sm-8">
                    <button name="submit" class="btn btn-danger">Submit</button>
                </div>
            </div>

            {!! Form::close() !!}
        </div>
    </div><!--/span-->
</div><!--/row-->
@endsection
