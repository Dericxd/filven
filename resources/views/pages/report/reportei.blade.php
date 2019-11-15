<!DOCTYPE html>
<html>
<head>
	<title>Reporte</title>
	<link href='#' rel='stylesheet' type='text/css'>
	<!-- <link rel="stylesheet" href="sass/main.css" media="screen" charset="utf-8"/> -->
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta http-equiv="content-type" content="text-html; charset=utf-8">
</head>
<body>
	<header class="clearfix">
			@foreach ($empresa as $empres)
			@if($loop->first)
				<div class="title">{{ $empres->name }}</div>
				<div class="adress">{{ $empres->adress }}</div>
				<div class="phone">{{ $empres->phone }}</div>
				<div class="rif">{{ $empres->rif }}</div>
			@endif
		@endforeach
      
	</header>

	<section>
			<div class="report">Reporte</div>
 			<table border="0" cellspacing="0" cellpadding="0">
 		<table class="egt">
				<thead>
					<tr>
						<th>Libro</th>
						<th>Cantidad</th>
						<th>Precio.U</th>
						<th>Total</th>
					</tr>
				</thead>

				<tbody>
					@php
                    $total = 0;
                    $count = 0;
                    @endphp
                    @foreach ($sells as $sell)
						<tr>
							<td>{{ $sell->name }}</td>
							<td>{{ $sell->count }}</td>
							<td>{{ $sell->precies }}</td>
							<td>{{ $sell->precies * $sell->count }}</td>
						</tr>
					@php
					$count = $count + $sell->count;
					$total = $total + ($sell->precies * $sell->count);
					@endphp
					@endforeach
			<tr>
				<th>Total</th>
				<th>{{ $count }}</th>
				<th></th>
				<th style="text-align:center">{{ $total }}</th>
			</tr>
				</tbody>
			</table>
	</section>

</body>

</html>