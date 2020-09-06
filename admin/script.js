function pesan(s){
	/*var x=document.getElementById("pesan");
	x.innerText=s;
	console.log(x);*/
	$("#pesan").html(s);
}
$(".btn-delete").click(function(){
	var id=$(this).data("id");
	$("#link-delete").attr("href","delete-klien.php?id_klien="+id);
	console.log(id);
});