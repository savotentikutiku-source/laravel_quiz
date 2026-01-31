<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('quiz9/1') }}" method="post">
        @csrf
    <a href="{{ url('quiz6') }}">Quiz6にurl関数で遷移する</a><br>
    <a href="{{ route('quiz6_test') }}">Quiz6にroute関数で遷移する</a><br>
    <a href="{{ url('quiz9/1') }}">Quiz9にurl関数で遷移する</a><br>
    <a href="{{ route('quiz9_test', ['id' => 1]) }}">Quiz9にroute関数で遷移する</a><br>
    <input type="text" name="text">    
    <input type="submit" value="Quiz9にPOSTで遷移する">
    
</form>

</body>
</html>