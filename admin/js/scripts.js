
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
});
