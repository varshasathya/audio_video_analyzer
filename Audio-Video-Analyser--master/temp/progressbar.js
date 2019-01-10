function _(el) {
  return document.getElementById(el);
}

function uploadFile() {
  var file = _("fileToUpload").files[0];
  //alert("ss");
 //  alert(file.name+" | "+file.size+" | "+file.type);
  var formdata = new FormData();
  formdata.append("fileToUpload", file);
  var ajax = new XMLHttpRequest();
  ajax.upload.addEventListener("progress", progressHandler, false);
  ajax.addEventListener("load", completeHandler, false);
  ajax.addEventListener("error", errorHandler, false);
  ajax.addEventListener("abort", abortHandler, false);
  ajax.open("POST", "tmp.php"); // http://www.developphp.com/video/JavaScript/File-Upload-Progress-Bar-Meter-Tutorial-Ajax-PHP
  //use file_upload_parser.php from above url
  ajax.send(formdata);
}

function progressHandler(event) {
  _("loaded_n_total").innerHTML = "Uploaded " + event.loaded + " bytes of " + event.total;
  var percent = (event.loaded / event.total) * 100;
  _("progressBar").value = Math.round(percent);
  _("status").innerHTML = Math.round(percent) + "% uploaded... please wait";
  

  
}

function completeHandler(event) {
  //_("status").innerHTML = event.target.responseText;
//  _("progressBar").value = 0; //wil clear progress bar after successful upload

  //progress bar submit and analyse edited in muhamed

$("#submit").show();
   
}

function errorHandler(event) {
  _("status").innerHTML = "Upload Failed";
}

function abortHandler(event) {
  _("status").innerHTML = "Upload Aborted";
}