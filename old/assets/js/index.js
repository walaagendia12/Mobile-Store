function previewImage(e, img_id) {
    const files = e.files[0];
    if (files) {
        const fileReader = new FileReader();
        fileReader.readAsDataURL(files);
        fileReader.addEventListener("load",
            function () {
                document.getElementById(img_id).src = this.result;
            }
        );
    } else document.getElementById(img_id).src = "../assets/img/empty_image.png";
} 