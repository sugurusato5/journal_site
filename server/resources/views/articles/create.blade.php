<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>新規論文投稿</h1>
    <form action="/articles" method="post">
        @csrf
        <p>論文タイトル<br>
            <input type="text" name="title" value="{{ old('title') }}">
        </p>
        <p>
            本文<br>
            <textarea name="body" id="" cols="20" rows="2"></textarea>
        </p>
        <input type="submit" value="投稿">
    </form>
</body>
</html>