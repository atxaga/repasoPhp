<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Ikasleak</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Ikasleen Zerrenda</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Izena</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($ikasleak as $ikaslea)
                <tr>
                    <td>{{ $ikaslea['id'] }}</td>
                    <td>{{ $ikaslea['izena'] }}</td>
                    <td>{{ $ikaslea['email'] }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">No hay ikasleak disponibles.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>

