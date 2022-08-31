$(document).ready(function () {
  $(".custom__select select").change(function () {
    var lSelected = $(this).val();
    console.log(lSelected);
    window.location.href = lSelected;
  });
});

function openNav() {
  document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.height = "0%";
}


