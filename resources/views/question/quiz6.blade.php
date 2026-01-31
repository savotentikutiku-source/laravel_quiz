@extends('common.main')
@section('content')
<body>

        @foreach ($quizzes as $quiz)
        <tr>
            <td>ID:{{ $quiz->id }}<br></td>
            <td>名前:{{ $quiz->name }}<br></td>
            <td>種別:{{ $quiz->type }}<br></td>
            <td>作成日時:{{ $quiz->created_at }}<br></td>
            <td>更新日時:{{ $quiz->updated_at }}</td>
        </tr>
        @endforeach
    <!-- </table> -->
</body>
@endsection
</html>
