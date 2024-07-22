// AOS.init({ once: true })
// $(document).ready(function () {
//   var url = window.location.pathname;
//   var filename = url.substring(url.lastIndexOf('/') + 1);
//   if (filename == "") {
//     filename = "index.php"
//   }
//   $("header .nav-item .nav-link").removeClass("active");
//   $(`header .nav-item .nav-link[href="${filename}"]`).addClass("active")
// });
// $(window).scroll(function (e) {
//   var scroll = $(window).scrollTop();
//   if (scroll >= 100) {
//     $("header").addClass("scroll");
//   } else {
//     $("header").removeClass("scroll");
//   }
// });

// user portal toggle sidebar start
function toggleLeft() {
  var element = document.getElementById('sidebar');
  element.classList.toggle('left-zero');
}

// user portal toggle sidebar end

// talent slider start js

$('.talent-slider').slick({
  dots: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  centerMode: true,
  responsive: [{
    breakpoint: 768,
    settings: {
      arrows: false,
      slidesToShow: 5,
      slidesToScroll: 1,
    }
  },
  {
    breakpoint: 480,
    settings: {
      arrows: false,
      slidesToShow: 5,
      slidesToScroll: 1,
    }
  }
  ]
});


// step form start

$(document).ready(function () {
  $(".step .next").click(function () {
    let a = $(this).parents(".step");
    a.removeClass("active_step");
    a.next().addClass("active_step");
  });
  $(".step .prev").click(function () {
    let a = $(this).parents(".step");
    a.removeClass("active_step");
    a.prev().addClass("active_step");
  });
});
// step form end

// increment decrement js start
$(document).ready(function () {
  // Increment counter
  $('ul.quant li:nth-child(3) button').click(function () {
    var counterElement = $('ul.quant li.counte');
    var currentValue = parseInt(counterElement.text());
    counterElement.text(currentValue + 1);
  });

  // Decrement counter
  $('ul.quant li:first-child button').click(function () {
    var counterElement = $('ul.quant li.counte');
    var currentValue = parseInt(counterElement.text());
    if (currentValue > 0) {
      counterElement.text(currentValue - 1);
    }
  });
});
// increment decrement js end

// dropdown js start
$(document).ready(function () {
  $('.select-dropdown__button').on('click', function () {
    $('.select-dropdown__list').toggleClass('active');
  });
  $('.select-dropdown__list-item').on('click', function () {
    var itemValue = $(this).data('value');
    console.log(itemValue);
    $('.select-dropdown__button span').text($(this).text()).parent().attr(
      'data-value', itemValue);
    $('.select-dropdown__list').toggleClass('active');
  });
});
// dropdown js end

// cafe page js 
var food = document.getElementById("food");
var drinks = document.getElementById("drinks");

function foodShow() {
  food.style.display = "block";
  drinks.style.display = "none";
}

function drinkShow() {
  food.style.display = "none";
  drinks.style.display = "block";
}

// slick carousel responsive start 
$('.site_map').slick({
  dots: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  centerMode: false,
  responsive: [{
    breakpoint: 768,
    settings: {
      arrows: false,
      slidesToShow: 5,
      slidesToScroll: 1,
    }
  },
  {
    breakpoint: 480,
    settings: {
      arrows: false,
      slidesToShow: 5,
      slidesToScroll: 1,
    }
  }
  ]
});
// slick carousel responsive end 


// add to cart start
function decrement(button) {
  var inputElement = button.nextElementSibling;
  var currentValue = parseInt(inputElement.value, 10);
  if (currentValue > 1) {
    inputElement.value = currentValue - 1;
    updateSubtotal(inputElement);
  }
}

function increment(button) {
  var inputElement = button.previousElementSibling;
  var currentValue = parseInt(inputElement.value, 10);
  inputElement.value = currentValue + 1;
  updateSubtotal(inputElement);
}

function updateSubtotal(inputElement) {
  var row = inputElement.closest("tr");
  var price = parseFloat(row.querySelector(".price_text1").innerText.replace('$', ''));
  var quantity = parseInt(inputElement.value, 10);
  var subtotal = price * quantity;
  row.querySelector(".price_text2").innerText = "$" + subtotal.toFixed(2);

  // Update total and subtotal in the footer
  updateFooterTotals();
}

function updateFooterTotals() {
  var subtotals = document.querySelectorAll(".price_text2");
  var subtotalAmount = 0;

  subtotals.forEach(function (subtotal) {
    subtotalAmount += parseFloat(subtotal.innerText.replace('$', ''));
  });

  document.getElementById("subtotal").innerText = "$" + subtotalAmount.toFixed(2);
  document.getElementById("total").innerText = "$" + subtotalAmount.toFixed(2);
}


// add to cart end