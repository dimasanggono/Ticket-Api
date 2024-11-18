@extends('Layouts.template_admin')


@section('content')

<div class="col-md-8">
    <div class="card">
        <img src="{{Storage::url($event->image_event)}}" class="card-img w-100" alt="">
        <div class="card-body">
            <h1 class="card-title">{{$event->name_event}}</h1>
            <div class="card-about">
                <p>{{$event->description}}</p>
            </div>
        </div>
    </div>
</div>
<div class="col-md-4">
</div>

@endsection
