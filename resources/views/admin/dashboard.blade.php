@extends('admin.template')
@section('content')
<style>
    .card:hover {
        background-color: rgba(0, 123, 255, .75) !important;
        cursor: pointer;
        transform: scale(.95);
    }
</style>
<div class="container d-flex justify-content-between w-100">
    <a class="card mx-1 w-100 bg-primary text-white text-decoration-none" href="rps/list-rps">
        <div class="card-title m-0">
            <p class="p-4 pb-1 h3 m-0 text-white">JUMLAH DOSEN</p>
        </div>
        <div class="card-body w-100">
            @php
            $user = DB::table('users')
            ->where('otoritas', '=', 'Dosen')
            ->get();
            $sum = 0;
            foreach($user as $dosen) :
            $sum+=1;
            endforeach
            @endphp
            <p class="h1 text-end pe-3 jumlah">{{$sum}}</p>
        </div>
    </a>
    <a class="card mx-1 w-100 bg-primary text-white text-decoration-none" href="cpl/list-cpl">
        <div class=" card-title m-0">
            <p class="p-4 pb-1 h3 m-0 text-white">JUMLAH MATA KULIAH</p>
        </div>
        <div class="card-body w-100">
            @php
            $mks = DB::table('mks')->get();
            $sum = 0;
            foreach($mks as $mk) :
            $sum+=1;
            endforeach
            @endphp
            <p class="h1 text-end pe-3 jumlah">{{$sum}}</p>
        </div>
    </a>
    <a class="card mx-1 w-100 bg-primary text-white text-decoration-none" href="cpmk/list-cpmk">
        <div class="card-title m-0">
            <p class="p-4 pb-1 h3 m-0 text-white"></p>
        </div>
        <div class="card-body w-100">
            <p class="h1 text-end pe-3 jumlah"></p>
        </div>
    </a>
</div>
@endsection