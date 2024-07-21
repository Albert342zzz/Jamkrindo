@extends('dashboard')

@section('content')
<div class="d-flex">
    <h2>Show LOB</h2>
    <a class="btn btn-success ml-auto" href="{{route ('lob.index') }}">Back</a>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>LOB : </strong>{{$data_lob->lob}}<br>
            <br>
            <strong>Penyebab Klaim : </strong>{{$data_lob->cause}}<br>
            <br>
            <strong>Jumlah Nasabah : </strong>{{$data_lob->total_customer}}<br>
            <br>
            <strong>Beban Klaim : </strong>{{$data_lob->total_claim}}<br>
        </div>
    </div>
</div>

@endsection