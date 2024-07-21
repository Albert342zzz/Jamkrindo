@extends('dashboard')

@section('content')
<div class="d-flex">
    <h2>Activity Log</h2>
</div>

@if($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{$message}}</p>
</div>
@endif

<table class="table table-bordered">
    <tr align="center">
        <th>Total Data Terkirim</th>
        <th>Status</th>
        <th>Tanggal Pengiriman Data</th>
    </tr>

    @if(count($logs))
    @foreach($logs as $log)
    <tr>
        <td>{{ $log->total_data }}</td>
        <td>{{ $log->status }}</td>
        <td>{{ $log->integrated_date }}</td>
    </tr>
    @endforeach
    @else
    <tr>
        <td align="center" colspan="3">Empty Data!! :)</td>
    </tr>
    @endif
</table>
@endsection