
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
            <h2><i class="halflings-icon user"></i><span class="break"></span>Counter</h2>
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
                        <th>Counter Name</th>
                        <th>Bus  Name</th>
                        <th>Route Name</th>
                        <th>Contact</th>
                     
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    @foreach($counter_info as $c_details)
                    <tr>
                        
                        <td class="center">{{$c_details->counter_name}}</td>
                        <td class="center">{{$c_details->bus_id}}</td>
                        <td class="center">{{$c_details->route_id}}</td>
                        <td class="center">{{$c_details->contact}}</td>
                     
                       
                        
                       
                        <td class="center">

                            <a class="btn btn-info" href="{{URL::to('/edit-counter/'.$c_details->counter_id)}}">
                                <i class="fa fa-pencil-square-o "></i>  
                            </a>
                            <a class="btn btn-danger" onclick="return check_delete();" href="{{URL::to('/delete-counter/'.$c_details->counter_id)}}">
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
