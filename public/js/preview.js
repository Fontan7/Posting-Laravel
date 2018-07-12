var text;
var imgsrc;
var reader;
var srcFoto;

$(document).ready(function() {
$("#text-post").keyup(function() {
//lo guardo en una variable porque sino si escribis arriba y despues apretas el
//checkbox ya no vuelve a tomar el valor...  y no lo mueve al ID si a la clase
// no se porque
  text = $(this).val();
  $(".preview").html(text);
  //lo muevo de nuevo para que se actualice si cambias solo el texto
});
});

function netClick(i){
  var usenv = i.getAttribute('usenv');
  var logo = i.getAttribute('nlogo');
// definicion de tags a agregar en html
  var divGral = '<div id="'.concat(i.name).concat('" class=" ">');
  //con nombre que llega
  var divPre = '<div id="divPre" class="card-body d-flex flex-column card border-1 shadow-sm">';
  var divEncPre = '<div id="encPre" class="d-flex align-items-center">';
  var imgUser = '<img class="rounded-circle mr-3" width="40px" src="https://upload.wikimedia.org/wikipedia/commons/1/1e/Default-avatar.jpg">';
  var divTit = '<div id="titPre">';
  var linTit = '<div id="linPre">';
  var divH = '<div class="small text-muted ml-5" div id="timePre" >';
  var closeDiv = '</div>';
  var pPre = '<p class="card-text preview"></p>';
  var footPre = '<div class="card card-footer border-1 p-1 d-flex mb-3"><i class="far fa-thumbs-up text-secondary p-2 d-flex justify-content-between align-items-center"></i></div>';
  var footPre2 = '<div class="card card-footer bg-white border-0 p-1 d-flex mb-3"><i class="far fa-heart text-secondary p-2 d-flex justify-content-between align-items-center"></i></div>';
  var img_post = '<img class="foto2" src="';
  var logoimg = '<img class="" src="admin/logos/'.concat(logo).concat('">');
  var divN = '<div>';

// aca se podria variar el concatenado en funcion a si se muestra primero la imagen
  // o si se muestra primero el texto
  console.log(i.name);
  if (i.name == "Instagram") {
    var textH =divGral.concat(divPre).concat(divEncPre).concat(divTit).concat(logoimg).concat('<h5>').concat(i.name).concat('</h5>').concat(closeDiv).concat(closeDiv).concat(divN).concat(imgUser).concat(usenv).concat('</p>').concat(closeDiv).concat(pPre).concat(img_post).concat(srcFoto).concat('"') .concat('alt="yourimage">').concat(closeDiv).concat(footPre2).concat(closeDiv).concat(closeDiv);
  } else {
    var textH =divGral.concat(divPre).concat(divEncPre).concat(divTit).concat(logoimg).concat('<h5>').concat(usenv).concat('-').concat(i.name).concat('</h5>').concat(closeDiv).concat(closeDiv).concat(divN).concat(imgUser).concat(usenv).concat('</p>').concat(divH).concat('Hace una hora').concat(closeDiv).concat(closeDiv).concat(pPre).concat(img_post).concat(srcFoto).concat('"') .concat('alt="yourimage">').concat(closeDiv).concat(footPre).concat(closeDiv).concat(closeDiv);
  }


// en esta parte solamente agrega lo seteado antes cando esta marcado
  if (i.checked) {
    document.getElementById('red').style.display='block';
      $('#red').append(textH);

// lo mueve despues sino no lo hace hasta la proxima vuelta
    $(".preview").html(text);
  } if (!i.checked) {
    var idName = '#'.concat(i.name);
    $(idName).remove();
    //document.getElementById('red').style.display='none'
  }
     srcFoto = $('.foto2').attr('src');
};

// prueba
function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
              $('.foto2')
                .attr('src', e.target.result);
                srcFoto = e.target.result;
                $('.foto2').attr('src', srcFoto);
            };

            reader.readAsDataURL(input.files[0]);
        };
    };

    function cambiarFoto(input){
     if (srcFoto) {
      $('.foto2').attr('src', srcFoto);
    }
    };
