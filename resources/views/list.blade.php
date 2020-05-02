<html>
    <head>
        <title> List Mahasiswa</title>
    </head>
    <body>
        @foreach($data as $item)
            <div> {{$item->id }} name: {{$item->name}}, hobby: {{$item->hobby}}</div>
        @endforeach
    </body>
</html>