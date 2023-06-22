<nav class="navbar fixed-top navbar-icon-top navbar-expand-lg navbar-light shadow-sm" style="background-color: #f6e100" id="navibar">
 <a href="/"><img src="/logoc4k60.png" alt="Cổng thông tin điện tử C4K60" height="62" width="80"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?=$trangchu?>">
        <a class="nav-link" href="/">
          <i class="faf fas fa-home"></i>
          Trang chủ
          <span class="sr-only">(current)</span>
          </a>
      </li>
<li class="nav-item dropdown <?=$tracuu?>">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="faf fa fa-search">
          </i>
          Tra cứu
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item <?=$diemthi?>" href="/diemthi">Điểm thi học kỳ 2</a>
          <a class="dropdown-item <?=$diemtongket?>" href="/diemtongket">Điểm tổng kết</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item <?=$hoso?>" href="/hoso">Hồ sơ học sinh</a>
          <a class="dropdown-item <?=$baitap?>" href="/baitap">Bài tập về nhà</a>
          <a class="dropdown-item <?=$baitapgv?>" href="/baitapgv">Bài tập giáo viên giao</a>
          <a class="dropdown-item <?=$sinhnhat?>" href="/sinhnhat">Sinh nhật sắp tới</a>
          <a class="dropdown-item <?=$tuvi?>" href="/tuvi">Cung hoàng đạo (Tử vi)</a>
        </div>
      </li>
	   <li class="nav-item <?=$thoikhoabieu?>">
        <a class="nav-link" href="/thoikhoabieu">
          <i class="faf far fa-calendar-alt"></i>
          Thời khoá biểu
        </a>
      </li>
      <li class="nav-item <?=$thuvienanh?>">
        <a class="nav-link" href="/anhvavideo">
          <i class="faf fas fa-photo-video">
          </i>
          Ảnh và video
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://feed.c4k60.com">
          <i class="faf fas fa-newspaper">
          </i>
          Feed
        </a>
      </li>
            <li class="nav-item <?=$games?>">
        <a class="nav-link" href="/games">
          <i class="faf fas fa-gamepad">
          </i>
          Games
        </a>
      </li>
	    </li>
      <li class="nav-item <?=$thongbaolop?>">
        <a class="nav-link" href="/thongbaolop">
          <i class="faf fa fa-bell">
            <span class="badge badge-danger" id="tbl">
<?php
 require_once $_SERVER['DOCUMENT_ROOT'] . '/login/serverconnect.php';
$sql = "SELECT count(*) as total FROM thongbaolop";
$results = mysqli_query($db, $sql);
if (mysqli_num_rows($results)){
      while($row=mysqli_fetch_assoc($results)){
echo $row['total'];
}
} else {
  echo "";
}
?>
            </span>
          </i>
          Thông báo
        </a>
      </li>
      <li class="nav-item dropdown ">
        <a class="nav-link" style="cursor: pointer;" id="chat" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="faf fas fa-comment-alt">
            <span class="badge badge-danger">1</span>
          </i>
          Chat
        </a>
        <div class="dropdown-menu" aria-labelledby="chat" style="right: -250px;">
          <div class="dropdown-item" style="cursor: pointer;padding-top: 1.5rem;padding-bottom: 0.5rem;margin-bottom: 0px;" onclick="openBar()"><img src="/logoc4k60.png" height="30" width="40" style="margin-left: -13px;margin-bottom: -21px;padding-bottom: 0px;margin-top: 1px;padding-top: 0px;"> <div style="padding-top: 0px;margin-top: -28px;margin-left: 37px;"> <strong style="font-size:19px">Chát chít C4K60</strong><br><p>(1 tin nhắn mới)</p></div> <span style="float:right;margin-top: -51px;margin-right: -1px;padding-bottom: 0.25em;margin-bottom: 0px;" class="badge badge-danger">1</span></div>
        </div>
      </li>

	    <li class="nav-item <?=$dangnhap?>">
        <a class="nav-link" href="/login">
          <i class="faf fas fa-sign-in-alt"></i>
          Đăng nhập
        </a>
      </li>
    </ul>
    <ul class="navbar-nav ">
		  <form class="form-inline my-2 my-lg-0"method="get" action="https://www.google.com/search" target="_blank">
<input type="hidden" name="sitesearch" value="https://c4k60.online" />
<input class="form-control mr-sm-2" type="text" name="q" maxlength="255" style="
    width: 286px;
    margin-right: 10px;
" placeholder="Tìm kiếm trong trang" />
      <button class="btn btn-outline-danger my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
    </form>
	  
			</ul>

        </li>
	  </li>
    </ul>
      </li>
				
        
  </div>
</nav>

<div class="container">

    <div class="alert alert-warning">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      Trải nghiệm ngay phiên bản C4K60 hoàn toàn mới tại: <strong><a href="https://beta.c4k60.com" class="text-reset">https://beta.c4k60.com</a></strong>
	</div>
</div>