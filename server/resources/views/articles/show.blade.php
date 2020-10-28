<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>論文詳細</h1>
    <p>タイトル:{{ $article->title }}</p>
    <p>{{ $article->body }}</p>
    <div style="display:inline-flex">
        <a href="/articles"><input type="submit" value="一覧へ戻る"></a>
        <a href="/articles/{{ $article->id }}/edit"><input type="submit" value="編集する"></a>
        <form action="/articles/{{ $article->id}}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return fales};">
        </form>
    </div>
</body>
</html>