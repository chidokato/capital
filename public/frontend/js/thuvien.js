$('.slider-tienich').owlCarousel({
    loop:true,
    margin:30,
    lazyLoad: true,
    center:true,
    nav:true,
    responsive:{
        0:{
            items:1.3,
            margin:10
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})

$('.slider-tkch').owlCarousel({
    loop:true,
    margin:30,
    center:true,
    nav:true,
    responsive:{
        0:{
            items:1.3,
            margin:10
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})

// $('.slider-tablink').owlCarousel({
//     loop:true,
//     margin:10,
//     nav:true,
//     responsive:{
//         0:{
//             items:3
//         },
//         600:{
//             items:4
//         },
//         1000:{
//             items:5
//         }
//     }
// })

// sửa tồn kho
$(document).ready(function(){
    $("button#tkch").click(function(){
        var id = $(this).val();
        // alert(id);
        $.ajax({
            url:  'ajax/loasdtkch/'+id,
            type: 'GET',
            cache: false,
            data: {
                "id":id
            },
            success: function(data){
                $('#slider-tkch').html(data);
            }
        });
    });
});


function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent2");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

function tkcanho(evt, tkcanhoname) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent1");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks1");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(tkcanhoname).style.display = "block";
  evt.currentTarget.className += " active";
}



setTimeout(function() {
    $('#hidden').fadeOut('fast');
}, 3000);


setTimeout(function() {
  var button = document.getElementById('modal');
  if (button) {
    button.click();
  }
}, 14000);
