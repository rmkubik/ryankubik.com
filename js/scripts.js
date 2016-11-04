window.onload = function() {
  $("#portfolio-modal").on("show.bs.modal", function (event) {
    thumbnail = $(event.relatedTarget).find("img");
    var name = $(event.relatedTarget).data("name");
    var modal = $(this);
    modal.find(".modal-title").text(name);
    modal.find(".img-responsive").attr("src", thumbnail.attr("src"));
  });

  $("nav li a").mouseover(function(){
    var doc = $(this).find("object")[0].contentDocument;
    $("path", doc).css("fill","black");
  });

  $("nav li a").mouseout(function(){
    var doc = $(this).find("object")[0].contentDocument;
    $("path", doc).css("fill","gray");
  });
}
