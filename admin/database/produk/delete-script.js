$(".btn-delete").click(function(){
	var id=$(this).data("id");
	$("#link-delete").attr("href","delete-produk.php?id_produk="+id);
	console.log(id);
});