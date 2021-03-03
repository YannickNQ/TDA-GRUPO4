$(document).ready(function () {
  $("a.editar").click(function (e) {
    // Si los la variable es false, evita que `a` se ejecute normalmente
    // e.preventDefault();
    $(".modal-body").load($(this).attr("link") + " .card", function () {
      alert("aaa");
    });
    // if (!activos) {
    // }
  });
});
