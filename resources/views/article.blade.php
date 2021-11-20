@extends ('layouts.layout')
@section('content')
<div>
    <h1>О нас</h1>
    <p>Добро пожаловать!</p>
    <p>Рады Вас видеть:)</p>
    </div>
<form method="post">
    @csrf
    <input placeholder="Введите имя" type="text" name="name" id="name" style="border:1px solid DarkSeaGreen">
    <input placeholder="Введите текст" type="text" name="short_text" id="short_text" style="border:1px solid DarkSeaGreen">
    <input type="date" name="data_create" id="data_create" style="border:1px solid DarkSeaGreen">
    <button type="submit">Отправить</button>
</form>

@endsection