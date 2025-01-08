<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio</title>
</head>
<body>
    <h1>Meus Projetos</h1>
    @if($projects->isEmpty())
        <p>Sem projetos cadastrados ainda.</p>
    @else
        <ul>
            @foreach($projects as $project)
                <li>
                    <h2>{{ $project->title }}</h2>
                    <p>{{ $project->description }}</p>
                    <a href="{{ $project->url }}" target="_blank">Ver Projeto</a>
                </li>
            @endforeach
        </ul>
    @endif
</body>
</html>
