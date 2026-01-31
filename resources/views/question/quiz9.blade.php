<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <tr>
            <td>ID:{{ $quiz->id }}<br></td>
            <td>名前:{{ $quiz->name }}<br></td>
            <td>種別:{{ $quiz->type }}<br></td>
            <td>作成日時:{{ $quiz->created_at }}<br></td>
            <td>更新日時:{{ $quiz->updated_at }}</td>
        </tr>
</body>
</html>