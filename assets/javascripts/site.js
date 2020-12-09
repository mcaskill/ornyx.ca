/*
	ornyx.ca (Global Script)
	Copyright 2010–2011 Chauncey McAskill
	<hello@kemryu.com>
*/

/**
  * CSS Browser Selector v0.4.0 (Nov 02, 2010)
  * Rafael Lima (http://rafael.adm.br) <http://rafael.adm.br/css_browser_selector>
  * License: <http://creativecommons.org/licenses/by/2.5/>
  * Contributors: <http://rafael.adm.br/css_browser_selector#contributors>
  */
//function css_browser_selector(u){var ua=u.toLowerCase(),is=function(t){return ua.indexOf(t)>-1},g='gecko',w='webkit',s='safari',o='opera',m='mobile',h=document.documentElement,b=[(!(/opera|webtv/i.test(ua))&&/msie\s(\d)/.test(ua))?('ie ie'+RegExp.$1):is('firefox/2')?g+' ff2':is('firefox/3.5')?g+' ff3 ff3_5':is('firefox/3.6')?g+' ff3 ff3_6':is('firefox/4')?g+' ff4':is('firefox/3')?g+' ff3':is('gecko/')?g:is('opera')?o+(/version\/(\d+)/.test(ua)?' '+o+RegExp.$1:(/opera(\s|\/)(\d+)/.test(ua)?' '+o+RegExp.$2:'')):is('konqueror')?'konqueror':is('blackberry')?m+' blackberry':is('android')?m+' android':is('chrome')?w+' chrome':is('iron')?w+' iron':is('applewebkit/')?w+' '+s+(/version\/(\d+)/.test(ua)?' '+s+RegExp.$1:''):is('mozilla/')?g:'',is('j2me')?m+' j2me':is('iphone')?m+' iphone':is('ipod')?m+' ipod':is('ipad')?m+' ipad':is('mac')?'mac':is('darwin')?'mac':is('webtv')?'webtv':is('win')?'win'+(is('windows nt 6.0')?' vista':''):is('freebsd')?'freebsd':(is('x11')||is('linux'))?'linux':'','js']; c = b.join(' '); h.className += ' '+c; return c;}; css_browser_selector(navigator.userAgent);

/* ############################################### */

Ornyx = window.Ornyx || {};
Ornyx.I = {};

Ornyx.$ = {
	html : $('html'),
	body : $('body'),
	nav  : {
		container: $('#navigation'),
		links: $('a','#navigation')
	},
	wrap: $('.wrap'),
	chakras: $('#tomes'),
	tomes: {
		'tome-1': $('#tome-1'),
		'tome-2': $('#tome-2'),
		'tome-3': $('#tome-3')
	}
};

Ornyx.C = {
	 FX:		Ornyx.$.html.hasClass('js')
	,defaultTome:	'tome-3'
	,markAnimating:	false
};


/**
  * @param $	jQuery Object in case of library conflict
  * @param w	Shorthand window Object
  * @param d	Shorthand document Object
  *
  * Module pattern: <http://yuiblog.com/blog/2007/06/12/module-pattern/>
  */
var Core = (function($, w, d) {

	// Expose innards of Succursales.
	return {

		/* Core.go
		 */
		go: function() {
			for (var i in Core.init) {
				Core.init[i]();
			}
		},

		/* Core.init
		 */
		init: {
			/* Core.init.handleTomes
			 */
			handleTomes: function() {
				if ( !(Ornyx.C.currentTome = Ornyx.$.body.attr('class')) ) {
					Ornyx.$.body.addClass(Ornyx.C.defaultTome);
					Ornyx.C.currentTome = Ornyx.C.defaultTome;
				}

				if ( Ornyx.C.FX ) {
					Ornyx.$.html.addClass('fx');
					Ornyx.$.wrap.height(Ornyx.$.tomes[Ornyx.C.currentTome].innerHeight());
				}

				$('.chakra').click(function(e) {
					e.preventDefault();
					var href = $(this).attr('href');

					if ( Ornyx.C.FX ) {
						e.preventDefault();
						var offsetTomes = Ornyx.$.chakras.offset(),
						    scrollPos = Core.misc.scrollPos();

						Ornyx.C.previousTome = Ornyx.C.currentTome;
						Ornyx.C.currentTome = href.substr(1, 6);

						if ( scrollPos.y < offsetTomes.top )
							$('html, body').animate({ scrollTop: offsetTomes.top }, 200);

						Ornyx.$.tomes[Ornyx.C.previousTome].fadeOut('fast');
						Ornyx.$.wrap.animate({ height: Ornyx.$.tomes[Ornyx.C.currentTome].innerHeight() }, 200);
						Ornyx.$.tomes[Ornyx.C.currentTome].fadeIn();
					}
					Ornyx.$.body.removeClass().addClass(Ornyx.C.currentTome);
				});

			},

			handlePopups: function () {
				if ( !Ornyx.$.body.is('#page-geographie') && !Ornyx.$.body.is('#page-personnages') ) return;

/*
				$('.mark').hover(function() {
					$('#popup'+$(this).attr('data-id'), '#point-popups').stop(true, true).animate({ opacity: 'show', top: 10 }, 'slow');
				}, function() {
					$('#popup'+$(this).attr('data-id'), '#point-popups').animate({ opacity: 'hide', top: -50 }, 'fast');
				});
*/

				$('.mark').hover(function(e) {
					var $$ = $(this)
					   ,id = $$.data('id')
					   ,$popup = $('#popup'+id, '#point-popups');

					if ( e.type == 'mouseenter' )
						$popup.stop(true, true).animate({ opacity: 'show', top: 10 }, 'slow');

					else if ( e.type == 'mouseleave' )
						$popup.animate({ opacity: 'hide', top: -50 }, 'fast');

				});
			},

			handleInvitation: function() {
				if ( !Ornyx.$.body.is('#page-accueil') ) return;

				var $$ = {
					cover: $('a.cover'),
					popup: $('#invitation'),
					close: $('a.close','#invitation')
				    },
				    offset = $$.cover.position();

				if ( $$.popup.length === 0 )
					return;

				$$.popup.css({ 'top' : offset.top-10, 'left' : offset.left-10 })

				$$.cover.click(function(e) {
					e.preventDefault();
					$$.popup.stop(true, true).animate({ opacity: 'show' }, 'normal');
				});
				$$.close.click(function(e) {
					e.preventDefault();
					$$.popup.stop(true, true).animate({ opacity: 'hide' }, 'fast');
				});

			}

		},

		/* Core.misc
		 */
		misc: {

			scrollPos: function () {
				var position = [0, 0];
				if ( typeof window.pageYOffset != 'undefined' ) {
					position = {
						x: window.pageXOffset,
						y: window.pageYOffset
					};
				} else if ( typeof document.documentElement.scrollTop != 'undefined' && document.documentElement.scrollTop > 0 ) {
					position = {
						x: document.documentElement.scrollLeft,
						y: document.documentElement.scrollTop
					};
				} else if ( typeof document.body.scrollTop != 'undefined' ) {
					position = {
						x: document.body.scrollLeft,
						y: document.body.scrollTop
					};
				}
				return position;
			}

		}
	};
// Alias jQuery, window, document.
})(jQuery, this, this.document);

$(document).ready(function () {
	Core.go();

	Ornyx.$.tomes[Ornyx.C.currentTome].find('img').one('load', function () {
		if ( Ornyx.C.FX ) {
			Ornyx.$.wrap.height(Ornyx.$.tomes[Ornyx.C.currentTome].innerHeight());
		}
	});

	$('a[href^="http://"], a[href^="https://"]').attr('target','_blank');
	//$('a[rel="external"]').attr('target','_blank');
});