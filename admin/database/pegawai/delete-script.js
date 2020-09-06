$(".btn-delete").click(function(){
	var id=$(this).data("id");
	$("#link-delete").attr("href","delete-pegawai.php?id_pegawai="+id);
	console.log(id);
});