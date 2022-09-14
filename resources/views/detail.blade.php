<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Ela Nadila</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{!! asset('img/icon.ico') !!}" type="image/x-icon" />

	<!-- Fonts and icons -->
	<script src="{!! asset('js/plugin/webfont/webfont.min.js') !!}"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Lato:300,400,700,900"]
			},
			custom: {
				"families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
				urls: ["{!! asset('css/fonts.min.css') !!}"]
			},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{!! asset('css/bootstrap.min.css') !!}">
	<link rel="stylesheet" href="{!! asset('css/atlantis.min.css') !!}">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="{!! asset('css/demo.css') !!}">
</head>

<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">

				<h3 style="color:#fff;"> Ela Nadila</h3>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

				<div class="container-fluid">

				</div>
			</nav>
			<!-- End Navbar -->
		</div>
		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">

			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<ul class="nav nav-primary">
						<li class="nav-item active">
							<a href="{{route('home')}}">
								<i class="fas fa-home"></i>
								<p>Home</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{route('ruas')}}">
								<i class="fas fa-table"></i>
								<p>Master Ruas</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Detail Ruas</h4>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-body">
									<table class="table table-bordered">
										<tbody>
											<tr>
												<td style="width: 5%; vertical-align: middle;">Unit Kerja </td>
												<td style="width: 40%; vertical-align: middle;">{{ $data['unit'] }} </td>
											</tr>
											<tr>
												<td style="width: 5%; vertical-align: middle;">Ruas </td>
												<td style="width: 40%; vertical-align: middle;">{{ $data['ruas'] }} </td>
											</tr>
											<tr>
												<td style="width: 5%; vertical-align: middle;">Gambar </td>
												<td style="width: 40%; vertical-align: middle;">{{ $data['picture'] }} </td>
											</tr>
											<tr>
												<td style="width: 5%; vertical-align: middle;">Tanggal </td>
												<td style="width: 40%; vertical-align: middle;">{{ $data['date_create'] }} </td>
											</tr>
											<tr>
												<td style="width: 5%; vertical-align: middle;">Status</td>
												<td style="width: 40%; vertical-align: middle;"> </td>
											</tr>

										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<footer class="footer">
				<div class="container-fluid">
					<div class="copyright ml-auto">
						2022, made with <i class="fa fa-heart heart text-danger"></i> by <a href="https://www.themekita.com">ThemeKita - Ela Nadila</a>
					</div>
				</div>
			</footer>
		</div>

	</div>
	<!--   Core JS Files   -->
	<script src="{!! asset('js/core/jquery.3.2.1.min.js') !!}"></script>
	<script src="{!! asset('js/core/popper.min.js') !!}"></script>
	<script src="{!! asset('js/core/bootstrap.min.js') !!}"></script>

	<!-- jQuery Scrollbar -->
	<script src="{!! asset('js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') !!}"></script>

	<script src="{!! asset('js/plugin/sweetalert/sweetalert.min.js') !!}"></script>

	<!-- Datatables -->
	<script src="{!! asset('js/plugin/datatables/datatables.min.js') !!}"></script>
	<!-- Atlantis JS -->
	<script src="{!! asset('js/atlantis.min.js') !!}"></script>
	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<!-- <script src="../../assets/js/setting-demo2.js"></script> -->
	<script>
		$(document).ready(function() {
			$('#basic-datatables').DataTable({});

			$('#multi-filter-select').DataTable({
				"pageLength": 5,
				initComplete: function() {
					this.api().columns().every(function() {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
							.appendTo($(column.footer()).empty())
							.on('change', function() {
								var val = $.fn.dataTable.util.escapeRegex(
									$(this).val()
								);

								column
									.search(val ? '^' + val + '$' : '', true, false)
									.draw();
							});

						column.data().unique().sort().each(function(d, j) {
							select.append('<option value="' + d + '">' + d + '</option>')
						});
					});
				}
			});

			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function() {
				$('#add-row').dataTable().fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
				]);
				$('#addRowModal').modal('hide');

			});
		});
	</script>
	<script>
		//== Class definition
		var SweetAlert2Demo = function() {

			//== Demos
			var initDemos = function() {


				$('#alert_demo_8').click(function(e) {
					swal({
						title: 'Apakah Anda Yakin Ingin Menghapus Ruas Ini?',
						text: "Anda tidak akan dapat mengembalikan ini!",
						type: 'warning',
						buttons: {
							cancel: {
								visible: true,
								text: 'Tidak',
								className: 'btn btn-danger'
							},
							confirm: {
								text: 'Ya',
								className: 'btn btn-success'
							}
						}
					}).then((willDelete) => {
						if (willDelete) {
							swal("Poof! Your imaginary file has been deleted!", {
								icon: "success",
								buttons: {
									confirm: {
										className: 'btn btn-success'
									}
								}
							});
						} else {
							swal("Your imaginary file is safe!", {
								buttons: {
									confirm: {
										className: 'btn btn-success'
									}
								}
							});
						}
					});
				})

			};

			return {
				//== Init
				init: function() {
					initDemos();
				},
			};
		}();

		//== Class Initialization
		jQuery(document).ready(function() {
			SweetAlert2Demo.init();
		});
	</script>
</body>

</html>