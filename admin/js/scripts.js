
tinymce.init({
  selector: '#mytextarea'
});

$(document).ready(function () {
  $('#selectAllPosts').click(function (event) {
    if (this.checked) {

      $("input").each(function () {
        this.checked = true;
      });
    } else {


      $("input").each(function () {
        this.checked = false;
      });
    }
  });
  var div_box = "<div id='load-screen'><div id='loading'></div></div>";
  $("body").prepend(div_box);
  $('#load-screen').delay(400).fadeOut(600, function () {
    $(this).remove();
  })


});






function loadUsersOnline() {
  $.get("functions.php?onlineusers=result", function (data) {
    $(".usersonline").text(data)
  })
}
setInterval(() => {
  loadUsersOnline();
}, 500);
