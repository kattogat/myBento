
//   (ﾉ｀□´)ﾉ⌒┻━┻

/*
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("doTheThing").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "../index.php", true);
  xhttp.send();
} */

console.log("(ﾉ｀□´)ﾉ⌒┻━┻");
/*
function fetchJSONFile(path, callback) {
    var httpRequest = new XMLHttpRequest();
    httpRequest.onreadystatechange = function() {
        if (httpRequest.readyState === 4) {
            if (httpRequest.status === 200) {
                var data = JSON.parse(httpRequest.responseText);
                if (callback) callback(data);
            }
        }
    };
    httpRequest.open('GET', path);
    httpRequest.send(); 
}

// this requests the file and executes a callback with the parsed result once
//   it is available
fetchJSONFile('../index.php', function(data){
    // do something with your data
    console.log(data);
}); */
/*
$(function(){
    $.ajax({
        url: '../index.php', 
        dataType: 'json',
        cache: false
    }).done(function(data){
        //"data" will be JSON. Do what you want with it. 
        alert(data);
    }); 
}); */
/*
$(document).ready(function(){
    $("button").click(function(){
        $.getJSON("../index.php", function(result){
            $.each(result, function(i, field){
                $("div").append(field + " ");
            });
        });
    });
}); */