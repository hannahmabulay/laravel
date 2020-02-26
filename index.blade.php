<!DOCTYPE html>
<html lang="en">
<head>
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<h1 class="title is-1">LIST OF ALL ARTISTS</h1>
<table class="table is-bordered is-striped">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Actions</th>
    </thead>
    <tbody>
        @foreach($allArtists as $artist)
        <tr>
            <td>{{ $artist->id }}</td>
            <td>{{ $artist->name}}</td>
            <td style="width: 50% !important">{{ $artist->description }}</td>
            <td>
                <a href="/artist/{{$artist->id}}/edit" class="button is-primary"><i class="fa fa-pencil"></i></a>
                <button class="button is-danger"><i class="fa fa-close"></i></button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>
