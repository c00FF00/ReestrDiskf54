<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/app.css" rel="stylesheet" type="text/css">
    <script src="/js/app.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>


<div class="main">
    <div class="page-header">
        <h1>Реестр дисквалифицированных лиц</h1>
    </div>
    <form class="form-inline" action="/reestr" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="Family"></label>
            <input type="text" size="40" class="form-control" name="family" id="Family" placeholder="Фамилия">
        </div>
        <button type="submit" class="btn btn-default">Запросить</button>
    </form>
    @if(! null == $result)
        @include('panels.panels')
    @endif

</div>


</body>
</html>