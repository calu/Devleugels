@extends('layouts.vleugelslayout')

@section('content')
<div class="super_container">
	<div class="search-box">
		<div class="container">
			<div class="row">
				<div class="col">
					<table class="table table-sm">
						<tbody>
							<tr class="table-primary">
								<td>
									<p>Beste Contactpersoon</p>
									<p>In dit formulier vragen we heel wat persoonlijke gegevens, maar
										we willen je graag contacteren om een intake gesprek te hebben zodat
										we beter kunnen op je vragen kunnen antwoorden.</p>
									<p>Het is onze bedoeling om zo de gepaste diensten te kunnen leveren
									</p>
								</td>
							</tr>
						</tbody>
					</table>
					<div class="search-box-container d-flex flex-row align-items-center justify-content-start">
						<div class="search_form_container">
							@include('partials.formerror')
							
							{!! Form::open(['url' => 'intakes']) !!}
								@include('intakes.form')
							{!! Form::close() !!}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection