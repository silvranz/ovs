$(document).ready(function() {
	$("#domainName").keyup(function(e){
		var value = $(this).val().trim();
		var label_status = 'error-message';
		var text_status = '';

		// Prevent space
		if( e.keyCode == 32 ) {
			text_status = 'Website name cannot contain space';
			$(this).val('');
			value = '';
		} else if( value.length < 3 || value.length > 20 ) {
			text_status = 'Website Name must between 3-20 character';
		} else if( /^[a-zA-Z- ]*$/.test(value) == false) {
			text_status = 'Website Name cannot contains symbol except alphanumeric and "-"';
		} else if( value.split('-').length > 2 ) {
			text_status = 'Website Name cannot contains symbol "-" more than once';
		} else if( value != '' && value.length > 2 ) {
			$.ajax({
				url:serviceUri+"template/checkDomain",
				data:{
					domainName:value
				},
				type:"POST",
				dataType:"JSON",
				async: false,
				global: false,
				success:function(data){
					if( data == 1) {
						text_status = 'Website Name is available';
						label_status = 'success-message';

						$(".availability").removeClass("glyphicon-remove").addClass("glyphicon-ok");
						$("#submitForm").removeAttr('disabled');
					} else {
						text_status = "Website Name isn't available";

						$(".availability").removeClass("glyphicon-ok").addClass("glyphicon-remove");
						$("#submitForm").attr('disabled', 'disabled');
					}
				}
			})
		} else {
			$(".availability").removeClass("glyphicon-ok").addClass("glyphicon-remove");
			$("#submitForm").attr('disabled', 'disabled');
		}

		$('.lblStatus').attr('class', 'lblStatus ' + label_status).text(text_status);
		
		if( label_status == 'success-message' ) {
			$(".availability").removeClass("glyphicon-remove").addClass("glyphicon-ok");
			$("#submitForm").removeAttr('disabled');
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