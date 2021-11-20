@extends ('layouts.layout')
<div>
    @foreach($name as $key)
    <p>
        {{$key}}
    </p>
    @endforeach
</div>
</body>
</html>