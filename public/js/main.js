$(document).ready(function() {
  $('#navcontainer').show(500);
  $('#maincontainer').fadeIn(1000);
  $('#footer').fadeIn(1000);

  $('#profilepic').dblclick(function() {
      window.location="login";
    });
});
