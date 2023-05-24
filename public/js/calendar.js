$(function () {
  $('.delete-modal-open').on('click', function () {
    $('.js-modal').fadeIn();
    var date = $(this).attr('date');
    var part = $(this).attr('part');
    // var reservePart = $(this).attr('reservePart');
    $('.modal-inner-title input').val(date);
    $('.modal-inner-body input').val(part);
    // $('.delete-modal-hidden').val(reservePart);
    return false;
  });
  $('.js-modal-close').on('click', function () {
    $('.js-modal').fadeOut();
    return false;
  });

});
