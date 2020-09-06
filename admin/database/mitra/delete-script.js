$(".btn-delete").click(function(){
	var id=$(this).data("id");
	$("#link-delete").attr("href","delete-mitra.php?id_mitra="+id);
	console.log(id);
});