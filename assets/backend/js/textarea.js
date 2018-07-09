$("[data-cmd]").click(function(evt){
  evt.preventDefault();
  var cmd = $(this).data().cmd;
  document.execCommand(cmd, false, null);
});