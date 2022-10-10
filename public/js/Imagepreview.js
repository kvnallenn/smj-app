function previewImage(event){
    const image = document.getElementById('gambar_produk');
    const imgPreview = document.getElementById('image_preview');

    const oFReader = new FileReader();
    oFReader.readAsDataURL(event.target.files[0]);
    
    oFReader.onload = function(oFREvent){
        imgPreview.src = oFREvent.target.result;
    }
}