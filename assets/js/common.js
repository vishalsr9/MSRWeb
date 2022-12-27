



$(".hov-item").on({
    mouseenter: function () {
       $(this).toggleClass('hovItemEffect');
    },
    mouseleave: function () {
        $(this).toggleClass('hovItemEffect');
    }
});


$(".hov-item2").on({
    mouseenter: function () {
       $(this).toggleClass('hovItemEffect');
    },
    mouseleave: function () {
        $(this).toggleClass('hovItemEffect');
    }
});

function liked() {
    var element = document.getElementById("like");
    element.classList.toggle("liked");
}

// facebok share
var fbButton = document.getElementById('fb-share-button');
if(fbButton!=null){
    var url = window.location.href;
    fbButton.addEventListener('click', function(e) {
    e.preventDefault();
    window.open('https://www.facebook.com/sharer/sharer.php?u=' + url,
    'facebook-share-dialog',
    'width=800,height=600'
    )
    return false;
});
}

// twitter share
var twButton = document.getElementById('tw-share-button');
if(twButton!=null){
    var url = window.location.href;
twButton.addEventListener('click', function(e) {
    e.preventDefault();
    window.open('https://twitter.com/share?' + url,
    'twitter-share-dialog',
    'width=800,height=600'  
    )
    return false;
});
}

//linked share
var ldButton = document.getElementById('ld-share-button');
if(ldButton!=null){
    var url = window.location.href;
ldButton.addEventListener('click', function(e) {
    e.preventDefault();
    window.open('https://www.linkedin.com/sharing/share-offsite/?url=' + url,
    'linkedin-share-dialog',
    'width=800,height=600'
    )
    return false;
});
}

//mailthis
var mailButton = document.getElementById('mail-share-button');
if(mailButton!=null){
    var url = window.location.href;
mailButton.addEventListener('click', function(e) {
    e.preventDefault();
    window.open('mailto:?subject=Visit the METRO My Sustainable Restaurant digital platform to explore sustainability in the HoReCa industry. Visit &body=' + url,
    'email-share-dialog',
    'width=800,height=600'
    )
    return false;
});
}


$("#searchq1").click(function() {
    $(".searchbox").toggle();
    $('#sq1').select();
});


$("#button-addon1").click(function() {
    $(".searchbox").toggle();
    $('#sq1').select();
});

$("#searchq2").click(function() {
    $(".searchbox").toggle();
    $('#sq2').select();
});


$("#button-addon2").click(function() {
    $(".searchbox").toggle();
    $('#sq2').select();
});