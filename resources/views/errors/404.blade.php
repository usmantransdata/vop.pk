<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>404 Error Page </title>

		<meta name="description" content="404 Error Page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="{{ asset('/') }}public/aceadmin/assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="{{ asset('/') }}public/aceadmin//assets/css/font-awesome.min.css" />
		<!-- page specific plugin styles -->
		<!-- text fonts -->
		<link rel="stylesheet" href="{{ asset('/') }}public/aceadmin//assets/css/ace-fonts.css" />
		<!-- ace styles -->
		<link rel="stylesheet" href="{{ asset('/') }}public/aceadmin//assets/css/ace.min.css" id="main-ace-style" />
		<!--[if lte IE 9]>
			<link rel="stylesheet" href="../assets/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="{{ asset('/') }}public/aceadmin//assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="{{ asset('/') }}public/aceadmin//assets/css/ace-rtl.min.css" />
		<script src="{{ asset('/') }}public/aceadmin//assets/js/ace-extra.min.js"></script>
	
	</head>


	<body class="no-skin">
		<!-- #section:basics/navbar.layout -->
		
			<!-- /section:basics/sidebar -->
			<div class="main-content ">
				<!-- #section:basics/content.breadcrumbs -->
				<div class="page-content-area">
						<div class="row">
							<div class="col-xs-8 col-md-offset-2">
								<!-- PAGE CONTENT BEGINS -->

								<!-- #section:pages/error -->
								<div class="error-container">
									<div class="well">
										<h1 class="grey lighter smaller">
											<span class="blue bigger-125">
												<i class="ace-icon fa fa-sitemap"></i>
												You Don't Have Permissions
											</span>
										</h1>

										<hr />
										<h3 class="lighter smaller"><small>Please Contact to your admin</small>	
										</h3>

										<div>
											<form class="form-search">
												<span class="input-icon align-middle">
													<i class="ace-icon fa fa-search"></i>

													<input type="text" class="search-query" placeholder="Give it a search..." />
												</span>
												<button class="btn btn-sm" type="button">Go!</button>
											</form>

											<div class="space"></div>
											<h4 class="smaller">Try one of the following:</h4>

											<ul class="list-unstyled spaced inline bigger-110 margin-15">
												<li>
													<i class="ace-icon fa fa-hand-o-right blue"></i>
													Re-check the url for typos
												</li>

												<li>
													<i class="ace-icon fa fa-hand-o-right blue"></i>
													Read the faq
												</li>

												<li>
													<i class="ace-icon fa fa-hand-o-right blue"></i>
													Tell us about it
												</li>
											</ul>
										</div>

										<hr />
										<div class="space"></div>

										<div class="center">
											<a href="javascript:history.back()" class="btn btn-grey">
												<i class="ace-icon fa fa-arrow-left"></i>
												Go Back
											</a>

											<a href="{{ asset('/') }}index.php/backend" class="btn btn-primary">
												<i class="ace-icon fa fa-tachometer"></i>
												Dashboard
											</a>
										</div>
									</div>
								</div>

								<!-- /section:pages/error -->

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content-area -->
			</div><!-- /.main-content -->
