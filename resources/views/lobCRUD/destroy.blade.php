@extends('dashboard')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Delete LOB</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success ml-auto" href="{{route ('lob.index') }}">Back</a>
        </div>
    </div>
</div>

<form method="POST" action="{{ route('lob.destroy', $data_lob->id) }}">
    @method('DELETE')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <h1>Yakin Mau Hapus?</h1>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-danger">Delete</button>
        </div>
    </div>
</form>
@endsection