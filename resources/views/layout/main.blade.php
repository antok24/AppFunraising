<section role="main" class="content-body">
					<header class="page-header">
						<h2>HOME</h2>
					
						
					</header>

					<!-- start: page -->
					<div class="row">
						<div class="col-md-6 col-lg-12 col-xl-6">
							<section class="panel">
								<div class="panel-body">
									<div class="row">
										<div class="col-lg-8">
											<div class="chart-data-selector" id="salesSelectorWrapper">
												<h2>
													Sales:
													<strong>
														<select class="form-control" id="salesSelector">
															<option value="Porto Admin" selected>Porto Admin</option>
															<option value="Porto Drupal" >Porto Drupal</option>
															<option value="Porto Wordpress" >Porto Wordpress</option>
														</select>
													</strong>
												</h2>
					
												<div id="salesSelectorItems" class="chart-data-selector-items mt-sm">
													<!-- Flot: Sales Porto Admin -->
													<div class="chart chart-sm" data-sales-rel="Porto Admin" id="flotDashSales1" class="chart-active"></div>
													<script>
					
														var flotDashSales1Data = [{
														    data: [
														        ["Jan", 140],
														        ["Feb", 240],
														        ["Mar", 190],
														        ["Apr", 140],
														        ["May", 180],
														        ["Jun", 320],
														        ["Jul", 270],
														        ["Aug", 180]
														    ],
														    color: "#0088cc"
														}];
					
														// See: assets/javascripts/dashboard/examples.dashboard.js for more settings.
					
													</script>
					
													<!-- Flot: Sales Porto Drupal -->
													<div class="chart chart-sm" data-sales-rel="Porto Drupal" id="flotDashSales2" class="chart-hidden"></div>
													<script>
					
														var flotDashSales2Data = [{
														    data: [
														        ["Jan", 240],
														        ["Feb", 240],
														        ["Mar", 290],
														        ["Apr", 540],
														        ["May", 480],
														        ["Jun", 220],
														        ["Jul", 170],
														        ["Aug", 190]
														    ],
														    color: "#2baab1"
														}];
					
														// See: assets/javascripts/dashboard/examples.dashboard.js for more settings.
					
													</script>
					
													<!-- Flot: Sales Porto Wordpress -->
													<div class="chart chart-sm" data-sales-rel="Porto Wordpress" id="flotDashSales3" class="chart-hidden"></div>
													<script>
					
														var flotDashSales3Data = [{
														    data: [
														        ["Jan", 840],
														        ["Feb", 740],
														        ["Mar", 690],
														        ["Apr", 940],
														        ["May", 1180],
														        ["Jun", 820],
														        ["Jul", 570],
														        ["Aug", 780]
														    ],
														    color: "#734ba9"
														}];
					
														// See: assets/javascripts/dashboard/examples.dashboard.js for more settings.
					
													</script>
												</div>
					
											</div>
										</div>
										<div class="col-lg-4 text-center">
											<h2 class="panel-title mt-md">Sales Goal</h2>
											<div class="liquid-meter-wrapper liquid-meter-sm mt-lg">
												<div class="liquid-meter">
													<meter min="0" max="100" value="35" id="meterSales"></meter>
												</div>
												<div class="liquid-meter-selector" id="meterSalesSel">
													<a href="#" data-val="35" class="active">Monthly Goal</a>
													<a href="#" data-val="28">Annual Goal</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
						
					</div>
					
					
					<!-- end: page -->
				</section>
			</div>