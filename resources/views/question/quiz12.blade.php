@extends('common.main')
@section('content')
<body>

        
        <tr>
            <td>
                <h1>クイズ更新画面<br></h1>
            </td>
            <td>
                <form action="{{ url('quiz12/update/' . $quiz->id) }}" method="post">
                @csrf
                <input type="text" name="name" value="{{ $quiz->name }}" placeholder="名前を入力"><br>
                <input type="number" name="type" value="{{ $quiz->type }}" placeholder="数値を入力"><br>    
                <input type="submit" value="送信ボタン">
            </td>
            
        </tr>
        @if($errors ->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>  
        @endif
    
</body>
@endsection
</html>
