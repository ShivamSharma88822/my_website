<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="">
     <meta charset="utf-8">
        <meta name="title" content="">        
        <meta name="description" content="">
        <meta name="keywords" content="">
    <title>SB Computers</title>
	




    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
	<link href="css/nivo-lightbox.css" rel="stylesheet" />
	<link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
	<link href="css/animate.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
	<!-- boxed bg -->
	<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
	<!-- template skin -->
	<link id="t-colors" href="color/default.css" rel="stylesheet">

                 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

				<script>
				$(document).ready(function()
				{
                	$('#txtHintsrchall').bind('scroll',chk_scroll);
                });
                
                function chk_scroll(e)
                {
                    var elem = $(e.currentTarget);

                    if (elem[0].scrollHeight - parseInt(elem.scrollTop()) == elem.outerHeight())
                    {
                        var input_count = $('#scrollcount');
                        var count = parseInt(input_count.val()) + 10;
                        input_count.val(count);
                        var str = input_count.next().val();
                        console.log("str : ", str);
                        console.log("count : ", count);
                        console.log("bottom");
                        var xmlhttp = new XMLHttpRequest();
						xmlhttp.onreadystatechange = function() 
						{
							if (this.readyState == 4 && this.status == 200) 
							{
								document.getElementById("txtHintsrchall").innerHTML += this.responseText;
							}
						}
						xmlhttp.open("GET", "gethint_search_all_notxs.php?q="+str+"&count="+count, true);
						xmlhttp.send();
                    }
              
                }
				function showHintsrchall(str) 
				{
					if (str.length == 0) 
					{ 
						document.getElementById("txtHintsrchall").innerHTML = "";
						return;
					} 
					else 
					{
					    document.getElementById("scrollcount").value = 0;
					    var xmlhttp = new XMLHttpRequest();
						xmlhttp.onreadystatechange = function() 
						{
							if (this.readyState == 4 && this.status == 200) 
							{
								document.getElementById("txtHintsrchall").innerHTML = this.responseText;
							}
						}
						xmlhttp.open("GET", "gethint_search_all_notxs.php?q="+str, true);
						xmlhttp.send();
					}
				}
				</script>	


                    <script>
                    $(document).ready(function()
                    {
                      $("#srch").click(function()
                      {
                        $("#srchdata").toggle("main");
                      });
             
                      $("#srch3").click(function()
                      {
                        $("#srchdata").toggle("main");
                      });
                    });
                    </script>


   	<style>
	.nav>li>a {
    position: relative  !important;
    display: block  !important;
    padding: 19px 16px !important;
	}
	
	@media (min-width: 1200px)
	.container {
		width1: 100% !important;
		margin: 0px auto;
	}
	.container {
		width1: 100% !important;
		margin: 0px auto;
	}
	</style>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
<div id="wrapper">
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
	
		<!----navi header start--->
        <div class="container" style="font-size: 12px;background: #fff;font-family: revert;border: 1px solid #e2e2e2;height: 35px;line-height: 32px;">
		<div class="row">
		<div class="col-md-1 hidden-xs" style="border-right: 1px solid #ddd;text-align: center;">ENGLISH</div>
		<div class="col-md-1 hidden-xs" style="border-right: 1px solid #ddd;text-align: center;">INR</div>
		<div class="col-md-7 hidden-xs" style="border-left: 1px solid #ddd;text-align: center;">&nbsp;</div>
		<div class="col-md-1 col-xs-6" style="border-left: 1px solid #ddd;text-align: center;"><a href="booking_details.php">CHECKOUT</a></div>
				<div class="col-md-2 col-xs-6" style="border-left: 1px solid #ddd;text-align: center;"><a href="customer_login_reg.php">SIGN IN / SIGN UP</a></div>
		  
		</div>
		</div>
		<!----navi header end--->
		

		<!----header middle start--->
        <div class="container text-center" style="padding: 10px 5px;background: #f5f5f5;line-height: 40px;font-size: 14px;font-weight: bold;">
        <div class="row">
			<div class="col-md-2 col-xs-6" style="padding:0px;"><a href="index.php"><img src="img/logo.png" alt="" style="width: 180px;height: 42px;"/></a></div>
			<div class="col-md-1 hidden-xs" style="padding:0px;">&nbsp;</div>
			<div class="col-md-1 hidden-xs" style="padding:0px;"><a href="index.php">Home</a></div>
			<div class="col-md-1 hidden-xs" style="padding:0px;"><a href="about.php">About Us</a></div>
                        <div class="col-md-2 hidden-xs" style="padding:0px;"><a href="Services.php?serviceid=145">Electronics</a></div>
                        <div class="col-md-2 hidden-xs" style="padding:0px;"><a href="Services.php?serviceid=148">Hot Deal To Day</a></div>
                        <div class="col-md-1 hidden-xs" style="padding:0px;"><a href="Contact.php">Contact Us</a></div>
			<div class="col-md-2 hidden-xs" style="padding:0px;">
			<div style="text-align: right;line-height: 21px;font-size: 12px;">
			<b>Call Us: </b><span><a href="tel:9990436061">9990436061</a></span><br>
			<b>Email: </b><span><a href="mailto:info@sbcomputers.in">info@sbcomputers.in</a></span>
			</div>
			</div>
			<div class="col-xs-5 visible-xs" style="padding:0px;">
						 						<ul style="width:100%;margin: -5px -92px;text-align: right;">	
						<li style="list-style:none;">
						  <a href="cart.php" class="dropdown-toggle" data-toggle="dropdown" style="padding: 4px 0px;color: #3a3a38;text-transform1: capitalize;background1: #3a3a38;font-family: sans-serif;border-radius: 64px;">
						  							 <!--
							 <img src="img/dfdf.png" style="width: 41px;margin-top: 32px;margin-left: 102px;"/>
							 -->
							 <img src="img/dfdf.png" style="width: 41px;margin-top: 10px;margin-left: 0px;color: #000;"/>
							 <span style="color: #ffffff;margin: -25px;font-size: 12px;"> 0</span>
							 							 </a>

									<ul class="dropdown-menu" style="width: 100%;margin-top: 0px;left: -56px;top: 50px;min-width: 227px;margin: 0px;">
									 <li>
																		 <div align="center" style="font-size: 12px;">Cart is empty!</div>
									 									 </li>
								  </ul>								  
						</li>
						</ul>
			</div>
			<div class="col-xs-1 visible-xs dropdown" style="padding:0px;">
			   <button type="button" class="dropdown-toggle" data-toggle="dropdown" style="margin: 0px;padding: 0px;border: none;">
    				<i class="fa fa-bars" style="background: #d9534f;color: #fff; padding: 10px;"></i>
	            </button>
				<div class="dropdown-menu container-fluid" style="margin-top: 9px;left: -325px;min-width: 356px;font-size: 12px;padding: 0px;">
					<div class="row">
                    						<style>
						.tooltipp145 
						{
						  position: relative;
						  display: inline-block;
						  opacity: inherit;
						}

						.tooltipp145 .tooltiptextp145 
						{
							visibility: hidden;
							width: 400px;
							background-color: white;
							color: #616161;
							text-align: left;
							padding: 0px;
							position: absolute;
							border: 1px solid #ddd;
							z-index: 1;
						}

						.tooltipp145:hover .tooltiptextp145 
						{
						  visibility: visible;
						}
						</style>
					 <div class="col-xs-12 tooltipp145" style="padding:0px;">
						 <div class="col-xs-12" style="border: 1px solid #ddd;background: #005699;">
						 <a href="Services.php?serviceid=145" style="color:#fff;">Electronics</a>
						 </div>
						 <!--
						 <div class="col-xs-2 text-center mean-expand" style="font-size: 20px; border: 1px solid #ddd;background: #005699;color: #fff;">+</div>	
						 -->	
							  <span class="tooltiptextp11145">
							  								  <div class="col-xs-12" style="border: 1px solid #ddd;background: #19649e;">
								  <a href="sub_category.php?serviceid_main=145&serviceid=3" style="color: #fff; padding-left:30px;	">
								  Desktop 								  </a>
								  </div>
							  								  <div class="col-xs-12" style="border: 1px solid #ddd;background: #19649e;">
								  <a href="sub_category.php?serviceid_main=145&serviceid=8" style="color: #fff; padding-left:30px;	">
								  Laptop								  </a>
								  </div>
							  							  </span>
						 
					</div>
											<style>
						.tooltipp148 
						{
						  position: relative;
						  display: inline-block;
						  opacity: inherit;
						}

						.tooltipp148 .tooltiptextp148 
						{
							visibility: hidden;
							width: 400px;
							background-color: white;
							color: #616161;
							text-align: left;
							padding: 0px;
							position: absolute;
							border: 1px solid #ddd;
							z-index: 1;
						}

						.tooltipp148:hover .tooltiptextp148 
						{
						  visibility: visible;
						}
						</style>
					 <div class="col-xs-12 tooltipp148" style="padding:0px;">
						 <div class="col-xs-12" style="border: 1px solid #ddd;background: #005699;">
						 <a href="Services.php?serviceid=148" style="color:#fff;">Hot Deal To Day</a>
						 </div>
						 <!--
						 <div class="col-xs-2 text-center mean-expand" style="font-size: 20px; border: 1px solid #ddd;background: #005699;color: #fff;">+</div>	
						 -->	
							  <span class="tooltiptextp11148">
							  								  <div class="col-xs-12" style="border: 1px solid #ddd;background: #19649e;">
								  <a href="sub_category.php?serviceid_main=148&serviceid=6" style="color: #fff; padding-left:30px;	">
								  Professional Bag								  </a>
								  </div>
							  							  </span>
						 
					</div>
											<style>
						.tooltipp149 
						{
						  position: relative;
						  display: inline-block;
						  opacity: inherit;
						}

						.tooltipp149 .tooltiptextp149 
						{
							visibility: hidden;
							width: 400px;
							background-color: white;
							color: #616161;
							text-align: left;
							padding: 0px;
							position: absolute;
							border: 1px solid #ddd;
							z-index: 1;
						}

						.tooltipp149:hover .tooltiptextp149 
						{
						  visibility: visible;
						}
						</style>
					 <div class="col-xs-12 tooltipp149" style="padding:0px;">
						 <div class="col-xs-12" style="border: 1px solid #ddd;background: #005699;">
						 <a href="Services.php?serviceid=149" style="color:#fff;">New Products</a>
						 </div>
						 <!--
						 <div class="col-xs-2 text-center mean-expand" style="font-size: 20px; border: 1px solid #ddd;background: #005699;color: #fff;">+</div>	
						 -->	
							  <span class="tooltiptextp11149">
							  								  <div class="col-xs-12" style="border: 1px solid #ddd;background: #19649e;">
								  <a href="sub_category.php?serviceid_main=149&serviceid=7" style="color: #fff; padding-left:30px;	">
								  Electronics								  </a>
								  </div>
							  							  </span>
						 
					</div>
											<style>
						.tooltipp150 
						{
						  position: relative;
						  display: inline-block;
						  opacity: inherit;
						}

						.tooltipp150 .tooltiptextp150 
						{
							visibility: hidden;
							width: 400px;
							background-color: white;
							color: #616161;
							text-align: left;
							padding: 0px;
							position: absolute;
							border: 1px solid #ddd;
							z-index: 1;
						}

						.tooltipp150:hover .tooltiptextp150 
						{
						  visibility: visible;
						}
						</style>
					 <div class="col-xs-12 tooltipp150" style="padding:0px;">
						 <div class="col-xs-12" style="border: 1px solid #ddd;background: #005699;">
						 <a href="Services.php?serviceid=150" style="color:#fff;">Lifestyle</a>
						 </div>
						 <!--
						 <div class="col-xs-2 text-center mean-expand" style="font-size: 20px; border: 1px solid #ddd;background: #005699;color: #fff;">+</div>	
						 -->	
							  <span class="tooltiptextp11150">
							  								  <div class="col-xs-12" style="border: 1px solid #ddd;background: #19649e;">
								  <a href="sub_category.php?serviceid_main=150&serviceid=9" style="color: #fff; padding-left:30px;	">
								  Women								  </a>
								  </div>
							  								  <div class="col-xs-12" style="border: 1px solid #ddd;background: #19649e;">
								  <a href="sub_category.php?serviceid_main=150&serviceid=10" style="color: #fff; padding-left:30px;	">
								  Men								  </a>
								  </div>
							  								  <div class="col-xs-12" style="border: 1px solid #ddd;background: #19649e;">
								  <a href="sub_category.php?serviceid_main=150&serviceid=11" style="color: #fff; padding-left:30px;	">
								  Bedroom								  </a>
								  </div>
							  								  <div class="col-xs-12" style="border: 1px solid #ddd;background: #19649e;">
								  <a href="sub_category.php?serviceid_main=150&serviceid=12" style="color: #fff; padding-left:30px;	">
								  Toys & Games								  </a>
								  </div>
							  							  </span>
						 
					</div>
										</div>
				</div>
			</div>
					        </div>
        </div>
		<!----header middle end--->



		<!----header bottom start--->
        <div class="container text-center" style="padding:0px 5px 5px 5px;background: #f5f5f5;line-height: 40px;font-size: 14px;font-weight: bold;">
        <div class="row">			
			<div class="col-md-3 hidden-xs dropdown" style="padding:0px;background: #ff9800;">
			   <button type="button" class="dropdown-toggle" data-toggle="dropdown" style="margin: 0px;padding: 0px;border: none;">
    				<img src="img/cat_img.png" style="width:100%;height: 63px;">
	            </button>
				<div class="dropdown-menu container-fluid" style="margin-top: 0px;font-size: 12px;padding: 0px;">
					<div class="row">
                    						<style>
						.tooltip145 
						{
						  position: relative;
						  display: inline-block;
						  opacity: inherit;
						}

						.tooltip145 .tooltiptext145 
						{    visibility: hidden;
							width: 400px;
							background-color: white;
							color: #616161;
							text-align: left;
							padding: 0px;
							position: absolute;
							border: 1px solid #ddd;
							z-index: 1;
						}

						.tooltip145:hover .tooltiptext145 
						{
						  visibility: visible;
						}
						</style>
					 <div class="col-xs-12 tooltip145" style="padding:0px;">
						 <div class="col-xs-10" style="border-bottom: 1px solid #ddd;">
						 <a href="Services.php?serviceid=145">Electronics</a>
						 </div>
						 <div class="col-xs-2 text-center mean-expand" style="border-bottom: 1px solid #ddd;"><img src="img/drop.png"/></div>
							  <span class="tooltiptext145">
							  <div class="col-xs-12 text-center" style="border-bottom: 1px solid #ddd;font-weight: 900;font-size: 14px;">Electronics</div>
							  							  <div class="col-xs-6 text-center" style="border: 1px solid #ddd;">
							  <a href="sub_category.php?serviceid_main=145&serviceid=3" style="color: #005699;">
							  Desktop 							  </a>
							  </div>
							  							  <div class="col-xs-6 text-center" style="border: 1px solid #ddd;">
							  <a href="sub_category.php?serviceid_main=145&serviceid=8" style="color: #005699;">
							  Laptop							  </a>
							  </div>
							  							  <div class="col-xs-12 text-center" style="padding:0px;">
							  <img src="adds/17.jpg" style="width:100%;height: 150px;padding: 6px;">
							  </div>
							  </span>
					 </div>
											<style>
						.tooltip148 
						{
						  position: relative;
						  display: inline-block;
						  opacity: inherit;
						}

						.tooltip148 .tooltiptext148 
						{    visibility: hidden;
							width: 400px;
							background-color: white;
							color: #616161;
							text-align: left;
							padding: 0px;
							position: absolute;
							border: 1px solid #ddd;
							z-index: 1;
						}

						.tooltip148:hover .tooltiptext148 
						{
						  visibility: visible;
						}
						</style>
					 <div class="col-xs-12 tooltip148" style="padding:0px;">
						 <div class="col-xs-10" style="border-bottom: 1px solid #ddd;">
						 <a href="Services.php?serviceid=148">Hot Deal To Day</a>
						 </div>
						 <div class="col-xs-2 text-center mean-expand" style="border-bottom: 1px solid #ddd;"><img src="img/drop.png"/></div>
							  <span class="tooltiptext148">
							  <div class="col-xs-12 text-center" style="border-bottom: 1px solid #ddd;font-weight: 900;font-size: 14px;">Hot Deal To Day</div>
							  							  <div class="col-xs-6 text-center" style="border: 1px solid #ddd;">
							  <a href="sub_category.php?serviceid_main=148&serviceid=6" style="color: #005699;">
							  Professional Bag							  </a>
							  </div>
							  							  <div class="col-xs-12 text-center" style="padding:0px;">
							  <img src="adds/1.jpg" style="width:100%;height: 150px;padding: 6px;">
							  </div>
							  </span>
					 </div>
											<style>
						.tooltip149 
						{
						  position: relative;
						  display: inline-block;
						  opacity: inherit;
						}

						.tooltip149 .tooltiptext149 
						{    visibility: hidden;
							width: 400px;
							background-color: white;
							color: #616161;
							text-align: left;
							padding: 0px;
							position: absolute;
							border: 1px solid #ddd;
							z-index: 1;
						}

						.tooltip149:hover .tooltiptext149 
						{
						  visibility: visible;
						}
						</style>
					 <div class="col-xs-12 tooltip149" style="padding:0px;">
						 <div class="col-xs-10" style="border-bottom: 1px solid #ddd;">
						 <a href="Services.php?serviceid=149">New Products</a>
						 </div>
						 <div class="col-xs-2 text-center mean-expand" style="border-bottom: 1px solid #ddd;"><img src="img/drop.png"/></div>
							  <span class="tooltiptext149">
							  <div class="col-xs-12 text-center" style="border-bottom: 1px solid #ddd;font-weight: 900;font-size: 14px;">New Products</div>
							  							  <div class="col-xs-6 text-center" style="border: 1px solid #ddd;">
							  <a href="sub_category.php?serviceid_main=149&serviceid=7" style="color: #005699;">
							  Electronics							  </a>
							  </div>
							  							  <div class="col-xs-12 text-center" style="padding:0px;">
							  <img src="adds/16.jpg" style="width:100%;height: 150px;padding: 6px;">
							  </div>
							  </span>
					 </div>
											<style>
						.tooltip150 
						{
						  position: relative;
						  display: inline-block;
						  opacity: inherit;
						}

						.tooltip150 .tooltiptext150 
						{    visibility: hidden;
							width: 400px;
							background-color: white;
							color: #616161;
							text-align: left;
							padding: 0px;
							position: absolute;
							border: 1px solid #ddd;
							z-index: 1;
						}

						.tooltip150:hover .tooltiptext150 
						{
						  visibility: visible;
						}
						</style>
					 <div class="col-xs-12 tooltip150" style="padding:0px;">
						 <div class="col-xs-10" style="border-bottom: 1px solid #ddd;">
						 <a href="Services.php?serviceid=150">Lifestyle</a>
						 </div>
						 <div class="col-xs-2 text-center mean-expand" style="border-bottom: 1px solid #ddd;"><img src="img/drop.png"/></div>
							  <span class="tooltiptext150">
							  <div class="col-xs-12 text-center" style="border-bottom: 1px solid #ddd;font-weight: 900;font-size: 14px;">Lifestyle</div>
							  							  <div class="col-xs-6 text-center" style="border: 1px solid #ddd;">
							  <a href="sub_category.php?serviceid_main=150&serviceid=9" style="color: #005699;">
							  Women							  </a>
							  </div>
							  							  <div class="col-xs-6 text-center" style="border: 1px solid #ddd;">
							  <a href="sub_category.php?serviceid_main=150&serviceid=10" style="color: #005699;">
							  Men							  </a>
							  </div>
							  							  <div class="col-xs-6 text-center" style="border: 1px solid #ddd;">
							  <a href="sub_category.php?serviceid_main=150&serviceid=11" style="color: #005699;">
							  Bedroom							  </a>
							  </div>
							  							  <div class="col-xs-6 text-center" style="border: 1px solid #ddd;">
							  <a href="sub_category.php?serviceid_main=150&serviceid=12" style="color: #005699;">
							  Toys & Games							  </a>
							  </div>
							  							  <div class="col-xs-12 text-center" style="padding:0px;">
							  <img src="adds/108_Abraxas_Lifestyle_JPG.jpg" style="width:100%;height: 150px;padding: 6px;">
							  </div>
							  </span>
					 </div>
										</div>
				</div>
			</div>
			<div class="col-md-6 col-xs-12" style="padding:0px;">
				<form method="POST"  autocomplete="off" style="padding:8px 10px 10px 10px;background: #005699;;height: 61px;">
				<input type="hidden" name="count" id="scrollcount" value="0"/>
				<input type="text" name="drsrch" autocomplete="off" placeholder="Search your products..."  onKeyUp="showHintsrchall(this.value)" class="parlogin3" required  maxlength="100" style="text-transform: capitalize;width: 100%;height: 37px;padding: 4px;font-size: 12px;text-align: center;margin-top: 5px;"/>
				</form>
				<div id="txtHintsrchall" class="dfsdfsdsearchhalllhnewww" style="max-height: 200px;overflow: overlay;border: 1px solid #005699;position: absolute;width: 100%;background: #f5f5f5;"></div>
			</div>
			<div class="col-md-3 hidden-xs" style="padding:0px 10px 12px 10px;background: #005699;border-left: 1px solid #ddd;">
						  <div class="dropdown hidden-xs">
						  <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="padding1:4px 30px !important;color: #3a3a38;font-family: sans-serif;">
						  							 <!--<img src="img/dfdf.png" style="width:38px;margin-top: 12px;"/>-->
							 <span style="color: #fff;margin-right: -29px;font-size: 11px;z-index: 999;opacity: 0.9;"> 0</span>
							 <img src="img/dfdf.png" style="width:38px;margin-top: 12px;"/>
							 							</a>
							<span style="color: #fff;"><img src="img/ci.png" style="padding-top: 15px;"></span>
							
									<ul class="dropdown-menu" style="margin-top: 12px;width: 290px;left: -11px;">
									<li>
																		 <div align="center">Cart is empty!</div>
									 									 </li>
								  </ul>
						</div>
			</div>
        </div>
        </div>
		<!----header bottom end--->

        
</nav>






<!----------product view details code start---------->
<div class="clearfix"></div>
<div class="container" style="background: #e2e1e1;padding: 6px;">
<div class="row">
<div class="col-lg-12" style="padding: 0px !important;background: #fff;">
<div class="wdsfsdfow lightSpeedIn11" data-wow-delay="0.1s">
<div class="section-heading text-center">
                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12" style="padding:0px 0px;">
					<h4 style="padding: 4px 8px;font-size: 16px;margin: 0px;font-family: unset;font-weight: 600;" align="left"> <a href="index.php">Home</a> &nbsp; &gt; &nbsp; Electronics </h4>
					<hr style="margin: 0px;">
</div>

<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12" style="padding: 0px;">
					<div class="main_box" style="background: #fff;color: #6e2091;font-weight: bold;padding: 0px;text-align: left;">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
                    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                    <div class="hidden-xs" style="width:100%;text-align: center !important;">
                            <style>
                            .mySlides1 {display:none;}
                            </style>
                            <div class="w3-content w3-section">
                                                                    		    <img src="productimage/00510FkxcRipS._AC_UY218_.jpg" class="mySlides1" style="width1:100%;height: 360px;margin: 0px auto;" />
                                                                    		    <img src="productimage/0051jPUwqQTFL._AC_UY218_.jpg" class="mySlides1" style="width1:100%;height: 360px;margin: 0px auto;" />
                                        										</div>
                            			<div style="text-align:center;">
                  					                    	    				<span class="dot21"></span> 
                						                	    				<span class="dot21"></span> 
                						    				                	</div>	
    					
    					    					<style>
                                                .dot21 {
                                                  cursor: pointer;
                                                  height: 15px;
                                                  width: 15px;
                                                  margin: 0 2px;
                                                  background-color: #bbb;
                                                  border-radius: 50%;
                                                  display: inline-block;
                                                  transition: background-color 0.6s ease;
                                                }
                                                .dot21:hover {
                                                  background-color: #717171;
                                                }
                            					</style>
                            <script>
                            var myIndex1 = 0;
                            carousel1();
                            function carousel1() 
                            {
                              var i;
                              var x = document.getElementsByClassName("mySlides1");
                              for (i = 0; i < x.length; i++) 
                              {
                                x[i].style.display = "none";  
                              }
                              myIndex1++;
                              if (myIndex1 > x.length) {myIndex1 = 1}    
                              x[myIndex1-1].style.display = "block";  
                              setTimeout(carousel1, 2000); // Change image every 2 seconds
                            }
                            </script>
                    </div>
                    <div class="visible-xs" style="width:100%;text-align: center !important;">
                    <style>
                    .mySlides {display:none;}
                    </style>
                    <div class="w3-content w3-section" >
                                                		    <img src="productimage/00510FkxcRipS._AC_UY218_.jpg" class="mySlides" style="width1:100%;height: 200px;margin: 0px auto;" />
                                                                    		    <img src="productimage/0051jPUwqQTFL._AC_UY218_.jpg" class="mySlides" style="width1:100%;height: 200px;margin: 0px auto;" />
                                                                                </div>
                                            
                    					<div style="text-align:center;">
                  					                    	    				<span class="dot21"></span> 
                						                	    				<span class="dot21"></span> 
                						    				                	</div>	
    					
    					    					<style>
                                                .dot21 {
                                                  cursor: pointer;
                                                  height: 15px;
                                                  width: 15px;
                                                  margin: 0 2px;
                                                  background-color: #bbb;
                                                  border-radius: 50%;
                                                  display: inline-block;
                                                  transition: background-color 0.6s ease;
                                                }
                                                .dot21:hover {
                                                  background-color: #717171;
                                                }
                            					</style>
                            <script>
                            var myIndex = 0;
                            carousel();
                            function carousel() 
                            {
                              var i;
                              var x = document.getElementsByClassName("mySlides");
                              for (i = 0; i < x.length; i++) 
                              {
                                x[i].style.display = "none";  
                              }
                              myIndex++;
                              if (myIndex > x.length) {myIndex = 1}    
                              x[myIndex-1].style.display = "block";  
                              setTimeout(carousel, 2000); // Change image every 2 seconds
                            }
                            </script>
                    </div>
					</div>
</div>

<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12" style="padding-right: 0px;padding-left: 0px;padding-bottom1: 20px;padding-top: 1px;">
                <div class="main_box" style="background: #fff;color: #0a72c4;font-weight: bold;padding: 14px;text-align: left;">
				<div style="min-height:290px;">
                <h1 style="font-size: 16px;padding-bottom: 15px;margin: 0px 0px;line-height: 22px;"><b>Dell Inspiron 3502 15.6" (39.62 Cms) HD Display Laptop (Pentium Silver N5030 / 4GB / 256GB SSD / Integrated Graphics / Win 10 + MSO / Accent Black) D560427WIN9BE</b></h1>

                <div style="padding-bottom: 18px;"> Unit Price : <img src="img/rs.png" width="7" style="margin-top: -3px;width: 9px;" /> <span style="font-weight: 600;">50740</span></div>

                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12" style="padding: 0px;">
                <form method="post" action="" style="margin:0px;" enctype="multipart/form-data">
               <div class="col-lg-3 col-md-3 col-xs-6 col-sm-12" align="left" style="padding:0px;">
               <link rel="stylesheet" href="css/qtyinc.css">
                    <script src='//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
                    <script src="js/incrementing.js"></script>
                                        <div >
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                    <script type="application/javascript">
                    $(function(){
                    
                      $('#adds').on('click',add);
                      $('#subs').on('click',remove);
                    });
                    function add()
                    {
                      var input = $('#noOfRoom'),
                          value = input.val();
                          
                      input.val(++value);
                      
                      if(value > 0)
                      {
                        $('#subs').removeAttr('disabled');
                      }
                    }
                    function remove(){
                       var input = $('#noOfRoom'),
                           value = input.val();
                          
                       if(value > 0){
                         input.val(--value);
                       }else{
                         $('#subs').attr('disabled','disabled');
                      }
                    }
                    </script>
                    <table style="width:100%;">
                    <tr>
                    <td><input type="button" value="-" id="subs" class="btn btn-default pull-left" style="background: #ff9800;font-size: 16px;text-transform: uppercase;border: none;color: #fff;"></td>
                    <td><input type="text" class="onlyNumber form-control pull-left" id="noOfRoom" value="1" name="noOfRoom" style="height: 32px;font-size: 12px;" /></td>
                    <td><input type="button" value="+" id="adds" class="btn btn-default" style="background: #ff9800;font-size: 16px;text-transform: uppercase;border: none;color: #fff;" /></td>
                    </tr>
                    </table>
                    <input type="hidden" name="pname" value="Dell Inspiron 3502 15.6" (39.62 Cms) HD Display Laptop (Pentium Silver N5030 / 4GB / 256GB SSD / Integrated Graphics / Win 10 + MSO / Accent Black) D560427WIN9BE" >
                    <input type="hidden" name="pimg" value="" >
                    <input type="hidden" name="pprice" value="50740" >
                    <input type="hidden" name="pid" value="255" >
                    <input type="hidden" name="uid" style="width: 100px;" value="296754" >
                    </div>
                   </div>
               <div class="col-lg-3 col-md-2 col-xs-6 col-sm-12" align="right" style="padding:0px;margin-bottom:6px;float: right;">
								<input type="submit" name="addtocart" value="Add to Cart" class="btn btn-info" style="font-size: 12px;background: #ff9800;border: none;color: #fff;" />
				<a href="customer_login_reg.php" class="btn btn-info" style="font-size: 12px;text-transform:uppercase;margin-top: 3px;background: #ff9800;border: none;color: #fff;" >Checkout</a>				</div>  
				</form>             
				</div> 
				<div class="clearfix"></div>
               <div style="color:#000;padding: 0px 0px 10px 0px;">
			   <h5><b style="font-size: 15px;">Description:</b></h5>
               <p style="margin: 0px;padding-bottom: 10px;text-align: justify;">
			   			   Dell Inspiron 3502 15.6" (39.62 Cms) HD Display Laptop (Pentium Silver N5030 / 4GB / 256GB SSD / Integrated Graphics / Win 10 + MSO / Accent Black) D560427WIN9BEDell Inspiron 3502 15.6" (39.62 Cms) HD Display Laptop (Pentium Silver N5030 / 4GB / 256GB SSD / Integrated Graphics / Win 10 + MSO / Accent Black) D560427WIN9BE			                  </p>
               <p style="margin: 0px;padding-bottom: 10px;text-align: justify;">
			   			   Dell Inspiron 3502 15.6" (39.62 Cms) HD Display Laptop (Pentium Silver N5030 / 4GB / 256GB SSD / Integrated Graphics / Win 10 + MSO / Accent Black) D560427WIN9BEDell Inspiron 3502 15.6" (39.62 Cms) HD Display Laptop (Pentium Silver N5030 / 4GB / 256GB SSD / Integrated Graphics / Win 10 + MSO / Accent Black) D560427WIN9BE			                  </p>
               <p style="margin: 0px;padding-bottom: 10px;text-align: justify;">
			                  </p>
               <p style="margin: 0px;padding-bottom: 10px;text-align: justify;">
			                  </p>
               <p style="margin: 0px;padding-bottom: 10px;text-align: justify;">
			                  </p>
			                  </div>
				</div>
                <!--
                <div style="background:#ddd;padding: 6px;">
                                <form method="post">
                <table style="width:100%; text-align:center;">
                <tr>
                <th style=" width:33%;text-align: center;font-size: 14px;">Check Your Delivery:</th>
                <td style=" width:46%;text-align: center;">
                <input type="text" name="srch_avaailability" class="form-control" style="width:100%;font-size:12px;text-align: left;padding: 10px 10px;" Placeholder="Enter delivery pin code" /> 
                </td>
                <td style=" width:21%;text-align: center;"><input type="submit" name="chknow" value="Search"  class="btn btn-success" style=" background:#005699;font-size: 13px;" /></td>
                </tr>
                </table>
                </form>                
                </div>
                -->
				</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!----------product view details code end---------->
	








<!----------product section 2 code start---------->
<div class="container hidden-xs" style="background: #e2e1e1;padding: 0px 6px;">
<div class="row">
						<div class="col-lg-12" style="padding: 0px;">
														<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12" style="padding: 6px;border-radius: 8px;">
							<h4 style="padding: 0px;font-size: 16px;margin: 0px;font-family: unset;font-weight: 800;" align="left"> Related Product &nbsp;&nbsp; 
							<a href="sub_category.php?serviceid_main=145&serviceid=8" style="color: #005699;background: #ffffff;padding: 0px 8px;float: right;font-weight: 600;font-size: 14px;">View All</a>
							</h4>
							</div>
														<div class="col-lg-2 col-md-2 col-sm-6" style="text-align: center;padding-bottom: 15px;padding-top: 15px;background: #ffffff;font-size: 12px;border-right: 1px solid #e2e1e1;">
																<a href="product.php?productid=256">
								<img src="productimage/0051jPUwqQTFL._AC_UY218_.jpg" style="width:100%;height:170px;" />
								</a>
																<a href="product.php?productid=256">
								<p style="color: #005699 !important;text-transform: capitalize;font-weight: 600;overflow: hidden !important;line-height: 16px !important;height: 35px !important;">Dell Inspiron</p>
								<p style="color: #000 !important; text-transform: capitalize;font-weight: 600;">Rs. 53100</p>
								</a>
								<p class="btn btn-danger" style="font-size: 12px;padding: 5px 8px 3px;">
								<a href="product.php?productid=256" style="color:#fff !important; ">View More</a>
								</p>
							</div>
														<div class="col-lg-2 col-md-2 col-sm-6" style="text-align: center;padding-bottom: 15px;padding-top: 15px;background: #ffffff;font-size: 12px;border-right: 1px solid #e2e1e1;">
																<a href="product.php?productid=255">
								<img src="productimage/00510FkxcRipS._AC_UY218_.jpg" style="width:100%;height:170px;" />
								</a>
																<a href="product.php?productid=255">
								<p style="color: #005699 !important;text-transform: capitalize;font-weight: 600;overflow: hidden !important;line-height: 16px !important;height: 35px !important;">Dell Inspiron 3502 15.6" (39.62 Cms) HD Display Laptop (Pentium Silver N5030 / 4GB / 256GB SSD / Integrated Graphics / Win 10 + MSO / Accent Black) D560427WIN9BE</p>
								<p style="color: #000 !important; text-transform: capitalize;font-weight: 600;">Rs. 50740</p>
								</a>
								<p class="btn btn-danger" style="font-size: 12px;padding: 5px 8px 3px;">
								<a href="product.php?productid=255" style="color:#fff !important; ">View More</a>
								</p>
							</div>
														<div class="col-lg-2 col-md-2 col-sm-6" style="text-align: center;padding-bottom: 15px;padding-top: 15px;background: #ffffff;font-size: 12px;border-right: 1px solid #e2e1e1;">
																<a href="product.php?productid=243">
								<img src="productimage/051jPUwqQTFL._AC_UY218_.jpg" style="width:100%;height:170px;" />
								</a>
																<a href="product.php?productid=243">
								<p style="color: #005699 !important;text-transform: capitalize;font-weight: 600;overflow: hidden !important;line-height: 16px !important;height: 35px !important;">Dell Inspiron 3502 15.6" (39.62 cms) HD Display Laptop (Pentium Silver N5030 / 4GB / 256GB SSD / Integrated Graphics / Win 10 + MSO / Accent Black) D560427WIN9BE</p>
								<p style="color: #000 !important; text-transform: capitalize;font-weight: 600;">Rs. 41300</p>
								</a>
								<p class="btn btn-danger" style="font-size: 12px;padding: 5px 8px 3px;">
								<a href="product.php?productid=243" style="color:#fff !important; ">View More</a>
								</p>
							</div>
														<div class="col-lg-2 col-md-2 col-sm-6" style="text-align: center;padding-bottom: 15px;padding-top: 15px;background: #ffffff;font-size: 12px;border-right: 1px solid #e2e1e1;">
																<a href="product.php?productid=242">
								<img src="productimage/0510FkxcRipS._AC_UY218_.jpg" style="width:100%;height:170px;" />
								</a>
																<a href="product.php?productid=242">
								<p style="color: #005699 !important;text-transform: capitalize;font-weight: 600;overflow: hidden !important;line-height: 16px !important;height: 35px !important;">Lenovo V14 AMD Ryzen 3 3250U 14.1-inch HD Laptop (8GB/1TB/Windows 10/AMD Radeon Graphics/Grey/1.85Kg)</p>
								<p style="color: #000 !important; text-transform: capitalize;font-weight: 600;">Rs. 37760</p>
								</a>
								<p class="btn btn-danger" style="font-size: 12px;padding: 5px 8px 3px;">
								<a href="product.php?productid=242" style="color:#fff !important; ">View More</a>
								</p>
							</div>
														<div class="col-lg-2 col-md-2 col-sm-6" style="text-align: center;padding-bottom: 15px;padding-top: 15px;background: #ffffff;font-size: 12px;border-right: 1px solid #e2e1e1;">
																<a href="product.php?productid=219">
								<img src="productimage/061Dw5Z8LzJL._AC_UY218_.jpg" style="width:100%;height:170px;" />
								</a>
																<a href="product.php?productid=219">
								<p style="color: #005699 !important;text-transform: capitalize;font-weight: 600;overflow: hidden !important;line-height: 16px !important;height: 35px !important;">Lenovo IdeaPad Slim 3 10th Gen Intel Core i3 15.6" (39.63cm) FHD Thin & Light Laptop (8GB/1TB HDD/Windows 10/MS Office/Intel UHD Graphics/2 Year Warranty/Platinum</p>
								<p style="color: #000 !important; text-transform: capitalize;font-weight: 600;">Rs. 51300</p>
								</a>
								<p class="btn btn-danger" style="font-size: 12px;padding: 5px 8px 3px;">
								<a href="product.php?productid=219" style="color:#fff !important; ">View More</a>
								</p>
							</div>
														<div class="col-lg-2 col-md-2 col-sm-6" style="text-align: center;padding-bottom: 15px;padding-top: 15px;background: #ffffff;font-size: 12px;border-right: 1px solid #e2e1e1;">
																<a href="product.php?productid=218">
								<img src="productimage/071NLZPHcokL._AC_UY218_.jpg" style="width:100%;height:170px;" />
								</a>
																<a href="product.php?productid=218">
								<p style="color: #005699 !important;text-transform: capitalize;font-weight: 600;overflow: hidden !important;line-height: 16px !important;height: 35px !important;">MXVOLT 15.6 inch Laptop Screen Protector -Blue Light and Anti Glare Filter for Dell XPS 15.6 inch/Dell Inspron/All other Dell models of 15.6 inch Eye Protection Computer Monitor</p>
								<p style="color: #000 !important; text-transform: capitalize;font-weight: 600;">Rs. 85500</p>
								</a>
								<p class="btn btn-danger" style="font-size: 12px;padding: 5px 8px 3px;">
								<a href="product.php?productid=218" style="color:#fff !important; ">View More</a>
								</p>
							</div>
													</div>
</div>
</div>
<!----------product section 2 code end---------->
<!----------mobile view product section 2 code start---------->
<div class="container visible-xs" style="background: #e2e1e1;padding: 6px;">
<div class="row">
														<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12" style="padding: 6px;border-radius: 8px;">
							<h4 style="padding: 0px;font-size: 16px;margin: 0px;font-family: unset;font-weight: 800;" align="left"> Related Product &nbsp;&nbsp; 
							<a href="sub_category.php?serviceid_main=145&serviceid=8" style="color: #fff;background: #005699;padding: 0px 8px;float: right;font-weight: 600;font-size: 14px;">View All</a>
							</h4>
							</div>
														<div class="col-xs-6 " style="text-align: center;padding-bottom: 15px;padding-top: 15px;background: #ffffff;font-size: 12px;border-bottom: 1px solid #e2e1e1;border-right: 1px solid #e2e1e1;">
																<a href="product.php?productid=256">
								<img src="productimage/0051jPUwqQTFL._AC_UY218_.jpg" style="width:100%;height:170px;" />
								</a>
																<a href="product.php?productid=256">
								<p style="color: #005699 !important;text-transform: capitalize;font-weight: 600;overflow: hidden !important;line-height: 16px !important;height: 35px !important;">Dell Inspiron</p>
								<p style="color: #000 !important; text-transform: capitalize;font-weight: 600;">Rs. 53100</p>
								</a>
								<p class="btn btn-danger" style="font-size: 12px;padding: 5px 8px 3px;">
								<a href="product.php?productid=256" style="color:#fff !important; ">View More</a>
								</p>
							</div>
														<div class="col-xs-6 " style="text-align: center;padding-bottom: 15px;padding-top: 15px;background: #ffffff;font-size: 12px;border-bottom: 1px solid #e2e1e1;border-right: 1px solid #e2e1e1;">
																<a href="product.php?productid=255">
								<img src="productimage/00510FkxcRipS._AC_UY218_.jpg" style="width:100%;height:170px;" />
								</a>
																<a href="product.php?productid=255">
								<p style="color: #005699 !important;text-transform: capitalize;font-weight: 600;overflow: hidden !important;line-height: 16px !important;height: 35px !important;">Dell Inspiron 3502 15.6" (39.62 Cms) HD Display Laptop (Pentium Silver N5030 / 4GB / 256GB SSD / Integrated Graphics / Win 10 + MSO / Accent Black) D560427WIN9BE</p>
								<p style="color: #000 !important; text-transform: capitalize;font-weight: 600;">Rs. 50740</p>
								</a>
								<p class="btn btn-danger" style="font-size: 12px;padding: 5px 8px 3px;">
								<a href="product.php?productid=255" style="color:#fff !important; ">View More</a>
								</p>
							</div>
														<div class="col-xs-6 " style="text-align: center;padding-bottom: 15px;padding-top: 15px;background: #ffffff;font-size: 12px;border-bottom: 1px solid #e2e1e1;border-right: 1px solid #e2e1e1;">
																<a href="product.php?productid=243">
								<img src="productimage/051jPUwqQTFL._AC_UY218_.jpg" style="width:100%;height:170px;" />
								</a>
																<a href="product.php?productid=243">
								<p style="color: #005699 !important;text-transform: capitalize;font-weight: 600;overflow: hidden !important;line-height: 16px !important;height: 35px !important;">Dell Inspiron 3502 15.6" (39.62 cms) HD Display Laptop (Pentium Silver N5030 / 4GB / 256GB SSD / Integrated Graphics / Win 10 + MSO / Accent Black) D560427WIN9BE</p>
								<p style="color: #000 !important; text-transform: capitalize;font-weight: 600;">Rs. 41300</p>
								</a>
								<p class="btn btn-danger" style="font-size: 12px;padding: 5px 8px 3px;">
								<a href="product.php?productid=243" style="color:#fff !important; ">View More</a>
								</p>
							</div>
														<div class="col-xs-6 " style="text-align: center;padding-bottom: 15px;padding-top: 15px;background: #ffffff;font-size: 12px;border-bottom: 1px solid #e2e1e1;border-right: 1px solid #e2e1e1;">
																<a href="product.php?productid=242">
								<img src="productimage/0510FkxcRipS._AC_UY218_.jpg" style="width:100%;height:170px;" />
								</a>
																<a href="product.php?productid=242">
								<p style="color: #005699 !important;text-transform: capitalize;font-weight: 600;overflow: hidden !important;line-height: 16px !important;height: 35px !important;">Lenovo V14 AMD Ryzen 3 3250U 14.1-inch HD Laptop (8GB/1TB/Windows 10/AMD Radeon Graphics/Grey/1.85Kg)</p>
								<p style="color: #000 !important; text-transform: capitalize;font-weight: 600;">Rs. 37760</p>
								</a>
								<p class="btn btn-danger" style="font-size: 12px;padding: 5px 8px 3px;">
								<a href="product.php?productid=242" style="color:#fff !important; ">View More</a>
								</p>
							</div>
							</div>
</div>
<!----------mobile view product section 2 code end---------->












<!----------category section 4 code start---------->
<div class="container" style="background: #e2e1e1;padding: 6px;">
<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " style="padding: 0px;">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " style="padding:0px;">
							<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12" style="padding: 6px;border-radius: 8px;">
							<h4 style="padding: 0px;font-size: 16px;margin: 0px;font-family: unset;font-weight: 800;" align="left">Discover By Categories</h4>
							</div>
														<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 " style="text-align: center;padding: 6px;background: #ffffff;font-size: 12px;border-right: 2px solid #e2e1e1;border-bottom: 2px solid #e2e1e1;">
								<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 " style="padding:0px;">
								<img src="adds/17.jpg" style="width:100%;height:113px;padding-right: 6px;" />
								</div>
								<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 " style="padding:0px;text-align: left;">
									<a href="Services.php?serviceid=145">
									<p style="color: #005699 !important;text-transform: capitalize;overflow: hidden !important;line-height: 16px !important;font-size: 14px;font-weight: bold;padding-bottom: 10px;height: 26px;">Electronics</p>
									</a>
																		<a href="sub_category.php?serviceid_main=145&serviceid=3">
									<p style="height: 17px;color: #005699 !important;text-transform: capitalize;font-weight: 600;overflow: hidden !important;line-height: 16px !important;">Desktop </p>
									</a>
																		<a href="sub_category.php?serviceid_main=145&serviceid=8">
									<p style="height: 17px;color: #005699 !important;text-transform: capitalize;font-weight: 600;overflow: hidden !important;line-height: 16px !important;">Laptop</p>
									</a>
																	</div>
							</div>
														<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 " style="text-align: center;padding: 6px;background: #ffffff;font-size: 12px;border-right: 2px solid #e2e1e1;border-bottom: 2px solid #e2e1e1;">
								<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 " style="padding:0px;">
								<img src="adds/1.jpg" style="width:100%;height:113px;padding-right: 6px;" />
								</div>
								<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 " style="padding:0px;text-align: left;">
									<a href="Services.php?serviceid=148">
									<p style="color: #005699 !important;text-transform: capitalize;overflow: hidden !important;line-height: 16px !important;font-size: 14px;font-weight: bold;padding-bottom: 10px;height: 26px;">Hot Deal To Day</p>
									</a>
																		<a href="sub_category.php?serviceid_main=148&serviceid=6">
									<p style="height: 17px;color: #005699 !important;text-transform: capitalize;font-weight: 600;overflow: hidden !important;line-height: 16px !important;">Professional Bag</p>
									</a>
																	</div>
							</div>
														<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 " style="text-align: center;padding: 6px;background: #ffffff;font-size: 12px;border-right: 2px solid #e2e1e1;border-bottom: 2px solid #e2e1e1;">
								<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 " style="padding:0px;">
								<img src="adds/16.jpg" style="width:100%;height:113px;padding-right: 6px;" />
								</div>
								<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 " style="padding:0px;text-align: left;">
									<a href="Services.php?serviceid=149">
									<p style="color: #005699 !important;text-transform: capitalize;overflow: hidden !important;line-height: 16px !important;font-size: 14px;font-weight: bold;padding-bottom: 10px;height: 26px;">New Products</p>
									</a>
																		<a href="sub_category.php?serviceid_main=149&serviceid=7">
									<p style="height: 17px;color: #005699 !important;text-transform: capitalize;font-weight: 600;overflow: hidden !important;line-height: 16px !important;">Electronics</p>
									</a>
																	</div>
							</div>
														<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 " style="text-align: center;padding: 6px;background: #ffffff;font-size: 12px;border-right: 2px solid #e2e1e1;border-bottom: 2px solid #e2e1e1;">
								<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 " style="padding:0px;">
								<img src="adds/108_Abraxas_Lifestyle_JPG.jpg" style="width:100%;height:113px;padding-right: 6px;" />
								</div>
								<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 " style="padding:0px;text-align: left;">
									<a href="Services.php?serviceid=150">
									<p style="color: #005699 !important;text-transform: capitalize;overflow: hidden !important;line-height: 16px !important;font-size: 14px;font-weight: bold;padding-bottom: 10px;height: 26px;">Lifestyle</p>
									</a>
																		<a href="sub_category.php?serviceid_main=150&serviceid=9">
									<p style="height: 17px;color: #005699 !important;text-transform: capitalize;font-weight: 600;overflow: hidden !important;line-height: 16px !important;">Women</p>
									</a>
																		<a href="sub_category.php?serviceid_main=150&serviceid=10">
									<p style="height: 17px;color: #005699 !important;text-transform: capitalize;font-weight: 600;overflow: hidden !important;line-height: 16px !important;">Men</p>
									</a>
																		<a href="sub_category.php?serviceid_main=150&serviceid=11">
									<p style="height: 17px;color: #005699 !important;text-transform: capitalize;font-weight: 600;overflow: hidden !important;line-height: 16px !important;">Bedroom</p>
									</a>
																		<a href="sub_category.php?serviceid_main=150&serviceid=12">
									<p style="height: 17px;color: #005699 !important;text-transform: capitalize;font-weight: 600;overflow: hidden !important;line-height: 16px !important;">Toys & Games</p>
									</a>
																	</div>
							</div>
													</div>
                </div>
</div>
</div>
<!----------category section 4 code end---------->







<!----------category section 5 code start---------->
<div class="container" style="background: #e2e1e1;padding: 6px;">
<div class="row">
				<div class="col-lg-12" style="padding: 0px;">
						<div class="col-lg-12 col-md-12 col-sm-12" style="padding:0px;background: #f5f5f5;">
							<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12" style="padding:0px;background: #e2e1e1;">
							<h4 style="padding: 0px;font-size: 16px;margin: 0px;font-family: unset;font-weight: 800;" align="left">Our Brands</h4>
							</div>
								<marquee direction="scroll" onMouseOut="start();" onMouseOver="stop();" style=""> 
								<table style="width:100%;">
								<tr>
																<td style="background: #fff;padding: 5px;">
								<table style="width:150px; height:95px; padding:5px;border: 1px solid #d2d2d2;">
								<tr><td><img src="brand/2.jpg" style="width:150px; height: 95px;padding:5px;"></td></tr>
								</table>
								</td>
																<td style="background: #fff;padding: 5px;">
								<table style="width:150px; height:95px; padding:5px;border: 1px solid #d2d2d2;">
								<tr><td><img src="brand/3.jpg" style="width:150px; height: 95px;padding:5px;"></td></tr>
								</table>
								</td>
																<td style="background: #fff;padding: 5px;">
								<table style="width:150px; height:95px; padding:5px;border: 1px solid #d2d2d2;">
								<tr><td><img src="brand/4.jpg" style="width:150px; height: 95px;padding:5px;"></td></tr>
								</table>
								</td>
																<td style="background: #fff;padding: 5px;">
								<table style="width:150px; height:95px; padding:5px;border: 1px solid #d2d2d2;">
								<tr><td><img src="brand/5.jpg" style="width:150px; height: 95px;padding:5px;"></td></tr>
								</table>
								</td>
																<td style="background: #fff;padding: 5px;">
								<table style="width:150px; height:95px; padding:5px;border: 1px solid #d2d2d2;">
								<tr><td><img src="brand/6.jpg" style="width:150px; height: 95px;padding:5px;"></td></tr>
								</table>
								</td>
																<td style="background: #fff;padding: 5px;">
								<table style="width:150px; height:95px; padding:5px;border: 1px solid #d2d2d2;">
								<tr><td><img src="brand/7.jpg" style="width:150px; height: 95px;padding:5px;"></td></tr>
								</table>
								</td>
																<td style="background: #fff;padding: 5px;">
								<table style="width:150px; height:95px; padding:5px;border: 1px solid #d2d2d2;">
								<tr><td><img src="brand/2 (1).jpg" style="width:150px; height: 95px;padding:5px;"></td></tr>
								</table>
								</td>
																<td style="background: #fff;padding: 5px;">
								<table style="width:150px; height:95px; padding:5px;border: 1px solid #d2d2d2;">
								<tr><td><img src="brand/2 (2).jpg" style="width:150px; height: 95px;padding:5px;"></td></tr>
								</table>
								</td>
																<td style="background: #fff;padding: 5px;">
								<table style="width:150px; height:95px; padding:5px;border: 1px solid #d2d2d2;">
								<tr><td><img src="brand/tally logo.png" style="width:150px; height: 95px;padding:5px;"></td></tr>
								</table>
								</td>
																</tr>
								</table>
								</marquee>
						</div>
                </div>
</div>
</div>
<!----------category section 5 code end---------->

	
	
	
	
    


	





<br>
<!----------navi footer section code start---------->
<div class="container-fluid" style="background: #005699;padding: 15px 0px;">
<div class="row">
<div class="container">
				<div class="col-lg-6" style="padding: 0px;">
	                <form method="post">
                    <table style="width:100%;">
                    <tr>
                    <td>
					<input autocomplete="off" type="email" class="form-control" placeholder="Enter your email address" name="email" required >
                    </td>
                    <td>
                    <input type="submit" name="sub" value="SUBSCRIBE" class="btn btn-warning">
                    </td>
                    </tr>
                    </table>
                    </form>
                </div>
				<div class="col-lg-6" style="padding: 0px;padding-top: 4px;text-align: right;">
					<span style="color:#fff;"><strong>Stay Connect</strong></span>
                    <img src="img/f.png" /> <img src="img/t.png" /> <img src="img/g.png" /> <img src="img/insta.png" /> <img src="img/u.png" /> 
                </div>
</div>
</div>
</div>
<!----------navi footer section code end---------->
<br>




<div class="container" style="padding:0px;font-size: 14px;">
<div class="row">
				<div class="col-sm-3 col-md-3 col-lg-3">
                        <p><img src="img/logo.png"  class="imgddd" style="width:175px;"/></p>                
                        		
                        <p style="height:96px;overflow: hidden;">SB Computers is recognized as the fastest-growing startup in India. We are a mobile marketplace for local services. We help customers hire trusted professionals for all their service needs. We are staffed with young, passionate people working tirelessly to make a difference in the lives of people by catering to their service needs at their doorsteps.

We provide housekeeping services which consist of Plumbers, Electricians, Carpenters, Cleaning and Pest Control. We also provide personal services like beauty, spa, mobile and other appliance repairs etc. Be it getting a plumbing job done, decorating your home or getting candid photos of your wedding clicked, we are a sure shot destination for your service needs.</p><a href="about.php" style="color:#005699;">Read More...</a>
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3">
                        <h2 style="color: #005699;text-transform: uppercase;font-size: 15px;padding-left: 20px;">Services</h2>
                       <ul>
                                                         <li><a href="Services.php?serviceid=145" style="text-transform: capitalize;">Electronics</a></li>
                                                          <li><a href="Services.php?serviceid=148" style="text-transform: capitalize;">Hot Deal To Day</a></li>
                                                          <li><a href="Services.php?serviceid=149" style="text-transform: capitalize;">New Products</a></li>
                                                          <li><a href="Services.php?serviceid=150" style="text-transform: capitalize;">Lifestyle</a></li>
                             					  
                          </ul>               
                </div>
				<div class="col-sm-3 col-md-3 col-lg-3">
                        <h2 style="color: #005699;text-transform: uppercase;font-size: 15px;padding-left: 20px;">Quick Link</h2> 
                        <ul>
                             <li><a href="about.php">About Us</a></li>
                             <li><a href="Contact.php">Contact Us</a></li>
                             <!--
                             <li><a href="bookingsearch.php">Booking Search</a></li>
                             -->
                            <li><a href="Privacy-Policy.php">Privacy Policy</a> </li>
                            <li><a href="Terms-&-Conditions.php">Terms & Conditions</a> </li>
                            <li><a href="Disclaimer.php">Disclaimer</a> </li>
                            <li><a href="Refund-Policy.php">Refund Policy</a></li>
                          </ul>               
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3">                
							
						<h2 style="color: #005699;text-transform: uppercase;font-size: 15px;">Contact Support</h2>
						 <p><strong>Address :</strong> Office No. 2, 3rd Floor, Delta City Center, Delta-1,
 Near Green City Hospital, Greater Noida, 
Gautam Buddha Nagar, UP-201310 </p>
						 <p><strong>Phone :</strong> +91-9991446061</p>
						 <p><strong>Email :</strong> info@sbcomputers.in</p>  
				</div>
</div>
</div>




<br>
<div class="container" style="padding:0px;font-size: 14px;background: #f5f5f5;">
<div class="row">
				<div class="col-sm-4 col-md-4 col-lg-4">
                <img src="img/sp.png" style="width:100%;"/>
                </div>
				<div class="col-sm-4 col-md-4 col-lg-4">
                <img src="img/wd.png" style="width:100%;"/>
                </div>
				<div class="col-sm-4 col-md-4 col-lg-4">
                <img src="img/hc.png" style="width:100%;"/>
                </div>
</div>
</div>





<br>
<div class="container" style="padding:0px;font-size: 14px;">
<div class="row">
				<div class="col-sm-7 col-md-7 col-lg-7" style="color:#000;">
                Copyright &copy; 2021 SB Computers. All rights Reserved. Design & Developed by <a href="http://softecitsolutions.com"><strong>Softec IT Solutions</strong></a>
                </div>
				<div class="col-sm-5 col-md-5 col-lg-5">
                <img src="img/pl.png" style="width:100%;"/>
                </div>
</div>
</div>
<br>




<a href="#" class="scrollup hidden-xs"><i class="fa fa-angle-up active" style="background:transparent;"></i></a>
    <script src="js/jquery.min.js"></script>	 
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/stellar.js"></script>
	<script src="plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/nivo-lightbox.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>