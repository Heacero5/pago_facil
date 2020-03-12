<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
<body>
    <h1>Paises</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Pais</th>
                <th>Capital</th>
                <th>ciudades</th>
            </tr>
        </thead>
        <tbody>
            @foreach($paises as $pais=>$informacion)
                <tr>
                    <td rowspan="3"> {{ $pais}} </td>
                    <td rowspan="3">{{ $informacion["capital"] }} </td>
                    <td>{{ $informacion["ciudades"][0] }}</td>
                </tr>
                <tr>
                
                <td> {{ $informacion["ciudades"][1] }}</td>
                
                </tr>
                <td> {{ $informacion["ciudades"][2] }}</td>
                
                @endforeach
        </tbody>
    
    </table>

</body>
</html>