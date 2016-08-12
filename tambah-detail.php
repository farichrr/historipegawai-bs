<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Material Admin - Form advanced</title>

		<!-- BEGIN META -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="your,keywords">
		<meta name="description" content="Short explanation about this website">
		<!-- END META -->

		<!-- BEGIN STYLESHEETS -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/bootstrap.css?1422792965" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/materialadmin.css?1425466319" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/font-awesome.min.css?1422529194" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/material-design-iconic-font.min.css?1421434286" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/select2/select2.css?1424887856" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/multi-select/multi-select.css?1424887857" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/bootstrap-datepicker/datepicker3.css?1424887858" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/jquery-ui/jquery-ui-theme.css?1423393666" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/bootstrap-colorpicker/bootstrap-colorpicker.css?1424887860" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/bootstrap-tagsinput/bootstrap-tagsinput.css?1424887862" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/typeahead/typeahead.css?1424887863" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/dropzone/dropzone-theme.css?1424887864" />
		<!-- END STYLESHEETS -->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="../../assets/js/libs/utils/html5shiv.js?1403934957"></script>
		<script type="text/javascript" src="../../assets/js/libs/utils/respond.min.js?1403934956"></script>
		<![endif]-->
	</head>
	<body class="menubar-hoverable header-fixed ">

		<!-- BEGIN HEADER-->
		<header id="header" >
			<div class="headerbar">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="headerbar-left">
					<ul class="header-nav header-nav-options">
						<li class="header-nav-brand" >
							<div class="brand-holder">
								<a href="../../html/dashboards/dashboard.html">
									<span class="text-lg text-bold text-primary">MATERIAL ADMIN</span>
								</a>
							</div>
						</li>
						<li>
							<a class="btn btn-icon-toggle menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
								<i class="fa fa-bars"></i>
							</a>
						</li>
					</ul>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="headerbar-right">
					<ul class="header-nav header-nav-options">
						<li>
							<!-- Search form -->
							<form class="navbar-search" role="search">
								<div class="form-group">
									<input type="text" class="form-control" name="headerSearch" placeholder="Enter your keyword">
								</div>
								<button type="submit" class="btn btn-icon-toggle ink-reaction"><i class="fa fa-search"></i></button>
							</form>
						</li>
						<li class="dropdown hidden-xs">
							<a href="javascript:void(0);" class="btn btn-icon-toggle btn-default" data-toggle="dropdown">
								<i class="fa fa-bell"></i><sup class="badge style-danger">4</sup>
							</a>
							<ul class="dropdown-menu animation-expand">
								<li class="dropdown-header">Today's messages</li>
								<li>
									<a class="alert alert-callout alert-warning" href="javascript:void(0);">
										<img class="pull-right img-circle dropdown-avatar" src="../../assets/img/avatar2.jpg?1404026449" alt="" />
										<strong>Alex Anistor</strong><br/>
										<small>Testing functionality...</small>
									</a>
								</li>
								<li>
									<a class="alert alert-callout alert-info" href="javascript:void(0);">
										<img class="pull-right img-circle dropdown-avatar" src="../../assets/img/avatar3.jpg?1404026799" alt="" />
										<strong>Alicia Adell</strong><br/>
										<small>Reviewing last changes...</small>
									</a>
								</li>
								<li class="dropdown-header">Options</li>
								<li><a href="../../html/pages/login.html">View all messages <span class="pull-right"><i class="fa fa-arrow-right"></i></span></a></li>
								<li><a href="../../html/pages/login.html">Mark as read <span class="pull-right"><i class="fa fa-arrow-right"></i></span></a></li>
							</ul><!--end .dropdown-menu -->
						</li><!--end .dropdown -->
						<li class="dropdown hidden-xs">
							<a href="javascript:void(0);" class="btn btn-icon-toggle btn-default" data-toggle="dropdown">
								<i class="fa fa-area-chart"></i>
							</a>
							<ul class="dropdown-menu animation-expand">
								<li class="dropdown-header">Server load</li>
								<li class="dropdown-progress">
									<a href="javascript:void(0);">
										<div class="dropdown-label">
											<span class="text-light">Server load <strong>Today</strong></span>
											<strong class="pull-right">93%</strong>
										</div>
										<div class="progress"><div class="progress-bar progress-bar-danger" style="width: 93%"></div></div>
									</a>
								</li><!--end .dropdown-progress -->
								<li class="dropdown-progress">
									<a href="javascript:void(0);">
										<div class="dropdown-label">
											<span class="text-light">Server load <strong>Yesterday</strong></span>
											<strong class="pull-right">30%</strong>
										</div>
										<div class="progress"><div class="progress-bar progress-bar-success" style="width: 30%"></div></div>
									</a>
								</li><!--end .dropdown-progress -->
								<li class="dropdown-progress">
									<a href="javascript:void(0);">
										<div class="dropdown-label">
											<span class="text-light">Server load <strong>Lastweek</strong></span>
											<strong class="pull-right">74%</strong>
										</div>
										<div class="progress"><div class="progress-bar progress-bar-warning" style="width: 74%"></div></div>
									</a>
								</li><!--end .dropdown-progress -->
							</ul><!--end .dropdown-menu -->
						</li><!--end .dropdown -->
					</ul><!--end .header-nav-options -->
					<ul class="header-nav header-nav-profile">
						<li class="dropdown">
							<a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">
								<img src="../../assets/img/avatar1.jpg?1403934956" alt="" />
								<span class="profile-info">
									Daniel Johnson
									<small>Administrator</small>
								</span>
							</a>
							<ul class="dropdown-menu animation-dock">
								<li class="dropdown-header">Config</li>
								<li><a href="../../html/pages/profile.html">My profile</a></li>
								<li><a href="../../html/pages/blog/post.html">My blog <span class="badge style-danger pull-right">16</span></a></li>
								<li><a href="../../html/pages/calendar.html">My appointments</a></li>
								<li class="divider"></li>
								<li><a href="../../html/pages/locked.html"><i class="fa fa-fw fa-lock"></i> Lock</a></li>
								<li><a href="../../html/pages/login.html"><i class="fa fa-fw fa-power-off text-danger"></i> Logout</a></li>
							</ul><!--end .dropdown-menu -->
						</li><!--end .dropdown -->
					</ul><!--end .header-nav-profile -->
					<ul class="header-nav header-nav-toggle">
						<li>
							<a class="btn btn-icon-toggle btn-default" href="#offcanvas-search" data-toggle="offcanvas" data-backdrop="false">
								<i class="fa fa-ellipsis-v"></i>
							</a>
						</li>
					</ul><!--end .header-nav-toggle -->
				</div><!--end #header-navbar-collapse -->
			</div>
		</header>
		<!-- END HEADER-->

		<!-- BEGIN BASE-->
		<div id="base">

			<!-- BEGIN OFFCANVAS LEFT -->
			<div class="offcanvas">
			</div><!--end .offcanvas-->
			<!-- END OFFCANVAS LEFT -->

			<!-- BEGIN CONTENT-->
			<div id="content">
				<section>
					<div class="section-header">
						<ol class="breadcrumb">
							<li class="active">Form advanced</li>
						</ol>
					</div>
					<div class="section-body contain-lg">

						<!-- BEGIN INTRO -->
						<div class="row">
							<div class="col-lg-12">
								<h1 class="text-primary">Advanced form components</h1>
							</div><!--end .col -->
							<div class="col-lg-8">
								<article class="margin-bottom-xxl">
									<p class="lead">
										When you are developing an Admin Template, it's always handy to have more than the standard toolset the browser gives you.
										That's why Material Admin provides advanced components styled to fit well inside the Material Design philosophy.
									</p>
								</article>
							</div><!--end .col -->
						</div><!--end .row -->
						<!-- END INTRO -->

						<!-- BEGIN AUTOCOMPLETE -->
						<div class="row">
							<div class="col-lg-12">
								<h4>Autocomplete</h4>
							</div><!--end .col -->
							<div class="col-lg-3 col-md-4">
								<article class="margin-bottom-xxl">
									<p>
										Autocomplete inputs give you search options while typing.
										You can use either the autocomplete from Typeahead or jQuery, whichever you prefer.
									</p>
								</article>
							</div><!--end .col -->
							<div class="col-lg-offset-1 col-md-8">
								<div class="card">
									<div class="card-body">
										<form class="form">
											<div class="form-group">
												<input type="text" id="autocomplete1" class="form-control" data-source="../../html/forms/data/countries.json.html" placeholder="Countries">
												<label>Autocomplete (Typeahead)</label>
											</div>
											<div class="form-group">
												<input type="text" id="autocomplete2" class="form-control" data-source="data/countries.json" placeholder="Countries">
												<label>Autocomplete (jQuery)</label>
											</div>
										</form>
									</div><!--end .card-body -->
								</div><!--end .card -->
								<em class="text-caption">Autocomplete from jQuery and Typeahead</em>
							</div><!--end .col -->
						</div><!--end .row -->
						<!-- END AUTOCOMPLETE -->

						<!-- BEGIN COLORPICKER -->
						<div class="row">
							<div class="col-lg-12">
								<h4>Colorpickers</h4>
							</div><!--end .col -->
							<div class="col-lg-3 col-md-4">
								<article class="margin-bottom-xxl">
									<p>
										When you need a certain color, colorpickers can be useful.
										Just pick a color, and your input recieves the correct hex or rgb(a) color.
									</p>
								</article>
							</div><!--end .col -->
							<div class="col-lg-offset-1 col-md-8">
								<div class="card">
									<div class="card-body">
										<form class="form">
											<div class="form-group">
												<input type="text"  id="cp1" class="form-control bscp" value="#8fff00">
												<label>Colorpicker</label>
											</div><!--end .form-group -->
											<div class="form-group">
												<div id="cp2" class="input-group colorpicker-component" data-color="rgb(10, 168, 158)" data-color-format="rgba">
													<div class="input-group-content">
														<input type="text" value="rgb(10, 168, 158)" readonly="" class="form-control">
														<label>Colorpicker</label>
													</div>
													<div class="input-group-addon"><i style="background-color: rgb(10, 168, 158);"></i></div>
												</div>
											</div><!--end .form-group -->
										</form>
									</div><!--end .card-body -->
								</div><!--end .card -->
								<em class="text-caption">Colorpickers</em>
								<div class="card">
									<div class="card-body style-primary">
										<form class="form form-inverse">
											<div class="form-group">
												<div>
													<input type="text" id="cp3" class="form-control" value="#c8e0df">
													<label>Colorpicker</label>
												</div>
											</div><!--end .form-group -->
										</form>
									</div><!--end .card-body -->
								</div><!--end .card -->
								<em class="text-caption">Colorpickers</em>
							</div><!--end .col -->
						</div><!--end .row -->
						<!-- END COLORPICKER -->

						<!-- BEGIN DATEPICKERS -->
						<div class="row">
							<div class="col-lg-12">
								<h4>Datepickers</h4>
							</div><!--end .col -->
							<div class="col-lg-3 col-md-4">
								<article class="margin-bottom-xxl">
									<p>
										Datepickers provide a simple way to select a single date.
										Using these in your template helps ensure that a user's specification of a date input is valid and formatted correctly.
										Datepickers can be used as a dropdown on an input field but also inline on a form.
									</p>
								</article>
							</div><!--end .col -->
							<div class="col-lg-offset-1 col-md-8">
								<div class="card">
									<div class="card-body">
										<form class="form">
											<div class="form-group control-width-normal">
												<div class="input-group date" id="demo-date">
													<div class="input-group-content">
														<input type="text" class="form-control">
														<label>Datepicker</label>
													</div>
													<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
												</div>
											</div><!--end .form-group -->
											<div class="form-group control-width-normal">
												<div class="input-group date" id="demo-date-month">
													<div class="input-group-content">
														<input type="text" class="form-control">
														<label>Monthpicker</label>
													</div>
													<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
												</div>
											</div><!--end .form-group -->
											<div class="form-group control-width-normal">
												<div class="input-group date" id="demo-date-format">
													<div class="input-group-content">
														<input type="text" class="form-control">
														<label>Datepicker</label>
														<p class="help-block">yyyy/mm/dd</p>
													</div>
													<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
												</div>
											</div><!--end .form-group -->
										</form>
									</div><!--end .card-body -->
								</div><!--end .card -->
								<em class="text-caption">Datepickers</em>
								<div class="card">
									<div class="card-body">
										<form class="form">
											<div class="form-group">
												<div class="input-daterange input-group" id="demo-date-range">
													<div class="input-group-content">
														<input type="text" class="form-control" name="start" />
														<label>Date range</label>
													</div>
													<span class="input-group-addon">to</span>
													<div class="input-group-content">
														<input type="text" class="form-control" name="end" />
														<div class="form-control-line"></div>
													</div>
												</div>
											</div>
										</form>
									</div><!--end .card-body -->
								</div><!--end .card -->
								<em class="text-caption">Range datepicker</em>
								<div class="card">
									<div class="card-body">
										<form class="form">
											<div id="demo-date-inline"></div>
										</form>
									</div><!--end .card-body -->
								</div><!--end .card -->
								<em class="text-caption">Inline datepicker</em>
							</div><!--end .col -->
						</div><!--end .row -->
						<!-- END DATEPICKERS -->

						<!-- BEGIN FILE UPLOAD -->
						<div class="row">
							<div class="col-lg-12">
								<h4>File upload</h4>
							</div><!--end .col -->
							<div class="col-lg-3 col-md-4">
								<article class="margin-bottom-xxl">
									<p>
										This file uploader (Dropzone) can handle multiple files, gives previews of images, has drag and drop support and is easy to implement.
									</p>
								</article>
							</div><!--end .col -->
							<div class="col-lg-offset-1 col-md-8">
								<div class="card">
									<div class="card-head style-primary">
										<header>Drag and drop uploader</header>
									</div>
									<div class="card-body no-padding">
										<form action="../../html/forms/advanced.html" class="dropzone" id="my-awesome-dropzone">
											<div class="dz-message">
												<h3>Drop files here or click to upload.</h3>
												<em>(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</em>
											</div>
										</form>
									</div><!--end .card-body -->
								</div><!--end .card -->
								<em class="text-caption">Dropzone file upload</em>
							</div><!--end .col -->
						</div><!--end .row -->
						<!-- END FILE UPLOAD -->

						<!-- BEGIN MASKED INPUTS -->
						<div class="row">
							<div class="col-lg-12">
								<h4>Masked inputs</h4>
							</div><!--end .col -->
							<div class="col-lg-3 col-md-4">
								<article class="margin-bottom-xxl">
									<p>
										Storing properly formatted data is important.
										Masked inputs can help to accomplish this.
									</p>
								</article>
							</div><!--end .col -->
							<div class="col-lg-offset-1 col-md-8">
								<div class="card">
									<div class="card-body">
										<form class="form">
											<div class="form-group">
												<input type="text" class="form-control" data-inputmask="'alias': 'date'">
												<label>Date mask</label>
											</div>
											<div class="form-group">
												<input type="text" class="form-control" data-inputmask="'mask': 'y/m/d'">
												<label>Date mask alt</label>
											</div>
											<div class="form-group">
												<input type="text" class="form-control time-mask">
												<label>Time masks</label>
												<p class="help-block">Time: 24h</p>
											</div>
											<div class="form-group">
												<input type="text" class="form-control time12-mask">
												<label>Time masks alt</label>
												<p class="help-block">Time: am/pm</p>
											</div>
											<div class="form-group">
												<input type="text" class="form-control" data-inputmask="'mask': '(999) 999-9999'">
												<label>Phone mask</label>
												<p class="help-block">US Telephone: (999) 999-9999</p>
											</div>
											<div class="form-group">
												<input type="text" class="form-control dollar-mask">
												<label>Dollar mask</label>
											</div>
											<div class="form-group">
												<input type="text" class="form-control euro-mask">
												<label>Euro masks</label>
											</div>
										</form>
									</div><!--end .card-body -->
								</div><!--end .card -->
								<em class="text-caption">Masked inputs</em>
							</div><!--end .col -->
						</div><!--end .row -->
						<!-- END MASKED INPUTS -->

						<!-- BEGIN MULTI-SELECT -->
						<div class="row">
							<div class="col-lg-12">
								<h4>Multi-select</h4>
							</div><!--end .col -->
							<div class="col-lg-3 col-md-4">
								<article class="margin-bottom-xxl">
									<p>
										Use this multi-select to display the user multiple options.
									</p>
								</article>
							</div><!--end .col -->
							<div class="col-lg-offset-1 col-md-8">
								<div class="card">
									<div class="card-body">
										<form class="form">
											<select id="optgroup" multiple="multiple">
												<optgroup label="Alaskan/Hawaiian Time Zone">
													<option value="AK">Alaska</option>
													<option value="HI">Hawaii</option>
												</optgroup>
												<optgroup label="Pacific Time Zone">
													<option value="CA">California</option>
													<option value="NV">Nevada</option>
													<option value="OR">Oregon</option>
													<option value="WA">Washington</option>
												</optgroup>
												<optgroup label="Mountain Time Zone">
													<option value="AZ">Arizona</option>
													<option value="CO">Colorado</option>
													<option value="ID">Idaho</option>
													<option value="MT">Montana</option><option value="NE">Nebraska</option>
													<option value="NM">New Mexico</option>
													<option value="ND">North Dakota</option>
													<option value="UT">Utah</option>
													<option value="WY">Wyoming</option>
												</optgroup>
												<optgroup label="Central Time Zone">
													<option value="AL">Alabama</option>
													<option value="AR">Arkansas</option>
													<option value="IL">Illinois</option>
													<option value="IA">Iowa</option>
													<option value="KS">Kansas</option>
													<option value="KY">Kentucky</option>
													<option value="LA">Louisiana</option>
													<option value="MN">Minnesota</option>
													<option value="MS">Mississippi</option>
													<option value="MO">Missouri</option>
													<option value="OK">Oklahoma</option>
													<option value="SD">South Dakota</option>
													<option value="TX">Texas</option>
													<option value="TN">Tennessee</option>
													<option value="WI">Wisconsin</option>
												</optgroup>
												<optgroup label="Eastern Time Zone">
													<option value="CT">Connecticut</option>
													<option value="DE">Delaware</option>
													<option value="FL">Florida</option>
													<option value="GA">Georgia</option>
													<option value="IN">Indiana</option>
													<option value="ME">Maine</option>
													<option value="MD">Maryland</option>
													<option value="MA">Massachusetts</option>
													<option value="MI">Michigan</option>
													<option value="NH">New Hampshire</option><option value="NJ">New Jersey</option>
													<option value="NY">New York</option>
													<option value="NC">North Carolina</option>
													<option value="OH">Ohio</option>
													<option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option>
													<option value="VT">Vermont</option><option value="VA">Virginia</option>
													<option value="WV">West Virginia</option>
												</optgroup>
											</select>
										</form>
									</div><!--end .card-body -->
								</div><!--end .card -->
								<em class="text-caption">Multi-select</em>
							</div><!--end .col -->
						</div><!--end .row -->
						<!-- END MULTI-SELECT -->

						<!-- BEGIN SELECT2 -->
						<div class="row">
							<div class="col-lg-12">
								<h4>Select2 (Advanced select)</h4>
							</div><!--end .col -->
							<div class="col-lg-3 col-md-4">
								<article class="margin-bottom-xxl">
									<ul class="list-divided">
										<li>If you want the option filtering in a <code>&lt;select&gt;</code>, you only have to add the javascript code <code>$('select').select2();</code>.</li>
										<li>Select2 also supports multi-value select boxes. Just add the <code>multiple</code> attribute and Select2 automatically picks up on this.</li>
									</ul>
								</article>
							</div><!--end .col -->
							<div class="col-lg-offset-1 col-md-8">
								<div class="card">
									<div class="card-body">
										<form class="form">
											<div class="form-group">
												<select class="form-control select2-list" data-placeholder="Select an item">
													<optgroup label="Alaskan/Hawaiian Time Zone">
														<option value="AK">Alaska</option>
														<option value="HI">Hawaii</option>
													</optgroup>
													<optgroup label="Pacific Time Zone">
														<option value="CA">California</option>
														<option value="NV">Nevada</option>
														<option value="OR">Oregon</option>
														<option value="WA">Washington</option>
													</optgroup>
													<optgroup label="Mountain Time Zone">
														<option value="AZ">Arizona</option>
														<option value="CO">Colorado</option>
														<option value="ID">Idaho</option>
														<option value="MT">Montana</option><option value="NE">Nebraska</option>
														<option value="NM">New Mexico</option>
														<option value="ND">North Dakota</option>
														<option value="UT">Utah</option>
														<option value="WY">Wyoming</option>
													</optgroup>
													<optgroup label="Central Time Zone">
														<option value="AL">Alabama</option>
														<option value="AR">Arkansas</option>
														<option value="IL">Illinois</option>
														<option value="IA">Iowa</option>
														<option value="KS">Kansas</option>
														<option value="KY">Kentucky</option>
														<option value="LA">Louisiana</option>
														<option value="MN">Minnesota</option>
														<option value="MS">Mississippi</option>
														<option value="MO">Missouri</option>
														<option value="OK">Oklahoma</option>
														<option value="SD">South Dakota</option>
														<option value="TX">Texas</option>
														<option value="TN">Tennessee</option>
														<option value="WI">Wisconsin</option>
													</optgroup>
													<optgroup label="Eastern Time Zone">
														<option value="CT">Connecticut</option>
														<option value="DE">Delaware</option>
														<option value="FL">Florida</option>
														<option value="GA">Georgia</option>
														<option value="IN">Indiana</option>
														<option value="ME">Maine</option>
														<option value="MD">Maryland</option>
														<option value="MA">Massachusetts</option>
														<option value="MI">Michigan</option>
														<option value="NH">New Hampshire</option><option value="NJ">New Jersey</option>
														<option value="NY">New York</option>
														<option value="NC">North Carolina</option>
														<option value="OH">Ohio</option>
														<option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option>
														<option value="VT">Vermont</option><option value="VA">Virginia</option>
														<option value="WV">West Virginia</option>
													</optgroup>
												</select>
												<label>Select with option filtering</label>
											</div>
											<div class="form-group">
												<select class="form-control select2-list" data-placeholder="Select an item" multiple>
													<optgroup label="Alaskan/Hawaiian Time Zone">
														<option value="AK">Alaska</option>
														<option value="HI">Hawaii</option>
													</optgroup>
													<optgroup label="Pacific Time Zone">
														<option value="CA">California</option>
														<option value="NV">Nevada</option>
														<option value="OR">Oregon</option>
														<option value="WA">Washington</option>
													</optgroup>
													<optgroup label="Mountain Time Zone">
														<option value="AZ">Arizona</option>
														<option value="CO">Colorado</option>
														<option value="ID">Idaho</option>
														<option value="MT">Montana</option><option value="NE">Nebraska</option>
														<option value="NM">New Mexico</option>
														<option value="ND">North Dakota</option>
														<option value="UT">Utah</option>
														<option value="WY">Wyoming</option>
													</optgroup>
													<optgroup label="Central Time Zone">
														<option value="AL">Alabama</option>
														<option value="AR">Arkansas</option>
														<option value="IL">Illinois</option>
														<option value="IA">Iowa</option>
														<option value="KS">Kansas</option>
														<option value="KY">Kentucky</option>
														<option value="LA">Louisiana</option>
														<option value="MN">Minnesota</option>
														<option value="MS">Mississippi</option>
														<option value="MO">Missouri</option>
														<option value="OK">Oklahoma</option>
														<option value="SD">South Dakota</option>
														<option value="TX">Texas</option>
														<option value="TN">Tennessee</option>
														<option value="WI">Wisconsin</option>
													</optgroup>
													<optgroup label="Eastern Time Zone">
														<option value="CT">Connecticut</option>
														<option value="DE">Delaware</option>
														<option value="FL">Florida</option>
														<option value="GA">Georgia</option>
														<option value="IN">Indiana</option>
														<option value="ME">Maine</option>
														<option value="MD">Maryland</option>
														<option value="MA">Massachusetts</option>
														<option value="MI">Michigan</option>
														<option value="NH">New Hampshire</option><option value="NJ">New Jersey</option>
														<option value="NY">New York</option>
														<option value="NC">North Carolina</option>
														<option value="OH">Ohio</option>
														<option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option>
														<option value="VT">Vermont</option><option value="VA">Virginia</option>
														<option value="WV">West Virginia</option>
													</optgroup>
												</select>
												<label>Multi-Value select</label>
											</div>
										</form>
									</div><!--end .card-body -->
								</div><!--end .card -->
								<em class="text-caption">Select2</em>
							</div><!--end .col -->
						</div><!--end .row -->
						<!-- END SELECT2 -->

						<!-- BEGIN SLIDERS -->
						<div class="row">
							<div class="col-lg-12">
								<h4>Sliders</h4>
							</div><!--end .col -->
							<div class="col-lg-3 col-md-4">
								<article class="margin-bottom-xxl">
									<p>
										Sliders let users select a value from a continuous or discrete range of values by moving the slider thumb.
										Sliders can have the selected value on the side.
									</p>
								</article>
							</div><!--end .col -->
							<div class="col-lg-offset-1 col-md-8">
								<div class="card">
									<div class="card-body">
										<form class="form">
											<div class="form-group">
												<div class="input-group">
													<div class="input-group-content form-control-static">
														<div id="slider-step"></div>
													</div>
													<div class="input-group-addon" id="step-value">100</div>
												</div>
											</div><!--end .form-group -->
											<div class="form-group">
												<div class="input-group">
													<div class="input-group-content form-control-static">
														<div id="slider"></div>
													</div>
													<div class="input-group-addon" id="slider-value">50</div>
												</div>
											</div><!--end .form-group -->
											<div class="form-group">
												<div class="input-group">
													<div class="input-group-addon" id="range-value1">25</div>
													<div class="input-group-content form-control-static">
														<div id="slider-range"></div>
													</div>
													<div class="input-group-addon" id="range-value2">75</div>
												</div>
											</div><!--end .form-group -->
										</form>
									</div><!--end .card-body -->
								</div><!--end .card -->
								<em class="text-caption">Vertical sliders</em>
								<div class="card">
									<div class="card-body">
										<form class="form">
											<div class="form-group">
												<div class="col-lg-12">
													<div id="eq">
														<span>88</span>
														<span>77</span>
														<span>55</span>
														<span>33</span>
														<span>40</span>
														<span>45</span>
														<span>70</span>
													</div>
												</div>
											</div><!--end .form-group -->
										</form>
									</div><!--end .card-body -->
								</div><!--end .card -->
								<em class="text-caption">Horizontal sliders</em>
							</div><!--end .col -->
						</div><!--end .row -->
						<!-- END SLIDERS -->

						<!-- BEGIN SPINNERS -->
						<div class="row">
							<div class="col-lg-12">
								<h4>Spinners</h4>
							</div><!--end .col -->
							<div class="col-lg-3 col-md-4">
								<article class="margin-bottom-xxl">
									<p>
										Spinners are similar to combo boxes and lists in that they let the user choose from a range of values.
										Like editable combo boxes, spinners allow the user to type in a value.
										They are often used when the set of possible values is extremely large.
									</p>
								</article>
							</div><!--end .col -->
							<div class="col-lg-offset-1 col-md-8">
								<div class="card">
									<div class="card-body">
										<form class="form">
											<div class="form-group">
												<input type="text" class="form-control" id="spinner" value="19"/>
												<label>Age</label>
												<p class="help-block">Must be over 16</p>
											</div>
											<div class="form-group">
												<input type="text" class="form-control" id="spinner-decimal" value="0.96"/>
												<label>Opacity</label>
											</div>
										</form>
									</div><!--end .card-body -->
								</div><!--end .card -->
								<em class="text-caption">Spinners</em>
							</div><!--end .col -->
						</div><!--end .row -->
						<!-- END SPINNERS -->

						<!-- BEGIN TAGS INPUT -->
						<div class="row">
							<div class="col-lg-12">
								<h4>Tags input</h4>
							</div><!--end .col -->
							<div class="col-lg-3 col-md-4">
								<article class="margin-bottom-xxl">
									<ul class="list-divided">
										<li>Just add <code>data-role="tagsinput"</code> to your input field to automatically change it to a tags input field.</li>
										<li>Use a <code>&lt;select multiple/&gt;</code> as your input element for a tags input, to gain true multivalue support. Instead of a comma separated string, the values will be set in an array.</li>
									</ul>
								</article>
							</div><!--end .col -->
							<div class="col-lg-offset-1 col-md-8">
								<div class="card">
									<div class="card-body">
										<form class="form">
											<div class="form-group">
												<input type="text" value="Amsterdam,Washington,Sydney,Beijing,Cairo" data-role="tagsinput" />
												<label>Tagsinput for input</label>
											</div><!--end .form-group -->
											<div class="form-group">
												<select multiple data-role="tagsinput">
													<option value="Amsterdam">Amsterdam</option>
													<option value="Washington">Washington</option>
													<option value="Sydney">Sydney</option>
													<option value="Beijing">Beijing</option>
													<option value="Cairo">Cairo</option>
												</select>
												<label>Tagsinput for select</label>
											</div><!--end .form-group -->
										</form>
									</div><!--end .card-body -->
								</div><!--end .card -->
								<em class="text-caption">Tags input for input and select</em>
							</div><!--end .col -->
						</div><!--end .row -->
						<!-- END TAGS INPUT -->

					</div><!--end .section-body -->
				</section>
			</div><!--end #content-->
			<!-- END CONTENT -->

			<!-- BEGIN MENUBAR-->
			<div id="menubar" class="menubar-inverse ">
				<div class="menubar-fixed-panel">
					<div>
						<a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
							<i class="fa fa-bars"></i>
						</a>
					</div>
					<div class="expanded">
						<a href="../../html/dashboards/dashboard.html">
							<span class="text-lg text-bold text-primary ">MATERIAL&nbsp;ADMIN</span>
						</a>
					</div>
				</div>
				<div class="menubar-scroll-panel">

					<!-- BEGIN MAIN MENU -->
					<ul id="main-menu" class="gui-controls">

						<!-- BEGIN DASHBOARD -->
						<li>
							<a href="../../html/dashboards/dashboard.html" >
								<div class="gui-icon"><i class="md md-home"></i></div>
								<span class="title">Dashboard</span>
							</a>
						</li><!--end /menu-li -->
						<!-- END DASHBOARD -->

						<!-- BEGIN EMAIL -->
						<li class="gui-folder">
							<a>
								<div class="gui-icon"><i class="md md-email"></i></div>
								<span class="title">Email</span>
							</a>
							<!--start submenu -->
							<ul>
								<li><a href="../../html/mail/inbox.html" ><span class="title">Inbox</span></a></li>
								<li><a href="../../html/mail/compose.html" ><span class="title">Compose</span></a></li>
								<li><a href="../../html/mail/reply.html" ><span class="title">Reply</span></a></li>
								<li><a href="../../html/mail/message.html" ><span class="title">View message</span></a></li>
							</ul><!--end /submenu -->
						</li><!--end /menu-li -->
						<!-- END EMAIL -->

						<!-- BEGIN DASHBOARD -->
						<li>
							<a href="../../html/layouts/builder.html" >
								<div class="gui-icon"><i class="md md-web"></i></div>
								<span class="title">Layouts</span>
							</a>
						</li><!--end /menu-li -->
						<!-- END DASHBOARD -->

						<!-- BEGIN UI -->
						<li class="gui-folder">
							<a>
								<div class="gui-icon"><i class="fa fa-puzzle-piece fa-fw"></i></div>
								<span class="title">UI elements</span>
							</a>
							<!--start submenu -->
							<ul>
								<li><a href="../../html/ui/colors.html" ><span class="title">Colors</span></a></li>
								<li><a href="../../html/ui/typography.html" ><span class="title">Typography</span></a></li>
								<li><a href="../../html/ui/cards.html" ><span class="title">Cards</span></a></li>
								<li><a href="../../html/ui/buttons.html" ><span class="title">Buttons</span></a></li>
								<li><a href="../../html/ui/lists.html" ><span class="title">Lists</span></a></li>
								<li><a href="../../html/ui/tabs.html" ><span class="title">Tabs</span></a></li>
								<li><a href="../../html/ui/accordions.html" ><span class="title">Accordions</span></a></li>
								<li><a href="../../html/ui/messages.html" ><span class="title">Messages</span></a></li>
								<li><a href="../../html/ui/offcanvas.html" ><span class="title">Off-canvas</span></a></li>
								<li><a href="../../html/ui/grid.html" ><span class="title">Grid</span></a></li>
								<li class="gui-folder">
									<a href="javascript:void(0);">
										<span class="title">Icons</span>
									</a>
									<!--start submenu -->
									<ul>
										<li><a href="../../html/ui/icons/materialicons.html" ><span class="title">Material Design Icons</span></a></li>
										<li><a href="../../html/ui/icons/fontawesome.html" ><span class="title">Font Awesome</span></a></li>
										<li><a href="../../html/ui/icons/glyphicons.html" ><span class="title">Glyphicons</span></a></li>
										<li><a href="../../html/ui/icons/skycons.html" ><span class="title">Skycons</span></a></li>
									</ul><!--end /submenu -->
								</li><!--end /menu-li -->
							</ul><!--end /submenu -->
						</li><!--end /menu-li -->
						<!-- END UI -->

						<!-- BEGIN TABLES -->
						<li class="gui-folder">
							<a>
								<div class="gui-icon"><i class="fa fa-table"></i></div>
								<span class="title">Tables</span>
							</a>
							<!--start submenu -->
							<ul>
								<li><a href="../../html/tables/static.html" ><span class="title">Static Tables</span></a></li>
								<li><a href="../../html/tables/dynamic.html" ><span class="title">Dynamic Tables</span></a></li>
								<li><a href="../../html/tables/responsive.html" ><span class="title">Responsive Table</span></a></li>
							</ul><!--end /submenu -->
						</li><!--end /menu-li -->
						<!-- END TABLES -->

						<!-- BEGIN FORMS -->
						<li class="gui-folder">
							<a>
								<div class="gui-icon"><span class="glyphicon glyphicon-list-alt"></span></div>
								<span class="title">Forms</span>
							</a>
							<!--start submenu -->
							<ul>
								<li><a href="../../html/forms/basic.html" ><span class="title">Form basic</span></a></li>
								<li><a href="../../html/forms/advanced.html" class="active"><span class="title">Form advanced</span></a></li>
								<li><a href="../../html/forms/layouts.html" ><span class="title">Form layouts</span></a></li>
								<li><a href="../../html/forms/editors.html" ><span class="title">Editors</span></a></li>
								<li><a href="../../html/forms/validation.html" ><span class="title">Form validation</span></a></li>
								<li><a href="../../html/forms/wizard.html" ><span class="title">Form wizard</span></a></li>
							</ul><!--end /submenu -->
						</li><!--end /menu-li -->
						<!-- END FORMS -->

						<!-- BEGIN PAGES -->
						<li class="gui-folder">
							<a>
								<div class="gui-icon"><i class="md md-computer"></i></div>
								<span class="title">Pages</span>
							</a>
							<!--start submenu -->
							<ul>
								<li class="gui-folder">
									<a href="javascript:void(0);">
										<span class="title">Contacts</span>
									</a>
									<!--start submenu -->
									<ul>
										<li><a href="../../html/pages/contacts/search.html" ><span class="title">Search</span></a></li>
										<li><a href="../../html/pages/contacts/details.html" ><span class="title">Contact card</span></a></li>
										<li><a href="../../html/pages/contacts/add.html" ><span class="title">Insert contact</span></a></li>
									</ul><!--end /submenu -->
								</li><!--end /menu-li -->
								<li class="gui-folder">
									<a href="javascript:void(0);">
										<span class="title">Search</span>
									</a>
									<!--start submenu -->
									<ul>
										<li><a href="../../html/pages/search/results-text.html" ><span class="title">Results - Text</span></a></li>
										<li><a href="../../html/pages/search/results-text-image.html" ><span class="title">Results - Text and Image</span></a></li>
									</ul><!--end /submenu -->
								</li><!--end /menu-li -->
								<li class="gui-folder">
									<a href="javascript:void(0);">
										<span class="title">Blog</span>
									</a>
									<!--start submenu -->
									<ul>
										<li><a href="../../html/pages/blog/masonry.html" ><span class="title">Blog masonry</span></a></li>
										<li><a href="../../html/pages/blog/list.html" ><span class="title">Blog list</span></a></li>
										<li><a href="../../html/pages/blog/post.html" ><span class="title">Blog post</span></a></li>
									</ul><!--end /submenu -->
								</li><!--end /menu-li -->
								<li class="gui-folder">
									<a href="javascript:void(0);">
										<span class="title">Error pages</span>
									</a>
									<!--start submenu -->
									<ul>
										<li><a href="../../html/pages/404.html" ><span class="title">404 page</span></a></li>
										<li><a href="../../html/pages/500.html" ><span class="title">500 page</span></a></li>
									</ul><!--end /submenu -->
								</li><!--end /menu-li -->
								<li><a href="../../html/pages/profile.html" ><span class="title">User profile<span class="badge style-accent">42</span></span></a></li>
								<li><a href="../../html/pages/invoice.html" ><span class="title">Invoice</span></a></li>
								<li><a href="../../html/pages/calendar.html" ><span class="title">Calendar</span></a></li>
								<li><a href="../../html/pages/pricing.html" ><span class="title">Pricing</span></a></li>
								<li><a href="../../html/pages/timeline.html" ><span class="title">Timeline</span></a></li>
								<li><a href="../../html/pages/maps.html" ><span class="title">Maps</span></a></li>
								<li><a href="../../html/pages/locked.html" ><span class="title">Lock screen</span></a></li>
								<li><a href="../../html/pages/login.html" ><span class="title">Login</span></a></li>
								<li><a href="../../html/pages/blank.html" ><span class="title">Blank page</span></a></li>
							</ul><!--end /submenu -->
						</li><!--end /menu-li -->
						<!-- END FORMS -->

						<!-- BEGIN CHARTS -->
						<li>
							<a href="../../html/charts/charts.html" >
								<div class="gui-icon"><i class="md md-assessment"></i></div>
								<span class="title">Charts</span>
							</a>
						</li><!--end /menu-li -->
						<!-- END CHARTS -->

						<!-- BEGIN LEVELS -->
						<li class="gui-folder">
							<a>
								<div class="gui-icon"><i class="fa fa-folder-open fa-fw"></i></div>
								<span class="title">Menu levels demo</span>
							</a>
							<!--start submenu -->
							<ul>
								<li><a href="#"><span class="title">Item 1</span></a></li>
								<li><a href="#"><span class="title">Item 1</span></a></li>
								<li class="gui-folder">
									<a href="javascript:void(0);">
										<span class="title">Open level 2</span>
									</a>
									<!--start submenu -->
									<ul>
										<li><a href="#"><span class="title">Item 2</span></a></li>
										<li class="gui-folder">
											<a href="javascript:void(0);">
												<span class="title">Open level 3</span>
											</a>
											<!--start submenu -->
											<ul>
												<li><a href="#"><span class="title">Item 3</span></a></li>
												<li><a href="#"><span class="title">Item 3</span></a></li>
												<li class="gui-folder">
													<a href="javascript:void(0);">
														<span class="title">Open level 4</span>
													</a>
													<!--start submenu -->
													<ul>
														<li><a href="#"><span class="title">Item 4</span></a></li>
														<li class="gui-folder">
															<a href="javascript:void(0);">
																<span class="title">Open level 5</span>
															</a>
															<!--start submenu -->
															<ul>
																<li><a href="#"><span class="title">Item 5</span></a></li>
																<li><a href="#"><span class="title">Item 5</span></a></li>
															</ul><!--end /submenu -->
														</li><!--end /submenu-li -->
													</ul><!--end /submenu -->
												</li><!--end /submenu-li -->
											</ul><!--end /submenu -->
										</li><!--end /submenu-li -->
									</ul><!--end /submenu -->
								</li><!--end /submenu-li -->
							</ul><!--end /submenu -->
						</li><!--end /menu-li -->
						<!-- END LEVELS -->

					</ul><!--end .main-menu -->
					<!-- END MAIN MENU -->

					<div class="menubar-foot-panel">
						<small class="no-linebreak hidden-folded">
							<span class="opacity-75">Copyright &copy; 2014</span> <strong>CodeCovers</strong>
						</small>
					</div>
				</div><!--end .menubar-scroll-panel-->
			</div><!--end #menubar-->
			<!-- END MENUBAR -->

			<!-- BEGIN OFFCANVAS RIGHT -->
			<div class="offcanvas">

				<!-- BEGIN OFFCANVAS SEARCH -->
				<div id="offcanvas-search" class="offcanvas-pane width-8">
					<div class="offcanvas-head">
						<header class="text-primary">Search</header>
						<div class="offcanvas-tools">
							<a class="btn btn-icon-toggle btn-default-light pull-right" data-dismiss="offcanvas">
								<i class="md md-close"></i>
							</a>
						</div>
					</div>
					<div class="offcanvas-body no-padding">
						<ul class="list ">
							<li class="tile divider-full-bleed">
								<div class="tile-content">
									<div class="tile-text"><strong>A</strong></div>
								</div>
							</li>
							<li class="tile">
								<a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
									<div class="tile-icon">
										<img src="../../assets/img/avatar4.jpg?1404026791" alt="" />
									</div>
									<div class="tile-text">
										Alex Nelson
										<small>123-123-3210</small>
									</div>
								</a>
							</li>
							<li class="tile">
								<a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
									<div class="tile-icon">
										<img src="../../assets/img/avatar9.jpg?1404026744" alt="" />
									</div>
									<div class="tile-text">
										Ann Laurens
										<small>123-123-3210</small>
									</div>
								</a>
							</li>
							<li class="tile divider-full-bleed">
								<div class="tile-content">
									<div class="tile-text"><strong>J</strong></div>
								</div>
							</li>
							<li class="tile">
								<a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
									<div class="tile-icon">
										<img src="../../assets/img/avatar2.jpg?1404026449" alt="" />
									</div>
									<div class="tile-text">
										Jessica Cruise
										<small>123-123-3210</small>
									</div>
								</a>
							</li>
							<li class="tile">
								<a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
									<div class="tile-icon">
										<img src="../../assets/img/avatar8.jpg?1404026729" alt="" />
									</div>
									<div class="tile-text">
										Jim Peters
										<small>123-123-3210</small>
									</div>
								</a>
							</li>
							<li class="tile divider-full-bleed">
								<div class="tile-content">
									<div class="tile-text"><strong>M</strong></div>
								</div>
							</li>
							<li class="tile">
								<a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
									<div class="tile-icon">
										<img src="../../assets/img/avatar5.jpg?1404026513" alt="" />
									</div>
									<div class="tile-text">
										Mabel Logan
										<small>123-123-3210</small>
									</div>
								</a>
							</li>
							<li class="tile">
								<a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
									<div class="tile-icon">
										<img src="../../assets/img/avatar11.jpg?1404026774" alt="" />
									</div>
									<div class="tile-text">
										Mary Peterson
										<small>123-123-3210</small>
									</div>
								</a>
							</li>
							<li class="tile">
								<a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
									<div class="tile-icon">
										<img src="../../assets/img/avatar3.jpg?1404026799" alt="" />
									</div>
									<div class="tile-text">
										Mike Alba
										<small>123-123-3210</small>
									</div>
								</a>
							</li>
							<li class="tile divider-full-bleed">
								<div class="tile-content">
									<div class="tile-text"><strong>N</strong></div>
								</div>
							</li>
							<li class="tile">
								<a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
									<div class="tile-icon">
										<img src="../../assets/img/avatar6.jpg?1404026572" alt="" />
									</div>
									<div class="tile-text">
										Nathan Peterson
										<small>123-123-3210</small>
									</div>
								</a>
							</li>
							<li class="tile divider-full-bleed">
								<div class="tile-content">
									<div class="tile-text"><strong>P</strong></div>
								</div>
							</li>
							<li class="tile">
								<a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
									<div class="tile-icon">
										<img src="../../assets/img/avatar7.jpg?1404026721" alt="" />
									</div>
									<div class="tile-text">
										Philip Ericsson
										<small>123-123-3210</small>
									</div>
								</a>
							</li>
							<li class="tile divider-full-bleed">
								<div class="tile-content">
									<div class="tile-text"><strong>S</strong></div>
								</div>
							</li>
							<li class="tile">
								<a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
									<div class="tile-icon">
										<img src="../../assets/img/avatar10.jpg?1404026762" alt="" />
									</div>
									<div class="tile-text">
										Samuel Parsons
										<small>123-123-3210</small>
									</div>
								</a>
							</li>
						</ul>
					</div><!--end .offcanvas-body -->
				</div><!--end .offcanvas-pane -->
				<!-- END OFFCANVAS SEARCH -->

				<!-- BEGIN OFFCANVAS CHAT -->
				<div id="offcanvas-chat" class="offcanvas-pane style-default-light width-12">
					<div class="offcanvas-head style-default-bright">
						<header class="text-primary">Chat with Ann Laurens</header>
						<div class="offcanvas-tools">
							<a class="btn btn-icon-toggle btn-default-light pull-right" data-dismiss="offcanvas">
								<i class="md md-close"></i>
							</a>
							<a class="btn btn-icon-toggle btn-default-light pull-right" href="#offcanvas-search" data-toggle="offcanvas" data-backdrop="false">
								<i class="md md-arrow-back"></i>
							</a>
						</div>
						<form class="form">
							<div class="form-group floating-label">
								<textarea name="sidebarChatMessage" id="sidebarChatMessage" class="form-control autosize" rows="1"></textarea>
								<label for="sidebarChatMessage">Leave a message</label>
							</div>
						</form>
					</div>
					<div class="offcanvas-body">
						<ul class="list-chats">
							<li>
								<div class="chat">
									<div class="chat-avatar"><img class="img-circle" src="../../assets/img/avatar1.jpg?1403934956" alt="" /></div>
									<div class="chat-body">
										Yes, it is indeed very beautiful.
										<small>10:03 pm</small>
									</div>
								</div><!--end .chat -->
							</li>
							<li class="chat-left">
								<div class="chat">
									<div class="chat-avatar"><img class="img-circle" src="../../assets/img/avatar9.jpg?1404026744" alt="" /></div>
									<div class="chat-body">
										Did you see the changes?
										<small>10:02 pm</small>
									</div>
								</div><!--end .chat -->
							</li>
							<li>
								<div class="chat">
									<div class="chat-avatar"><img class="img-circle" src="../../assets/img/avatar1.jpg?1403934956" alt="" /></div>
									<div class="chat-body">
										I just arrived at work, it was quite busy.
										<small>06:44pm</small>
									</div>
									<div class="chat-body">
										I will take look in a minute.
										<small>06:45pm</small>
									</div>
								</div><!--end .chat -->
							</li>
							<li class="chat-left">
								<div class="chat">
									<div class="chat-avatar"><img class="img-circle" src="../../assets/img/avatar9.jpg?1404026744" alt="" /></div>
									<div class="chat-body">
										The colors are much better now.
									</div>
									<div class="chat-body">
										The colors are brighter than before.
										I have already sent an example.
										This will make it look sharper.
										<small>Mon</small>
									</div>
								</div><!--end .chat -->
							</li>
							<li>
								<div class="chat">
									<div class="chat-avatar"><img class="img-circle" src="../../assets/img/avatar1.jpg?1403934956" alt="" /></div>
									<div class="chat-body">
										Are the colors of the logo already adapted?
										<small>Last week</small>
									</div>
								</div><!--end .chat -->
							</li>
						</ul>
					</div><!--end .offcanvas-body -->
				</div><!--end .offcanvas-pane -->
				<!-- END OFFCANVAS CHAT -->

			</div><!--end .offcanvas-->
			<!-- END OFFCANVAS RIGHT -->

		</div><!--end #base-->
		<!-- END BASE -->

		<!-- BEGIN JAVASCRIPT -->
		<script src="../../assets/js/libs/jquery/jquery-1.11.2.min.js"></script>
		<script src="../../assets/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
		<script src="../../assets/js/libs/jquery-ui/jquery-ui.min.js"></script>
		<script src="../../assets/js/libs/bootstrap/bootstrap.min.js"></script>
		<script src="../../assets/js/libs/spin.js/spin.min.js"></script>
		<script src="../../assets/js/libs/autosize/jquery.autosize.min.js"></script>
		<script src="../../assets/js/libs/select2/select2.min.js"></script>
		<script src="../../assets/js/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
		<script src="../../assets/js/libs/multi-select/jquery.multi-select.js"></script>
		<script src="../../assets/js/libs/inputmask/jquery.inputmask.bundle.min.js"></script>
		<script src="../../assets/js/libs/moment/moment.min.js"></script>
		<script src="../../assets/js/libs/bootstrap-datepicker/bootstrap-datepicker.js"></script>
		<script src="../../assets/js/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
		<script src="../../assets/js/libs/typeahead/typeahead.bundle.min.js"></script>
		<script src="../../assets/js/libs/dropzone/dropzone.min.js"></script>
		<script src="../../assets/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
		<script src="../../assets/js/core/source/App.js"></script>
		<script src="../../assets/js/core/source/AppNavigation.js"></script>
		<script src="../../assets/js/core/source/AppOffcanvas.js"></script>
		<script src="../../assets/js/core/source/AppCard.js"></script>
		<script src="../../assets/js/core/source/AppForm.js"></script>
		<script src="../../assets/js/core/source/AppNavSearch.js"></script>
		<script src="../../assets/js/core/source/AppVendor.js"></script>
		<script src="../../assets/js/core/demo/Demo.js"></script>
		<script src="../../assets/js/core/demo/DemoFormComponents.js"></script>
		<!-- END JAVASCRIPT -->

	</body>
</html>
