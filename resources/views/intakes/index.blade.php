@extends('admin.layouts.adminlayout')

@section('content')
<div class="container">
	<h1 class="d-flex justify-content-center">Overzicht van intake aanvragen</h1>
	
	
	<div class="table-responsive">
		<table class="table table-hover table-bordered table-sm table-primary text-dark">
			<thead>
				<th>naam</th>
				<th>rubriek</th>
				<th>vraag</th>
				<th></th>
			</thead>
			<tbody>
				@foreach($intakeo as $intake)
				<tr>
					<td>{{ $intake->voornaam." ".$intake->familienaam }}</td>
					<td>{{ $intake->rubriek }}</td>
					<td>{{ $intake->vraag }}</td>
					<td>
						<a href="/intakes/{{ $intake->id }}/edit"  title="wijzig de invoer">
							<i class="fa fa-edit"></i>
						</a>
						&nbsp;
						<a href="/clients/{{ $intake->id }}/createwithid" title="vul de volledige gegevens in">
							<i class="fa fa-folder-open"></i>
						</a>
						&nbsp;
						<a href="/intakes/{{ $intake->id }}/destroy" title="verwijder deze invoer">
							<i class="fa fa-trash"></i>
						</a>
						
					</td>
				</tr>
				@endforeach
				{{ $intakeo->links() }}
			</tbody>
		</table>
	</div>
	
	<h1 class="d-flex justify-content-center">Overzicht van afgewerkte aanvragen</h1>
	
	
	<div class="table-responsive">
		<table class="table table-hover table-bordered table-sm table-primary text-dark">
			<thead>
				<th>naam</th>
				<th>rubriek</th>
				<th>vraag</th>
				<th></th>
			</thead>
			<tbody>
				@foreach($intaket as $intake)
				<tr>
					<td>{{ $intake->voornaam." ".$intake->familienaam }}</td>
					<td>{{ $intake->rubriek }}</td>
					<td>{{ $intake->vraag }}</td>
					<td>

						<a href="/intakes/{{ $intake->id }}/destroy" title="verwijder deze invoer">
							<i class="fa fa-trash"></i>
						</a>
						
					</td>
				</tr>
				@endforeach
				{{ $intaket->links() }}
			</tbody>
		</table>
	</div>
</div>
@endsection
