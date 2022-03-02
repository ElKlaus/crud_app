$(document).ready(function() {
  $('button.otpravka').on('click', function() {
    var titleValue = $('input.title').val();
    var contentValue = $('textarea.content').val();

    $.ajax({
      method: "POST",
      url: "post.php",
      data: { title: titleValue, content: contentValue }
    })
    .done(function() {
      // alert("Data Daved: " + msg);
    })

    $('input.title').val('');
    $('textarea.content').val('');
  })
});