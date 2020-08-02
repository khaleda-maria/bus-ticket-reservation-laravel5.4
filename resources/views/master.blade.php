<!DOCTYPE html>
<html lang="en">

    <head>
        <base href="http://localhost:8080/bus_ticket_res/">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Bus Ticket Reservation </title>

        <!-- css -->
        <link rel="stylesheet" href="{{asset('public/frontend_asset/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend_asset/css/jquery.seat-charts.css')}}">
        <link href="{{asset('public/frontend_asset/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>




        <link href="{{asset('public/frontend_asset/css/nivo-lightbox.css')}}" rel="stylesheet" />
        <link href="{{asset('public/frontend_asset/css/nivo-lightbox-theme/default/default.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/frontend_asset/css/animations.css')}}" rel="stylesheet" />
        <link href="{{asset('public/frontend_asset/css/style.css')}}" rel="stylesheet">
        <link href="{{asset('public/frontend_asset/color/default.css')}}" rel="stylesheet">
        <link href="{{asset('public/frontend_asset/css/bus.css')}}" rel="stylesheet">
        <link href="{{asset('public/frontend_asset/css/seat-management.css')}}" rel="stylesheet">
        
        
     
         <!--<script src="{{asset('public/frontend_asset/js/jquery.seat-charts.min.js')}}"></script>-->
<!--        <script src="{{asset('public/frontend_asset/js/jquery.seat-charts.js')}}"></script>
        <script src="{{asset('public/frontend_asset/js/seat-chart-custom.js')}}"></script>-->


        <!-- =======================================================-->



        <!-- ======================================================= -->
        
<!--        <style>
            div.seatCharts-seat.available .first{
	background-color: #cc006a;
}
div.seatCharts-seat.available .economy{
	background-color: #cc006a;
}
        </style>-->
          <style>
        select {
            text-align: center;
            text-align-last: center;
            /* webkit*/
        }
        option {
            text-align: right;
            text-align-last: center;
            /* reset to left*/
        }
        @media screen and (min-width: 768px) {
            .modal-dialog {
                width: 900px; /* New width for default modal */
            }
            .modal-sm {
                width: 350px; /* New width for small modal */
            }
        }
        @media screen and (min-width: 992px) {
            .modal-lg {
                width: 950px; /* New width for large modal */
            }
        }
        .btn-suc {
            background: rgb(28, 184, 65) !important;
            cursor: pointer;
        }
        .nopadding {
            padding: 0 !important;
            margin: 0 !important;
        }
        .btn-sized{
            width: 45px !important;
            margin-top: 8px;
            background: white;
            color: #000000;
            border: 1px solid #000000;
        }

        .colored-box{
            height: 30px;
            width: 30px;
        }
        .btn-booked{
            background: #AAAAAA;
            cursor: default;
        } .btn-blocked{
            background: red;
            cursor: default;
        }

        #left{
            width: 370px;
        }
        #seatPlan{
            background: #EDCEB8;
            padding: 10px 0;
        }
        #myModal .form-control{
            height: 30px;
            border: 1px solid #000;
        }
        .seat_view .passenger table tr td {
            padding: 3px;
        }

        
    </style>

   

    </head>

 


    <body id="page-top" data-spy="scroll" data-target=".navbar-custom">

        <!-- Navigation -->
        <div class="collapse menubar navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav pull-left">
                <li class="pull-right"><img src="{{asset('public/frontend_asset/images/logo.jpg')}}"></li>
            </ul>

            <!-- Right Side Of Navbar -->

            <ul class="nav navbar-nav navbar-right left-menu">


                <li><a href="{{ url('/') }}">Home</a></li>

                <li><a href="{{ url('/about-us') }}">About Us</a></li>
                <li><a href="{{ url('/contact-us') }}">Contact Us</a></li>
                <!-- Authentication Links -->
                @if (Auth::guest())
                <li><a href="{{ url('/login') }}">Login</a></li>
                <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ url('/logout') }}"
                               onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
                @endif
            </ul>
        </div>
        <!-- /Navigation -->  

        @yield('home_content')
        <!-- ==============================================
           slider
           =============================================== -->
        <!--Slider Structure--->
<!--        <section class="slider">

            <img src="{{asset('public/frontend_asset/images/bus.jpg')}}">

                                <div class="container">
                                            <div class="sldr-cnt sldr-txt">
                                                    <h3 class="sldr-h3 white">Lorem ipsum dolor sit iusmod tempor </h3>
                                                    <h1 class="sldr-h1 white">incididunt bore</h1>
                                                    <p class="sldr-p white">
                                                            Orem ipsum dolor sit amet, consectetur
                                                    </p>
                                                    
                                                    <a href="#link">KNOW MORE</a>
                                            </div>
                                    </div>
        </section>-->


        <!-- /Section: about -->



        <!-- /Section: contact -->


        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="footer-menu">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Press release</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 text-right copyright">
                        &copy;Copyright. All Rights Reserved
                        <div class="credits">
                            <!-- 
                                All the links in the footer should remain intact. 
                                You can delete the links only if you purchased the pro version.
                                Licensing information: https://bootstrapmade.com/license/
                                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Bocor
                            -->
                            <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Business Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>
                    </div>
                </div>	
            </div>
        </footer>

        <!-- Core JavaScript Files -->

        @section('script')
         
        
        
        <script src="{{asset('public/frontend_asset/js/jquery.min.js')}}"></script>
        <script src="{{asset('public/frontend_asset/js/jquery-ui.js')}}"></script>
        <script src="{{asset('public/frontend_asset/js/bootstrap.min.js')}}"></script>
       
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.14.1/moment.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
     
        <script src="{{asset('public/frontend_asset/js/jquery.sticky.js')}}"></script>
        <script src="{{asset('public/frontend_asset/js/jquery.easing.min.js')}}"></script>	
        <script src="{{asset('public/frontend_asset/js/jquery.scrollTo.js')}}"></script>
        <script src="{{asset('public/frontend_asset/js/jquery.appear.js')}}"></script>
        <script src="{{asset('public/frontend_asset/js/stellar.js')}}"></script>
        <script src="{{asset('public/frontend_asset/js/nivo-lightbox.min.js')}}"></script>

        <script src="{{asset('public/frontend_asset/js/custom.js')}}"></script>
        <script src="{{asset('public/frontend_asset/js/css3-animate-it.js')}}"></script>
        <!--<script src="{{asset('public/frontend_asset/contactform/contactform.js')}}"></script>-->
        
       
        <script>
         $(document).ready(function () {
                                       var date_input = $('input[name="date"]'); //our date input has the name "date"
                                       var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
                                       var options = {
                                         format: 'mm/dd/yyyy',
                                         container: container,
                                         todayHighlight: true,
                                         autoclose: true,
                                     };
                                     date_input.datepicker(options);
                                 })
        </script>
        <script>
            $(function () {

                $('#timepicker').datetimepicker({
                    format: 'LT',
                    icons: {
                        up: "fa fa-chevron-up",
                        down: "fa fa-chevron-down",
                    }
                });
            });

        </script>


        
      
<!--     <script type="text/javascript">
        $(document).ready(function(){
            $(".reserved input").prop('checked', true);
            $(".reserved input").prop('disabled', true);
            $("label").click(function(){
                if(!$(this).hasClass("reserved")){
                    if($(this).find("input").is(":checked")){
                    $(this).addClass("selected");
                    }else{
                        console.log("selected");
                        $(this).removeClass("selected");
                    }
                }
                else{
                    alert("Already booked");
                }
            })
        });
    </script> -->

@show

    </body>

</html>

