var text;
var imgsrc;
var reader;


$(document).ready(function() {
$("#text-post").keyup(function() {
//lo guardo en una variable porque sino si escribis arriba y despues apretas el
//checkbox ya no vuelve a tomar el valor...  y no lo mueve al ID si a la clase
// no se porque
  text = $(this).val();
  $(".preview").html(text);
  //lo muevo de nuevo para que se actualice si cambias solo el texto
});
})

function netClick(i){
  var usenv = i.getAttribute('usenv');
  console.log(usenv);
// definicion de tags a agregar en html
  var divGral = '<div id="'.concat(i.name).concat('">'); //con nombre que llega
  var divPre = '<div id="divPre" class="card-body d-flex flex-column card border-1 shadow-sm">';
  var divEncPre = '<div id="encPre" class="d-flex align-items-center">';
  var imgUser = '<img class="rounded-circle mr-3" width="40px" src="https://upload.wikimedia.org/wikipedia/commons/1/1e/Default-avatar.jpg">';
  var divTit = '<div id="titPre">';
  var divH = '<class="small text-muted" div id="timePre" >';
  var closeDiv = '</div>'
  var pPre = '<p class="card-text preview"></p>'
  var footPre = '<div class="card card-footer border-1 p-1 d-flex mb-3"><i class="far fa-thumbs-up text-secondary p-2 d-flex justify-content-between align-items-center"></i></div>';
  var img_post = '<img id="img_post src="">';

  // tomo la imagen oculta y la pongo visible

  var srcFoto = $('#foto').attr('src');


  // aca se podria variar el concatenado en funcion a si se muestra primero la imagen
  // o si se muestra primero el texto


  var textH = divGral.concat(divPre).concat(divEncPre).concat(imgUser).concat(divTit).concat('<h5>').concat(usenv).concat('- ').concat(i.name).concat('</h5>').concat(divH).concat('Hace una hora').concat(closeDiv).concat(closeDiv).concat(img_post).concat(pPre).concat(closeDiv).concat(footPre).concat(closeDiv);


  var textH = divGral.concat(divPre).concat(divEncPre).concat(imgUser).concat(divTit).concat('<h5>').concat(usenv).concat('- ').concat(i.name).concat('</h5>').concat(divH).concat('Hace una hora').concat(closeDiv).concat(closeDiv).concat(pPre).concat(closeDiv).concat('<img id="foto2" class="col-12 mx-auto" src="').concat(srcFoto).concat('"') .concat('alt="your image">').concat(footPre).concat(closeDiv);

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

};


function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#red#img_post')
                        .attr('src', e.target.result);
                        console.log('pase');
                };

                reader.readAsDataURL(input.files[0]);
            }
            console.log(input);
        }

// prueba
function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#foto')
                    .attr('src', e.target.result);
                $('#foto2')
                        .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }

    };
