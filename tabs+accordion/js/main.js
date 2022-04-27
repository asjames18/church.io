require.config({
	paths: {
		'index': 'min/index',
		'jquery': 'http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min',
		'jquery.ba-resize': 'min/jquery.ba-resize',
		'jquery.tabs+accordion': 'jquery.tabs+accordion',
	},
	shim: {
		'jquery.ba-resize': ['jquery'],
	},
});

require(['jquery.tabs+accordion'], function() {

	$('.accordion, .tabs')
	.TabsAccordion({
		hashWatch: true,
		pauseMedia: true,
		responsiveSwitch: 'tablist',
		saveState: sessionStorage,
	});
});

// demo only
if(document.body.querySelector('.theme .color-scheme')) require(['../demo/js/demo']);