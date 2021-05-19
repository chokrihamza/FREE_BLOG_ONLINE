
tinymce.init({
  selector: '#mytextarea'
});

$(document).ready(function () {
  $('#selectAllPosts').click(function (event) {
    if (this.checked) {

      $('.checkBoxes').each(function () {
        this.checked = true;
      });
    } else {


      $('.ckeckBoxes').each(function () {
        this.checked = false;
      });
    }
  });
});
