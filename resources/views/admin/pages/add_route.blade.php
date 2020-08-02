@extends('admin.admin_master')
@section('content')



<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header text-center" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Route Name</h2>
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
            {!! Form::open(['url' =>'/save-route-details','class'=>'form-horizontal','method'=>'post']) !!}

            <div class="form-group">
                <label class="control-label col-sm-4">start Point:</label>
                <div class="col-sm-6">
                    <input name="start_point" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4">End Point:</label>
                <div class="col-sm-6">
                    <input name="end_point" type="text" class="form-control">
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

