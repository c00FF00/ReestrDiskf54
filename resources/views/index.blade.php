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
    <div class="panels">

@foreach($result as $item)
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Запись №: {{ $item->number_of_the_record }}</h3>
            </div>
            <div class="panel-body">
              <p>Ф.И.О.  {{ $item->full_name }}</p>
              <p>Дата рождения {{ $item->date_of_birth }}</p>
                <p></p>{{ $item->place_of_birth }}
                {{ name_of_the_organization',--}}
                {{--'number_of_the_organization',--}}
                {{--'post_of_the_person',--}}
                {{--'administrative_code',--}}
                {{--'punitive_organization',--}}
                {{--'name_of_the_judge',--}}
                {{--'position_of_the_judge',--}}
                {{--'period_of_ineligibility',--}}
                {{--'start_date',--}}
                {{--'date_of_expiry'--}}
            </div>
        </div>
@endforeach

    </div>


</div>


</body>
</html>