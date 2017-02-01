<div class="panels">
    @foreach($result as $item)
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Запись №: {{ $item->number_of_the_record }}</h3>
            </div>
            <div class="panel-body">
                <table>
                    <tr>
                        <td>Ф.И.О.</td>
                        <td>{{ $item->full_name }}</td>
                    </tr>
                    <tr>
                        <td>Дата рождения</td>
                        <td>{{ $item->date_of_birth }}</td>
                    </tr>
                    <tr>
                        <td>Место рождения</td>
                        <td>{{ $item->place_of_birth }}</td>
                    </tr>
                    <tr>
                        <td>Название организации</td>
                        <td>{{ $item->name_of_the_organization }}</td>
                    </tr>
                    <tr>
                        <td>Должность</td>
                        <td>{{ $item->post_of_the_person }}</td>
                    </tr>
                    <tr>
                        <td>Статья</td>
                        <td>{{ $item->administrative_code }}</td>
                    </tr>
                    <tr>
                        <td>Орган</td>
                        <td>{{ $item->punitive_organization }}</td>
                    </tr>
                    <tr>
                        <td>Имя судьи</td>
                        <td>{{ $item->name_of_the_judge }}</td>
                    </tr>
                    <tr>
                        <td>Позиция судьи</td>
                        <td>{{ $item->position_of_the_judge }}</td>
                    </tr>
                    <tr>
                        <td>Период дисквалификации</td>
                        <td>{{ $item->start_date }} - {{ $item->date_of_expiry }}</td>
                    </tr>
                </table>
            </div>
        </div>
    @endforeach
</div>