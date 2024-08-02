<!DOCTYPE html>
<html>
<head>
    <title>Comprobante de Pago</title>
</head>
<body>
    <h1>Comprobante de Pago</h1>
    <p>Pago ID: {{ $result->id }}</p>
    <p>Estado: {{ $result->state }}</p>
    <p>Monto: {{ $result->transactions[0]->amount->total }} {{ $result->transactions[0]->amount->currency }}</p>
    <p>Descripción: {{ $result->transactions[0]->description }}</p>
</body>
</html>
