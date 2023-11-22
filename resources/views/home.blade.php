<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Styles -->
    @vite('resources/js/app.js')
</head>
<body>
    <div class="container">

        <h1>Treni</h1>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Agenzia</th>
                <th scope="col">Codice treno</th>
                <th scope="col">Stazione partenza</th>
                <th scope="col">Stazione arrivo</th>
                <th scope="col">Giorno e ora partenza</th>
                <th scope="col">Carrozze</th>
                <th scope="col">Stato</th>
              </tr>
            </thead>

            <tbody>
                @foreach ($trains as $train)

                    <tr>
                        <td>{{ $train->agency }}</th>
                        <td>{{ $train->code_train }}</td>
                        <td>{{ $train->departure_station }}</td>
                        <td>{{ $train->arrival_station }}</td>
                        <td>{{ $train->departure_date }}</td>
                        <td>{{ $train->carriage_number }}</td>
                        @if (!$train->train_cancelled)
                            <td></td>


                        @else
                            <td>CANCELLATO</td>


                        @endif

                    </tr>
                @endforeach

            </tbody>
          </table>
    </div>
</body>
</html>
