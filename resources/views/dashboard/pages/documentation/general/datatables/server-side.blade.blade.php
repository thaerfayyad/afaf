<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head><base href="../../../">
		<title>Ajax Server Side DataTables and Bootstrap Integration by Keenthemes</title>
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta charset="utf-8" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="Https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendor Stylesheets(used by this page)-->
		<link href="assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Page Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body>
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="docs-page d-flex flex-row flex-column-fluid">
				<!--begin::Aside-->
				<div id="kt_docs_aside" class="docs-aside" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_docs_aside_toggle">
					<!--begin::Logo-->
					<div class="docs-aside-logo flex-column-auto h-75px" id="kt_docs_aside_logo">
						<!--begin::Link-->
						<a href="../..//dist/index.html">
							<img alt="Logo" src="assets/media/logos/logo-1-dark.svg" class="h-15px" />
						</a>
						<!--end::Link-->
					</div>
					<!--end::Logo-->
					<!--begin::Menu-->
					<div class="docs-aside-menu flex-column-fluid">
						<!--begin::Aside Menu-->
						<div class="hover-scroll-overlay-y mt-5 mb-5 mt-lg-0 mb-lg-5 pe-lg-n2 me-lg-2" id="kt_docs_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_docs_aside_logo" data-kt-scroll-wrappers="#kt_docs_aside_menu" data-kt-scroll-offset="10px">
							<!--begin::Menu-->
							<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_docs_aside_menu" data-kt-menu="true">
								<div class="menu-item">
									<h4 class="menu-content text-muted mb-0 fs-7 text-uppercase">Getting Started</h4>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/getting-started.html">
										<span class="menu-title">Overview</span>
									</a>
								</div>
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link py-2">
										<span class="menu-title">Build</span>
										<span class="menu-arrow"></span>
									</span>
									<div class="menu-sub menu-sub-accordion">
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/getting-started/build/gulp.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Gulp</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/getting-started/build/webpack.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Webpack</span>
											</a>
										</div>
									</div>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/getting-started/multi-demo.html">
										<span class="menu-title">Multi-demo</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/getting-started/file-structure.html">
										<span class="menu-title">File Structure</span>
									</a>
								</div>
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link py-2">
										<span class="menu-title">Customization</span>
										<span class="menu-arrow"></span>
									</span>
									<div class="menu-sub menu-sub-accordion">
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/getting-started/customization/sass.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">SASS</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/getting-started/customization/javascript.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Javascript</span>
											</a>
										</div>
									</div>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/getting-started/dark-mode.html">
										<span class="menu-title">Dark Mode</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/getting-started/rtl.html">
										<span class="menu-title">RTL Version</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="https://preview.keenthemes.com/metronic8//layout-builder.html" target="blank">
										<span class="menu-title">Layout Builder</span>
									</a>
								</div>
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link py-2">
										<span class="menu-title">Server Side Integration</span>
										<span class="menu-arrow"></span>
									</span>
									<div class="menu-sub menu-sub-accordion">
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/getting-started/integration/blazor.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Blazor</span>
											</a>
										</div>
									</div>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/getting-started/updates.html">
										<span class="menu-title">Updates</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/getting-started/changelog.html">
										<span class="menu-title">Changelog
										<span class="badge badge-changelog badge-light-danger bg-hover-danger text-hover-white fw-bold fs-9 px-2 ms-2">v8.0.22</span></span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/getting-started/references.html">
										<span class="menu-title">References</span>
									</a>
								</div>
								<div class="menu-item">
									<div class="h-30px"></div>
								</div>
								<div class="menu-item">
									<h4 class="menu-content text-muted mb-0 fs-7 text-uppercase">Base</h4>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/base/utilities.html">
										<span class="menu-title">Utilities</span>
									</a>
								</div>
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link py-2">
										<span class="menu-title">Helpers</span>
										<span class="menu-arrow"></span>
									</span>
									<div class="menu-sub menu-sub-accordion">
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/base/helpers/flex-layouts.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Flex Layouts
												<span class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/base/helpers/text.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Text</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/base/helpers/background.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Background</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/base/helpers/borders.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Borders</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/base/helpers/opacity.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Opacity</span>
											</a>
										</div>
									</div>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/base/forms.html">
										<span class="menu-title">Forms</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/base/buttons.html">
										<span class="menu-title">Buttons</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/base/accordion.html">
										<span class="menu-title">Accordion</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/base/alerts.html">
										<span class="menu-title">Alerts</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/base/badges.html">
										<span class="menu-title">Badges</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/base/breadcrumb.html">
										<span class="menu-title">Breadcrumb</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/base/bullets.html">
										<span class="menu-title">Bullets
										<span class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/base/cards.html">
										<span class="menu-title">Cards</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/base/carousel.html">
										<span class="menu-title">Carousel</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/base/indicator.html">
										<span class="menu-title">Indicator
										<span class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/base/modal.html">
										<span class="menu-title">Modal</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/base/overlay.html">
										<span class="menu-title">Overlay
										<span class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/base/pagination.html">
										<span class="menu-title">Pagination</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/base/popovers.html">
										<span class="menu-title">Popovers</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/base/tooltips.html">
										<span class="menu-title">Tooltips</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/base/pulse.html">
										<span class="menu-title">Pulse
										<span class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/base/rating.html">
										<span class="menu-title">Rating
										<span class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/base/ribbon.html">
										<span class="menu-title">Ribbon
										<span class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/base/rotate.html">
										<span class="menu-title">Rotate
										<span class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/base/separator.html">
										<span class="menu-title">Separator
										<span class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/base/symbol.html">
										<span class="menu-title">Symbol
										<span class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/base/tables.html">
										<span class="menu-title">Tables</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/base/tabs.html">
										<span class="menu-title">Tabs</span>
									</a>
								</div>
								<div class="menu-item">
									<div class="h-30px"></div>
								</div>
								<div class="menu-item">
									<h4 class="menu-content text-muted mb-0 fs-7 text-uppercase">Forms</h4>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/forms/clipboard.html">
										<span class="menu-title">Clipboard</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/forms/daterangepicker.html">
										<span class="menu-title">Date Range Picker</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/forms/dialer.html">
										<span class="menu-title">Dialer
										<span class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/forms/dropzonejs.html">
										<span class="menu-title">DropzoneJS</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/forms/flatpickr.html">
										<span class="menu-title">Flatpickr</span>
									</a>
								</div>
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link py-2">
										<span class="menu-title">FormValidation</span>
										<span class="menu-arrow"></span>
									</span>
									<div class="menu-sub menu-sub-accordion">
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/forms/formvalidation/overview.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Overview</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/forms/formvalidation/basic.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Basic</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/forms/formvalidation/advanced.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Advanced</span>
											</a>
										</div>
									</div>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/forms/image-input.html">
										<span class="menu-title">Image Input
										<span class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/forms/inputmask.html">
										<span class="menu-title">Inputmask</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/forms/bootstrap-multiselectsplitter.html">
										<span class="menu-title">Multiselectsplitter</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/forms/nouislider.html">
										<span class="menu-title">noUiSlider</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/forms/password-meter.html">
										<span class="menu-title">Password Meter
										<span class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/forms/google-recaptcha.html">
										<span class="menu-title">reCAPTCHA</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/forms/select2.html">
										<span class="menu-title">Select2</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/forms/tagify.html">
										<span class="menu-title">Tagify</span>
									</a>
								</div>
								<div class="menu-item">
									<div class="h-30px"></div>
								</div>
								<div class="menu-item">
									<h4 class="menu-content text-muted mb-0 fs-7 text-uppercase">Editors</h4>
								</div>
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link py-2">
										<span class="menu-title">TinyMCE</span>
										<span class="menu-arrow"></span>
									</span>
									<div class="menu-sub menu-sub-accordion">
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/editors/tinymce/overview.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Overview</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/editors/tinymce/basic.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Basic</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/editors/tinymce/plugins.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Plugin Addons</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/editors/tinymce/hidden.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Hidden Menubar</span>
											</a>
										</div>
									</div>
								</div>
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link py-2">
										<span class="menu-title">CKEditor</span>
										<span class="menu-arrow"></span>
									</span>
									<div class="menu-sub menu-sub-accordion">
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/editors/ckeditor/overview.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Overview</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/editors/ckeditor/classic.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Classic</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/editors/ckeditor/inline.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Inline</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/editors/ckeditor/balloon.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Balloon</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/editors/ckeditor/balloon-block.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Balloon Block</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/editors/ckeditor/document.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Document</span>
											</a>
										</div>
									</div>
								</div>
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link py-2">
										<span class="menu-title">Quill</span>
										<span class="menu-arrow"></span>
									</span>
									<div class="menu-sub menu-sub-accordion">
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/editors/quill/overview.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Overview</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/editors/quill/basic.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Basic</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/editors/quill/autosave.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Autosave</span>
											</a>
										</div>
									</div>
								</div>
								<div class="menu-item">
									<div class="h-30px"></div>
								</div>
								<div class="menu-item">
									<h4 class="menu-content text-muted mb-0 fs-7 text-uppercase">Charts</h4>
								</div>
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link py-2">
										<span class="menu-title">AmCharts</span>
										<span class="menu-arrow"></span>
									</span>
									<div class="menu-sub menu-sub-accordion">
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/charts/amcharts/charts.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">AmChart Charts</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/charts/amcharts/maps.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">AmChart Maps</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/charts/amcharts/stock-charts.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">AmChart Stock Charts</span>
											</a>
										</div>
									</div>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/charts/apexcharts.html">
										<span class="menu-title">ApexCharts</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/charts/chartjs.html">
										<span class="menu-title">ChartJS</span>
									</a>
								</div>
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link py-2">
										<span class="menu-title">Flotcharts</span>
										<span class="menu-arrow"></span>
									</span>
									<div class="menu-sub menu-sub-accordion">
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/charts/flotcharts/overview.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Overview</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/charts/flotcharts/basic.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Basic Chart</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/charts/flotcharts/axis.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Axis Labels</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/charts/flotcharts/tracking.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Tracking Curves</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/charts/flotcharts/dynamic.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Dynamic Chart</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/charts/flotcharts/stack.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Stack Chart Controls</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/charts/flotcharts/bar.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Bar Chart</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/charts/flotcharts/pie.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Pie Chart</span>
											</a>
										</div>
									</div>
								</div>
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link py-2">
										<span class="menu-title">Google Charts</span>
										<span class="menu-arrow"></span>
									</span>
									<div class="menu-sub menu-sub-accordion">
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/charts/google-charts/overview.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Overview</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/charts/google-charts/column.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Column Chart</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/charts/google-charts/pie.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Pie Chart</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/charts/google-charts/line.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Line Chart</span>
											</a>
										</div>
									</div>
								</div>
								<div class="menu-item">
									<div class="h-30px"></div>
								</div>
								<div class="menu-item">
									<h4 class="menu-content text-muted mb-0 fs-7 text-uppercase">General</h4>
								</div>
								<div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
									<span class="menu-link py-2">
										<span class="menu-title">DataTables</span>
										<span class="menu-arrow"></span>
									</span>
									<div class="menu-sub menu-sub-accordion">
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/general/datatables/overview.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Overview</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/general/datatables/basic.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Basic</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/general/datatables/advanced.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Advanced</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link active py-2" href="../..//dist/documentation/general/datatables/server-side.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Server Side</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/general/datatables/api.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">API</span>
											</a>
										</div>
									</div>
								</div>
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link py-2">
										<span class="menu-title">Fullcalendar</span>
										<span class="menu-arrow"></span>
									</span>
									<div class="menu-sub menu-sub-accordion">
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/general/fullcalendar/overview.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Overview</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/general/fullcalendar/basic.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Basic</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/general/fullcalendar/drag-n-drop.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Drag-n-Drop</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/general/fullcalendar/selectable.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Selectable Dates</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/general/fullcalendar/background-events.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Background Events</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/general/fullcalendar/locales.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Localization</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/general/fullcalendar/timezone.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Timezone</span>
											</a>
										</div>
									</div>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/general/menu.html">
										<span class="menu-title">Menu
										<span class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/general/drawer.html">
										<span class="menu-title">Drawer
										<span class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
									</a>
								</div>
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link py-2">
										<span class="menu-title">jKanban Board</span>
										<span class="menu-arrow"></span>
									</span>
									<div class="menu-sub menu-sub-accordion">
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/general/jkanban/overview.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Overview</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/general/jkanban/basic.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Basic</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/general/jkanban/color.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Colored</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/general/jkanban/restricted.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Restricted</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/general/jkanban/rich.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Rich Content</span>
											</a>
										</div>
									</div>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/general/fslightbox.html">
										<span class="menu-title">Fullscreen Lightbox</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/general/smooth-scroll.html">
										<span class="menu-title">Smooth Scroll</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/general/stepper.html">
										<span class="menu-title">Stepper
										<span class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/general/scroll.html">
										<span class="menu-title">Scroll
										<span class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/general/search.html">
										<span class="menu-title">Quick Search
										<span class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/general/sticky.html">
										<span class="menu-title">Sticky
										<span class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/general/swapper.html">
										<span class="menu-title">Swapper
										<span class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/general/blockui.html">
										<span class="menu-title">BlockUI
										<span class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/general/toastr.html">
										<span class="menu-title">Toastr</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/general/toggle.html">
										<span class="menu-title">Toggle
										<span class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/general/typedjs.html">
										<span class="menu-title">Typed.js</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/general/cropper.html">
										<span class="menu-title">Cropper</span>
									</a>
								</div>
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link py-2">
										<span class="menu-title">Draggable</span>
										<span class="menu-arrow"></span>
									</span>
									<div class="menu-sub menu-sub-accordion">
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/general/draggable/overview.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Overview</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/general/draggable/cards.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Draggable Cards</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/general/draggable/multiple-containers.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Multiple Containers</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/general/draggable/swappable.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Swappable</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/general/draggable/restricted.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Restricted</span>
											</a>
										</div>
									</div>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/general/scrolltop.html">
										<span class="menu-title">Scrolltop
										<span class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/general/cookie.html">
										<span class="menu-title">Cookie
										<span class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
									</a>
								</div>
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link py-2">
										<span class="menu-title">Vis-Timeline</span>
										<span class="menu-arrow"></span>
									</span>
									<div class="menu-sub menu-sub-accordion">
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/general/vis-timeline/overview.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Overview</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/general/vis-timeline/basic.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Basic</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/general/vis-timeline/style.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Custom Styling</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/general/vis-timeline/group.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Groups</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/general/vis-timeline/interaction.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Interactions</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/general/vis-timeline/template.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Templates</span>
											</a>
										</div>
									</div>
								</div>
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link py-2">
										<span class="menu-title">jsTree</span>
										<span class="menu-arrow"></span>
									</span>
									<div class="menu-sub menu-sub-accordion">
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/general/jstree/overview.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Overview</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/general/jstree/basic.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Basic Tree</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/general/jstree/contextual.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Contextual Menu</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/general/jstree/customicons.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Custom Icons</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/general/jstree/dragdrop.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Drag &amp; Drop</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/general/jstree/checkable.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Checkable Tree</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link py-2" href="../..//dist/documentation/general/jstree/ajax.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Ajax Data</span>
											</a>
										</div>
									</div>
								</div>
								<div class="menu-item">
									<div class="h-30px"></div>
								</div>
								<div class="menu-item">
									<h4 class="menu-content text-muted mb-0 fs-7 text-uppercase">Icons</h4>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/icons/duotune.html">
										<span class="menu-title">Duotune
										<span class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/icons/duotone.html">
										<span class="menu-title">Duotone</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/icons/bootstrap-icons.html">
										<span class="menu-title">Bootstrap Icons</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/icons/font-awesome.html">
										<span class="menu-title">Font Awesome</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link py-2" href="../..//dist/documentation/icons/line-awesome.html">
										<span class="menu-title">Line Awesome</span>
									</a>
								</div>
							</div>
							<!--end::Menu-->
						</div>
					</div>
					<!--end::Menu-->
				</div>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="docs-wrapper d-flex flex-column flex-row-fluid" id="kt_docs_wrapper">
					<!--begin::Header-->
					<div id="kt_docs_header" class="docs-header align-items-stretch mb-2 mb-lg-10">
						<!--begin::Container-->
						<div class="container">
							<div class="d-flex align-items-stretch justify-content-between py-3 h-75px">
								<!--begin::Aside toggle-->
								<div class="d-flex align-items-center d-lg-none me-3" title="Show aside menu">
									<div class="btn btn-icon btn-flex btn-active-color-primary" id="kt_docs_aside_toggle">
										<!--begin::Svg Icon | path: icons/duotone/Text/Menu.svg-->
										<span class="svg-icon svg-icon-2tx mt-1">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<rect fill="#000000" x="4" y="5" width="16" height="3" rx="1.5" />
													<path d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L18.5,10 C19.3284271,10 20,10.6715729 20,11.5 C20,12.3284271 19.3284271,13 18.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z" fill="#000000" opacity="0.3" />
												</g>
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
								</div>
								<!--end::Aside toggle-->
								<!--begin::Logo-->
								<div class="d-flex d-lg-none align-items-center flex-grow-1 flex-lg-grow-0 me-lg-15">
									<a href="../..//dist/index.html">
										<img alt="Logo" src="assets/media/logos/logo-1-dark.svg" class="h-15px" />
									</a>
								</div>
								<!--end::Logo-->
								<!--begin::Wrapper-->
								<div class="d-flex align-items-center justify-content-between flex-lg-grow-1">
									<!--begin::Header title-->
									<div class="d-flex align-items-center" id="kt_docs_header_title">
										<!--begin::Page title-->
										<div class="docs-page-title d-flex flex-column flex-lg-row align-items-lg-center py-5 mb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_docs_content_container', 'lg': '#kt_docs_header_title'}">
											<!--begin::Title-->
											<h1 class="d-flex align-items-center text-dark my-1 fs-4">Documentation
											<a href="../..//dist/documentation/getting-started/changelog.html" class="badge fw-bold fs-9 px-2 ms-2 badge-white text-hover-primary shadow-sm">v8.0.22</a></h1>
											<!--end::Title-->
											<!--begin::Separator-->
											<span class="d-none d-lg-block bullet h-20px w-1px bg-secondary mx-4"></span>
											<!--end::Separator-->
											<!--begin::Breadcrumb-->
											<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-6 my-1">
												<!--begin::Item-->
												<li class="breadcrumb-item text-gray-600">General</li>
												<!--end::Item-->
												<!--begin::Item-->
												<li class="breadcrumb-item">
													<span class="bullet w-5px h-2px"></span>
												</li>
												<!--end::Item-->
												<!--begin::Item-->
												<li class="breadcrumb-item text-gray-600">DataTables</li>
												<!--end::Item-->
												<!--begin::Item-->
												<li class="breadcrumb-item">
													<span class="bullet w-5px h-2px"></span>
												</li>
												<!--end::Item-->
												<!--begin::Item-->
												<li class="breadcrumb-item text-dark">Server Side</li>
												<!--end::Item-->
											</ul>
											<!--end::Breadcrumb-->
										</div>
										<!--end::Page title-->
									</div>
									<!--end::Header title-->
									<!--begin::Toolbar-->
									<div class="d-flex align-items-center">
										<a class="btn btn-bg-white btn-color-gray-700 btn-active-primary fw-bolder me-4" href="https://preview.keenthemes.com/metronic8" target="_blank">Preview</a>
										<a class="btn btn-primary fw-bolder" href="https://1.envato.market/EA4JP" target="_blank">Purchase</a>
									</div>
									<!--end::Toolbar-->
								</div>
								<!--end::Wrapper-->
							</div>
							<div class="border-gray-300 border-bottom border-bottom-dashed"></div>
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
					<!--begin::Content-->
					<div class="docs-content d-flex flex-column flex-column-fluid" id="kt_docs_content">
						<!--begin::Container-->
						<div class="container" id="kt_docs_content_container">
							<!--begin::Card-->
							<div class="card mb-2">
								<!--begin::Card Body-->
								<div class="card-body fs-6 py-15 px-10 py-lg-15 px-lg-15 text-gray-700">
									<!--begin::Section-->
									<div class="p-0">
										<!--begin::Heading-->
										<h1 class="anchor fw-bolder mb-5" id="server-side">
										<a href="#server-side"></a>Server Side</h1>
										<!--end::Heading-->
										<!--begin::Block-->
										<div class="pt-5 pb-10">
											<!--begin::Notice-->
											<div class="d-flex align-items-center rounded py-5 px-4 bg-light-info">
												<!--begin::Icon-->
												<div class="d-flex h-80px w-80px flex-shrink-0 flex-center position-relative ms-3 me-6">
													<!--begin::Svg Icon | path: icons/duotone/Layout/Layout-polygon.svg-->
													<span class="svg-icon svg-icon-info position-absolute opacity-10">
														<svg xmlns="http://www.w3.org/2000/svg" width="70px" height="70px" viewBox="0 0 70 70" fill="none" class="w-80px h-80px">
															<path d="M28 4.04145C32.3316 1.54059 37.6684 1.54059 42 4.04145L58.3109 13.4585C62.6425 15.9594 65.3109 20.5812 65.3109 25.5829V44.4171C65.3109 49.4188 62.6425 54.0406 58.3109 56.5415L42 65.9585C37.6684 68.4594 32.3316 68.4594 28 65.9585L11.6891 56.5415C7.3575 54.0406 4.68911 49.4188 4.68911 44.4171V25.5829C4.68911 20.5812 7.3575 15.9594 11.6891 13.4585L28 4.04145Z" fill="#000000" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<!--begin::Svg Icon | path: icons/duotone/Tools/Compass.svg-->
													<span class="svg-icon svg-icon-3x svg-icon-info position-absolute">
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24" />
																<path d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z" fill="#000000" opacity="0.3" />
																<path d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z" fill="#000000" fill-rule="nonzero" />
															</g>
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Icon-->
												<!--begin::Description-->
												<div class="text-gray-700 fw-bold fs-6 lh-lg">With server-side processing enabled, all paging, searching, ordering actions that DataTables performs are handed off to a server where an SQL engine (or similar) can perform these actions on the large data set. For more information please check the official
												<a href="https://datatables.net/manual/server-side" target="_blank">documentation</a>.</div>
												<!--end::Description-->
											</div>
											<!--end::Notice-->
										</div>
										<!--end::Block-->
										<!--begin::CRUD-->
										<div class="py-5">
											<!--begin::Wrapper-->
											<div class="d-flex flex-stack mb-5">
												<!--begin::Search-->
												<div class="d-flex align-items-center position-relative my-1">
													<!--begin::Svg Icon | path: icons/duotone/General/Search.svg-->
													<span class="svg-icon svg-icon-1 position-absolute ms-6">
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24" />
																<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
															</g>
														</svg>
													</span>
													<!--end::Svg Icon-->
													<input type="text" data-kt-docs-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search Customers" />
												</div>
												<!--end::Search-->
												<!--begin::Toolbar-->
												<div class="d-flex justify-content-end" data-kt-docs-table-toolbar="base">
													<!--begin::Filter-->
													<button type="button" class="btn btn-light-primary me-3" data-bs-toggle="tooltip" title="Coming Soon">
													<!--begin::Svg Icon | path: icons/duotone/Text/Filter.svg-->
													<span class="svg-icon svg-icon-2">
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24" />
																<path d="M5,4 L19,4 C19.2761424,4 19.5,4.22385763 19.5,4.5 C19.5,4.60818511 19.4649111,4.71345191 19.4,4.8 L14,12 L14,20.190983 C14,20.4671254 13.7761424,20.690983 13.5,20.690983 C13.4223775,20.690983 13.3458209,20.6729105 13.2763932,20.6381966 L10,19 L10,12 L4.6,4.8 C4.43431458,4.5790861 4.4790861,4.26568542 4.7,4.1 C4.78654809,4.03508894 4.89181489,4 5,4 Z" fill="#000000" />
															</g>
														</svg>
													</span>
													<!--end::Svg Icon-->Filter</button>
													<!--end::Filter-->
													<!--begin::Add customer-->
													<button type="button" class="btn btn-primary" data-bs-toggle="tooltip" title="Coming Soon">
													<!--begin::Svg Icon | path: icons/duotone/Navigation/Plus.svg-->
													<span class="svg-icon svg-icon-2">
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<rect fill="#000000" x="4" y="11" width="16" height="2" rx="1" />
															<rect fill="#000000" opacity="0.5" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000)" x="4" y="11" width="16" height="2" rx="1" />
														</svg>
													</span>
													<!--end::Svg Icon-->Add Customer</button>
													<!--end::Add customer-->
												</div>
												<!--end::Toolbar-->
												<!--begin::Group actions-->
												<div class="d-flex justify-content-end align-items-center d-none" data-kt-docs-table-toolbar="selected">
													<div class="fw-bolder me-5">
													<span class="me-2" data-kt-docs-table-select="selected_count"></span>Selected</div>
													<button type="button" class="btn btn-danger" data-bs-toggle="tooltip" title="Coming Soon">Selection Action</button>
												</div>
												<!--end::Group actions-->
											</div>
											<!--end::Wrapper-->
											<!--begin::Datatable-->
											<table id="kt_datatable_example_1" class="table align-middle table-row-dashed fs-6 gy-5">
												<thead>
													<tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
														<th class="w-10px pe-2">
															<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
																<input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_datatable_example_1 .form-check-input" value="1" />
															</div>
														</th>
														<th>Customer Name</th>
														<th>Email</th>
														<th>Company</th>
														<th>Payment Method</th>
														<th>Created Date</th>
														<th class="text-end min-w-100px">Actions</th>
													</tr>
												</thead>
												<tbody class="text-gray-600 fw-bold"></tbody>
											</table>
											<!--end::Datatable-->
										</div>
										<!--end::CRUD-->
										<!--begin::Code-->
										<div class="py-5">
											<!--begin::Highlight-->
											<div class="highlight">
												<button class="highlight-copy btn" data-bs-toggle="tooltip" title="Copy code">copy</button>
												<ul class="nav nav-pills" role="tablist">
													<li class="nav-item">
														<a class="nav-link active" data-bs-toggle="tab" href="#kt_highlight_610d47f1cc0c1" role="tab">HTML</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-bs-toggle="tab" href="#kt_highlight_610d47f1cc0c7" role="tab">JAVASCRIPT</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-bs-toggle="tab" href="#kt_highlight_610d47f1cc0ca" role="tab">PHP</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-bs-toggle="tab" href="#kt_highlight_610d47f1cc0cb" role="tab">PHP</a>
													</li>
												</ul>
												<div class="tab-content">
													<div class="tab-pane fade show active" id="kt_highlight_610d47f1cc0c1" role="tabpanel">
														<div class="highlight-code">
															<pre class="language-html" style="height:400px">
<code class="language-html">&lt;!--begin::Wrapper--&gt;
&lt;div class="d-flex flex-stack mb-5"&gt;
    &lt;!--begin::Search--&gt;
    &lt;div class="d-flex align-items-center position-relative my-1"&gt;
        &lt;span class="svg-icon svg-icon-2"&gt;...&lt;/span&gt;
        &lt;input type="text" data-kt-docs-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search Customers"/&gt;
    &lt;/div&gt;
    &lt;!--end::Search--&gt;

    &lt;!--begin::Toolbar--&gt;
    &lt;div class="d-flex justify-content-end" data-kt-docs-table-toolbar="base"&gt;
        &lt;!--begin::Filter--&gt;
        &lt;button type="button" class="btn btn-light-primary me-3" data-bs-toggle="tooltip" title="Coming Soon"&gt;
            &lt;span class="svg-icon svg-icon-2"&gt;...&lt;/span&gt;
            Filter
        &lt;/button&gt;
        &lt;!--end::Filter--&gt;

        &lt;!--begin::Add customer--&gt;
        &lt;button type="button" class="btn btn-primary" data-bs-toggle="tooltip" title="Coming Soon"&gt;
            &lt;span class="svg-icon svg-icon-2"&gt;...&lt;/span&gt;
            Add Customer
        &lt;/button&gt;
        &lt;!--end::Add customer--&gt;
    &lt;/div&gt;
    &lt;!--end::Toolbar--&gt;

    &lt;!--begin::Group actions--&gt;
    &lt;div class="d-flex justify-content-end align-items-center d-none" data-kt-docs-table-toolbar="selected"&gt;
        &lt;div class="fw-bolder me-5"&gt;
            &lt;span class="me-2" data-kt-docs-table-select="selected_count"&gt;&lt;/span&gt; Selected
        &lt;/div&gt;

        &lt;button type="button" class="btn btn-danger" data-bs-toggle="tooltip" title="Coming Soon"&gt;
            Selection Action
        &lt;/button&gt;
    &lt;/div&gt;
    &lt;!--end::Group actions--&gt;
&lt;/div&gt;
&lt;!--end::Wrapper--&gt;

&lt;!--begin::Datatable--&gt;
&lt;table id="kt_datatable_example_1" class="table align-middle table-row-dashed fs-6 gy-5"&gt;
    &lt;thead&gt;
    &lt;tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0"&gt;
        &lt;th class="w-10px pe-2"&gt;
            &lt;div class="form-check form-check-sm form-check-custom form-check-solid me-3"&gt;
                &lt;input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_datatable_example_1 .form-check-input" value="1"/&gt;
            &lt;/div&gt;
        &lt;/th&gt;
        &lt;th&gt;Customer Name&lt;/th&gt;
        &lt;th&gt;Email&lt;/th&gt;
        &lt;th&gt;Company&lt;/th&gt;
        &lt;th&gt;Payment Method&lt;/th&gt;
        &lt;th&gt;Created Date&lt;/th&gt;
        &lt;th class="text-end min-w-100px"&gt;Actions&lt;/th&gt;
    &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody class="text-gray-600 fw-bold"&gt;
    &lt;/tbody&gt;
&lt;/table&gt;
&lt;!--end::Datatable--&gt;</code>
</pre>
														</div>
													</div>
													<div class="tab-pane fade" id="kt_highlight_610d47f1cc0c7" role="tabpanel">
														<div class="highlight-code">
															<pre class="language-javascript" style="height:400px">
<code class="language-javascript">"use strict";

// Class definition
var KTDatatablesServerSide = function () {
    // Shared variables
    var table;
    var dt;

    // Private functions
    var initDatatable = function () {
        dt = $("#kt_datatable_example_1").DataTable({
            responsive: true,
            searchDelay: 500,
            processing: true,
            serverSide: true,
            order: [[5, 'desc']],
            stateSave: true,
            select: {
                style: 'os',
                selector: 'td:first-child',
                className: 'row-selected'
            },
            ajax: {
                url: "https://preview.keenthemes.com/api/datatables.php",
            },
            columns: [
                {data: 'RecordID'},
                {data: 'Name'},
                {data: 'Email'},
                {data: 'Company'},
                {data: 'CreditCardNumber'},
                {data: 'Datetime'},
                {data: null},
            ],
            columnDefs: [
                {
                    targets: 0,
                    orderable: false,
                    render: function (data) {
                        return `
                            &lt;div class="form-check form-check-sm form-check-custom form-check-solid"&gt;
                                &lt;input class="form-check-input" type="checkbox" value="${data}" /&gt;
                            &lt;/div&gt;`;
                    }
                },
                {
                    targets: 4,
                    render: function (data, type, row) {
                        return `&lt;img src="https://preview.keenthemes.com/metronic8//assets/media/svg/card-logos/${row.CreditCardType}.svg" class="w-35px me-3" alt="${row.CreditCardType}"&gt;` + data;
                    }
                },
                {
                    targets: -1,
                    data: null,
                    orderable: false,
                    className: 'text-end',
                    render: function (data, type, row) {
                        return `
                            &lt;a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end"&gt;
                                Actions
                                &lt;span class="svg-icon svg-icon-5 m-0"&gt;
                                    &lt;svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"&gt;
                                        &lt;g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"&gt;
                                            &lt;polygon points="0 0 24 0 24 24 0 24"&gt;&lt;/polygon&gt;
                                            &lt;path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)"&gt;&lt;/path&gt;
                                        &lt;/g&gt;
                                    &lt;/svg&gt;
                                &lt;/span&gt;
                            &lt;/a&gt;
                            &lt;!--begin::Menu--&gt;
                            &lt;div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true"&gt;
                                &lt;!--begin::Menu item--&gt;
                                &lt;div class="menu-item px-3"&gt;
                                    &lt;a href="#" class="menu-link px-3" data-kt-users-table-filter="edit_row"&gt;
                                        Edit
                                    &lt;/a&gt;
                                &lt;/div&gt;
                                &lt;!--end::Menu item--&gt;

                                &lt;!--begin::Menu item--&gt;
                                &lt;div class="menu-item px-3"&gt;
                                    &lt;a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row"&gt;
                                        Delete
                                    &lt;/a&gt;
                                &lt;/div&gt;
                                &lt;!--end::Menu item--&gt;
                            &lt;/div&gt;
                            &lt;!--end::Menu--&gt;
                        `;
                    },
                },
            ]
        });

        table = dt.$;

        // Re-init functions on every table re-draw -- more info: https://datatables.net/reference/event/draw
        dt.on('draw', function () {
            initToggleToolbar();
            toggleToolbars();
            KTMenu.createInstances();
        });
    }

    // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
    var handleSearchDatatable = function () {
        const filterSearch = document.querySelector('[data-kt-docs-table-filter="search"]');
        filterSearch.addEventListener('keyup', function (e) {
            dt.search(e.target.value).draw();
        });
    }

    // Init toggle toolbar
    var initToggleToolbar = function () {
        // Toggle selected action toolbar
        // Select all checkboxes
        const container = document.querySelector('#kt_datatable_example_1');
        const checkboxes = container.querySelectorAll('[type="checkbox"]');

        // Toggle delete selected toolbar
        checkboxes.forEach(c =&gt; {
            // Checkbox on click event
            c.addEventListener('click', function () {
                setTimeout(function () {
                    toggleToolbars();
                }, 50);
            });
        });
    }

    // Toggle toolbars
    var toggleToolbars = function () {
        // Define variables
        const container = document.querySelector('#kt_datatable_example_1');
        const toolbarBase = document.querySelector('[data-kt-docs-table-toolbar="base"]');
        const toolbarSelected = document.querySelector('[data-kt-docs-table-toolbar="selected"]');
        const selectedCount = document.querySelector('[data-kt-docs-table-select="selected_count"]');

        // Select refreshed checkbox DOM elements
        const allCheckboxes = container.querySelectorAll('tbody [type="checkbox"]');

        // Detect checkboxes state &amp; count
        let checkedState = false;
        let count = 0;

        // Count checked boxes
        allCheckboxes.forEach(c =&gt; {
            if (c.checked) {
                checkedState = true;
                count++;
            }
        });

        // Toggle toolbars
        if (checkedState) {
            selectedCount.innerHTML = count;
            toolbarBase.classList.add('d-none');
            toolbarSelected.classList.remove('d-none');
        } else {
            toolbarBase.classList.remove('d-none');
            toolbarSelected.classList.add('d-none');
        }
    }

    // Public methods
    return {
        init: function () {
            initDatatable();
            handleSearchDatatable();
            initToggleToolbar();
        }
    }
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTDatatablesServerSide.init();
});</code>
</pre>
														</div>
													</div>
													<div class="tab-pane fade" id="kt_highlight_610d47f1cc0ca" role="tabpanel">
														<div class="highlight-code">
															<pre class="language-php" style="height:400px">
<code class="language-php">&lt;?php
include 'class-list-util.php';

class DataTableApi
{
    public $columnsDefault = [
        'RecordID'         =&gt; true,
        'OrderID'          =&gt; true,
        'Name'             =&gt; true,
        'Country'          =&gt; true,
        'CountryCode'      =&gt; true,
        'City'             =&gt; true,
        'Company'          =&gt; true,
        'Address'          =&gt; true,
        'Email'            =&gt; true,
        'Currency'         =&gt; true,
        'Notes'            =&gt; true,
        'Department'       =&gt; true,
        'Website'          =&gt; true,
        'Latitude'         =&gt; true,
        'Longitude'        =&gt; true,
        'Datetime'         =&gt; true,
        'TimeZone'         =&gt; true,
        'Money'            =&gt; true,
        'Gender'           =&gt; true,
        'CreditCardNumber' =&gt; true,
        'CreditCardType'   =&gt; true,
    ];

    public function __construct()
    {
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
        header('Access-Control-Allow-Headers: *');
    }

    public function init()
    {
        if (isset($_REQUEST['columnsDef']) &amp;&amp; is_array($_REQUEST['columnsDef'])) {
            foreach ($_REQUEST['columnsDef'] as $field) {
                $columnsDefault[$field] = true;
            }
        }

        // get all raw data
        $alldata = $this-&gt;getJsonDecode();

        $data = [];
        // internal use; filter selected columns only from raw data
        foreach ($alldata as $d) {
            $data[] = $this-&gt;filterArray($d, $this-&gt;columnsDefault);
        }

        // filter by general search keyword
        if (isset($_REQUEST['search']['value']) &amp;&amp; $_REQUEST['search']['value']) {
            $data = $this-&gt;arraySearch($data, $_REQUEST['search']['value']);
        }

        // count data
        $totalRecords = $totalDisplay = count($data);

        // sort
        if (isset($_REQUEST['order'][0]['column']) &amp;&amp; $_REQUEST['order'][0]['dir']) {
            $column = $_REQUEST['order'][0]['column'];
            $dir    = $_REQUEST['order'][0]['dir'];
            usort($data, function ($a, $b) use ($column, $dir) {
                $a = array_slice($a, $column, 1);
                $b = array_slice($b, $column, 1);
                $a = array_pop($a);
                $b = array_pop($b);

                if ($dir === 'asc') {
                    return $a &gt; $b ? 1 : -1;
                }

                return $a &lt; $b ? 1 : -1;
            });
        }

        // pagination length
        if (isset($_REQUEST['length'])) {
            $data = array_splice($data, $_REQUEST['start'], $_REQUEST['length']);
        }

        $data = $this-&gt;reformat($data);

        $result = [
            'recordsTotal'    =&gt; $totalRecords,
            'recordsFiltered' =&gt; $totalDisplay,
            'data'            =&gt; $data,
        ];

        echo json_encode($result, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    }

    public function filterArray($array, $allowed = [])
    {
        return array_filter(
            $array,
            function ($val, $key) use ($allowed) { // N.b. $val, $key not $key, $val
                return isset($allowed[$key]) &amp;&amp; ($allowed[$key] === true || $allowed[$key] === $val);
            },
            ARRAY_FILTER_USE_BOTH
        );
    }

    public function filterKeyword($data, $search, $field = '')
    {
        $filter = '';
        if (isset($search['value'])) {
            $filter = $search['value'];
        }
        if (!empty($filter)) {
            if (!empty($field)) {
                if (strpos(strtolower($field), 'date') !== false) {
                    // filter by date range
                    $data = $this-&gt;filterByDateRange($data, $filter, $field);
                } else {
                    // filter by column
                    $data = array_filter($data, function ($a) use ($field, $filter) {
                        return (boolean) preg_match("/$filter/i", $a[$field]);
                    });
                }

            } else {
                // general filter
                $data = array_filter($data, function ($a) use ($filter) {
                    return (boolean) preg_grep("/$filter/i", (array) $a);
                });
            }
        }

        return $data;
    }

    public function filterByDateRange($data, $filter, $field)
    {
        // filter by range
        if (!empty($range = array_filter(explode('|', $filter)))) {
            $filter = $range;
        }

        if (is_array($filter)) {
            foreach ($filter as &amp;$date) {
                // hardcoded date format
                $date = date_create_from_format('m/d/Y', stripcslashes($date));
            }
            // filter by date range
            $data = array_filter($data, function ($a) use ($field, $filter) {
                // hardcoded date format
                $current = date_create_from_format('m/d/Y', $a[$field]);
                $from    = $filter[0];
                $to      = $filter[1];
                if ($from &lt;= $current &amp;&amp; $to &gt;= $current) {
                    return true;
                }

                return false;
            });
        }

        return $data;
    }

    public function getJsonDecode(): mixed
    {
        return json_decode(file_get_contents('data-metronic-v8.json'), true);
    }

    /**
     * @param  array  $data
     *
     * @return array
     */
    public function reformat($data): array
    {
        return array_map(function ($item) {
            // hide credit card number
            $item['CreditCardNumber'] = '**** '.substr($item['CreditCardNumber'], -4);

            $item['CreditCardType'] = $item['CreditCardType'] === 'americanexpress' ? 'american-express' : $item['CreditCardType'];

            // reformat datetime
            $item['Datetime'] = date('d M Y, g:i a', strtotime($item['Datetime']));

            return $item;
        }, $data);
    }

    public function arraySearch($array, $keyword)
    {
        return array_filter($array, function ($a) use ($keyword) {
            return (boolean) preg_grep("/$keyword/i", (array) $a);
        });
    }

}

$api = new DataTableApi;
$api-&gt;init();</code>
</pre>
														</div>
													</div>
													<div class="tab-pane fade" id="kt_highlight_610d47f1cc0cb" role="tabpanel">
														<div class="highlight-code">
															<pre class="language-php" style="height:400px">
<code class="language-php">&lt;?php
/**
 * class-list-util.php
 *
 * List utility class
 */

/**
 * List utility.
 *
 * Utility class to handle operations on an array of objects.
 */
class List_Util
{
    /**
     * The input array.
     *
     * @access private
     * @var array
     */
    private $input = array();

    /**
     * The output array.
     *
     * @access private
     * @var array
     */
    private $output = array();

    /**
     * Temporary arguments for sorting.
     *
     * @access private
     * @var array
     */
    private $orderby = array();

    /**
     * Constructor.
     *
     * Sets the input array.
     *
     *
     * @param  array  $input  Array to perform operations on.
     */
    public function __construct($input)
    {
        $this-&gt;output = $this-&gt;input = $input;
    }

    /**
     * Returns the original input array.
     *
     * @access public
     *
     * @return array The input array.
     */
    public function get_input()
    {
        return $this-&gt;input;
    }

    /**
     * Returns the output array.
     *
     * @access public
     *
     * @return array The output array.
     */
    public function get_output()
    {
        return $this-&gt;output;
    }

    /**
     * Filters the list, based on a set of key =&gt; value arguments.
     *
     *
     * @param  array  $args  Optional. An array of key =&gt; value arguments to match
     *                         against each object. Default empty array.
     * @param  string  $operator  Optional. The logical operation to perform. 'AND' means
     *                         all elements from the array must match. 'OR' means only
     *                         one element needs to match. 'NOT' means no elements may
     *                         match. Default 'AND'.
     *
     * @return array Array of found values.
     */
    public function filter($args = array(), $operator = 'AND')
    {
        if (empty($args)) {
            return $this-&gt;output;
        }

        $operator = strtoupper($operator);

        if (!in_array($operator, array('AND', 'OR', 'NOT'), true)) {
            return array();
        }

        $count    = count($args);
        $filtered = array();

        foreach ($this-&gt;output as $key =&gt; $obj) {
            $to_match = (array) $obj;

            $matched = 0;
            foreach ($args as $m_key =&gt; $m_value) {
                if (array_key_exists($m_key, $to_match) &amp;&amp; $m_value == $to_match[$m_key]) {
                    $matched++;
                }
            }

            if (
                ('AND' == $operator &amp;&amp; $matched == $count) ||
                ('OR' == $operator &amp;&amp; $matched &gt; 0) ||
                ('NOT' == $operator &amp;&amp; 0 == $matched)
            ) {
                $filtered[$key] = $obj;
            }
        }

        $this-&gt;output = $filtered;

        return $this-&gt;output;
    }

    /**
     * Plucks a certain field out of each object in the list.
     *
     * This has the same functionality and prototype of
     * array_column() (PHP 5.5) but also supports objects.
     *
     *
     * @param  int|string  $field  Field from the object to place instead of the entire object
     * @param  int|string  $index_key  Optional. Field from the object to use as keys for the new array.
     *                              Default null.
     *
     * @return array Array of found values. If `$index_key` is set, an array of found values with keys
     *               corresponding to `$index_key`. If `$index_key` is null, array keys from the original
     *               `$list` will be preserved in the results.
     */
    public function pluck($field, $index_key = null)
    {
        if (!$index_key) {
            /*
             * This is simple. Could at some point wrap array_column()
             * if we knew we had an array of arrays.
             */
            foreach ($this-&gt;output as $key =&gt; $value) {
                if (is_object($value)) {
                    $this-&gt;output[$key] = $value-&gt;$field;
                } else {
                    $this-&gt;output[$key] = $value[$field];
                }
            }

            return $this-&gt;output;
        }

        /*
         * When index_key is not set for a particular item, push the value
         * to the end of the stack. This is how array_column() behaves.
         */
        $newlist = array();
        foreach ($this-&gt;output as $value) {
            if (is_object($value)) {
                if (isset($value-&gt;$index_key)) {
                    $newlist[$value-&gt;$index_key] = $value-&gt;$field;
                } else {
                    $newlist[] = $value-&gt;$field;
                }
            } else {
                if (isset($value[$index_key])) {
                    $newlist[$value[$index_key]] = $value[$field];
                } else {
                    $newlist[] = $value[$field];
                }
            }
        }

        $this-&gt;output = $newlist;

        return $this-&gt;output;
    }

    /**
     * Sorts the list, based on one or more orderby arguments.
     *
     *
     * @param  string|array  $orderby  Optional. Either the field name to order by or an array
     *                                    of multiple orderby fields as $orderby =&gt; $order.
     * @param  string  $order  Optional. Either 'ASC' or 'DESC'. Only used if $orderby
     *                                    is a string.
     * @param  bool  $preserve_keys  Optional. Whether to preserve keys. Default false.
     *
     * @return array The sorted array.
     */
    public function sort($orderby = array(), $order = 'ASC', $preserve_keys = false)
    {
        if (empty($orderby)) {
            return $this-&gt;output;
        }

        if (is_string($orderby)) {
            $orderby = array($orderby =&gt; $order);
        }

        foreach ($orderby as $field =&gt; $direction) {
            $orderby[$field] = 'DESC' === strtoupper($direction) ? 'DESC' : 'ASC';
        }

        $this-&gt;orderby = $orderby;

        if ($preserve_keys) {
            uasort($this-&gt;output, array($this, 'sort_callback'));
        } else {
            usort($this-&gt;output, array($this, 'sort_callback'));
        }

        $this-&gt;orderby = array();

        return $this-&gt;output;
    }

    /**
     * Callback to sort the list by specific fields.
     *
     * @access private
     *
     * @param  object|array  $a  One object to compare.
     * @param  object|array  $b  The other object to compare.
     *
     * @return int 0 if both objects equal. -1 if second object should come first, 1 otherwise.
     * @see    List_Util::sort()
     *
     */
    private function sort_callback($a, $b)
    {
        if (empty($this-&gt;orderby)) {
            return 0;
        }

        $a = (array) $a;
        $b = (array) $b;

        foreach ($this-&gt;orderby as $field =&gt; $direction) {
            if (!isset($a[$field]) || !isset($b[$field])) {
                continue;
            }

            if ($a[$field] == $b[$field]) {
                continue;
            }

            $results = 'DESC' === $direction ? array(1, -1) : array(-1, 1);

            if (is_numeric($a[$field]) &amp;&amp; is_numeric($b[$field])) {
                return ($a[$field] &lt; $b[$field]) ? $results[0] : $results[1];
            }

            return 0 &gt; strcmp($a[$field], $b[$field]) ? $results[0] : $results[1];
        }

        return 0;
    }
}

function list_filter($list, $args = array(), $operator = 'AND')
{
    if (!is_array($list)) {
        return array();
    }

    $util = new List_Util($list);

    return $util-&gt;filter($args, $operator);
}</code>
</pre>
														</div>
													</div>
												</div>
											</div>
											<!--end::Highlight-->
										</div>
										<!--end::Code-->
									</div>
									<!--end::Section-->
								</div>
								<!--end::Card Body-->
							</div>
							<!--end::Card-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
					<div class="py-4 d-flex flex-lg-column py-6" id="kt_footer">
						<!--begin::Container-->
						<div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-muted fw-bold me-1">2021©</span>
								<a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
							</div>
							<!--end::Copyright-->
							<!--begin::Menu-->
							<ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1 align-items-center mb-3 mb-md-0">
								<!--begin::Menu item-->
								<li class="menu-item">
									<!--begin::Menu link-->
									<a href="https://www.youtube.com/c/KeenThemesTuts/videos" target="_blank" class="menu-link px-3">
										<img alt="Keenthemes Youtube" src="assets/media/svg/social-logos/youtube.svg" class="h-20px" />
									</a>
									<!--end::Menu link-->
								</li>
								<!--end::Menu link-->
								<!--begin::Menu item-->
								<li class="menu-item">
									<!--begin::Menu link-->
									<a href="https://github.com/KeenthemesHub" target="_blank" class="menu-link px-3">
										<img alt="Keenthemes Github" src="assets/media/svg/social-logos/github.svg" class="h-20px" />
									</a>
									<!--end::Menu link-->
								</li>
								<!--end::Menu link-->
								<!--begin::Menu item-->
								<li class="menu-item">
									<!--begin::Menu link-->
									<a href="https://twitter.com/keenthemes" target="_blank" class="menu-link px-3">
										<img alt="Keenthemes Twitter" src="assets/media/svg/social-logos/twitter.svg" class="h-20px" />
									</a>
									<!--end::Menu link-->
								</li>
								<!--end::Menu link-->
								<!--begin::Menu item-->
								<li class="menu-item">
									<!--begin::Menu link-->
									<a href="https://www.instagram.com/keenthemes" target="_blank" class="menu-link px-3">
										<img alt="Keenthemes Instagram" src="assets/media/svg/social-logos/instagram.svg" class="h-20px" />
									</a>
									<!--end::Menu link-->
								</li>
								<!--end::Menu link-->
								<!--begin::Menu item-->
								<li class="menu-item">
									<!--begin::Menu link-->
									<a href="https://www.facebook.com/keenthemes" target="_blank" class="menu-link px-3">
										<img alt="Keenthemes Facebook" src="assets/media/svg/social-logos/facebook.svg" class="h-20px" />
									</a>
									<!--end::Menu link-->
								</li>
								<!--end::Menu link-->
								<!--begin::Menu item-->
								<li class="menu-item">
									<!--begin::Menu link-->
									<a href="https://dribbble.com/keenthemes" target="_blank" class="menu-link px-3">
										<img alt="Keenthemes Dribbble" src="assets/media/svg/social-logos/dribbble.svg" class="h-20px" />
									</a>
									<!--end::Menu link-->
								</li>
								<!--end::Menu link-->
							</ul>
							<!--end::Menu-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Main-->
		<!--begin::Exolore drawer toggle-->
		<button id="kt_explore_toggle" class="explore-toggle btn btn-sm bg-body btn-color-gray-700 btn-active-primary shadow-sm position-fixed px-5 fw-bolder zindex-2 top-50 mt-10 end-0 transform-90 fs-6 rounded-top-0" title="Explore Metronic" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-trigger="hover">
			<span id="kt_explore_toggle_label">Explore</span>
		</button>
		<!--end::Exolore drawer toggle-->
		<!--begin::Exolore drawer-->
		<div id="kt_explore" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="explore" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'350px', 'lg': '475px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_explore_toggle" data-kt-drawer-close="#kt_explore_close">
			<!--begin::Card-->
			<div class="card shadow-none rounded-0 w-100">
				<!--begin::Header-->
				<div class="card-header" id="kt_explore_header">
					<h3 class="card-title fw-bolder text-gray-700">Explore Metronic</h3>
					<div class="card-toolbar">
						<button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5" id="kt_explore_close">
							<!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
							<span class="svg-icon svg-icon-2">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
										<rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
										<rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
									</g>
								</svg>
							</span>
							<!--end::Svg Icon-->
						</button>
					</div>
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body" id="kt_explore_body">
					<!--begin::Content-->
					<div id="kt_explore_scroll" class="scroll-y me-n5 pe-5" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_explore_body" data-kt-scroll-dependencies="#kt_explore_header" data-kt-scroll-offset="5px">
						<!--begin::Wrapper-->
						<div class="mb-0">
							<!--begin::Header-->
							<div class="mb-7">
								<div class="d-flex flex-stack">
									<h3 class="mb-0">Metronic Licenses</h3>
									<a href="https://themeforest.net/licenses/standard" class="fw-bold" target="_blank">License FAQs</a>
								</div>
							</div>
							<!--end::Header-->
							<!--begin::License-->
							<div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
								<div class="d-flex flex-stack">
									<div class="d-flex flex-column">
										<div class="d-flex align-items-center mb-1">
											<div class="fs-6 fw-bold text-gray-800 fw-bold mb-0 me-1">Regular License</div>
											<i class="text-gray-400 fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="popover" data-bs-custom-class="popover-dark" data-bs-trigger="hover" data-bs-placement="top" data-bs-content="Use, by you or one client in a single end product which end users are not charged for."></i>
										</div>
										<div class="fs-7 text-muted">For single end product used by you or one client</div>
									</div>
									<div class="text-nowrap">
										<span class="text-muted fs-7 fw-bold me-n1">$</span>
										<span class="text-dark fs-1 fw-bolder">39</span>
									</div>
								</div>
							</div>
							<!--end::License-->
							<!--begin::License-->
							<div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
								<div class="d-flex flex-stack">
									<div class="d-flex flex-column">
										<div class="d-flex align-items-center mb-1">
											<div class="fs-6 fw-bold text-gray-800 fw-bold mb-0 me-1">Extended License</div>
											<i class="text-gray-400 fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="popover" data-bs-custom-class="popover-dark" data-bs-trigger="hover" data-bs-placement="top" data-bs-content="Use, by you or one client, in a single end product which end users can be charged for."></i>
										</div>
										<div class="fs-7 text-muted">For single end product with paying users.</div>
									</div>
									<div class="text-nowrap">
										<span class="text-muted fs-7 fw-bold me-n1">$</span>
										<span class="text-dark fs-1 fw-bolder">939</span>
									</div>
								</div>
							</div>
							<!--end::License-->
							<!--begin::License-->
							<div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
								<div class="d-flex flex-stack">
									<div class="d-flex flex-column">
										<div class="d-flex align-items-center mb-1">
											<div class="fs-6 fw-bold text-gray-800 fw-bold mb-0 me-1">Custom License</div>
										</div>
										<div class="fs-7 text-muted">Reach us for custom license offers.</div>
									</div>
									<div class="text-nowrap">
										<a href="https://keenthemes.com/contact/" class="btn btn-sm btn-success" target="_blank">Contact Us</a>
									</div>
								</div>
							</div>
							<!--end::License-->
							<!--begin::Purchase-->
							<a href="https://1.envato.market/EA4JP" class="btn btn-primary mb-15 w-100">Buy Now</a>
							<!--end::Purchase-->
							<!--begin::Demos-->
							<div class="mb-0">
								<h3 class="fw-bolder text-center mb-6">Metronic Demos</h3>
								<!--begin::Row-->
								<div class="row g-5">
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative border border-4 border-success rounded">
											<div class="overlay-wrapper">
												<img src="assets/media/demos/demo1.png" alt="demo" class="w-100" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/metronic8/demo1" class="btn btn-sm btn-success shadow">Demo 1</a>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative rounded">
											<div class="overlay-wrapper">
												<img src="assets/media/demos/demo2.png" alt="demo" class="w-100" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/metronic8/demo2" class="btn btn-sm btn-success shadow">Demo 2</a>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative rounded">
											<div class="overlay-wrapper">
												<img src="assets/media/demos/demo3.png" alt="demo" class="w-100" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/metronic8/demo3" class="btn btn-sm btn-success shadow">Demo 3</a>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative rounded">
											<div class="overlay-wrapper">
												<img src="assets/media/demos/demo4.png" alt="demo" class="w-100" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/metronic8/demo4" class="btn btn-sm btn-success shadow">Demo 4</a>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative rounded">
											<div class="overlay-wrapper">
												<img src="assets/media/demos/demo5.png" alt="demo" class="w-100" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/metronic8/demo5" class="btn btn-sm btn-success shadow">Demo 5</a>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative rounded">
											<div class="overlay-wrapper">
												<img src="assets/media/demos/demo6.png" alt="demo" class="w-100" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/metronic8/demo6" class="btn btn-sm btn-success shadow">Demo 6</a>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative rounded">
											<div class="overlay-wrapper">
												<img src="assets/media/demos/demo7.png" alt="demo" class="w-100" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<a href="https://preview.keenthemes.com/metronic8/demo7" class="btn btn-sm btn-success shadow">Demo 7</a>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative rounded">
											<div class="overlay-wrapper">
												<img src="assets/media/demos/demo8.png" alt="demo" class="w-100 opacity-75" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming soon</div>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative rounded">
											<div class="overlay-wrapper">
												<img src="assets/media/demos/demo9.png" alt="demo" class="w-100 opacity-75" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming soon</div>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative rounded">
											<div class="overlay-wrapper">
												<img src="assets/media/demos/demo10.png" alt="demo" class="w-100 opacity-75" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming soon</div>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative rounded">
											<div class="overlay-wrapper">
												<img src="assets/media/demos/demo11.png" alt="demo" class="w-100 opacity-75" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming soon</div>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative rounded">
											<div class="overlay-wrapper">
												<img src="assets/media/demos/demo12.png" alt="demo" class="w-100 opacity-75" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming soon</div>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative rounded">
											<div class="overlay-wrapper">
												<img src="assets/media/demos/demo13.png" alt="demo" class="w-100 opacity-75" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming soon</div>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative rounded">
											<div class="overlay-wrapper">
												<img src="assets/media/demos/demo14.png" alt="demo" class="w-100 opacity-75" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming soon</div>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative rounded">
											<div class="overlay-wrapper">
												<img src="assets/media/demos/demo15.png" alt="demo" class="w-100 opacity-75" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming soon</div>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Demo-->
										<div class="overlay overflow-hidden position-relative rounded">
											<div class="overlay-wrapper">
												<img src="assets/media/demos/demo16.png" alt="demo" class="w-100 opacity-75" />
											</div>
											<div class="overlay-layer bg-dark bg-opacity-10">
												<div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming soon</div>
											</div>
										</div>
										<!--end::Demo-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
							</div>
							<!--end::Demos-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Content-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Card-->
		</div>
		<!--end::Exolore drawer-->
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<!--begin::Svg Icon | path: icons/duotone/Navigation/Up-2.svg-->
			<span class="svg-icon">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24" />
						<rect fill="#000000" opacity="0.5" x="11" y="10" width="2" height="10" rx="1" />
						<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
					</g>
				</svg>
			</span>
			<!--end::Svg Icon-->
		</div>
		<!--end::Scrolltop-->
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
		<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="assets/js/custom/documentation/documentation.js"></script>
		<script src="assets/js/custom/documentation/general/datatables/server-side.js"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
