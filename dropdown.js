function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}


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





function myNotificationFun() {
  document.getElementById("myNotification").classList.toggle("show");
}


window.onclick = function(event) {
  if (!event.target.matches('.notificationbtn')) {
    var notification = document.getElementsByClassName("notification-content");
    var i;
    for (i = 0; i < notification.length; i++) {
      var openNotification = notification[i];
      if (openNotification.classList.contains('show')) {
        openNotification.classList.remove('show');
      }
    }
  }
}