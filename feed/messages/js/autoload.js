$.ajaxSetup({cache:false});
$tunnatime = 800;
// Thiết lập thời gian thực vòng lặp 1 giây
setInterval(function() {$('#tabled').load('msglog.php');}, $tunnatime);