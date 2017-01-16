/**
 * 添加按钮操作
 */
$("#button-add").click(function(){
	var url = SCOPE.add_url;//页面上定义的url地址
	window.location.href=url;//页面跳转
});
$('#singcms-button-submit').click(function(){
	var data=$('#singcms-form').serializeArray();
	postData = {};
	$(data).each(function(i){
		postData[this.name] = this.value;
	});
//	console.log(postData);
	//将获取 到的数据给服务器：
	url = SCOPE.save_url;//add.html里面有
	jump_url = SCOPE.jump_url;
	$.post(url,postData,function(result){
		if(result.status == 1) {
			//成功
			return dialog.success(result.message,jump_url);
		}else if(result.status == 0) {
			//失败
			return dialog.error(result.message);
		}
	},'JSON');
});