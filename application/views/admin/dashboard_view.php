<?php if($this->session->userdata('permission') != 'Administrator'&& $this->session->userdata('permission') != 'HR') {  echo $this->session->userdata('permission');}//redirect(base_url() . 'index.php/logout');} ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Dashboard - AMI</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!--basic styles-->

		<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="<?php echo base_url();?>assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!--page specific plugin styles-->

		<!--fonts-->

		<!--<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />-->

		<!--ace styles-->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery-ui-1.10.3.full.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/training/ace.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/admin/custom.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style-responsive.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style-skins.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/chosen.css" />


		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-ie.min.css" />
		<![endif]-->

		<!--inline styles if any-->
	</head>

	<body>
			<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a href="#" class="brand">
						<small>
							<i class="icon-group"></i>
							AMI - HRTMS Administration
						</small>
					</a><!--/.brand-->

					<ul class="nav ace-nav pull-right">
					<!--	
						
						<li class="grey">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-tasks"></i>
								<span class="badge badge-grey">4</span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
								<li class="nav-header">
									<i class="icon-ok"></i>
									Tasks to complete
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">Task 1</span>
											<span class="pull-right">65%</span>
										</div>

										<div class="progress progress-mini ">
											<div style="width:65%" class="bar"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">Task 2</span>
											<span class="pull-right">35%</span>
										</div>

										<div class="progress progress-mini progress-danger">
											<div style="width:35%" class="bar"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">Task 3</span>
											<span class="pull-right">15%</span>
										</div>

										<div class="progress progress-mini progress-warning">
											<div style="width:15%" class="bar"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">Task 4</span>
											<span class="pull-right">90%</span>
										</div>

										<div class="progress progress-mini progress-success progress-striped active">
											<div style="width:90%" class="bar"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										See tasks with details
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="purple">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-bell-alt icon-only icon-animated-bell"></i>
								<span class="badge badge-important">8</span>
							</a>

							<ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-closer">
								<li class="nav-header">
									<i class="icon-warning-sign"></i>
									Notifications
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-mini no-hover btn-pink icon-comment"></i>
												New Comments
											</span>
											<span class="pull-right badge badge-info">+12</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<i class="btn btn-mini btn-primary icon-user"></i>
										Error Occured
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-mini no-hover btn-success icon-shopping-cart"></i>
												New Members
											</span>
											<span class="pull-right badge badge-success">+8</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-mini no-hover btn-info icon-twitter"></i>
												Followers
											</span>
											<span class="pull-right badge badge-info">+11</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										See all notifications
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>
					-->
					
						<li class="green">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-envelope-alt icon-only icon-animated-vertical"></i>
								<span class="badge badge-success">5</span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
								<li class="nav-header">
									<i class="icon-envelope"></i>
									5 Messages
								</li>

								<li>
									<a href="#">
										<img src="<?php echo base_url();?>assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Alex:</span>
												Ciao sociis natoque penatibus et auctor ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>a moment ago</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="#">
										<img src="<?php echo base_url();?>assets/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Susan:</span>
												Vestibulum id ligula porta felis euismod ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>20 minutes ago</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="#">
										<img src="<?php echo base_url();?>assets/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Bob:</span>
												Nullam quis risus eget urna mollis ornare ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>3:15 pm</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="messenger">
										See all messages
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="light-blue user-profile">
							<a data-toggle="dropdown" href="#" class="user-menu dropdown-toggle">
								<img class="nav-user-photo" src="<?php echo base_url();?>assets/avatars/user.jpg" alt="User's Photo" />
								<span id="user_info">
									<small>Welcome,</small>
									<?php echo $this->session->userdata('username');?>
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer" id="user_menu">

								<li>
									<a href="#">
										<i class="icon-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="<?php echo base_url();?>logout">
										<i class="icon-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul><!--/.ace-nav-->
				</div><!--/.container-fluid-->
			</div><!--/.navbar-inner-->
		</div>

		<div class="container-fluid" id="main-container">
		
			<a id="menu-toggler" href="#">
				<span></span>
			</a>

			<div id="sidebar">
				<div id="sidebar-shortcuts">
					<div id="sidebar-shortcuts-large">
						<button class="btn btn-small btn-success">
							<i class="icon-signal"></i>
						</button>

						<button class="btn btn-small btn-info">
							<i class="icon-pencil"></i>
						</button>

						<button class="btn btn-small btn-warning">
							<i class="icon-group"></i>
						</button>

						<button class="btn btn-small btn-danger">
							<i class="icon-cogs"></i>
						</button>
					</div>

					<div id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div>

				<!--#sidebar-shortcuts-->

				<ul class="nav nav-list">
					
					<li class="active">
						<a href="<?php echo base_url();?>dashboard">
							<i class="icon-bar-chart"></i>
							<span>Control Panel</span>
						</a>
					</li>

					
					<li>
						<a href="#" class="dropdown-toggle">
							<i class="icon-shield"></i>
							<span>Registration</span>

							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">
						<?php if($this->session->userdata("permission") == "Administrator") {?>

							<li>
								<a href="<?php echo base_url();?>applicant/batch_control">
									<i class="icon-user"></i>
								   	<span>Batch Control</span>
								</a>
							</li>
						<?php }?>
							<li >
								<a href="<?php echo base_url();?>applicant">
									<i class="icon-archive"></i>
									<span>Applicants</span>
								</a>
							</li>

							<li>
								<a href="<?php echo base_url();?>applicant/accept">
									<i class="icon-user"></i>
								   	<span>Accept</span>
								</a>
							</li>
						</ul>
					</li>


					<li>
						<a href="<?php echo base_url();?>training">
							<i class="icon-book"></i>
							<span>Training</span>
						</a>
					</li>

					<li>
						<a href="<?php echo base_url();?>client">
							<i class="icon-building"></i>
							<span>Client Companies</span>
						</a>
					</li>

					<li>
						<a href="<?php echo base_url();?>deployment">
							<i class="icon-tag"></i>
							<span>Deployment Tagging</span>
						</a>
					</li>
 					<?php if($this->session->userdata("permission")=="Administrator") {?>
					<li>
						<a href="#" class="dropdown-toggle">
							<i class="icon-shield"></i>
							<span>Manage Accounts</span>

							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">
							<li  >
								<a href="<?php echo base_url();?>manage/hr">
									<i class="icon-user"></i>
									HR Department
								</a>
							</li>

							<li>
								<a href="<?php echo base_url();?>manage/training">
									<i class="icon-user"></i>
									Training Department
								</a>
							</li>
						</ul>
					</li>

					<li>
						<a href="#" class="dropdown-toggle">
							<i class="icon-cog"></i>
							<span>Administrative Tools</span>

							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">

							<li>
								<a href="<?php echo base_url();?>administrative/audit">
									<i class="icon-list"></i>
									Audit Logs
								</a>
							</li>

							<li>
								<a href="<?php echo base_url();?>administrative/backup">
									<i class="icon-download-alt"></i>
									Backup &amp; Maintenance
								</a>
							</li>
						</ul>
					</li>
					<?php }?>
					<!--<li>
						
						<a href="help">
							<i class="icon-question-sign"></i>
							<span>Help</span>
						</a>
					</li>-->

					<li>
						<a href="about">
							<i class="icon-info"></i>
							<span>About the Developers</span>
						</a>
					</li>
			
				</ul><!--/.nav-list-->

				<div id="sidebar-collapse">
					<i class="icon-double-angle-left"></i>
				</div>
			</div>


		<div id="main-content" class="clearfix">
				<div id="breadcrumbs">
					<ul class="breadcrumb">
						<li>
							<i class="icon-home"></i>
							<a href="<?php echo base_url();?>dashboard">Home</a>

							<span class="divider">
								<i class="icon-angle-right"></i>
							</span>
						</li>
						<li class="active">Control Panel</li>
					</ul><!--.breadcrumb-->

					<div id="nav-search">
						<form class="form-search">
							<span class="input-icon">
								<input type="text" placeholder="Search ..." class="input-small search-query" id="nav-search-input" autocomplete="off" />
								<i class="icon-search" id="nav-search-icon"></i>
							</span>
						</form>
					</div><!--#nav-search-->
				</div>

				<div id="page-content" class="clearfix">
					<div class="page-header position-relative">
						<h1>
							Control Panel
							<small>
								<i class="icon-double-angle-right"></i>
								Dashboard
							</small>
						</h1>
					</div><!--/.page-header-->

					<div class="row-fluid">
						<!--PAGE CONTENT STARTS HERE-->
							<div class="span12">

							<div class="alert alert-info">
								<h2>Reports</h2>
								
								<a target ="_blank" href="<?php echo base_url();?>Reports/list_trainee">List of Trainee</a><br>
								<a target ="_blank" href="<?php echo base_url();?>Reports/trainee_attendance">Trainee Attendance</a><br>
								<a target ="_blank" href="<?php echo base_url();?>Reports/gradesheet">Gradesheet</a><br>
								<a target ="_blank" href="<?php echo base_url();?>Reports/certificate">Certificate</a><br>
								<a target ="_blank" href="<?php echo base_url();?>Reports/certificate">Completed Modules</a>
										 
							</div>
							<div class="box-content">
								<div class="row-fluid">
									
								</div>								
							</div> 

						<!--PAGE CONTENT ENDS HERE-->
							</div>

						<!--/row-->

				</div>
				<?php if($this->session->userdata("permission")=="Administrator") {?>
				<div class="row-fluid">
					
					<div class="span12">
							<div class="widget-box">
								<div class="widget-header">
									<h5><i class="icon-info"></i> Manpower Request Status</h5>
								</div>

								<div class="widget-body">
									<div class="widget-main">
										
							          <table id="table-request" class="table table-striped table-bordered table-hover">

							          	<thead>
							          		<tr>
							          			<th>Request ID</th>
							          			<th>Company</th>
							          			<th>Status</th>
							          			<th>&nbsp;</th>
							          		</tr>
							          	</thead>
							          	<tbody>
							          		

							          		<?php if(isset($record)) : foreach($record as $row) : ?>
												<tr>
													<td><?php //$date = date("Y",strtotime($row->date_requested)); echo "AMI-REQ-".substr($date,-2)."".sprintf("%04d", $row->request_id);
														echo $row->request_id;
														?>
													</td>
													<td><?php echo $row->company;?></td>
								          			<td><?php if($row->confirmed == "0") {
								          				echo '<span class="label label-warning">Not Confirmed</span>';
								          				}
								          				else {
								          					echo '<span class="label label-success">Confirmed</span>';
								          				}
								          			?></td>
								          			<td>
								          				<button id="<?php echo $row->request_id?>" class="bview btn btn-info btn-mini">More info</button>
								          				<button id="<?php echo $row->request_id?>" class="bconfirm btn btn-success btn-mini">Edit Confirmation</button>
								          			</td>
												</tr>
											<?php endforeach;?>
											<?php endif; ?>
							          	</tbody>

							          </table>
									</div>
								</div>
							</div>
							<p>
							</p>
							

						</div>
				</div>
				<?php }?>
				<!--/#page-content-->

			</div><!--/#main-content-->
		</div><!--/.fluid-container#main-container-->


		<a href="#" id="btn-scroll-up" class="btn btn-small btn-inverse">
			<i class="icon-double-angle-up icon-only bigger-110"></i>
		</a>

		<!--basic scripts-->

		<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
		<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>

		<script type="text/javascript">
			//window.jQuery || document.write("<script src='<?php echo base_url();?>assets/js/jquery-1.9.1.min.js'>"+"<"+"/script>");
			window.jQuery || document.write("<script src='<?php echo base_url();?>assets/js/jquery.js'>"+"<"+"/script>");
		</script>
		<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

		<!--page specific plugin scripts-->

		<!--[if lte IE 8]>
		  <script src="<?php echo base_url();?>assets/js/excanvas.min.js"></script>
		<![endif]-->

		<script src="<?php echo base_url();?>assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery-ui-1.10.3.full.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.slimscroll.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.easy-pie-chart.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.sparkline.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/flot/jquery.flot.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/flot/jquery.flot.pie.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/flot/jquery.flot.resize.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/chosen.jquery.min.js"></script>

		<script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.dataTables.bootstrap.js"></script>
		<script src="<?php echo base_url();?>assets/js/bootbox.min.js"></script>

		<!--ace scripts-->

		<script src="<?php echo base_url();?>assets/js/style-elements.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/style.min.js"></script>

		<script src="<?php echo base_url();?>assets/js/jquery-templ.js" type="text/javascript"></script>

		<!--inline scripts related to this page-->

		<script type="text/javascript">	

			$("#getinfo").click(function(){
			         var dataString = $("#id").val();
			         $.ajax({ 
			           url: "<?php echo base_url();?>ajax/user",
			     	   async: false,
			           type: "POST",			          
			           data: "id="+dataString, 
			           dataType: 'json', 
			        
			 
			           success: function(output_string){
			               alert(dataString);
			               $('#result_table').html(output_string);
			           }
			 
			         });
			 
			         return false;  //stop the actual form post !important!
			});

		 	$('#acceptApp').click(function(){ 
			   	 $a = "aw";
			   	// $(this).closest('fieldset').find(':checkbox').prop('checked', this.checked);
			     alert($a);  //use .val() if you're getting the value
			   });

			  $(document).ready(function() {

			  	$('#table-request').dataTable({
					"aoColumns": [
						null,null,null,
						{ "bSortable": false }
					]
				});

				$(".bconfirm").on(ace.click_event, function() {
					var id = $(this).attr("id");
					bootbox.dialog("Edit Request Confirmation", [{
						"label" : "Confirm Request",
						"class" : "btn-small btn-success",
						"callback": function() {
							//Example.show("great success");
							$.ajax({
								url: "administrative/confirm_request",
								type: "post",
								data: {
									action: "confirm",
									id: id
								},
								success: function(e) {
									console.log(e);
									location.reload();
								}
							});
						}
						}, {
						"label" : "Decline Request",
						"class" : "btn-small btn-danger",
						"callback": function() {
							$.ajax({
								url: "administrative/confirm_request",
								type: "post",
								data: {
									action: "pogi",
									id: id
								},
								success: function(e) {
									console.log(e);
									location.reload();
								}
							});
						}
						}, {
						"label" : "Cancel",
						"class" : "btn-small"
						}]
					);
				});
				$.widget("ui.dialog", $.extend({}, $.ui.dialog.prototype, {
					_title: function(title) {
						var $title = this.options.title || '&nbsp;'
						if( ("title_html" in this.options) && this.options.title_html == true )
							title.html($title);
						else title.text($title);
					}
				}));
				$(".bview").on(ace.click_event, function(e) {
					e.preventDefault();
					var id = $(this).attr("id");

					$.ajax({
						url: "administrative/viewRequest",
						type: "post",
						data: {
							id: id
						},
						//dataType: 'json',
						success: function(e) {
							console.log(e);
							result(e);
							showDialog(id);
						}
					});
					
				});
			


			  });
		
			var showDialog = function(id){
				$( "#dialog" ).removeClass('hide').dialog({
					dialogClass: "no-close",
					resizable: false,
					modal: true,
					closeOnEscape: true,
					title: "<div class='widget-header'><h4 class='smaller'><i class='icon-exchange'></i> "+id+". Manpower Details.</h4></div>",
					title_html: true,
					width: 600,
					//maxWidth: 800,
					maxHeight: 500,
					buttons: [
						    {
						      text: "OK",
						      "class" : "btn btn-info btn-mini",
						      click: function() {
						        $( this ).dialog( "close" );
						      }
						    }
						  ]
					
				});

			}
			var result = function(e){
				var obj = $.parseJSON(e);
	                $.each(obj, function(){
	                	//var str = "<button class=\"btn btn-mini btn-info\" id="+this['id']+"><i class=\"icon-edit bigger-120\"></i></button><button class=\"btn btn-mini btn-danger\"> <i class=\"icon-trash bigger-120\"></i></button>";
					
					output_string = "<div> <table class=\"table table-striped\">";
					output_string += "<tr><td><h4>Manpower Info</h4></td><td></td></tr>";
					output_string += "<tr><td>Status</td><td>";
					if(this['confirmed']== 1){
						output_string += "<span class=\"label label-lg label-success arrowed-right\">Confirmed</span>";
					}
					else{

						output_string += "<span class=\"label label-lg label-warning arrowed-right\">Not Confirmed</span>";
					}
					output_string += "</td>";
					output_string +="<tr><td>Company :</td><td>"+ this['company']+"</td></tr>";
					output_string += "<tr><td>Manpower :</td><td>"+ this['no_of_manpower']+"</td></tr>";
					output_string += "<tr><td>From :</td><td>"+ this['date_requested']+"</td></tr>";
					output_string += "<tr><td>To :</td><td>"+ this['is_to']+"</td></tr>";
					output_string += "<tr><td>Type :</td><td>";
					if(this['emp_type']== 1){
						output_string += "Contractual";
					}
					if(this['emp_type']== 2){

						output_string += "Regular";
					}
					if(this['emp_type']== 3){

						output_string += "Probation";
					}
					output_string += "</td></tr>";
					output_string += "<tr><td>Department :</td><td>"+ this['emp_department']+"</td></tr>";
					output_string += "<tr><td><h4>Applicant Requirements</h4></td><td></td></tr>";
					output_string += "<tr><td>Gender :</td><td>";
					if(this['emp_gender']== 1){
						output_string += "Male Only";
					}
					if(this['emp_gender']== 2){
						output_string += "Female Only";
					}
					if(this['emp_gender']== 3){
						output_string += "Male / Female";
					}
					output_string += "</td></tr>"
					output_string += "<tr><td>Remarks :</td><td>";
				   	var str = this['remarks'];
			        var str_array = str.split(',');

					for(var i = 0; i < str_array.length; i++)
					{
					   // Trim the excess whitespace.
					   str_array[i] = str_array[i].replace(/^\s*/, "").replace(/\s*$/, "");
					   // Add additional code here, such as:
					   	output_string += "<ul>"; 
					 	output_string += "<li>" +str_array[i] +  "</li>";
					 	output_string += "</ul>";
					}
					output_string += "</td></tr>";
					output_string += "<tr><td>Documents :</td><td>";
				   	var str = this['emp_reqdocuments'];
			        var str_array = str.split(',');

					for(var i = 0; i < str_array.length; i++)
					{
					   // Trim the excess whitespace.
					   str_array[i] = str_array[i].replace(/^\s*/, "").replace(/\s*$/, "");
					   // Add additional code here, such as:
					   	output_string += "<ul>"; 
					 	output_string += "<li>" +str_array[i] +  "</li>";
					 	output_string += "</ul>";
					}

					output_string += "</td></tr></table></div>";
	                });
					$('#view').html(output_string);

			}				 
		</script>

	</body>
	<div id="dialog">
	   <div id="view"></div>
	</div>
</html>
