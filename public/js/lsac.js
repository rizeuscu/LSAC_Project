  $(document).ready(function(){
    if (window.innerWidth < 1200){
        $('#homework').addClass('text-center');
        $('#richStudent').addClass('text-center');
        $('#boldness').addClass('text-center');
        $('#sendUsEmail').addClass('text-center');
        $("[id=buttons]:eq(1)").addClass('col-12');
        $('#paidWork').addClass('col-12');
        $('nav').removeClass('p-5');
        $('#navbar-brand').removeClass('pl-5');
    }
    else {
        $('#homework').removeClass('text-center');
        $('#richStudent').removeClass('text-center');
        $('#boldness').removeClass('text-center');
        $('#sendUsEmail').removeClass('text-center');
        $("[id=buttons]:eq(1)").removeClass('col-12');
        $('#paidWork').removeClass('col-12');
        $('nav').addClass('p-5');
        $('#navbar-brand').addClass('pl-5');
    }
  });

    $(window).on('resize', function(){
      if (window.innerWidth < 1200){
          $('#homework').addClass('text-center');
          $('#richStudent').addClass('text-center');
          $('#boldness').addClass('text-center');
          $('#sendUsEmail').addClass('text-center');
          $("[id=buttons]:eq(1)").addClass('col-12');
          $('#paidWork').addClass('col-12');
          $('nav').removeClass('p-5');
          $('#navbar-brand').removeClass('pl-5');
      }
      else {
          $('#homework').removeClass('text-center');
          $('#richStudent').removeClass('text-center');
          $('#boldness').removeClass('text-center');
          $('#sendUsEmail').removeClass('text-center');
          $("[id=buttons]:eq(1)").removeClass('col-12');
          $('#paidWork').removeClass('col-12');
          $('nav').addClass('p-5');
          $('#navbar-brand').addClass('pl-5');
      }
    });