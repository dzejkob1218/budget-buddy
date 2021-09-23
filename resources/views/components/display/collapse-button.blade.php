@props(['target'])

<button class="btn btn-primary mx-2" type="button" data-toggle="collapse" data-target="#{{$target}}"
        aria-expanded="true" aria-controls="{{$target}}">
    Expand {{$target}}
</button>
