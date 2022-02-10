$(document).ready(function(){

  var nykyinen = 1;

  function seuraavaKuva(){
      nykyinen++;
      if(nykyinen > 3){
          nykyinen = 1;
      }   
      vaihdaKuva(nykyinen);
  }

  function vaihdaKuva(indeksi){
      $(".reference").removeClass("selected");
      $("#menu span").removeClass("selected");
      nykyinen = indeksi;

      $("#reference"+nykyinen).addClass("selected");

      $("#tab"+nykyinen).addClass("selected");
  }

  const ajastin = setInterval(seuraavaKuva, 8000);

  $("#menu span").click(function(){
      const klikattu = $(this).attr("data-pic-index");
      vaihdaKuva(klikattu);
      clearInterval(ajastin);
      ajastin = setInterval(seuraavaKuva, 5000)
  });

  $('button').click(function(){
    $('input[type="text"]').val('');
 });

 $(".reset").click(function() {
    $(this).closest('form').find("input[type=text], textarea").val("");
});

});