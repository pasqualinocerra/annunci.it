<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Richiesta revisore</title>
</head>
<body>
    <h2>Ciao amministratore di Annunci.it</h2>
    <h3>Hai appena ricevuto la richiesta di diventare revisore da</h3>

    <ul>
        <li>nome : {{ $name }}</li>
        <li>email : {{ $email }}</li>
    </ul>

   <a href="{{ route('abilita.revisore', auth()->user()) }}">Clicca qui per abilitarlo</a>
</body>
</html>