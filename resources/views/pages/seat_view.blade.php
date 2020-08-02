@extends('master')
@section('home_content')



                            <div class="modal-body seat_view">
                                <div class="row">
                                    <div class=" col-md-offset-2 col-sm-4" id="left">
                                        <div class="panel panel-success">
                                            <div class="panel-heading" style="margin-bottom: -15px;">
                                                <table>
                                                    
                                                    <tr>
                                                    <td>
                                                    <div class="colored-box" style="background: #AAAAAA"></div>
                                                    </td>
                                                    <td>
                                                    <div class="colored-box"  style="background: #fff; margin-left: 20px;"></div>
                                                    </td>
                                                    <td>
                                                    <div class="colored-box"  style="background: #1CB841; margin-left: 20px;"></div>
                                                    </td>
                                                     <td>
                                                    <div class="colored-box"  style="background: red; margin-left: 20px;"></div>
                                                    </td>
                                                    </tr>

                                                    <tr>
                                                    <td><p >Reserved</p></td>
                                                    <td ><p style=" margin-left: 20px;">Available</p></td>
                                                    <td ><p style=" margin-left: 20px; ">Selected</p></td>
                                                    <td ><p style=" margin-left: 20px; ">Blocked</p></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div id="seatPlan">
                                                <?php 
                                               
                                                  // echo "<pre>";
                                                  // print_r($bus_id);
                                                  // exit();
                                                 // echo $soldseats;
                                                 // exit();
                                                  $bus_layout = $bus_info->bus_layout;
                                                  $total_seat = $bus_info->total_seat;

                                                  if($bus_layout == 0){
                                             ?>
                                                <table style="margin-left: 20px;">
                                                  
                                                    <tr>
                                                        <td><div class="col-md-2"><button type="button" id="A1" class="btn btn-sized">A1</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="A2" class="btn btn-sized">A2</button></div></td>
                                                        <td><div class="col-md-4"></div></td>
                                                        <td><div class="col-md-2 col-md-offset-1"><button type="button" id="A3" class="btn btn-sized">A3</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="A4" class="btn btn-sized">A4</button></div></td>
                                                    </tr>
                                                    <tr>
                                                        <td><div class="col-md-2"><button type="button" id="B1" class="btn btn-sized">B1</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="B2" class="btn btn-sized">B2</button></div></td>
                                                        <td><div class="col-md-4"></div></td>
                                                        <td><div class="col-md-2 col-md-offset-1"><button type="button" id="B3" class="btn btn-sized">B3</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="B4" class="btn btn-sized">B4</button></div></td>
                                                    </tr>
                                                    <tr>
                                                        <td><div class="col-md-2"><button type="button" id="C1" class="btn btn-sized">C1</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="C2" class="btn btn-sized">C2</button></div></td>
                                                        <td><div class="col-md-4"></div></td>
                                                        <td><div class="col-md-2 col-md-offset-1"><button type="button" id="C3" class="btn btn-sized">C3</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="C4" class="btn btn-sized">C4</button></div></td>
                                                    </tr>
                                                    <tr>
                                                        <td><div class="col-md-2"><button type="button" id="D1" class="btn btn-sized">D1</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="D2" class="btn btn-sized">D2</button></div></td>
                                                        <td><div class="col-md-4"></div></td>
                                                        <td><div class="col-md-2 col-md-offset-1"><button type="button" id="D3" class="btn btn-sized">D3</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="D4" class="btn btn-sized">D4</button></div></td>
                                                    </tr>
                                                    <tr>
                                                        <td><div class="col-md-2"><button type="button" id="E1" class="btn btn-sized">E1</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="E2" class="btn btn-sized">E2</button></div></td>
                                                        <td><div class="col-md-4"></div></td>
                                                        <td><div class="col-md-2 col-md-offset-1"><button type="button" id="E3" class="btn btn-sized">E3</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="E4" class="btn btn-sized">E4</button></div></td>
                                                    </tr>
                                                    <tr>
                                                        <td><div class="col-md-2"><button type="button" id="F1" class="btn btn-sized">F1</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="F2" class="btn btn-sized">F2</button></div></td>
                                                        <td><div class="col-md-4"></div></td>
                                                        <td><div class="col-md-2 col-md-offset-1"><button type="button" id="F3" class="btn btn-sized">F3</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="F4" class="btn btn-sized">F4</button></div></td>
                                                    </tr>
                                                    <tr>
                                                        <td><div class="col-md-2"><button type="button" id="G1" class="btn btn-sized">G1</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="G2" class="btn btn-sized">G2</button></div></td>
                                                        <td><div class="col-md-4"></div></td>
                                                        <td><div class="col-md-2 col-md-offset-1"><button type="button" id="G3" class="btn btn-sized">G3</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="G4" class="btn btn-sized">G4</button></div></td>
                                                    </tr>
                                                    <tr>
                                                        <td><div class="col-md-2"><button type="button" id="H1" class="btn btn-sized">H1</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="H2" class="btn btn-sized">H2</button></div></td>
                                                        <td><div class="col-md-2"></div></td>
                                                        <td><div class="col-md-2 col-md-offset-1"><button type="button" id="H3" class="btn btn-sized">H3</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="H4" class="btn btn-sized">H4</button></div></td>
                                                    </tr>
                                                    <tr>
                                                        <td><div class="col-md-2"><button type="button" id="I1" class="btn btn-sized">I1</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="I2" class="btn btn-sized">I2</button></div></td>
                                                        <td><div class="col-md-3"></div></td>
                                                        <td><div class="col-md-2 col-md-offset-1"><button type="button" id="I3" class="btn btn-sized">I3</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="I4" class="btn btn-sized">I4</button></div></td>
                                                    </tr>
                                                    <tr>
                                                        <td><div class="col-md-2"><button type="button" id="J1" class="btn btn-sized">J1</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="J2" class="btn btn-sized">J2</button></div></td>
                                                        <td><div class="col-md-2 col-md-offset-2"></div></td>
                                                        <td><div class="col-md-2 col-md-offset-1"><button type="button" id="J3" class="btn btn-sized">J3</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="J4" class="btn btn-sized">J4</button></div></td>
                                                    </tr>
                                                </table>
                                                <?php }elseif ($bus_layout == 1) {?>
                                                    <table style="margin-left: 30px;">
                                                   
                                                    <tr>
                                                        <td><div class="col-md-2"><button type="button" id="A1" class="btn btn-sized">A1</button></div></td>
                                                        
                                                        <td><div class="col-md-4"></div></td>
                                                        <td><div class="col-md-2 col-md-offset-1"><button type="button" id="A2" class="btn btn-sized">A2</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="A3" class="btn btn-sized">A3</button></div></td>
                                                    </tr>
                                                    <tr>
                                                        <td><div class="col-md-2"><button type="button" id="B1" class="btn btn-sized">B1</button></div></td>
                                                        
                                                        <td><div class="col-md-4"></div></td>
                                                        <td><div class="col-md-2 col-md-offset-1"><button type="button" id="B2" class="btn btn-sized">B2</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="B3" class="btn btn-sized">B3</button></div></td>
                                                    </tr>
                                                    <tr>
                                                        <td><div class="col-md-2"><button type="button" id="C1" class="btn btn-sized">C1</button></div></td>
                                                        
                                                        <td><div class="col-md-4"></div></td>
                                                        <td><div class="col-md-2 col-md-offset-1"><button type="button" id="C2" class="btn btn-sized">C2</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="C3" class="btn btn-sized">C3</button></div></td>
                                                    </tr>
                                                    <tr>
                                                        <td><div class="col-md-2"><button type="button" id="D1" class="btn btn-sized">D1</button></div></td>
                                                        
                                                        <td><div class="col-md-4"></div></td>
                                                        <td><div class="col-md-2 col-md-offset-1"><button type="button" id="D2" class="btn btn-sized">D2</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="D3" class="btn btn-sized">D3</button></div></td>
                                                    </tr>
                                                    <tr>
                                                        <td><div class="col-md-2"><button type="button" id="E1" class="btn btn-sized">E1</button></div></td>
                                                       
                                                        <td><div class="col-md-4"></div></td>
                                                        <td><div class="col-md-2 col-md-offset-1"><button type="button" id="E2" class="btn btn-sized">E2</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="E3" class="btn btn-sized">E3</button></div></td>
                                                    </tr>
                                                    <tr>
                                                        <td><div class="col-md-2"><button type="button" id="F1" class="btn btn-sized">F1</button></div></td>
                                                        
                                                        <td><div class="col-md-4"></div></td>
                                                        <td><div class="col-md-2 col-md-offset-1"><button type="button" id="F2" class="btn btn-sized">F2</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="F3" class="btn btn-sized">F3</button></div></td>
                                                    </tr>
                                                    <tr>
                                                        <td><div class="col-md-2"><button type="button" id="G1" class="btn btn-sized">G1</button></div></td>
                                                        
                                                        <td><div class="col-md-4"></div></td>
                                                        <td><div class="col-md-2 col-md-offset-1"><button type="button" id="G2" class="btn btn-sized">G2</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="G2" class="btn btn-sized">G3</button></div></td>
                                                    </tr>
                                                    <tr>
                                                        <td><div class="col-md-2"><button type="button" id="H1" class="btn btn-sized">H1</button></div></td>
                                                        
                                                        <td><div class="col-md-2"></div></td>
                                                        <td><div class="col-md-2 col-md-offset-1"><button type="button" id="H2" class="btn btn-sized">H2</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="H3" class="btn btn-sized">H3</button></div></td>
                                                    </tr>
                                                    <tr>
                                                        <td><div class="col-md-2"><button type="button" id="I1" class="btn btn-sized">I1</button></div></td>
                                                        
                                                        <td><div class="col-md-3"></div></td>
                                                        <td><div class="col-md-2 col-md-offset-1"><button type="button" id="I2" class="btn btn-sized">I2</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="I3" class="btn btn-sized">I3</button></div></td>
                                                    </tr>
                                                    <tr>
                                                        <td><div class="col-md-2"><button type="button" id="J1" class="btn btn-sized">J1</button></div></td>
                                                        
                                                        <td><div class="col-md-3"></div></td>
                                                        <td><div class="col-md-2 col-md-offset-1"><button type="button" id="J2" class="btn btn-sized">J2</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="J3" class="btn btn-sized">J3</button></div></td>
                                                    </tr>
                                                </table>
                                                <?php } else { ?>
                                                   <table>
                                                  
                                                    <tr>
                                                        <td><div class="col-md-2"><button type="button" id="A1" class="btn btn-sized">A1</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="A2" class="btn btn-sized">A2</button></div></td>
                                                        <td><div class="col-md-4"></div></td>
                                                        <td><div class="col-md-2 col-md-offset-1"><button type="button" id="A3" class="btn btn-sized">A3</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="A4" class="btn btn-sized">A4</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="A5" class="btn btn-sized">A5</button></div></td>
                                                    </tr>
                                                    <tr>
                                                        <td><div class="col-md-2"><button type="button" id="B1" class="btn btn-sized">B1</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="B2" class="btn btn-sized">B2</button></div></td>
                                                        <td><div class="col-md-4"></div></td>
                                                        <td><div class="col-md-2 col-md-offset-1"><button type="button" id="B3" class="btn btn-sized">B3</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="B4" class="btn btn-sized">B4</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="B5" class="btn btn-sized">B5</button></div></td>
                                                    </tr>
                                                    <tr>
                                                        <td><div class="col-md-2"><button type="button" id="C1" class="btn btn-sized">C1</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="C2" class="btn btn-sized">C2</button></div></td>
                                                        <td><div class="col-md-4"></div></td>
                                                        <td><div class="col-md-2 col-md-offset-1"><button type="button" id="C3" class="btn btn-sized">C3</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="C4" class="btn btn-sized">C4</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="C5" class="btn btn-sized">C5</button></div></td>
                                                    </tr>
                                                    <tr>
                                                        <td><div class="col-md-2"><button type="button" id="D1" class="btn btn-sized">D1</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="D2" class="btn btn-sized">D2</button></div></td>
                                                        <td><div class="col-md-4"></div></td>
                                                        <td><div class="col-md-2 col-md-offset-1"><button type="button" id="D3" class="btn btn-sized">D3</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="D4" class="btn btn-sized">D4</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="D5" class="btn btn-sized">D5</button></div></td>
                                                    </tr>
                                                    <tr>
                                                        <td><div class="col-md-2"><button type="button" id="E1" class="btn btn-sized">E1</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="E2" class="btn btn-sized">E2</button></div></td>
                                                        <td><div class="col-md-4"></div></td>
                                                        <td><div class="col-md-2 col-md-offset-1"><button type="button" id="E3" class="btn btn-sized">E3</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="E4" class="btn btn-sized">E4</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="E5" class="btn btn-sized">E5</button></div></td>
                                                    </tr>
                                                    <tr>
                                                        <td><div class="col-md-2"><button type="button" id="F1" class="btn btn-sized">F1</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="F2" class="btn btn-sized">F2</button></div></td>
                                                        <td><div class="col-md-4"></div></td>
                                                        <td><div class="col-md-2 col-md-offset-1"><button type="button" id="F3" class="btn btn-sized">F3</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="F4" class="btn btn-sized">F4</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="F4" class="btn btn-sized">F5</button></div></td>
                                                    </tr>
                                                    <tr>
                                                        <td><div class="col-md-2"><button type="button" id="G1" class="btn btn-sized">G1</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="G2" class="btn btn-sized">G2</button></div></td>
                                                        <td><div class="col-md-4"></div></td>
                                                        <td><div class="col-md-2 col-md-offset-1"><button type="button" id="G3" class="btn btn-sized">G3</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="G4" class="btn btn-sized">G4</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="G5" class="btn btn-sized">G5</button></div></td>
                                                    </tr>
                                                    <tr>
                                                        <td><div class="col-md-2"><button type="button" id="H1" class="btn btn-sized">H1</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="H2" class="btn btn-sized">H2</button></div></td>
                                                        <td><div class="col-md-2"></div></td>
                                                        <td><div class="col-md-2 col-md-offset-1"><button type="button" id="H3" class="btn btn-sized">H3</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="H4" class="btn btn-sized">H4</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="H5" class="btn btn-sized">H5</button></div></td>
                                                    </tr>
                                                    <tr>
                                                        <td><div class="col-md-2"><button type="button" id="I1" class="btn btn-sized">I1</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="I2" class="btn btn-sized">I2</button></div></td>
                                                        <td><div class="col-md-3"></div></td>
                                                        <td><div class="col-md-2 col-md-offset-1"><button type="button" id="I3" class="btn btn-sized">I3</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="I4" class="btn btn-sized">I4</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="I5" class="btn btn-sized">I5</button></div></td>
                                                    </tr>
                                                    <tr>
                                                        <td><div class="col-md-2"><button type="button" id="J1" class="btn btn-sized">J1</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="J2" class="btn btn-sized">J2</button></div></td>
                                                        <td><div class="col-md-2 "></div></td>
                                                        <td><div style="margin-left: 7px;"class="col-md-2 "><button type="button" id="J3" class="btn btn-sized">J3</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="J4" class="btn btn-sized">J4</button></div></td>
                                                        <td><div class="col-md-2 nopadding"><button type="button" id="J4" class="btn btn-sized">J5</button></div></td>

                                                    </tr>
                                                </table>
                                               <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="panel panel-primary">
                                                    <div class="panel-heading" style="background: #FFA280; ">
                                                        <h3 class="panel-title" >SEAT INFORMATION:</h3>
                                                    </div>
                                                    <div class="panel-body" style="padding: 8px;">
                                                        <table class="table text-center" id="ticketdetail">
                                                            <thead>
                                                            <th>Seat No</th>
                                                            <th>Fare Per Seat(Tk.)</th>
                                                            <th>Remove</th>
                                                            </thead>
                                                            <tbody></tbody>
                                                            <tfoot>
                                                            <tr>
                                                                <td>Total Seat: <label id="totalseat">0</label></td>
                                                                <td> Total Fare(Tk.) <label id="totalfare">0</label></td>
                                                                <td></td>
                                                            </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="row passenger">
                                            <div class="col-sm-12">
                                                <div class="panel panel-primary">
                                                    <div class="panel-heading" style="background: #FFA280;">
                                                        <h3 class="panel-title">PERSONAL INFORMATION:</h3>
                                                    </div>
                                                    <div class="panel-body">
                                                        <table class="table table-bordered" style="margin-bottom: 0px;">
                                                            <tbody>
                                                             {!! Form::open(['url' =>'/save-passenger','class'=>'form-horizontal','method'=>'post']) !!}
                                                                <tr>
                                                                    <input type="hidden" name="bus_id" value="{{$bus_info->bus_id}}">

                                                                   
                                                                    
                                                                    <input type="hidden" name="start_point" value="{{$bus_info->start_point}}">
                                                                    <input type="hidden" name="end_point" value="{{$bus_info->end_point}}">
                                                                    <td>Name :* </td>
                                                                    <td colspan="3"><input type="text" name="name" id="customerName" class="form-control" ></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>E-mail:* </td>
                                                                    <td colspan="3"><input type="text" name="email" id="email" class="form-control" ></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Mobile :* </td>
                                                                    <td colspan="3">
                                                                        <input type="text" class="form-control" name="contact" id="contact1" />
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Address : </td>
                                                                    <td colspan="3"><input type="text" name="address" id="address" class="form-control" ></td>
                                                                </tr><tr>
                                                                    <td>Boarding Point : </td>
                                                                    <td colspan="3">
                                                                       <Select name="b_point" type="text" class="form-control">
                                                                        @foreach($counter_info as $c_info)
                                                                        <option value="{{$c_info->counter_id}}">{{$c_info->counter_name}}</option>
                                                                        
                                                                        
                                                                        @endforeach
                                                                    </select>
                                                                </td>
                                                                </tr>

                                                                <tr style="display: none;">
                                                                    <td>
                                                                        <input type="text" name="date" id="cDate" >
                                                                        <input type="text" name="no_of_sits" id="cNumSits">
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" name="cost" id="cCost">
                                                                        <input type="text" name="sits" id="cSits">
                                                                    </td>
                                                                  
                                                                </tr>

                                                                <tr>
                                                                    <td colspan="4">
                                                                        <button type="submit" class="btn" style="background: #3c763d; " id="ConformButton">CONFIRM</button>
                                                                    </td>
                                                                </tr>
                                                           {!! Form::close() !!}

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                
                                    </div>
                                </div>
                            </div>



@endsection


@section('script')

@parent

<script type="text/javascript">

 var busId = '{{$bus_id}}';

    $(function(){
        $.get('seat-fare/'+busId).done(function(result){
            // console.log(result);
            regular_cost = result;
        });
    });

var selectedsits  = [];
    var totalcost = 0;
    var regular_cost;
   
     var date;
    var bus_id;
    var route_id;
    
    $(document).ready(function () {
             $('#date').datepicker({
            minDate: 0,
            maxDate: 30
        });
    
        $('.btn-sized').on('click', function() {
            var id = $(this).attr('id'); // $(this) refers to button that was clicked
            var index = containss(selectedsits,id)
            if(index != -1){
                selectedsits = selectedsits.filter(item => item !== id);
                $(this).removeClass('btn-suc');
                $('#totalseat').text(selectedsits.length);
                $('#row'+id).remove();
                totalcost = totalcost - regular_cost;
                $('#totalfare').text(totalcost);
            }else{
                if(selectedsits.length >= 6){
                    alert("MAXIMUM 6 TICKETS ARE ALLOWED TO PURCHASE");
                }else{
                    selectedsits.push(id);
                    $(this).addClass('btn-suc');
                    $('#totalseat').text(selectedsits.length);
                    var idd = "row"+id;
                    var y = "sdas";
                    $('#ticketdetail tbody').append("<tr id="+idd+"><td>"+ id +"</td><td>"+ regular_cost +"</td><td><a onclick='return closeButton(\""+ id +"\")' href=''><i class='fa fa-times' aria-hidden='true'></i></a></td></tr>");
                    totalcost = parseInt(totalcost) + parseInt(regular_cost);
                    $('#totalfare').text(totalcost);
                }
            }
            console.log(selectedsits);
        });
        /*            $('a.closeLink').on('click', function () {
         //                alert('kjg');
         return false;
         });*/
        $('#ConformButton').on('click', function () {
//                cdate,
            $('#cNumSits'). val(selectedsits.length);
            $('#cCost'). val(totalcost);
            $('#cSits'). val(selectedsits.join(', '));

            $('#cDate'). val(date);
          
        });
    });

    $(document).ready(function () {
        var s = '<?php echo $soldseats; ?>';
        var b_seats = '<?php echo $blocked_seats; ?>';
         selectedsits = [];
        $('#ticketdetail tbody tr').remove();
        $('.btn-sized').removeClass('btn-booked');
        $('.btn-sized').removeClass('btn-suc');
        $('.btn-sized').attr("disabled", false);
        $('#totalfare').text(0);
        $('#totalseat').text(0);
        if(s!=''){
            var i;
            var sold_tickets = s.split(', ');
            for(i=0; i<sold_tickets.length;i++){
                $('#'+sold_tickets[i]).addClass('btn-booked');
                $('#'+sold_tickets[i]).attr("disabled", true);
            }
        }   if(b_seats!=''){
            var i;
            var blocked_seats = b_seats.split(',');
            for(i=0; i<blocked_seats.length;i++){
                $('#'+blocked_seats[i]).addClass('btn-blocked');
                $('#'+blocked_seats[i]).attr("disabled", true);
            }
        }
        console.log(b_seats);
    });
    //    function view(soldseats, cost) {
    //      console.log('soldseats');
    //     selectedsits = [];
    //     $('#ticketdetail tbody tr').remove();
    //     $('.btn-sized').removeClass('btn-booked');
    //     $('.btn-sized').removeClass('btn-suc');
    //     $('.btn-sized').attr("disabled", false);
    //     $('#totalfare').text(0);
    //     $('#totalseat').text(0);
        
    //     totalcost = 0;
    //     // bus_id = bid;
    //     // date = dat;
    //     // route_id = rid;
    //     regular_cost = parseInt(cost);
    //     if(soldseats !=''){
    //         var i;
    //         var sold_tickets = soldseats.split(', ');
    //         for(i=0; i<sold_tickets.length;i++){
    //             $('#'+sold_tickets[i]).addClass('btn-booked');
    //             $('#'+sold_tickets[i]).attr("disabled", true);
    //         }
    //     }
     
    // }
    function containss(a, obj) {
        var i = a.length;
        while (i--) {
            if (a[i] === obj) {
                return i;
            }
        }
        return -1;
    }
    function closeButton(rowid) {
        $('#row'+rowid).remove();
        selectedsits = selectedsits.filter(item => item !== rowid);
        $('#'+rowid).removeClass('btn-suc');
        $('#totalseat').text(selectedsits.length);
        totalcost = totalcost - regular_cost;
        $('#totalfare').text(totalcost);
        return false;
    }



   
</script>
@stop