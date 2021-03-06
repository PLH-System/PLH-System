<?php
	/**
	 * HMS Class Interface
	 * Digunakan untuk membuat Interface Apps
	 **/
	require "ConfigApp.php";
	class InterfaceApp extends ConfigApp{
		
		public function openHTML(){
			$oHTML = "<!DOCTYPE html>
						<html lang='en'>
							<head>
							
					 ";
			echo $oHTML;
		}
		
		public function closeHTML(){
			$cHTML = "
						</html>
			         ";
			echo $cHTML;
		}
		
		public function openMeta(){
			$oMeta = "
						<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no'/>
						<meta charset='UTF-8'>
						<meta name='description' content='Hotel Managemen System' />
						<meta name='keywords' content='admin,HMS' />
						<meta name='author' content='Steelcoders' />
			         ";
			echo $oMeta;
		}
		
		/**
		 * Setting CSS <Stylesheet>
		 * -----------------------------------------------
		 * $Pagelain ==> Digunakan jika halaman yang akan dibuat berbeda directory
		 **/
		public function setStyle($PageLain = null){
			if($PageLain != null){
				$style = "						
						
						<link type='text/css' rel='stylesheet' href='../assets/plugins/materialize/css/materialize.min.css'/>
						<link href='http://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
						<link href='../assets/plugins/material-preloader/css/materialPreloader.min.css' rel='stylesheet'> 
						
						<link href='../assets/css/alpha.css' rel='stylesheet' type='text/css'/>
						<link href='../assets/css/custom.css' rel='stylesheet' type='text/css'/>
						</head>
			         ";
			}
			else{
				$style = "						
						<link type='text/css' rel='stylesheet' href='assets/plugins/materialize/css/materialize.min.css'/>
						<link href='http://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>    
						<link href='assets/plugins/metrojs/MetroJs.min.css' rel='stylesheet'>
						<link href='assets/plugins/weather-icons-master/css/weather-icons.min.css' rel='stylesheet'>
						<!--<link href='assets/css/alpha.min.css' rel='stylesheet' type='text/css'/>-->
						<link href='assets/css/alpha.css' rel='stylesheet' type='text/css'/>
						<link href='assets/css/custom.css' rel='stylesheet' type='text/css'/>
						
						</head>
			         ";	
			}
			
			echo $style;
		}
		
		public function setTitle($title, $favicon = null){
			$createTitle = "
								<title>".$title."</title>
								<link rel='shortcut icon' href='$favicon' />
			               ";
			echo $createTitle;
		}
		
		public function setHead($theme, $cols){
			$createHead = "";
			return $createHead;
		}
		
		public function setIcon($prefix, $icon){
			$createIcon = "<i class='".$prefix." ".$icon."'></i>";
			return $createIcon;
		}
		
		
		
		public function openBody($appsName, $appsActive = null){
			$createBody = "
							<body>
								<div class='loader-bg'></div>
								<div class='loader'>
									<div class='preloader-wrapper big active'>
										<div class='spinner-layer spinner-red'>
											<div class='circle-clipper left'>
												<div class='circle'></div>
											</div><div class='gap-patch'>
											<div class='circle'></div>
											</div><div class='circle-clipper right'>
											<div class='circle'></div>
											</div>
										</div>
										<div class='spinner-layer spinner-teal lighten-1'>
											<div class='circle-clipper left'>
												<div class='circle'></div>
											</div><div class='gap-patch'>
											<div class='circle'></div>
											</div><div class='circle-clipper right'>
											<div class='circle'></div>
											</div>
										</div>
										<div class='spinner-layer spinner-yellow'>
											<div class='circle-clipper left'>
												<div class='circle'></div>
											</div><div class='gap-patch'>
											<div class='circle'></div>
											</div><div class='circle-clipper right'>
											<div class='circle'></div>
											</div>
										</div>
										<div class='spinner-layer spinner-green'>
											<div class='circle-clipper left'>
												<div class='circle'></div>
											</div><div class='gap-patch'>
											<div class='circle'></div>
											</div><div class='circle-clipper right'>
											<div class='circle'></div>
											</div>
										</div>
									</div>
								</div>
								<div class='mn-content fixed-sidebar'>
									<header class='mn-header navbar-fixed'>
										<nav class='indigo darken-4'>
											<div class='nav-wrapper row'>
												<section class='material-design-hamburger navigation-toggle'>
													<a href='javascript:void(0)' data-activates='slide-out' class='button-collapse show-on-large material-design-hamburger__icon'>
														<span class='material-design-hamburger__layer'></span>
													</a>
												</section>
												<div class='header-title col s6 m6'>      
													<span class='chapter-title'>".$appsName." - ".$appsActive. "</span>
												</div>
												<!--
												<form class='left search col s6 hide-on-small-and-down'>
													<div class='input-field'>
														<input id='search' type='search' placeholder='Search' autocomplete='off'>
														<label for='search'><i class='material-icons search-icon'>search</i></label>
													</div>
													<a href='javascript: void(0)' class='close-search'><i class='material-icons'>close</i></a>
												</form>
												-->
												<ul class='right col s9 m3 nav-right-menu'>
													<li><a href='javascript:void(0)' data-activates='chat-sidebar' class='chat-button show-on-large'><i class='material-icons'>more_vert</i></a></li>
													<li class='hide-on-small-and-down'><a href='javascript:void(0)' data-activates='dropdown1' class='dropdown-button dropdown-right show-on-large'><i class='material-icons'>notifications_none</i><span class='badge'>5</span></a></li>
													<li class='hide-on-med-and-up'><a href='javascript:void(0)' class='search-toggle'><i class='material-icons'>search</i></a></li>
												</ul>

												<!-- Box Notification -->
												<ul id='dropdown1' class='dropdown-content notifications-dropdown'>
													<li class='notificatoins-dropdown-container'>
														<ul>
															<li class='notification-drop-title'>Today</li>
															<li>
																<a href='#!'>
																<div class='notification'>
																	<div class='notification-icon circle cyan'><i class='material-icons'>done</i></div>
																	<div class='notification-text'><p><b>PLH System</b> On-Processing...</p><span>7 min ago</span></div>
																</div>
																</a>
															</li>
															<li>
																<a href='#!'>
																<div class='notification'>
																	<div class='notification-icon circle deep-purple'><i class='material-icons'>cached</i></div>
																	<div class='notification-text'><p><b>Tom</b> updated status</p><span>14 min ago</span></div>
																</div>
																</a>
															</li>
															<li>
																<a href='#!'>
																<div class='notification'>
																	<div class='notification-icon circle red'><i class='material-icons'>delete</i></div>
																	<div class='notification-text'><p><b>Amily Lee</b> deleted account</p><span>28 min ago</span></div>
																</div>
																</a>
															</li>
															<li>
																<a href='#!'>
																<div class='notification'>
																	<div class='notification-icon circle cyan'><i class='material-icons'>person_add</i></div>
																	<div class='notification-text'><p><b>Tom Simpson</b> registered</p><span>2 hrs ago</span></div>
																</div>
																</a>
															</li>
															<li>
																<a href='#!'>
																<div class='notification'>
																	<div class='notification-icon circle green'><i class='material-icons'>file_upload</i></div>
																	<div class='notification-text'><p>Finished uploading files</p><span>4 hrs ago</span></div>
																</div>
																</a>
															</li>
															<li class='notification-drop-title'>Yestarday</li>
															<li>
																<a href='#!'>
																<div class='notification'>
																	<div class='notification-icon circle green'><i class='material-icons'>security</i></div>
																	<div class='notification-text'><p>Security issues fixed</p><span>16 hrs ago</span></div>
																</div>
																</a>
															</li>
															<li>
																<a href='#!'>
																<div class='notification'>
																	<div class='notification-icon circle indigo'><i class='material-icons'>file_download</i></div>
																	<div class='notification-text'><p>Finished downloading files</p><span>22 hrs ago</span></div>
																</div>
																</a>
															</li>
															<li>
																<a href='#!'>
																<div class='notification'>
																	<div class='notification-icon circle cyan'><i class='material-icons'>code</i></div>
																	<div class='notification-text'><p>Code changes were saved</p><span>1 day ago</span></div>
																</div>
																</a>
															</li>
														</ul>
													</li>
												</ul>
											</div>
										</nav>
									</header>
									<!-- Batas Notification -->

									<!-- Kotak Setting dan Chat -->
									<aside id='chat-sidebar' class='side-nav white'>
										<div class='side-nav-wrapper'>
											<div class='col s12'>
												<ul class='tabs tab-demo' style='width: 100%;'>
													<li class='tab col s3'><a href='#sidebar-chat-tab' class='active'>chat</a></li>
													<li class='tab col s3'><a href='#sidebar-more-tab'>settings</a></li>
												</ul>
											</div>
											<div id='sidebar-chat-tab' class='col s12 sidebar-messages right-sidebar-panel'>
												<p class='right-sidebar-heading'>CHAT LIST</p>
												<div class='chat-list'>
													<a href='javascript:void(0)' class='chat-message'>
														<div class='chat-item'>
															<div class='chat-item-image'>
																<img src='assets/images/profile-image.png' class='circle' alt=''>
															</div>
															<div class='chat-item-info'>
																<p class='chat-name'>John Doe</p>
																<span class='chat-message'>Hello</span>
															</div>
														</div>
													</a>
													<a href='javascript:void(0)' class='chat-message'>
														<div class='chat-item'>
															<div class='chat-item-image'>
																<img src='assets/images/profile-image-1.png' class='circle' alt=''>
															</div>
															<div class='chat-item-info'>
																<p class='chat-name'>Tom Simpson</p>
																<span class='chat-message'>How are you?</span>
															</div>
														</div>
													</a>
													<a href='javascript:void(0)' class='chat-message'>
														<div class='chat-item'>
															<div class='chat-item-image'>
																<img src='assets/images/profile-image-3.jpg' class='circle' alt=''>
															</div>
															<div class='chat-item-info'>
																<p class='chat-name'>Alan Grey</p>
																<span class='chat-message'>Call me later</span></div>
														</div>
													</a>
													<a href='javascript:void(0)' class='chat-message'>
														<div class='chat-item'>
															<div class='chat-item-image'>
																<img src='assets/images/profile-image.png' class='circle' alt=''>
															</div>
															<div class='chat-item-info'>
																<p class='chat-name'>Michael Fisher</p>
																<span class='chat-message'>How's it going?</span>
															</div>
														</div>
													</a>
													<a href='javascript:void(0)' class='chat-message'>
														<div class='chat-item'>
															<div class='chat-item-image'>
																<img src='assets/images/profile-image-1.png' class='circle' alt=''>
															</div>
															<div class='chat-item-info'>
																<p class='chat-name'>Amily Lee</p>
																<span class='chat-message'>We're good</span>
															</div>
														</div>
													</a>
													<a href='javascript:void(0)' class='chat-message'>
														<div class='chat-item'>
															<div class='chat-item-image'>
																<img src='assets/images/profile-image.png' class='circle' alt=''>
															</div>
															<div class='chat-item-info'>
																<p class='chat-name'>Sandra Smith</p>
																<span class='chat-message'>See you later!</span>
															</div>
														</div>
													</a>
													<a href='javascript:void(0)' class='chat-message'>
														<div class='chat-item'>
															<div class='chat-item-image'>
																<img src='assets/images/profile-image-3.jpg' class='circle' alt=''>
															</div>
															<div class='chat-item-info'>
																<p class='chat-name'>Sandra Smith</p>
																<span class='chat-message'>Can we meet?</span>
															</div>
														</div>
													</a>
												</div>
												<div class='chat-sidebar-options'>
													<a href='#' class='left'><i class='material-icons'>edit</i></a>
													<a href='#' class='right'><i class='material-icons'>settings</i></a>
												</div>
											</div>
											<div id='sidebar-more-tab' class='col s12 sidebar-more right-sidebar-panel'>
												<p class='right-sidebar-heading'>SYSTEM</p>
												<div class='settings-list'>
													<div class='setting-item'>
														<div class='setting-text'>Notifications</div>
														<div class='setting-set'>
															<div class='switch'>
																<label>
																	<input type='checkbox' checked>
																	<span class='lever'></span>
																</label>
															</div>
														</div>
													</div>
													<div class='setting-item'>
														<div class='setting-text'>Quick Results</div>
														<div class='setting-set'>
															<div class='switch'>
																<label>
																	<input type='checkbox' checked>
																	<span class='lever'></span>
																</label>
															</div>
														</div>
													</div>
													<div class='setting-item'>
														<div class='setting-text'>Auto Updates</div>
														<div class='setting-set'>
															<div class='switch'>
																<label>
																	<input type='checkbox'>
																	<span class='lever'></span>
																</label>
															</div>
														</div>
													</div>
												</div>
												<p class='right-sidebar-heading'>ACCOUNT</p>
												<div class='settings-list'>
													<div class='setting-item'>
														<div class='setting-text'>Offline Mode</div>
														<div class='setting-set'>
															<div class='switch'>
																<label>
																	<input type='checkbox'>
																	<span class='lever'></span>
																</label>
															</div>
														</div>
													</div>
													<div class='setting-item'>
														<div class='setting-text'>Location</div>
														<div class='setting-set'>
															<div class='switch'>
																<label>
																	<input type='checkbox'>
																	<span class='lever'></span>
																</label>
															</div>
														</div>
													</div>
													<div class='setting-item'>
														<div class='setting-text'>Show Offline Users</div>
														<div class='setting-set'>
															<div class='switch'>
																<label>
																	<input type='checkbox'>
																	<span class='lever'></span>
																</label>
															</div>
														</div>
													</div>
													<div class='setting-item'>
														<div class='setting-text'>Save History</div>
														<div class='setting-set'>
															<div class='switch'>
																<label>
																	<input type='checkbox'>
																	<span class='lever'></span>
																</label>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</aside>
									<!-- Batas Kotak Setting -->

									<!-- Kotak Chat -->
									<aside id='chat-messages' class='side-nav white'>
										<p class='sidebar-chat-name'>PLH Chat<a href='#' data-activates='chat-messages' class='chat-message-link'><i class='material-icons'>keyboard_arrow_right</i></a></p>
										<div class='messages-container'>
											<div class='message-wrapper them'>
												<div class='circle-wrapper'><img src='assets/images/profile-image-1.png' class='circle' alt=''></div>
												<div class='text-wrapper'>Lorem Ipsum</div>
											</div>
											<div class='message-wrapper me'>
												<div class='circle-wrapper'><img src='assets/images/profile-image-3.jpg' class='circle' alt=''></div>
												<div class='text-wrapper'>Integer in faucibus diam?</div>
											</div>
											<div class='message-wrapper them'>
												<div class='circle-wrapper'><img src='assets/images/profile-image-1.png' class='circle' alt=''></div>
												<div class='text-wrapper'>Vivamus quis neque volutpat, hendrerit justo vitae, suscipit dui</div>
											</div>
											<div class='message-wrapper me'>
												<div class='circle-wrapper'><img src='assets/images/profile-image-3.jpg' class='circle' alt=''></div>
												<div class='text-wrapper'>Suspendisse condimentum tortor et lorem pretium</div>
											</div>
											<div class='message-wrapper them'>
												<div class='circle-wrapper'><img src='assets/images/profile-image-1.png' class='circle' alt=''></div>
												<div class='text-wrapper'>dolore eu fugiat nulla pariatur</div>
											</div>
											<div class='message-wrapper me'>
												<div class='circle-wrapper'><img src='assets/images/profile-image-3.jpg' class='circle' alt=''></div>
												<div class='text-wrapper'>Duis maximus leo eget massa porta</div>
											</div>
										</div>
										<div class='message-compose-box'>
											<div class='input-field'>
												<input placeholder='Write message' id='message_compose' type='text'>
											</div>
										</div>
									</aside>
									<!-- Batas Kotak Chat -->
			              ";
			echo $createBody;
		}
		
		public function closeBody(){
			$createCBody = "
								</div> 
								<div class='left-sidebar-hover'></div>


								<!-- Javascripts -->
								<script src='assets/plugins/jquery/jquery-2.2.0.min.js'></script>
								<script src='assets/plugins/materialize/js/materialize.min.js'></script>
								<script src='assets/plugins/material-preloader/js/materialPreloader.min.js'></script>
								<script src='assets/plugins/jquery-blockui/jquery.blockui.js'></script>
								<script src='assets/plugins/waypoints/jquery.waypoints.min.js'></script>
								<script src='assets/plugins/counter-up-master/jquery.counterup.min.js'></script>
								<script src='assets/plugins/jquery-sparkline/jquery.sparkline.min.js'></script>
								<script src='assets/plugins/chart.js/chart.min.js'></script>
								<script src='assets/plugins/flot/jquery.flot.min.js'></script>
								<script src='assets/plugins/flot/jquery.flot.time.min.js'></script>
								<script src='assets/plugins/flot/jquery.flot.symbol.min.js'></script>
								<script src='assets/plugins/flot/jquery.flot.resize.min.js'></script>
								<script src='assets/plugins/flot/jquery.flot.tooltip.min.js'></script>
								<script src='assets/plugins/curvedlines/curvedLines.js'></script>
								<script src='assets/plugins/peity/jquery.peity.min.js'></script>
								<script src='assets/js/alpha.min.js'></script>
								<script src='assets/js/pages/dashboard.js'></script>        
							</body>
			               ";
			echo $createCBody;
		}
		
		
		public function createMenu($userActive, $userMail = null, $userAvatar = null){
			$cMenu = "
						<!-- Menu Utama -->
						<aside id='slide-out' class='side-nav white fixed'>
							<div class='side-nav-wrapper'>

								<!-- User Login info -->
								<div class='sidebar-profile'>
									<div class='sidebar-profile-image'>
										<img src='avatar/".$userAvatar."' class='circle' alt=''>
									</div>
									<div class='sidebar-profile-info'>
										<a href='javascript:void(0);' class='account-settings-link'>
											<p>".$userActive."</p>
											<span>".$userMail."<i class='material-icons right'>arrow_drop_down</i></span>
										</a>
									</div>
								</div>
								<!-- Batas User Login Info -->

								<div class='sidebar-account-settings'>
									<ul>
										<li class='no-padding'>
											<a class='waves-effect waves-grey'><i class='material-icons'>mail_outline</i>Inbox</a>
										</li>
										<li class='no-padding'>
											<a class='waves-effect waves-grey'><i class='material-icons'>star_border</i>Starred<span class='new badge'>18</span></a>
										</li>
										<li class='no-padding'>
											<a class='waves-effect waves-grey'><i class='material-icons'>done</i>Sent Mail</a>
										</li>
										<li class='no-padding'>
											<a class='waves-effect waves-grey'><i class='material-icons'>history</i>History<span class='new grey lighten-1 badge'>3 new</span></a>
										</li>
										<li class='divider'></li>
										<li class='no-padding'>
											<a class='waves-effect waves-grey'><i class='material-icons'>exit_to_app</i>Sign Out</a>
										</li>
									</ul>
								</div>
							<ul class='sidebar-menu collapsible collapsible-accordion' data-collapsible='accordion'>
								<li class='no-padding active'><a class='waves-effect waves-grey active' href='?module=home'><i class='material-icons'>home</i>Dashboard</a></li>
								<li class='no-padding'>
									<a class='collapsible-header waves-effect waves-grey'><i class='material-icons'>apps</i>Rooms<i class='nav-drop-icon material-icons'>keyboard_arrow_right</i></a>
									<div class='collapsible-body'>
										<ul>
											<li><a href='mailbox.html'>Room Type</a></li>
											<li><a href='search.html'>Search</a></li>
											<li><a href='todo.html'>Todo</a></li>
										</ul>
									</div>
								</li>
								<li class='no-padding'>
									<a class='collapsible-header waves-effect waves-grey'><i class='material-icons'>code</i>Components<i class='nav-drop-icon material-icons'>keyboard_arrow_right</i></a>
									<div class='collapsible-body'>
										<ul>
											<li><a href='ui-accordions.html'>Accordion</a></li>
											<li><a href='ui-badges.html'>Badges</a></li>
											<li><a href='ui-buttons.html'>Buttons</a></li>
											<li><a href='ui-typography.html'>Typography</a></li>
											<li><a href='ui-cards.html'>Cards</a></li>
											<li><a href='ui-carousel.html'>Carousel</a></li>
											<li><a href='ui-chips.html'>Chips</a></li>
											<li><a href='ui-color.html'>Color</a></li>
											<li><a href='ui-collections.html'>Collections</a></li>
											<li><a href='ui-dropdown.html'>Dropdown</a></li>
											<li><a href='ui-dialogs.html'>Dialogs</a></li>
											<li><a href='ui-grid.html'>Grid</a></li>
											<li><a href='ui-helpers.html'>Helpers</a></li>
											<li><a href='ui-modals.html'>Modals</a></li>
											<li><a href='ui-media.html'>Media</a></li>
											<li><a href='ui-icons.html'>Icons</a></li>
											<li><a href='ui-parallax.html'>Parallax</a></li>
											<li><a href='ui-preloader.html'>Preloader</a></li>
											<li><a href='ui-shadow.html'>Shadow</a></li>
											<li><a href='ui-tabs.html'>Tabs</a></li>
											<li><a href='ui-waves.html'>Waves</a></li>
										</ul>
									</div>
								</li>
								<li class='no-padding'>
									<a class='collapsible-header waves-effect waves-grey'><i class='material-icons'>star_border</i>Plugins<i class='nav-drop-icon material-icons'>keyboard_arrow_right</i></a>
									<div class='collapsible-body'>
										<ul>
											<li><a href='miscellaneous-sweetalert.html'>Sweet Alert</a></li>
											<li><a href='miscellaneous-code-editor.html'>Code Editor</a></li>
											<li><a href='miscellaneous-nestable.html'>Nestable List</a></li>
											<li><a href='miscellaneous-masonry.html'>Masonry</a></li>
											<li><a href='miscellaneous-idle-timer.html'>Idle Timer</a></li>
										</ul>
									</div>
								</li>
								<li class='no-padding'>
									<a class='collapsible-header waves-effect waves-grey'><i class='material-icons'>desktop_windows</i>Layouts<i class='nav-drop-icon material-icons'>keyboard_arrow_right</i></a>
									<div class='collapsible-body'>
										<ul>
											<li><a href='layout-blank.html'>Blank Page</a></li>
											<li><a href='layout-boxed.html'>Boxed Layout</a></li>
											<li><a href='layout-hidden-sidebar.html'>Hidden Sidebar</a></li>
											<li><a href='layout-right-sidebar.html'>Right Sidebar</a></li>
										</ul>
									</div>
								</li>
								<li class='no-padding'>
									<a class='collapsible-header waves-effect waves-grey'><i class='material-icons'>mode_edit</i>Forms<i class='nav-drop-icon material-icons'>keyboard_arrow_right</i></a>
									<div class='collapsible-body'>
										<ul>
											<li><a href='form-elements.html'>Form Elements</a></li>
											<li><a href='form-wizard.html'>Form Wizard</a></li>
											<li><a href='form-upload.html'>File Upload</a></li>
											<li><a href='form-image-crop.html'>Image Crop</a></li>
											<li><a href='form-image-zoom.html'>Image Zoom</a></li>
											<li><a href='form-input-mask.html'>Input Mask</a></li>
											<li><a href='form-select2.html'>Select2</a></li>
										</ul>
									</div>
								</li>
								<li class='no-padding'>
									<a class='collapsible-header waves-effect waves-grey'><i class='material-icons'>grid_on</i>Tables<i class='nav-drop-icon material-icons'>keyboard_arrow_right</i></a>
									<div class='collapsible-body'>
										<ul>
											<li><a href='table-static.html'>Static Tables</a></li>
											<li><a href='table-responsive.html'>Responsive Tables</a></li>
											<li><a href='table-comparison.html'>Comparison Table</a></li>
											<li><a href='table-data.html'>Data Tables</a></li>
										</ul>
									</div>
								</li>
								<li class='no-padding'><a class='waves-effect waves-grey' href='charts.html'><i class='material-icons'>trending_up</i>Charts</a></li>
								<li class='no-padding'>
									<a class='collapsible-header waves-effect waves-grey'><i class='material-icons'>my_location</i>Maps<i class='nav-drop-icon material-icons'>keyboard_arrow_right</i></a>
									<div class='collapsible-body'>
										<ul>
											<li><a href='maps-google.html'>Google Maps</a></li>
											<li><a href='maps-vector.html'>Vector Maps</a></li>
										</ul>
									</div>
								</li>
								<li class='no-padding'>
									<a class='collapsible-header waves-effect waves-grey'><i class='material-icons'>tag_faces</i>Extra Pages<i class='nav-drop-icon material-icons'>keyboard_arrow_right</i></a>
									<div class='collapsible-body'>
										<ul>
											<li><a href='404.html'>404 Page</a></li>
											<li><a href='500.html'>500 Page</a></li>
											<li><a href='invoice.html'>Invoice</a></li>
											<li><a href='faq.html'>FAQ</a></li>
											<li><a href='sign-in.html'>Sign In</a></li>
											<li><a href='sign-up.html'>Sign Up</a></li>
											<li><a href='lock-screen.html'>Lock Screen</a></li>
											<li><a href='pattern-lock-screen.html'>Pattern Lock Screen</a></li>
											<li><a href='forgot.html'>Forgot Password</a></li>
											<li><a href='pricing-tables.html'>Pricing Tables</a></li>
											<li><a href='contact.html'>Contact</a></li>
											<li><a href='gallery.html'>Gallery</a></li>
											<li><a href='timeline.html'>Timeline</a></li>
											<li><a href='calendar.html'>Calendar</a></li>
											<li><a href='coming-soon.html'>Coming Soon</a></li>
										</ul>
									</div>
								</li>
							</ul>
							<div class='footer'>
								<p class='copyright' style='text-align: center;'>PLH System &copy; 2017</p>
								<center><img src='favicon.png' style='width: 24px;' /></center>
							</div>
							</div>
						</aside>
						<!-- Batas Menu -->
			         ";
			echo $cMenu;
		}
		
		public function openContent(){
			$oContent = "
							<!-- Content Utama Disini -->
            				<main class='mn-inner'>
			            ";
			echo $oContent;
		}
		
		public function closeContent(){
			$cContent = "
							</main>
							<!-- Batas Content Utama -->
			            ";
			echo $cContent;
		}
		
		
		public function displayModul($modul = null){
			//$module wajib diisi
			$modul = $_GET['module'];
			if(isset($modul)){
				include "$modul".".php";
			}else{
				echo "Module default"				;
			}
		}
		
		
		
		
		/**
		 * Fungsi Membuat Dialog Login
		 **/
		public function createLoginPage($title, $favicon, $meta_desc = null, $meta_key = null, $author){
			$cLogin = "
						<!DOCTYPE html>
						<html lang='en'>
							<head>							
								<title>".$title."</title>

								<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no'/>
								<meta charset='UTF-8'>
								<meta name='description' content='".$meta_desc."' />
								<meta name='keywords' content='".$meta_key."' />
								<meta name='author' content='".$author."' />

								
								<link type='text/css' rel='stylesheet' href='../assets/plugins/materialize/css/materialize.min.css'/>
								<link href='http://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
								<link href='../assets/plugins/material-preloader/css/materialPreloader.min.css' rel='stylesheet'>   
								<link rel='shortcut icon' href='../".$favicon."' />


								<!-- Theme Styles -->
								<link href='../assets/css/alpha.css' rel='stylesheet' type='text/css'/>
								<link href='../assets/css/custom.css' rel='stylesheet' type='text/css'/>


								<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
								<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
								<!--[if lt IE 9]>
								<script src='http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js'></script>
								<script src='http://oss.maxcdn.com/respond/1.4.2/respond.min.js'></script>
								<![endif]-->

							</head>
						<body class='signin-page'>
							<div class='loader-bg'></div>
							<div class='loader'>
								<div class='preloader-wrapper big active'>
									<div class='spinner-layer spinner-blue'>
										<div class='circle-clipper left'>
											<div class='circle'></div>
										</div><div class='gap-patch'>
										<div class='circle'></div>
										</div><div class='circle-clipper right'>
										<div class='circle'></div>
										</div>
									</div>
									<div class='spinner-layer spinner-red'>
										<div class='circle-clipper left'>
											<div class='circle'></div>
										</div><div class='gap-patch'>
										<div class='circle'></div>
										</div><div class='circle-clipper right'>
										<div class='circle'></div>
										</div>
									</div>
									<div class='spinner-layer spinner-yellow'>
										<div class='circle-clipper left'>
											<div class='circle'></div>
										</div><div class='gap-patch'>
										<div class='circle'></div>
										</div><div class='circle-clipper right'>
										<div class='circle'></div>
										</div>
									</div>
									<div class='spinner-layer spinner-green'>
										<div class='circle-clipper left'>
											<div class='circle'></div>
										</div><div class='gap-patch'>
										<div class='circle'></div>
										</div><div class='circle-clipper right'>
										<div class='circle'></div>
										</div>
									</div>
								</div>
							</div>
							<div class='mn-content valign-wrapper'>
								<main class='mn-inner container'>
									<div class='valign'>
										  <div class='row'>
											  <div class='col s12 m6 l6 offset-l3 offset-m3'>
												  <div class='card white darken-5'>
													  <div class='card-content z-depth-2'>
														  <div class='card-title ditengah'><img src='../assets/images/logo_plh.png' /></div>
														   <div class='row'>
			          ";
			echo $cLogin;
		}
		
		public function createFormLogin($method = null, $action = null, $auto = null, $name, $id){
			$cFormLogin = "
							<form class='col l12' method='$method' action='$action' autocomplete='$auto' name='$name' id='$id''>
                                 <div class='input-field col s12'>
								 	<input id='uname' name='uname' type='text' class='validate' required>
                                    <label for='email'>Username</label>
                                 </div>
                                 <div class='input-field col s12'>
                                 	<input id='password' type='password' class='validate' required>
                                    <label for='password'>Password</label>
                                 </div>
                                 <div class='col s12'>
                                 	<button type='submit' class='waves-effect waves-light btn blue btn-block'>
                                    	Log In
                                    </button>
                                 </div>
                            </form>
			              ";
			echo $cFormLogin;
		}
		
		public function closeLoginPage(){
			$closeFLogin = "
														</div>
														  </div>
													  </div>
												  </div>
											</div>
										</div>
									</main>
								</div>

								<!-- Javascripts -->
								<script src='../assets/plugins/jquery/jquery-2.2.0.min.js'></script>
								<script src='../assets/plugins/materialize/js/materialize.min.js'></script>
								<script src='../assets/plugins/material-preloader/js/materialPreloader.min.js'></script>
								<script src='../assets/plugins/jquery-blockui/jquery.blockui.js'></script>
								<script src='../assets/js/alpha.min.js'></script>

							</body>
						</html>
			               ";
			echo $closeFLogin;
		}
		
		public function setFooter($param){
			$createFooter = $param;
			return $createFooter;
		}
		
		public function createBtnUPDEL($id, $param){
			$tombolUPDEL = "";
			return $tombolUPDEL;
		}
		
		public function setMsgSukses($msg){
			$createMsg = "";
			return $createMsg;
		}
		
		public function setMsgError($msg){
			$createErr = "";
			return $createErr;
		}
		
	}