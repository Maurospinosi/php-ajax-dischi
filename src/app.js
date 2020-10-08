const $ = require("jquery");
const Handlebars = require("handlebars");

$(document).ready(function(){
  $.ajax(
    {
      "url": "http://localhost/php-ajax-dischi/api.php",
      "method": "GET",
      "success" : function (data){
        render(data);
      },
      "error": function(err){
        alert("Errore");
      },
    }
  )
});

var source = $("#album-template").html();
var template = Handlebars.compile(source);

function render(result){
  for (var i=0; i<result.length; i++){
    var context = {
      "poster": result[i].poster,
      "title": result[i].title,
      "author": result[i].author,
      "year": result[i].year,
    };

    var html = template(context);
    $("#list_album").append(html);
  }
}
