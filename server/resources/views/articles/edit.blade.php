<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>投稿論文編集</h1>
    <form action="/articles/{{ $article->id }}" method="post">
        @csrf
        @method('PUT')
        <p>論文タイトル<br>
            <input type="text" name="title" value="{{ $article->title }}">
        </p>
        <p>本文<br>
            <textarea name="body" id="" cols="20" rows="2"></textarea>
        </p>
        <input type="submit" value="更新">
    </form>
</body>
</html>