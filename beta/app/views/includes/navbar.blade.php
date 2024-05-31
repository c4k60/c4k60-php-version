<nav class="site-navbar">
    <div class="site-navbar--item @yield('homeActive')" goto="/">
        <ion-icon name="home"></ion-icon>
        <span class="site-navbar--item-title">Trang chủ</span>
    </div>
    <div class="site-navbar--item @yield('feedActive')" goto="/feed">
        <ion-icon name="newspaper-outline"></ion-icon>
        <span class="site-navbar--item-title">Bảng tin</span>
    </div>
    <div class="site-navbar--item @yield('chatActive')" goto="/chat">
        <ion-icon name="chatbubble-outline"></ion-icon>
        <span class="site-navbar--item-title">Chat</span>
    </div>
    <div class="site-navbar--item @yield('notiActive')" goto="/notifications">
        <ion-icon name="notifications-outline"></ion-icon>
        <span class="site-navbar--item-title">Thông báo</span>
    </div>
    <div class="site-navbar--item @yield('menuActive')" goto="/menu">
        <ion-icon name="menu-outline"></ion-icon>
        <span class="site-navbar--item-title">Menu</span>
    </div>
</nav>
