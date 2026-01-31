<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if ($fruits == "orange")
        <p>これはオレンジです。</p>
    @elseif ($fruits == "banana")
        <p>これはバナナです。</p>
    @else
        <p>その他の果物です。</p>
    @endif
</body>
</html>