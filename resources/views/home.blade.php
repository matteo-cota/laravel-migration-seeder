<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treni in Partenza</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite('resources/css/app.css')

</head>
<body>
    <div class="container my-5">
        <h1 class="text-center mb-4">Treni in Partenza Oggi</h1>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Azienda</th>
                    <th>Stazione di Partenza</th>
                    <th>Stazione di Arrivo</th>
                    <th>Orario di Partenza</th>
                    <th>Orario di Arrivo</th>
                    <th>Codice Treno</th>
                    <th>Numero Carrozze</th>
                    <th>In Orario</th>
                    <th>Cancellato</th>
                </tr>
            </thead>
            <tbody>
                @foreach($trains as $train)
                    <tr class="{{ $train->cancellato ? 'table-danger' : '' }}">
                        <td>{{ $train->azienda }}</td>
                        <td>{{ $train->stazione_partenza }}</td>
                        <td>{{ $train->stazione_arrivo }}</td>
                        <td>{{ $train->orario_partenza }}</td>
                        <td>{{ $train->orario_arrivo }}</td>
                        <td>{{ $train->codice_treno }}</td>
                        <td>{{ $train->numero_carrozze }}</td>
                        <td>
                            <span class="badge {{ $train->in_orario ? 'bg-success' : 'bg-warning' }}">
                                {{ $train->in_orario ? 'Sì' : 'No' }}
                            </span>
                        </td>
                        <td>
                            <span class="badge {{ $train->cancellato ? 'bg-danger' : 'bg-success' }}">
                                {{ $train->cancellato ? 'Sì' : 'No' }}
                            </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
