@extends('dashboard')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit LOB</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success ml-auto" href="{{route ('lob.index') }}">Back</a>
        </div>
    </div>
</div>
@if(count($errors)>0)
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input. <br><br>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

<form method="POST" action="{{ route('lob.update', $data_lob->id) }}">
    @method('PATCH')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                @csrf
                <label for="lob">LOB:</label><br>
                <select name="lob" id="lob" required>
                    <option value="Suretyship">Suretyship</option>
                    <option value="KUR">KUR</option>
                    <option value="PEN">PEN</option>
                    <option value="Produktif">Produktif</option>
                    <option value="Konsumtif">Konsumtif</option>
                </select><br>
                @error('lob')
                <div>{{ $message }}</div>
                @enderror

                <label for="cause">Penyebab Klaim:</label><br>
                <input type="text" id="cause" name="cause" required><br>
                @error('cause')
                <div>{{ $message }}</div>
                @enderror

                <label for="total_customer">Jumlah Nasabah:</label><br>
                <input type="number" id="total_customer" name="total_customer" required><br>
                @error('total_customer')
                <div>{{ $message }}</div>
                @enderror

                <label for="total_claim">Beban Klaim:</label><br>
                <input type="number" id="total_claim" name="total_claim" required><br>
                @error('total_claim')
                <div>{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>
</form>
@endsection