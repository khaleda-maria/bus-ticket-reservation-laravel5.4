@extends('admin.admin_master')
@section('content')



<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header text-center" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Counter</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
         <?php 
          $bus_info = DB::table('tbl_bus_details')->where('bus_status',1)->get();
          $route_info = DB::table('tbl_route')->where('route_status',1)->get();
         ?>
        <div class="box-content text-center ">
            <h3 style="color: orangered"><?php
                $message = Session::get('message');
                if ($message) {
                    echo $message;
                    Session::put('message', '');
                }
                ?></h3>
            {!! Form::open(['url' =>'/save-counter','class'=>'form-horizontal','method'=>'post']) !!}

            <div class="form-group">
                <label class="control-label col-sm-4">Counter Name:</label>
                <div class="col-sm-6">
                    <input name="counter_name" type="text" class="form-control">
                </div>

            </div>
         
             <div class="form-group">
                <label class="control-label col-sm-4">Bus Name:</label>
                <div class="col-sm-6">
                     <Select name="bus_id" type="text" class="form-control">
                        @foreach($bus_info as $b_info)
                        <option value="{{$b_info->bus_id}}">{{$b_info->bus_name}}</option>
                       
                        
                        @endforeach
                    </select>
                </div>
            </div>
               <div class="form-group">
                <label class="control-label col-sm-4">Route Name:</label>
                <div class="col-sm-6">
                     <Select name="route_id" type="text" class="form-control">
                        @foreach($route_info as $r_info)
                        <option value="{{$r_info->route_id}}">{{$r_info->start_point}}</option>
                       
                        
                        @endforeach
                    </select>
                </div>
            </div> 

            <div class="form-group">
                <label class="control-label col-sm-4">Contact No:</label>
                <div class="col-sm-6">
                    <input name="contact" type="text" class="form-control">
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

