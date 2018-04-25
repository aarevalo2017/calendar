@extends('layout')
@section('style')
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
@endsection
@section('contenido')
	<div class="container">
		<div class="col-md-4">
		<h2>Datos Cita</h2>
		<table class="table table-hover">
			<tbody>
				<tr>
					<td>Nombre</td>
					<td>{{ $cita->title }}</td>
				</tr>
				<tr>
					<td>Inicio</td>
					<td>{{ $cita->start_date }}</td>
				</tr>
				<tr>
					<td>Término</td>
					<td>{{ $cita->end_date }}</td>
				</tr>
			</tbody>
		</table>
		</div>
	</div>
@endsection
