@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <form action="/pesan" method="post">
        <select name="jenis" id="jenis">
            <option value="baju">Baju</option>
            <option value="jaket">Jaket</option>
            <option value="boneka">Boneka</option>
            <option value="sprei">Sprei + Sarung bantal</option>
        </select>
        <!-- <input type="text" value="setrika" id="" class="setrika">//onchange -->
        <input type="number" name="berat"><span>
            <p>kg</p>
        </span>
        <input type="number" name="harga">
        <button type="submit">Booking</button>
    </form>
</div>
<script>
    var jenis = document.getElementById('jenis');
    var setrika = document.getElementById('setrika');

    if (jenis.value != "boneka") {
        setrika.style.display = "block";
    } else {
        setrika.setAttribute('type', 'hidden');
        setrika.style.display = "none";
    }
</script>
@endsection