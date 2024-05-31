@extends('layouts.default')

@section('title', 'Trang chủ')

@section('content')
    <div id="root">
        <div id="homeSlideshow" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#homeSlideshow" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#homeSlideshow" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#homeSlideshow" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#homeSlideshow" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#homeSlideshow" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner curve">
                <div class="carousel-item active" data-bs-interval="3000">
                    <div id="slideshow--1" class="d-block w-100" alt="Slideshow Image #1">
                        <div class="fade-to-black"></div>
                    </div>
                    <div class="carousel-caption">
                        <h5>Chào mừng đến với C4K60</h5>
                        <p>Cổng thông tin điện tử lớp 12 chuyên Nga Khóa 60 THPT Chuyên Biên Hòa.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <div id="slideshow--2" class="d-block w-100" alt="Slideshow Image #2">
                        <div class="fade-to-black"></div>
                    </div>
                    <div class="carousel-caption">
                        <h5>Nhanh, gọn, tiện lợi</h5>
                        <p>Đó là những từ có thể miêu tả trang web này.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <div id="slideshow--3" class="d-block w-100" alt="Slideshow Image #3">
                        <div class="fade-to-black"></div>
                    </div>
                    <div class="carousel-caption">
                        <h5>Không bao giờ bỏ lỡ thông tin</h5>
                        <p>Không phải mất thời gian lục lọi thông tin trong nhóm lớp là lợi ích mà trang web này mang
                            lại.
                        </p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <div id="slideshow--4" class="d-block w-100" alt="Slideshow Image #4">
                        <div class="fade-to-black"></div>
                    </div>
                    <div class="carousel-caption">
                        <h5>Kết nối thầy cô và bạn bè</h5>
                        <p>Gắn kết mọi người trong tập thể lớp và giáo viên với nhau, dù ở bất kỳ nơi đâu. Đó là tiêu
                            chí
                            hoạt động của web C4K60.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <div id="slideshow--5" class="d-block w-100" alt="Slideshow Image #5">
                        <div class="fade-to-black"></div>
                    </div>
                    <div class="carousel-caption">
                        <h5>Và còn nhiều tính năng khác...</h5>
                        <p>Hãy tự mình khám phá nhé! Chúc bạn có một trải nghiệm thú vị.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#homeSlideshow" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Trước</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#homeSlideshow" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Tiếp</span>
            </button>
        </div>
        @if (isset($_SESSION['user']))
            <div class="full-width user-greeting root-element" goto="/profile/{{ $_SESSION['user']->username }}">
                <div class="user-greeting--avatar-wrapper">
                    <img src={{ $_SESSION['user']->avatar }} class="user-greeting--avatar" alt="Loggedin User Avatar">
                </div>
                <div class="user-greeting--greeting">
                    <h5>Chào mừng, {{ $_SESSION['user']->name }}!</h5>
                    <p>Chúc bạn một ngày tốt lành và tràn đầy năng lượng.</p>
                </div>
                <div class="user-greeting--icon-wrapper">
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                </div>
            </div>
        @else
            <div class="full-width user-greeting root-element" goto="/login">
                <div class="user-greeting--avatar-wrapper">
                    <img src="/assets/images/user.png" class="user-greeting--avatar" alt="Unloggedin User Avatar">
                </div>
                <div class="user-greeting--greeting">
                    <h5>Bạn chưa đăng nhập!</h5>
                    <p>Hãy đăng nhập để trải nghiệm đầy đủ các tính năng tuyệt vời của trang web.</p>
                </div>
                <div class="user-greeting--icon-wrapper">
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                </div>
            </div>
        @endif
        <div class="shortcuts full-width root-element grid-container">
            <div class="shortcuts--button grid-item" goto="/photos">
                <div class="shortcuts--button-icon btn-photos">
                    <ion-icon name="images"></ion-icon>
                </div>
                <div class="shortcuts--button-title">Thư viện ảnh</div>
            </div>
            <div class="shortcuts--button grid-item" goto="/birthdays">
                <div class="shortcuts--button-icon btn-birthdays">
                    <ion-icon name="gift"></ion-icon>
                </div>
                <div class="shortcuts--button-title">Sinh nhật sắp tới</div>
            </div>
            <div class="shortcuts--button grid-item" goto="/profiles">
                <div class="shortcuts--button-icon btn-profile">
                    <ion-icon name="people"></ion-icon>
                </div>
                <div class="shortcuts--button-title">Hồ sơ thành viên</div>
            </div>
            <div class="shortcuts--button grid-item" goto="/friends-near-me">
                <div class="shortcuts--button-icon btn-near-here">
                    <ion-icon name="location"></ion-icon>
                </div>
                <div class="shortcuts--button-title">Bạn bè gần đây</div>
            </div>
            <div class="shortcuts--button grid-item" goto="/listen-together">
                <div class="shortcuts--button-icon btn-listen">
                    <ion-icon name="musical-notes"></ion-icon>
                </div>
                <div class="shortcuts--button-title">Nghe nhạc cùng nhau</div>
            </div>
            <div class="shortcuts--button grid-item" goto="/calendar">
                <div class="shortcuts--button-icon btn-calendar">
                    <ion-icon name="calendar-number"></ion-icon>
                </div>
                <div class="shortcuts--button-title">Lịch</div>
            </div>
        </div>
        <div class="quicklook-notifications default-panel p15 full-width root-element">
            <div class="default-panel--title">Thông báo lớp</div>
            <div class="q-noti">
                <div class="q-noti--timeline">
                    <div class="vertical-line"></div>
                    <ul>
                        @foreach ($notifications as $notification)
                            <li>
                                <div>
                                    <span class="timeline--date">
                                        {{ date('d/m/Y', strtotime($notification->date)) }}
                                    </span>
                                    <span class="timeline--noti-title link"
                                        goto="/notifications/{{ $notification->id }}">{{ $notification->title }}</span>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="default-panel p15 full-width root-element">
            <div class="default-panel--title">Sinh nhật sắp tới</div>
            @foreach ($birthdays as $birthday)
                <div>{{ $daysLeft[$birthday->id] }} ngày nữa là sinh nhật {{ $birthday->name }}
                    ({{ $birthday->dayofbirth }}/{{ $birthday->monthofbirth }})
                </div>
            @endforeach
        </div>
    </div>
@endsection
@section('homeActive', 'active')
