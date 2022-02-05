<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de variantes Covid 19</title>
</head>
<body>
    <h1>Lista de variantes Covid19</h1>
    <p>*Actualizado al día 28 de enero</p>

    <table>
        <thead>
            <tr>
                <tr>Lineage</tr>
                <tr>Common countries</tr>
                <tr>Earliest date</tr>
                <tr>Designated number</tr>
                <tr>Assignated number</tr>
                <tr>Description</tr>
                <tr>WHO name</tr>
            </tr>
        </thead>
        <tbody>
            @foreach($variantes as $variante)
            <tr>
                <td>{{$variante->lineage}} </td>
                <td>{{$variante->commom_countries}}</td>
                <td>{{$variante->earliest_date}}</td>
                <td>{{$variante->designated_number}}</td>
                <td>{{$variante->assignated_number}}</td>
                <td>{{$variante->description}}</td>
                <td>{{$variante->who_name}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>