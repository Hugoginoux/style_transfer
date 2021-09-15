//var uploadField = document.getElementsByClassName("uploads");
var uploadField = document.getElementsById("contenu");

uploadField.onchange = function() {
    if(this.files[0].size > 1024*1024){
       alert("File is too big!");
       this.value = "";
    };
};