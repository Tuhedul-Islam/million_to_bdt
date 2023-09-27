<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Million to BDT</title>
</head>
<body>
<p>Email: {{ $config_mail??'' }}</p>
<p>Million: Bdt</p>
<ul>
    @foreach($logs as $log)
        <li>{!! $log->million_value !!}: {!! $log->bdt_value !!}</li>
        <br>
    @endforeach
</ul>
</body>
</html>
