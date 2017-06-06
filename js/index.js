$(function() {
  var picture = $('#image-target');
  var myPictures = ['img/M.png', 'img/L.png', 'img/XL.png', 'img/XXL.png'];

  $('.block-description input').click(function(){
    var index = $(this).parent().index();
    picture.attr('src', myPictures[index]);
    $('input').removeClass('active');
    $(this).addClass('active');
  });

  var counter = $('#counter');
  var count = 0;  
  $('#button').on('click', function() {
    count++;
    counter.html(count);
    $.ajax({
      type: 'POST',
      url : 'cart.php',
      data: {counter: true},
      success: function(result) {
        console.log(result);
      },
      error: function(result) {
        console.error(result);
      }
    });
  });
});



