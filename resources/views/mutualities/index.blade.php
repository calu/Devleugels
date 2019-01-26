@extends('admin.layouts.adminlayout')

@section('content')
<div class="container">
	<h1 class="d-flex justify-content-center">Overzicht van de mutualiteiten</h1>
	
	
	<div class="table-responsive">
		@include('partials.flash')
		<table class="table table-hover table-bordered table-sm table-primary text-dark">
			<thead>
				<th>naam</th>
				<th></th>
			</thead>
			<tbody>
				@foreach($mutualities as $mut)
				<tr>
					<td>{{ $mut->naam }}</td>
					<td>
						<a href="/mutualities/{{ $mut->id }}/edit"  title="wijzig de invoer">
							<i class="fa fa-edit"></i>
						</a>

						&nbsp;
						<a href="/mutualities/{{ $mut->id }}/destroy" title="verwijder deze invoer">
							<i class="fa fa-trash"></i>
						</a>
						
					</td>
				</tr>
				@endforeach
				{{ $mutualities->links() }}
			</tbody>
		</table>
	</div>
	
	<a href="mutualities/create">
		<button class="btn btn-primary">Mutualiteit toevoegen</button>
	</a>

</div>
@endsection
