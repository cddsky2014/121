$(function(){

	//删除
	$('.del').click(function(){
		if(confirm('确定删除吗?')==false){
			return;
		}
		//在前端删除当前行
		$(this).parent().parent().remove();	
		//在后台删除数据
		var aid = $(this).attr('data-aid');
		$.get('/index.php/Admin/Users/delUser',{aid:aid},function(){
			alert('删除成功');
		});	
	});

	//编辑
	$('.edit').click(function(){
		var aid = $(this).attr('data-aid');
		var aname = $(this).attr('data-aname');
		var email = $(this).attr('data-email');
		var tel = $(this).attr('data-tel');

		$('[name=aname]').val(aname);
		$('[name=email]').val(email);
		$('[name=tel]').val(tel);
		$('[name=aid]').val(aid);
		/*
		var url = '/index.php/Admin/Users/getUser';
		$.get(url,{aid:aid},function(res){
			
			$('[name=aname]').val(res.aname);
			$('[name=email]').val(res.email);
			$('[name=tel]').val(res.tel);
		
			
		},'json');
		*/	


		
	});

	$('.doedit').click(function(){		
		//获取数据

		aname=$('[name=aname]').val();
		email=$('[name=email]').val();
		tel=$('[name=tel]').val();
		aid=$('[name=aid]').val();
	//$('.tr_5 .aname')
		$('.tr_'+aid+' .aname').text(aname);
		$('.tr_'+aid+' .email').text(email);
		$('.tr_'+aid+' .tel').text(tel);

		var url = '/index.php/Admin/Users/doEdit';
		$.post(url,{aid:aid,aname:aname,tel:tel,email:email},function(res){
			alert(res);
		
		});
	
	});

	
		


});