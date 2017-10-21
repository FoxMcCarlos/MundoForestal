document.getElementById("files").onchange = function () {
    var reader = new FileReader();

    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("image").src = e.target.result;
        var resourceN = document.getElementById("files").value;
        resourceN = resourceN.replace("C:\\fakepath\\", "");
        document.getElementById("resource").value = "/webroot/img/"+ resourceN;
    };


    reader.readAsDataURL(this.files[0]);

};
