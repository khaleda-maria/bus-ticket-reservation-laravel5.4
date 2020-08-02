
@extends('admin.admin_master')
@section('content')
<script type="text/javascript">
    function check_delete()
    {
        var chk=confirm('Are you sure to delete this ?');
        if(chk)
        {
            return true;
        }
        else{
            return false;
        }
    }
</script>
<?php 
$route_info = DB::table('tbl_route')->where('route_status',1)->get();
        ?>
<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Home</a> 
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Tables</a></li>
</ul>

<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>Routes</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        
                        <th>Route Id</th>
                        <th>Start Point</th>
                        <th>End Point</th>
                        
                        
                    
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    @foreach($route_info as $r_details)
                    <tr>
                        <td>{{$r_details->route_id}}</td>
                        <td class="center">{{$r_details->start_point}}</td>
                        <td class="center">{{$r_details->end_point}}</td>
               
                        <td class="center">

                            <a class="btn btn-danger" onclick="return check_delete();" href="{{URL::to('/delete-route/'.$r_details->route_id)}}">
                                <i class="fa fa-trash-o "></i> 
                            </a>
                        </td>
                    </tr>
                   @endforeach
                </tbody>
            </table>            
        </div>
    </div><!--/span-->
@endsection
