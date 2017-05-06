var LoadDb = function(){

	var AjaxCall = function(url,value,returnId,statusDiv,method,token,appendTo){
			$.ajax({
			method:method,
			url :url,
			data:{param:$(value).serializeArray(), _token:token},
			beforeSend: function(){
				$('#'+statusDiv).html(" ...processing");
			},
			success: function(msg){
				if(msg.status=="1")
				{
					$('#'+returnId).append(msg.message);
					$('#'+statusDiv).html('done');
				}
				else
				{
					$("#"+statusDiv).html("Cannot process request...");
				}
			},
			error: function(){
				$('#'+statusDiv).html("<span style='color:red'>Unable to process request</span>");
			}
		});
	}

	return {
        init: function (url,value='',returnId,statusDiv,method,token,appendTo='') {
        	AjaxCall(url,value,returnId,statusDiv,method,token,appendTo);
        }
    };
}();