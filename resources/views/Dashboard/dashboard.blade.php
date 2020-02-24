
<!DOCTYPE HTML>
<html>
<head>
<title>dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="school system " />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="{{asset('dashboard/css/bootstrap.min.css')}}" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="{{asset('dashboard/css/style.css')}}" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="{{asset('dashboard/css/lines.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('dashboard/css/font-awesome.css')}}" rel="stylesheet"> 
<!-- jQuery -->
<script src="{{asset('dashboard/js/jquery.min.js')}}"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Nav CSS -->
<link href="{{asset('dashboard/css/custom.css')}}" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="{{asset('dashboard/js/metisMenu.min.js')}}"></script>
<script src="{{asset('dashboard/js/custom.js')}}"></script>
<!-- Graph JavaScript -->
<script src="{{asset('dashboard/js/d3.v3.js')}}"></script>
<script src="{{asset('dashboard/js/rickshaw.js')}}"></script>
 <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">

<script src="{{asset('dashboard/js/Chart.js')}}"></script>
</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">{{Auth::user()->name}}</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
				
			    <li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="{{asset('dashboard/images/1.png')}}"><span class="badge">9</span></a>
	        		<ul class="dropdown-menu">
						
						
						 <li class="dropdown">
                                

                                
                                    <li  class="m_2">
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                               
                            </li>

	        		</ul>
	      		</li>
			</ul>
			<form class="navbar-form navbar-right">
              <input type="text" class="form-control" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
            </form>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="/home"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboards</a>
                        </li>


                

                        
                      

                       
@if(@Auth::user()->hasrole('Admin'))

                           <li>
                            <a href="#"><i class="fa fa-laptop nav_icon"></i>Admin Manu<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <li>
                            <a href="#"><i class="fa fa-group nav_icon"></i> Manage Classes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('class.create')}}">Add class</a>
                                </li>
                                <li>
                                    <a href="{{route('class.view')}}">View class</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                                   <li>
                            <a href="#"><i class="fa fa-indent nav_icon"></i>Add Sections<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('section.create')}}">Add Section</a>
                                </li>
                                <li>
                                    <a href="{{route('section.view')}}">View All</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                               
                           <li>
                            <a href="#"><i class="fa fa-pencil nav_icon"></i>Manage Fall<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('session.create')}}">Add Fall</a>
                                </li>
                                <li>
                                    <a href="{{route('session.view')}}">View Fall</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                                  <li>
                            <a href="#"><i class="fa fa-book nav_icon"></i>Subject<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('subject.create')}}">Add Subject</a>
                                </li>
                                <li>
                                    <a href="{{route('subject.view')}}">View Subject</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                          <li>
                            <a href="#"><i class="fa fa-indent nav_icon"></i>TestType Managment<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('exam.create')}}">Add Test</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                           <li>
                            <a href="#"><i class="fa fa-user nav_icon"></i> Manage Students<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('student.create')}}">Add Student</a>
                                </li>
                                 <li>
                                    <a href="{{route('student.view')}}">View Student</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                                   <li>
                            <a href="#"><i class="fa fa-laptop nav_icon"></i> Manage Teacher<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('add.teacher')}}">Add Teacher</a>
                                </li>
                                <li>
                                    <a href="{{route('view.teacher')}}">All Teachers</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-laptop nav_icon"></i>Assign Course<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                               
                                <li>
                                    <a href="{{route('assign.create')}}">Assign To Teachers</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                           <li>
                            <a href="#"><i class="fa fa-laptop nav_icon"></i>Report Manu<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                               
                                <li>
                                    <a href="{{route('report.allstudents')}}">All Students Report</a>
                                </li>
                                 <li>
                                    <a href="{{route('report.marksheet')}}">Marksheet Report</a>
                                </li>
                                <li>
                                    <a href="{{route('report.getpositions')}}">Position Marksheet</a>
                                </li>
                                  @endif



@if(@Auth::user()->hasrole('Teacher'))
                     <li>
                            <a href="#"><i class="fa fa-laptop nav_icon"></i>Student Module<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('get.session')}}">Upload Marks</a>
                                </li>
                                <li>
                                    <a href="">Manage Attendance </a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                                  @endif

                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         
                        
                       
                       
                         
                        
                        
                        
                       
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
        <div class="graphs">
          
  @if(Auth::User()->hasrole('Admin'))

    @if(Request::is('home'))

    <div class="col-md-3 widget widget1">
                <div class="r3_counter_box">
                    <i class="pull-left fa fa-user icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>{{$admin}}</strong></h5>
                      <span>Total Admins</span>
                    </div>
                </div>
            </div>
      <div class="col_3">
           
            <div class="col-md-3 widget widget1">
                <div class="r3_counter_box">
                    <i class="pull-left fa fa-users user1 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>{{$totalstudents}}</strong></h5>
                      <span style="color: blue">Students In School</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 widget widget1">
                <div class="r3_counter_box">
                    <i class="pull-left fa fa-users user2 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>{{$totalleft}}</strong></h5>
                      <span style="color: red">Student Left School</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 widget">
                <div class="r3_counter_box">
                    <i class="pull-left fa fa-users dollar1 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>{{$totalteachers}}</strong></h5>
                      <span style="color: lightgreen"> Total Teachers</span>
                    </div>
                </div>
             </div>
            <div class="clearfix"> </div>
      </div>
@endif

@endif
@yield('content')
    
	
   
		
		</div>
 
       </div>
 

      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <link rel="stylesheet" href="{{asset('dashboard/css/clndr.css')}}" type="text/css" />
            <script src="{{asset('dashboard/js/underscore-min.js')}}" type="text/javascript"></script>
            <script src= "{{asset('dashboard/js/moment-2.2.1.js')}}" type="text/javascript"></script>
            <script src="{{asset('dashboard/js/clndr.js')}}" type="text/javascript"></script>
            <script src="{{asset('dashboard/js/site.js')}}" type="text/javascript"></script>
    <script src="{{asset('dashboard/js/bootstrap.min.js')}}"></script>
     <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
</body>
</html>
