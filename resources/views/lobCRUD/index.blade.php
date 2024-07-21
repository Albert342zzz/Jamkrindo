@extends('dashboard')

@section('content')
<div class="d-flex">
    <h2>LOB CRUD</h2>
    <a class="btn btn-success ml-auto" href="{{route ('lob.create') }}">Create a New LOB</a>
</div>

@if($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{$message}}</p>
</div>
@endif

<table class="table table-bordered">
    <tr align="center">
        <th>LOB</th>
        <th>Penyebab Klaim</th>
        <th>Jumlah Nasabah</th>
        <th>Beban Klaim</th>
        <th width="220px">Action</th>
    </tr>

    @if(count($data_lobs))
    @php
    $current_lob = null;
    $subtotal_customer = 0;
    $subtotal_claim = 0;
    $total_customer = 0;
    $total_claim = 0;
    @endphp

    @foreach($data_lobs as $lob)
    @if($current_lob == null || $current_lob == $lob->lob)
    <tr>
        <td>{{ $lob->lob }}</td>
        <td>{{ $lob->cause }}</td>
        <td align="right">{{ $lob->total_customer }}</td>
        <td align="right">{{ $lob->total_claim }}</td>
        <td>
            <a class="btn btn-info" href="{{route ('lob.show',$lob->id) }}">Show</a>
            <a class="btn btn-primary" href="{{route ('lob.edit',$lob->id) }}">Edit</a>
            <a class="btn btn-danger" href="{{route ('lob.destroy',$lob->id) }}">Delete</a>
        </td>
    </tr>

    @php
    $subtotal_customer += $lob->total_customer;
    $subtotal_claim += $lob->total_claim;
    $total_customer += $lob->total_customer;
    $total_claim += $lob->total_claim;
    @endphp

    @else
    <tr style="color: white;" bgcolor="#15a1b8">
        <td colspan="2">Subtotal {{ $current_lob }}</td>
        <td align="right">{{ $subtotal_customer }}</td>
        <td align="right">{{ $subtotal_claim }}</td>
        <td></td>
    </tr>

    @php
    $subtotal_customer = 0;
    $subtotal_claim = 0;
    @endphp

    <tr>
        <td>{{ $lob->lob }}</td>
        <td>{{ $lob->cause }}</td>
        <td align="right">{{ $lob->total_customer }}</td>
        <td align="right">{{ $lob->total_claim }}</td>
        <td>
            <a class="btn btn-info" href="{{route ('lob.show',$lob->id) }}">Show</a>
            <a class="btn btn-primary" href="{{route ('lob.edit',$lob->id) }}">Edit</a>
            <a class="btn btn-danger" href="{{route ('lob.destroy',$lob->id) }}">Delete</a>
        </td>
    </tr>

    @php
    $subtotal_customer += $lob->total_customer;
    $subtotal_claim += $lob->total_claim;
    $total_customer += $lob->total_customer;
    $total_claim += $lob->total_claim;
    @endphp

    @endif
    @php($current_lob = $lob->lob)
    @endforeach

    <tr style="color: white;" bgcolor="#15a1b8">
        <td colspan="2">Subtotal {{ $current_lob }}</td>
        <td align="right">{{ $subtotal_customer }}</td>
        <td align="right">{{ $subtotal_claim }}</td>
        <td></td>
    </tr>
    <tr style="color: white;" bgcolor="#6b747b">
        <td colspan="2">Total</td>
        <td align="right">{{ $total_customer }}</td>
        <td align="right">{{ $total_claim }}</td>
        <td></td>
    </tr>
    @else
    <tr>
        <td align="center" colspan="5">Empty Data!! :)</td>
    </tr>
    @endif
</table>
@endsection