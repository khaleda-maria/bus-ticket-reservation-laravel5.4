@extends('master')
@section('home_content')


<?php $route_info = DB::table('tbl_route')->where('route_status', 1)->get() ?>
<section>
    
 
    
    <div class="container checking ">
        <div class="check_header">
            <h1><b>Look For a Bus</b></h1>
            <p>We Ensure your Safety and Relaxation !</p>
        </div>
        <div class="row">
            
             <h4 style="color: orangered"><?php
                $message = Session::get('message');
                if ($message) {
                    echo $message;
                    Session::put('message', '');
                }
                ?></h4>
            <div class="col-md-6 check_content">
                {!! Form::open(['url' =>'/check-bus-availability','class'=>'form-horizontal','method'=>'post']) !!}
                <div class="col-xs-4">
                    <div class="form-group check">
                        <label >From</label>
                        <Select name="start_point" type="text" class="form-control ">
                            @foreach($route_info as $r_info)
                            <option value="{{$r_info->route_id}}">{{$r_info->start_point}}</option>


                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="form-group check ">
                        <label >To</label>
                        <Select name="end_point" type="text" class="form-control">
                            @foreach($route_info as $r_info)
                            <option value="{{$r_info->route_id}}">{{$r_info->end_point}}</option>


                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="check_date">
                    <div class="form-group check " id='datetimepicker1'>
                        <label >Date of journey</label>
                        <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text"/>
                    </div>
                </div>
           
                <br/>
                <div class="col-xs-3">
                    <div class="form-group  last">

                        <input type="submit" class="form-control btn " value="Find Bus" >
                    </div>
                </div>
     
    
                {!! Form::close() !!}
        </div>
     
            <div class="col-md-6">
                <div class="side-img">
                    <img src="{{asset('public/frontend_asset/images/bus-3.jpg')}}" width="100%" height="288"> 
                </div>
            </div>
        </div>
    </div>

</section>

@endsection