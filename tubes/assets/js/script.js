const tombolCari = document.querySelector('.tombol-cari');
const keyword = document.querySelector('.keyword');
const data = document.querySelector('.data');

// hilangkan tombol cari
tombolCari.style.display = 'none';

keyword.addEventListener('keyup', function () {
  // ajax
  // xmlhttprequest
  //const xhr = new XMLHttpRequest();

  //xhr.onreadystatechange = function () {
  //  if (xhr.readyState == 4 && xhr.status == 200) {
  //    data.innerHTML = xhr.responseText;
  //  }
  //};

  //xhr.open('get', '../assets/ajax/ajax_cari.php?keyword=' + keyword.value);
  //xhr.send();

  // fetch()
  fetch('../assets/ajax/ajax_cari.php?keyword=' + keyword.value)
    .then((response) => response.text())
    .then((response) => (data.innerHTML = response));
});

// Preview Image
function previewImage() {
  const picture = document.querySelector('.picture');
  const imgPreview = document.querySelector('.img-preview');

  const oFReader = new FileReader();
  oFReader.readAsDataURL(picture.files[0]);

  oFReader.onload = function (oFREvent) {
    imgPreview.src = oFREvent.target.result;
  };
}