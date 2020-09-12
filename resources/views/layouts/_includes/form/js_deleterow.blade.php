vform = $('#vform').html();
for(i=1;i<3;i++) add_form();

function add_form(){
    $('#vform').append(vform);
    $('.select1').select2();
}

$(".ff").first().closest("td").html("<a href='#'class='ff text-success' onclick='javascript:add_form()' title='Tambah baris'><i class='icon-plus'></i></a>");
function rform(t){
    $(t).closest("tr").remove();
}
