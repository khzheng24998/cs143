<?php
header("Content-type: text/javascript");
?>

function returnToHome() {
  window.location.href = "home.php";
}

$(document).ready(function()
{
  $("#add").on("click", function() {
    $("#dropdown").toggle();
  });

  $(".dropdown-option").hover(function() {
    $(this).css("background-color", "#0366d6");
    $(this).css("color", "white");
  },
  function() {
    $(this).css("background-color", "white");
    $(this).css("color", "black");
  });

});
