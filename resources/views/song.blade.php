<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Song</title>
    </head>
    <body>
        <h1>Songs</h1>
        <table>
            <tr>
                <th>Title</th>
                <th>Singer</th>
                <th>Length</th>
            </tr>
            @foreach($songs->sortBy("title") as $song)
                <tr>
                    <td>{{ $song->title }}</td>
                    <td>{{ $song->singer }}</td>
                    <td>{{ $song->length }} s</td>
                </tr>
            @endforeach
        </table>
    </body>
</html>
