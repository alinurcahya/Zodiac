<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>{{ env('APP_NAME') }}</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
		type="text/css">

	<link href="{{asset('css/styles.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('css/vendor.css')}}" rel="stylesheet" type="text/css">

	<link href="{{asset('css/bootstrap_limitless.min.css')}}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<link href="{{ asset('favicon.ico') }}" rel="icon" type="image/x-icon" />
	<!-- /theme JS files -->
	@stack('styles')

	<style type="text/css">
		.info-form {
			padding: 10px;
			color: #2094e4;
			border: 1px dashed #00ac9a;
			background-color: #00ac9a33
		}

		.file-preview,
		.table.datatable-basic>thead>tr>th {
			border: none
		}

		.table.datatable-basic>thead>tr>th:last-child {
			width: 10%
		}

		.table.datatable-basic>tbody>tr>td:last-child {
			text-align: center
		}

		.table.datatable-basic>tbody>tr>td {
			padding: .75rem 1.25rem
		}

		.file-preview-frame.kv-preview-thumb,
		.kv-fileinput-error.file-error-message {
			margin: 0
		}

		.kv-zoom-body>img {
			width: auto !important
		}

		.dataTables_filter>label>input {
			margin-left: 5px
		}

		body {
			/* background-image: url("{{ asset('/images/building.jpeg') }}"); */
			background-color: rgb(214, 214, 214) !important;
			background-size: cover;
		}

		.card {
			background-color: rgba(255, 255, 255, 0.800) !important;
		}
	</style>
	@stack('script')

	<script src="{{asset('js/login.js')}}"></script>
	<script src="{{asset('js/jquery.min.js')}}"></script>
	<script src="{{asset('js/forms/styling/uniform.min.js')}}"></script>
</head>

<body class="bg-slate-800">

	<!-- Page content -->
	<div class="page-content">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content d-flex justify-content-center align-items-center">

				<!-- Login card -->
				<form class="login-form" method="POST" action="{{ route('result') }}">
					@csrf
					<div class="card mb-0">
						<div class="card-body">
							<div class="text-center mb-3">
								<h1 class="mb-0 font-weight-black col">ZODIAC</h1>
								<span class="d-block text-muted">Kwadran Lima Indonesia</span>
							</div>

							<div class="form-group form-group-feedback form-group-feedback-left">
								<input type="text" class="form-control" placeholder="Nama" name="nama" required>
								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>
							</div>

							<div class="form-group form-group-feedback form-group-feedback-left">
								<input type="date" class="form-control" placeholder="Tanggal Lahir" name="birthdate" required>
								<div class="form-control-feedback">
									<i class="icon-calendar text-muted"></i>
								</div>
							</div>

							<div class="form-group mt-4">
								<button type="submit" class="btn btn-primary btn-block">
									Submit
									<i class="icon-circle-right2 ml-2"></i>
								</button>
							</div>
						</div>
					</div>
				</form>
				<!-- /login card -->

			</div>
			<!-- /content area -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

	<script>
		//
	</script>

</body>

</html>

