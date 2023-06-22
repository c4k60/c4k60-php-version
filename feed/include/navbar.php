<nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color: #f6e100">
	<a class="navbar-brand" href="/">
    <img src="/images/c4k60.png" alt="Logo" style="width:40px;">
  </a>
  <ul class="navbar-nav mr-auto">
    
    <form class="form-inline" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Tìm kiếm">
    <button class="btn btn-success" type="submit" style="background-color:#e4562b85;border-color:#e4562b85"><i class="fas fa-search"></i></button>
  </form>
    
  </ul>
   <ul class="navbar-nav">
  
  <li class="nav-item">
 <a class="nav-link" href="#" style="font-size: 1.4rem;"><i class="fas fa-user-plus"></i></a>
    </li>
    <li class="nav-item">
 <a class="nav-link" href="/messages" style="font-size: 1.4rem;"><i class="fas fa-comment"></i></a>
    </li>
    <li class="nav-item">
 <a class="nav-link" href="#" style="font-size: 1.4rem;"><i class="fas fa-globe-americas"></i></a>
    </li>
    <style>
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  right: 0;
  border-radius: 10px;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;
border-radius: 10px;
}

.show {display: block;}
</style>
    <div class="dropdown">
  <a class="navbar-brand">
    <img src="<?=$_SESSION['profile_pic']?>" onclick="profileDropdown()" class="dropbtn" alt="Logo" style="width:40px;border-radius: 50%;margin-left: 10px;cursor: pointer;">
  </a>
<div id="myDropdowns" class="dropdown-content">
    <a href="/<?php echo $_SESSION['username'] ?>"><i class="fas fa-user-circle" style="margin-right: 6px;"></i> Trang cá nhân</a>
    <a href="#about"><i class="fas fa-cog" style="margin-right: 6px;"></i> Cài đặt</a>
    <a href="/logout.php"><i class="fas fa-sign-out-alt" style="margin-right: 6px;"></i> Đăng xuất</a>
  </div>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function profileDropdown() {
  document.getElementById("myDropdowns").classList.add("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
</div>

</ul>
</nav>