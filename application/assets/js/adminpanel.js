function invokesnack() {
    var x = document.getElementById("snackbar")
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
function deleteRow(r) {
    var i = r.parentNode.parentNode.rowIndex;
    document.getElementById("eventtable").deleteRow(i);

}
$(document).ready(function(){
    $('#eventtable').DataTable();
});