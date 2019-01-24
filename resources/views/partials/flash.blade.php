@if ($flash = session('bericht'))
   <div class='alert alert-success' role='alert'>
     {{ $flash }}
   </div>
@endif
