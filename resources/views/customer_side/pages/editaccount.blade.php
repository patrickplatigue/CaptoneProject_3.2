@extends('customer_side_main')
@section('title', 'Edit Account')
@section('css')
    <link href="_CSS/design.css" rel="stylesheet">
    <link href="_CSS/register1.css" rel="stylesheet">
@endsection
@section('content')
	
	<div class="container" style="margin-top: 80px;">
  
        <div class="row">

            <div class="col-md-3">
                <ul class="nav nav-pills nav-stacked admin-menu" >
                    <li class="active"><a href="" data-target-id="profile"><i class="glyphicon glyphicon-user"></i> Profile</a></li>
                    <li><a href="" data-target-id="orders"><i class="glyphicon glyphicon-log-out"></i> Orders</a></li>
                    <li><a href="" data-target-id="change-password"><i class="glyphicon glyphicon-lock"></i> Change Password</a></li>
                </ul>
            </div>

            <div class="col-md-9  admin-content" id="profile">
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Personal Information <a href="button" class="btn btn-default btn-sm col-md-offset-8" data-toggle="modal" data-target="#edit">Edit account</a></h3>
                    </div>
                    <div class="panel-body">
                        <div class="container">
                        	<div class="row">
                        		<div class="col-md-8">
						            <form role="form">
						                <h5 class="text-center fontx">My Personal Information</h5>
						                <hr class="colorgraph">
						                <div class="row">
						                	<div class="col-xs-12 col-sm-4 col-md-4">
						                    	<div class="form-group">
						                      		<input type="text" name="fname" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1">
						                    	</div>
						                  	</div>
						                  	<div class="col-xs-12 col-sm-4 col-md-4">
							                    <div class="form-group">
							                      	<input type="text" name="mname" id="middle_name" class="form-control input-lg" placeholder="Middle Name" tabindex="2">
							                    </div>
						                    </div>
						                    <div class="col-xs-12 col-sm-4 col-md-4">
						                    	 <div class="form-group">
						                      		<input type="text" name="lname" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="3">
						                    	</div>
						                    </div>
						                	<div class="col-xs-12 col-sm-6 col-md-6">
						                    	<div class="form-group">
						                      		<input type="contact" name="contact" id="contact" class="form-control input-lg" placeholder="Contact Number" tabindex="7">
						                    	</div>
						                    </div>
						                  	<div class="col-xs-12 col-sm-6 col-md-6">
						                    	<div class="form-group">
						                      		<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="6">
						                    	</div>
						                    </div>
						                    <div class="col-xs-12 col-sm-6 col-md-6">
						                    	<div class="form-group">
						                      		<input type="text" name="username" id="display_name" class="form-control input-lg" placeholder="Username" tabindex="4">
						                    	</div>
						                    </div>
						                  	<div class="col-xs-12 col-sm-6 col-md-6">
						                    	<div class="form-group">
						                      		<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="4">
						                    	</div>
						                    </div>
						                </div>
						            </form>
						        </div>
                        	</div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Billing Address</h3>
                    </div>
                    <div class="panel-body">
                        <div class="container">
                        	<div class="row">
                        		<div class="col-md-8">
						            <form role="form">
						                <h5 class="text-center fontx">Billing Address</h5>
						                <hr class="colorgraph">
						                <div class="row">
						                	<div class="col-xs-12 col-sm-6 col-md-6">
						                    	<div class="form-group">
						                      		<input type="text" name="addr_line" id="addr_line" class="form-control input-lg" placeholder="House No./Street Name" tabindex="2">
						                    	</div>
						                    </div>
						                  	<div class="col-xs-12 col-sm-6 col-md-6">
						                    	<div class="form-group">
						                      		<input type="text" name="brgy" id="brgy" class="form-control input-lg" placeholder="Baranggay" tabindex="3">
						                    	</div>
						                    </div>
						                    <div class="col-xs-12 col-sm-6 col-md-6">
						                    	<div class="form-group">
						                      		<input type="text" name="ProvinceField" id="ProvinceField" class="form-control input-lg" placeholder="Province" tabindex="2">
						                    	</div>
						                    </div>
						                  	<div class="col-xs-12 col-sm-6 col-md-6">
						                    	<div class="form-group">
						                      		<input type="text" name="TownField" id="TownField" class="form-control input-lg" placeholder="City" tabindex="2">
						                    	</div>
						                    </div>
						                </div>
						            </form>
						        </div>
                        	</div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Shipping Address</h3>
                    </div>
                    <div class="panel-body">
                        <div class="container">
                        	<div class="row">
                        		<div class="col-md-8">
						            <form role="form">
						                <h5 class="text-center fontx">Shipping Address</h5>
						                <hr class="colorgraph">
						                <div class="row">
						                	<div class="col-xs-12 col-sm-6 col-md-6">
						                    	<div class="form-group">
						                      		<input type="text" name="addr_line" id="addr_line" class="form-control input-lg" placeholder="House No./Street Name" tabindex="2">
						                    	</div>
						                    </div>
						                  	<div class="col-xs-12 col-sm-6 col-md-6">
						                    	<div class="form-group">
						                      		<input type="text" name="brgy" id="brgy" class="form-control input-lg" placeholder="Baranggay" tabindex="3">
						                    	</div>
						                    </div>
						                    <div class="col-xs-12 col-sm-6 col-md-6">
						                    	<div class="form-group">
						                      		<input type="text" name="ProvinceField" id="ProvinceField" class="form-control input-lg" placeholder="Province" tabindex="2">
						                    	</div>
						                    </div>
						                  	<div class="col-xs-12 col-sm-6 col-md-6">
						                    	<div class="form-group">
						                      		<input type="text" name="TownField" id="TownField" class="form-control input-lg" placeholder="City" tabindex="2">
						                    	</div>
						                    </div>
						                </div>
						            </form>
						        </div>
                        	</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-9  admin-content" id="orders">
            	<div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">List Of Orders</h3>
                    </div>
                    <div class="panel-body">
                        <h5 class="text-center">You do not have any orders</h5>
		                <a href="button" class="btn btn-primary btn-lg col-md-4 col-md-offset-4 text-center"> Start Shopping Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-9  admin-content" id="change-password">
                <div class="container">
                	<div class="row">
                		<div class="col-md-8">
				            <form role="form">
				                <h5 class="text-center fontx">Edit Password</h5>
				                <hr class="colorgraph">
				                <div class="row">
				                	<div class="col-xs-12 col-sm-6 col-md-6">
				                    	<div class="form-group">
				                      		<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Current Password" tabindex="4">
				                    	</div>
				                    </div>
				                </div>
				                <div class="row">
				                  	<div class="col-xs-12 col-sm-6 col-md-6">
				                    	<div class="form-group">
				                      		<input type="password" name="password" id="password" class="form-control input-lg" placeholder="New Password" tabindex="4">
				                    	</div>
				                    </div>
				                    <div class="col-xs-12 col-sm-6 col-md-6">
				                    	<div class="form-group">
				                      		<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Confirm New Password" tabindex="4">
				                    	</div>
				                    </div>
				                </div>
				            </form>
				        </div>
                	</div>
                </div>
            </div>
        </div>
	</div>


	<!-- MODAL -->
	<!-- Modal -->
	<div id="edit" class="modal fade" role="dialog">
	  	<div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Edit Account</h4>
	      </div>
	      <div class="modal-body">
	        <!-- CREATE -->

        <div class="container">
          <div class="row">
              <div class="col-md-6">
              <form role="form">
                <h4 class="text-center fontx">Edit Account</h4>
                <hr class="colorgraph">
                <div class="row">
                  <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="form-group">
                      <input type="text" name="fname" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1">
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="form-group">
                      <input type="text" name="mname" id="middle_name" class="form-control input-lg" placeholder="Middle Name" tabindex="2">
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="form-group">
                      <input type="text" name="lname" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="3">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <input type="contact" name="contact" id="contact" class="form-control input-lg" placeholder="Contact Number" tabindex="7">
                </div>

                <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="text" name="addr_line" id="addr_line" class="form-control input-lg" placeholder="House No./Street Name" tabindex="2">
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="text" name="brgy" id="brgy" class="form-control input-lg" placeholder="Baranggay" tabindex="3">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                      <select name="ProvinceField" id="ProvinceField" class="form-control input-lg" tabindex="5" required>
                        <option value = "-1" data-tag = "-1" disabled selected> Choose Province</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                      <select name="TownField" id="TownField" class="form-control input-lg" tabindex="6" required>
                          <option value = "-1" data-tag = "-1" disabled selected> Choose City</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Change Email Address" tabindex="6">
                </div>
                <div class="form-group">
                  <input type="text" name="username" id="display_name" class="form-control input-lg" placeholder="New Username" tabindex="4">
                </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="password" name="password" id="password" class="form-control input-lg" placeholder="New Password" tabindex="4">
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm New Password" tabindex="5">
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
   
        </div>
        <!-- CREATE END -->

	      </div>
	      <div class="modal-footer">
	        <a href="#" type="button" class="btn btn-success" data-dismiss="modal">Save</a>
	        <a type="button" class="btn btn-default" data-dismiss="modal">Close</a>
	      </div>
	    </div>

	  </div>
	</div>
	
@endsection

@section('script')

	<script type="text/javascript">
		
         $(document).ready(function()
      {
        var navItems = $('.admin-menu li > a');
        var navListItems = $('.admin-menu li');
        var allWells = $('.admin-content');
        var allWellsExceptFirst = $('.admin-content:not(:first)');
        allWellsExceptFirst.hide();
        navItems.click(function(e)
        {
            e.preventDefault();
            navListItems.removeClass('active');
            $(this).closest('li').addClass('active');
            allWells.hide();
            var target = $(this).attr('data-target-id');
            $('#' + target).show();
        });
        });
	</script>

@endsection