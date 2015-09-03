<!DOCTYPE html>
<html>
<head>
	<title>CPI Special Releases</title>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link href="/css/metro.css" rel="stylesheet">
    <link href="/css/metro-icons.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <script src="/js/jquery-2.1.3.min.js"></script>
    <script src="/js/metro.js"></script>
    <script src="/js/ga.js"></script>
</head>
<body class="text-secondary fg-gray">

	<?php
	include("{$_SERVER['DOCUMENT_ROOT']}/news_and_releases/cpi_sr/cpi_functions.php");
	?>

	<div class="margin10 no-margin-top grid condensed">
			 <div id="header">
				 <script> 
					$(document).ready(function(){
					  $("#header").load("/includes/header.html"); 
					});
				</script>
			</div>
			<div class="row cells12 align-justify">
				<div class="cell colspan9 padding10">
					<div style="color:teal">
						<h3  class="text-light">Consumer Price Index (CPI) Special Releases</h3>
					</div>

					<ul class="breadcrumbs">
					    <li><a href="/index.html"><span class="icon mif-home"></span></a></li>
					    <li>2015</li>
					    <li><a href="/news_and_releases/sat_acc/sa_index.html">March 2015 Price Situation in the Cordillera</a></li>
					</ul>
					<hr class="thin bg-grayLighter">
					
					<div class="row cells12 align-left">
					<p class="align-center"><strong>March 2015 Price Situation in the Cordillera</strong></p><br><br><br>
							<div class="tabcontrol" data-role="tabControl">
	                            <ul class="tabs">
	                                <li class="active"><a href="#tab1">Consumer Price Index (CPI)</a></li>
	                                <li><a href="#tab2">CPI by Commodity Groups</a></li>
	                                <li class=""><a href="#tab3">By Commodity Group, Year-on-Year</a></li>
	                                <li><a href="#tab4">By Commodity Group, Month-on-Month</a></li>
	                                <li><a href="#tab5">By Food Items, Year-on-Year</a></li>
	                                <li><a href="#tab6">Explanatory Notes</a></li>
	                            </ul>
	                            <div class="frames bg-grayLight">
	                               
	                            <div class="frame bg-white" id="tab1" style="display: block;">
	                                <p class="align-center"><strong>Consumer Price Index</strong></p><br><br>
	                                <ul>
	                                	<li>The Consumer Price Index of CAR in March, 2015 was 138.3, higher by 3.3 from last year’s 135.0. </li>
	                                	<li>Generally, there was an increase in the CPI of all the provinces due to the increase in the
										average prices of goods and services.</li>
											<div class="padding20"><p class="align-center"><strong>Table 1. Consumer Price Index by Province, CAR: March, 2014 and March, 2015 (2006=100) </strong></p>
	                                		<?php
			                                	generateTable1("table1march2015.csv", "March", "2014", "2015");
	                                		?>
	                                		</div>


	                                	<li>Among provinces, Mt. Province posted the highest CPI at 142.3 followed by Ifugao at
										141.8 and Benguet at 141.1. On the other hand, Abra posted the lowest at 130.0.
										</li>
	                                	<li>In terms of index point change, Benguet reported the highest at 5.1 while Kalinga was
										lowest at 0.3.</li>
	                                	<li>The Consumer Price Index is the general measure of the change in the average retail
										prices of a market basket or collection of goods and services commonly purchased by
										the average Filipino household.
										</li>
	                                </ul>
	                                	<div class="padding20">
											<p class="align-center"><strong>Table 2. . Consumer Price Index by Commodity Group and by Province, CAR: March, 2015 (2006=100)</strong></p>

											<?php
												generateTable2("table2march2015.csv");
											?>
										</div>
                                </div>
                                
                                <div class="frame bg-white" id="tab2" style="display: none;">
                                	<p class="align-center"><strong>CPI by Commodity Groups</strong></p><br><br>
									<ul>
										<li>Among the commodity groups, under Alcoholic Beverages and Tobacco, Abra had the highest consumer price index at 194.8 followed by Kalinga and Benguet at 190.9 and 190.3, respectively.</li> 										
										<li>Food and Non-Alcoholic Beverages came next with Benguet having the most at 156.5 followed by Mt. Province at 151.4. 										
										</li> 									
										<li>Education had the third highest index by commodity group with Mt. Province having the most at 175.5 followed by Kalinga at 157.3.</li> 										
										<li>Communication had the lowest consumer price index. Abra posted the highest index at 111.3 while Apayao had the lowest at 77.7.</li> 										
										<li>Across provinces, Apayao posted the lowest index except for Food and NonAlcoholic Beverages, Alcoholic Beverages and Tobacco, Recreation and Culture; and Restaurants and Miscellaneous Goods and Services. </li> 										
										<li>By index point change, Education recorded the highest change at 6.6 index. This was followed by Alcoholic Beverages and Tobacco and Food and Non-Alcoholic Beverages at 4.7 and 4.4, respectively.
										</li>
										<li>The rest of the commodity groups reported a minimal annual increase in their index
										point change. Transport had a negative percent change.</li>
									</ul>
									<p class="align-center"><img src="/images/cpi/2015/march/Year-on-Year Consumer Price Index by Commodity Group.png"></p>

									<p><strong>Inflation Rate</strong></p>	
									<ul>
										<li>The Inflation Rate of CAR in March, 2015 was 2.4 percent, lower by 0.3 percentage
										points from last year’s Inflation Rate.
										</li>
										<li>Benguet posted the highest rate of 3.7 percent, followed by Apayao and Mt. Province,
										both at 2.0 percent. On the other hand, Kalinga posted the lowest Inflation Rate at
										0.2 percent.</li>
										<li>March, 2015 Inflation Rate in all provinces is lower compared to last year except for
										Benguet that increased in its inflation rate. It showed that the rate of change in the
										average prices in Benguet is fast compared with the provinces that decreased in their
										inflation rates.
										</li>
										<li></li>
									</ul>
									<p class="align-center"><img src="/images/cpi/2015/march/Year-on-Year inflation Rates by province.png"></p>
									
                                </div>



                                <div class="frame bg-white" id="tab3" style="display: none;">
                                	<p class="align-center"><strong>By Commodity Group, Year-on-Year</strong></p><br><br>
									<ul>
										<li>The annual inflation for All Items in the Cordillera was 2.4. Among the regions, CAR
										had the higher annual gains.</li>		

										<li>By commodity, the year-on-year growth of the heavily-weighted Food and NonAlcoholic
										Beverages index in the Cordillera was 3.0 percent. Alcoholic Beverages
										and Tobacco; Clothing and Footwear; Furnishing, Household Equipment and Routine
										Maintenance of the House; Health and Communication decreased in their inflation
										rates. Housing, Water, Electricity, Gas and Other Fuels and Restaurants and
										Miscellaneous Good and Services increased in their inflation rates. Recreation and
										Culture and Education indices remained compared to the previous years’ indices.
										Transport had a negative index although it increased in its inflation rate.
										</li>
									</ul>
									<div class="padding20">
										<p class="align-center"><strong>Table 3. Year-on-Year Inflation Rates by Commodity Groups, CAR: April 2015 and April 2015 (2006 = 100)</strong></p>
										<?php
											generateTable3("table3march2015.csv", "March", "February");
											
										?>
									</div>
                                </div>

                                <div class="frame bg-white" id="tab4" style="display: none;">
                                	<p class="align-center"><strong>By Commodity Group, Month-on-Month</strong></p><br><br>
									<ul>
										<li>In the region, the inflation rate for All Items was at 0.0 percent during the month
										compared to the previous month. The Food and Non-Alcoholic Beverages index also
										decreased at -0.3 percent. There was no change in the inflation rates for the
										following commodity groups: Furnishing, Household Equipment & Routine
										Maintenance of the House, Communication and Education.</li>
									</ul>
									<div class="padding20">
										<p class="padding20"><strong>Table 4. Month-on-Month Inflation Rates by Commodity Groups,
										CAR: March 2015 and February 2015
										(2006 = 100)</strong></p>
										<?php
										
											generateTable4("table4march2015.csv", "March", "February");
											
										?>
									</div>
                                </div>

                                <div class="frame bg-white" id="tab5" style="display: none;">
                          			<p class="align-center"><strong>By Food Items, Year-on-Year </strong></p><br><br>
									<ul>
										<li>Generally, for the year-on-year inflation rates of selected food items for the region,
										there was decrease for some food items. There was an annual increase in the other
										food items. Fruits index resulted in a two-digit value and had the highest increase of
										3.0 in its inflation rate from 11.4% to 14.4%.
										</li>
										<li>Oils and Fats remained in its inflation rate. </li>
									</ul>
									<div class="padding20">
										<p class="align-center"><strong>Table 5. Year-on-Year Inflation Rates of Selected Food Items, CAR: March and February 2015 and 2014 (2006 = 100)</strong></p>
										<?php
											generateTable5("table5march2015.csv", "2015", "2014", "March", "February");
										?>
									</div>
									<p><strong>Purchasing Power of the Peso (PPP)</strong></p>
									<ul>
										<li>TThe value of the peso in CAR dropped to 72 centavos from last year’s 74 centavos.
										Meaning, that market value of goods and services worth 72 centavos in March, 2006
										were bought at one peso in March, 2015.
										</li>
										<li>Compared to March, 2014, the Purchasing Power of the Peso of four provinces
										decreased. Abra and Ifugao remained in their PPP.
										</li>
										<li>Compared to March, 2014, the Purchasing Power of the Peso of four provinces
										decreased. Abra and Ifugao remained in their PPP.
										</li>
									</ul>
									<p class="align-center"><img src="/images/cpi/2015/march/Purchasing Power of the Peso.png"></p>
                                </div>

                                <div class="frame bg-white" id="tab6" style="display: none;">

	                                <p class="align-center"><strong>Explanatory Notes</strong></p><br><br>
	                                	<p><em><strong>Consumer price Index (CPI)</strong></em> is a general measure of the change in the average retail prices of a market basket or collection of goods and services commonly purchased by the average Filipino household.</p>

	                                	<p><em><strong>Inflation Rate (IR)</strong></em> is the rate of change in the average price level between two periods (year on year/month-onmonth as measured by the CPI).</p>

	                                	<p><em><strong>Purchasing Power of the Peso (PPP)</strong></em> measures how much the peso in the reference year is worth in another year.</p>

	                                	<p><em><strong>Base Year (BY)</strong></em> is the reference point of the index number series, at which the index number is set to zero.</p>

	                                	<p><em><strong>Market Basket (MB)</strong></em> ) is a sample of goods and services used to represent all goods and services produced or bought.</p>
                                </div>
                            </div>
                        </div>
					
                        <hr class="thin bg-grayLighter">

                        <div class="tile-container align-left">
							<a href="/pdf/cpi_sr/CPISR_March%202015.pdf">
						        <div class="bg-darkTeal tile tile-small" data-role="tile">
						            <div class="tile-content iconic">
										<span class="icon mif-file-pdf fg-white mif-4x" data-role="hint"
										data-hint-background="bg-white"
									    data-hint-color="fg-black"
									    data-hint-mode="4"
									    data-hint="Download PDF|March 2015 Price Situation in the Cordillera"
										></span>
									</div>
						        </div>
					         </a> 
						</div>
					<p><strong>Note: All publications are in PDF Files. Please read Terms of Use of PSA publications.</strong></p>
					</div>
					</div>

				<div class="cell colspan3 padding10">
					<div id="archive">
					 <script> 
						$(document).ready(function(){
						  $("#archive").load("/includes/cpi-navigation.html"); 
						});
					</script>
				</div>
				</div>
			</div>
			<!-- end of content -->

			<!-- footer -->
			<div id="footer">
				 <script> 
					$(function(){
					  $("#footer").load("/includes/footer.html"); 
					});
				</script>
			</div>
	</div> <!-- end of grid div -->	
</body>
</html>
<script>
	function showDialog(id){
		var dialog = $(id).data('dialog');
		dialog.open();
	}
</script>

<div data-role="dialog" data-overlay="true" data-overlay-color="op-dark" id="under-cons" 
data-close-button="true" class="padding20" 
data-height="auto" data-width="50%">
<div class="bg-darkTeal padding10 fg-white"><h2 class="text-light">Maintenance</h2></div>
	<div class="margin50">
		<h3 class="text-light">Under construction... <span class="mif-spinner2 mif-ani-pulse"></span></h3>
		<h5 class="text-light">Watch out for updates.</h5>
	</div>
</div>
