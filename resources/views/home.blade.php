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
    <h1>testo prova</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">agenzia</th>
            <th scope="col">codice treno</th>
            <th scope="col">partenza</th>
            <th scope="col">arrivo</th>
          </tr>
        </thead>

        <tbody>
            @foreach ($trains as $train)

                <tr>
                    <th scope="row">{{ $train->agency }}</th>
                    <td>{{ $train->code_train }}</td>
                    <td>{{ $train->departure_station }}</td>
                    <td>{{ $train->arrival_station }}</td>
                    <td>{{ $train->departure_date }}</td>
                </tr>
            @endforeach

        </tbody>
      </table>
</body>
</html>
