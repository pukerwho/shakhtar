$('.toogle-menu').on('click', function(e) {
  e.preventDefault;
  $(this).toggleClass('toogle-menu_active');
  $('.slide-menu').toggleClass('slide-menu_active');
  $('.menu li').toggleClass('animate-left');
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
}