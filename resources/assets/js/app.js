
require('./bootstrap');

$(function() {
	let $humanBody = $('#humanBody');

	if ($humanBody.length > 0) {
		let $input = $('#localisation');
		let localisation = $input.val() ? $input.val().split(',') : [];

		localisation.map(item => {
			$('#' + item).addClass('active');
		});

		$humanBody.on('click', 'path', function () {
			let part = $(this).attr('id');
			let index = localisation.indexOf(part);

			if (index !== -1) {
				localisation.splice(index, 1);
			} else {
				localisation.push(part);
			}

			$(this).toggleClass('active');

			/*if (localisation.length > 0) {
				$input.val(localisation.join());
			} else {
				$input.val(localisation[0]);
			}*/

			$input.val(localisation.length > 0 ? localisation.join() : localisation[0]);
		});
	}
});