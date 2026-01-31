@extends('common.main')
@section('content')
<body>

        
        <tr>
            <td>
                <h1>クイズ登録画面<br></h1>
            </td>
            <td>
                <form action="{{ url('quiz10/store') }}" method="post">
                @csrf
                <input type="text" name="name" placeholder="名前を入力"><br>
                <input type="number" name="type" placeholder="数値を入力"><br>    
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
