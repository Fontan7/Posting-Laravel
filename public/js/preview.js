function netClick(i){

  if (i.checked && i.value == 1) {
    document.getElementById('red').style.display='block';
    $('#red').append('<div class="card-body d-flex flex-column card border-1 shadow-sm" id="back-post"><div class="d-flex align-items-center" ><img class="rounded-circle mr-3" width="40px" src="https://upload.wikimedia.org/wikipedia/commons/1/1e/Default-avatar.jpg"><div class=""><h5 class="mb-1 shadow-sm">Dario</h5><div class="small text-muted">Hace una hora</div></div></div><p class="card-text text-secondary">hola</p></div><div class="card card-footer border-1 p-1 d-flex mb-3"><i class="far fa-thumbs-up text-secondary p-2 d-flex justify-content-between align-items-center"></i></div>');
  } if (!i.checked && i.value == 1) {
    $('#red').empty();
    //document.getElementById('red').style.display='none'
  }

  if (i.checked && i.value == 2) {
    document.getElementById('red').style.display='block';
    $('#red').append('<div class="card-body d-flex flex-column card border-1 shadow-sm" id="back-post"><div class="d-flex align-items-center" ><img class="rounded-circle mr-3" width="40px" src="https://upload.wikimedia.org/wikipedia/commons/1/1e/Default-avatar.jpg"><div class=""><h5 class="mb-1 shadow-sm">Dario</h5><div class="small text-muted">Hace una hora</div></div></div><p class="card-text text-secondary">hola</p></div><div class="card card-footer border-1 p-1 d-flex mb-3"><i class="far fa-thumbs-up text-secondary p-2 d-flex justify-content-between align-items-center"></i></div>');
  } if (!i.checked && i.value == 2) {
    $('#red').empty();
    //document.getElementById('red').style.display='none'
  }

  if (i.checked && i.value == 3) {
    document.getElementById('red').style.display='block';
    $('#red').append('<div class="card-body d-flex flex-column card border-1 shadow-sm" id="back-post"><div class="d-flex align-items-center" ><img class="rounded-circle mr-3" width="40px" src="https://upload.wikimedia.org/wikipedia/commons/1/1e/Default-avatar.jpg"><div class=""><h5 class="mb-1 shadow-sm">Dario</h5><div class="small text-muted">Hace una hora</div></div></div><p class="card-text text-secondary">hola</p></div><div class="card card-footer border-1 p-1 d-flex mb-3"><i class="far fa-thumbs-up text-secondary p-2 d-flex justify-content-between align-items-center"></i></div>');
  } if (!i.checked && i.value == 3) {
    $('#red').empty();
    //document.getElementById('red').style.display='none'
  }

  console.log(i.checked);
}

/* document.getElementByClassName('red').style.display='none';
  html
*/

/*if (i.checked) {
  document.getElementById('red').style.display='block';
  $('#red').html('<div class="card-body d-flex flex-column card border-1 shadow-sm" id="back-post"><div class="d-flex align-items-center" ><img class="rounded-circle mr-3" width="40px" src="https://upload.wikimedia.org/wikipedia/commons/1/1e/Default-avatar.jpg"><div class=""><h5 class="mb-1 shadow-sm">Dario</h5><div class="small text-muted">Hace una hora</div></div></div><p class="card-text text-secondary">hola</p></div><div class="card card-footer border-1 p-1 d-flex mb-3"><i class="far fa-thumbs-up text-secondary p-2 d-flex justify-content-between align-items-center"></i></div>');
} else {
  document.getElementById('red').style.display='none';
}*/



/*  if (i.value == 1) {
    document.getElementById('back-post').style.background = 'white';
  } else if (i.value == 2) {
    document.getElementById('back-post').style.background = 'grey';
  } else {
    document.getElementById('back-post').style.background = 'green';
  }
*/
