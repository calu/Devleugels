@extends('layouts.vleugelslayout')

@section('content')
<div class="super_container">
	<div class="search-box">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="search-box-container d-flex flex-row align-items-center justify-content-start">
						<div class="search_form_container">
							@include('partials.formerror')
							
							{!! Form::open(['url' => 'mutualities']) !!}
								@include('mutualities.form')
							{!! Form::close() !!}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection