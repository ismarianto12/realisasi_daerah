$('#btnReload, #btnRead').on('click', function() {
    waitForContent();
});

$('#btnToggleNav').on('click', function() {
    $(this).blur();
    top.toggleNavigator(); 
});

$('.select2s').select2({
	minimumResultsForSearch: -1
});

$(document).on('keyup mouseover', '.number', function() {
    if(!$(this).hasClass('tooltipstered')){
        $('.number').tooltipster({
            animation: 'grow',
            trigger: 'click',
            theme: 'tooltipster-borderless',
            onlyOne: false
        }).on('keyup mouseover', function() {
            if ($(this).val() != '')
                $(this).tooltipster('instance').content($(this).val().toString().replace('.', ',').replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.')).open();
        }).on('mouseout', function() {
            $(this).tooltipster('instance').close();
        });
    }
});

// $(document).on('keyup mouseover', '.number', function() {
//     if ($(this).prop('disabled')) return;
    
// 	if ($(this).hasClass('tooltipstered')) {
// 		if ($(this).val() != '' && $(this).val().length > 3) {
// 			$(this)
// 				.tooltipster(
// 					'content',
// 					$(this).val().toString().replace('.', ',').replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.')
// 				)
// 				.tooltipster('open');
// 		} else {
// 			$(this).tooltipster('close');
// 		}
// 	}
// });

function reload() {
	$.confirm({
		title: '',
		content: 'Terdapat kesalahan saat pengiriman data, Segarkan halaman ini?',
		icon: 'icon icon-all_inclusive',
		theme: 'supervan',
		closeIcon: true,
		animation: 'scale',
		type: 'orange',
		autoClose: 'ok|10000',
		escapeKey: 'cancelAction',
		buttons: {
			ok: {
				text: 'ok!',
				btnClass: 'btn-primary',
				keys: [ 'enter' ],
				action: function() {
					document.location.reload();
				}
			},
			cancel: function() {
				console.log('the user clicked cancel');
			}
		}
	});
}

function confirm_del() {
	$.confirm({
		title: '',
		content: 'Apakah Anda yakin akan menghapus data ini?',
		icon: 'icon icon-question amber-text',
		theme: 'modern',
		closeIcon: true,
		animation: 'scale',
		type: 'red',
		buttons: {
			ok: {
				text: 'ok!',
				btnClass: 'btn-primary',
				keys: [ 'enter' ],
				action: function() {
					del();
				}
			},
			cancel: function() {}
		}
	});
}

function confirm_del_include() {
	$.confirm({
		title: '',
		content: 'Apakah Anda yakin akan menghapus data ini?',
		icon: 'icon icon-question amber-text',
		theme: 'modern',
		closeIcon: true,
		animation: 'scale',
		type: 'red',
		buttons: {
			ok: {
				text: 'ok!',
				btnClass: 'btn-primary',
				keys: [ 'enter' ],
				action: function() {
					del_include();
				}
			},
			cancel: function() {}
		}
	});
}
function confirm_del_include_2() {
	$.confirm({
		title: '',
		content: 'Apakah Anda yakin akan menghapus data ini?',
		icon: 'icon icon-question amber-text',
		theme: 'modern',
		closeIcon: true,
		animation: 'scale',
		type: 'red',
		buttons: {
			ok: {
				text: 'ok!',
				btnClass: 'btn-primary',
				keys: [ 'enter' ],
				action: function() {
					del_include_2();
				}
			},
			cancel: function() {}
		}
	});
}
function confirm_del_include_3() {
	$.confirm({
		title: '',
		content: 'Apakah Anda yakin akan menghapus data ini?',
		icon: 'icon icon-question amber-text',
		theme: 'modern',
		closeIcon: true,
		animation: 'scale',
		type: 'red',
		buttons: {
			ok: {
				text: 'ok!',
				btnClass: 'btn-primary',
				keys: [ 'enter' ],
				action: function() {
					del_include_3();
				}
			},
			cancel: function() {}
		}
	});
}

function confirm_del_si() {
	$.confirm({
		title: '',
		content: 'Apakah Anda yakin akan menghapus data ini?',
		icon: 'icon icon-question amber-text',
		theme: 'modern',
		closeIcon: true,
		animation: 'scale',
		type: 'red',
		buttons: {
			ok: {
				text: 'ok!',
				btnClass: 'btn-primary',
				keys: [ 'enter' ],
				action: function() {
					del_si();
				}
			},
			cancel: function() {}
		}
	});
}

function confirm_del_sp() {
	$.confirm({
		title: '',
		content: 'Apakah Anda yakin akan menghapus data ini?',
		icon: 'icon icon-question amber-text',
		theme: 'modern',
		closeIcon: true,
		animation: 'scale',
		type: 'red',
		buttons: {
			ok: {
				text: 'ok!',
				btnClass: 'btn-primary',
				keys: [ 'enter' ],
				action: function() {
					del_sp();
				}
			},
			cancel: function() {}
		}
	});
}

function confirm_program_indikator(id) {
	$.confirm({
		title: '',
		content: 'Apakah Anda yakin akan menghapus data ini?',
		icon: 'icon icon-question amber-text',
		theme: 'modern',
		closeIcon: true,
		animation: 'scale',
		type: 'red',
		buttons: {
			ok: {
				text: 'ok!',
				btnClass: 'btn-primary',
				keys: [ 'enter' ],
				action: function() {
					if (id == 1) {
						del_ip();
					}
					if (id == 2) {
						del_pp();
					}
				}
			},
			cancel: function() {}
		}
	});
}
