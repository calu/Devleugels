@extends('admin.layouts.adminlayout')

@section('content')
<div class="container">

    <h1 class="d-flex justify-content-center">Dashboard van de beheerder</h1>
        
    <div class="row">
        @include(
            'admin.partials.card', 
            [
                'header' => 'intake aanvragen', 
                'icon' => 'fa-envelope',
                'text' => 'Een overzicht van alle aanvragen. Je kan deze editeren, aanvullen bij het intake gesprek of verwijderen',
                'button' => 'aanvragen',
                'href' => '/intakes'
            ])
            
    </div>
</div>
@endsection
