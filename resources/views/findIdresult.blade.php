<html>
    <body>
        <h3>{{ $name }}님의 아이디</h3>
        <div>
            <ul>
                @foreach($result as $i => $v)
                <li>{{ $v }}</li>
                @endforeach
            </ul>
        </div>
    </body>
</html>