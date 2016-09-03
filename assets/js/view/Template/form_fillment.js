$(document).ready(function() {
	$("#domainName").keyup(function(){
		var value = $(this).val();
		if( value != '' && value.length > 2 ) {
			$.ajax({
				url:serviceUri+"template/checkDomain",
				data:{
					domainName:value
				},
				type:"POST",
				dataType:"JSON",
				global: false,
				success:function(data){
					if( data == 1) {
						$(".availability").removeClass("glyphicon-remove").addClass("glyphicon-ok");
						$("#submitForm").removeAttr('disabled');
					} else {
						$(".availability").removeClass("glyphicon-ok").addClass("glyphicon-remove");
						$("#submitForm").attr('disabled', 'disabled');
					}
				}
			})
		} else {
			$(".availability").removeClass("glyphicon-ok").addClass("glyphicon-remove");
			$("#submitForm").attr('disabled', 'disabled');
		}
	})

	$("#formFullfillment").submit(function(e){
		e.preventDefault();

		var value = $("#domainName").val();
		$.ajax({
			url:serviceUri+"template/createStore",
			data:{
				storeName:value,
				domainName:value,
				clientInfo:{
					"appCodeName":navigator.appCodeName,
					"appVersion":navigator.appVersion,
					"platform":navigator.platform
				},
				key:$("#keyValue").val()
			},
			type:"POST",
			success:function(data){
				location.href = serviceUri + "website";
			}
		})
	})
})