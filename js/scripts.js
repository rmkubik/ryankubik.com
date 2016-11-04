window.onload = function() {
  $("#portfolio-modal").on("show.bs.modal", function (event) {
    thumbnail = $(event.relatedTarget).find("img");
    var name = $(event.relatedTarget).data("name");
    var modal = $(this);
    modal.find(".modal-title").text(name);
    modal.find(".img-responsive").attr("src", thumbnail.attr("src"));
  });
}
