var UI = {	closeMessage : function(e) {		var $this = $(this).parent();		$this.fadeOut();		e.preventDefault();	},	toggleMenu : function(e) {		var $this = $(this).parent();		UI.clearMenus($this);		$this.not('.js') && $this.addClass('js');		$this.toggleClass('active');		e.stopPropagation();		e.preventDefault();	},	clearMenus : function($element) {		var $dropdown = $('.dropdown');		if ($element) {			$dropdown = $dropdown.not($element);		}		// Search for dynamic acticated menus		$dropdown.removeClass('active');	},	showTooltip : function() {		var $this = $(this);		var gravity = $this.data('gravity');		$this.tipsy({			gravity : (gravity == null ? 's' : gravity),			opacity : 1,		});		$this.tipsy('show');	},	hideTooltip : function() {		var $this = $(this).tipsy('hide');	},	toggleBlock : function() {		var $parent = $(this).parent();		$parent.toggleClass('closed');	},}$(document).ready(function() {			$('a.close', '.msg').live('click', UI.closeMessage);$('.dropdown > a').click(UI.toggleMenu);$('.block-clickable > h2').click(UI.toggleBlock);$(document).click(UI.clearMenus);// Activate attached plugins$.fn.tablesorter && $('.table.sortable').tablesorter({	sortList : [ [ 1, 0 ] ]});$.fn.tipsy		&& $('[title]').hover(UI.showTooltip,				UI.hideTooltip);$.fn.uniform		&& $('.uniform, .form input:checkbox, .form input:radio').uniform();$.browser.msie		&& $('body').addClass(				'ie ie' + $.browser.version.substr(0, 1));	window.prettyPrint && prettyPrint();	jQuery(".form-tabs").tabs();	jQuery(".neutron-accordion").accordion();		});