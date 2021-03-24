<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/app.css" rel="stylesheet">
    <title> {{$at->name}} </title>
</head>
<body>

    <div >
        <h1 class="display-4 border">
        {{$at->name}} 
    </h1>
    </div>
    <hr>
    <div style="text-align: justify !important; color:dodgerblue">
        {{$at->descripcion}}
    </div>

    
</body>
</html>