@extends('master')

@section('content')

<div class="card">
    <div class="card-header">Edit Artist</div>
    <div class="card-body">
        <form method="post" action="{{ route('artists.update', $artist->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Artist Name</label>
                <div class="col-sm-10">
                    <input type="text" name="artist_name" class="form-control" value="{{ $artist->artist_name }}" />
                </div>
            </div>
            <div class="text-center">
                <input type="hidden" name="hidden_id" value="{{ $artist->id }}" />
                <input type="submit" class="btn btn-primary" value="Edit" />
            </div>
        </form>
    </div>
</div>

@endsection('content')
