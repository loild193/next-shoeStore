$(document).ready(function(){
  // The Loai - dropdownMenu
  var inLoaiGiayUl = false;
  var inLoaiGiay = false;
  var appearUl = false;

  $('#loaiGiay').mouseenter(function(){
    inLoaiGiay = true;
    if (appearUl == false){
      $(this).find('ul').slideDown();
    }
  });
  $('#loaiGiay > ul').mouseenter(function(event){
    event.stopPropagation();
    inLoaiGiayUl = true;
    inLoaiGiay = false;
    appearUl = true;
    // console.log(inLoaiGiayUl, inLoaiGiay);
  });
  $('#loaiGiay > ul').mouseleave(function(event){
    // event.stopPropagation();
    // console.log(inLoaiGiayUl, inLoaiGiay);
    inLoaiGiayUl = false;
    if (inLoaiGiay == false && inLoaiGiayUl == false){
      $(this).slideUp();
      appearUl = false;
    }
  });
  $('#loaiGiay').mouseleave(function(){
    $(this).find('ul').slideUp();
  });

  // register and login
  var userAppear = false;
  var 
  $('.fa-user').mouseenter(function(event){
    event.stopPropagation();
    $(this).siblings('span').fadeIn();
  });
  $('.fa-user').mouseleave(function(event){
    event.stopPropagation();
    $(this).siblings('span').fadeOut();
  });

  // fix position navbar menu khi cuon chuot xuong
  // $(document).scroll(function(){
  //   var bodyScroll = $("html, body").scrollTop();
  //   // console.log(bodyScroll);
  //   if (bodyScroll > 140){
  //     $("#navbar").css( "width", ( $(window).width() * 1 | 0 ) + "px" );
  //     $("#navbar").css("position", "fixed");
  //     $("#navbar").css("backgroundColor","white");
  //   } else {
  //     $("#navbar").css( "width", "null" );
  //     $("#navbar").css("position", "null");
  //     $("#navbar").css("backgroundColor","null");
  //   }
  // });

  // messenger box
  $('#messenger > a').click(function(event){
    var clicks = $(this).data('clicks');
    if (clicks) {
      event.preventDefault();
      $('#messenger > div').fadeOut();
    } else {
      event.preventDefault();
      $('#messenger > div').fadeIn();
    }
    $(this).data("clicks", !clicks);   
  });
  $('#messenger  div .exit').click(function(event){
    event.preventDefault();
    $('#messenger > div').fadeOut();
  });

  // responsive
  if (window.matchMedia("(max-width: 960px)").matches || window.matchMedia("(max-width: 768px)").matches || window.matchMedia("(max-width: 500px)").matches){
    $('.fa-bars').click(function(){
      var clicks = $(this).data('clicks');
      if (clicks) {
        $('#navbar').fadeOut();
      } else {
        $('#navbar').fadeIn();
      }
      $(this).data("clicks", !clicks);
    });
    $(document).on('click', function(event){
      event.stopPropagation();
      if (!$(event.target).hasClass("fa-bars") && !$(event.target).hasClass("theLoai")){
        $('#navbar').fadeOut();
      }
    });
  }
});