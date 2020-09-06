$(".btn-delete").click(function(){
	var id=$(this).data("id");
	$("#link-delete").attr("href","delete-pesanan.php?id_pesanan="+id);
	console.log(id);
});