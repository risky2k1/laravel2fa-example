@extends('layouts.app')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card card-default">
                    <h4 class="card-heading mt-3 text-center ">
                        Nhập code xác nhận bạn nhìn thấy trên app để đăng nhập
                    </h4>
                    <div class="card-body text-center">
                        <form action="{{route('2fa')}}" method="POST">
                            @csrf
                            <label>
                                <input name="one_time_password" type="text">
                            </label>

                            <button type="submit">Xác thực</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection