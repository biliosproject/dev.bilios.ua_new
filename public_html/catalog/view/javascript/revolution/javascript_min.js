
if("undefined"==typeof jQuery)throw new Error("Bootstrap's JavaScript requires jQuery");+function(a){"use strict";var b=a.fn.jquery.split(" ")[0].split(".");if(b[0]<2&&b[1]<9||1==b[0]&&9==b[1]&&b[2]<1)throw new Error("Bootstrap's JavaScript requires jQuery version 1.9.1 or higher")}(jQuery),+function(a){"use strict";function b(){var a=document.createElement("bootstrap"),b={WebkitTransition:"webkitTransitionEnd",MozTransition:"transitionend",OTransition:"oTransitionEnd otransitionend",transition:"transitionend"};for(var c in b)if(void 0!==a.style[c])return{end:b[c]};return!1}a.fn.emulateTransitionEnd=function(b){var c=!1,d=this;a(this).one("bsTransitionEnd",function(){c=!0});var e=function(){c||a(d).trigger(a.support.transition.end)};return setTimeout(e,b),this},a(function(){a.support.transition=b(),a.support.transition&&(a.event.special.bsTransitionEnd={bindType:a.support.transition.end,delegateType:a.support.transition.end,handle:function(b){return a(b.target).is(this)?b.handleObj.handler.apply(this,arguments):void 0}})})}(jQuery),+function(a){"use strict";function b(b){return this.each(function(){var c=a(this),e=c.data("bs.alert");e||c.data("bs.alert",e=new d(this)),"string"==typeof b&&e[b].call(c)})}var c='[data-dismiss="alert"]',d=function(b){a(b).on("click",c,this.close)};d.VERSION="3.3.5",d.TRANSITION_DURATION=150,d.prototype.close=function(b){function c(){g.detach().trigger("closed.bs.alert").remove()}var e=a(this),f=e.attr("data-target");f||(f=e.attr("href"),f=f&&f.replace(/.*(?=#[^\s]*$)/,""));var g=a(f);b&&b.preventDefault(),g.length||(g=e.closest(".alert")),g.trigger(b=a.Event("close.bs.alert")),b.isDefaultPrevented()||(g.removeClass("in"),a.support.transition&&g.hasClass("fade")?g.one("bsTransitionEnd",c).emulateTransitionEnd(d.TRANSITION_DURATION):c())};var e=a.fn.alert;a.fn.alert=b,a.fn.alert.Constructor=d,a.fn.alert.noConflict=function(){return a.fn.alert=e,this},a(document).on("click.bs.alert.data-api",c,d.prototype.close)}(jQuery),+function(a){"use strict";function b(b){return this.each(function(){var d=a(this),e=d.data("bs.button"),f="object"==typeof b&&b;e||d.data("bs.button",e=new c(this,f)),"toggle"==b?e.toggle():b&&e.setState(b)})}var c=function(b,d){this.$element=a(b),this.options=a.extend({},c.DEFAULTS,d),this.isLoading=!1};c.VERSION="3.3.5",c.DEFAULTS={loadingText:"loading..."},c.prototype.setState=function(b){var c="disabled",d=this.$element,e=d.is("input")?"val":"html",f=d.data();b+="Text",null==f.resetText&&d.data("resetText",d[e]()),setTimeout(a.proxy(function(){d[e](null==f[b]?this.options[b]:f[b]),"loadingText"==b?(this.isLoading=!0,d.addClass(c).attr(c,c)):this.isLoading&&(this.isLoading=!1,d.removeClass(c).removeAttr(c))},this),0)},c.prototype.toggle=function(){var a=!0,b=this.$element.closest('[data-toggle="buttons"]');if(b.length){var c=this.$element.find("input");"radio"==c.prop("type")?(c.prop("checked")&&(a=!1),b.find(".active").removeClass("active"),this.$element.addClass("active")):"checkbox"==c.prop("type")&&(c.prop("checked")!==this.$element.hasClass("active")&&(a=!1),this.$element.toggleClass("active")),c.prop("checked",this.$element.hasClass("active")),a&&c.trigger("change")}else this.$element.attr("aria-pressed",!this.$element.hasClass("active")),this.$element.toggleClass("active")};var d=a.fn.button;a.fn.button=b,a.fn.button.Constructor=c,a.fn.button.noConflict=function(){return a.fn.button=d,this},a(document).on("click.bs.button.data-api",'[data-toggle^="button"]',function(c){var d=a(c.target);d.hasClass("btn")||(d=d.closest(".btn")),b.call(d,"toggle"),a(c.target).is('input[type="radio"]')||a(c.target).is('input[type="checkbox"]')||c.preventDefault()}).on("focus.bs.button.data-api blur.bs.button.data-api",'[data-toggle^="button"]',function(b){a(b.target).closest(".btn").toggleClass("focus",/^focus(in)?$/.test(b.type))})}(jQuery),+function(a){"use strict";function b(b){return this.each(function(){var d=a(this),e=d.data("bs.carousel"),f=a.extend({},c.DEFAULTS,d.data(),"object"==typeof b&&b),g="string"==typeof b?b:f.slide;e||d.data("bs.carousel",e=new c(this,f)),"number"==typeof b?e.to(b):g?e[g]():f.interval&&e.pause().cycle()})}var c=function(b,c){this.$element=a(b),this.$indicators=this.$element.find(".carousel-indicators"),this.options=c,this.paused=null,this.sliding=null,this.interval=null,this.$active=null,this.$items=null,this.options.keyboard&&this.$element.on("keydown.bs.carousel",a.proxy(this.keydown,this)),"hover"==this.options.pause&&!("ontouchstart"in document.documentElement)&&this.$element.on("mouseenter.bs.carousel",a.proxy(this.pause,this)).on("mouseleave.bs.carousel",a.proxy(this.cycle,this))};c.VERSION="3.3.5",c.TRANSITION_DURATION=600,c.DEFAULTS={interval:5e3,pause:"hover",wrap:!0,keyboard:!0},c.prototype.keydown=function(a){if(!/input|textarea/i.test(a.target.tagName)){switch(a.which){case 37:this.prev();break;case 39:this.next();break;default:return}a.preventDefault()}},c.prototype.cycle=function(b){return b||(this.paused=!1),this.interval&&clearInterval(this.interval),this.options.interval&&!this.paused&&(this.interval=setInterval(a.proxy(this.next,this),this.options.interval)),this},c.prototype.getItemIndex=function(a){return this.$items=a.parent().children(".item"),this.$items.index(a||this.$active)},c.prototype.getItemForDirection=function(a,b){var c=this.getItemIndex(b),d="prev"==a&&0===c||"next"==a&&c==this.$items.length-1;if(d&&!this.options.wrap)return b;var e="prev"==a?-1:1,f=(c+e)%this.$items.length;return this.$items.eq(f)},c.prototype.to=function(a){var b=this,c=this.getItemIndex(this.$active=this.$element.find(".item.active"));return a>this.$items.length-1||0>a?void 0:this.sliding?this.$element.one("slid.bs.carousel",function(){b.to(a)}):c==a?this.pause().cycle():this.slide(a>c?"next":"prev",this.$items.eq(a))},c.prototype.pause=function(b){return b||(this.paused=!0),this.$element.find(".next, .prev").length&&a.support.transition&&(this.$element.trigger(a.support.transition.end),this.cycle(!0)),this.interval=clearInterval(this.interval),this},c.prototype.next=function(){return this.sliding?void 0:this.slide("next")},c.prototype.prev=function(){return this.sliding?void 0:this.slide("prev")},c.prototype.slide=function(b,d){var e=this.$element.find(".item.active"),f=d||this.getItemForDirection(b,e),g=this.interval,h="next"==b?"left":"right",i=this;if(f.hasClass("active"))return this.sliding=!1;var j=f[0],k=a.Event("slide.bs.carousel",{relatedTarget:j,direction:h});if(this.$element.trigger(k),!k.isDefaultPrevented()){if(this.sliding=!0,g&&this.pause(),this.$indicators.length){this.$indicators.find(".active").removeClass("active");var l=a(this.$indicators.children()[this.getItemIndex(f)]);l&&l.addClass("active")}var m=a.Event("slid.bs.carousel",{relatedTarget:j,direction:h});return a.support.transition&&this.$element.hasClass("slide")?(f.addClass(b),f[0].offsetWidth,e.addClass(h),f.addClass(h),e.one("bsTransitionEnd",function(){f.removeClass([b,h].join(" ")).addClass("active"),e.removeClass(["active",h].join(" ")),i.sliding=!1,setTimeout(function(){i.$element.trigger(m)},0)}).emulateTransitionEnd(c.TRANSITION_DURATION)):(e.removeClass("active"),f.addClass("active"),this.sliding=!1,this.$element.trigger(m)),g&&this.cycle(),this}};var d=a.fn.carousel;a.fn.carousel=b,a.fn.carousel.Constructor=c,a.fn.carousel.noConflict=function(){return a.fn.carousel=d,this};var e=function(c){var d,e=a(this),f=a(e.attr("data-target")||(d=e.attr("href"))&&d.replace(/.*(?=#[^\s]+$)/,""));if(f.hasClass("carousel")){var g=a.extend({},f.data(),e.data()),h=e.attr("data-slide-to");h&&(g.interval=!1),b.call(f,g),h&&f.data("bs.carousel").to(h),c.preventDefault()}};a(document).on("click.bs.carousel.data-api","[data-slide]",e).on("click.bs.carousel.data-api","[data-slide-to]",e),a(window).on("load",function(){a('[data-ride="carousel"]').each(function(){var c=a(this);b.call(c,c.data())})})}(jQuery),+function(a){"use strict";function b(b){var c,d=b.attr("data-target")||(c=b.attr("href"))&&c.replace(/.*(?=#[^\s]+$)/,"");return a(d)}function c(b){return this.each(function(){var c=a(this),e=c.data("bs.collapse"),f=a.extend({},d.DEFAULTS,c.data(),"object"==typeof b&&b);!e&&f.toggle&&/show|hide/.test(b)&&(f.toggle=!1),e||c.data("bs.collapse",e=new d(this,f)),"string"==typeof b&&e[b]()})}var d=function(b,c){this.$element=a(b),this.options=a.extend({},d.DEFAULTS,c),this.$trigger=a('[data-toggle="collapse"][href="#'+b.id+'"],[data-toggle="collapse"][data-target="#'+b.id+'"]'),this.transitioning=null,this.options.parent?this.$parent=this.getParent():this.addAriaAndCollapsedClass(this.$element,this.$trigger),this.options.toggle&&this.toggle()};d.VERSION="3.3.5",d.TRANSITION_DURATION=350,d.DEFAULTS={toggle:!0},d.prototype.dimension=function(){var a=this.$element.hasClass("width");return a?"width":"height"},d.prototype.show=function(){if(!this.transitioning&&!this.$element.hasClass("in")){var b,e=this.$parent&&this.$parent.children(".panel").children(".in, .collapsing");if(!(e&&e.length&&(b=e.data("bs.collapse"),b&&b.transitioning))){var f=a.Event("show.bs.collapse");if(this.$element.trigger(f),!f.isDefaultPrevented()){e&&e.length&&(c.call(e,"hide"),b||e.data("bs.collapse",null));var g=this.dimension();this.$element.removeClass("collapse").addClass("collapsing")[g](0).attr("aria-expanded",!0),this.$trigger.removeClass("collapsed").attr("aria-expanded",!0),this.transitioning=1;var h=function(){this.$element.removeClass("collapsing").addClass("collapse in")[g](""),this.transitioning=0,this.$element.trigger("shown.bs.collapse")};if(!a.support.transition)return h.call(this);var i=a.camelCase(["scroll",g].join("-"));this.$element.one("bsTransitionEnd",a.proxy(h,this)).emulateTransitionEnd(d.TRANSITION_DURATION)[g](this.$element[0][i])}}}},d.prototype.hide=function(){if(!this.transitioning&&this.$element.hasClass("in")){var b=a.Event("hide.bs.collapse");if(this.$element.trigger(b),!b.isDefaultPrevented()){var c=this.dimension();this.$element[c](this.$element[c]())[0].offsetHeight,this.$element.addClass("collapsing").removeClass("collapse in").attr("aria-expanded",!1),this.$trigger.addClass("collapsed").attr("aria-expanded",!1),this.transitioning=1;var e=function(){this.transitioning=0,this.$element.removeClass("collapsing").addClass("collapse").trigger("hidden.bs.collapse")};return a.support.transition?void this.$element[c](0).one("bsTransitionEnd",a.proxy(e,this)).emulateTransitionEnd(d.TRANSITION_DURATION):e.call(this)}}},d.prototype.toggle=function(){this[this.$element.hasClass("in")?"hide":"show"]()},d.prototype.getParent=function(){return a(this.options.parent).find('[data-toggle="collapse"][data-parent="'+this.options.parent+'"]').each(a.proxy(function(c,d){var e=a(d);this.addAriaAndCollapsedClass(b(e),e)},this)).end()},d.prototype.addAriaAndCollapsedClass=function(a,b){var c=a.hasClass("in");a.attr("aria-expanded",c),b.toggleClass("collapsed",!c).attr("aria-expanded",c)};var e=a.fn.collapse;a.fn.collapse=c,a.fn.collapse.Constructor=d,a.fn.collapse.noConflict=function(){return a.fn.collapse=e,this},a(document).on("click.bs.collapse.data-api",'[data-toggle="collapse"]',function(d){var e=a(this);e.attr("data-target")||d.preventDefault();var f=b(e),g=f.data("bs.collapse"),h=g?"toggle":e.data();c.call(f,h)})}(jQuery),+function(a){"use strict";function b(b){var c=b.attr("data-target");c||(c=b.attr("href"),c=c&&/#[A-Za-z]/.test(c)&&c.replace(/.*(?=#[^\s]*$)/,""));var d=c&&a(c);return d&&d.length?d:b.parent()}function c(c){c&&3===c.which||(a(e).remove(),a(f).each(function(){var d=a(this),e=b(d),f={relatedTarget:this};e.hasClass("open")&&(c&&"click"==c.type&&/input|textarea/i.test(c.target.tagName)&&a.contains(e[0],c.target)||(e.trigger(c=a.Event("hide.bs.dropdown",f)),c.isDefaultPrevented()||(d.attr("aria-expanded","false"),e.removeClass("open").trigger("hidden.bs.dropdown",f))))}))}function d(b){return this.each(function(){var c=a(this),d=c.data("bs.dropdown");d||c.data("bs.dropdown",d=new g(this)),"string"==typeof b&&d[b].call(c)})}var e=".dropdown-backdrop",f='[data-toggle="dropdown"]',g=function(b){a(b).on("click.bs.dropdown",this.toggle)};g.VERSION="3.3.5",g.prototype.toggle=function(d){var e=a(this);if(!e.is(".disabled, :disabled")){var f=b(e),g=f.hasClass("open");if(c(),!g){"ontouchstart"in document.documentElement&&!f.closest(".navbar-nav").length&&a(document.createElement("div")).addClass("dropdown-backdrop").insertAfter(a(this)).on("click",c);var h={relatedTarget:this};if(f.trigger(d=a.Event("show.bs.dropdown",h)),d.isDefaultPrevented())return;e.trigger("focus").attr("aria-expanded","true"),f.toggleClass("open").trigger("shown.bs.dropdown",h)}return!1}},g.prototype.keydown=function(c){if(/(38|40|27|32)/.test(c.which)&&!/input|textarea/i.test(c.target.tagName)){var d=a(this);if(c.preventDefault(),c.stopPropagation(),!d.is(".disabled, :disabled")){var e=b(d),g=e.hasClass("open");if(!g&&27!=c.which||g&&27==c.which)return 27==c.which&&e.find(f).trigger("focus"),d.trigger("click");var h=" li:not(.disabled):visible a",i=e.find(".dropdown-menu"+h);if(i.length){var j=i.index(c.target);38==c.which&&j>0&&j--,40==c.which&&j<i.length-1&&j++,~j||(j=0),i.eq(j).trigger("focus")}}}};var h=a.fn.dropdown;a.fn.dropdown=d,a.fn.dropdown.Constructor=g,a.fn.dropdown.noConflict=function(){return a.fn.dropdown=h,this},a(document).on("click.bs.dropdown.data-api",c).on("click.bs.dropdown.data-api",".dropdown form",function(a){a.stopPropagation()}).on("click.bs.dropdown.data-api",f,g.prototype.toggle).on("keydown.bs.dropdown.data-api",f,g.prototype.keydown).on("keydown.bs.dropdown.data-api",".dropdown-menu",g.prototype.keydown)}(jQuery),+function(a){"use strict";function b(b,d){return this.each(function(){var e=a(this),f=e.data("bs.modal"),g=a.extend({},c.DEFAULTS,e.data(),"object"==typeof b&&b);f||e.data("bs.modal",f=new c(this,g)),"string"==typeof b?f[b](d):g.show&&f.show(d)})}var c=function(b,c){this.options=c,this.$body=a(document.body),this.$element=a(b),this.$dialog=this.$element.find(".modal-dialog"),this.$backdrop=null,this.isShown=null,this.originalBodyPad=null,this.scrollbarWidth=0,this.ignoreBackdropClick=!1,this.options.remote&&this.$element.find(".modal-content").load(this.options.remote,a.proxy(function(){this.$element.trigger("loaded.bs.modal")},this))};c.VERSION="3.3.5",c.TRANSITION_DURATION=300,c.BACKDROP_TRANSITION_DURATION=150,c.DEFAULTS={backdrop:!0,keyboard:!0,show:!0},c.prototype.toggle=function(a){return this.isShown?this.hide():this.show(a)},c.prototype.show=function(b){var d=this,e=a.Event("show.bs.modal",{relatedTarget:b});this.$element.trigger(e),this.isShown||e.isDefaultPrevented()||(this.isShown=!0,this.checkScrollbar(),this.setScrollbar(),this.$body.addClass("modal-open"),this.escape(),this.resize(),this.$element.on("click.dismiss.bs.modal",'[data-dismiss="modal"]',a.proxy(this.hide,this)),this.$dialog.on("mousedown.dismiss.bs.modal",function(){d.$element.one("mouseup.dismiss.bs.modal",function(b){a(b.target).is(d.$element)&&(d.ignoreBackdropClick=!0)})}),this.backdrop(function(){var e=a.support.transition&&d.$element.hasClass("fade");d.$element.parent().length||d.$element.appendTo(d.$body),d.$element.show().scrollTop(0),d.adjustDialog(),e&&d.$element[0].offsetWidth,d.$element.addClass("in"),d.enforceFocus();var f=a.Event("shown.bs.modal",{relatedTarget:b});e?d.$dialog.one("bsTransitionEnd",function(){d.$element.trigger("focus").trigger(f)}).emulateTransitionEnd(c.TRANSITION_DURATION):d.$element.trigger("focus").trigger(f)}))},c.prototype.hide=function(b){b&&b.preventDefault(),b=a.Event("hide.bs.modal"),this.$element.trigger(b),this.isShown&&!b.isDefaultPrevented()&&(this.isShown=!1,this.escape(),this.resize(),a(document).off("focusin.bs.modal"),this.$element.removeClass("in").off("click.dismiss.bs.modal").off("mouseup.dismiss.bs.modal"),this.$dialog.off("mousedown.dismiss.bs.modal"),a.support.transition&&this.$element.hasClass("fade")?this.$element.one("bsTransitionEnd",a.proxy(this.hideModal,this)).emulateTransitionEnd(c.TRANSITION_DURATION):this.hideModal())},c.prototype.enforceFocus=function(){a(document).off("focusin.bs.modal").on("focusin.bs.modal",a.proxy(function(a){this.$element[0]===a.target||this.$element.has(a.target).length||this.$element.trigger("focus")},this))},c.prototype.escape=function(){this.isShown&&this.options.keyboard?this.$element.on("keydown.dismiss.bs.modal",a.proxy(function(a){27==a.which&&this.hide()},this)):this.isShown||this.$element.off("keydown.dismiss.bs.modal")},c.prototype.resize=function(){this.isShown?a(window).on("resize.bs.modal",a.proxy(this.handleUpdate,this)):a(window).off("resize.bs.modal")},c.prototype.hideModal=function(){var a=this;this.$element.hide(),this.backdrop(function(){a.$body.removeClass("modal-open"),a.resetAdjustments(),a.resetScrollbar(),a.$element.trigger("hidden.bs.modal")})},c.prototype.removeBackdrop=function(){this.$backdrop&&this.$backdrop.remove(),this.$backdrop=null},c.prototype.backdrop=function(b){var d=this,e=this.$element.hasClass("fade")?"fade":"";if(this.isShown&&this.options.backdrop){var f=a.support.transition&&e;if(this.$backdrop=a(document.createElement("div")).addClass("modal-backdrop "+e).appendTo(this.$body),this.$element.on("click.dismiss.bs.modal",a.proxy(function(a){return this.ignoreBackdropClick?void(this.ignoreBackdropClick=!1):void(a.target===a.currentTarget&&("static"==this.options.backdrop?this.$element[0].focus():this.hide()))},this)),f&&this.$backdrop[0].offsetWidth,this.$backdrop.addClass("in"),!b)return;f?this.$backdrop.one("bsTransitionEnd",b).emulateTransitionEnd(c.BACKDROP_TRANSITION_DURATION):b()}else if(!this.isShown&&this.$backdrop){this.$backdrop.removeClass("in");var g=function(){d.removeBackdrop(),b&&b()};a.support.transition&&this.$element.hasClass("fade")?this.$backdrop.one("bsTransitionEnd",g).emulateTransitionEnd(c.BACKDROP_TRANSITION_DURATION):g()}else b&&b()},c.prototype.handleUpdate=function(){this.adjustDialog()},c.prototype.adjustDialog=function(){var a=this.$element[0].scrollHeight>document.documentElement.clientHeight;this.$element.css({paddingLeft:!this.bodyIsOverflowing&&a?this.scrollbarWidth:"",paddingRight:this.bodyIsOverflowing&&!a?this.scrollbarWidth:""})},c.prototype.resetAdjustments=function(){this.$element.css({paddingLeft:"",paddingRight:""})},c.prototype.checkScrollbar=function(){var a=window.innerWidth;if(!a){var b=document.documentElement.getBoundingClientRect();a=b.right-Math.abs(b.left)}this.bodyIsOverflowing=document.body.clientWidth<a,this.scrollbarWidth=this.measureScrollbar()},c.prototype.setScrollbar=function(){var a=parseInt(this.$body.css("padding-right")||0,10);this.originalBodyPad=document.body.style.paddingRight||"",this.bodyIsOverflowing&&this.$body.css("padding-right",a+this.scrollbarWidth)},c.prototype.resetScrollbar=function(){this.$body.css("padding-right",this.originalBodyPad)},c.prototype.measureScrollbar=function(){var a=document.createElement("div");a.className="modal-scrollbar-measure",this.$body.append(a);var b=a.offsetWidth-a.clientWidth;return this.$body[0].removeChild(a),b};var d=a.fn.modal;a.fn.modal=b,a.fn.modal.Constructor=c,a.fn.modal.noConflict=function(){return a.fn.modal=d,this},a(document).on("click.bs.modal.data-api",'[data-toggle="modal"]',function(c){var d=a(this),e=d.attr("href"),f=a(d.attr("data-target")||e&&e.replace(/.*(?=#[^\s]+$)/,"")),g=f.data("bs.modal")?"toggle":a.extend({remote:!/#/.test(e)&&e},f.data(),d.data());d.is("a")&&c.preventDefault(),f.one("show.bs.modal",function(a){a.isDefaultPrevented()||f.one("hidden.bs.modal",function(){d.is(":visible")&&d.trigger("focus")})}),b.call(f,g,this)})}(jQuery),+function(a){"use strict";function b(b){return this.each(function(){var d=a(this),e=d.data("bs.tooltip"),f="object"==typeof b&&b;(e||!/destroy|hide/.test(b))&&(e||d.data("bs.tooltip",e=new c(this,f)),"string"==typeof b&&e[b]())})}var c=function(a,b){this.type=null,this.options=null,this.enabled=null,this.timeout=null,this.hoverState=null,this.$element=null,this.inState=null,this.init("tooltip",a,b)};c.VERSION="3.3.5",c.TRANSITION_DURATION=150,c.DEFAULTS={animation:!0,placement:"top",selector:!1,template:'<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',trigger:"hover focus",title:"",delay:0,html:!1,container:!1,viewport:{selector:"body",padding:0}},c.prototype.init=function(b,c,d){if(this.enabled=!0,this.type=b,this.$element=a(c),this.options=this.getOptions(d),this.$viewport=this.options.viewport&&a(a.isFunction(this.options.viewport)?this.options.viewport.call(this,this.$element):this.options.viewport.selector||this.options.viewport),this.inState={click:!1,hover:!1,focus:!1},this.$element[0]instanceof document.constructor&&!this.options.selector)throw new Error("`selector` option must be specified when initializing "+this.type+" on the window.document object!");for(var e=this.options.trigger.split(" "),f=e.length;f--;){var g=e[f];if("click"==g)this.$element.on("click."+this.type,this.options.selector,a.proxy(this.toggle,this));else if("manual"!=g){var h="hover"==g?"mouseenter":"focusin",i="hover"==g?"mouseleave":"focusout";this.$element.on(h+"."+this.type,this.options.selector,a.proxy(this.enter,this)),this.$element.on(i+"."+this.type,this.options.selector,a.proxy(this.leave,this))}}this.options.selector?this._options=a.extend({},this.options,{trigger:"manual",selector:""}):this.fixTitle()},c.prototype.getDefaults=function(){return c.DEFAULTS},c.prototype.getOptions=function(b){return b=a.extend({},this.getDefaults(),this.$element.data(),b),b.delay&&"number"==typeof b.delay&&(b.delay={show:b.delay,hide:b.delay}),b},c.prototype.getDelegateOptions=function(){var b={},c=this.getDefaults();return this._options&&a.each(this._options,function(a,d){c[a]!=d&&(b[a]=d)}),b},c.prototype.enter=function(b){var c=b instanceof this.constructor?b:a(b.currentTarget).data("bs."+this.type);return c||(c=new this.constructor(b.currentTarget,this.getDelegateOptions()),a(b.currentTarget).data("bs."+this.type,c)),b instanceof a.Event&&(c.inState["focusin"==b.type?"focus":"hover"]=!0),c.tip().hasClass("in")||"in"==c.hoverState?void(c.hoverState="in"):(clearTimeout(c.timeout),c.hoverState="in",c.options.delay&&c.options.delay.show?void(c.timeout=setTimeout(function(){"in"==c.hoverState&&c.show()},c.options.delay.show)):c.show())},c.prototype.isInStateTrue=function(){for(var a in this.inState)if(this.inState[a])return!0;return!1},c.prototype.leave=function(b){var c=b instanceof this.constructor?b:a(b.currentTarget).data("bs."+this.type);return c||(c=new this.constructor(b.currentTarget,this.getDelegateOptions()),a(b.currentTarget).data("bs."+this.type,c)),b instanceof a.Event&&(c.inState["focusout"==b.type?"focus":"hover"]=!1),c.isInStateTrue()?void 0:(clearTimeout(c.timeout),c.hoverState="out",c.options.delay&&c.options.delay.hide?void(c.timeout=setTimeout(function(){"out"==c.hoverState&&c.hide()},c.options.delay.hide)):c.hide())},c.prototype.show=function(){var b=a.Event("show.bs."+this.type);if(this.hasContent()&&this.enabled){this.$element.trigger(b);var d=a.contains(this.$element[0].ownerDocument.documentElement,this.$element[0]);if(b.isDefaultPrevented()||!d)return;var e=this,f=this.tip(),g=this.getUID(this.type);this.setContent(),f.attr("id",g),this.$element.attr("aria-describedby",g),this.options.animation&&f.addClass("fade");var h="function"==typeof this.options.placement?this.options.placement.call(this,f[0],this.$element[0]):this.options.placement,i=/\s?auto?\s?/i,j=i.test(h);j&&(h=h.replace(i,"")||"top"),f.detach().css({top:0,left:0,display:"block"}).addClass(h).data("bs."+this.type,this),this.options.container?f.appendTo(this.options.container):f.insertAfter(this.$element),this.$element.trigger("inserted.bs."+this.type);var k=this.getPosition(),l=f[0].offsetWidth,m=f[0].offsetHeight;if(j){var n=h,o=this.getPosition(this.$viewport);h="bottom"==h&&k.bottom+m>o.bottom?"top":"top"==h&&k.top-m<o.top?"bottom":"right"==h&&k.right+l>o.width?"left":"left"==h&&k.left-l<o.left?"right":h,f.removeClass(n).addClass(h)}var p=this.getCalculatedOffset(h,k,l,m);this.applyPlacement(p,h);var q=function(){var a=e.hoverState;e.$element.trigger("shown.bs."+e.type),e.hoverState=null,"out"==a&&e.leave(e)};a.support.transition&&this.$tip.hasClass("fade")?f.one("bsTransitionEnd",q).emulateTransitionEnd(c.TRANSITION_DURATION):q()}},c.prototype.applyPlacement=function(b,c){var d=this.tip(),e=d[0].offsetWidth,f=d[0].offsetHeight,g=parseInt(d.css("margin-top"),10),h=parseInt(d.css("margin-left"),10);isNaN(g)&&(g=0),isNaN(h)&&(h=0),b.top+=g,b.left+=h,a.offset.setOffset(d[0],a.extend({using:function(a){d.css({top:Math.round(a.top),left:Math.round(a.left)})}},b),0),d.addClass("in");var i=d[0].offsetWidth,j=d[0].offsetHeight;"top"==c&&j!=f&&(b.top=b.top+f-j);var k=this.getViewportAdjustedDelta(c,b,i,j);k.left?b.left+=k.left:b.top+=k.top;var l=/top|bottom/.test(c),m=l?2*k.left-e+i:2*k.top-f+j,n=l?"offsetWidth":"offsetHeight";d.offset(b),this.replaceArrow(m,d[0][n],l)},c.prototype.replaceArrow=function(a,b,c){this.arrow().css(c?"left":"top",50*(1-a/b)+"%").css(c?"top":"left","")},c.prototype.setContent=function(){var a=this.tip(),b=this.getTitle();a.find(".tooltip-inner")[this.options.html?"html":"text"](b),a.removeClass("fade in top bottom left right")},c.prototype.hide=function(b){function d(){"in"!=e.hoverState&&f.detach(),e.$element.removeAttr("aria-describedby").trigger("hidden.bs."+e.type),b&&b()}var e=this,f=a(this.$tip),g=a.Event("hide.bs."+this.type);return this.$element.trigger(g),g.isDefaultPrevented()?void 0:(f.removeClass("in"),a.support.transition&&f.hasClass("fade")?f.one("bsTransitionEnd",d).emulateTransitionEnd(c.TRANSITION_DURATION):d(),this.hoverState=null,this)},c.prototype.fixTitle=function(){var a=this.$element;(a.attr("title")||"string"!=typeof a.attr("data-original-title"))&&a.attr("data-original-title",a.attr("title")||"").attr("title","")},c.prototype.hasContent=function(){return this.getTitle()},c.prototype.getPosition=function(b){b=b||this.$element;var c=b[0],d="BODY"==c.tagName,e=c.getBoundingClientRect();null==e.width&&(e=a.extend({},e,{width:e.right-e.left,height:e.bottom-e.top}));var f=d?{top:0,left:0}:b.offset(),g={scroll:d?document.documentElement.scrollTop||document.body.scrollTop:b.scrollTop()},h=d?{width:a(window).width(),height:a(window).height()}:null;return a.extend({},e,g,h,f)},c.prototype.getCalculatedOffset=function(a,b,c,d){return"bottom"==a?{top:b.top+b.height,left:b.left+b.width/2-c/2}:"top"==a?{top:b.top-d,left:b.left+b.width/2-c/2}:"left"==a?{top:b.top+b.height/2-d/2,left:b.left-c}:{top:b.top+b.height/2-d/2,left:b.left+b.width}},c.prototype.getViewportAdjustedDelta=function(a,b,c,d){var e={top:0,left:0};if(!this.$viewport)return e;var f=this.options.viewport&&this.options.viewport.padding||0,g=this.getPosition(this.$viewport);if(/right|left/.test(a)){var h=b.top-f-g.scroll,i=b.top+f-g.scroll+d;h<g.top?e.top=g.top-h:i>g.top+g.height&&(e.top=g.top+g.height-i)}else{var j=b.left-f,k=b.left+f+c;j<g.left?e.left=g.left-j:k>g.right&&(e.left=g.left+g.width-k)}return e},c.prototype.getTitle=function(){var a,b=this.$element,c=this.options;return a=b.attr("data-original-title")||("function"==typeof c.title?c.title.call(b[0]):c.title)},c.prototype.getUID=function(a){do a+=~~(1e6*Math.random());while(document.getElementById(a));return a},c.prototype.tip=function(){if(!this.$tip&&(this.$tip=a(this.options.template),1!=this.$tip.length))throw new Error(this.type+" `template` option must consist of exactly 1 top-level element!");return this.$tip},c.prototype.arrow=function(){return this.$arrow=this.$arrow||this.tip().find(".tooltip-arrow")},c.prototype.enable=function(){this.enabled=!0},c.prototype.disable=function(){this.enabled=!1},c.prototype.toggleEnabled=function(){this.enabled=!this.enabled},c.prototype.toggle=function(b){var c=this;b&&(c=a(b.currentTarget).data("bs."+this.type),c||(c=new this.constructor(b.currentTarget,this.getDelegateOptions()),a(b.currentTarget).data("bs."+this.type,c))),b?(c.inState.click=!c.inState.click,c.isInStateTrue()?c.enter(c):c.leave(c)):c.tip().hasClass("in")?c.leave(c):c.enter(c)},c.prototype.destroy=function(){var a=this;clearTimeout(this.timeout),this.hide(function(){a.$element.off("."+a.type).removeData("bs."+a.type),a.$tip&&a.$tip.detach(),a.$tip=null,a.$arrow=null,a.$viewport=null})};var d=a.fn.tooltip;a.fn.tooltip=b,a.fn.tooltip.Constructor=c,a.fn.tooltip.noConflict=function(){return a.fn.tooltip=d,this}}(jQuery),+function(a){"use strict";function b(b){return this.each(function(){var d=a(this),e=d.data("bs.popover"),f="object"==typeof b&&b;(e||!/destroy|hide/.test(b))&&(e||d.data("bs.popover",e=new c(this,f)),"string"==typeof b&&e[b]())})}var c=function(a,b){this.init("popover",a,b)};if(!a.fn.tooltip)throw new Error("Popover requires tooltip.js");c.VERSION="3.3.5",c.DEFAULTS=a.extend({},a.fn.tooltip.Constructor.DEFAULTS,{placement:"right",trigger:"click",content:"",template:'<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'}),c.prototype=a.extend({},a.fn.tooltip.Constructor.prototype),c.prototype.constructor=c,c.prototype.getDefaults=function(){return c.DEFAULTS},c.prototype.setContent=function(){var a=this.tip(),b=this.getTitle(),c=this.getContent();a.find(".popover-title")[this.options.html?"html":"text"](b),a.find(".popover-content").children().detach().end()[this.options.html?"string"==typeof c?"html":"append":"text"](c),a.removeClass("fade top bottom left right in"),a.find(".popover-title").html()||a.find(".popover-title").hide()},c.prototype.hasContent=function(){return this.getTitle()||this.getContent()},c.prototype.getContent=function(){var a=this.$element,b=this.options;return a.attr("data-content")||("function"==typeof b.content?b.content.call(a[0]):b.content)},c.prototype.arrow=function(){return this.$arrow=this.$arrow||this.tip().find(".arrow")};var d=a.fn.popover;a.fn.popover=b,a.fn.popover.Constructor=c,a.fn.popover.noConflict=function(){return a.fn.popover=d,this}}(jQuery),+function(a){"use strict";function b(c,d){this.$body=a(document.body),this.$scrollElement=a(a(c).is(document.body)?window:c),this.options=a.extend({},b.DEFAULTS,d),this.selector=(this.options.target||"")+" .nav li > a",this.offsets=[],this.targets=[],this.activeTarget=null,this.scrollHeight=0,this.$scrollElement.on("scroll.bs.scrollspy",a.proxy(this.process,this)),this.refresh(),this.process()}function c(c){return this.each(function(){var d=a(this),e=d.data("bs.scrollspy"),f="object"==typeof c&&c;e||d.data("bs.scrollspy",e=new b(this,f)),"string"==typeof c&&e[c]()})}b.VERSION="3.3.5",b.DEFAULTS={offset:10},b.prototype.getScrollHeight=function(){return this.$scrollElement[0].scrollHeight||Math.max(this.$body[0].scrollHeight,document.documentElement.scrollHeight)},b.prototype.refresh=function(){var b=this,c="offset",d=0;this.offsets=[],this.targets=[],this.scrollHeight=this.getScrollHeight(),a.isWindow(this.$scrollElement[0])||(c="position",d=this.$scrollElement.scrollTop()),this.$body.find(this.selector).map(function(){var b=a(this),e=b.data("target")||b.attr("href"),f=/^#./.test(e)&&a(e);return f&&f.length&&f.is(":visible")&&[[f[c]().top+d,e]]||null}).sort(function(a,b){return a[0]-b[0]}).each(function(){b.offsets.push(this[0]),b.targets.push(this[1])})},b.prototype.process=function(){var a,b=this.$scrollElement.scrollTop()+this.options.offset,c=this.getScrollHeight(),d=this.options.offset+c-this.$scrollElement.height(),e=this.offsets,f=this.targets,g=this.activeTarget;if(this.scrollHeight!=c&&this.refresh(),b>=d)return g!=(a=f[f.length-1])&&this.activate(a);if(g&&b<e[0])return this.activeTarget=null,this.clear();for(a=e.length;a--;)g!=f[a]&&b>=e[a]&&(void 0===e[a+1]||b<e[a+1])&&this.activate(f[a])},b.prototype.activate=function(b){this.activeTarget=b,this.clear();var c=this.selector+'[data-target="'+b+'"],'+this.selector+'[href="'+b+'"]',d=a(c).parents("li").addClass("active");d.parent(".dropdown-menu").length&&(d=d.closest("li.dropdown").addClass("active")),
d.trigger("activate.bs.scrollspy")},b.prototype.clear=function(){a(this.selector).parentsUntil(this.options.target,".active").removeClass("active")};var d=a.fn.scrollspy;a.fn.scrollspy=c,a.fn.scrollspy.Constructor=b,a.fn.scrollspy.noConflict=function(){return a.fn.scrollspy=d,this},a(window).on("load.bs.scrollspy.data-api",function(){a('[data-spy="scroll"]').each(function(){var b=a(this);c.call(b,b.data())})})}(jQuery),+function(a){"use strict";function b(b){return this.each(function(){var d=a(this),e=d.data("bs.tab");e||d.data("bs.tab",e=new c(this)),"string"==typeof b&&e[b]()})}var c=function(b){this.element=a(b)};c.VERSION="3.3.5",c.TRANSITION_DURATION=150,c.prototype.show=function(){var b=this.element,c=b.closest("ul:not(.dropdown-menu)"),d=b.data("target");if(d||(d=b.attr("href"),d=d&&d.replace(/.*(?=#[^\s]*$)/,"")),!b.parent("li").hasClass("active")){var e=c.find(".active:last a"),f=a.Event("hide.bs.tab",{relatedTarget:b[0]}),g=a.Event("show.bs.tab",{relatedTarget:e[0]});if(e.trigger(f),b.trigger(g),!g.isDefaultPrevented()&&!f.isDefaultPrevented()){var h=a(d);this.activate(b.closest("li"),c),this.activate(h,h.parent(),function(){e.trigger({type:"hidden.bs.tab",relatedTarget:b[0]}),b.trigger({type:"shown.bs.tab",relatedTarget:e[0]})})}}},c.prototype.activate=function(b,d,e){function f(){g.removeClass("active").find("> .dropdown-menu > .active").removeClass("active").end().find('[data-toggle="tab"]').attr("aria-expanded",!1),b.addClass("active").find('[data-toggle="tab"]').attr("aria-expanded",!0),h?(b[0].offsetWidth,b.addClass("in")):b.removeClass("fade"),b.parent(".dropdown-menu").length&&b.closest("li.dropdown").addClass("active").end().find('[data-toggle="tab"]').attr("aria-expanded",!0),e&&e()}var g=d.find("> .active"),h=e&&a.support.transition&&(g.length&&g.hasClass("fade")||!!d.find("> .fade").length);g.length&&h?g.one("bsTransitionEnd",f).emulateTransitionEnd(c.TRANSITION_DURATION):f(),g.removeClass("in")};var d=a.fn.tab;a.fn.tab=b,a.fn.tab.Constructor=c,a.fn.tab.noConflict=function(){return a.fn.tab=d,this};var e=function(c){c.preventDefault(),b.call(a(this),"show")};a(document).on("click.bs.tab.data-api",'[data-toggle="tab"]',e).on("click.bs.tab.data-api",'[data-toggle="pill"]',e)}(jQuery),+function(a){"use strict";function b(b){return this.each(function(){var d=a(this),e=d.data("bs.affix"),f="object"==typeof b&&b;e||d.data("bs.affix",e=new c(this,f)),"string"==typeof b&&e[b]()})}var c=function(b,d){this.options=a.extend({},c.DEFAULTS,d),this.$target=a(this.options.target).on("scroll.bs.affix.data-api",a.proxy(this.checkPosition,this)).on("click.bs.affix.data-api",a.proxy(this.checkPositionWithEventLoop,this)),this.$element=a(b),this.affixed=null,this.unpin=null,this.pinnedOffset=null,this.checkPosition()};c.VERSION="3.3.5",c.RESET="affix affix-top affix-bottom",c.DEFAULTS={offset:0,target:window},c.prototype.getState=function(a,b,c,d){var e=this.$target.scrollTop(),f=this.$element.offset(),g=this.$target.height();if(null!=c&&"top"==this.affixed)return c>e?"top":!1;if("bottom"==this.affixed)return null!=c?e+this.unpin<=f.top?!1:"bottom":a-d>=e+g?!1:"bottom";var h=null==this.affixed,i=h?e:f.top,j=h?g:b;return null!=c&&c>=e?"top":null!=d&&i+j>=a-d?"bottom":!1},c.prototype.getPinnedOffset=function(){if(this.pinnedOffset)return this.pinnedOffset;this.$element.removeClass(c.RESET).addClass("affix");var a=this.$target.scrollTop(),b=this.$element.offset();return this.pinnedOffset=b.top-a},c.prototype.checkPositionWithEventLoop=function(){setTimeout(a.proxy(this.checkPosition,this),1)},c.prototype.checkPosition=function(){if(this.$element.is(":visible")){var b=this.$element.height(),d=this.options.offset,e=d.top,f=d.bottom,g=Math.max(a(document).height(),a(document.body).height());"object"!=typeof d&&(f=e=d),"function"==typeof e&&(e=d.top(this.$element)),"function"==typeof f&&(f=d.bottom(this.$element));var h=this.getState(g,b,e,f);if(this.affixed!=h){null!=this.unpin&&this.$element.css("top","");var i="affix"+(h?"-"+h:""),j=a.Event(i+".bs.affix");if(this.$element.trigger(j),j.isDefaultPrevented())return;this.affixed=h,this.unpin="bottom"==h?this.getPinnedOffset():null,this.$element.removeClass(c.RESET).addClass(i).trigger(i.replace("affix","affixed")+".bs.affix")}"bottom"==h&&this.$element.offset({top:g-b-f})}};var d=a.fn.affix;a.fn.affix=b,a.fn.affix.Constructor=c,a.fn.affix.noConflict=function(){return a.fn.affix=d,this},a(window).on("load",function(){a('[data-spy="affix"]').each(function(){var c=a(this),d=c.data();d.offset=d.offset||{},null!=d.offsetBottom&&(d.offset.bottom=d.offsetBottom),null!=d.offsetTop&&(d.offset.top=d.offsetTop),b.call(c,d)})})}(jQuery);
function getURLVar(key){
var value = [];
var query = String(document.location).split('?');
if (query[1]){
var part = query[1].split('&');
for (i = 0; i < part.length; i++){
var data = part[i].split('=');
if (data[0] && data[1]){
value[data[0]] = data[1];
}
}
if (value[key]){
return value[key];
}else{
return '';
}
}
}
$(document).ready(function(){
// Highlight any found errors
$('.text-danger').each(function(){
var element = $(this).parent().parent();
if (element.hasClass('form-group')){
element.addClass('has-error');
}
});
// Currency
$('#currency .currency-select').on('click', function(e){
e.preventDefault();
$('#currency input[name=\'code\']').attr('value', $(this).attr('name'));
$('#currency').submit();
});
// Language
$('#language a').on('click', function(e){
e.preventDefault();
$('#language input[name=\'code\']').attr('value', $(this).attr('href'));
$('#language').submit();
});
$('.bigsearch .search input[name=\'search\']').parent().find('.search-button').on('click', function(){
url = $('base').attr('href') + 'index.php?route=product/search';
var value = $('header .bigsearch input[name=\'search\']').val();
if (value){
url += '&search=' + encodeURIComponent(value);
}
var category_id = $('header .bigsearch input[name=\'category_id\']').prop('value');
if (category_id > 0){
url += '&category_id=' + encodeURIComponent(category_id) + '&sub_category=true';
}
location = url;
});
$('.bigsearch .search input[name=\'search\']').on('keydown', function(e){
if (e.keyCode == 13){
$('header .bigsearch input[name=\'search\']').parent().find('.search-button').trigger('click');
}
});
$('.mobsearch .search input[name=\'search\']').parent().find('.search-button').on('click', function(){
url = $('base').attr('href') + 'index.php?route=product/search';
var value = $('header .mobsearch input[name=\'search\']').val();
if (value){
url += '&search=' + encodeURIComponent(value);
}
var category_id = $('header .mobsearch input[name=\'category_id\']').prop('value');
if (category_id > 0){
url += '&category_id=' + encodeURIComponent(category_id) + '&sub_category=true';
}
location = url;
});
$('.mobsearch .search input[name=\'search\']').on('keydown', function(e){
if (e.keyCode == 13){
$('header .mobsearch input[name=\'search\']').parent().find('.search-button').trigger('click');
}
});
// Menu
$('#menu .dropdown-menu').each(function(){
var menu = $('#menu').offset();
var dropdown = $(this).parent().offset();
var i = (dropdown.left + $(this).outerWidth()) - (menu.left + $('#menu').outerWidth());
if (i > 0){
$(this).css('margin-left', '-' + (i + 5) + 'px');
}
});
// Checkout
$(document).on('keydown', '#collapse-checkout-option input[name=\'email\'], #collapse-checkout-option input[name=\'password\']', function(e){
if (e.keyCode == 13){
$('#collapse-checkout-option #button-login').trigger('click');
}
});
// tooltips on hover
$('[data-toggle=\'tooltip\']').tooltip({container:'body'});
// Makes tooltips work on ajax generated content
$(document).ajaxStop(function(){
$('[data-toggle=\'tooltip\']').tooltip({container:'body'});
});
});
// Cart add remove functions
var cart ={
'add':function(product_id, quantity){
$.ajax({
url:'index.php?route=checkout/cart/add',
type:'post',
data:'product_id=' + product_id + '&quantity=' + (typeof(quantity) != 'undefined' ? quantity :1),
dataType:'json',
beforeSend:function(){
masked('#top3 #cart > .dropdown-menu', true);
},
complete:function(){
masked('#top3 #cart > .dropdown-menu', false);
},
success:function(json){
$('.alert, .text-danger').remove();
if (json['redirect']){
location = json['redirect'];
}
if (json['success']){
get_revpopup_notification('alert-success', '', json['success']);
$('#top #cart-total_mobi').html(json['total']);
$('#top3 #cart-total').html(json['total']);
$('#top2 #cart-total').html(json['total']);
$('#top3 #cart-total-popup').html(json['total']);
$('html, body').animate({scrollTop:0}, 'slow');
$('#top3 #cart > ul').load('index.php?route=common/cart/info ul li');
}
},
error:function(xhr, ajaxOptions, thrownError){
alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
}
});
},
'update':function(key, quantity){
$.ajax({
url:'index.php?route=checkout/cart/edit',
type:'post',
data:'quantity[' + key + ']='+quantity,
dataType:'html',
beforeSend:function(){
masked('#top3 #cart > .dropdown-menu', true);
masked('.table-revolution', true);
},
complete:function(){
masked('#cart > .dropdown-menu', false);
},
success:function(json){
$('#top #cart-total_mobi').html(json['total']);
$('#top3 #cart-total').html(json['total']);
$('#top2 #cart-total').html(json['total']);
$('#top3 #cart-total-popup').html(json['total']);
if (getURLVar('route') == 'checkout/cart' || getURLVar('route') == 'checkout/checkout' || location.pathname == '/cart/' || location.pathname == '/checkout/'){
location = 'index.php?route=checkout/cart';
}else{
$('#top3 #cart').load('index.php?route=common/cart/info #cart > *');
$('#top2 #cart').load('index.php?route=common/cart/info #cart > *');
}
},
error:function(xhr, ajaxOptions, thrownError){
alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
}
});
},
'remove':function(key, product_id){
$.ajax({
url:'index.php?route=checkout/cart/remove',
type:'post',
data:'key=' + key,
dataType:'json',
beforeSend:function(){
masked('#top3 #cart > .dropdown-menu', true);
masked('.table-revolution', true);
},
complete:function(){
masked('#top3 #cart > .dropdown-menu', false);
},
success:function(json){
$('#top #cart-total_mobi').html(json['total']);
$('#top3 #cart-total').html(json['total']);
$('#top2 #cart-total').html(json['total']);
$('#top3 #cart-total-popup').html(json['total']);
setTimeout(function(){
$('.product-thumb.product_'+ product_id +' .image .pr_in_cart_i').remove();
}, 300);
if (getURLVar('route') == 'checkout/cart' || getURLVar('route') == 'checkout/checkout' || location.pathname == '/cart/' || location.pathname == '/checkout/'){
location = 'index.php?route=checkout/cart';
}else{
$('#top2 #cart > ul').load('index.php?route=common/cart/info ul li');
$('#top3 #cart > ul').load('index.php?route=common/cart/info ul li');
}
},
error:function(xhr, ajaxOptions, thrownError){
alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
}
});
}
}
var voucher ={
'add':function(){
},
'remove':function(key){
$.ajax({
url:'index.php?route=checkout/cart/remove',
type:'post',
data:'key=' + key,
dataType:'json',
beforeSend:function(){
$('#top3 #cart > button').button('loading');
},
complete:function(){
$('#top3 #cart > button').button('reset');
},
success:function(json){
// Need to set timeout otherwise it wont update the total
setTimeout(function (){
$('#top #cart-total_mobi').html(json['total']);
$('#top3 #cart-total').html(json['total']);
$('#top2 #cart-total').html(json['total']);
$('#top3 #cart-total-popup').html(json['total']);
}, 100);
if (getURLVar('route') == 'checkout/cart' || getURLVar('route') == 'checkout/checkout'){
location = 'index.php?route=checkout/cart';
}else{
$('#top3 #cart > ul').load('index.php?route=common/cart/info ul li');
}
},
error:function(xhr, ajaxOptions, thrownError){
alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
}
});
}
}
var wishlist ={
'add':function(product_id){
$.ajax({
url:'index.php?route=account/wishlist/add',
type:'post',
data:'product_id=' + product_id,
dataType:'json',
success:function(json){
$('.alert').remove();
if (json['redirect']){
location = json['redirect'];
}
if (json['success']){
get_revpopup_notification('alert-success', json['title'], json['success']);
}
$('#wishlist-total').html(json['total']);
//каталог
$('.product-thumb.product_'+product_id+' .wishlist a').removeClass().addClass(json['class_wishlist']);
$('.product-thumb.product_'+product_id+' .wishlist a').attr('title', json['button_wishlist']).attr('data-original-title', json['button_wishlist']);
//товар
$('.product-info a.wishlist.pjid_'+product_id).removeClass('in_wishlist').addClass(json['class_wishlist']);
$('.product-info a.wishlist.pjid_'+product_id).attr('title', json['button_wishlist']).attr('data-original-title', json['button_wishlist']);
//сравнение
$('.cart_wish a.wishlist.wishlist_wprid_'+product_id).removeClass('in_wishlist').addClass(json['class_wishlist']);
$('.cart_wish a.wishlist.wishlist_wprid_'+product_id).attr('title', json['button_wishlist']).attr('data-original-title', json['button_wishlist']);
},
error:function(xhr, ajaxOptions, thrownError){
alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
}
});
},
'remove':function(){
}
}
var compare ={
'add':function(product_id, brand){
$.ajax({
url:'index.php?route=product/compare/add',
type:'post',
data:'product_id=' + product_id + '&brand=' + brand,
dataType:'json',
success:function(json){
$('.alert').remove();
if (json['success']){
get_revpopup_notification('alert-success', json['title'], json['success']);
$('#compare-total').html(json['total']);
//каталог
$('.product-thumb.product_'+product_id+' .compare a').removeClass().addClass(json['class_compare']);
$('.product-thumb.product_'+product_id+' .compare a').attr('title', json['button_compare']).attr('data-original-title', json['button_compare']);
//товар
$('.product-info a.compare.pjid_'+product_id).removeClass('in_compare').addClass(json['class_compare']);
$('.product-info a.compare.pjid_'+product_id).attr('title', json['button_compare']).attr('data-original-title', json['button_compare']);
}
},
error:function(xhr, ajaxOptions, thrownError){
alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
}
});
},
'remove':function(){
}
}
$(document).delegate('.agree', 'click', function(e){
e.preventDefault();
var element = this;
$.ajax({
url:$(element).attr('href'),
type:'get',
dataType:'html',
success:function(data){
if (document.body.scrollHeight > document.body.offsetHeight){
$('#top3.absolutpo').css('right', '8.5px');
if ($(window).width() < 768){
$('#top #cart_mobi').css('margin-right', '17px');
}
}
$.magnificPopup.open({
removalDelay:300,
callbacks:{
beforeOpen:function(){
this.st.mainClass = 'mfp-zoom-in';
},
open:function(){
$('body').addClass('razmiv2');
$('#pagefader2').fadeIn(70);
},
close:function(){
$('body').removeClass('razmiv2');
$('#pagefader2').fadeOut(70);
$('#top3.absolutpo').css('right', 'initial');
if ($(window).width() < 768){
$('#top #cart_mobi').css('margin-right', 'initial');
}
}
},
tLoading:'',
items:{
src:$('<div class="popup_notification modalokno"><div class="popup_notification_heading default">'+ $(element).text() +'</div><div class="popup_notification_message">'+ data +'</div></div>'),
type:'inline'
}
});
}
});
});
$(document).delegate('.popup_html_content', 'click', function(e){
e.preventDefault();
var element = this;
$.ajax({
url:$(element).attr('href'),
type:'get',
dataType:'html',
success:function(data){
data_content = $(data).find('div#content');
data_h1 = $(data).find('.main-content h1');
if (document.body.scrollHeight > document.body.offsetHeight){
$('#top3.absolutpo').css('right', '8.5px');
if ($(window).width() < 768){
$('#top #cart_mobi').css('margin-right', '17px');
}
}
$.magnificPopup.open({
removalDelay:300,
callbacks:{
beforeOpen:function(){
this.st.mainClass = 'mfp-zoom-in';
},
open:function(){
$('body').addClass('razmiv2');
$('#pagefader2').fadeIn(70);
},
close:function(){
$('body').removeClass('razmiv2');
$('#pagefader2').fadeOut(70);
$('#top3.absolutpo').css('right', 'initial');
if ($(window).width() < 768){
$('#top #cart_mobi').css('margin-right', 'initial');
}
}
},
tLoading:'',
items:{
src:$('<div class="popup_notification modalokno"><div class="popup_notification_heading default">'+ data_h1.text() +'</div><div class="popup_notification_message">'+ data_content.html() +'</div></div>'),
type:'inline'
}
});
}
});
});
// Autocomplete */
(function($){
$.fn.autocomplete = function(option){
return this.each(function(){
this.timer = null;
this.items = new Array();
$.extend(this, option);
$(this).attr('autocomplete', 'off');
// Focus
$(this).on('focus', function(){
this.request();
});
// Blur
$(this).on('blur', function(){
setTimeout(function(object){
object.hide();
}, 200, this);
});
// Keydown
$(this).on('keydown', function(event){
switch(event.keyCode){
case 27:// escape
this.hide();
break;
default:
this.request();
break;
}
});
// Click
this.click = function(event){
event.preventDefault();
value = $(event.target).parent().attr('data-value');
if (value && this.items[value]){
this.select(this.items[value]);
}
}
// Show
this.show = function(){
var pos = $(this).position();
$(this).siblings('ul.dropdown-menu').css({
top:pos.top + $(this).outerHeight(),
left:pos.left
});
$(this).siblings('ul.dropdown-menu').show();
}
// Hide
this.hide = function(){
$(this).siblings('ul.dropdown-menu').hide();
}
// Request
this.request = function(){
clearTimeout(this.timer);
this.timer = setTimeout(function(object){
object.source($(object).val(), $.proxy(object.response, object));
}, 200, this);
}
// Response
this.response = function(json){
html = '';
if (json.length){
for (i = 0; i < json.length; i++){
this.items[json[i]['value']] = json[i];
}
for (i = 0; i < json.length; i++){
if (!json[i]['category']){
html += '<li data-value="' + json[i]['value'] + '"><a href="#">' + json[i]['label'] + '</a></li>';
}
}
// Get all the ones with a categories
var category = new Array();
for (i = 0; i < json.length; i++){
if (json[i]['category']){
if (!category[json[i]['category']]){
category[json[i]['category']] = new Array();
category[json[i]['category']]['name'] = json[i]['category'];
category[json[i]['category']]['item'] = new Array();
}
category[json[i]['category']]['item'].push(json[i]);
}
}
for (i in category){
html += '<li class="dropdown-header">' + category[i]['name'] + '</li>';
for (j = 0; j < category[i]['item'].length; j++){
html += '<li data-value="' + category[i]['item'][j]['value'] + '"><a href="#">&nbsp;&nbsp;&nbsp;' + category[i]['item'][j]['label'] + '</a></li>';
}
}
}
if (html){
this.show();
}else{
this.hide();
}
$(this).siblings('ul.dropdown-menu').html(html);
}
$(this).after('<ul class="dropdown-menu"></ul>');
$(this).siblings('ul.dropdown-menu').delegate('a', 'click', $.proxy(this.click, this));
});
}
})(window.jQuery);
function masked(element, status){
if (status == true){
$('<div/>')
.attr({'class':'masked'})
.prependTo(element);
$('<div class="masked_loading" />').insertAfter($('.masked'));
}else{
$('.masked').remove();
$('.masked_loading').remove();
}
}
;(function(a,b){if(typeof define==='function'&&define.amd){define(b)}else if(typeof exports==='object'){module.exports=b()}else{a.NProgress=b()}})(this,function(){var e={};e.version='0.2.0';var f=e.settings={minimum:0.08,easing:'linear',positionUsing:'',speed:350,trickle:true,trickleSpeed:250,showSpinner:true,barSelector:'[role="bar"]',spinnerSelector:'[role="spinner"]',parent:'body',template:'<div class="bar" role="bar"><div class="peg"></div></div><div class="spinner" role="spinner"><div class="spinner-icon"></div></div>'};e.configure=function(a){var b,value;for(b in a){value=a[b];if(value!==undefined&&a.hasOwnProperty(b))f[b]=value}return this};e.status=null;e.set=function(n){var b=e.isStarted();n=clamp(n,f.minimum,1);e.status=(n===1?null:n);var c=e.render(!b),bar=c.querySelector(f.barSelector),speed=f.speed,ease=f.easing;c.offsetWidth;g(function(a){if(f.positionUsing==='')f.positionUsing=e.getPositioningCSS();h(bar,barPositionCSS(n,speed,ease));if(n===1){h(c,{transition:'none',opacity:1});c.offsetWidth;setTimeout(function(){h(c,{transition:'all '+speed+'ms linear',opacity:0});setTimeout(function(){e.remove();a()},speed)},speed)}else{setTimeout(a,speed)}});return this};e.isStarted=function(){return typeof e.status==='number'};e.start=function(){if(!e.status)e.set(0);var a=function(){setTimeout(function(){if(!e.status)return;e.trickle();a()},f.trickleSpeed)};if(f.trickle)a();return this};e.done=function(a){if(!a&&!e.status)return this;return e.inc(0.3+0.5*Math.random()).set(1)};e.inc=function(a){var n=e.status;if(!n){return e.start()}else if(n>1){return}else{if(typeof a!=='number'){if(n>=0&&n<0.25){a=(Math.random()*(5-3+1)+3)/100}else if(n>=0.25&&n<0.65){a=(Math.random()*3)/100}else if(n>=0.65&&n<0.9){a=(Math.random()*2)/100}else if(n>=0.9&&n<0.99){a=0.005}else{a=0}}n=clamp(n+a,0,0.994);return e.set(n)}};e.trickle=function(){return e.inc()};(function(){var b=0,current=0;e.promise=function(a){if(!a||a.state()==="resolved"){return this}if(current===0){e.start()}b++;current++;a.always(function(){current--;if(current===0){b=0;e.done()}else{e.set((b-current)/b)}});return this}})();e.render=function(a){if(e.isRendered())return document.getElementById('nprogress');addClass(document.documentElement,'nprogress-busy');var b=document.createElement('div');b.id='nprogress';b.innerHTML=f.template;var c=b.querySelector(f.barSelector),perc=a?'-100':toBarPerc(e.status||0),parent=document.querySelector(f.parent),spinner;h(c,{transition:'all 0 linear',transform:'translate3d('+perc+'%,0,0)'});if(!f.showSpinner){spinner=b.querySelector(f.spinnerSelector);spinner&&removeElement(spinner)}if(parent!=document.body){addClass(parent,'nprogress-custom-parent')}parent.appendChild(b);return b};e.remove=function(){removeClass(document.documentElement,'nprogress-busy');removeClass(document.querySelector(f.parent),'nprogress-custom-parent');var a=document.getElementById('nprogress');a&&removeElement(a)};e.isRendered=function(){return!!document.getElementById('nprogress')};e.getPositioningCSS=function(){var a=document.body.style;var b=('WebkitTransform'in a)?'Webkit':('MozTransform'in a)?'Moz':('msTransform'in a)?'ms':('OTransform'in a)?'O':'';if(b+'Perspective'in a){return'translate3d'}else if(b+'Transform'in a){return'translate'}else{return'margin'}};function clamp(n,a,b){if(n<a)return a;if(n>b)return b;return n}function toBarPerc(n){return(-1+n)*100}function barPositionCSS(n,a,b){var c;if(f.positionUsing==='translate3d'){c={transform:'translate3d('+toBarPerc(n)+'%,0,0)'}}else if(f.positionUsing==='translate'){c={transform:'translate('+toBarPerc(n)+'%,0)'}}else{c={'margin-left':toBarPerc(n)+'%'}}c.transition='all '+a+'ms '+b;return c}var g=(function(){var b=[];function next(){var a=b.shift();if(a){a(next)}}return function(a){b.push(a);if(b.length==1)next()}})();var h=(function(){var d=['Webkit','O','Moz','ms'],cssProps={};function camelCase(c){return c.replace(/^-ms-/,'ms-').replace(/-([\da-z])/gi,function(a,b){return b.toUpperCase()})}function getVendorProp(a){var b=document.body.style;if(a in b)return a;var i=d.length,capName=a.charAt(0).toUpperCase()+a.slice(1),vendorName;while(i--){vendorName=d[i]+capName;if(vendorName in b)return vendorName}return a}function getStyleProp(a){a=camelCase(a);return cssProps[a]||(cssProps[a]=getVendorProp(a))}function applyCss(a,b,c){b=getStyleProp(b);a.style[b]=c}return function(a,b){var c=arguments,prop,value;if(c.length==2){for(prop in b){value=b[prop];if(value!==undefined&&b.hasOwnProperty(prop))applyCss(a,prop,value)}}else{applyCss(a,c[1],c[2])}}})();function hasClass(a,b){var c=typeof a=='string'?a:classList(a);return c.indexOf(' '+b+' ')>=0}function addClass(a,b){var c=classList(a),newList=c+b;if(hasClass(c,b))return;a.className=newList.substring(1)}function removeClass(a,b){var c=classList(a),newList;if(!hasClass(a,b))return;newList=c.replace(' '+b+' ',' ');a.className=newList.substring(1,newList.length-1)}function classList(a){return(' '+(a&&a.className||'')+' ').replace(/\s+/gi,' ')}function removeElement(a){a&&a.parentNode&&a.parentNode.removeChild(a)}return e});
if("undefined"==typeof jQuery)throw new Error("Jasny Bootstrap's JavaScript requires jQuery");+function(a){"use strict";function b(){var a=document.createElement("bootstrap"),b={WebkitTransition:"webkitTransitionEnd",MozTransition:"transitionend",OTransition:"oTransitionEnd otransitionend",transition:"transitionend"};for(var c in b)if(void 0!==a.style[c])return{end:b[c]};return!1}void 0===a.support.transition&&(a.fn.emulateTransitionEnd=function(b){var c=!1,d=this;a(this).one(a.support.transition.end,function(){c=!0});var e=function(){c||a(d).trigger(a.support.transition.end)};return setTimeout(e,b),this},a(function(){a.support.transition=b()}))}(window.jQuery),+function(a){"use strict";var b=function(c,d){this.$element=a(c),this.options=a.extend({},b.DEFAULTS,d),this.state=null,this.placement=null,this.options.recalc&&(this.calcClone(),a(window).on("resize",a.proxy(this.recalc,this))),this.options.autohide&&a(document).on("click",a.proxy(this.autohide,this)),this.options.toggle&&this.toggle(),this.options.disablescrolling&&(this.options.disableScrolling=this.options.disablescrolling,delete this.options.disablescrolling)};b.DEFAULTS={toggle:!0,placement:"auto",autohide:!0,recalc:!0,disableScrolling:!0},b.prototype.offset=function(){switch(this.placement){case"left":case"right":return this.$element.outerWidth();case"top":case"bottom":return this.$element.outerHeight()}},b.prototype.calcPlacement=function(){function b(a,b){if("auto"===e.css(b))return a;if("auto"===e.css(a))return b;var c=parseInt(e.css(a),10),d=parseInt(e.css(b),10);return c>d?b:a}if("auto"!==this.options.placement)return void(this.placement=this.options.placement);this.$element.hasClass("in")||this.$element.css("visiblity","hidden !important").addClass("in");var c=a(window).width()/this.$element.width(),d=a(window).height()/this.$element.height(),e=this.$element;this.placement=c>=d?b("left","right"):b("top","bottom"),"hidden !important"===this.$element.css("visibility")&&this.$element.removeClass("in").css("visiblity","")},b.prototype.opposite=function(a){switch(a){case"top":return"bottom";case"left":return"right";case"bottom":return"top";case"right":return"left"}},b.prototype.getCanvasElements=function(){var b=this.options.canvas?a(this.options.canvas):this.$element,c=b.find("*").filter(function(){return"fixed"===a(this).css("position")}).not(this.options.exclude);return b.add(c)},b.prototype.slide=function(b,c,d){if(!a.support.transition){var e={};return e[this.placement]="+="+c,b.animate(e,0,d)}var f=this.placement,g=this.opposite(f);b.each(function(){"auto"!==a(this).css(f)&&a(this).css(f,(parseInt(a(this).css(f),10)||0)+c),"auto"!==a(this).css(g)&&a(this).css(g,(parseInt(a(this).css(g),10)||0)-c)}),this.$element.one(a.support.transition.end,d).emulateTransitionEnd(0)},b.prototype.disableScrolling=function(){var b=a("body").width(),c="padding-"+this.opposite(this.placement);if(void 0===a("body").data("offcanvas-style")&&a("body").data("offcanvas-style",a("body").attr("style")||""),a("body").css("overflow","hidden"),a("body").width()>b){var d=parseInt(a("body").css(c),10)+a("body").width()-b;setTimeout(function(){a("body").css(c,d)},1)}},b.prototype.show=function(){if(!this.state){var b=a.Event("show.bs.offcanvas");if(this.$element.trigger(b),!b.isDefaultPrevented()){this.state="slide-in",this.calcPlacement();var c=this.getCanvasElements(),d=this.placement,e=this.opposite(d),f=this.offset();-1!==c.index(this.$element)&&(a(this.$element).data("offcanvas-style",a(this.$element).attr("style")||""),this.$element.css(d,-1*f),this.$element.css(d)),c.addClass("canvas-sliding").each(function(){void 0===a(this).data("offcanvas-style")&&a(this).data("offcanvas-style",a(this).attr("style")||""),"static"===a(this).css("position")&&a(this).css("position","fixed"),"auto"!==a(this).css(d)&&"0px"!==a(this).css(d)||"auto"!==a(this).css(e)&&"0px"!==a(this).css(e)||a(this).css(d,0)}),this.options.disableScrolling&&this.disableScrolling();var g=function(){"slide-in"==this.state&&(this.state="slid",c.removeClass("canvas-sliding").addClass("canvas-slid"),$('#pagefader2').fadeIn(70),this.$element.trigger("shown.bs.offcanvas"))};setTimeout(a.proxy(function(){this.$element.addClass("in"),this.slide(c,f,a.proxy(g,this))},this),1)}}},b.prototype.hide=function(){if("slid"===this.state){var b=a.Event("hide.bs.offcanvas");if(this.$element.trigger(b),!b.isDefaultPrevented()){this.state="slide-out";var c=a(".canvas-slid"),d=(this.placement,-1*this.offset()),e=function(){"slide-out"==this.state&&(this.state=null,this.placement=null,this.$element.removeClass("in"),c.removeClass("canvas-sliding"),c.add(this.$element).add("body").each(function(){a(this).attr("style",a(this).data("offcanvas-style")).removeData("offcanvas-style")}),this.$element.trigger("hidden.bs.offcanvas"))};c.removeClass("canvas-slid").addClass("canvas-sliding"),$('#pagefader2').fadeOut(70),setTimeout(a.proxy(function(){this.slide(c,d,a.proxy(e,this))},this),1)}}},b.prototype.toggle=function(){"slide-in"!==this.state&&"slide-out"!==this.state&&this["slid"===this.state?"hide":"show"]()},b.prototype.calcClone=function(){this.$calcClone=this.$element.clone().html("").addClass("offcanvas-clone").removeClass("in").appendTo(a("body"))},b.prototype.recalc=function(){if("none"!==this.$calcClone.css("display")&&("slid"===this.state||"slide-in"===this.state)){this.state=null,this.placement=null;var b=this.getCanvasElements();this.$element.removeClass("in"),b.removeClass("canvas-slid"),$('#pagefader2').fadeOut(70),b.add(this.$element).add("body").each(function(){a(this).attr("style",a(this).data("offcanvas-style")).removeData("offcanvas-style")})}},b.prototype.autohide=function(b){0===a(b.target).closest(this.$element).length&&this.hide()};var c=a.fn.offcanvas;a.fn.offcanvas=function(c){return this.each(function(){var d=a(this),e=d.data("bs.offcanvas"),f=a.extend({},b.DEFAULTS,d.data(),"object"==typeof c&&c);e||d.data("bs.offcanvas",e=new b(this,f)),"string"==typeof c&&e[c]()})},a.fn.offcanvas.Constructor=b,a.fn.offcanvas.noConflict=function(){return a.fn.offcanvas=c,this},a(document).on("click.bs.offcanvas.data-api","[data-toggle=offcanvas]",function(b){var c,d=a(this),e=d.attr("data-target")||b.preventDefault()||(c=d.attr("href"))&&c.replace(/.*(?=#[^\s]+$)/,""),f=a(e),g=f.data("bs.offcanvas"),h=g?"toggle":d.data();b.stopPropagation(),g?g.toggle():f.offcanvas(h)})}(window.jQuery),+function(a){"use strict";var b=function(c,d){this.$element=a(c),this.options=a.extend({},b.DEFAULTS,d),this.$element.on("click.bs.rowlink","td:not(.rowlink-skip)",a.proxy(this.click,this))};b.DEFAULTS={target:"a"},b.prototype.click=function(b){var c=a(b.currentTarget).closest("tr").find(this.options.target)[0];if(a(b.target)[0]!==c)if(b.preventDefault(),c.click)c.click();else if(document.createEvent){var d=document.createEvent("MouseEvents");d.initMouseEvent("click",!0,!0,window,0,0,0,0,0,!1,!1,!1,!1,0,null),c.dispatchEvent(d)}};var c=a.fn.rowlink;a.fn.rowlink=function(c){return this.each(function(){var d=a(this),e=d.data("bs.rowlink");e||d.data("bs.rowlink",e=new b(this,c))})},a.fn.rowlink.Constructor=b,a.fn.rowlink.noConflict=function(){return a.fn.rowlink=c,this},a(document).on("click.bs.rowlink.data-api",'[data-link="row"]',function(b){if(0===a(b.target).closest(".rowlink-skip").length){var c=a(this);c.data("bs.rowlink")||(c.rowlink(c.data()),a(b.target).trigger("click.bs.rowlink"))}})}(window.jQuery),+function(a){"use strict";var b=void 0!==window.orientation,c=false,d="Microsoft Internet Explorer"==window.navigator.appName,e=function(b,d){c||(this.$element=a(b),this.options=a.extend({},e.DEFAULTS,d),this.mask=String(this.options.mask),this.init(),this.listen(),this.checkVal())};e.DEFAULTS={mask:"",placeholder:"_",definitions:{9:"[0-9]",a:"[A-Za-z]",w:"[A-Za-z0-9]","*":"."}},e.prototype.init=function(){var b=this.options.definitions,c=this.mask.length;this.tests=[],this.partialPosition=this.mask.length,this.firstNonMaskPos=null,a.each(this.mask.split(""),a.proxy(function(a,d){"?"==d?(c--,this.partialPosition=a):b[d]?(this.tests.push(new RegExp(b[d])),null===this.firstNonMaskPos&&(this.firstNonMaskPos=this.tests.length-1)):this.tests.push(null)},this)),this.buffer=a.map(this.mask.split(""),a.proxy(function(a){return"?"!=a?b[a]?this.options.placeholder:a:void 0},this)),this.focusText=this.$element.val(),this.$element.data("rawMaskFn",a.proxy(function(){return a.map(this.buffer,function(a,b){return this.tests[b]&&a!=this.options.placeholder?a:null}).join("")},this))},e.prototype.listen=function(){if(!this.$element.attr("readonly")){var b=(d?"paste":"input")+".mask";this.$element.on("unmask.bs.inputmask",a.proxy(this.unmask,this)).on("focus.bs.inputmask",a.proxy(this.focusEvent,this)).on("blur.bs.inputmask",a.proxy(this.blurEvent,this)).on("keydown.bs.inputmask",a.proxy(this.keydownEvent,this)).on("keypress.bs.inputmask",a.proxy(this.keypressEvent,this)).on(b,a.proxy(this.pasteEvent,this))}},e.prototype.caret=function(a,b){if(0!==this.$element.length){if("number"==typeof a)return b="number"==typeof b?b:a,this.$element.each(function(){if(this.setSelectionRange)this.setSelectionRange(a,b);else if(this.createTextRange){var c=this.createTextRange();c.collapse(!0),c.moveEnd("character",b),c.moveStart("character",a),c.select()}});if(this.$element[0].setSelectionRange)a=this.$element[0].selectionStart,b=this.$element[0].selectionEnd;else if(document.selection&&document.selection.createRange){var c=document.selection.createRange();a=0-c.duplicate().moveStart("character",-1e5),b=a+c.text.length}return{begin:a,end:b}}},e.prototype.seekNext=function(a){for(var b=this.mask.length;++a<=b&&!this.tests[a];);return a},e.prototype.seekPrev=function(a){for(;--a>=0&&!this.tests[a];);return a},e.prototype.shiftL=function(a,b){var c=this.mask.length;if(!(0>a)){for(var d=a,e=this.seekNext(b);c>d;d++)if(this.tests[d]){if(!(c>e&&this.tests[d].test(this.buffer[e])))break;this.buffer[d]=this.buffer[e],this.buffer[e]=this.options.placeholder,e=this.seekNext(e)}this.writeBuffer(),this.caret(Math.max(this.firstNonMaskPos,a))}},e.prototype.shiftR=function(a){for(var b=this.mask.length,c=a,d=this.options.placeholder;b>c;c++)if(this.tests[c]){var e=this.seekNext(c),f=this.buffer[c];if(this.buffer[c]=d,!(b>e&&this.tests[e].test(f)))break;d=f}},e.prototype.unmask=function(){this.$element.unbind(".mask").removeData("inputmask")},e.prototype.focusEvent=function(){this.focusText=this.$element.val();var a=this.mask.length,b=this.checkVal();this.writeBuffer();var c=this,d=function(){b==a?c.caret(0,b):c.caret(b)};d(),setTimeout(d,50)},e.prototype.blurEvent=function(){this.checkVal(),this.$element.val()!==this.focusText&&this.$element.trigger("change")},e.prototype.keydownEvent=function(a){var c=a.which;if(8==c||46==c||b&&127==c){var d=this.caret(),e=d.begin,f=d.end;return f-e===0&&(e=46!=c?this.seekPrev(e):f=this.seekNext(e-1),f=46==c?this.seekNext(f):f),this.clearBuffer(e,f),this.shiftL(e,f-1),!1}return 27==c?(this.$element.val(this.focusText),this.caret(0,this.checkVal()),!1):void 0},e.prototype.keypressEvent=function(a){var b=this.mask.length,c=a.which,d=this.caret();if(a.ctrlKey||a.altKey||a.metaKey||32>c)return!0;if(c){d.end-d.begin!==0&&(this.clearBuffer(d.begin,d.end),this.shiftL(d.begin,d.end-1));var e=this.seekNext(d.begin-1);if(b>e){var f=String.fromCharCode(c);if(this.tests[e].test(f)){this.shiftR(e),this.buffer[e]=f,this.writeBuffer();var g=this.seekNext(e);this.caret(g)}}return!1}},e.prototype.pasteEvent=function(){var a=this;setTimeout(function(){a.caret(a.checkVal(!0))},0)},e.prototype.clearBuffer=function(a,b){for(var c=this.mask.length,d=a;b>d&&c>d;d++)this.tests[d]&&(this.buffer[d]=this.options.placeholder)},e.prototype.writeBuffer=function(){return this.$element.val(this.buffer.join("")).val()},e.prototype.checkVal=function(a){for(var b=this.mask.length,c=this.$element.val(),d=-1,e=0,f=0;b>e;e++)if(this.tests[e]){for(this.buffer[e]=this.options.placeholder;f++<c.length;){var g=c.charAt(f-1);if(this.tests[e].test(g)){this.buffer[e]=g,d=e;break}}if(f>c.length)break}else this.buffer[e]==c.charAt(f)&&e!=this.partialPosition&&(f++,d=e);return!a&&d+1<this.partialPosition?(this.$element.val(""),this.clearBuffer(0,b)):(a||d+1>=this.partialPosition)&&(this.writeBuffer(),a||this.$element.val(this.$element.val().substring(0,d+1))),this.partialPosition?e:this.firstNonMaskPos};var f=a.fn.inputmask;a.fn.inputmask=function(b){return this.each(function(){var c=a(this),d=c.data("bs.inputmask");d||c.data("bs.inputmask",d=new e(this,b))})},a.fn.inputmask.Constructor=e,a.fn.inputmask.noConflict=function(){return a.fn.inputmask=f,this},a(document).on("focus.bs.inputmask.data-api","[data-mask]",function(){var b=a(this);b.data("bs.inputmask")||b.inputmask(b.data())})}(window.jQuery),+function(a){"use strict";var b="Microsoft Internet Explorer"==window.navigator.appName,c=function(b,c){if(this.$element=a(b),this.$input=this.$element.find(":file"),0!==this.$input.length){this.name=this.$input.attr("name")||c.name,this.$hidden=this.$element.find('input[type=hidden][name="'+this.name+'"]'),0===this.$hidden.length&&(this.$hidden=a('<input type="hidden">').insertBefore(this.$input)),this.$preview=this.$element.find(".fileinput-preview");var d=this.$preview.css("height");"inline"!==this.$preview.css("display")&&"0px"!==d&&"none"!==d&&this.$preview.css("line-height",d),this.original={exists:this.$element.hasClass("fileinput-exists"),preview:this.$preview.html(),hiddenVal:this.$hidden.val()},this.listen()}};c.prototype.listen=function(){this.$input.on("change.bs.fileinput",a.proxy(this.change,this)),a(this.$input[0].form).on("reset.bs.fileinput",a.proxy(this.reset,this)),this.$element.find('[data-trigger="fileinput"]').on("click.bs.fileinput",a.proxy(this.trigger,this)),this.$element.find('[data-dismiss="fileinput"]').on("click.bs.fileinput",a.proxy(this.clear,this))},c.prototype.change=function(b){var c=void 0===b.target.files?b.target&&b.target.value?[{name:b.target.value.replace(/^.+\\/,"")}]:[]:b.target.files;if(b.stopPropagation(),0===c.length)return void this.clear();this.$hidden.val(""),this.$hidden.attr("name",""),this.$input.attr("name",this.name);var d=c[0];if(this.$preview.length>0&&("undefined"!=typeof d.type?d.type.match(/^image\/(gif|png|jpeg)$/):d.name.match(/\.(gif|png|jpe?g)$/i))&&"undefined"!=typeof FileReader){var e=new FileReader,f=this.$preview,g=this.$element;e.onload=function(b){var e=a("<img>");e[0].src=b.target.result,c[0].result=b.target.result,g.find(".fileinput-filename").text(d.name),"none"!=f.css("max-height")&&e.css("max-height",parseInt(f.css("max-height"),10)-parseInt(f.css("padding-top"),10)-parseInt(f.css("padding-bottom"),10)-parseInt(f.css("border-top"),10)-parseInt(f.css("border-bottom"),10)),f.html(e),g.addClass("fileinput-exists").removeClass("fileinput-new"),g.trigger("change.bs.fileinput",c)},e.readAsDataURL(d)}else this.$element.find(".fileinput-filename").text(d.name),this.$preview.text(d.name),this.$element.addClass("fileinput-exists").removeClass("fileinput-new"),this.$element.trigger("change.bs.fileinput")},c.prototype.clear=function(a){if(a&&a.preventDefault(),this.$hidden.val(""),this.$hidden.attr("name",this.name),this.$input.attr("name",""),b){var c=this.$input.clone(!0);this.$input.after(c),this.$input.remove(),this.$input=c}else this.$input.val("");this.$preview.html(""),this.$element.find(".fileinput-filename").text(""),this.$element.addClass("fileinput-new").removeClass("fileinput-exists"),void 0!==a&&(this.$input.trigger("change"),this.$element.trigger("clear.bs.fileinput"))},c.prototype.reset=function(){this.clear(),this.$hidden.val(this.original.hiddenVal),this.$preview.html(this.original.preview),this.$element.find(".fileinput-filename").text(""),this.original.exists?this.$element.addClass("fileinput-exists").removeClass("fileinput-new"):this.$element.addClass("fileinput-new").removeClass("fileinput-exists"),this.$element.trigger("reset.bs.fileinput")},c.prototype.trigger=function(a){this.$input.trigger("click"),a.preventDefault()};var d=a.fn.fileinput;a.fn.fileinput=function(b){return this.each(function(){var d=a(this),e=d.data("bs.fileinput");e||d.data("bs.fileinput",e=new c(this,b)),"string"==typeof b&&e[b]()})},a.fn.fileinput.Constructor=c,a.fn.fileinput.noConflict=function(){return a.fn.fileinput=d,this},a(document).on("click.fileinput.data-api",'[data-provides="fileinput"]',function(b){var c=a(this);if(!c.data("bs.fileinput")){c.fileinput(c.data());var d=a(b.target).closest('[data-dismiss="fileinput"],[data-trigger="fileinput"]');d.length>0&&(b.preventDefault(),d.trigger("click.bs.fileinput"))}})}(window.jQuery);
!function(a){"function"==typeof define&&define.amd?define(["jquery"],a):a("object"==typeof exports?require("jquery"):window.jQuery||window.Zepto)}(function(a){var b,c,d,e,f,g,h="Close",i="BeforeClose",j="AfterClose",k="BeforeAppend",l="MarkupParse",m="Open",n="Change",o="mfp",p="."+o,q="mfp-ready",r="mfp-removing",s="mfp-prevent-close",t=function(){},u=!!window.jQuery,v=a(window),w=function(a,c){b.ev.on(o+a+p,c)},x=function(b,c,d,e){var f=document.createElement("div");return f.className="mfp-"+b,d&&(f.innerHTML=d),e?c&&c.appendChild(f):(f=a(f),c&&f.appendTo(c)),f},y=function(c,d){b.ev.triggerHandler(o+c,d),b.st.callbacks&&(c=c.charAt(0).toLowerCase()+c.slice(1),b.st.callbacks[c]&&b.st.callbacks[c].apply(b,a.isArray(d)?d:[d]))},z=function(c){return c===g&&b.currTemplate.closeBtn||(b.currTemplate.closeBtn=a(b.st.closeMarkup.replace("%title%",b.st.tClose)),g=c),b.currTemplate.closeBtn},A=function(){a.magnificPopup.instance||(b=new t,b.init(),a.magnificPopup.instance=b)},B=function(){var a=document.createElement("p").style,b=["ms","O","Moz","Webkit"];if(void 0!==a.transition)return!0;for(;b.length;)if(b.pop()+"Transition"in a)return!0;return!1};t.prototype={constructor:t,init:function(){var c=navigator.appVersion;b.isIE7=-1!==c.indexOf("MSIE 7."),b.isIE8=-1!==c.indexOf("MSIE 8."),b.isLowIE=b.isIE7||b.isIE8,b.isAndroid=/android/gi.test(c),b.isIOS=/iphone|ipad|ipod/gi.test(c),b.supportsTransition=B(),b.probablyMobile=b.isAndroid||b.isIOS||/(Opera Mini)|Kindle|webOS|BlackBerry|(Opera Mobi)|(Windows Phone)|IEMobile/i.test(navigator.userAgent),d=a(document),b.popupsCache={}},open:function(c){var e;if(c.isObj===!1){b.items=c.items.toArray(),b.index=0;var g,h=c.items;for(e=0;e<h.length;e++)if(g=h[e],g.parsed&&(g=g.el[0]),g===c.el[0]){b.index=e;break}}else b.items=a.isArray(c.items)?c.items:[c.items],b.index=c.index||0;if(b.isOpen)return void b.updateItemHTML();b.types=[],f="",b.ev=c.mainEl&&c.mainEl.length?c.mainEl.eq(0):d,c.key?(b.popupsCache[c.key]||(b.popupsCache[c.key]={}),b.currTemplate=b.popupsCache[c.key]):b.currTemplate={},b.st=a.extend(!0,{},a.magnificPopup.defaults,c),b.fixedContentPos="auto"===b.st.fixedContentPos?!b.probablyMobile:b.st.fixedContentPos,b.st.modal&&(b.st.closeOnContentClick=!1,b.st.closeOnBgClick=!1,b.st.showCloseBtn=!1,b.st.enableEscapeKey=!1),b.bgOverlay||(b.bgOverlay=x("bg").on("click"+p,function(){b.close()}),b.wrap=x("wrap").attr("tabindex",-1).on("click"+p,function(a){b._checkIfClose(a.target)&&b.close()}),b.container=x("container",b.wrap)),b.contentContainer=x("content"),b.st.preloader&&(b.preloader=x("preloader",b.container,b.st.tLoading));var i=a.magnificPopup.modules;for(e=0;e<i.length;e++){var j=i[e];j=j.charAt(0).toUpperCase()+j.slice(1),b["init"+j].call(b)}y("BeforeOpen"),b.st.showCloseBtn&&(b.st.closeBtnInside?(w(l,function(a,b,c,d){c.close_replaceWith=z(d.type)}),f+=" mfp-close-btn-in"):b.wrap.append(z())),b.st.alignTop&&(f+=" mfp-align-top"),b.wrap.css(b.fixedContentPos?{overflow:b.st.overflowY,overflowX:"hidden",overflowY:b.st.overflowY}:{top:v.scrollTop(),position:"absolute"}),(b.st.fixedBgPos===!1||"auto"===b.st.fixedBgPos&&!b.fixedContentPos)&&b.bgOverlay.css({height:d.height(),position:"absolute"}),b.st.enableEscapeKey&&d.on("keyup"+p,function(a){27===a.keyCode&&b.close()}),v.on("resize"+p,function(){b.updateSize()}),b.st.closeOnContentClick||(f+=" mfp-auto-cursor"),f&&b.wrap.addClass(f);var k=b.wH=v.height(),n={};if(b.fixedContentPos&&b._hasScrollBar(k)){var o=b._getScrollbarSize();o&&(n.marginRight=o)}b.fixedContentPos&&(b.isIE7?a("body, html").css("overflow","hidden"):n.overflow="hidden");var r=b.st.mainClass;return b.isIE7&&(r+=" mfp-ie7"),r&&b._addClassToMFP(r),b.updateItemHTML(),y("BuildControls"),a("html").css(n),b.bgOverlay.add(b.wrap).prependTo(b.st.prependTo||a(document.body)),b._lastFocusedEl=document.activeElement,setTimeout(function(){b.content?(b._addClassToMFP(q),b._setFocus()):b.bgOverlay.addClass(q),d.on("focusin"+p,b._onFocusIn)},16),b.isOpen=!0,b.updateSize(k),y(m),c},close:function(){b.isOpen&&(y(i),b.isOpen=!1,b.st.removalDelay&&!b.isLowIE&&b.supportsTransition?(b._addClassToMFP(r),setTimeout(function(){b._close()},b.st.removalDelay)):b._close())},_close:function(){y(h);var c=r+" "+q+" ";if(b.bgOverlay.detach(),b.wrap.detach(),b.container.empty(),b.st.mainClass&&(c+=b.st.mainClass+" "),b._removeClassFromMFP(c),b.fixedContentPos){var e={marginRight:""};b.isIE7?a("body, html").css("overflow",""):e.overflow="",a("html").css(e)}d.off("keyup"+p+" focusin"+p),b.ev.off(p),b.wrap.attr("class","mfp-wrap").removeAttr("style"),b.bgOverlay.attr("class","mfp-bg"),b.container.attr("class","mfp-container"),!b.st.showCloseBtn||b.st.closeBtnInside&&b.currTemplate[b.currItem.type]!==!0||b.currTemplate.closeBtn&&b.currTemplate.closeBtn.detach(),b._lastFocusedEl&&a(b._lastFocusedEl).focus(),b.currItem=null,b.content=null,b.currTemplate=null,b.prevHeight=0,y(j)},updateSize:function(a){if(b.isIOS){var c=document.documentElement.clientWidth/window.innerWidth,d=window.innerHeight*c;b.wrap.css("height",d),b.wH=d}else b.wH=a||v.height();b.fixedContentPos||b.wrap.css("height",b.wH),y("Resize")},updateItemHTML:function(){var c=b.items[b.index];b.contentContainer.detach(),b.content&&b.content.detach(),c.parsed||(c=b.parseEl(b.index));var d=c.type;if(y("BeforeChange",[b.currItem?b.currItem.type:"",d]),b.currItem=c,!b.currTemplate[d]){var f=b.st[d]?b.st[d].markup:!1;y("FirstMarkupParse",f),b.currTemplate[d]=f?a(f):!0}e&&e!==c.type&&b.container.removeClass("mfp-"+e+"-holder");var g=b["get"+d.charAt(0).toUpperCase()+d.slice(1)](c,b.currTemplate[d]);b.appendContent(g,d),c.preloaded=!0,y(n,c),e=c.type,b.container.prepend(b.contentContainer),y("AfterChange")},appendContent:function(a,c){b.content=a,a?b.st.showCloseBtn&&b.st.closeBtnInside&&b.currTemplate[c]===!0?b.content.find(".mfp-close").length||b.content.append(z()):b.content=a:b.content="",y(k),b.container.addClass("mfp-"+c+"-holder"),b.contentContainer.append(b.content)},parseEl:function(c){var d,e=b.items[c];if(e.tagName?e={el:a(e)}:(d=e.type,e={data:e,src:e.src}),e.el){for(var f=b.types,g=0;g<f.length;g++)if(e.el.hasClass("mfp-"+f[g])){d=f[g];break}e.src=e.el.attr("data-mfp-src"),e.src||(e.src=e.el.attr("href"))}return e.type=d||b.st.type||"inline",e.index=c,e.parsed=!0,b.items[c]=e,y("ElementParse",e),b.items[c]},addGroup:function(a,c){var d=function(d){d.mfpEl=this,b._openClick(d,a,c)};c||(c={});var e="click.magnificPopup";c.mainEl=a,c.items?(c.isObj=!0,a.off(e).on(e,d)):(c.isObj=!1,c.delegate?a.off(e).on(e,c.delegate,d):(c.items=a,a.off(e).on(e,d)))},_openClick:function(c,d,e){var f=void 0!==e.midClick?e.midClick:a.magnificPopup.defaults.midClick;if(f||2!==c.which&&!c.ctrlKey&&!c.metaKey){var g=void 0!==e.disableOn?e.disableOn:a.magnificPopup.defaults.disableOn;if(g)if(a.isFunction(g)){if(!g.call(b))return!0}else if(v.width()<g)return!0;c.type&&(c.preventDefault(),b.isOpen&&c.stopPropagation()),e.el=a(c.mfpEl),e.delegate&&(e.items=d.find(e.delegate)),b.open(e)}},updateStatus:function(a,d){if(b.preloader){c!==a&&b.container.removeClass("mfp-s-"+c),d||"loading"!==a||(d=b.st.tLoading);var e={status:a,text:d};y("UpdateStatus",e),a=e.status,d=e.text,b.preloader.html(d),b.preloader.find("a").on("click",function(a){a.stopImmediatePropagation()}),b.container.addClass("mfp-s-"+a),c=a}},_checkIfClose:function(c){if(!a(c).hasClass(s)){var d=b.st.closeOnContentClick,e=b.st.closeOnBgClick;if(d&&e)return!0;if(!b.content||a(c).hasClass("mfp-close")||b.preloader&&c===b.preloader[0])return!0;if(c===b.content[0]||a.contains(b.content[0],c)){if(d)return!0}else if(e&&a.contains(document,c))return!0;return!1}},_addClassToMFP:function(a){b.bgOverlay.addClass(a),b.wrap.addClass(a)},_removeClassFromMFP:function(a){this.bgOverlay.removeClass(a),b.wrap.removeClass(a)},_hasScrollBar:function(a){return(b.isIE7?d.height():document.body.scrollHeight)>(a||v.height())},_setFocus:function(){(b.st.focus?b.content.find(b.st.focus).eq(0):b.wrap).focus()},_onFocusIn:function(c){return c.target===b.wrap[0]||a.contains(b.wrap[0],c.target)?void 0:(b._setFocus(),!1)},_parseMarkup:function(b,c,d){var e;d.data&&(c=a.extend(d.data,c)),y(l,[b,c,d]),a.each(c,function(a,c){if(void 0===c||c===!1)return!0;if(e=a.split("_"),e.length>1){var d=b.find(p+"-"+e[0]);if(d.length>0){var f=e[1];"replaceWith"===f?d[0]!==c[0]&&d.replaceWith(c):"img"===f?d.is("img")?d.attr("src",c):d.replaceWith('<img src="'+c+'" class="'+d.attr("class")+'" />'):d.attr(e[1],c)}}else b.find(p+"-"+a).html(c)})},_getScrollbarSize:function(){if(void 0===b.scrollbarSize){var a=document.createElement("div");a.style.cssText="width:99px; height:99px; overflow:scroll; position:absolute; top:-9999px;",document.body.appendChild(a),b.scrollbarSize=a.offsetWidth-a.clientWidth,document.body.removeChild(a)}return b.scrollbarSize}},a.magnificPopup={instance:null,proto:t.prototype,modules:[],open:function(b,c){return A(),b=b?a.extend(!0,{},b):{},b.isObj=!0,b.index=c||0,this.instance.open(b)},close:function(){return a.magnificPopup.instance&&a.magnificPopup.instance.close()},registerModule:function(b,c){c.options&&(a.magnificPopup.defaults[b]=c.options),a.extend(this.proto,c.proto),this.modules.push(b)},defaults:{disableOn:0,key:null,midClick:!1,mainClass:"",preloader:!0,focus:"",closeOnContentClick:!1,closeOnBgClick:!0,closeBtnInside:!0,showCloseBtn:!0,enableEscapeKey:!0,modal:!1,alignTop:!1,removalDelay:0,prependTo:null,fixedContentPos:"auto",fixedBgPos:"auto",overflowY:"auto",closeMarkup:'<button title="%title%" type="button" class="mfp-close">&times;</button>',tClose:"Close (Esc)",tLoading:"Открытие..."}},a.fn.magnificPopup=function(c){A();var d=a(this);if("string"==typeof c)if("open"===c){var e,f=u?d.data("magnificPopup"):d[0].magnificPopup,g=parseInt(arguments[1],10)||0;f.items?e=f.items[g]:(e=d,f.delegate&&(e=e.find(f.delegate)),e=e.eq(g)),b._openClick({mfpEl:e},d,f)}else b.isOpen&&b[c].apply(b,Array.prototype.slice.call(arguments,1));else c=a.extend(!0,{},c),u?d.data("magnificPopup",c):d[0].magnificPopup=c,b.addGroup(d,c);return d};var C,D,E,F="inline",G=function(){E&&(D.after(E.addClass(C)).detach(),E=null)};a.magnificPopup.registerModule(F,{options:{hiddenClass:"hide",markup:"",tNotFound:"Content not found"},proto:{initInline:function(){b.types.push(F),w(h+"."+F,function(){G()})},getInline:function(c,d){if(G(),c.src){var e=b.st.inline,f=a(c.src);if(f.length){var g=f[0].parentNode;g&&g.tagName&&(D||(C=e.hiddenClass,D=x(C),C="mfp-"+C),E=f.after(D).detach().removeClass(C)),b.updateStatus("ready")}else b.updateStatus("error",e.tNotFound),f=a("<div>");return c.inlineElement=f,f}return b.updateStatus("ready"),b._parseMarkup(d,{},c),d}}});var H,I="ajax",J=function(){H&&a(document.body).removeClass(H)},K=function(){J(),b.req&&b.req.abort()};a.magnificPopup.registerModule(I,{options:{settings:null,cursor:"mfp-ajax-cur",tError:'<a href="%url%">The content</a> could not be loaded.'},proto:{initAjax:function(){b.types.push(I),H=b.st.ajax.cursor,w(h+"."+I,K),w("BeforeChange."+I,K)},getAjax:function(c){H&&a(document.body).addClass(H),b.updateStatus("loading");var d=a.extend({url:c.src,success:function(d,e,f){var g={data:d,xhr:f};y("ParseAjax",g),b.appendContent(a(g.data),I),c.finished=!0,J(),b._setFocus(),setTimeout(function(){b.wrap.addClass(q)},16),b.updateStatus("ready"),y("AjaxContentAdded")},error:function(){J(),c.finished=c.loadError=!0,b.updateStatus("error",b.st.ajax.tError.replace("%url%",c.src))}},b.st.ajax.settings);return b.req=a.ajax(d),""}}});var L,M=function(c){if(c.data&&void 0!==c.data.title)return c.data.title;var d=b.st.image.titleSrc;if(d){if(a.isFunction(d))return d.call(b,c);if(c.el)return c.el.attr(d)||""}return""};a.magnificPopup.registerModule("image",{options:{markup:'<div class="mfp-figure"><div class="mfp-close"></div><figure><div class="mfp-img"></div><figcaption><div class="mfp-bottom-bar"><div class="mfp-title"></div><div class="mfp-counter"></div></div></figcaption></figure></div>',cursor:"mfp-zoom-out-cur",titleSrc:"title",verticalFit:!0,tError:'<a href="%url%">The image</a> could not be loaded.'},proto:{initImage:function(){var c=b.st.image,d=".image";b.types.push("image"),w(m+d,function(){"image"===b.currItem.type&&c.cursor&&a(document.body).addClass(c.cursor)}),w(h+d,function(){c.cursor&&a(document.body).removeClass(c.cursor),v.off("resize"+p)}),w("Resize"+d,b.resizeImage),b.isLowIE&&w("AfterChange",b.resizeImage)},resizeImage:function(){var a=b.currItem;if(a&&a.img&&b.st.image.verticalFit){var c=0;b.isLowIE&&(c=parseInt(a.img.css("padding-top"),10)+parseInt(a.img.css("padding-bottom"),10)),a.img.css("max-height",b.wH-c)}},_onImageHasSize:function(a){a.img&&(a.hasSize=!0,L&&clearInterval(L),a.isCheckingImgSize=!1,y("ImageHasSize",a),a.imgHidden&&(b.content&&b.content.removeClass("mfp-loading"),a.imgHidden=!1))},findImageSize:function(a){var c=0,d=a.img[0],e=function(f){L&&clearInterval(L),L=setInterval(function(){return d.naturalWidth>0?void b._onImageHasSize(a):(c>200&&clearInterval(L),c++,void(3===c?e(10):40===c?e(50):100===c&&e(500)))},f)};e(1)},getImage:function(c,d){var e=0,f=function(){c&&(c.img[0].complete?(c.img.off(".mfploader"),c===b.currItem&&(b._onImageHasSize(c),b.updateStatus("ready")),c.hasSize=!0,c.loaded=!0,y("ImageLoadComplete")):(e++,200>e?setTimeout(f,100):g()))},g=function(){c&&(c.img.off(".mfploader"),c===b.currItem&&(b._onImageHasSize(c),b.updateStatus("error",h.tError.replace("%url%",c.src))),c.hasSize=!0,c.loaded=!0,c.loadError=!0)},h=b.st.image,i=d.find(".mfp-img");if(i.length){var j=document.createElement("img");j.className="mfp-img",c.el&&c.el.find("img").length&&(j.alt=c.el.find("img").attr("alt")),c.img=a(j).on("load.mfploader",f).on("error.mfploader",g),j.src=c.src,i.is("img")&&(c.img=c.img.clone()),j=c.img[0],j.naturalWidth>0?c.hasSize=!0:j.width||(c.hasSize=!1)}return b._parseMarkup(d,{title:M(c),img_replaceWith:c.img},c),b.resizeImage(),c.hasSize?(L&&clearInterval(L),c.loadError?(d.addClass("mfp-loading"),b.updateStatus("error",h.tError.replace("%url%",c.src))):(d.removeClass("mfp-loading"),b.updateStatus("ready")),d):(b.updateStatus("loading"),c.loading=!0,c.hasSize||(c.imgHidden=!0,d.addClass("mfp-loading"),b.findImageSize(c)),d)}}});var N,O=function(){return void 0===N&&(N=void 0!==document.createElement("p").style.MozTransform),N};a.magnificPopup.registerModule("zoom",{options:{enabled:!1,easing:"ease-in-out",duration:300,opener:function(a){return a.is("img")?a:a.find("img")}},proto:{initZoom:function(){var a,c=b.st.zoom,d=".zoom";if(c.enabled&&b.supportsTransition){var e,f,g=c.duration,j=function(a){var b=a.clone().removeAttr("style").removeAttr("class").addClass("mfp-animated-image"),d="all "+c.duration/1e3+"s "+c.easing,e={position:"fixed",zIndex:9999,left:0,top:0,"-webkit-backface-visibility":"hidden"},f="transition";return e["-webkit-"+f]=e["-moz-"+f]=e["-o-"+f]=e[f]=d,b.css(e),b},k=function(){b.content.css("visibility","visible")};w("BuildControls"+d,function(){if(b._allowZoom()){if(clearTimeout(e),b.content.css("visibility","hidden"),a=b._getItemToZoom(),!a)return void k();f=j(a),f.css(b._getOffset()),b.wrap.append(f),e=setTimeout(function(){f.css(b._getOffset(!0)),e=setTimeout(function(){k(),setTimeout(function(){f.remove(),a=f=null,y("ZoomAnimationEnded")},16)},g)},16)}}),w(i+d,function(){if(b._allowZoom()){if(clearTimeout(e),b.st.removalDelay=g,!a){if(a=b._getItemToZoom(),!a)return;f=j(a)}f.css(b._getOffset(!0)),b.wrap.append(f),b.content.css("visibility","hidden"),setTimeout(function(){f.css(b._getOffset())},16)}}),w(h+d,function(){b._allowZoom()&&(k(),f&&f.remove(),a=null)})}},_allowZoom:function(){return"image"===b.currItem.type},_getItemToZoom:function(){return b.currItem.hasSize?b.currItem.img:!1},_getOffset:function(c){var d;d=c?b.currItem.img:b.st.zoom.opener(b.currItem.el||b.currItem);var e=d.offset(),f=parseInt(d.css("padding-top"),10),g=parseInt(d.css("padding-bottom"),10);e.top-=a(window).scrollTop()-f;var h={width:d.width(),height:(u?d.innerHeight():d[0].offsetHeight)-g-f};return O()?h["-moz-transform"]=h.transform="translate("+e.left+"px,"+e.top+"px)":(h.left=e.left,h.top=e.top),h}}});var P="iframe",Q="//about:blank",R=function(a){if(b.currTemplate[P]){var c=b.currTemplate[P].find("iframe");c.length&&(a||(c[0].src=Q),b.isIE8&&c.css("display",a?"block":"none"))}};a.magnificPopup.registerModule(P,{options:{markup:'<div class="mfp-iframe-scaler"><div class="mfp-close"></div><iframe class="mfp-iframe" src="//about:blank" frameborder="0" allowfullscreen></iframe></div>',srcAction:"iframe_src",patterns:{youtube:{index:"youtube.com",id:"v=",src:"//www.youtube.com/embed/%id%?autoplay=1"},vimeo:{index:"vimeo.com/",id:"/",src:"//player.vimeo.com/video/%id%?autoplay=1"},gmaps:{index:"//maps.google.",src:"%id%&output=embed"}}},proto:{initIframe:function(){b.types.push(P),w("BeforeChange",function(a,b,c){b!==c&&(b===P?R():c===P&&R(!0))}),w(h+"."+P,function(){R()})},getIframe:function(c,d){var e=c.src,f=b.st.iframe;a.each(f.patterns,function(){return e.indexOf(this.index)>-1?(this.id&&(e="string"==typeof this.id?e.substr(e.lastIndexOf(this.id)+this.id.length,e.length):this.id.call(this,e)),e=this.src.replace("%id%",e),!1):void 0});var g={};return f.srcAction&&(g[f.srcAction]=e),b._parseMarkup(d,g,c),b.updateStatus("ready"),d}}});var S=function(a){var c=b.items.length;return a>c-1?a-c:0>a?c+a:a},T=function(a,b,c){return a.replace(/%curr%/gi,b+1).replace(/%total%/gi,c)};a.magnificPopup.registerModule("gallery",{options:{enabled:!1,arrowMarkup:'<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',preload:[0,2],navigateByImgClick:!0,arrows:!0,tPrev:"Previous (Left arrow key)",tNext:"Next (Right arrow key)",tCounter:"%curr% of %total%"},proto:{initGallery:function(){var c=b.st.gallery,e=".mfp-gallery",g=Boolean(a.fn.mfpFastClick);return b.direction=!0,c&&c.enabled?(f+=" mfp-gallery",w(m+e,function(){c.navigateByImgClick&&b.wrap.on("click"+e,".mfp-img",function(){return b.items.length>1?(b.next(),!1):void 0}),d.on("keydown"+e,function(a){37===a.keyCode?b.prev():39===a.keyCode&&b.next()})}),w("UpdateStatus"+e,function(a,c){c.text&&(c.text=T(c.text,b.currItem.index,b.items.length))}),w(l+e,function(a,d,e,f){var g=b.items.length;e.counter=g>1?T(c.tCounter,f.index,g):""}),w("BuildControls"+e,function(){if(b.items.length>1&&c.arrows&&!b.arrowLeft){var d=c.arrowMarkup,e=b.arrowLeft=a(d.replace(/%title%/gi,c.tPrev).replace(/%dir%/gi,"left")).addClass(s),f=b.arrowRight=a(d.replace(/%title%/gi,c.tNext).replace(/%dir%/gi,"right")).addClass(s),h=g?"mfpFastClick":"click";e[h](function(){b.prev()}),f[h](function(){b.next()}),b.isIE7&&(x("b",e[0],!1,!0),x("a",e[0],!1,!0),x("b",f[0],!1,!0),x("a",f[0],!1,!0)),b.container.append(e.add(f))}}),w(n+e,function(){b._preloadTimeout&&clearTimeout(b._preloadTimeout),b._preloadTimeout=setTimeout(function(){b.preloadNearbyImages(),b._preloadTimeout=null},16)}),void w(h+e,function(){d.off(e),b.wrap.off("click"+e),b.arrowLeft&&g&&b.arrowLeft.add(b.arrowRight).destroyMfpFastClick(),b.arrowRight=b.arrowLeft=null})):!1},next:function(){b.direction=!0,b.index=S(b.index+1),b.updateItemHTML()},prev:function(){b.direction=!1,b.index=S(b.index-1),b.updateItemHTML()},goTo:function(a){b.direction=a>=b.index,b.index=a,b.updateItemHTML()},preloadNearbyImages:function(){var a,c=b.st.gallery.preload,d=Math.min(c[0],b.items.length),e=Math.min(c[1],b.items.length);for(a=1;a<=(b.direction?e:d);a++)b._preloadItem(b.index+a);for(a=1;a<=(b.direction?d:e);a++)b._preloadItem(b.index-a)},_preloadItem:function(c){if(c=S(c),!b.items[c].preloaded){var d=b.items[c];d.parsed||(d=b.parseEl(c)),y("LazyLoad",d),"image"===d.type&&(d.img=a('<img class="mfp-img" />').on("load.mfploader",function(){d.hasSize=!0}).on("error.mfploader",function(){d.hasSize=!0,d.loadError=!0,y("LazyLoadError",d)}).attr("src",d.src)),d.preloaded=!0}}}});var U="retina";a.magnificPopup.registerModule(U,{options:{replaceSrc:function(a){return a.src.replace(/\.\w+$/,function(a){return"@2x"+a})},ratio:1},proto:{initRetina:function(){if(window.devicePixelRatio>1){var a=b.st.retina,c=a.ratio;c=isNaN(c)?c():c,c>1&&(w("ImageHasSize."+U,function(a,b){b.img.css({"max-width":b.img[0].naturalWidth/c,width:"100%"})}),w("ElementParse."+U,function(b,d){d.src=a.replaceSrc(d,c)}))}}}}),function(){var b=1e3,c="ontouchstart"in window,d=function(){v.off("touchmove"+f+" touchend"+f)},e="mfpFastClick",f="."+e;a.fn.mfpFastClick=function(e){return a(this).each(function(){var g,h=a(this);if(c){var i,j,k,l,m,n;h.on("touchstart"+f,function(a){l=!1,n=1,m=a.originalEvent?a.originalEvent.touches[0]:a.touches[0],j=m.clientX,k=m.clientY,v.on("touchmove"+f,function(a){m=a.originalEvent?a.originalEvent.touches:a.touches,n=m.length,m=m[0],(Math.abs(m.clientX-j)>10||Math.abs(m.clientY-k)>10)&&(l=!0,d())}).on("touchend"+f,function(a){d(),l||n>1||(g=!0,a.preventDefault(),clearTimeout(i),i=setTimeout(function(){g=!1},b),e())})})}h.on("click"+f,function(){g||e()})})},a.fn.destroyMfpFastClick=function(){a(this).off("touchstart"+f+" click"+f),c&&v.off("touchmove"+f+" touchend"+f)}}(),A()});
one_sch = $('.mobsearch').html(),
$('.mobsearch').html('');
$('.mobsearch_two').html(one_sch);
$('.mobsearch_two .search-button').on('click', function(){
url = $('base').attr('href') + 'index.php?route=product/search';
var value = $('.mobsearch_two input[name=\"search\"]').val();
if (value){url += '&search=' + encodeURIComponent(value)}
var category_id = $('.mobsearch_two input[name=\"category_id\"]').prop('value');
if (category_id > 0){url += '&category_id=' + encodeURIComponent(category_id) + '&sub_category=true'}
location = url;
});
$('.mobsearch_two .search input[name=\"search\"]').on('keydown', function(e){
if (e.keyCode == 13){$('.mobsearch_two .search-button').trigger('click')}
});
$(document).ready(function(){
$('nav#mobil_mmenu').mmenu({
"extensions":["theme-dark", "pagedim-black"],
"counters":true,
"navbars":[
{
"position":"top",
"type":"tabs",
"content":[
"<a href='#panel-menu'><i class='fa fa-bars'></i></a>",
"<a href='#panel-language'><i class='fa fa-info'></i></a>"
]
},
{
"position":"bottom",
"content":[
"<a class='fa fa-facebook' href='' rel='nofollow'></a>",
"<a class='fa fa-twitter' href='' rel='nofollow'></a>",
"<a class='fa fa-youtube' href='' rel='nofollow'></a>",
]
}
],
"navbar":{
"title":''
}
});
$("nav#mobil_mmenu").removeClass('dnone');
});
if (!localStorage.getItem('display')){
localStorage.setItem('display', 'grid');
}
$("#top3 #menu .nav").removeClass('dblock_zadergkaoff').addClass('dblock_zadergka');
var global_menu2_button;
$("#top3 #menu .nav > li").hover(function(){
var this_li = $(this);
global_menu2_button = setTimeout(function(){
this_li.find('.mmmenu .dropdown-menu').addClass('dblockdr');
}, 250)
},function(){
$(this).find('.mmmenu .dropdown-menu').removeClass('dblockdr');
clearTimeout(global_menu2_button);
});
$(function (){
$("#menu .nav > li .mmmenu").mouseenter(function(){
$('#pagefader').fadeIn(70);
$('body').addClass('razmiv');
});
$("#menu .nav > li .mmmenu").mouseleave(function(){
$('#pagefader').fadeOut(70);
$('body').removeClass('razmiv');
});
});
function podgon_img(){
$('.owlproduct').each(function(indx, element){
var data = $(element).data('owlCarousel');
data && data.reinit({navigation:true})
});
if($(window).width() > 974){
$('.owl-item:eq(0)', '.image.owlproduct').mouseover(function(){
if ($(this).parent().find('.owl-item:eq(1)').length > 0){
$(this).hide(0);
$(this).parent().find('.owl-item:eq(1)').mouseleave(function(){
$(this).parent().find('.owl-item:eq(0)').show(0);
});
$('.product-thumb').mouseleave(function(){
$(this).parent().find('.owl-item:eq(0)').show(0);
});
}
});
}
}
$('#content .owlproduct').owlCarousel({
beforeInit:true,
items:1,
singleItem:true,
mouseDrag:false,
autoPlay:false,
navigation:true,
navigationText:['<i class="fa fa-chevron-left fa-3x"></i>', '<i class="fa fa-chevron-right fa-3x"></i>'],
pagination:false
});
function list_view(){
$('#content .products_category .product-grid > .clearfix').remove();
$('#content .products_category .product-grid, #content .products_category .product-price').attr('class', 'product-layout product-list col-xs-12');
$('#content .product-list .cart > a').attr('data-toggle', 'none');
$('#content .product-list .cart > a').attr('title', '');
$(document).ready(function(){
var w_list_img = $('.product-list .product-thumb .image').outerWidth();
$('.product-layout .product-thumb > .image').css('width', 'px');
podgon_img();
});
$('.product-list .product-thumb h4').css('height', 'initial');
$('.product-list .product-thumb .product_buttons').css('height', 'initial');
$('.product-list .product-thumb .caption').css('margin-left', 'px');
$('.product-list .product-thumb .description_options').addClass('view_list_options');
$('.product-list .product-thumb .description_options').css('height', 'initial');
$('.product-layout.product-list').css('height', 'initial');
$('#grid-view, #price-view').removeClass('active');
$('#list-view').addClass('active');
localStorage.setItem('display', 'list');
}
function grid_view(){
cols = $('#column-right, #column-left').length;
if (cols == 2){
$('#content .product-list, #content .product-price').attr('class', 'product-layout product-grid col-lg-6 col-md-6 col-sm-12 col-xs-12');
}else if (cols == 1){
$('#content .product-list, #content .product-price').attr('class', 'product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12');
}else{
$('#content .product-list, #content .product-price').attr('class', 'product-layout product-grid col-lg-3 col-md-3 col-sm-6 col-xs-12');
}
if ($(window).width() > 294 && $(window).width() < 975){
$('#content .product-layout.product-grid').attr('class', 'product-layout product-grid col-lg-4 col-md-4 col-sm-4 col-xs-6');
}
$('.product-grid .product-thumb .caption').css('margin-left', 'initial');
$('.product-grid .product-thumb .description_options').removeClass('view_list_options');
var product_grid_width = $('.product-layout .product-thumb').outerWidth();
var product_item_width = $('.rev_slider .item .product-thumb').outerWidth();
if (product_grid_width < 240){
$('.product-layout').addClass('new_line');
$('.rev_slider .item').addClass('new_line');
}else{
$('.product-layout').removeClass('new_line');
$('.rev_slider .item').removeClass('new_line');
}
if (product_item_width < 240){
$('.rev_slider .item').addClass('new_line');
}else{
$('.rev_slider .item').removeClass('new_line');
}
$('.product-layout .product-thumb > .image').css('width', '100%');
var product_grid_width = $('.product-layout .product-thumb').outerWidth();
if (localStorage.getItem('display') == 'price'){
if (product_grid_width < 240){window.setTimeout(function(){podgon_img()},150)}else{podgon_img()}
}else{
podgon_img();
}
max_height_div('.product-grid .product-thumb h4');
max_height_div('.product-grid .product-thumb .price');
max_height_div('.product-grid .product-thumb .product_buttons');
setTimeout(function(){
max_height_div('.product-grid .product-thumb .description_options');
}, 300);
$('#list-view, #price-view').removeClass('active');
$('#grid-view').addClass('active');
localStorage.setItem('display', 'grid');
}
function price_view(){
$('#content .products_category .product-grid > .clearfix').remove();
$('#content .products_category .product-list, #content .products_category .product-grid').attr('class', 'product-layout product-price col-xs-12');
$('#content .product-view .cart > a').attr('data-toggle', 'none');
$('#content .product-view .cart > a').attr('title', '');
$('.product-price .product-thumb h4').css('height', 'initial');
$('.product-price .product-thumb .caption').css('margin-left', 'initial');
$('.product-price .product-thumb .product_buttons').css('height', 'initial');
$('.product-price .product-thumb .description_options').removeClass('view_list_options');
$('.product-price .product-thumb .description_options').css('height', 'initial');
$('.product-layout.product-price').css('height', 'initial');
$('#list-view, #grid-view').removeClass('active');
$('#price-view').addClass('active');
localStorage.setItem('display', 'price');
}
$('#list-view').click(function(){
list_view();
});
$('#grid-view').click(function(){
grid_view();
});
$('#price-view').click(function(){
price_view();
});
$('html').removeClass('opacity_minus').addClass('opacity_plus');
NProgress.start();
$(window).load(function(){
NProgress.done();
$('html').removeClass('opacity_plus');
});
if($(window).width() > 768){
$('#top3').affix({
offset:{
top:$('#top').outerHeight()+$('#top2').outerHeight()+$('html.common-home #menu2.inhome').outerHeight()
}
});
}
var win_shopcart = $(window).height();
var win_shopcart2 = $('#top').outerHeight()+$('#top2').outerHeight()+$('#top3').outerHeight();
//$('#cart .dropdown-menu > li').css('max-height', win_shopcart-win_shopcart2).css('overflow-y', 'auto');
$('#top3 #menu2 .child-box').css('max-height', win_shopcart-win_shopcart2).css('overflow-y', 'auto');
$(function(){
if (localStorage.getItem('display') == 'list'){
list_view();
}else if (localStorage.getItem('display') == 'price'){
price_view();
}else if (localStorage.getItem('display') == 'grid'){
grid_view();
}else{
grid_view();
}
var pr_opts_pr = $('.product-info .options_no_buy .form-group');
pr_opts_pr.find('input[type=\"checkbox\"]:first, input[type=\"radio\"]:first').each(function(){
this.checked = true;
this.onchange();
});
pr_opts_pr.find('select:first').each(function(){
if ($(this).find('option:selected').length < 1){
this.options[1].selected=true;
this.onchange();
}
});
var pr_opts_cat = $('.description_options .product-info .form-group');
pr_opts_cat.find('input[type=\"checkbox\"]:first, .radio:first-child input[type=\"radio\"]').each(function(){
this.checked = true;
this.onchange();
});
pr_opts_cat.find('select:first').each(function(){
if ($(this).find('option:selected').length < 1){
this.options[1].selected=true;
this.onchange();
}
});
var pr_opts_cat_mf = $('#slider_m_f .product-info .form-group');
pr_opts_cat_mf.find('input[type=\"checkbox\"]:first, .radio:first-child input[type=\"radio\"]').each(function(){
this.checked = true;
this.onchange();
});
pr_opts_cat_mf.find('select:first').each(function(){
if ($(this).find('option:selected').length < 1){
this.options[1].selected=true;
this.onchange();
}
});
podgon_fona();
$(window).resize(podgon_fona);
});
function podgon_fona(){
toggle_ellipses();
var h_top5 = $('.inhome #menu2').outerHeight();
if (h_top5){
$('#top5').css('min-height', h_top5+20);
}
var h_top4 = $('#top4').outerHeight();
$('html.common-home #menu2.inhome').css('min-height', h_top4+50);
var m2inh = $('html.common-home #menu2.inhome').outerHeight();
$('html.common-home #menu2.inhome .podmenu2').css('height', m2inh);
var m2inhw = $('html.common-home #menu2_button').outerWidth();
$('html.common-home #menu2.inhome .podmenu2').css('min-width', m2inhw-0.5);
$('html.common-home #top3.affix #menu2.inhome').css('min-height', 'initial');
var m2inh = $('html.common-home #menu2.inhome').outerHeight();
$('html.common-home #top3.affix #menu2.inhome .podmenu2').css('height', m2inh);
$(document).on('scroll', function(){
var home_amazon_height = $('#top').outerHeight()+$('#top2').outerHeight()+$('html.common-home #top3 #menu2.inhome').outerHeight();
if ($(window).scrollTop() > home_amazon_height){
$('html.common-home #top3.affix #menu2.inhome').css('min-height', 'initial');
$('html.common-home #top3.affix #menu2.inhome .podmenu2').css('min-height', 'initial');
}else{
var h_top4 = $('#top4').outerHeight();
$('html.common-home #top3 #menu2.inhome').css('min-height', h_top4+50);
$('html.common-home #top3 #menu2.inhome .podmenu2').css('min-height', h_top4+50);
}
});
var h_top3 = $('#top3').outerHeight();
$('.main-content').css('padding-top', h_top3+25);
$('#top3').addClass('absolutpo');
if($(window).width() < 767){
grid_view();
}
if ($(window).width() > 294 && $(window).width() < 975){
$('#content .product-layout.product-grid').attr('class', 'product-layout product-grid col-lg-4 col-md-4 col-sm-4 col-xs-6');
}
var product_grid_width = $('.product-layout .product-thumb').outerWidth();
var product_item_width = $('.rev_slider .item .product-thumb').outerWidth();
if (product_grid_width < 240){
$('.product-layout').addClass('new_line');
$('.rev_slider .item').addClass('new_line');
}else{
$('.product-layout').removeClass('new_line');
$('.rev_slider .item').removeClass('new_line');
}
if (product_item_width < 240){
$('.rev_slider .item').addClass('new_line');
}else{
$('.rev_slider .item').removeClass('new_line');
}
max_height_div('.product-grid .product-thumb h4');
max_height_div('.product-grid .product-thumb .price');
max_height_div('.product-grid .product-thumb .product_buttons');
setTimeout(function(){
max_height_div('.product-grid .product-thumb .description_options');
}, 300);
max_height_div('#content .refine_categories.clearfix a > span');
}
function toggle_ellipses(){
var ellipses1 = $('.br_ellipses');
var howlong = $('.breadcrumb li:hidden').length;
if ($('.breadcrumb li:hidden').length > 1){
ellipses1.show().css('display', 'inline');
}else{
ellipses1.hide();
}
}
$(document).on('scroll', function(){
if ($(window).scrollTop() > 100){
$('.scroll-top-wrapper').addClass('show');
}else{
$('.scroll-top-wrapper').removeClass('show');
}
});
$('.scroll-top-wrapper').on('click', scrollToTop);
$('.popup-phone-wrapper').on('click', get_revpopup_phone);
function scrollToTop(){
verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset :0;
element = $('body');
offset = element.offset();
offsetTop = offset.top;
$('html, body').animate({scrollTop:offsetTop}, 200, 'linear');
};
function get_revpopup_notification(m_class, m_header, message){
if (document.body.scrollHeight > document.body.offsetHeight){
$('#top3.absolutpo').css('right', '8.5px');
if ($(window).width() < 768){
$('#top #cart_mobi').css('margin-right', '17px');
}
}
$('.tooltip').hide();
$.magnificPopup.open({
removalDelay:170,
callbacks:{
beforeOpen:function(){
this.st.mainClass = 'mfp-zoom-in';
},
open:function(){
$('body').addClass('razmiv2');
$('#pagefader2').fadeIn(70);
},
close:function(){
$('body').removeClass('razmiv2');
$('#pagefader2').fadeOut(70);
$('#top3.absolutpo').css('right', 'initial');
if ($(window).width() < 768){
$('#top #cart_mobi').css('margin-right', 'initial');
}
}
},
tLoading:'',
items:{
src:$('<div class="popup_notification"><div class="popup_notification_heading '+m_class+'">'+m_header+'</div><div class="popup_notification_message">'+message+'</div></div>'),
type:'inline'
}
});
}
function get_revpopup_phone(){
if (document.body.scrollHeight > document.body.offsetHeight){
$('#top3.absolutpo').css('right', '8.5px');
if ($(window).width() < 768){
$('#top #cart_mobi').css('margin-right', '17px');
}
}
$('.tooltip').hide();
$.magnificPopup.open({
removalDelay:170,
callbacks:{
beforeOpen:function(){
this.st.mainClass = 'mfp-zoom-in';
$('.dropdown-menu.dop_contss').fadeOut(70);
},
open:function(){
$('body').addClass('razmiv2');
$('#pagefader2').fadeIn(70);
},
close:function(){
$('body').removeClass('razmiv2');
$('#pagefader2').fadeOut(70);
$('#top3.absolutpo').css('right', 'initial');
if ($(window).width() < 768){
$('#top #cart_mobi').css('margin-right', 'initial');
}
$('.dropdown-menu.dop_contss').css('display', '');
}
},
tLoading:'',
items:{
src:'index.php?route=revolution/revpopupphone',
type:'ajax'
}
});
}
function get_revpopup_view(product_id){
if (document.body.scrollHeight > document.body.offsetHeight){
$('#top3.absolutpo').css('right', '8.5px');
if ($(window).width() < 768){
$('#top #cart_mobi').css('margin-right', '17px');
}
}
$('.tooltip').hide();
$.magnificPopup.open({
removalDelay:170,
callbacks:{
beforeOpen:function(){
this.st.mainClass = 'mfp-zoom-in';
},
open:function(){
$('body').addClass('razmiv2');
$('#pagefader2').fadeIn(70);
},
close:function(){
$('body').removeClass('razmiv2');
$('#pagefader2').fadeOut(70);
$('#top3.absolutpo').css('right', 'initial');
if ($(window).width() < 768){
$('#top #cart_mobi').css('margin-right', 'initial');
}
}
},
tLoading:'',
items:{
src:'index.php?route=revolution/revpopupview&revproduct_id='+product_id,
type:'ajax'
}
});
}
function get_revpopup_purchase(product_id){
if (document.body.scrollHeight > document.body.offsetHeight){
$('#top3.absolutpo').css('right', '8.5px');
if ($(window).width() < 768){
$('#top #cart_mobi').css('margin-right', '17px');
}
}
$('.tooltip').hide();
$.magnificPopup.open({
removalDelay:170,
callbacks:{
beforeOpen:function(){
this.st.mainClass = 'mfp-zoom-in';
},
open:function(){
$('body').addClass('razmiv2');
$('#pagefader2').fadeIn(70);
},
close:function(){
$('body').removeClass('razmiv2');
$('#pagefader2').fadeOut(70);
$('#top3.absolutpo').css('right', 'initial');
if ($(window).width() < 768){
$('#top #cart_mobi').css('margin-right', 'initial');
}
}
},
tLoading:'',
items:{
src:'index.php?route=revolution/revpopuporder&revproduct_id='+product_id,
type:'ajax'
}
});
}
function get_revpopup_cartquick(){
$('#cart .dropdown-menu').css('display', 'none');
if (document.body.scrollHeight > document.body.offsetHeight){
$('#top3.absolutpo').css('right', '8.5px');
if ($(window).width() < 768){
$('#top #cart_mobi').css('margin-right', '17px');
}
}
$('.tooltip').hide();
$.magnificPopup.open({
removalDelay:170,
callbacks:{
beforeOpen:function(){
this.st.mainClass = 'mfp-zoom-in';
},
open:function(){
$('body').addClass('razmiv2');
$('#pagefader2').fadeIn(70);
},
close:function(){
$('body').removeClass('razmiv2');
$('#pagefader2').fadeOut(70);
$('#top3.absolutpo').css('right', 'initial');
if ($(window).width() < 768){
$('#top #cart_mobi').css('margin-right', 'initial');
}
$('#cart .dropdown-menu').css('display', '');
}
},
tLoading:'',
items:{
src:'index.php?route=revolution/revpopupcartquick',
type:'ajax'
}
});
}
function get_revpopup_cart( product_id, action, quantity, block_id ){
$('.tooltip').hide();
quantity = typeof(quantity) != 'undefined' ? quantity :1;
if ( action == "catalog" ){
data = $('.products_category .product_'+product_id+' .options input[type=\"text\"], .products_category .product_'+product_id+' .options input[type=\"hidden\"], .products_category .product_'+product_id+' .options input[type=\"radio\"]:checked, .products_category .product_'+product_id+' .options input[type=\"checkbox\"]:checked, .products_category .product_'+product_id+' .options select');
$.ajax({
url:'index.php?route=checkout/cart/add',
type:'post',
data:data.serialize() + '&product_id=' + product_id + '&quantity=' + quantity,
dataType:'json',
success:function( json ){
$('.alert, .text-danger').remove();
$('.form-group').removeClass('has-error');
$('.success, .warning, .attention, information, .error').remove();
if ( json['redirect'] ){
location = json['redirect'];
}
if ( json['success'] ){
if (document.body.scrollHeight > document.body.offsetHeight){
$('#top3.absolutpo').css('right', '8.5px');
if ($(window).width() < 768){
$('#top #cart_mobi').css('margin-right', '17px');
}
}
$.magnificPopup.open({
removalDelay:170,
callbacks:{
beforeOpen:function(){
this.st.mainClass = 'mfp-zoom-in';
},
close:function(){
$('body').removeClass('razmiv2');
$('#pagefader2').fadeOut(70);
$('#top3.absolutpo').css('right', 'initial');
if ($(window).width() < 768){
$('#top #cart_mobi').css('margin-right', 'initial');
}
}
},
tLoading:'',
items:{
src:'index.php?route=revolution/revpopupcart',
type:'ajax'
}
});
$('#top #cart-total_mobi').html(json['total']);
$('#top3 #cart-total').html(json['total']);
$('#top2 #cart-total').html(json['total']);
$('#top3 #cart-total-popup').html(json['total']);
$('#cart > ul').load('index.php?route=common/cart/info ul li');
}
}
});
}
if ( action == "catalog_mod" ){
data = $('.products_category .product_'+product_id+' .options input[type=\"text\"], .products_category .product_'+product_id+' .options input[type=\"hidden\"], .products_category .product_'+product_id+' .options input[type=\"radio\"]:checked, .products_category .product_'+product_id+' .options input[type=\"checkbox\"]:checked, .products_category .product_'+product_id+' .options select');
$.ajax({
url:'index.php?route=checkout/cart/add',
type:'post',
data:data.serialize() + '&product_id=' + product_id + '&quantity=' + quantity,
dataType:'json',
success:function( json ){
$('.alert, .text-danger').remove();
$('.form-group').removeClass('has-error');
$('.success, .warning, .attention, information, .error').remove();
if ( json['redirect'] ){
location = json['redirect'];
}
if ( json['success'] ){
if (document.body.scrollHeight > document.body.offsetHeight){
$('#top3.absolutpo').css('right', '8.5px');
if ($(window).width() < 768){
$('#top #cart_mobi').css('margin-right', '17px');
}
}
$.magnificPopup.open({
removalDelay:170,
callbacks:{
beforeOpen:function(){
this.st.mainClass = 'mfp-zoom-in';
},
close:function(){
$('body').removeClass('razmiv2');
$('#pagefader2').fadeOut(70);
$('#top3.absolutpo').css('right', 'initial');
if ($(window).width() < 768){
$('#top #cart_mobi').css('margin-right', 'initial');
}
}
},
tLoading:'',
items:{
src:'index.php?route=revolution/revpopupcart',
type:'ajax'
}
});
$('#top #cart-total_mobi').html(json['total']);
$('#top3 #cart-total').html(json['total']);
$('#top2 #cart-total').html(json['total']);
$('#top3 #cart-total-popup').html(json['total']);
$('#cart > ul').load('index.php?route=common/cart/info ul li');
}
}
});
}
if ( action == "product" ){
data = $('.product_informationss .product-info input[type=\"text\"], .product_informationss .product-info input[type=\"hidden\"], .product_informationss .product-info input[type=\"radio\"]:checked, .product_informationss .product-info input[type=\"checkbox\"]:checked, .product_informationss .product-info select, .product_informationss .product-info textarea'),
$.ajax({
url:'index.php?route=checkout/cart/add',
type:'post',
data:data.serialize() + '&product_id=' + product_id + '&quantity=' + quantity,
dataType:'json',
beforeSend:function(){
$('body').addClass('razmiv2');
$('#pagefader2').fadeIn(70);
},
success:function( json ){
$('.alert, .text-danger').remove();
$('.form-group').removeClass('has-error');
$('.success, .warning, .attention, information, .error').remove();
if (json['error']){
$('body').removeClass('razmiv2');
$('#pagefader2').fadeOut(70);
$('#top3.absolutpo').css('right', 'initial');
if ($(window).width() < 768){
$('#top #cart_mobi').css('margin-right', 'initial');
}
if (json['error']['option']){
for (i in json['error']['option']){
$('#input-option' + i).before('<span class="error bg-danger">' + json['error']['option'][i] + '</span>');
if ($(window).width() < 768){
$('html, body').animate({scrollTop:$('.error').offset().top - 40}, 'linear');
}
}
}
}
if ( json['success'] ){
if (document.body.scrollHeight > document.body.offsetHeight){
$('#top3.absolutpo').css('right', '8.5px');
if ($(window).width() < 768){
$('#top #cart_mobi').css('margin-right', '17px');
}
}
$.magnificPopup.open({
removalDelay:170,
callbacks:{
beforeOpen:function(){
this.st.mainClass = 'mfp-zoom-in';
},
close:function(){
$('body').removeClass('razmiv2');
$('#pagefader2').fadeOut(70);
$('#top3.absolutpo').css('right', 'initial');
if ($(window).width() < 768){
$('#top #cart_mobi').css('margin-right', 'initial');
}
}
},
tLoading:'',
items:{
src:'index.php?route=revolution/revpopupcart',
type:'ajax'
}
});
$('#top #cart-total_mobi').html(json['total']);
$('#top3 #cart-total').html(json['total']);
$('#top2 #cart-total').html(json['total']);
$('#top3 #cart-total-popup').html(json['total']);
$('#cart > ul').load('index.php?route=common/cart/info ul li');
}
}
});
}
if ( action == "popup_product" ){
data = $('#popup-view-wrapper .product-info input[type=\"text\"], #popup-view-wrapper .product-info input[type=\"hidden\"], #popup-view-wrapper .product-info input[type=\"radio\"]:checked, #popup-view-wrapper .product-info input[type=\"checkbox\"]:checked, #popup-view-wrapper .product-info select, #popup-view-wrapper .product-info textarea');
$.ajax({
url:'index.php?route=checkout/cart/add',
type:'post',
data:data.serialize() + '&product_id=' + product_id + '&quantity=' + quantity,
dataType:'json',
beforeSend:function(){
$('body').addClass('razmiv2');
$('#pagefader2').fadeIn(70);
},
success:function( json ){
$('.alert, .text-danger').remove();
$('.form-group').removeClass('has-error');
$('.success, .warning, .attention, information, .error').remove();
if (json['error']){
$('body').removeClass('razmiv2');
$('#pagefader2').fadeOut(70);
$('#top3.absolutpo').css('right', 'initial');
if ($(window).width() < 768){
$('#top #cart_mobi').css('margin-right', 'initial');
}
if (json['error']['option']){
if ($(window).width() < 768){
if (json['redirect']){
location = json['redirect'];
}
}else{
for (i in json['error']['option']){
$('#input-option' + i).before('<span class="error bg-danger">' + json['error']['option'][i] + '</span>');
}
}
}
}
if ( json['success'] ){
if (document.body.scrollHeight > document.body.offsetHeight){
$('#top3.absolutpo').css('right', '8.5px');
if ($(window).width() < 768){
$('#top #cart_mobi').css('margin-right', '17px');
}
}
$.magnificPopup.open({
removalDelay:170,
callbacks:{
beforeOpen:function(){
this.st.mainClass = 'mfp-zoom-in';
},
close:function(){
$('body').removeClass('razmiv2');
$('#pagefader2').fadeOut(70);
$('#top3.absolutpo').css('right', 'initial');
if ($(window).width() < 768){
$('#top #cart_mobi').css('margin-right', 'initial');
}
}
},
tLoading:'',
items:{
src:'index.php?route=revolution/revpopupcart',
type:'ajax'
}
});
$('#top #cart-total_mobi').html(json['total']);
$('#top3 #cart-total').html(json['total']);
$('#top2 #cart-total').html(json['total']);
$('#top3 #cart-total-popup').html(json['total']);
$('#cart > ul').load('index.php?route=common/cart/info ul li');
}
}
});
}
if ( action == "show_cart" ){
if (document.body.scrollHeight > document.body.offsetHeight){
$('#top3.absolutpo').css('right', '8.5px');
if ($(window).width() < 768){
$('#top #cart_mobi').css('margin-right', '17px');
}
}
$.magnificPopup.open({
removalDelay:170,
callbacks:{
beforeOpen:function(){
this.st.mainClass = 'mfp-zoom-in';
},
open:function(){
$('body').addClass('razmiv2');
$('#pagefader2').fadeIn(70);
},
close:function(){
$('body').removeClass('razmiv2');
$('#pagefader2').fadeOut(70);
$('#top3.absolutpo').css('right', 'initial');
if ($(window).width() < 768){
$('#top #cart_mobi').css('margin-right', 'initial');
}
}
},
tLoading:'',
items:{
src:'index.php?route=revolution/revpopupcart',
type:'ajax'
}
});
}
if ( action == "redirect_cart" ){
window.location.href = "/index.php?route=checkout/checkout"
}
if ( action == "module" ){
quantity = typeof(quantity) != 'undefined' ? quantity :1;
data = $('#'+block_id+' .product_'+product_id+' .options input[type=\"text\"], #'+block_id+' .product_'+product_id+' .options input[type=\"hidden\"], #'+block_id+' .product_'+product_id+' .options input[type=\"radio\"]:checked, #'+block_id+' .product_'+product_id+' .options input[type=\"checkbox\"]:checked, #'+block_id+' .product_'+product_id+' .options select');
$.ajax({
url:'index.php?route=checkout/cart/add',
type:'post',
data:data.serialize() + '&product_id=' + product_id + '&quantity=' + quantity,
dataType:'json',
success:function( json ){
$('.alert, .text-danger').remove();
$('.form-group').removeClass('has-error');
$('.success, .warning, .attention, information, .error').remove();
if ( json['redirect'] ){
location = json['redirect'];
}
if ( json['success'] ){
if (document.body.scrollHeight > document.body.offsetHeight){
$('#top3.absolutpo').css('right', '8.5px');
if ($(window).width() < 768){
$('#top #cart_mobi').css('margin-right', '17px');
}
}
$.magnificPopup.open({
removalDelay:170,
callbacks:{
beforeOpen:function(){
this.st.mainClass = 'mfp-zoom-in';
},
close:function(){
$('body').removeClass('razmiv2');
$('#pagefader2').fadeOut(70);
$('#top3.absolutpo').css('right', 'initial');
if ($(window).width() < 768){
$('#top #cart_mobi').css('margin-right', 'initial');
}
}
},
tLoading:'',
items:{
src:'index.php?route=revolution/revpopupcart',
type:'ajax'
}
});
$('#top #cart-total_mobi').html(json['total']);
$('#top3 #cart-total').html(json['total']);
$('#top2 #cart-total').html(json['total']);
$('#top3 #cart-total-popup').html(json['total']);
$('#cart > ul').load('index.php?route=common/cart/info ul li');
}
}
});
}
if ( action == "module_in_product" ){
quantity = typeof(quantity) != 'undefined' ? quantity :1;
data = $('#'+block_id+' .product_'+product_id+' .options input[type=\"text\"], #'+block_id+' .product_'+product_id+' .options input[type=\"hidden\"], #'+block_id+' .product_'+product_id+' .options input[type=\"radio\"]:checked, #'+block_id+' .product_'+product_id+' .options input[type=\"checkbox\"]:checked, #'+block_id+' .product_'+product_id+' .options select');
$.ajax({
url:'index.php?route=checkout/cart/add',
type:'post',
data:data.serialize() + '&product_id=' + product_id + '&quantity=' + quantity,
dataType:'json',
beforeSend:function(){
$('body').addClass('razmiv2');
$('#pagefader2').fadeIn(70);
},
success:function( json ){
$('.alert, .text-danger').remove();
$('.form-group').removeClass('has-error');
$('.success, .warning, .attention, information, .error').remove();
if ( json['redirect'] ){
location = json['redirect'];
}
if ( json['success'] ){
if (document.body.scrollHeight > document.body.offsetHeight){
$('#top3.absolutpo').css('right', '8.5px');
if ($(window).width() < 768){
$('#top #cart_mobi').css('margin-right', '17px');
}
}
$.magnificPopup.open({
removalDelay:170,
callbacks:{
beforeOpen:function(){
this.st.mainClass = 'mfp-zoom-in';
},
close:function(){
$('body').removeClass('razmiv2');
$('#pagefader2').fadeOut(70);
$('#top3.absolutpo').css('right', 'initial');
if ($(window).width() < 768){
$('#top #cart_mobi').css('margin-right', 'initial');
}
}
},
tLoading:'',
items:{
src:'index.php?route=revolution/revpopupcart',
type:'ajax'
}
});
$('#top #cart-total_mobi').html(json['total']);
$('#top3 #cart-total').html(json['total']);
$('#top2 #cart-total').html(json['total']);
$('#top3 #cart-total-popup').html(json['total']);
$('#cart > ul').load('index.php?route=common/cart/info ul li');
}
}
});
}
}
function get_revpopup_cart_option (opt_id, option, quantity, product_id){
$('.tooltip').hide();
$('.options_buy .pro_'+option+' input[name=\"option['+opt_id+']\"]').val(option);
data = $('.product-info .options_buy .pro_'+option+' input[type=\"text\"], .product-info .options_buy .pro_'+option+' input[type=\"hidden\"], .product-info .options_buy .pro_'+option+' input[type=\"radio\"]:checked, .product-info .options_buy .pro_'+option+' input[type=\"checkbox\"]:checked, .product-info .options_buy .pro_'+option+' select, .product-info .options_buy .pro_'+option+' textarea');
$.ajax({
url:'index.php?route=checkout/cart/add',
type:'post',
data:data.serialize() + '&product_id=' + product_id + '&quantity=' + quantity,
dataType:'json',
beforeSend:function(){
$('body').addClass('razmiv2');
$('#pagefader2').fadeIn(70);
},
success:function( json ){
$('.alert, .text-danger').remove();
$('.form-group').removeClass('has-error');
$('.success, .warning, .attention, information, .error').remove();
if (json['error']){
$('body').removeClass('razmiv2');
$('#pagefader2').fadeOut(70);
$('#top3.absolutpo').css('right', 'initial');
if ($(window).width() < 768){
$('#top #cart_mobi').css('margin-right', 'initial');
}
}
if ( json['success'] ){
if (document.body.scrollHeight > document.body.offsetHeight){
$('#top3.absolutpo').css('right', '8.5px');
if ($(window).width() < 768){
$('#top #cart_mobi').css('margin-right', '17px');
}
}
$.magnificPopup.open({
removalDelay:170,
callbacks:{
beforeOpen:function(){
this.st.mainClass = 'mfp-zoom-in';
},
close:function(){
$('body').removeClass('razmiv2');
$('#pagefader2').fadeOut(70);
$('#top3.absolutpo').css('right', 'initial');
if ($(window).width() < 768){
$('#top #cart_mobi').css('margin-right', 'initial');
}
}
},
tLoading:'',
items:{
src:'index.php?route=revolution/revpopupcart',
type:'ajax'
}
});
$('#top #cart-total_mobi').html(json['total']);
$('#top3 #cart-total').html(json['total']);
$('#top2 #cart-total').html(json['total']);
$('#top3 #cart-total-popup').html(json['total']);
$('#cart > ul').load('index.php?route=common/cart/info ul li');
}
}
});
}
function get_revpopup_login(){
if (document.body.scrollHeight > document.body.offsetHeight){
$('#top3.absolutpo').css('right', '8.5px');
if ($(window).width() < 768){
$('#top #cart_mobi').css('margin-right', '17px');
}
}
$('.tooltip').hide();
$.magnificPopup.open({
removalDelay:170,
callbacks:{
beforeOpen:function(){
this.st.mainClass = 'mfp-zoom-in';
},
open:function(){
$('body').addClass('razmiv2');
$('#pagefader2').fadeIn(70);
},
close:function(){
$('body').removeClass('razmiv2');
$('#pagefader2').fadeOut(70);
$('#top3.absolutpo').css('right', 'initial');
if ($(window).width() < 768){
$('#top #cart_mobi').css('margin-right', 'initial');
}
}
},
tLoading:'',
items:{
src:'index.php?route=revolution/revpopuplogin',
type:'ajax'
}
});
}
$(document).on('click', '.tel .dropdown-menu', function (e){
$(this).hasClass('dropdown-menu-right') && e.stopPropagation();
});
function get_revpopup_predzakaz(product_id){
if (document.body.scrollHeight > document.body.offsetHeight){
$('#top3.absolutpo').css('right', '8.5px');
if ($(window).width() < 768){
$('#top #cart_mobi').css('margin-right', '17px');
}
}
$.magnificPopup.open({
removalDelay:170,
callbacks:{
beforeOpen:function(){
this.st.mainClass = 'mfp-zoom-in';
},
open:function(){
$('body').addClass('razmiv2');
$('#pagefader2').fadeIn(70);
},
close:function(){
$('body').removeClass('razmiv2');
$('#pagefader2').fadeOut(70);
$('#top3.absolutpo').css('right', 'initial');
if ($(window).width() < 768){
$('#top #cart_mobi').css('margin-right', 'initial');
}
}
},
tLoading:'',
items:{
src:'index.php?route=revolution/revpopuppredzakaz&revproduct_id='+product_id,
type:'ajax'
}
});
}
(function($){
$.fn.menuAim = function(opts){
this.each(function(){
init.call(this, opts);
});
return this;
};
function init(opts){
var $menu = $(this),
activeRow = null,
mouseLocs = [],
lastDelayLoc = null,
timeoutId = null,
options = $.extend({
rowSelector:"> li",
submenuSelector:"*",
submenuDirection:"right",
tolerance:75,
enter:$.noop,
exit:$.noop,
activate:$.noop,
deactivate:$.noop,
exitMenu:$.noop
}, opts);
var MOUSE_LOCS_TRACKED = 3,
DELAY = 300;
var mousemoveDocument = function(e){
mouseLocs.push({x:e.pageX, y:e.pageY});
if (mouseLocs.length > MOUSE_LOCS_TRACKED){
mouseLocs.shift();
}
};
var mouseleaveMenu = function(){
if (timeoutId){
clearTimeout(timeoutId);
}
if (options.exitMenu(this)){
if (activeRow){
options.deactivate(activeRow);
}
activeRow = null;
}
};
var mouseenterRow = function(){
if (timeoutId){
clearTimeout(timeoutId);
}
options.enter(this);
possiblyActivate(this);
},
mouseleaveRow = function(){
options.exit(this);
};
var clickRow = function(){
activate(this);
};
var activate = function(row){
if (row == activeRow){
return;
}
if (activeRow){
options.deactivate(activeRow);
}
options.activate(row);
activeRow = row;
};
var possiblyActivate = function(row){
var delay = activationDelay();
if (delay){
timeoutId = setTimeout(function(){
possiblyActivate(row);
}, delay);
}else{
activate(row);
}
};
var activationDelay = function(){
if (!activeRow || !$(activeRow).is(options.submenuSelector)){
return 0;
}
var offset = $menu.offset(),
upperLeft ={
x:offset.left,
y:offset.top - options.tolerance
},
upperRight ={
x:offset.left + $menu.outerWidth(),
y:upperLeft.y
},
lowerLeft ={
x:offset.left,
y:offset.top + $menu.outerHeight() + options.tolerance
},
lowerRight ={
x:offset.left + $menu.outerWidth(),
y:lowerLeft.y
},
loc = mouseLocs[mouseLocs.length - 1],
prevLoc = mouseLocs[0];
if (!loc){
return 0;
}
if (!prevLoc){
prevLoc = loc;
}
if (prevLoc.x < offset.left || prevLoc.x > lowerRight.x ||
prevLoc.y < offset.top || prevLoc.y > lowerRight.y){
return 0;
}
if (lastDelayLoc &&
loc.x == lastDelayLoc.x && loc.y == lastDelayLoc.y){
return 0;
}
function slope(a, b){
return (b.y - a.y) / (b.x - a.x);
};
var decreasingCorner = upperRight,
increasingCorner = lowerRight;
if (options.submenuDirection == "left"){
decreasingCorner = lowerLeft;
increasingCorner = upperLeft;
}else if (options.submenuDirection == "below"){
decreasingCorner = lowerRight;
increasingCorner = lowerLeft;
}else if (options.submenuDirection == "above"){
decreasingCorner = upperLeft;
increasingCorner = upperRight;
}
var decreasingSlope = slope(loc, decreasingCorner),
increasingSlope = slope(loc, increasingCorner),
prevDecreasingSlope = slope(prevLoc, decreasingCorner),
prevIncreasingSlope = slope(prevLoc, increasingCorner);
if (decreasingSlope < prevDecreasingSlope &&
increasingSlope > prevIncreasingSlope){
lastDelayLoc = loc;
return DELAY;
}
lastDelayLoc = null;
return 0;
};
$menu
.mouseleave(mouseleaveMenu)
.find(options.rowSelector)
.mouseenter(mouseenterRow)
.mouseleave(mouseleaveRow)
.click(clickRow);
$(document).mousemove(mousemoveDocument);
};
})(jQuery);
(function($){
var $menu = $(),
options ={
popup:false,
maximize:false
},
exitMenuDelay = 0,
topDelayedChange = 0,
itemMouseleaveDelay = 0,
delayTime = 100,
menuElDelayTime = 200,
subMenuWidth = 190,
maxMenuHeight = 0,
scrollStep = 1000,
scrollViewport = 0,
scrollSpeed = 'fast',
openCls = 'open',
closeCls = 'closed',
rowSelector = 'div.revlevel_1',
childrenCls = '.childrenList';
function init (menu, params){
options = $.extend({}, options, params );
$menu = $(menu);
menuNamespace = $menu.attr('id');
$('.revlevel_1.hasChildren').css('position', 'relative');
var mm = $('#menu2').outerHeight();
var ww = $('.box-content.am').outerWidth();
$('#menu2 .podmenu2').css('height', mm);
$('#menu2 .podmenu2').css('min-width', ww-0.5);
$menu.menuAim({
rowSelector:rowSelector,
activate:activateSubmenu,
exitMenu:exitMenu
});
};
function exitMenu(){
$('#pagefader').fadeOut(70);
$('body').removeClass('razmiv');
clearTimeout(itemMouseleaveDelay);
exitMenuDelay = setTimeout(function(){
$('#' + menuNamespace + ' ' + childrenCls).hide();
toggleClasses('#' + menuNamespace + ' .catalog_list .revlevel_1', openCls, closeCls);
var mm = $('#menu2').outerHeight();
$('#menu2 .podmenu2').css('height', mm);
if (!options.popup){
hidePopupMenu();
}
}, delayTime);
return true;
}
function enterMenu(row){
$('#pagefader').fadeIn(70);
$('body').addClass('razmiv');
var $row = $(row);
if (exitMenuDelay > 0){
clearTimeout(exitMenuDelay);
}
clearTimeout(topDelayedChange);
toggleClasses('#' + menuNamespace + ' .catalog_list .revlevel_1 div.open', openCls, closeCls);
toggleClasses(row, closeCls, openCls);
$row.find('> '+childrenCls).show();
$('#' + menuNamespace + ' .catalog_list .revlevel_1.open').not($row).each(function(){
toggleClasses(this, openCls, closeCls);
});
var mm = $('#menu2').outerHeight();
$('#menu2 .podmenu2').css('display', 'block');
}
function activateSubmenu(row){
var $row = $(row),
$submenu = $row.find(childrenCls + ':first');
clearTimeout(exitMenuDelay);
$submenu.show();
enterMenu(row);
toggleClasses(row, closeCls, openCls);
var mm = $('#menu2').outerHeight();
var ww = $('#menu2').outerWidth();
$('#menu2 .podmenu2').css('min-width', ww-0.5);
var dd = $('#' + menuNamespace + ' .catalog_list .revlevel_1.open').children('.childrenList').outerHeight();
if (mm < dd){
$('#menu2 .podmenu2').css('display', 'block');
};
}
function deactivateSubmenu(row){
return true;
}
function toggleClasses(el, rmCls, addCls){
$(el).removeClass(rmCls).addClass(addCls);
}
$.fn.popupMenuWidget = function(options){
init(this, options);
};
})(jQuery);
$(document).ready(function(){
var options ={};
options ={
popup:true, maximize:true
};
$("#menu2").popupMenuWidget(options);
});
$(document).ready(function(){
var ajaxSearch = $('header .search input[name=\'search\']');
var customAutocomplete = null;
ajaxSearch.autocomplete({
delay:500,
responsea :function (items){
if (items.length){
for (i = 0; i < items.length; i++){
this.items[items[i]['value']] = items[i];
}
}
var html='';
if(items.length){
$.each(items,function(key,item){
if(item.product_id!=0){
html += '<li data-value="' + item['value'] + '"><a href="'+item.href+'">';
html += '<div class="ajaxadvance">';
if(item.image){
html += '<div class="image">';
html += '<img title="'+item.name+'" src="'+item.image+'"/>';
html += '<div class="mask"></div>';
html += '</div>';
}
html += '<div class="content">';
if(!item.image && item.reviews !== 'man'){
html += '<div style="float:right; color:#bbb;">Категория</div>';
}
if(item.reviews == 'man'){
html += '<div style="float:right; color:#bbb;">Производитель</div>';
}
html += '<div class="name">'+item.label+'</div>';
if(item.price){
html += '<div class="price">';
if (!item.special){
html += item.price;
}else{
html += '<span class="price-old">'+ item.price +'</span> <span class="price-new">'+ item.special +'</span>';
}
html += '</div>';
}
html +='</div>';
html += '</div></a></li>';
}
});
}
if (html){
ajaxSearch.siblings('ul.dropdown-menu').show();
}else{
ajaxSearch.siblings('ul.dropdown-menu').hide();
}
$(ajaxSearch).siblings('ul.dropdown-menu').html(html);
},
source:function(request, response){
customAutocomplete = this;
var filter_category_id = $('.search input[name=\'category_id\']').val();
$.ajax({
url:'index.php?route=common/search/ajaxLiveSearch',
data:'filter_name=' + encodeURIComponent(request) + '&filter_category_id=' + filter_category_id,
dataType :'json',
success :function(json){
customAutocomplete.responsea($.map(json, function(item){
return{
label:item.name,
name:item.name1,
value:item.product_id,
image:item.image,
price:item.price,
special:item.special,
reviews:item.reviews,
href:item.href
}
}));
}
});
},
select :function (ui){
return false;
},
selecta:function(ui){
if(ui.value){
if(ui.image){
location = 'index.php?route=product/product&product_id='+ui.value;
}else{
if(ui.reviews == 'man'){
location = 'index.php?route=product/manufacturer&manufacturer_id='+ui.value;
}else{
location = 'index.php?route=product/category&path='+ui.value;
}
}
}else{
$('.search input[name=\'search\']').parent().find('button').trigger('click');
}
return false;
},
focus:function(event, ui){
return false;
}
});
ajaxSearch.siblings('ul.dropdown-menu').delegate('a', 'click', function(){
value = $(this).parent().attr('data-value');
if (value && customAutocomplete.items[value]){
customAutocomplete.selecta(customAutocomplete.items[value]);
}
});
});
(function($){$.fn.snow=function(options){var $flake=$('<div class="snow_flake" />').css({'position':'absolute','top':'-50px'}).html('&#10052;'),documentHeight=$('html').height(),documentWidth=$('html').width(),defaults={minSize:10,maxSize:25,newOn:700,flakeColor:"#0099FF"},options=$.extend({},defaults,options);var interval=setInterval(function(){var startPositionLeft=Math.random()*documentWidth-100,startOpacity=0.5+Math.random(),sizeFlake=options.minSize+Math.random()*options.maxSize,endPositionLeft=startPositionLeft-100+Math.random()*200,durationFall=documentHeight*15+Math.random()*5000;$flake.clone().appendTo('body').css({left:startPositionLeft,opacity:startOpacity,'font-size':sizeFlake,color:options.flakeColor}).animate({top:$('footer').offset()['top'],left:endPositionLeft,opacity:0.2},durationFall,'linear',function(){$(this).remove()})},options.newOn)}})(jQuery);
if ($(window).width() > 976){
$.fn.snow();
}
;(function(root, factory){
if (typeof define === 'function' && define.amd){
define(['jquery'], factory);
}else if (typeof exports === 'object'){
module.exports = factory(require('jquery'));
}else{
root.jquery_mmenu_all_js = factory(root.jQuery);
}
}(this, function(jQuery){
!function(e){function t(){e[n].glbl||(l={$wndw:e(window),$docu:e(document),$html:e("html"),$body:e("body")},s={},a={},r={},e.each([s,a,r],function(e,t){t.add=function(e){e=e.split(" ");for(var n=0,i=e.length;n<i;n++)t[e[n]]=t.mm(e[n])}}),s.mm=function(e){return"mm-"+e},s.add("wrapper menu panels panel nopanel navbar listview nolistview listitem btn hidden"),s.umm=function(e){return"mm-"==e.slice(0,3)&&(e=e.slice(3)),e},a.mm=function(e){return"mm-"+e},a.add("parent child title"),r.mm=function(e){return e+".mm"},r.add("transitionend webkitTransitionEnd click scroll resize keydown mousedown mouseup touchstart touchmove touchend orientationchange"),e[n]._c=s,e[n]._d=a,e[n]._e=r,e[n].glbl=l)}var n="mmenu",i="7.1.0";if(!(e[n]&&e[n].version>i)){e[n]=function(e,t,n){return this.$menu=e,this._api=["bind","getInstance","initPanels","openPanel","closePanel","closeAllPanels","setSelected"],this.opts=t,this.conf=n,this.vars={},this.cbck={},this.mtch={},"function"==typeof this.___deprecated&&this.___deprecated(),this._initWrappers(),this._initAddons(),this._initExtensions(),this._initHooks(),this._initMenu(),this._initPanels(),this._initOpened(),this._initAnchors(),this._initMatchMedia(),"function"==typeof this.___debug&&this.___debug(),this},e[n].version=i,e[n].uniqueId=0,e[n].wrappers={},e[n].addons={},e[n].defaults={hooks:{},extensions:[],wrappers:[],navbar:{add:!0,title:"Menu",titleLink:"parent"},onClick:{setSelected:!0},slidingSubmenus:!0},e[n].configuration={classNames:{divider:"Divider",inset:"Inset",nolistview:"NoListview",nopanel:"NoPanel",panel:"Panel",selected:"Selected",spacer:"Spacer",vertical:"Vertical"},clone:!1,language:null,openingInterval:25,panelNodetype:"ul, ol, div",transitionDuration:400},e[n].prototype={getInstance:function(){return this},initPanels:function(e){this._initPanels(e)},openPanel:function(t,i){if(this.trigger("openPanel:before",t),t&&t.length&&(t.is("."+s.panel)||(t=t.closest("."+s.panel)),t.is("."+s.panel))){var r=this;if("boolean"!=typeof i&&(i=!0),t.parent("."+s.listitem+"_vertical").length)t.parents("."+s.listitem+"_vertical").addClass(s.listitem+"_opened").children("."+s.panel).removeClass(s.hidden),this.openPanel(t.parents("."+s.panel).not(function(){return e(this).parent("."+s.listitem+"_vertical").length}).first()),this.trigger("openPanel:start",t),this.trigger("openPanel:finish",t);else{if(t.hasClass(s.panel+"_opened"))return;var l=this.$pnls.children("."+s.panel),o=this.$pnls.children("."+s.panel+"_opened");if(!e[n].support.csstransitions)return o.addClass(s.hidden).removeClass(s.panel+"_opened"),t.removeClass(s.hidden).addClass(s.panel+"_opened"),this.trigger("openPanel:start",t),void this.trigger("openPanel:finish",t);l.not(t).removeClass(s.panel+"_opened-parent");for(var d=t.data(a.parent);d;)d=d.closest("."+s.panel),d.parent("."+s.listitem+"_vertical").length||d.addClass(s.panel+"_opened-parent"),d=d.data(a.parent);l.removeClass(s.panel+"_highest").not(o).not(t).addClass(s.hidden),t.removeClass(s.hidden);var c=function(){o.removeClass(s.panel+"_opened"),t.addClass(s.panel+"_opened"),t.hasClass(s.panel+"_opened-parent")?(o.addClass(s.panel+"_highest"),t.removeClass(s.panel+"_opened-parent")):(o.addClass(s.panel+"_opened-parent"),t.addClass(s.panel+"_highest")),r.trigger("openPanel:start",t)},h=function(){o.removeClass(s.panel+"_highest").addClass(s.hidden),t.removeClass(s.panel+"_highest"),r.trigger("openPanel:finish",t)};i&&!t.hasClass(s.panel+"_noanimation")?setTimeout(function(){r.__transitionend(t,function(){h()},r.conf.transitionDuration),c()},r.conf.openingInterval):(c(),h())}this.trigger("openPanel:after",t)}},closePanel:function(e){this.trigger("closePanel:before",e);var t=e.parent();t.hasClass(s.listitem+"_vertical")&&(t.removeClass(s.listitem+"_opened"),e.addClass(s.hidden),this.trigger("closePanel",e)),this.trigger("closePanel:after",e)},closeAllPanels:function(e){this.trigger("closeAllPanels:before"),this.$pnls.find("."+s.listview).children().removeClass(s.listitem+"_selected").filter("."+s.listitem+"_vertical").removeClass(s.listitem+"_opened");var t=this.$pnls.children("."+s.panel),n=e&&e.length?e:t.first();this.$pnls.children("."+s.panel).not(n).removeClass(s.panel+"_opened").removeClass(s.panel+"_opened-parent").removeClass(s.panel+"_highest").addClass(s.hidden),this.openPanel(n,!1),this.trigger("closeAllPanels:after")},togglePanel:function(e){var t=e.parent();t.hasClass(s.listitem+"_vertical")&&this[t.hasClass(s.listitem+"_opened")?"closePanel":"openPanel"](e)},setSelected:function(e){this.trigger("setSelected:before",e),this.$menu.find("."+s.listitem+"_selected").removeClass(s.listitem+"_selected"),e.addClass(s.listitem+"_selected"),this.trigger("setSelected:after",e)},bind:function(e,t){this.cbck[e]=this.cbck[e]||[],this.cbck[e].push(t)},trigger:function(){var e=this,t=Array.prototype.slice.call(arguments),n=t.shift();if(this.cbck[n])for(var i=0,s=this.cbck[n].length;i<s;i++)this.cbck[n][i].apply(e,t)},matchMedia:function(e,t,n){var i={yes:t,no:n};this.mtch[e]=this.mtch[e]||[],this.mtch[e].push(i)},i18n:function(t){return e[n].i18n(t,this.conf.language)},_initHooks:function(){for(var e in this.opts.hooks)this.bind(e,this.opts.hooks[e])},_initWrappers:function(){this.trigger("initWrappers:before");for(var t=0;t<this.opts.wrappers.length;t++){var i=e[n].wrappers[this.opts.wrappers[t]];"function"==typeof i&&i.call(this)}this.trigger("initWrappers:after")},_initAddons:function(){this.trigger("initAddons:before");var t;for(t in e[n].addons)e[n].addons[t].add.call(this),e[n].addons[t].add=function(){};for(t in e[n].addons)e[n].addons[t].setup.call(this);this.trigger("initAddons:after")},_initExtensions:function(){this.trigger("initExtensions:before");var e=this;this.opts.extensions.constructor===Array&&(this.opts.extensions={all:this.opts.extensions});for(var t in this.opts.extensions)this.opts.extensions[t]=this.opts.extensions[t].length?s.menu+"_"+this.opts.extensions[t].join(" "+s.menu+"_"):"",this.opts.extensions[t]&&!function(t){e.matchMedia(t,function(){this.$menu.addClass(this.opts.extensions[t])},function(){this.$menu.removeClass(this.opts.extensions[t])})}(t);this.trigger("initExtensions:after")},_initMenu:function(){this.trigger("initMenu:before");this.conf.clone&&(this.$orig=this.$menu,this.$menu=this.$orig.clone(),this.$menu.add(this.$menu.find("[id]")).filter("[id]").each(function(){e(this).attr("id",s.mm(e(this).attr("id")))})),this.$menu.attr("id",this.$menu.attr("id")||this.__getUniqueId()),this.$pnls=e('<div class="'+s.panels+'" />').append(this.$menu.children(this.conf.panelNodetype)).prependTo(this.$menu),this.$menu.addClass(s.menu).parent().addClass(s.wrapper),this.trigger("initMenu:after")},_initPanels:function(t){this.trigger("initPanels:before",t),t=t||this.$pnls.children(this.conf.panelNodetype);var n=e(),i=this,a=function(t){t.filter(i.conf.panelNodetype).each(function(t){var r=i._initPanel(e(this));if(r){i._initNavbar(r),i._initListview(r),n=n.add(r);var l=r.children("."+s.listview).children("li").children(i.conf.panelNodetype).add(r.children("."+i.conf.classNames.panel));l.length&&a(l)}})};a(t),this.trigger("initPanels:after",n)},_initPanel:function(e){this.trigger("initPanel:before",e);if(e.hasClass(s.panel))return e;if(this.__refactorClass(e,this.conf.classNames.panel,s.panel),this.__refactorClass(e,this.conf.classNames.nopanel,s.nopanel),this.__refactorClass(e,this.conf.classNames.inset,s.listview+"_inset"),e.filter("."+s.listview+"_inset").addClass(s.nopanel),e.hasClass(s.nopanel))return!1;var t=e.hasClass(this.conf.classNames.vertical)||!this.opts.slidingSubmenus;e.removeClass(this.conf.classNames.vertical);var n=e.attr("id")||this.__getUniqueId();e.is("ul, ol")&&(e.removeAttr("id"),e.wrap("<div />"),e=e.parent()),e.attr("id",n),e.addClass(s.panel+" "+s.hidden);var i=e.parent("li");return t?i.addClass(s.listitem+"_vertical"):e.appendTo(this.$pnls),i.length&&(i.data(a.child,e),e.data(a.parent,i)),this.trigger("initPanel:after",e),e},_initNavbar:function(t){if(this.trigger("initNavbar:before",t),!t.children("."+s.navbar).length){var n=t.data(a.parent),i=e('<div class="'+s.navbar+'" />'),r=this.__getPanelTitle(t,this.opts.navbar.title),l="";if(n&&n.length){if(n.hasClass(s.listitem+"_vertical"))return;if(n.parent().is("."+s.listview))var o=n.children("a, span").not("."+s.btn+"_next");else var o=n.closest("."+s.panel).find('a[href="#'+t.attr("id")+'"]');o=o.first(),n=o.closest("."+s.panel);var d=n.attr("id");switch(r=this.__getPanelTitle(t,e("<span>"+o.text()+"</span>").text()),this.opts.navbar.titleLink){case"anchor":l=o.attr("href");break;case"parent":l="#"+d}i.append('<a class="'+s.btn+" "+s.btn+"_prev "+s.navbar+'__btn" href="#'+d+'" />')}else if(!this.opts.navbar.title)return;this.opts.navbar.add&&t.addClass(s.panel+"_has-navbar"),i.append('<a class="'+s.navbar+'__title"'+(l.length?' href="'+l+'"':"")+">"+r+"</a>").prependTo(t),this.trigger("initNavbar:after",t)}},_initListview:function(t){this.trigger("initListview:before",t);var n=this.__childAddBack(t,"ul, ol");this.__refactorClass(n,this.conf.classNames.nolistview,s.nolistview);var i=n.not("."+s.nolistview).addClass(s.listview).children().addClass(s.listitem);this.__refactorClass(i,this.conf.classNames.selected,s.listitem+"_selected"),this.__refactorClass(i,this.conf.classNames.divider,s.listitem+"_divider"),this.__refactorClass(i,this.conf.classNames.spacer,s.listitem+"_spacer"),i.children("a, span").not("."+s.btn).addClass(s.listitem+"__text");var r=t.data(a.parent);if(r&&r.is("."+s.listitem)&&!r.children("."+s.btn).length){var l=r.children("a, span").first(),o=e('<a class="'+s.btn+" "+s.btn+"_next "+s.listitem+'__btn" href="#'+t.attr("id")+'" />');o.insertAfter(l),l.is("span")&&(o.addClass(s.listitem+"__text").html(l.html()),l.remove())}this.trigger("initListview:after",t)},_initOpened:function(){this.trigger("initOpened:before");var e=this.$pnls.find("."+s.listitem+"_selected").removeClass(s.listitem+"_selected").last().addClass(s.listitem+"_selected"),t=e.length?e.closest("."+s.panel):this.$pnls.children("."+s.panel).first();this.openPanel(t,!1),this.trigger("initOpened:after")},_initAnchors:function(){this.trigger("initAnchors:before");var t=this;l.$body.on(r.click+"-oncanvas","a[href]",function(i){var a=e(this),r=a.attr("href"),l=t.$menu.find(a).length,o=a.is("."+s.listitem+" > a"),d=a.is('[rel="external"]')||a.is('[target="_blank"]');if(l&&r.length>1&&"#"==r.slice(0,1))try{var c=t.$menu.find(r);if(c.is("."+s.panel))return t[a.parent().hasClass(s.listitem+"_vertical")?"togglePanel":"openPanel"](c),void i.preventDefault()}catch(h){}var f={close:null,setSelected:null,preventDefault:"#"==r.slice(0,1)};for(var p in e[n].addons){var u=e[n].addons[p].clickAnchor.call(t,a,l,o,d);if(u){if("boolean"==typeof u)return void i.preventDefault();"object"==typeof u&&(f=e.extend({},f,u))}}l&&o&&!d&&(t.__valueOrFn(a,t.opts.onClick.setSelected,f.setSelected)&&t.setSelected(e(i.target).parent()),t.__valueOrFn(a,t.opts.onClick.preventDefault,f.preventDefault)&&i.preventDefault(),t.__valueOrFn(a,t.opts.onClick.close,f.close)&&t.opts.offCanvas&&"function"==typeof t.close&&t.close())}),this.trigger("initAnchors:after")},_initMatchMedia:function(){var e=this;for(var t in this.mtch)!function(){var n=t,i=window.matchMedia(n);e._fireMatchMedia(n,i),i.addListener(function(t){e._fireMatchMedia(n,t)})}()},_fireMatchMedia:function(e,t){for(var n=t.matches?"yes":"no",i=0;i<this.mtch[e].length;i++)this.mtch[e][i][n].call(this)},_getOriginalMenuId:function(){var e=this.$menu.attr("id");return this.conf.clone&&e&&e.length&&(e=s.umm(e)),e},__api:function(){var t=this,n={};return e.each(this._api,function(e){var i=this;n[i]=function(){var e=t[i].apply(t,arguments);return"undefined"==typeof e?n:e}}),n},__valueOrFn:function(e,t,n){if("function"==typeof t){var i=t.call(e[0]);if("undefined"!=typeof i)return i}return"function"!=typeof t&&"undefined"!=typeof t||"undefined"==typeof n?t:n},__getPanelTitle:function(t,i){var s;return"function"==typeof this.opts.navbar.title&&(s=this.opts.navbar.title.call(t[0])),"undefined"==typeof s&&(s=t.data(a.title)),"undefined"!=typeof s?s:"string"==typeof i?this.i18n(i):this.i18n(e[n].defaults.navbar.title)},__refactorClass:function(e,t,n){return e.filter("."+t).removeClass(t).addClass(n)},__findAddBack:function(e,t){return e.find(t).add(e.filter(t))},__childAddBack:function(e,t){return e.children(t).add(e.filter(t))},__filterListItems:function(e){return e.not("."+s.listitem+"_divider").not("."+s.hidden)},__filterListItemAnchors:function(e){return this.__filterListItems(e).children("a").not("."+s.btn+"_next")},__openPanelWoAnimation:function(e){e.hasClass(s.panel+"_noanimation")||(e.addClass(s.panel+"_noanimation"),this.__transitionend(e,function(){e.removeClass(s.panel+"_noanimation")},this.conf.openingInterval),this.openPanel(e))},__transitionend:function(e,t,n){var i=!1,s=function(n){"undefined"!=typeof n&&n.target!=e[0]||(i||(e.off(r.transitionend),e.off(r.webkitTransitionEnd),t.call(e[0])),i=!0)};e.on(r.transitionend,s),e.on(r.webkitTransitionEnd,s),setTimeout(s,1.1*n)},__getUniqueId:function(){return s.mm(e[n].uniqueId++)},__hasClass:function(e,t){return(" "+e.className+" ").indexOf(" "+t+" ")>-1}},e.fn[n]=function(i,s){t(),i=e.extend(!0,{},e[n].defaults,i),s=e.extend(!0,{},e[n].configuration,s);var a=e();return this.each(function(){var t=e(this);if(!t.data(n)){var r=new e[n](t,i,s);r.$menu.data(n,r.__api()),a=a.add(r.$menu)}}),a},e[n].i18n=function(){var t={};return function(n,i){switch(typeof n){case"object":return"string"==typeof i&&("undefined"==typeof t[i]&&(t[i]={}),e.extend(t[i],n)),t;case"string":return"string"==typeof i&&"undefined"!=typeof t[i]?t[i][n]||n:n;case"undefined":default:return t}}}(),e[n].support={touch:"ontouchstart"in window||navigator.msMaxTouchPoints||!1,csstransitions:function(){return"undefined"==typeof Modernizr||"undefined"==typeof Modernizr.csstransitions||Modernizr.csstransitions}(),csstransforms:function(){return"undefined"==typeof Modernizr||"undefined"==typeof Modernizr.csstransforms||Modernizr.csstransforms}(),csstransforms3d:function(){return"undefined"==typeof Modernizr||"undefined"==typeof Modernizr.csstransforms3d||Modernizr.csstransforms3d}()};var s,a,r,l}}(jQuery);
!function(e){var t="mmenu",n="offCanvas";e[t].addons[n]={setup:function(){if(this.opts[n]){var o=this.opts[n],s=this.conf[n];r=e[t].glbl,this._api=e.merge(this._api,["open","close","setPage"]),"object"!=typeof o&&(o={}),o=this.opts[n]=e.extend(!0,{},e[t].defaults[n],o),"string"!=typeof s.page.selector&&(s.page.selector="> "+s.page.nodetype),this.vars.opened=!1;var a=[i.menu+"_offcanvas"];e[t].support.csstransforms||a.push(i["no-csstransforms"]),e[t].support.csstransforms3d||a.push(i["no-csstransforms3d"]),this.bind("initMenu:after",function(){var e=this;this._initBlocker(),this.setPage(r.$page),this["_initWindow_"+n](),this.$menu.addClass(a.join(" ")).parent("."+i.wrapper).removeClass(i.wrapper),this.$menu[s.menu.insertMethod](s.menu.insertSelector);var t=window.location.hash;if(t){var o=this._getOriginalMenuId();o&&o==t.slice(1)&&setTimeout(function(){e.open()},1e3)}}),this.bind("setPage:after",function(e){r.$blck.children("a").attr("href","#"+e.attr("id"))}),this.bind("open:start:sr-aria",function(){this.__sr_aria(this.$menu,"hidden",!1)}),this.bind("close:finish:sr-aria",function(){this.__sr_aria(this.$menu,"hidden",!0)}),this.bind("initMenu:after:sr-aria",function(){this.__sr_aria(this.$menu,"hidden",!0)}),this.bind("initBlocker:after:sr-text",function(){r.$blck.children("a").html(this.__sr_text(this.i18n(this.conf.screenReader.text.closeMenu)))})}},add:function(){i=e[t]._c,o=e[t]._d,s=e[t]._e,i.add("slideout page no-csstransforms3d"),o.add("style")},clickAnchor:function(e,t){var o=this;if(this.opts[n]){var s=this._getOriginalMenuId();if(s&&e.is('[href="#'+s+'"]')){if(t)return this.open(),!0;var a=e.closest("."+i.menu);if(a.length){var p=a.data("mmenu");if(p&&p.close)return p.close(),o.__transitionend(a,function(){o.open()},o.conf.transitionDuration),!0}return this.open(),!0}if(r.$page)return s=r.$page.first().attr("id"),s&&e.is('[href="#'+s+'"]')?(this.close(),!0):void 0}}},e[t].defaults[n]={blockUI:!0,moveBackground:!0},e[t].configuration[n]={menu:{insertMethod:"prependTo",insertSelector:"body"},page:{nodetype:"div",selector:null,noSelector:[],wrapIfNeeded:!0}},e[t].prototype.open=function(){if(this.trigger("open:before"),!this.vars.opened){var e=this;this._openSetup(),setTimeout(function(){e._openFinish()},this.conf.openingInterval),this.trigger("open:after")}},e[t].prototype._openSetup=function(){var t=this,a=this.opts[n];this.closeAllOthers(),r.$page.each(function(){e(this).data(o.style,e(this).attr("style")||"")}),r.$wndw.trigger(s.resize+"-"+n,[!0]);var p=[i.wrapper+"_opened"];a.blockUI&&p.push(i.wrapper+"_blocking"),"modal"==a.blockUI&&p.push(i.wrapper+"_modal"),a.moveBackground&&p.push(i.wrapper+"_background"),r.$html.addClass(p.join(" ")),setTimeout(function(){t.vars.opened=!0},this.conf.openingInterval),this.$menu.addClass(i.menu+"_opened")},e[t].prototype._openFinish=function(){var e=this;this.__transitionend(r.$page.first(),function(){e.trigger("open:finish")},this.conf.transitionDuration),this.trigger("open:start"),r.$html.addClass(i.wrapper+"_opening")},e[t].prototype.close=function(){if(this.trigger("close:before"),this.vars.opened){var t=this;this.__transitionend(r.$page.first(),function(){t.$menu.removeClass(i.menu+"_opened");var n=[i.wrapper+"_opened",i.wrapper+"_blocking",i.wrapper+"_modal",i.wrapper+"_background"];r.$html.removeClass(n.join(" ")),r.$page.each(function(){e(this).attr("style",e(this).data(o.style))}),t.vars.opened=!1,t.trigger("close:finish")},this.conf.transitionDuration),this.trigger("close:start"),r.$html.removeClass(i.wrapper+"_opening"),this.trigger("close:after")}},e[t].prototype.closeAllOthers=function(){r.$body.find("."+i.menu+"_offcanvas").not(this.$menu).each(function(){var n=e(this).data(t);n&&n.close&&n.close()})},e[t].prototype.setPage=function(t){this.trigger("setPage:before",t);var o=this,s=this.conf[n];t&&t.length||(t=r.$body.find(s.page.selector).not("."+i.menu).not("."+i.wrapper+"__blocker"),s.page.noSelector.length&&(t=t.not(s.page.noSelector.join(", "))),t.length>1&&s.page.wrapIfNeeded&&(t=t.wrapAll("<"+this.conf[n].page.nodetype+" />").parent())),t.addClass(i.page+" "+i.slideout).each(function(){e(this).attr("id",e(this).attr("id")||o.__getUniqueId())}),r.$page=t,this.trigger("setPage:after",t)},e[t].prototype["_initWindow_"+n]=function(){r.$wndw.off(s.keydown+"-"+n).on(s.keydown+"-"+n,function(e){if(r.$html.hasClass(i.wrapper+"_opened")&&9==e.keyCode)return e.preventDefault(),!1});var e=0;r.$wndw.off(s.resize+"-"+n).on(s.resize+"-"+n,function(t,n){if(1==r.$page.length&&(n||r.$html.hasClass(i.wrapper+"_opened"))){var o=r.$wndw.height();(n||o!=e)&&(e=o,r.$page.css("minHeight",o))}})},e[t].prototype._initBlocker=function(){var t=this,o=this.opts[n],a=this.conf[n];this.trigger("initBlocker:before"),o.blockUI&&(r.$blck||(r.$blck=e('<div class="'+i.wrapper+"__blocker "+i.slideout+'" />').append("<a />")),r.$blck.appendTo(a.menu.insertSelector).off(s.touchstart+"-"+n+" "+s.touchmove+"-"+n).on(s.touchstart+"-"+n+" "+s.touchmove+"-"+n,function(e){e.preventDefault(),e.stopPropagation(),r.$blck.trigger(s.mousedown+"-"+n)}).off(s.mousedown+"-"+n).on(s.mousedown+"-"+n,function(e){e.preventDefault(),r.$html.hasClass(i.wrapper+"_modal")||(t.closeAllOthers(),t.close())}),this.trigger("initBlocker:after"))};var i,o,s,r}(jQuery);
!function(t){var i="mmenu",n="screenReader";t[i].addons[n]={setup:function(){var a=this,o=this.opts[n],h=this.conf[n];s=t[i].glbl,"boolean"==typeof o&&(o={aria:o,text:o}),"object"!=typeof o&&(o={}),o=this.opts[n]=t.extend(!0,{},t[i].defaults[n],o),o.aria&&(this.bind("initAddons:after",function(){this.bind("initMenu:after",function(){this.trigger("initMenu:after:sr-aria")}),this.bind("initNavbar:after",function(){this.trigger("initNavbar:after:sr-aria",arguments[0])}),this.bind("openPanel:start",function(){this.trigger("openPanel:start:sr-aria",arguments[0])}),this.bind("close:start",function(){this.trigger("close:start:sr-aria")}),this.bind("close:finish",function(){this.trigger("close:finish:sr-aria")}),this.bind("open:start",function(){this.trigger("open:start:sr-aria")}),this.bind("initOpened:after",function(){this.trigger("initOpened:after:sr-aria")})}),this.bind("updateListview",function(){this.$pnls.find("."+e.listview).children().each(function(){a.__sr_aria(t(this),"hidden",t(this).is("."+e.hidden))})}),this.bind("openPanel:start",function(t){var i=this.$menu.find("."+e.panel).not(t).not(t.parents("."+e.panel)),n=t.add(t.find("."+e.listitem+"_vertical ."+e.listitem+"_opened").children("."+e.panel));this.__sr_aria(i,"hidden",!0),this.__sr_aria(n,"hidden",!1)}),this.bind("closePanel",function(t){this.__sr_aria(t,"hidden",!0)}),this.bind("initPanels:after",function(i){var n=i.find("."+e.btn).each(function(){a.__sr_aria(t(this),"owns",t(this).attr("href").replace("#",""))});this.__sr_aria(n,"haspopup",!0)}),this.bind("initNavbar:after",function(t){var i=t.children("."+e.navbar);this.__sr_aria(i,"hidden",!t.hasClass(e.panel+"_has-navbar"))}),o.text&&"parent"==this.opts.navbar.titleLink&&this.bind("initNavbar:after",function(t){var i=t.children("."+e.navbar),n=!!i.children("."+e.btn+"_prev").length;this.__sr_aria(i.children("."+e.title),"hidden",n)})),o.text&&(this.bind("initAddons:after",function(){this.bind("setPage:after",function(){this.trigger("setPage:after:sr-text",arguments[0])}),this.bind("initBlocker:after",function(){this.trigger("initBlocker:after:sr-text")})}),this.bind("initNavbar:after",function(t){var i=t.children("."+e.navbar),n=this.i18n(h.text.closeSubmenu);i.children("."+e.btn+"_prev").html(this.__sr_text(n))}),this.bind("initListview:after",function(t){var i=t.data(r.parent);if(i&&i.length){var n=i.children("."+e.btn+"_next"),s=this.i18n(h.text[n.parent().is("."+e.listitem+"_vertical")?"toggleSubmenu":"openSubmenu"]);n.append(a.__sr_text(s))}}))},add:function(){e=t[i]._c,r=t[i]._d,a=t[i]._e,e.add("sronly")},clickAnchor:function(t,i){}},t[i].defaults[n]={aria:!0,text:!0},t[i].configuration[n]={text:{closeMenu:"Close menu",closeSubmenu:"Close submenu",openSubmenu:"Open submenu",toggleSubmenu:"Toggle submenu"}},t[i].prototype.__sr_aria=function(t,i,n){t.prop("aria-"+i,n)[n?"attr":"removeAttr"]("aria-"+i,n)},t[i].prototype.__sr_role=function(t,i){t.prop("role",i)[i?"attr":"removeAttr"]("role",i)},t[i].prototype.__sr_text=function(t){return'<span class="'+e.sronly+'">'+t+"</span>"};var e,r,a,s}(jQuery);
!function(o){var t="mmenu",n="scrollBugFix";o[t].addons[n]={setup:function(){var r=this.opts[n];this.conf[n];i=o[t].glbl,o[t].support.touch&&this.opts.offCanvas&&this.opts.offCanvas.blockUI&&("boolean"==typeof r&&(r={fix:r}),"object"!=typeof r&&(r={}),r=this.opts[n]=o.extend(!0,{},o[t].defaults[n],r),r.fix&&(this.bind("open:start",function(){this.$pnls.children("."+e.panel+"_opened").scrollTop(0)}),this.bind("initMenu:after",function(){this["_initWindow_"+n]()})))},add:function(){e=o[t]._c,r=o[t]._d,s=o[t]._e},clickAnchor:function(o,t){}},o[t].defaults[n]={fix:!0},o[t].prototype["_initWindow_"+n]=function(){var t=this;i.$docu.off(s.touchmove+"-"+n).on(s.touchmove+"-"+n,function(o){i.$html.hasClass(e.wrapper+"_opened")&&o.preventDefault()});var r=!1;i.$body.off(s.touchstart+"-"+n).on(s.touchstart+"-"+n,"."+e.panels+"> ."+e.panel,function(o){i.$html.hasClass(e.wrapper+"_opened")&&(r||(r=!0,0===o.currentTarget.scrollTop?o.currentTarget.scrollTop=1:o.currentTarget.scrollHeight===o.currentTarget.scrollTop+o.currentTarget.offsetHeight&&(o.currentTarget.scrollTop-=1),r=!1))}).off(s.touchmove+"-"+n).on(s.touchmove+"-"+n,"."+e.panels+"> ."+e.panel,function(t){i.$html.hasClass(e.wrapper+"_opened")&&o(this)[0].scrollHeight>o(this).innerHeight()&&t.stopPropagation()}),i.$wndw.off(s.orientationchange+"-"+n).on(s.orientationchange+"-"+n,function(){t.$pnls.children("."+e.panel+"_opened").scrollTop(0).css({"-webkit-overflow-scrolling":"auto"}).css({"-webkit-overflow-scrolling":"touch"})})};var e,r,s,i}(jQuery);
!function(t){var e="mmenu",i="autoHeight";t[e].addons[i]={setup:function(){var h=this.opts[i];this.conf[i];if(a=t[e].glbl,"boolean"==typeof h&&h&&(h={height:"auto"}),"string"==typeof h&&(h={height:h}),"object"!=typeof h&&(h={}),h=this.opts[i]=t.extend(!0,{},t[e].defaults[i],h),"auto"==h.height||"highest"==h.height){this.bind("initMenu:after",function(){this.$menu.addClass(n.menu+"_autoheight")});var s=function(e){if(!this.opts.offCanvas||this.vars.opened){var i=Math.max(parseInt(this.$pnls.css("top"),10),0)||0,s=Math.max(parseInt(this.$pnls.css("bottom"),10),0)||0,a=0;this.$menu.addClass(n.menu+"_autoheight-measuring"),"auto"==h.height?(e=e||this.$pnls.children("."+n.panel+"_opened"),e.parent("."+n.listitem+"_vertical").length&&(e=e.parents("."+n.panel).not(function(){return t(this).parent("."+n.listitem+"_vertical").length})),e.length||(e=this.$pnls.children("."+n.panel)),a=e.first().outerHeight()):"highest"==h.height&&this.$pnls.children("."+n.panel).each(function(){var e=t(this);e.parent("."+n.listitem+"_vertical").length&&(e=e.parents("."+n.panel).not(function(){return t(this).parent("."+n.listitem+"_vertical").length})),a=Math.max(a,e.first().outerHeight())}),this.$menu.height(a+i+s).removeClass(n.menu+"_autoheight-measuring")}};this.opts.offCanvas&&this.bind("open:start",s),"highest"==h.height&&this.bind("initPanels:after",s),"auto"==h.height&&(this.bind("updateListview",s),this.bind("openPanel:start",s),this.bind("closePanel",s))}},add:function(){n=t[e]._c,h=t[e]._d,s=t[e]._e,s.add("resize")},clickAnchor:function(t,e){}},t[e].defaults[i]={height:"default"};var n,h,s,a}(jQuery);
!function(n){var t="mmenu",o="backButton";n[t].addons[o]={setup:function(){function e(){l=[c],this.$pnls.children("."+i.panel+"_opened-parent").add(s.$pnls.children("."+i.panel+"_opened")).each(function(){l.push("#"+n(this).attr("id"))})}if(this.opts.offCanvas){var s=this,h=this.opts[o];this.conf[o];a=n[t].glbl,"boolean"==typeof h&&(h={close:h}),"object"!=typeof h&&(h={}),h=n.extend(!0,{},n[t].defaults[o],h);var c="#"+this.$menu.attr("id");if(h.close){var l=[];this.bind("open:finish",function(){history.pushState(null,document.title,c)}),this.bind("open:finish",e),this.bind("openPanel:finish",e),this.bind("close:finish",function(){l=[],history.back(),history.pushState(null,document.title,location.pathname+location.search)}),n(window).on("popstate",function(t){if(s.vars.opened&&l.length){l=l.slice(0,-1);var o=l[l.length-1];o==c?s.close():(s.openPanel(n(o)),history.pushState(null,document.title,c))}})}h.open&&n(window).on("popstate",function(n){s.vars.opened||location.hash!=c||s.open()})}},add:function(){return window.history&&window.history.pushState?(i=n[t]._c,e=n[t]._d,void(s=n[t]._e)):void(n[t].addons[o].setup=function(){})},clickAnchor:function(n,t){}},n[t].defaults[o]={close:!1,open:!1};var i,e,s,a}(jQuery);
!function(e){var n="mmenu",i="columns";e[n].addons[i]={setup:function(){function l(e){var n=e.data(s.parent);if(n&&(n=n.closest("."+a.panel),n.length)){var i=n.attr("class");if(i&&(i=i.split(a.panel+"_columns-")[1]))for(i=parseInt(i.split(" ")[0],10)+1;i>0;){var l=this.$pnls.children("."+a.panel+"_columns-"+i);if(!l.length){i=-1;break}i++,l.removeClass(r).addClass(a.hidden)}}}var o=this.opts[i];this.conf[i];if(t=e[n].glbl,"boolean"==typeof o&&(o={add:o}),"number"==typeof o&&(o={add:!0,visible:o}),"object"!=typeof o&&(o={}),"number"==typeof o.visible&&(o.visible={min:o.visible,max:o.visible}),o=this.opts[i]=e.extend(!0,{},e[n].defaults[i],o),o.add){o.visible.min=Math.max(1,Math.min(6,o.visible.min)),o.visible.max=Math.max(o.visible.min,Math.min(6,o.visible.max));for(var d="",p="",m=0;m<=o.visible.max;m++)d+=" "+a.menu+"_columns-"+m,p+=" "+a.panel+"_columns-"+m;d.length&&(d=d.slice(1),p=p.slice(1));var r=p+" "+a.panel+"_opened "+a.panel+"_opened-parent "+a.panel+"_highest",c=function(n){var i=this.$pnls.children("."+a.panel+"_opened-parent").length;n.hasClass(a.panel+"_opened-parent")||i++,i=Math.min(o.visible.max,Math.max(o.visible.min,i)),this.$menu.removeClass(d).addClass(a.menu+"_columns-"+i),this.$pnls.children("."+a.panel).removeClass(p).filter("."+a.panel+"_opened-parent").add(n).slice(-o.visible.max).each(function(n){e(this).addClass(a.panel+"_columns-"+n)})};this.bind("openPanel:before",l),this.bind("openPanel:start",c)}},add:function(){a=e[n]._c,s=e[n]._d,l=e[n]._e},clickAnchor:function(e,n){}},e[n].defaults[i]={add:!1,visible:{min:1,max:3}};var a,s,l,t}(jQuery);
!function(t){var n="mmenu",e="counters";t[n].addons[e]={setup:function(){var s=this,c=this.opts[e];this.conf[e];if(d=t[n].glbl,"boolean"==typeof c&&(c={add:c,update:c}),"object"!=typeof c&&(c={}),c=this.opts[e]=t.extend(!0,{},t[n].defaults[e],c),this.bind("initListview:after",function(t){var n=this.conf.classNames[e].counter;this.__refactorClass(t.find("."+n),n,i.counter)}),c.add&&this.bind("initListview:after",function(n){var e;switch(c.addTo){case"panels":e=n;break;default:e=n.filter(c.addTo)}e.each(function(){var n=t(this).data(a.parent);n&&(n.find("."+i.counter).length||n.children("."+i.btn).prepend(t('<span class="'+i.counter+'" />')))})}),c.update){var o=function(n){n=n||this.$pnls.children("."+i.panel),n.each(function(){var n=t(this),e=n.data(a.parent);if(e){var d=e.find("."+i.counter);d.length&&(n=n.children("."+i.listview),n.length&&d.html(s.__filterListItems(n.children()).length))}})};this.bind("initListview:after",o),this.bind("updateListview",o)}},add:function(){i=t[n]._c,a=t[n]._d,s=t[n]._e,i.add("counter")},clickAnchor:function(t,n){}},t[n].defaults[e]={add:!1,addTo:"panels",count:!1},t[n].configuration.classNames[e]={counter:"Counter"};var i,a,s,d}(jQuery);
!function(i){var e="mmenu",t="dividers";i[e].addons[t]={setup:function(){var s=this,a=this.opts[t];this.conf[t];if(l=i[e].glbl,"boolean"==typeof a&&(a={add:a,fixed:a}),"object"!=typeof a&&(a={}),a=this.opts[t]=i.extend(!0,{},i[e].defaults[t],a),a.type&&this.bind("initMenu:after",function(){this.$menu.addClass(n.menu+"_"+t+"-"+a.type)}),a.add&&this.bind("initListview:after",function(e){var t;switch(a.addTo){case"panels":t=e;break;default:t=e.filter(a.addTo)}t.length&&(t.children("."+n.listitem+"_divider").remove(),t.find("."+n.listview).each(function(){var e="";s.__filterListItems(i(this).children()).each(function(){var t=i.trim(i(this).children("a, span").text()).slice(0,1).toLowerCase();t!=e&&t.length&&(e=t,i('<li class="'+n.listitem+" "+n.listitem+'_divider">'+t+"</li>").insertBefore(this))})}))}),a.fixed){this.bind("initPanels:after",function(){"undefined"==typeof this.$fixeddivider&&(this.$fixeddivider=i('<ul class="'+n.listview+" "+n.listview+'_fixeddivider"><li class="'+n.listitem+" "+n.listitem+'_divider"></li></ul>').appendTo(this.$pnls).children())});var o=function(e){if(e=e||this.$pnls.children("."+n.panel+"_opened"),!e.is(":hidden")){var t=e.find("."+n.listitem+"_divider").not("."+n.hidden),s=e.scrollTop()||0,d="";t.each(function(){i(this).position().top+s<s+1&&(d=i(this).text())}),this.$fixeddivider.text(d),this.$pnls[d.length?"addClass":"removeClass"](n.panel+"_dividers")}};this.bind("open:start",o),this.bind("openPanel:start",o),this.bind("updateListview",o),this.bind("initPanel:after",function(i){i.off(d.scroll+"-"+t+" "+d.touchmove+"-"+t).on(d.scroll+"-"+t+" "+d.touchmove+"-"+t,function(e){i.hasClass(n.panel+"_opened")&&o.call(s,i)})})}},add:function(){n=i[e]._c,s=i[e]._d,d=i[e]._e,d.add("scroll")},clickAnchor:function(i,e){}},i[e].defaults[t]={add:!1,addTo:"panels",fixed:!1,type:null};var n,s,d,l}(jQuery);
!function(e){function n(e,n,t){return e<n&&(e=n),e>t&&(e=t),e}function t(t,o,i){var r,p,d,f=this,u={events:"panleft panright",typeLower:"x",typeUpper:"X",open_dir:"right",close_dir:"left",negative:!1},c="width",l=u.open_dir,m=function(e){e<=t.maxStartPos&&(g=1)},h=function(){return e("."+s.slideout)},g=0,_=0,v=0,b=this.opts.extensions.all,w="undefined"==typeof b?"left":b.indexOf(s.menu+"_position-right")>-1?"right":b.indexOf(s.menu+"_position-top")>-1?"top":b.indexOf(s.menu+"_position-bottom")>-1?"bottom":"left",y="undefined"==typeof b?"back":b.indexOf(s.menu+"_position-top")>-1||b.indexOf(s.menu+"_position-bottom")>-1||b.indexOf(s.menu+"_position-front")>-1?"front":"back";switch(w){case"top":case"bottom":u.events="panup pandown",u.typeLower="y",u.typeUpper="Y",c="height"}switch(w){case"right":case"bottom":u.negative=!0,m=function(e){e>=i.$wndw[c]()-t.maxStartPos&&(g=1)}}switch(w){case"right":u.open_dir="left",u.close_dir="right";break;case"top":u.open_dir="down",u.close_dir="up";break;case"bottom":u.open_dir="up",u.close_dir="down"}switch(y){case"front":h=function(){return f.$menu}}var x,O=this.__valueOrFn(this.$menu,t.node,i.$page);"string"==typeof O&&(O=e(O));var $=new Hammer(O[0],this.opts[a].vendors.hammer);$.on("panstart",function(e){m(e.center[u.typeLower]),x=h(),l=u.open_dir}),$.on(u.events+" panend",function(e){g>0&&e.preventDefault()}),$.on(u.events,function(e){if(r=e["delta"+u.typeUpper],u.negative&&(r=-r),r!=_&&(l=r>=_?u.open_dir:u.close_dir),_=r,_>t.threshold&&1==g){if(i.$html.hasClass(s.wrapper+"_opened"))return;g=2,f._openSetup(),f.trigger("open:start"),i.$html.addClass(s.dragging),v=n(i.$wndw[c]()*o[c].perc,o[c].min,o[c].max)}2==g&&(p=n(_,10,v)-("front"==y?v:0),u.negative&&(p=-p),d="translate"+u.typeUpper+"("+p+"px )",x.css({"-webkit-transform":"-webkit-"+d,transform:d}))}),$.on("panend",function(e){2==g&&(i.$html.removeClass(s.dragging),x.css("transform",""),f[l==u.open_dir?"_openFinish":"close"]()),g=0})}function o(e,n,t,o){var i=this,p=e.data(r.parent);if(p){p=p.closest("."+s.panel);var d=new Hammer(e[0],i.opts[a].vendors.hammer),f=null;d.on("panright",function(e){f||(i.openPanel(p),f=setTimeout(function(){clearTimeout(f),f=null},i.conf.openingInterval+i.conf.transitionDuration))})}}var i="mmenu",a="drag";e[i].addons[a]={setup:function(){if(this.opts.offCanvas){var n=this.opts[a],s=this.conf[a];d=e[i].glbl,"boolean"==typeof n&&(n={menu:n,panels:n}),"object"!=typeof n&&(n={}),"boolean"==typeof n.menu&&(n.menu={open:n.menu}),"object"!=typeof n.menu&&(n.menu={}),"boolean"==typeof n.panels&&(n.panels={close:n.panels}),"object"!=typeof n.panels&&(n.panels={}),n=this.opts[a]=e.extend(!0,{},e[i].defaults[a],n),n.menu.open&&this.bind("setPage:after",function(){t.call(this,n.menu,s.menu,d)}),n.panels.close&&this.bind("initPanel:after",function(e){o.call(this,e,n.panels,s.panels,d)})}},add:function(){return"function"!=typeof Hammer||Hammer.VERSION<2?(e[i].addons[a].add=function(){},void(e[i].addons[a].setup=function(){})):(s=e[i]._c,r=e[i]._d,p=e[i]._e,void s.add("dragging"))},clickAnchor:function(e,n){}},e[i].defaults[a]={menu:{open:!1,maxStartPos:100,threshold:50},panels:{close:!1},vendors:{hammer:{}}},e[i].configuration[a]={menu:{width:{perc:.8,min:140,max:440},height:{perc:.8,min:140,max:880}},panels:{}};var s,r,p,d}(jQuery);
!function(t){var o="mmenu",e="dropdown";t[o].addons[e]={setup:function(){if(this.opts.offCanvas){var r=this,f=this.opts[e],p=this.conf[e];if(a=t[o].glbl,"boolean"==typeof f&&f&&(f={drop:f}),"object"!=typeof f&&(f={}),"string"==typeof f.position&&(f.position={of:f.position}),f=this.opts[e]=t.extend(!0,{},t[o].defaults[e],f),f.drop){var l;this.bind("initMenu:after",function(){if(this.$menu.addClass(i.menu+"_"+e),"string"!=typeof f.position.of){var o=this._getOriginalMenuId();o&&o.length&&(f.position.of='[href="#'+o+'"]')}"string"==typeof f.position.of&&(l=t(f.position.of),f.event=f.event.split(" "),1==f.event.length&&(f.event[1]=f.event[0]),"hover"==f.event[0]&&l.on(s.mouseenter+"-"+e,function(){r.open()}),"hover"==f.event[1]&&this.$menu.on(s.mouseleave+"-"+e,function(){r.close()}))}),this.bind("open:start",function(){this.$menu.data(n.style,this.$menu.attr("style")||""),a.$html.addClass(i.wrapper+"_dropdown")}),this.bind("close:finish",function(){this.$menu.attr("style",this.$menu.data(n.style)),a.$html.removeClass(i.wrapper+"_dropdown")});var h=function(t,o){var e=o[0],n=o[1],s="x"==t?"scrollLeft":"scrollTop",r="x"==t?"outerWidth":"outerHeight",h="x"==t?"left":"top",u="x"==t?"right":"bottom",d="x"==t?"width":"height",c="x"==t?"maxWidth":"maxHeight",m=null,v=a.$wndw[s](),w=l.offset()[h]-=v,x=w+l[r](),b=a.$wndw[d](),g=p.offset.button[t]+p.offset.viewport[t];if(f.position[t])switch(f.position[t]){case"left":case"bottom":m="after";break;case"right":case"top":m="before"}null===m&&(m=w+(x-w)/2<b/2?"after":"before");var $,y;return"after"==m?($="x"==t?w:x,y=b-($+g),e[h]=$+p.offset.button[t],e[u]="auto",f.tip&&n.push(i.menu+"_tip-"+("x"==t?"left":"top"))):($="x"==t?x:w,y=$-g,e[u]="calc( 100% - "+($-p.offset.button[t])+"px )",e[h]="auto",f.tip&&n.push(i.menu+"_tip-"+("x"==t?"right":"bottom"))),f.fitViewport&&(e[c]=Math.min(p[d].max,y)),[e,n]},u=function(t){if(this.vars.opened){this.$menu.attr("style",this.$menu.data(n.style));var o=[{},[]];o=h.call(this,"y",o),o=h.call(this,"x",o),this.$menu.css(o[0]),f.tip&&this.$menu.removeClass(i.tipleft+" "+i.tipright+" "+i.tiptop+" "+i.tipbottom).addClass(o[1].join(" "))}};this.bind("open:start",u),a.$wndw.on(s.resize+"-"+e,function(t){u.call(r)}),this.opts.offCanvas.blockUI||a.$wndw.on(s.scroll+"-"+e,function(t){u.call(r)})}}},add:function(){i=t[o]._c,n=t[o]._d,s=t[o]._e,i.add("dropdown"),s.add("mouseenter mouseleave resize scroll")},clickAnchor:function(t,o){}},t[o].defaults[e]={drop:!1,fitViewport:!0,event:"click",position:{},tip:!0},t[o].configuration[e]={offset:{button:{x:-5,y:5},viewport:{x:20,y:20}},height:{max:880},width:{max:440}};var i,n,s,a}(jQuery);
!function(s){var t="mmenu",i="fixedElements";s[t].addons[i]={setup:function(){if(this.opts.offCanvas){var n=(this.opts[i],this.conf[i]);c=s[t].glbl;var o=function(t){var o=this.conf.classNames[i].fixed,f=t.find("."+o);this.__refactorClass(f,o,e.slideout),f[n.elemInsertMethod](n.elemInsertSelector);var a=this.conf.classNames[i].sticky,r=t.find("."+a);this.__refactorClass(r,a,e.sticky),r=t.find("."+e.sticky),r.length&&(this.bind("open:start",function(){if("hidden"==c.$html.css("overflow")){var t=c.$wndw.scrollTop()+n.sticky.offset;r.each(function(){s(this).css("top",parseInt(s(this).css("top"),10)+t)})}}),this.bind("close:finish",function(){r.css("top","")}))};this.bind("setPage:after",o)}},add:function(){e=s[t]._c,n=s[t]._d,o=s[t]._e,e.add("sticky")},clickAnchor:function(s,t){}},s[t].configuration[i]={sticky:{offset:0},elemInsertMethod:"appendTo",elemInsertSelector:"body"},s[t].configuration.classNames[i]={fixed:"Fixed",sticky:"Sticky"};var e,n,o,c}(jQuery);
!function(a){var n="mmenu",t="iconbar";a[n].addons[t]={setup:function(){function s(a){f.removeClass(e.iconbar+"__tab_selected");var n=f.filter('[href="#'+a.attr("id")+'"]');if(n.length)n.addClass(e.iconbar+"__tab_selected");else{var t=a.data(i.parent);t&&t.length&&s(t.closest("."+e.panel))}}var c=this,d=this.opts[t];this.conf[t];if(r=a[n].glbl,d instanceof Array&&(d={add:!0,top:d}),d.add){var l=null;if(a.each(["top","bottom"],function(n,t){var i=d[t];i instanceof Array||(i=[i]);for(var o=a('<div class="'+e.iconbar+"__"+t+'" />'),r=0,s=i.length;r<s;r++)o.append(i[r]);o.children().length&&(l||(l=a('<div class="'+e.iconbar+'" />')),l.append(o))}),l&&(this.bind("initMenu:after",function(){var a=e.menu+"_iconbar";d.size&&(a+=" "+e.menu+"_iconbar-"+d.size),this.$menu.addClass(a).prepend(l)}),"tabs"==d.type)){l.addClass(e.iconbar+"_tabs");var f=l.find("a");f.on(o.click+"-"+t,function(n){var t=a(this);if(t.hasClass(e.iconbar+"__tab_selected"))return void n.stopImmediatePropagation();try{var i=a(t.attr("href"));i.hasClass(e.panel)&&(n.preventDefault(),n.stopImmediatePropagation(),c.__openPanelWoAnimation(i))}catch(o){}}),this.bind("openPanel:start",s)}}},add:function(){e=a[n]._c,i=a[n]._d,o=a[n]._e,e.add(t)},clickAnchor:function(a,n){}},a[n].defaults[t]={add:!1,top:[],bottom:[]},a[n].configuration[t]={};var e,i,o,r}(jQuery);
!function(e){var i="mmenu",n="iconPanels";e[i].addons[n]={setup:function(){var t=this,l=this.opts[n],r=(this.conf[n],!1);s=e[i].glbl,"boolean"==typeof l&&(l={add:l}),"number"!=typeof l&&"string"!=typeof l||(l={add:!0,visible:l}),"object"!=typeof l&&(l={}),"first"==l.visible&&(r=!0,l.visible=1),l=this.opts[n]=e.extend(!0,{},e[i].defaults[n],l),l.visible=Math.min(3,Math.max(1,l.visible)),l.visible++;var d="";if(!r){for(var o=0;o<=l.visible;o++)d+=" "+a.panel+"_iconpanel-"+o;d.length&&(d=d.slice(1))}if(l.add){var c=function(i){if(!i.parent("."+a.listitem+"_vertical").length){var n=t.$pnls.children("."+a.panel);r?n.removeClass(a.panel+"_iconpanel-first").first().addClass(a.panel+"_iconpanel-first"):n.removeClass(d).filter("."+a.panel+"_opened-parent").removeClass(a.hidden).not(function(){return e(this).parent("."+a.listitem+"_vertical").length}).add(i).slice(-l.visible).each(function(i){e(this).addClass(a.panel+"_iconpanel-"+i)})}};this.bind("initMenu:after",function(){var e=[a.menu+"_iconpanel"];l.size&&e.push(a.menu+"_iconpanel-"+l.size),l.hideNavbar&&e.push(a.menu+"_hidenavbar"),l.hideDivider&&e.push(a.menu+"_hidedivider"),this.$menu.addClass(e.join(" "))}),this.bind("openPanel:start",c),this.bind("initPanels:after",function(e){c.call(t,t.$pnls.children("."+a.panel+"_opened"))}),this.bind("initListview:after",function(e){!l.blockPanel||e.parent("."+a.listitem+"_vertical").length||e.children("."+a.panel+"__blocker").length||e.prepend('<a href="#'+e.closest("."+a.panel).attr("id")+'" class="'+a.panel+'__blocker" />')})}},add:function(){a=e[i]._c,t=e[i]._d,l=e[i]._e},clickAnchor:function(e,i){}},e[i].defaults[n]={add:!1,blockPanel:!0,hideDivider:!1,hideNavbar:!0,visible:3};var a,t,l,s}(jQuery);
!function(n){function e(e,t){e=e||this.$pnls.children("."+i.panel+"_opened");var a=n(),s=this.$menu.children("."+i.mm("navbars_top")+", ."+i.mm("navbars_bottom")).children("."+i.navbar);s.find(r).filter(":focus").length||("default"==t&&(a=e.children("."+i.listview).find("a[href]").not("."+i.hidden),a.length||(a=e.find(r).not("."+i.hidden)),a.length||(a=s.find(r).not("."+i.hidden))),a.length||(a=this.$menu.children("."+i.tabstart)),a.first().focus())}var t="mmenu",a="keyboardNavigation";n[t].addons[a]={setup:function(){if(!n[t].support.touch){var s=this.opts[a];this.conf[a];if(d=n[t].glbl,"boolean"!=typeof s&&"string"!=typeof s||(s={enable:s}),"object"!=typeof s&&(s={}),s=this.opts[a]=n.extend(!0,{},n[t].defaults[a],s),s.enable){var o=n('<button class="'+i.tabstart+'" />'),r=n('<button class="'+i.tabend+'" />'),c=n('<button class="'+i.tabend+'" />');this.bind("initMenu:after",function(){s.enhance&&this.$menu.addClass(i.menu+"_keyboardfocus"),this["_initWindow_"+a](s.enhance)}),this.bind("initOpened:before",function(){this.$menu.prepend(o).append(r).children("."+i.mm("navbars-top")+", ."+i.mm("navbars-bottom")).children("."+i.navbar).children("a."+i.title).attr("tabindex",-1)}),this.bind("initBlocker:after",function(){d.$blck.append(c).children("a").addClass(i.tabstart)}),this.bind("open:finish",function(){e.call(this,null,s.enable)}),this.bind("openPanel:finish",function(n){e.call(this,n,s.enable)}),this.bind("initOpened:after:sr-aria",function(){var n=this.$menu.add(d.$blck).children("."+i.tabstart+", ."+i.tabend);this.__sr_aria(n,"hidden",!0),this.__sr_role(n,"presentation")})}}},add:function(){i=n[t]._c,s=n[t]._d,o=n[t]._e,i.add("tabstart tabend"),o.add("focusin keydown")},clickAnchor:function(n,e){}},n[t].defaults[a]={enable:!1,enhance:!1},n[t].configuration[a]={},n[t].prototype["_initWindow_"+a]=function(e){d.$wndw.off(o.keydown+"-offCanvas"),d.$wndw.off(o.focusin+"-"+a).on(o.focusin+"-"+a,function(e){if(d.$html.hasClass(i.wrapper+"_opened")){var t=n(e.target);if(t.is("."+i.tabend)){var a=n();t.parent().is("."+i.menu)&&d.$blck&&(a=d.$blck),t.parent().is("."+i.wrapper+"__blocker")&&(a=d.$body.find("."+i.menu+"_offcanvas").filter("."+i.menu+"_opened")),a.length||(a=t.parent()),a.children("."+i.tabstart).focus()}}}),d.$wndw.off(o.keydown+"-"+a).on(o.keydown+"-"+a,function(e){var t=n(e.target),a=t.closest("."+i.menu);if(a.length){a.data("mmenu");if(t.is("input, textarea"));else switch(e.keyCode){case 13:(t.is(".mm-toggle")||t.is(".mm-check"))&&t.trigger(o.click);break;case 32:case 37:case 38:case 39:case 40:e.preventDefault()}}}),e&&d.$wndw.off(o.keydown+"-"+a).on(o.keydown+"-"+a,function(e){var t=n(e.target),a=t.closest("."+i.menu);if(a.length){var o=a.data("mmenu");if(t.is("input"))switch(e.keyCode){case 27:t.val("")}else switch(e.keyCode){case 8:var d=a.find("."+i.panel+"_opened").data(s.parent);d&&d.length&&o.openPanel(d.closest("."+i.panel));break;case 27:a.hasClass(i.menu+"_offcanvas")&&o.close()}}})};var i,s,o,d,r="input, select, textarea, button, label, a[href]"}(jQuery);
!function(n){var e="mmenu",i="lazySubmenus";n[e].addons[i]={setup:function(){var t=this.opts[i];this.conf[i];a=n[e].glbl,"boolean"==typeof t&&(t={load:t}),"object"!=typeof t&&(t={}),t=this.opts[i]=n.extend(!0,{},n[e].defaults[i],t),t.load&&(this.bind("initMenu:after",function(){this.$pnls.find("li").children(this.conf.panelNodetype).not("."+l.inset).not("."+l.nolistview).not("."+l.nopanel).addClass(l.panel+"_lazysubmenu "+l.nolistview+" "+l.nopanel)}),this.bind("initPanels:before",function(n){n=n||this.$pnls.children(this.conf.panelNodetype),this.__findAddBack(n,"."+l.panel+"_lazysubmenu").not("."+l.panel+"_lazysubmenu ."+l.panel+"_lazysubmenu").removeClass(l.panel+"_lazysubmenu "+l.nolistview+" "+l.nopanel)}),this.bind("initOpened:before",function(){var n=this.$pnls.find("."+this.conf.classNames.selected).parents("."+l.panel+"_lazysubmenu");n.length&&(n.removeClass(l.panel+"_lazysubmenu "+l.nolistview+" "+l.nopanel),this.initPanels(n.last()))}),this.bind("openPanel:before",function(n){var e=this.__findAddBack(n,"."+l.panel+"_lazysubmenu").not("."+l.panel+"_lazysubmenu ."+l.panel+"_lazysubmenu");e.length&&this.initPanels(e)}))},add:function(){l=n[e]._c,t=n[e]._d,s=n[e]._e},clickAnchor:function(n,e){}},n[e].defaults[i]={load:!1},n[e].configuration[i]={};var l,t,s,a}(jQuery);
!function(n){var t="mmenu",a="navbars";n[t].addons[a]={setup:function(){var o=this,r=this.opts[a],i=this.conf[a];if(s=n[t].glbl,"undefined"!=typeof r){r instanceof Array||(r=[r]);var c={},d={};r.length&&(n.each(r,function(s){var f=r[s];"boolean"==typeof f&&f&&(f={}),"object"!=typeof f&&(f={}),"undefined"==typeof f.content&&(f.content=["prev","title"]),f.content instanceof Array||(f.content=[f.content]),f=n.extend(!0,{},o.opts.navbar,f);var l=n('<div class="'+e.navbar+'" />'),u=f.height;"number"!=typeof u?u=1:(u=Math.min(4,Math.max(1,u)),u>1&&l.addClass(e.navbar+"_size-"+u));var v=f.position;switch(v){case"bottom":break;default:v="top"}c[v]||(c[v]=0),c[v]+=u,d[v]||(d[v]=n('<div class="'+e.navbars+"_"+v+'" />')),d[v].append(l);for(var p=0,b=f.content.length;p<b;p++){var h=n[t].addons[a][f.content[p]]||null;h?h.call(o,l,f,i):(h=f.content[p],h instanceof n||(h=n(f.content[p])),l.append(h))}var m=n[t].addons[a][f.type]||null;m&&m.call(o,l,f,i),l.children("."+e.btn).length&&l.addClass(e.navbar+"_has-btns")}),this.bind("initMenu:after",function(){for(var n in c)this.$menu.addClass(e.menu+"_navbar_"+n+"-"+c[n]),this.$menu["bottom"==n?"append":"prepend"](d[n])}))}},add:function(){e=n[t]._c,o=n[t]._d,r=n[t]._e,e.add(a)},clickAnchor:function(n,t){}},n[t].configuration[a]={breadcrumbs:{separator:"/",removeFirst:!1}},n[t].configuration.classNames[a]={};var e,o,r,s}(jQuery);
!function(t){function e(t){a&&a.length&&a.is(":visible")&&o.$html.add(o.$body).animate({scrollTop:a.offset().top+t}),a=!1}function i(t){try{return!("#"==t||"#"!=t.slice(0,1)||!o.$page.find(t).length)}catch(e){return!1}}var n="mmenu",s="pageScroll";t[n].addons[s]={setup:function(){var l=this,a=this.opts[s],c=this.conf[s];if(o=t[n].glbl,"boolean"==typeof a&&(a={scroll:a}),a=this.opts[s]=t.extend(!0,{},t[n].defaults[s],a),a.scroll&&this.bind("close:finish",function(){e(c.scrollOffset)}),a.update){var l=this,d=[],h=[];l.bind("initListview:after",function(e){l.__filterListItemAnchors(e.find("."+r.listview).children("li")).each(function(){var e=t(this).attr("href");i(e)&&d.push(e)}),h=d.reverse()});var p=-1;o.$wndw.on(f.scroll+"-"+s,function(e){for(var i=o.$wndw.scrollTop(),n=0;n<h.length;n++)if(t(h[n]).offset().top<i+c.updateOffset){p!==n&&(p=n,l.setSelected(l.__filterListItemAnchors(l.$pnls.children("."+r.panel+"_opened").find("."+r.listview).children("li")).filter('[href="'+h[n]+'"]').parent()));break}})}},add:function(){r=t[n]._c,l=t[n]._d,f=t[n]._e},clickAnchor:function(n,l,f){if(a=!1,l&&f&&this.opts.offCanvas&&this.opts[s].scroll&&o.$page&&o.$page.length){var c=n.attr("href");if(i(c)){if(a=t(c),!this.$menu.is("."+r.menu+"_sidebar-expanded")||!o.$html.is("."+r.wrapper+"_sidebar-expanded"))return{close:!0};e(this.conf[s].scrollOffset)}}}},t[n].defaults[s]={scroll:!1,update:!1},t[n].configuration[s]={scrollOffset:0,updateOffset:50};var r,l,f,o,a=!1}(jQuery);
!function(t){var e="mmenu",n="rtl";t[e].addons[n]={setup:function(){var u=this.opts[n];this.conf[n];i=t[e].glbl,"object"!=typeof u&&(u={use:u}),u=this.opts[n]=t.extend(!0,{},t[e].defaults[n],u),"boolean"!=typeof u.use&&(u.use="rtl"==(i.$html.attr("dir")||"").toLowerCase()),u.use&&this.bind("initMenu:after",function(){this.$menu.addClass(s.menu+"_rtl")})},add:function(){s=t[e]._c,u=t[e]._d,o=t[e]._e},clickAnchor:function(t,e){}},t[e].defaults[n]={use:"detect"};var s,u,o,i}(jQuery);
!function(e){function n(e,n){if(n)for(var s in n)e.attr(s,n[s])}function s(e){switch(e){case 9:case 16:case 17:case 18:case 37:case 38:case 39:case 40:return!0}return!1}var a="mmenu",t="searchfield";e[a].addons[t]={setup:function(){var n=this,s=this.opts[t],l=this.conf[t];r=e[a].glbl,"boolean"==typeof s&&(s={add:s}),"object"!=typeof s&&(s={}),"boolean"==typeof s.panel&&(s.panel={add:s.panel}),"object"!=typeof s.panel&&(s.panel={}),s.add&&("panel"==s.addTo&&(s.panel.add=!0),s.panel.add&&(s.showSubPanels=!1,s.panel.splash&&(s.cancel=!0)),s=this.opts[t]=e.extend(!0,{},e[a].defaults[t],s),l=this.conf[t]=e.extend(!0,{},e[a].configuration[t],l),this.bind("close:start",function(){this.$menu.find("."+i.searchfield).children("input").blur()}),this.bind("initPanels:after",function(a){var t=e();s.panel.add&&(t=this._initSearchPanel(a));var i;switch(s.addTo){case"panels":i=a;break;case"panel":i=t;break;default:i=this.$menu.find(s.addTo)}if(i.each(function(){var a=n._initSearchfield(e(this));s.search&&a.length&&n._initSearching(a)}),s.noResults){var l=s.panel.add?t:a;l.each(function(){n._initNoResultsMsg(e(this))})}}))},add:function(){i=e[a]._c,l=e[a]._d,d=e[a]._e,i.add("searchfield"),l.add("searchfield"),d.add("input focus blur")},clickAnchor:function(e,n){if(e.hasClass(i.searchfield+"__btn")){if(e.hasClass(i.btn+"_close")){var s=e.closest("."+i.searchfield).find("input");return s.val(""),this.search(s),!0}if(e.hasClass(i.btn+"_next"))return e.closest("."+i.searchfield).submit(),!0}}},e[a].defaults[t]={add:!1,addTo:"panels",noResults:"No results found.",placeholder:"Search",panel:{add:!1,dividers:!0,fx:"none",id:null,splash:null,title:"Search"},search:!0,showTextItems:!1,showSubPanels:!0},e[a].configuration[t]={clear:!1,form:!1,input:!1,submit:!1};var i,l,d,r;e[a].prototype._initSearchPanel=function(n){var s=this.opts[t];this.conf[t];if(this.$pnls.children("."+i.panel+"_search").length)return e();var a=e('<div class="'+i.panel+'_search " />').append("<ul />").appendTo(this.$pnls);switch(s.panel.id&&a.attr("id",s.panel.id),s.panel.title&&a.attr("data-mm-title",s.panel.title),s.panel.fx){case!1:break;case"none":a.addClass(i.panel+"_noanimation");break;default:a.addClass(i.panel+"_fx-"+s.panel.fx)}return s.panel.splash&&a.append('<div class="'+i.panel+'__searchsplash">'+s.panel.splash+"</div>"),this._initPanels(a),a},e[a].prototype._initSearchfield=function(s){var a=this.opts[t],l=this.conf[t];if(s.parent("."+i.listitem+"_vertical").length)return e();if(s.find("."+i.searchfield).length)return e();var d=e("<"+(l.form?"form":"div")+' class="'+i.searchfield+'" />'),r=e('<div class="'+i.searchfield+'__input" />'),h=e('<input placeholder="'+this.i18n(a.placeholder)+'" type="text" autocomplete="off" />');return r.append(h).appendTo(d),s.hasClass(i.searchfield)?s.replaceWith(d):(s.prepend(d),s.hasClass(i.panel)&&s.addClass(i.panel+"_has-searchfield")),n(h,l.input),l.clear&&e('<a class="'+i.btn+" "+i.btn+"_close "+i.searchfield+'__btn" href="#" />').appendTo(r),n(d,l.form),l.form&&l.submit&&!l.clear&&e('<a class="'+i.btn+" "+i.btn+"_next "+i.searchfield+'__btn" href="#" />').appendTo(r),a.cancel&&e('<a href="#" class="'+i.searchfield+'__cancel">'+this.i18n("cancel")+"</a>").appendTo(d),d},e[a].prototype._initSearching=function(n){var a=this,r=this.opts[t],h=(this.conf[t],{});n.closest("."+i.panel+"_search").length?(h.$pnls=this.$pnls.find("."+i.panel),h.$nrsp=n.closest("."+i.panel)):n.closest("."+i.panel).length?(h.$pnls=n.closest("."+i.panel),h.$nrsp=h.$pnls):(h.$pnls=this.$pnls.find("."+i.panel),h.$nrsp=this.$menu),h.$pnls=h.$pnls.not(function(){return e(this).parent("."+i.listitem+"_vertical").length}),r.panel.add&&(h.$pnls=h.$pnls.not("."+i.panel+"_search"));var c=n.find("input"),p=n.find("."+i.searchfield+"__cancel"),o=this.$pnls.children("."+i.panel+"_search"),f=h.$pnls.find("."+i.listitem);h.$itms=f.not("."+i.listitem+"_divider"),h.$dvdr=f.filter("."+i.listitem+"_divider"),r.panel.add&&r.panel.splash&&c.off(d.focus+"-"+t+"-splash").on(d.focus+"-"+t+"-splash",function(e){a.openPanel(o)}),r.cancel&&(c.off(d.focus+"-"+t+"-cancel").on(d.focus+"-"+t+"-cancel",function(e){p.addClass(i.searchfield+"__cancel-active")}),p.off(d.click+"-"+t+"-splash").on(d.click+"-"+t+"-splash",function(n){n.preventDefault(),e(this).removeClass(i.searchfield+"__cancel-active"),o.hasClass(i.panel+"_opened")&&a.openPanel(a.$pnls.children("."+i.panel+"_opened-parent").last())})),r.panel.add&&"panel"==r.addTo&&this.bind("openPanel:finish",function(e){e[0]===o[0]&&c.focus()}),c.data(l.searchfield,h).off(d.input+"-"+t).on(d.input+"-"+t,function(e){s(e.keyCode)||a.search(c)}),this.search(c)},e[a].prototype._initNoResultsMsg=function(n){var s=this.opts[t];this.conf[t];if(n.closest("."+i.panel).length||(n=this.$pnls.children("."+i.panel).first()),!n.children("."+i.panel+"__noresultsmsg").length){var a=n.children("."+i.listview).first(),l=e('<div class="'+i.panel+"__noresultsmsg "+i.hidden+'" />').append(this.i18n(s.noResults));a.length?l.insertAfter(a):l.prependTo(n)}},e[a].prototype.search=function(n,s){var a=this,d=this.opts[t];this.conf[t];n=n||this.$menu.find("."+i.searchfield).chidren("input").first(),s=s||n.val(),s=s.toLowerCase().trim();var r="a",h="a, span",c=n.data(l.searchfield),p=n.closest("."+i.searchfield),o=p.find("."+i.btn),f=this.$pnls.children("."+i.panel+"_search"),u=c.$pnls,_=c.$itms,v=c.$dvdr,m=c.$nrsp;if(_.removeClass(i.listitem+"_nosubitems").find("."+i.btn+"_fullwidth-search").removeClass(i.btn+"_fullwidth-search "+i.btn+"_fullwidth"),f.children("."+i.listview).empty(),u.scrollTop(0),s.length){if(_.add(v).addClass(i.hidden),_.each(function(){var n=e(this),a=r;(d.showTextItems||d.showSubPanels&&n.find("."+i.btn+"_next"))&&(a=h),n.children(a).not("."+i.btn+"_next").text().toLowerCase().indexOf(s)>-1&&n.removeClass(i.hidden)}),d.panel.add){var b=e();u.each(function(){var n=a.__filterListItems(e(this).find("."+i.listitem)).clone(!0);n.length&&(d.panel.dividers&&(b=b.add('<li class="'+i.listitem+" "+i.listitem+'_divider">'+e(this).find("."+i.navbar+"__title").text()+"</li>")),b=b.add(n))}),b.find("."+i.mm("toggle")).remove().end().find("."+i.mm("check")).remove().end().find("."+i.btn).remove(),f.children("."+i.listview).append(b),this.openPanel(f)}else d.showSubPanels&&u.each(function(n){var s=e(this);a.__filterListItems(s.find("."+i.listitem)).each(function(){var n=e(this),s=n.data(l.child);s&&s.find("."+i.listview).children().removeClass(i.hidden)})}),e(u.get().reverse()).each(function(s){var t=e(this),d=t.data(l.parent);d&&(a.__filterListItems(t.find("."+i.listitem)).length?d.hasClass(i.hidden)&&d.removeClass(i.hidden).children("."+i.btn+"_next").not("."+i.btn+"_fullwidth").addClass(i.btn+"_fullwidth").addClass(i.btn+"_fullwidth-search"):n.closest("."+i.panel).length||((t.hasClass(i.panel+"_opened")||t.hasClass(i.panel+"_opened-parent"))&&setTimeout(function(){a.openPanel(d.closest("."+i.panel))},(s+1)*(1.5*a.conf.openingInterval)),d.addClass(i.listitem+"_nosubitems")))}),this.__filterListItems(u.find("."+i.listitem)).each(function(){e(this).prevAll("."+i.listitem+"_divider").first().removeClass(i.hidden)});o.removeClass(i.hidden),m.find("."+i.panel+"__noresultsmsg")[_.not("."+i.hidden).length?"addClass":"removeClass"](i.hidden),d.panel.add&&(d.panel.splash&&f.find("."+i.panel+"__searchsplash").addClass(i.hidden),_.add(v).removeClass(i.hidden))}else _.add(v).removeClass(i.hidden),o.addClass(i.hidden),m.find("."+i.panel+"__noresultsmsg").addClass(i.hidden),d.panel.add&&(d.panel.splash?f.find("."+i.panel+"__searchsplash").removeClass(i.hidden):n.closest("."+i.panel+"_search").length||this.openPanel(this.$pnls.children("."+i.panel+"_opened-parent").last()));this.trigger("updateListview")}}(jQuery);
!function(e){var a="mmenu",n="sectionIndexer";e[a].addons[n]={setup:function(){var r=this,d=this.opts[n];this.conf[n];s=e[a].glbl,"boolean"==typeof d&&(d={add:d}),"object"!=typeof d&&(d={}),d=this.opts[n]=e.extend(!0,{},e[a].defaults[n],d);var h=null;this.bind("initPanels:after",function(a){if(d.add){var s;switch(d.addTo){case"panels":s=a;break;default:s=e(d.addTo,this.$menu).filter("."+i.panel)}s.find("."+i.listitem+"_divider").closest("."+i.panel).addClass(i.panel+"_has-sectionindexer"),h||(h=e('<div class="'+i.sectionindexer+'" />').prependTo(this.$menu).append('<a href="#a">a</a><a href="#b">b</a><a href="#c">c</a><a href="#d">d</a><a href="#e">e</a><a href="#f">f</a><a href="#g">g</a><a href="#h">h</a><a href="#i">i</a><a href="#j">j</a><a href="#k">k</a><a href="#l">l</a><a href="#m">m</a><a href="#n">n</a><a href="#o">o</a><a href="#p">p</a><a href="#q">q</a><a href="#r">r</a><a href="#s">s</a><a href="#t">t</a><a href="#u">u</a><a href="#v">v</a><a href="#w">w</a><a href="#x">x</a><a href="#y">y</a><a href="#z">z</a>'),h.on(t.mouseover+"-"+n+" "+t.touchstart+"-"+n,"a",function(a){var n=e(a.target).attr("href").slice(1),t=r.$pnls.children("."+i.panel+"_opened"),s=t.find("."+i.listview),d=-1,h=t.scrollTop();t.scrollTop(0),s.children("."+i.listitem+"_divider").not("."+i.hidden).each(function(){d<0&&n==e(this).text().slice(0,1).toLowerCase()&&(d=e(this).position().top)}),t.scrollTop(d>-1?d:h)}));var o=function(e){e=e||this.$pnls.children("."+i.panel+"_opened"),this.$menu[(e.hasClass(i.panel+"_has-sectionindexer")?"add":"remove")+"Class"](i.menu+"_has-sectionindexer")};this.bind("openPanel:start",o),this.bind("initPanels:after",o)}})},add:function(){i=e[a]._c,r=e[a]._d,t=e[a]._e,i.add("sectionindexer"),t.add("mouseover")},clickAnchor:function(e,a){if(e.parent().is("."+i.indexer))return!0}},e[a].defaults[n]={add:!1,addTo:"panels"};var i,r,t,s}(jQuery);
!function(e){var t="mmenu",n="setSelected";e[t].addons[n]={setup:function(){var a=this,r=this.opts[n];this.conf[n];if(l=e[t].glbl,"boolean"==typeof r&&(r={hover:r,parent:r}),"object"!=typeof r&&(r={}),r=this.opts[n]=e.extend(!0,{},e[t].defaults[n],r),"detect"==r.current){var d=function(e){e=e.split("?")[0].split("#")[0];var t=a.$menu.find('a[href="'+e+'"], a[href="'+e+'/"]');t.length?a.setSelected(t.parent(),!0):(e=e.split("/").slice(0,-1),e.length&&d(e.join("/")))};this.bind("initMenu:after",function(){d(window.location.href)})}else r.current||this.bind("initListview:after",function(e){e.find("."+i.listview).children("."+i.listitem+"_selected").removeClass(i.listitem+"_selected")});r.hover&&this.bind("initMenu:after",function(){this.$menu.addClass(i.menu+"_selected-hover")}),r.parent&&(this.bind("openPanel:finish",function(e){this.$pnls.find("."+i.listview).find("."+i.listitem+"_selected-parent").removeClass(i.listitem+"_selected-parent");for(var t=e.data(s.parent);t;)t.not("."+i.listitem+"_vertical").addClass(i.listitem+"_selected-parent"),t=t.closest("."+i.panel).data(s.parent)}),this.bind("initMenu:after",function(){this.$menu.addClass(i.menu+"_selected-parent")}))},add:function(){i=e[t]._c,s=e[t]._d,a=e[t]._e},clickAnchor:function(e,t){}},e[t].defaults[n]={current:!0,hover:!1,parent:!1};var i,s,a,l}(jQuery);
!function(e){var d="mmenu",s="sidebar";e[d].addons[s]={setup:function(){if(this.opts.offCanvas){var n=this.opts[s];this.conf[s];l=e[d].glbl,("string"==typeof n||"boolean"==typeof n&&n||"number"==typeof n)&&(n={expanded:n}),"object"!=typeof n&&(n={}),"boolean"==typeof n.collapsed&&n.collapsed&&(n.collapsed="all"),"string"!=typeof n.collapsed&&"number"!=typeof n.collapsed||(n.collapsed={use:n.collapsed}),"object"!=typeof n.collapsed&&(n.collapsed={}),"number"==typeof n.collapsed.use&&(n.collapsed.use="(min-width:"+n.collapsed.use+"px)"),"boolean"==typeof n.expanded&&n.expanded&&(n.expanded="all"),"string"!=typeof n.expanded&&"number"!=typeof n.expanded||(n.expanded={use:n.expanded}),"object"!=typeof n.expanded&&(n.expanded={}),"number"==typeof n.expanded.use&&(n.expanded.use="(min-width:"+n.expanded.use+"px)"),n=this.opts[s]=e.extend(!0,{},e[d].defaults[s],n);var t=a.wrapper+"_sidebar-collapsed";n.collapsed.size&&(t+=" "+a.wrapper+"_sidebar-collapsed-"+n.collapsed.size);var i=a.wrapper+"_sidebar-expanded";n.expanded.size&&(i+=" "+a.wrapper+"_sidebar-expanded-"+n.expanded.size),n.collapsed.use&&(this.bind("initMenu:after",function(){this.$menu.addClass(a.menu+"_sidebar-collapsed"),n.collapsed.blockMenu&&this.opts.offCanvas&&!this.$menu.children("."+a.menu+"__blocker").length&&this.$menu.prepend('<a class="'+a.menu+'__blocker" href="#'+this.$menu.attr("id")+'" />'),n.collapsed.hideNavbar&&this.$menu.addClass(a.menu+"_hidenavbar"),n.collapsed.hideDivider&&this.$menu.addClass(a.menu+"_hidedivider")}),"boolean"==typeof n.collapsed.use?this.bind("initMenu:after",function(){l.$html.addClass(t)}):this.matchMedia(n.collapsed.use,function(){l.$html.addClass(t)},function(){l.$html.removeClass(t)})),n.expanded.use&&(this.bind("initMenu:after",function(){this.$menu.addClass(a.menu+"_sidebar-expanded")}),"boolean"==typeof n.expanded.use?this.bind("initMenu:after",function(){l.$html.addClass(i),this.open()}):this.matchMedia(n.expanded.use,function(){l.$html.addClass(i),l.$html.hasClass(a.wrapper+"_sidebar-closed")||this.open()},function(){l.$html.removeClass(i),this.close()}),this.bind("close:start",function(){l.$html.hasClass(i)&&l.$html.addClass(a.wrapper+"_sidebar-closed")}),this.bind("open:start",function(){l.$html.removeClass(a.wrapper+"_sidebar-closed")}))}},add:function(){a=e[d]._c,n=e[d]._d,t=e[d]._e},clickAnchor:function(e,d,n){if(this.opts[s].expanded.use&&l.$html.is("."+a.wrapper+"_sidebar-expanded")&&d&&n)return{close:!1}}},e[d].defaults[s]={collapsed:{use:!1,blockMenu:!0,hideDivider:!1,hideNavbar:!0},expanded:{use:!1}},e[d].configuration[s]={};var a,n,t,l}(jQuery);
!function(t){var e="mmenu",c="toggles";t[e].addons[c]={setup:function(){var s=this;this.opts[c],this.conf[c];l=t[e].glbl,this.bind("initPanels:after",function(e){this.__refactorClass(e.find("input"),this.conf.classNames[c].toggle,i.toggle),this.__refactorClass(e.find("input"),this.conf.classNames[c].check,i.check),e.find("input."+i.toggle+", input."+i.check).each(function(){var e=t(this),c=e.closest("li"),n=e.hasClass(i.toggle)?"toggle":"check",l=e.attr("id")||s.__getUniqueId();c.children('label[for="'+l+'"]').length||(e.attr("id",l),c.prepend(e),t('<label for="'+l+'" class="'+i[n]+'"></label>').insertAfter(c.children("."+i.listitem+"__text").last()))})})},add:function(){i=t[e]._c,s=t[e]._d,n=t[e]._e,i.add("toggle check")},clickAnchor:function(t,e){}},t[e].configuration.classNames[c]={toggle:"Toggle",check:"Check"};var i,s,n,l}(jQuery);
!function(a){var r="mmenu",n="navbars",e="breadcrumbs";a[r].addons[n][e]=function(n,e,s){var t=this,i=a[r]._c,b=a[r]._d;i.add("separator");var c=a('<span class="'+i.navbar+'__breadcrumbs" />').appendTo(n);this.bind("initNavbar:after",function(r){if(!r.children("."+i.navbar).children("."+i.navbar+"__breadcrumbs").length){r.removeClass(i.panel+"_has-navbar");for(var n=[],e=a('<span class="'+i.navbar+'__breadcrumbs"></span>'),t=r,c=!0;t&&t.length;){if(t.is("."+i.panel)||(t=t.closest("."+i.panel)),!t.parent("."+i.listitem+"_vertical").length){var d=t.children("."+i.navbar).children("."+i.navbar+"__title").text();d.length&&n.unshift(c?"<span>"+d+"</span>":'<a href="#'+t.attr("id")+'">'+d+"</a>"),c=!1}t=t.data(b.parent)}s.breadcrumbs.removeFirst&&n.shift(),e.append(n.join('<span class="'+i.separator+'">'+s.breadcrumbs.separator+"</span>")).appendTo(r.children("."+i.navbar))}}),this.bind("openPanel:start",function(a){var r=a.find("."+i.navbar+"__breadcrumbs");r.length&&c.html(r.html()||"")}),this.bind("initNavbar:after:sr-aria",function(r){r.children("."+i.navbar).children("."+i.breadcrumbs).children("a").each(function(){t.__sr_aria(a(this),"owns",a(this).attr("href").slice(1))})})}}(jQuery);
!function(t){var e="mmenu",n="navbars",a="close";t[e].addons[n][a]=function(n,a){var s=t[e]._c;t[e].glbl;s.add("close");var r=t('<a class="'+s.btn+" "+s.btn+"_close "+s.navbar+'__btn" href="#" />').appendTo(n);this.bind("setPage:after",function(t){r.attr("href","#"+t.attr("id"))}),this.bind("setPage:after:sr-text",function(t){r.html(this.__sr_text(this.i18n(this.conf.screenReader.text.closeMenu))),this.__sr_aria(r,"owns",r.attr("href").slice(1))})}}(jQuery);
!function(a){var n="mmenu",t="navbars",e="next";a[n].addons[t][e]=function(e,s){var r,i,h,d=a[n]._c,o=a('<a class="'+d.btn+" "+d.btn+"_next "+d.navbar+'__btn" href="#" />').appendTo(e);this.bind("openPanel:start",function(a){r=a.find("."+this.conf.classNames[t].panelNext),i=r.attr("href"),h=r.html(),i?o.attr("href",i):o.removeAttr("href"),o[i||h?"removeClass":"addClass"](d.hidden),o.html(h)}),this.bind("openPanel:start:sr-aria",function(a){this.__sr_aria(o,"hidden",o.hasClass(d.hidden)),this.__sr_aria(o,"owns",(o.attr("href")||"").slice(1))})},a[n].configuration.classNames[t].panelNext="Next"}(jQuery);
!function(a){var n="mmenu",r="navbars",e="prev";a[n].addons[r][e]=function(e,t){var i=a[n]._c,s=a('<a class="'+i.btn+" "+i.btn+"_prev "+i.navbar+'__btn" href="#" />').appendTo(e);this.bind("initNavbar:after",function(a){a.removeClass(i.panel+"_has-navbar")});var h,l,d;this.bind("openPanel:start",function(a){a.parent("."+i.listitem+"_vertical").length||(h=a.find("."+this.conf.classNames[r].panelPrev),h.length||(h=a.children("."+i.navbar).children("."+i.btn+"_prev")),l=h.attr("href"),d=h.html(),l?s.attr("href",l):s.removeAttr("href"),s[l||d?"removeClass":"addClass"](i.hidden),s.html(d))}),this.bind("initNavbar:after:sr-aria",function(a){var n=a.children("."+i.navbar);this.__sr_aria(n,"hidden",!0)}),this.bind("openPanel:start:sr-aria",function(a){this.__sr_aria(s,"hidden",s.hasClass(i.hidden)),this.__sr_aria(s,"owns",(s.attr("href")||"").slice(1))})},a[n].configuration.classNames[r].panelPrev="Prev"}(jQuery);
!function(s){var e="mmenu",a="navbars",d="searchfield";s[e].addons[a][d]=function(a,d){var i=s[e]._c,t=s('<div class="'+i.searchfield+'" />').appendTo(a);"object"!=typeof this.opts.searchfield&&(this.opts.searchfield={}),this.opts.searchfield.add=!0,this.opts.searchfield.addTo=t}}(jQuery);
!function(a){var t="mmenu",e="navbars",n="tabs";a[t].addons[e][n]=function(n,s,r){function i(a){c.removeClass(d.navbar+"__tab_selected");var t=c.filter('[href="#'+a.attr("id")+'"]');if(t.length)t.addClass(d.navbar+"__tab_selected");else{var e=a.data(l.parent);e&&e.length&&i(e.closest("."+d.panel))}}var d=a[t]._c,l=a[t]._d,o=a[t]._e,_=this,c=n.children("a");n.addClass(d.navbar+"_tabs").parent().addClass(d.navbars+"_has-tabs"),c.on(o.click+"-"+e,function(t){t.preventDefault();var e=a(this);if(e.hasClass(d.navbar+"__tab_selected"))return void t.stopImmediatePropagation();try{_.__openPanelWoAnimation(a(e.attr("href"))),t.stopImmediatePropagation()}catch(n){}}),this.bind("openPanel:start",i)}}(jQuery);
!function(t){var a="mmenu",e="navbars",n="title";t[a].addons[e][n]=function(n,i){var r,s,l,h=t[a]._c,d=t('<a class="'+h.navbar+'__title" />').appendTo(n);this.bind("openPanel:start",function(t){t.parent("."+h.listitem+"_vertical").length||(l=t.find("."+this.conf.classNames[e].panelTitle),l.length||(l=t.children("."+h.navbar).children("."+h.navbar+"__title")),r=l.attr("href"),s=l.html()||i.title,r?d.attr("href",r):d.removeAttr("href"),d[r||s?"removeClass":"addClass"](h.hidden),d.html(s))});var o;this.bind("openPanel:start:sr-aria",function(t){if(this.opts.screenReader.text&&(o||(o=this.$menu.children("."+h.navbars+"_top, ."+h.navbars+"_bottom").children("."+h.navbar).children("."+h.btn+"_prev")),o.length)){var a=!0;"parent"==this.opts.navbar.titleLink&&(a=!o.hasClass(h.hidden)),this.__sr_aria(d,"hidden",a)}})},t[a].configuration.classNames[e].panelTitle="Title"}(jQuery);
!function(a){var r="mmenu",n="navbars",e="breadcrumbs";a[r].addons[n][e]=function(n,e,s){var t=this,i=a[r]._c,b=a[r]._d;i.add("separator");var c=a('<span class="'+i.navbar+'__breadcrumbs" />').appendTo(n);this.bind("initNavbar:after",function(r){if(!r.children("."+i.navbar).children("."+i.navbar+"__breadcrumbs").length){r.removeClass(i.panel+"_has-navbar");for(var n=[],e=a('<span class="'+i.navbar+'__breadcrumbs"></span>'),t=r,c=!0;t&&t.length;){if(t.is("."+i.panel)||(t=t.closest("."+i.panel)),!t.parent("."+i.listitem+"_vertical").length){var d=t.children("."+i.navbar).children("."+i.navbar+"__title").text();d.length&&n.unshift(c?"<span>"+d+"</span>":'<a href="#'+t.attr("id")+'">'+d+"</a>"),c=!1}t=t.data(b.parent)}s.breadcrumbs.removeFirst&&n.shift(),e.append(n.join('<span class="'+i.separator+'">'+s.breadcrumbs.separator+"</span>")).appendTo(r.children("."+i.navbar))}}),this.bind("openPanel:start",function(a){var r=a.find("."+i.navbar+"__breadcrumbs");r.length&&c.html(r.html()||"")}),this.bind("initNavbar:after:sr-aria",function(r){r.children("."+i.navbar).children("."+i.breadcrumbs).children("a").each(function(){t.__sr_aria(a(this),"owns",a(this).attr("href").slice(1))})})}}(jQuery);
!function(t){var e="mmenu",n="navbars",a="close";t[e].addons[n][a]=function(n,a){var s=t[e]._c;t[e].glbl;s.add("close");var r=t('<a class="'+s.btn+" "+s.btn+"_close "+s.navbar+'__btn" href="#" />').appendTo(n);this.bind("setPage:after",function(t){r.attr("href","#"+t.attr("id"))}),this.bind("setPage:after:sr-text",function(t){r.html(this.__sr_text(this.i18n(this.conf.screenReader.text.closeMenu))),this.__sr_aria(r,"owns",r.attr("href").slice(1))})}}(jQuery);
!function(a){var n="mmenu",t="navbars",e="next";a[n].addons[t][e]=function(e,s){var r,i,h,d=a[n]._c,o=a('<a class="'+d.btn+" "+d.btn+"_next "+d.navbar+'__btn" href="#" />').appendTo(e);this.bind("openPanel:start",function(a){r=a.find("."+this.conf.classNames[t].panelNext),i=r.attr("href"),h=r.html(),i?o.attr("href",i):o.removeAttr("href"),o[i||h?"removeClass":"addClass"](d.hidden),o.html(h)}),this.bind("openPanel:start:sr-aria",function(a){this.__sr_aria(o,"hidden",o.hasClass(d.hidden)),this.__sr_aria(o,"owns",(o.attr("href")||"").slice(1))})},a[n].configuration.classNames[t].panelNext="Next"}(jQuery);
!function(a){var n="mmenu",r="navbars",e="prev";a[n].addons[r][e]=function(e,t){var i=a[n]._c,s=a('<a class="'+i.btn+" "+i.btn+"_prev "+i.navbar+'__btn" href="#" />').appendTo(e);this.bind("initNavbar:after",function(a){a.removeClass(i.panel+"_has-navbar")});var h,l,d;this.bind("openPanel:start",function(a){a.parent("."+i.listitem+"_vertical").length||(h=a.find("."+this.conf.classNames[r].panelPrev),h.length||(h=a.children("."+i.navbar).children("."+i.btn+"_prev")),l=h.attr("href"),d=h.html(),l?s.attr("href",l):s.removeAttr("href"),s[l||d?"removeClass":"addClass"](i.hidden),s.html(d))}),this.bind("initNavbar:after:sr-aria",function(a){var n=a.children("."+i.navbar);this.__sr_aria(n,"hidden",!0)}),this.bind("openPanel:start:sr-aria",function(a){this.__sr_aria(s,"hidden",s.hasClass(i.hidden)),this.__sr_aria(s,"owns",(s.attr("href")||"").slice(1))})},a[n].configuration.classNames[r].panelPrev="Prev"}(jQuery);
!function(s){var e="mmenu",a="navbars",d="searchfield";s[e].addons[a][d]=function(a,d){var i=s[e]._c,t=s('<div class="'+i.searchfield+'" />').appendTo(a);"object"!=typeof this.opts.searchfield&&(this.opts.searchfield={}),this.opts.searchfield.add=!0,this.opts.searchfield.addTo=t}}(jQuery);
!function(a){var t="mmenu",e="navbars",n="tabs";a[t].addons[e][n]=function(n,s,r){function i(a){c.removeClass(d.navbar+"__tab_selected");var t=c.filter('[href="#'+a.attr("id")+'"]');if(t.length)t.addClass(d.navbar+"__tab_selected");else{var e=a.data(l.parent);e&&e.length&&i(e.closest("."+d.panel))}}var d=a[t]._c,l=a[t]._d,o=a[t]._e,_=this,c=n.children("a");n.addClass(d.navbar+"_tabs").parent().addClass(d.navbars+"_has-tabs"),c.on(o.click+"-"+e,function(t){t.preventDefault();var e=a(this);if(e.hasClass(d.navbar+"__tab_selected"))return void t.stopImmediatePropagation();try{_.__openPanelWoAnimation(a(e.attr("href"))),t.stopImmediatePropagation()}catch(n){}}),this.bind("openPanel:start",i)}}(jQuery);
!function(t){var a="mmenu",e="navbars",n="title";t[a].addons[e][n]=function(n,i){var r,s,l,h=t[a]._c,d=t('<a class="'+h.navbar+'__title" />').appendTo(n);this.bind("openPanel:start",function(t){t.parent("."+h.listitem+"_vertical").length||(l=t.find("."+this.conf.classNames[e].panelTitle),l.length||(l=t.children("."+h.navbar).children("."+h.navbar+"__title")),r=l.attr("href"),s=l.html()||i.title,r?d.attr("href",r):d.removeAttr("href"),d[r||s?"removeClass":"addClass"](h.hidden),d.html(s))});var o;this.bind("openPanel:start:sr-aria",function(t){if(this.opts.screenReader.text&&(o||(o=this.$menu.children("."+h.navbars+"_top, ."+h.navbars+"_bottom").children("."+h.navbar).children("."+h.btn+"_prev")),o.length)){var a=!0;"parent"==this.opts.navbar.titleLink&&(a=!o.hasClass(h.hidden)),this.__sr_aria(d,"hidden",a)}})},t[a].configuration.classNames[e].panelTitle="Title"}(jQuery);
!function(e){var n="mmenu",t="angular";e[n].wrappers[t]=function(){this.opts.onClick={close:!0,preventDefault:!1,setSelected:!0}}}(jQuery);
!function(n){var a="mmenu",e="bootstrap3";n[a].wrappers[e]=function(){if(this.$menu.hasClass("navbar-collapse")){this.conf.classNames.selected="active",this.conf.classNames.divider="divider",this.conf.clone=!0,this.opts.hooks=this.opts.hooks||{};for(var n="",a=["nav-tabs","nav-pills","navbar-nav"],e=0;e<a.length;e++)if(this.$menu.find("."+a[e]).length){n=a[e];break}n.length&&(this.opts.hooks["initMenu:before"]=function(){"navbar-nav"==n&&this.$menu.wrapInner("<div />")},this.opts.hooks["initMenu:after"]=function(){t.menu.call(this),t.dropdown.call(this),t[n.split("nav-").join("").split("-nav").join("")].call(this)})}};var t={menu:function(){this.$menu.find(".nav").removeClass("nav").end().find(".sr-only").remove().end().find(".divider:empty").remove();for(var n=["role","aria-haspopup","aria-expanded"],a=0;a<n.length;a++)this.$menu.find("["+n[a]+"]").removeAttr(n[a])},dropdown:function(){var a=this.$menu.find(".dropdown");a.removeClass("dropdown"),a.children(".dropdown-toggle").find(".caret").remove().end().each(function(){n(this).replaceWith("<span>"+n(this).html()+"</span>")}),a.children(".dropdown-menu").removeClass("dropdown-menu")},tabs:function(){this.$menu.find(".nav-tabs").removeClass("nav-tabs")},pills:function(){this.$menu.find(".nav-pills").removeClass("nav-pills")},navbar:function(){var n=this;this.$menu.removeClass("collapse navbar-collapse").find('[class*="navbar-"]').removeClass("navbar-left navbar-right navbar-nav navbar-text navbar-btn");var a=this.$menu.find(".navbar-form");this.conf.searchform={form:{action:a.attr("action"),method:a.attr("method")},input:{name:a.find("input").attr("name")},submit:!0},a.remove(),(this.$orig||this.$menu).closest(".navbar").find(".navbar-header").find(".navbar-toggle").off("click").on("click",function(a){n.open(),a.stopImmediatePropagation(),a.preventDefault()})}}}(jQuery);
!function(n){function e(e){for(var a=n("<a />"),t=["href","title","target"],r=0;r<t.length;r++)"undefined"!=typeof e.attr(t[r])&&a.attr(t[r],e.attr(t[r]));return a.html(e.html()),a.find(".sr-only").remove(),a}function a(a){var t=n("<ul />");return a.children().each(function(){var a=n(this),r=n("<li />");a.hasClass("dropdown-divider")?r.addClass("Divider"):a.hasClass("dropdown-item")&&r.append(e(a)),t.append(r)}),t}function t(t){var r=n("<ul />");return t.find(".nav-item").each(function(){var t=n(this),i=n("<li />");if(t.hasClass("active")&&i.addClass("Selected"),!t.hasClass("nav-link")){var s=t.children(".dropdown-menu");s.length&&i.append(a(s)),t=t.children(".nav-link")}i.prepend(e(t)),r.append(i)}),r}var r="mmenu",i="bootstrap4";n[r].wrappers[i]=function(){var e=this;if(this.$menu.hasClass("navbar-collapse")){this.conf.clone=!1;var r=n("<nav />"),i=n("<div />");r.append(i),this.$menu.children().each(function(){var r=n(this);switch(!0){case r.hasClass("navbar-nav"):i.append(t(r));break;case r.hasClass("dropdown-menu"):i.append(a(r));break;case r.hasClass("form-inline"):e.conf.searchfield.form={action:r.attr("action")||null,method:r.attr("method")||null},e.conf.searchfield.input={name:r.find("input").attr("name")||null},e.conf.searchfield.clear=!1,e.conf.searchfield.submit=!0;break;default:i.append(r.clone(!0))}}),this.bind("initMenu:before",function(){r.prependTo("body"),this.$menu=r}),this.$menu.parent().find(".navbar-toggler").removeAttr("data-target").removeAttr("aria-controls").off("click").on("click",function(n){n.preventDefault(),n.stopImmediatePropagation(),e[e.vars.opened?"close":"open"]()})}}}(jQuery);
!function(e){var n="mmenu",t="jqueryMobile";e[n].wrappers[t]=function(){var n=this;this.opts.onClick.close=!1,this.conf.offCanvas.page.selector="div.ui-page-active",e("body").on("pagecontainerchange",function(e,t){"function"==typeof n.close&&(n.close(),n.setPage(t.toPage))}),this.bind("initAnchors:after",function(){e("body").on("click",".mm-listview a",function(n){n.isDefaultPrevented()||(n.preventDefault(),e("body").pagecontainer("change",this.href))})})}}(jQuery);
!function(e){var n="mmenu",a="magento";e[n].wrappers[a]=function(){this.conf.classNames.selected="active"}}(jQuery);
!function(n){var o="mmenu",a="olark";n[o].wrappers[a]=function(){this.conf.offCanvas.page.noSelector.push("#olark")}}(jQuery);
!function(n){var t="mmenu",o="turbolinks";n[t].wrappers[o]=function(){var o,r;n(document).on("turbolinks:before-visit",function(){r=n("html"),o=r.attr("class"),o=n.grep(o.split(/\s+/),function(n){return!/mm-/.test(n)}).join(" ")}).on("turbolinks:load",function(){"undefined"!=typeof r&&(r.attr("class",o),n[t].glbl=!1)})}}(jQuery);
!function(s){var e="mmenu",n="wordpress";s[e].wrappers[n]=function(){this.conf.classNames.selected="current-menu-item",s("#wpadminbar").css("position","fixed").addClass("mm-slideout")}}(jQuery);
!function(n){var e="mmenu",u="de";n[e].i18n({Menu:"Menü"},u)}(jQuery);
!function(e){var n="mmenu",u="de";e[n].i18n({"Close menu":"Menü schließen","Close submenu":"Untermenü schließen","Open submenu":"Untermenü öffnen","Toggle submenu":"Untermenü wechseln"},u)}(jQuery);
!function(e){var n="mmenu",u="de";e[n].i18n({Search:"Suche","No results found.":"Keine Ergebnisse gefunden.",cancel:"beenden"},u)}(jQuery);
!function(n){var u="mmenu",e="nl";n[u].i18n({Menu:"Menu"},e)}(jQuery);
!function(e){var n="mmenu",u="nl";e[n].i18n({"Close menu":"Menu sluiten","Close submenu":"Submenu sluiten","Open submenu":"Submenu openen","Toggle submenu":"Submenu wisselen"},u)}(jQuery);
!function(e){var n="mmenu",u="nl";e[n].i18n({Search:"Zoeken","No results found.":"Geen resultaten gevonden.",cancel:"annuleren"},u)}(jQuery);
!function(n){var u="mmenu",e="ru";n[u].i18n({Menu:"Меню"},e)}(jQuery);
!function(u){var e="mmenu",n="ru";u[e].i18n({"Close menu":"Закрыть меню","Close submenu":"Закрыть подменю","Open submenu":"Открыть подменю","Toggle submenu":"Переключить подменю"},n)}(jQuery);
!function(r){var u="mmenu",e="ru";r[u].i18n({Search:"Найти","No results found.":"Ничего не найдено.","Search results":"Результаты поиска"},e)}(jQuery);
return true;
}));
