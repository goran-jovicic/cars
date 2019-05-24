<ul>
    @foreach ($cars as $car)
        <li>
            <a href="{{'/cars/' . $car->id}}">{{$car->title}}</a>
        </li>
    @endforeach
</ul>