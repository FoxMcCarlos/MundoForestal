document.getElementById("files").onchange = function () {
    var reader = new FileReader();

    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("image").src = e.target.result;
        var coverN = document.getElementById("files").value;
        coverN = coverN.replace("C:\\fakepath\\", "");
        document.getElementById("cover").value = "img/"+ coverN;
    };


    reader.readAsDataURL(this.files[0]);

};
