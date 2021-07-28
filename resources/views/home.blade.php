<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>



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

                        {{ \Illuminate\Support\Facades\Auth::user()->name }}{{ __('  - You are logged in!') }}

                </div>
                <div class="card-header">{{ __('Dashboard') }}</div>

            </div>
            <div class="list-group myusers" style="height: content-box; background: #f9d6d5;">
                <h2> Check User to your Favorite</h2>

            </div>

        </div>
    </div>
</div>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script {{-- class="jsss123" --}}>
    $.ajax({
        url: "/api/home",
        type: "GET",
        dataType:"json",
        success(data){
            for (let index in data) {
                $('.myusers').append(`
                    <div class="card" style="width:18rem; margin-right: 10px;">
                        <div class="card-body">
                            <h3 class="card-title">${data[index].login }</h3>

                        </div>
                    </div>
                `)

            }

        }
    })
</script>

{{-- rfr coment --}}

{{-- <p class="card-text">${data[index].login}</p> --}}

</body>
</html>
