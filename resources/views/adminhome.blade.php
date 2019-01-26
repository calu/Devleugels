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
            
        @include(
            'admin.partials.card',
            [
                'header' => 'mutualiteiten',
                'icon' => 'fa-folder-open',
                'text' => 'In dit onderdeel voer je alle bewerkingen uit op mutualiteiten (edit, delete, add)',
                'button' => 'bewerk mutualiteiten',
                'href' => '/mutualities'
            ]
        )

        @include(
            'admin.partials.card',
            [
                'header' => 'diensten',
                'icon' => 'fa-folder-open',
                'text' => 'In dit onderdeel voer je alle bewerkingen uit op diensten (edit, delete, add)',
                'button' => 'bewerk diensten',
                'href' => '/services'
            ]
        )
            
    </div>
</div>
@endsection
