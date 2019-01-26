@extends('admin.layouts.adminlayout')

@section('content')
<div class="container">
	<h1 class="d-flex justify-content-center">Overzicht van de mutualiteiten</h1>
	
	
	<div class="table-responsive">
		@include('partials.flash')
		<table class="table table-hover table-bordered table-sm table-primary text-dark">
			<thead>
				<th>soort</th>
				<th>begindatum</th>
				<th>einddatum</th>
				<th>klant</th>
				<th>status</th>
				<th></th>
			</thead>
			<tbody>
				@foreach($services as $service)
				<tr>
					<td>{{ $service->soort }}</td>
					<td>{{ $service->begindatum }}</td>
					<td>{{ $service->einddatum }}</td>
					<td>{{ $service->klant }}</td>
					<td>{{ $service->status }}</td>
					<td>
						<a href="/services/{{ $service->id }}/edit"  title="wijzig de invoer">
							<i class="fa fa-edit"></i>
						</a>

						&nbsp;
						<a href="/services/{{ $service->id }}/destroy" title="verwijder deze invoer">
							<i class="fa fa-trash"></i>
						</a>
						
					</td>
				</tr>
				@endforeach
				{{ $services->links() }}
			</tbody>
		</table>
	</div>
	
	<a href="services/create">
		<button class="btn btn-primary">Een service toevoegen</button>
	</a>

</div>
@endsection
