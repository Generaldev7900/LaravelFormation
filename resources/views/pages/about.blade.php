@inject('nomObjet', 'App\Utilities\GetWeekend')

@extends("base", ['titre' => 'Page About'])

@section('vitrine')
    <h1>Bienvenue sur Kms_Tech - Page About</h1>

    {{ $nomObjet->getWeek() }}

   @push('message_js')
        <script src="js/index.js"></script>
    @endpush
@endsection