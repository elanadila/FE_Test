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

<style>
.main-panel>.content {
    margin-top: 40px;
}
</style>

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
					<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
						<div>
							<h2 class="text-white pb-2 fw-bold">Home</h2>
						</div>
					</div>
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
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						
					</div>
				</div>
				<div class="page-inner mt--5">
					<div class="row mt--2">
						<div class="col-md-4">
							<div class="card full-height">
								<div class="card-body">
									<div class="card-title">Grafik</div>
									<div class="card-category">Daily information about statistics in system</div>
									<div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
										<div class="px-2 pb-2 pb-md-0 text-center">
											<div id="circles-1"></div>
											<h6 class="fw-bold mt-3 mb-0">New Users</h6>
										</div>
										<div class="px-2 pb-2 pb-md-0 text-center">
											<div id="circles-2"></div>
											<h6 class="fw-bold mt-3 mb-0">Sales</h6>
										</div>
										<div class="px-2 pb-2 pb-md-0 text-center">
											<div id="circles-3"></div>
											<h6 class="fw-bold mt-3 mb-0">Subscribers</h6>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card full-height">
								<div class="card-body">
									<div class="card-title">Bar Chart</div>
									<div class="row py-3">
										<div class="col-md-12">
											<div id="chart-container">
												<canvas id="totalIncomeChart"></canvas>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="card full-height">
								<div class="card-body">
									<div class="card-title">Line Chart</div>
									<div class="card-body pb-0">
										<div class="h1 fw-bold float-right text-warning">+7%</div>
										<h2 class="mb-2">213</h2>
										<p class="text-muted">Transactions</p>
										<div class="pull-in sparkline-fix">
											<div id="lineChart"></div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="row">
						<div class="col-md-3">
							<div class="card card-post card-round">
								<img class="card-img-top" src="{!! asset('img/image1.jpg') !!}" alt="Card image cap">
							</div>
						</div>
						<div class="col-md-3">
							<div class="card card-post card-round">
								<img class="card-img-top" src="{!! asset('img/image2.jpeg') !!}" alt="Card image cap">
							</div>
						</div>
						<div class="col-md-3">
							<div class="card card-post card-round">
								<img class="card-img-top" src="{!! asset('img/image3.jpeg') !!}" alt="Card image cap">
							</div>
						</div>
						<div class="col-md-3">
							<div class="card card-post card-round">
								<img class="card-img-top" src="{!! asset('img/image4.jpeg') !!}" alt="Card image cap">
							</div>
						</div>
					</div>

				</div>
			</div>

			<div class="content" style="margin-top: 0px;">
				<div class="page-inner">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover">
											<thead>
												<tr>
													<th>No</th>
													<th>Ruas</th>
													<th>Unit Kerja</th>
													<th>Gambar</th>
													<th>Tanggal</th>
													<th style="width: 10%">Aksi</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
													<th>No</th>
													<th>Ruas</th>
													<th>Unit Kerja</th>
													<th>Gambar</th>
													<th>Tanggal</th>
													<th style="width: 10%">Aksi</th>
												</tr>
											</tfoot>
											<tbody>
												@php $no = 1; @endphp
												@foreach($data as $item)
												<tr>
													<td>{{ $no++ }}</td>
													<td>{{ $item['ruas']}}</td>
													<td>{{ $item['unit']}}</td>
													<td><button class="btn btn-primary btn-sm">Preview Gambar</button></td>
													<td>{{ $item['date_create']}}</td>
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Ruas">
																<i class="fa fa-edit"></i>
															</button>
															<a href="{{ route('get.ruas', $item['id'])}}" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Detail Ruas">
																<i class="fa fa-eye"></i>
															</a>
															<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" id="alert_demo_8" data-original-title="Hapus">
																<i class="fa fa-times"></i>
															</button>
														</div>
													</td>
												</tr>
												@endforeach
											</tbody>
										</table>
									</div>
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


	<!-- Chart JS -->
	<script src="{!! asset('js/plugin/chart.js/chart.min.js') !!}"></script>

	<!-- jQuery Sparkline -->
	<script src="{!! asset('js/plugin/jquery.sparkline/jquery.sparkline.min.js') !!}"></script>

	<!-- Chart Circle -->
	<script src="{!! asset('js/plugin/chart-circle/circles.min.js') !!}"></script>

	<!-- Datatables -->
	<script src="{!! asset('js/plugin/datatables/datatables.min.js') !!}"></script>

	<!-- Atlantis JS -->
	<script src="{!! asset('js/atlantis.min.js') !!}"></script>

	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="{!! asset('js/setting-demo.js') !!}"></script>
	<script src="{!! asset('js/demo.js') !!}"></script>
	<script>
		Circles.create({
			id: 'circles-1',
			radius: 45,
			value: 60,
			maxValue: 100,
			width: 7,
			text: 5,
			colors: ['#f1f1f1', '#FF9E27'],
			duration: 400,
			wrpClass: 'circles-wrp',
			textClass: 'circles-text',
			styleWrapper: true,
			styleText: true
		})

		Circles.create({
			id: 'circles-2',
			radius: 45,
			value: 70,
			maxValue: 100,
			width: 7,
			text: 36,
			colors: ['#f1f1f1', '#2BB930'],
			duration: 400,
			wrpClass: 'circles-wrp',
			textClass: 'circles-text',
			styleWrapper: true,
			styleText: true
		})

		Circles.create({
			id: 'circles-3',
			radius: 45,
			value: 40,
			maxValue: 100,
			width: 7,
			text: 12,
			colors: ['#f1f1f1', '#F25961'],
			duration: 400,
			wrpClass: 'circles-wrp',
			textClass: 'circles-text',
			styleWrapper: true,
			styleText: true
		})

		var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

		var mytotalIncomeChart = new Chart(totalIncomeChart, {
			type: 'bar',
			data: {
				labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
				datasets: [{
					label: "Total Income",
					backgroundColor: '#ff9e27',
					borderColor: 'rgb(23, 125, 255)',
					data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
				}],
			},
			options: {
				responsive: true,
				maintainAspectRatio: false,
				legend: {
					display: false,
				},
				scales: {
					yAxes: [{
						ticks: {
							display: false //this will remove only the label
						},
						gridLines: {
							drawBorder: false,
							display: false
						}
					}],
					xAxes: [{
						gridLines: {
							drawBorder: false,
							display: false
						}
					}]
				},
			}
		});

		$('#lineChart').sparkline([105, 103, 123, 100, 95, 105, 115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: '#ffa534',
			fillColor: 'rgba(255, 165, 52, .14)'
		});
	</script>
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
</body>

</html>