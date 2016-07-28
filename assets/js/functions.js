var source_data = {};
var serviceUri = 'http://localhost/ovs/';
// var serviceUri = 'http://'+document.domain+'/';
var finished_ajax = true;

$(document).ready(function() {

	$(document).ajaxStart(function() {
        finished_ajax = false;
        if( !$(document).find('.disable-overlay').length ) {
            $('.overlay').css('visibility', 'visible');
        }
	});
	$(document).ajaxComplete(function() {
        finished_ajax = true;
		$('.overlay').css('visibility', 'hidden');
        $('input[type=submit], button[type=submit]').attr('disabled', false);
	});
    $(document).submit(function(e) {
        $('input[type=submit], button[type=submit]').attr('disabled', true);
    });
    
    $.customFunction();
    $.ajaxLink();
    $.ajaxForm();
    $.ajaxModal();

    $.autocomplete();
    $.carousel();
    $.tabs();
    $.replaceText();

});

$.customFunction = function() {
    $('body').on('click', '*[slide-toggle-on-click]', function(e) {
        e.preventDefault();
        var self = $(this);
        var _class = self.attr('slide-toggle-on-click');

        if( self.attr('toggle-oveflow') == 'true' ) {
            if( $('body').css('overflow') == 'visible' ) {
                $('body').css('overflow', 'hidden');
            } else {
                $('body').css('overflow', 'visible');
            }
        }
        $(_class).stop().slideToggle();
    });
    $('body').on('click', '*[toggle-on-click]', function(e) {
        e.preventDefault();
        var self = $(this);
        var _class = self.attr('toggle-on-click');

        if( self.attr('toggle-oveflow') == 'true' ) {
            if( $('body').css('overflow') == 'visible' ) {
                $('body').css('overflow', 'hidden');
            } else {
                $('body').css('overflow', 'visible');
            }
        }
        $(_class).toggle();
    });
    $('body').on('click', '*[show-on-click]', function(e) {
        e.preventDefault();
        var self = $(this);
        var _class = self.attr('show-on-click');
        $(_class).show();

        if( $(_class).hasClass('hide') ) {
            $(_class).removeClass('hide');
        }
    });
    $('body').on('click', '*[hide-on-click]', function(e) {
        e.preventDefault();
        var self = $(this);
        var _class = self.attr('hide-on-click');
        $(_class).hide();
    });
    $('body').on('click', '*[trigger-on-click]', function(e) {
        e.preventDefault();
        var self = $(this);
        var _class = self.attr('trigger-on-click');
        $(_class).trigger('click');
    });
    $('body').on('click', 'a[data-submit="1"]', function(e) {
        e.preventDefault();
        var self = $(this);
        self.closest('form').submit();
    });
    $('body').on('keypress', '.submit-on-enter', function(e) {
        var code = e.keyCode;
        if (code == 13) {
            e.preventDefault();
            $(this).closest('form').submit();
        }
    });
    $('body').on('submit', function(e) {
        $('.wrapper-template').remove();
    });
    $('body').on('click', '.btnPrint', function(e) {
        e.preventDefault();
        window.print();
    });
    
    if ( $('.ajax-load-more').length ) {
        $(window).scroll(function() {
            if($(window).scrollTop() + $(window).height() > ($(document).height()/2) + 300 ) {
                $('.ajax-form').submit();
            }
        });
    }
}

$.ajaxLink = function() {
    $('body').on('click', '.ajax-link', function(e) {
        var self = $(this);
        var data_url = self.attr('href');
        var wrapper_class = '.' + self.attr('target-wrapper');
        var with_confirm = self.attr('with-confirm');
        var conf = true;
        if (with_confirm !== undefined) {
            conf = confirm(with_confirm);
        }
        if (conf == true) {
            $.ajax({
                url: data_url,
                type: 'GET',
                dataType: 'html',
                success: function(result) {
                    var contentHTML = '';
                    if (self.attr('remove') !== undefined) {
                        self.closest('.wrapper-ajax-link').slideUp(1500, function(){
                            self.closest('.wrapper-ajax-link').html('<div class="alert alert-success temp-alert">'+
                                '<a href="#" class="close" data-dismiss="alert" title="Tutup">×</a>'+
                                '<p>Data successfully deleted</p>'+
                            '</div>').slideDown();

                            setTimeout(function(){
                                $('.temp-alert').slideUp(1500, function(){
                                    $('.temp-alert').remove();
                                });
                            }, 5000);
                        });
                    } else if ($(result).find(wrapper_class).length) {
                        contentHTML = $(result).find(wrapper_class).html();
                        $(wrapper_class).html(contentHTML);
                    } else {
                        self.closest('.wrapper-ajax-link').replaceWith(result);
                    }
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    alert('Processing failed. Please try again in a few seconds.');
                    return false;
                }
            });
        }
        return false;
    });
}

$.ajaxForm = function() {
    $('body').on('submit', '.ajax-form', function(e) {
        e.preventDefault();
        if( finished_ajax ) {
            var self = $(this);
            var form_data = self.serialize();
            var form_id = '#' + self.attr('id');
            var form_action = self.attr('action');
            var data_reload = self.attr('data-reload');
            var data_redirect = self.attr('data-redirect');
            var selector_target = self.attr('selector-target');

            $.ajax({
                url: serviceUri + form_action,
                type: 'POST',
                dataType: 'html',
                data: form_data,
                success: function(result) {
                    var message = $(result).find('#msg-text').html();
                    var status = $(result).find('#msg-status').html();
                    var contentHTML = '';
                    if( $(result).find(selector_target).length ) {
                        contentHTML = $(result).find(selector_target).html();
                        $(selector_target).append(contentHTML);
                    } 

                    if ($(result).find(form_id).length) {
                        contentHTML = $(result).find(form_id).html();
                        $(form_id).html(contentHTML);
                    } else {
                        self.closest('.ajax-wrapper-form').replaceWith(result);
                    }
                    if (status == 'success') {
                        if( data_redirect !== undefined ) {
                            window.location.replace(serviceUri+data_redirect);
                        } else if (data_reload == 'true') {
                            window.location.reload();
                        }
                    }
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    alert('Processing failed. Please try again in a few seconds.');
                    return false;
                }
            });
            return false;
        }
    });
}

$.ajaxModal = function(options) {
    $('body').on('click', '.ajax-modal', function() {
        var self = $(this);
        var url = self.attr('href');
        var title = self.attr('title');
        $.ajax({
            url: url,
            type: 'POST',
            success: function(response, status) {
                $('#myModal').replaceWith(response);
                $('#myModal').modal('show');
                return false;
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                alert('Processing failed. Please try again in a few seconds.');
                return false;
            }
        });
        return false;
    });
    $('body').on('click', '.close-modal', function() {
        $('#myModal').modal('hide');
        return false;
    });
}

$.autocomplete = function(objcontainer) {
    objcontainer = (typeof objcontainer != 'undefined') ? objcontainer : $('body');
    $('.autocomplete', objcontainer).each(function() {
        var self = $(this);
        var url = self.attr('data-url');
        var _class = self.attr('data-class');
        if (source_data.hasOwnProperty(_class)) {
            $.buildAutocomplete(self, _class);
        } else {
            $.ajax({
                url: url,
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    source_data[_class] = [];
                    for (var i in data) {
                        var row = data[i];
                        source_data[_class].push(JSON.stringify(row));
                    }
                    $.buildAutocomplete(self, _class);
                }
            });
        }
    });
}

$.buildAutocomplete = function(obj, _class) {
    var id = obj.attr('id');
    obj.typeahead({
        source: source_data[_class],
        highlighter: function(item) {
            return JSON.parse(item).name;
        },
        matcher: function(item) {
            return JSON.parse(item).name.toLocaleLowerCase().indexOf(this.query.toLocaleLowerCase()) != -1;
        },
        updater: function(item) {
            var objItem = JSON.parse(item);
            var hiddenField = $('#hdnField' + id);
            if (hiddenField.length) {
                hiddenField.val(objItem.id);
            }
            return objItem.name;
        }
    });
}

$.carousel = function() {
    $('.carousel').carousel({
        interval: 4000
    })
    $('.carousel .item').each(function() {
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));
    });
}

$.tabs = function() {
    $('body').on('click', 'ul.nav.nav-tabs a, a.custom-nav-tabs', function(e) {
        e.preventDefault();
        var self = $(this);
        if(self.hasClass('custom-nav-tabs')){
            $('ul.nav.nav-tabs li').removeClass('active');
        }

        self.tab('show');
    });
}

$.replaceText = function() {
    $('body').on('click', '.replace-text', function() {
        var self = $(this);
        var target = self.attr('text-target');

        var text = self.find("*").last().text();
        if( self.attr('text-value') !== undefined ) {
            text = self.attr('text-value');
        }

        $(target).text(text);
    });
}
$.fn.scrolling = function(param){
	var container=this;
	var templateItem = $("#templateItem",container);
	var requestData = {};
	if(typeof param.requestData !== "undefined"){
		requestData = param.requestData;
	}
	requestData["limit"] = param.itemPerLoad;
	requestData["offset"] = 0;
	$(container).data("offset",requestData["offset"]);
	$(container).html(templateItem);
	if(param.startButton){
		param.startButton.click(function(e){
			e.preventDefault();
			$(window).scroll(function() {
				if($(window).scrollTop() + $(window).height() == $(document).height()){
					requestData["offset"] = typeof $(container).data("offset")=="undefined"?
													0:$(container).data("offset")+requestData["limit"];
					$(container).data("offset",requestData["offset"]);
					$.ajax({
						type:"POST",
						url:param.url,
						data:requestData,
						dataType:"JSON",
						container:container,
						templateItem:templateItem,
						startButton:param.startButton,
						success:function(data){
							if(data.length==0){
								$(window).off("scroll");
							}
							param.callback(data);
						}
					})
				}
			}).trigger("scroll");	
		})
	}
	$.ajax({
		type:"POST",
		url:param.url,
		data:requestData,
		dataType:"JSON",
		container:container,
		templateItem:templateItem,
		startButton:param.startButton,
		success:param.callback
	})
	return this;
}