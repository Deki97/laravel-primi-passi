<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
</head>
<body>
    <h1>Hello World!</h1>

    {{-- Richiamo e stampo i dati in pagina tramite Blade --}}
    <h2>Name: {{ $name }}</h2>
    <h2>Lastname: {{ $lastname }}</h2>
    <h2>Age: {{ $age }}</h2>

    {{-- Tramite un ciclo foreach scorro l'array $interests e stampo ogni elemento in una li --}}
    <h3>Interests:</h3>
    <div>
        @foreach ($interests as $interest)
            <ul>
                <li>
                    {{ $interest }}
                </li>
            </ul>
        @endforeach
    </div>
</body>
</html>