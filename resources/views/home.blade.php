<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body class="bg-success-subtle">
    <div class="container">
        <div class="row">
            <h1>Treni in partenza da oggi :</h1>
        @forelse($trains_today as $train)       
            <div class="col-4 p-3">
                <h3 class="text-success"><span class="fw-bolder">{{ $train->azienda }}</h3>
                <div>Giorno partenza:<span class="fw-bolder"> {{ $train->data_partenza }}</span></div>
                <div>Da: <span class="fw-bolder">{{ $train->stazione_partenza }}</span></div>
                <div>A:<span> {{ $train->stazione_arrivo }}</span></div>
                <div>Orario Partenza: <span class="fw-bolder">{{ $train->orario_partenza }}</span></div>
                <div>Orario Arrivo:<span class="fw-bolder"> {{ $train->orario_arrivo }}</span></div>
                <div>Codice:<span class="fw-bolder"> {{ $train->codice_treno }}</span></div>
                <div>Carrozze: <span class="fw-bolder">{{ !empty($train->numero_carrozze) ? $train->numero_carrozze : 'N/A'}}</span></div>
                <div>In Orario:<span class="fw-bolder"> {{ $train->in_orario ? 'Il treno è in orario!' : 'Il treno è in ritardo.' }}</span></div>
                <div class="text-danger">{{ $train->cancellato? 'Cancellato' : ''}}</div>
            </div>
        @empty
        <div class="col-12">
            <h3>Nessun treno in partenza oggi </h3>
        </div>
        @endforelse
        </div>
      


        <div class="row mt-5">
            <h1>Tutti i treni :</h1>
            @foreach($all_trains as $all_train)
                <div class="col-4 p-3">
                    <h3 class="text-success">{{ $all_train->azienda }}</h3>
                    <div>Giorno partenza:<span class="fw-bolder"> {{ $all_train->data_partenza }}</span></div>
                    <div>Da: <span class="fw-bolder">{{ $all_train->stazione_partenza }}</span></div>
                    <div>A:<span class="fw-bolder"> {{ $all_train->stazione_arrivo }}</span></div>
                    <div>Orario Partenza: <span class="fw-bolder">{{ $all_train->orario_partenza }}</span></div>
                    <div>Orario Arrivo: <span class="fw-bolder">{{ $all_train->orario_arrivo }}</span></div>
                    <div>Codice: <span class="fw-bolder">{{ $all_train->codice_treno }}</span></div>
                    <div>Carrozze:<span class="fw-bolder"> {{ !empty($all_train->numero_carrozze) ? $all_train->numero_carrozze : 'N/A'}}</span></div>
                    <div>In Orario:<span class="fw-bolder"> {{ $all_train->in_orario ? 'Il treno è in orario!' : 'Il treno è in ritardo.' }}</span></div>
                    <div class="text-danger">{{ $all_train->cancellato? 'Cancellato' : ''}}</div>
                </div>
            @endforeach 
        </div>
    </div>
</body>

</html>