@extends('master')
@section('home_content')



<section>
    

    
    <div class="container checking ">
        <div class="check_header">
            <h1><b> Available Buses</b></h1>
            <p>We Ensure your Safety and Relaxation !</p>
        </div>
        <div class="row">
            <div class="col-md-12 bus_details">
                            <table class="table bootstrap-datatable datatable">
                <thead>
                    <tr style="background-color: #ccc; ">
                        <th>Bus Name</th>
                        
                        <th>Total Seat</th>
                        <th>Economy </th>
                        <th>First Class </th>
                        <th>Start Time</th>
                        <th>Arrival Time</th>
                        <th>Available Seats</th>
                        <th></th>
                        
                    
                       
                    </tr>
                </thead>   
                <tbody  >
                    @foreach($bus_details as $b_details)
                    <tr >
                        <td>
                            <h6 style="color: orangered; margin: 0; ">{{$b_details->bus_name}}</h6>
                            <p style="font-size: 14px;">{{$b_details->start_point}} - {{$b_details->end_point}}</p> 
                            <p>Bus Type:  {{$b_details->bus_type}}</p>
                        
                        </td>
                        
                        <td class="center">{{$b_details->total_seat}}</td>
                        <td class="center"><?php echo $b_details->regular_fare.' '.'tk';?></td>
                        <td class="center">
                            <?php
                            if($b_details->f_class_fare !=0){
                                echo $b_details->f_class_fare.' '.'tk';
                            }else{
                                echo "unavailable!";
                            }
                            ?>
                        </td>
                        <td class="center">{{$b_details->start_time}}</td>
                        <td class="center">{{$b_details->arrival_time}}</td>
                        
                       
                        
                       
                        <td class="center">
                           {!! Form::open(['url' =>'/seat-view','class'=>'form-horizontal','method'=>'post']) !!}
                           <input type="hidden" name="soldseats" value="{{$b_details->soldseats}}">
                           <input type="hidden" name="bus_id" value="{{$b_details->bus_id}}">
                           <input type="hidden" name="blocked_seats" value="{{$b_details->blocked_seats}}">
                            <!-- <a class="btn" style="margin-top: 30px; background-color: #FFA280;" href="{{URL::to('/seat-view/'.$b_details->bus_id)}}" > -->
                            <button class="btn btn-danger" type="submit">View Seats</button>
                                 
                            <!-- </a> -->
                            {!! Form::close() !!}
                            
                        </td>
                        
                    </tr>
                
                   @endforeach
                </tbody>
              
            </table> 
                <hr style=" height: .5px; background-color: #000; ">
            </div>
        </div>
    </div>
    

</section>

@endsection