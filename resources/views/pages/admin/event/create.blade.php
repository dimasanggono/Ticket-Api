@extends('Layouts.template_admin')

@section('content')
<div class="col-md-1"></div>
<div class="col-md-10">
    <div class="card card-outline-primary">
        <div class="card-header" style="background: blue ; color: #ffff;">
            <h2 class="text-center">Form Add Event</h2>
            <a href="" class="btn btn-sm text-white card-tooltips"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
        </div>
        <div class="card-body">
            <form action="" method="post">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="name_event">Name Event</label>
                        <input type="text" name="name_event" id="name_event" class="form-control" placeholder="Enter You Name Event" required>
                    </div>
                    <div class="col-md-4">
                        <label for="date">Date Event</label>
                        <input type="date" name="date" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <label for="location">Location Event</label>
                        <input type="text" id="location" name="location" class="form-control" placeholder="Location Event.." required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="">
                            Image Event
                        </label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="">User Promotor</label>
                        <input type="text" placeholder="Enter Promotor" class="form-control" required>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="col-md-1"></div>
@endsection
