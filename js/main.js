/* particlesJS.load(@dom-id, @path-json, @callback (optional)); */


$(document).ready(function () {
  // secondary nav sticky
  var yourNavigation = $(".sticky-tabs");
  stickyDiv = "sticky";
  yourHeader = $(".main-navbar ").height();

  ///sidebar sticky
  var yourSidebar = $("#sidebar");
  yourSecondaryHeader = $(".sticky-tabs ").height();

  $('.my_tooltip').tooltip({html: true})

  $(window).scroll(function () {
    if ($(this).scrollTop() > yourHeader) {
      yourNavigation.addClass(stickyDiv);
    } else {
      yourNavigation.removeClass(stickyDiv);
    }

    if ($(this).scrollTop() > yourSecondaryHeader) {
      yourSidebar.addClass(stickyDiv);
    } else {
      yourSidebar.removeClass(stickyDiv);
    }
  });

  $(".top-broker-js").slick({
    autoplay: true,
    slidesToShow: 2,
    slidesToScroll: 2,
    infinite: true,
    dots: false,
    variableWidth: true,
    arrows: true,
    prevArrow:
      "<img class='a-left control-c prev slick-prev' src='../img/arrow-left.svg'>",
    nextArrow:
      "<img class='a-right control-c next slick-next' src='../img/arrow-right.svg'>",

    // the magic
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 5,
          infinite: false,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          dots: true,
        },
      },
    ],
  });
  $(".top-eval-js").slick({
    slidesToShow: 2,
    slidesToScroll: 5,
    infinite: false,
    dots: false,
    variableWidth: true,
    arrows: true,
    prevArrow:
      "<img class='a-left control-c prev slick-prev' src='../img/arrow-left.svg'>",
    nextArrow:
      "<img class='a-right control-c next slick-next' src='../img/arrow-right.svg'>",

    // the magic
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 5,
          infinite: false,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          dots: true,
        },
      },
    ],
  });

  $(".company-slider-js").slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    infinite: false,
    dots: true,
    variableWidth: true,
    arrows: true,
    prevArrow:
      "<img class='a-left control-c prev slick-prev' src='../img/arrow-left.svg'>",
    nextArrow:
      "<img class='a-right control-c next slick-next' src='../img/arrow-right.svg'>",

    // the magic
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 4,
          infinite: true,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          dots: true,
        },
      },
    ],
  });

  $('input[name="daterange"]').daterangepicker();

  // load more 
  
  $(".list-card-wrapper .list-card").slice(0, 5).show();
  
  $("#loadMore").on('click', function (e) {
    e.preventDefault();
    $(".list-card-wrapper .list-card:hidden").slice(0, 4).slideDown();
    if ($(".list-card-wrapper .list-card:hidden").length == 0) {
        $("#load").fadeOut();
    }

  });

});


let replyBtn = document.querySelectorAll(".reply-btn");
let replyBox = document.querySelectorAll(".reply-box");

for( let i = 0; i < replyBtn.length; i++) {
  replyBtn[i].addEventListener("click", function(e) {
    e.preventDefault();
    console.log("btn", replyBox[i]);

    replyBox[i].classList.add("d-block");
  })
}

// var count = 0;
// let addBtn = document.getElementById("compare-btn");
// addBtn.addEventListener("click", addBox, false);
//  function addBox (event) {
//     console.log("button clicked", count)
//     event.preventDefault()
   
//      if( count < 2 ) {
//        count ++;
//        document.getElementById("compare-item").innerHTML += `  <div class="compare-2">
//        <select class="form-select" aria-label="Default select example">
//            <option selected=""> Choose Broker </option>
//            <option value="1">Broker 1</option>
//            <option value="2">Broker 2</option>
  
//        </select>
  
//    </div>`;
          
//      }
//      else {
//       return false;
//      }
// }



(() => {
   var ctx = document.getElementById('myChart').getContext('2d');
  var myChart = new Chart(ctx, {
      type: 'bar',
      options: {
        // maintainAspectRatio: false,
    },
    data: {
      labels: ["Jan 2022", "Feb 2022", "Mar 2022", "Apr 2022", "May 2022", "June 2022", "July 2022", "Aug 2022", "Sept 2022", "Oct 2022", "Nov 2022", "Dec 2022"],
      datasets: [
        {
          label: "Total Buy Quantity",
          backgroundColor: ["#dbdbdbe6", "#35B14F","#5DC172","#35B14F","#5DC172","#35B14F","#dbdbdbe6", "#35B14F","#5DC172","#5DC172", "#5DC172","#5DC172"],
          data: [2478,5267,1334,1784,2433, 3333, 1213, 3300, 1150, 510, 121, 4545]
        },
        {
          label: "Total Sale Quantity",
          backgroundColor: ["#dbdbdbe6", "#35B14F","#5DC172","#35B14F","#5DC172","#35B14F","#dbdbdbe6", "#35B14F","#5DC172","#5DC172", "#5DC172","#5DC172"],
          data: [3478,1267,634,1784,5433, 1333, 413, 6300, 1150, 4410, 1121, 3545]
        },
      ]
    },
      options: {
          scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero: true
                  }
              }]
          }
      }
  });
  
  
})()



