<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>名前</th>
            <th>種別</th>
            <th>作成日時</th>
            <th>更新日時</th>
            <th>編集</th>
            <th>削除</th>
        </tr>
        <!-- <?php foreach ($quizzes as $quiz): ?>
        <tr>
            <td><?php echo $quiz['id'] ?></td>
            <td><?php echo $quiz['name'] ?></td>
            <td><?php echo $quiz['type'] ?></td>
            <td><?php echo $quiz['created_at'] ?></td>
            <td><?php echo $quiz['updated_at'] ?></td>
        </tr>
        <?php endforeach; ?> -->

        @foreach ($quizzes as $quiz)
        <tr>
            <td>{{ $quiz->id }}</td>
            <td>{{ $quiz->name }}</td>
            <td>{{ $quiz->type }}</td>
            <td>{{ $quiz->created_at }}</td>
            <td>{{ $quiz->updated_at }}</td>
            <td><a href="{{ url('quiz12/' . $quiz->id) }}">編集する</a></td>
            <td><a href="{{ url('quiz12/delete/' . $quiz->id) }}">削除する</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>