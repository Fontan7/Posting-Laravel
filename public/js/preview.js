var text;

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
  console.log(i);
  if (i.checked) {
    document.getElementById('red').style.display='block';
    var textH = '<div id="'.concat(i.name).concat('"><div class="card-body d-flex flex-column card border-1 shadow-sm ').concat(i.name).concat('"><div class="d-flex align-items-center" ><img class="rounded-circle mr-3" width="40px" src="https://upload.wikimedia.org/wikipedia/commons/1/1e/Default-avatar.jpg"><div class=""><h5 class="mb-1 shadow-sm">').concat('Dario - ').concat(i.name).concat('</h5><div class="small text-muted">Hace una hora</div></div></div><p class="card-text preview"></p></div><div class="card card-footer border-1 p-1 d-flex mb-3"><i class="far fa-thumbs-up text-secondary p-2 d-flex justify-content-between align-items-center"></i></div></div>')
    $('#red').append(textH);
// lo mueve despues sino no lo hace hasta la proxima vuelta
    $(".preview").html(text);
  } if (!i.checked) {
    var idName = '#'.concat(i.name);
    $(idName).remove();
    //document.getElementById('red').style.display='none'
  }
};
