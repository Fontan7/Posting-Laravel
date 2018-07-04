function netClick(i){
  if (i.value == 1) {
    document.getElementById('back-post').style.background = 'white';
  } else if (i.value == 2) {
    document.getElementById('back-post').style.background = 'grey';
  } else {
    document.getElementById('back-post').style.background = 'green';
  }
  console.log(i.value);
}
