<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Time Tracker</title><!-- tab title -->
  <!-- Bootstrap core CSS -->
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="{{asset('css/modern-business.css')}}" rel="stylesheet" />
  <link href="{{asset('css/index.css')}}" rel="stylesheet"/>
          
</head>
<body>
  <!-- Page Content -->
  <div class="container">
      <div id="top_navigation">
        <!-- <div id="date_display"></div> -->
        <input id="add_task_btn" type="Submit" class="btn" value="Add Task"/>
        <input id="add_client_btn" type="Submit" class="btn" value="Add Client"/>
      </div>
      <table>
          <tr>
          	  <th id="task_name_title">
                <div>
	          		<p>Task</p>    
                </div>
              </th>
              <th id="client_name_title"> 
             	<div>
	              	<p>Client Name</p>
              	</div>
              </th>
              <th id="start_time_title">
              	<div>
		            <p>Start Time</p>
		        </div>
              </th>
              <th id="end_time_title">
              	<div>
	                <p>End Time</p>
	            </div>
	          </th>
              <th id="duration_title">
              	<div>
	              	<p>Duration</p>
	            </div>
              </th>
          </tr>
          @yield('content');
      </table>
  </div>
  <!-- /.container -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
