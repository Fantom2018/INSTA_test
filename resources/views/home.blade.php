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
            <div class="list-group myusers" style="height: content-box; background: #fff;">
                <h2 class="h2-1">   Check User to your Favorite users by "nicname"</h2>

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
                    <div class="card" >
                        <div class="card-body favor"  >
                            <h3 class="card-title mm">${data[index].login }</h3>
                            <div class="form-check form-switch">
                              <input class="form-check-input " type="checkbox" id="flexSwitchCheckDefault">
                              <label class="form-check-label" for="flexSwitchCheckDefault">Favorits</label>
                            </div>

                        </div>
                    </div>
                `)

            }

        }
    })
</script>
<style>
    .favor{
        height: content-box;
        background:  rgba(0, 0, 0, 0.03);
        border: 3px solid rgb(255, 255, 255);
        display: flex;
        justify-content:space-between;
        height: 18px;
        align-items: center;

    }
    .form-check-label{
        font-size: 14px;

    }

    .mm{
       font-size: 18px;
       font-weight: bold;
       color: rgb(230, 168, 23);
    }

    .h2-1{
       font-size: 22px;
       font-weight: bold;
       margin: 8px auto;
       text-align: center;
    }


</style>


{{-- rfr coment --}}

{{-- <p class="card-text">${data[index].login}</p> --}}

</body>
</html>
