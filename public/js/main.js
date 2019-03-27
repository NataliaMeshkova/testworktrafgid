

$().ready(function(){
	$('#offers').click(function () {
		$("#bblock").empty();
		var table = '';
		$.ajax({
			type:'get',
			url:'/offers',
			success:function (resp) {
				var t = JSON.parse(resp);
				t.forEach(function(ind){
					table = table + '<tr><td>'+ind["name"]+'</td><td>'+ind["count"]+'</td><td>'+ind["sum"]+'</td></tr>';
				});
				$("#bblock").append('<div class="widget-title"><h5>Товары</h5></div><div class="widget-content nopadding" id="bblock"><table class="table table-striped table-bordered" ><thead><tr><th>Номер заказа</th><th>Имя товара</th><th>Цена</th></tr></thead><tbody>'+table+'</tbody></table></div>');
			}, error:function () {
				alert('Error');
			}
		});	
	});
});
