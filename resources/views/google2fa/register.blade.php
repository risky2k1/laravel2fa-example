@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card card-default">
                    <h4 class="card-heading mt-3 text-center ">
                        Thiết lập xác thực 2 lớp
                    </h4>
                    <div class="card-body text-center">
                        <p>Thiết lập sử dụng code: <strong>{{$secret}}</strong></p>
                        <br>
                        <span>hoặc dùng mã QR sau:</span>
                        <div>
                            <br>
                            {{$QR_image}}
                            <img src="{{$QR_image}}" alt="QR_image">
                        </div>
                    </div>
                    <a href="#"  class="btn btn-success">Hoàn thành việc thiết lập</a>
                </div>
            </div>
        </div>
    </div>
@endsection