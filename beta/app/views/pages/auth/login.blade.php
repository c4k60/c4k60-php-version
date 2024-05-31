@extends('layouts.default')

@section('title', 'Đăng nhập')

@section('content')
    <div id="root">
        {{-- Login Form --}}
        <div style="display: flex;justify-content:center">
            <img src="/assets/images/text-logo.png" alt="C4K60 Logo" style="height: 70px;margin-top: 20px">
        </div>
        <div style="margin-top: 20px">
            <form action="" method="POST" style="display:flex;flex-direction:column;gap:20px">
                @csrf
                <div style="position: relative;">
                    <ion-icon name="person" style="position: absolute;top:17px;left:14px"></ion-icon>
                    <input type="text" name="username" id="username" class="form-control" placeholder="Tên đăng nhập">
                </div>
                <div style="position: relative;">
                    <ion-icon name="lock-closed" style="position: absolute;top:17px;left:14px"></ion-icon>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Mật khẩu">
                </div>
                <button class="btn btn-warning"
                    style="border-radius: 25px;height:50px;font-weight:700;background-color: #fbda01">ĐĂNG NHẬP</button>
            </form>
        </div>
        <!-- if error then show -->
        @unless (empty($error))
            <div class="alert alert-danger mt-4" role="alert">
                {{ $error }}
            </div>
        @endunless
    </div>
@endsection
@section('menuActive', 'active')
