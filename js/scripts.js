$('.mobile-menu').on('click', function(e) {
  e.preventDefault;
  $(this).toggleClass('mobile-menu__active');
  $('.mobile-cover').toggleClass('mobile-cover__open');
  $('body').toggleClass('modal-open');
});

$(window).scroll(function(){
  var h_scroll = $(this).scrollTop();
  if (h_scroll > 145) {
    $('.header__main').addClass('header__main-fixed')
  } else {
    $('.header__main').removeClass('header__main-fixed')
  }
})

var swiperMainWelcome = function() {
  if ($(document).width() > 760) {
    var swiperWelcome = new Swiper('.swiper-welcome-container', {
      slidesPerView: 1,
      centeredSlides: true,
      effect: 'fade',
      loop: true,
      pagination: {
        el: '.swiper-welcome-pagination',
      },
      navigation: {
        nextEl: '.swiper-welcome-next',
        prevEl: '.swiper-welcome-prev',
      },
    })
  } else {
    var swiperWelcome = new Swiper('.swiper-welcome-container', {
      slidesPerView: 1,
      centeredSlides: true,
      effect: 'fade',
      loop: true,
      autoplay: {
        delay: 5000,
      },
      pagination: {
        el: '.swiper-welcome-pagination',
      },
      navigation: {
        nextEl: '.swiper-welcome-next',
        prevEl: '.swiper-welcome-prev',
      },
    })
  }
}

swiperMainWelcome();

$('.tr-line').each(function(){
  var weightMetr = $(this).find('.weight-metr');
  var weightMetrValue = weightMetr.text();
  var priceTonna = $(this).find('.price-tonna');
  var priceTonnaValue = priceTonna.text();
  
  priceMetr = (weightMetrValue * priceTonnaValue)/1000;
  priceMetr = priceMetr.toFixed(2);
  var priceMetrHtml = $(this).find('.price-metr');
  priceMetrHtml.html(priceMetr);
})

//Пятый шаблон калькулятор
$('.shablon_five').each(function(){
  var fiveVes = $(this).find('.shablon_five-ves');
  var fiveVesValue = fiveVes.text();
  var fiveTonna = $(this).find('.shablon_five-tonna');
  var fiveTonnaValue = fiveTonna.text();
  
  fivePrice = (fiveTonnaValue/1000)*fiveVesValue;
  fivePrice = fivePrice.toFixed(2);
  var fivePriceHtml = $(this).find('.shablon_five-price');
  fivePriceHtml.html(fivePrice);
});

//Шестой шаблон калькулятор
// $('.shablon_six').each(function(){
//   var sixVes = $(this).find('.shablon_six-ves');
//   var sixVesValue = sixVes.text();
//   var sixTonna = $(this).find('.shablon_six-tonna');
//   var sixTonnaValue = sixTonna.text();
  
//   sixPrice = (sixTonnaValue/1000)*sixVesValue;
//   sixPrice = sixPrice.toFixed(2);
//   var sixPriceHtml = $(this).find('.shablon_six-price');
//   sixPriceHtml.html(sixPrice);
// });

//Восьмой шаблон калькулятор
$('.shablon_eight').each(function(){
  var eightRulon = $(this).find('.shablon_eight-rulon');
  var eightRulonValue = eightRulon.text();
  
  eightPrice = eightRulonValue/10
  eightPrice = eightPrice.toFixed(2);
  var eightPriceHtml = $(this).find('.shablon_eight-price');
  fivePriceHtml.html(eightPrice);
});

//TABLE SORT
$(document).on('click', 'th', function() {
  console.log(this);
  var table = $(this).parents('table').eq(0);
  var rows = table.find('tr:gt(0)').toArray().sort(comparer($(this).index()));
  this.asc = !this.asc;
  if (!this.asc) {
    rows = rows.reverse();
  }
  table.children('tbody').empty().html(rows);
});

function comparer(index) {
  return function(a, b) {
    var valA = getCellValue(a, index),
      valB = getCellValue(b, index);
    return $.isNumeric(valA) && $.isNumeric(valB) ?
      valA - valB : valA.localeCompare(valB);
  };
}

function getCellValue(row, index) {
  return $(row).children('td').eq(index).text();
}

function showTable(evt, tabName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("main_catalog__click");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace("main_catalog__click-active", "");
  }
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " main_catalog__click-active";
  var targetScroll =  $('#catalog-right').offset().top;
  $('html, body').animate({
      scrollTop: (targetScroll - 100)
  }, 300);
}

//Callback Form Open
if ($('.callback').length > 0) {
  $(document).on('click', '.callback', function(){
    $('.callback__modal').addClass('callback__modal-open');
    $('body').addClass('modal-open');
    $('.modal__bg').addClass('modal__bg-open');
  });
}

//Callback Form Close
if ($('.callback__close').length > 0) {
  $(document).on('click', '.callback__close', function(){
    $('.callback__modal').removeClass('callback__modal-open');
    $('body').removeClass('modal-open');
    $('.modal__bg').removeClass('modal__bg-open');
  });
}