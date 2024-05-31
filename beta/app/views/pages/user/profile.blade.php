@extends('layouts.default')

@section('title', 'Trang cá nhân')

@section('content')
    <div id="root">
        <div
            style="background-color: rgb(190, 190, 190); height: 220px; width: 100%; border-radius: 20px;position: relative;">
            <img src="{{ $profile->avatar }}" alt="{{ $profile->name }}'s avatar"
                style="width: 150px;border-radius: 50%;outline: 5px solid #ededed;position: absolute;left: calc(50% - 150px/2);top: 50%">
        </div>
        <div style="margin-top: 50px;display:flex;flex-direction:column;align-items:center">
            <div style="display: flex;flex-direction:row;align-items:center;gap: 5px">
                <h1 class="h3" style="font-weight: 700;margin:0">{{ $profile->name }}</h1>
                {!! $profile->verified == 1
                    ? "<ion-icon name=\"checkmark-circle\" style=\"font-size: 24px;color: #166cff\"></ion-icon>"
                    : '' !!}

            </div>
            <span style="font-size: 17px;">{{ $profile->short_name }}</span>
            <span style="line-height: 17px;color: gray">@<?= $profile->username ?></span>
        </div>
        <div style="border-top: 10px solid rgb(190, 190, 190);margin: 20px -15px"></div>
        <div>
            <h2 style="font-weight: 600;font-size: 19px;margin-bottom: 15px">Thông tin chi tiết</h2>
            <div style="display: flex;flex-direction:row;align-items:center;gap:5px;margin-bottom: 15px">
                <ion-icon style="font-size: 24px" name="location"></ion-icon>
                <span>Đến từ</span>
                <span style="font-weight: 700">{{ $profile->address }}</span>
            </div>
            <div style="display: flex;flex-direction:row;align-items:center;gap:5px;margin-bottom: 15px">
                <ion-icon style="font-size: 24px" name="gift"></ion-icon>
                <span>Sinh ngày</span>
                <span
                    style="font-weight: 700">{{ $profile->dayofbirth . '/' . $profile->monthofbirth . '/' . $profile->yearofbirth }}</span>
            </div>
            <div style="display: flex;flex-direction:row;align-items:center;gap:5px;margin-bottom: 15px">
                <ion-icon style="font-size: 24px" name="call"></ion-icon>
                <span goto="tel:{{ $profile->phone_number }}" style="font-weight: 700">{{ $profile->phone_number }}</span>
            </div>
        </div>
        <div style="border-top: 10px solid rgb(190, 190, 190);margin: 20px -15px"></div>
        <div>
            <h2 style="font-weight: 600;font-size: 19px;margin-bottom: 15px">Tính cách</h2>
            <span>{{ $profile->additional_info }}</span>
        </div>
    </div>
@endsection
@section('menuActive', 'active')
