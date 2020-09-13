import Glide from '@glidejs/glide';

var glide = new Glide('.projects--slider', {
	type: 'slider',
	focusAt: 'center',
	perView: 3,
	gap: 40
})

glide.mount()