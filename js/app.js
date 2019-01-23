jQuery.noConflict();
(function($) {
    "use strict";

    // =========================================================
    //                 Navigation BG on scroll
    // =========================================================
    $('.hero__heading').waypoint(function(direction){
        if(direction == 'down') {
            $('nav').addClass('-scroll');
        } else {
            $('nav').removeClass('-scroll');
        }
    },  {
        offset: '6%'
        });
    
    // =========================================================
    //                 Animate Skillbar on scroll
    // =========================================================    
    $('#about').waypoint(function(direction){
        if(direction == 'down') {
            $('.skill__percentage').each(function(){
                $('.skill__html').css({animation: "html 3s"});
                $('.skill__css-sass').css({animation: "css 3s"});
                $('.skill__javascript').css({animation: "js 3s"});
                $('.skill__jquery').css({animation: "jq 3s"});
                $('.skill__npm-git-gulp').css({animation: "ngg 3s"});
                $('.skill__wordpress-bootstrap').css({animation: "wb 3s"});
                $('.skill__java-php-csharp').css({animation: "jpc 3s"});
                $('.skill__mysql').css({animation: "mysql 3s"});
                $('.skill__adobe-ps').css({animation: "ps 3s"});
                $('.skill__adobe-ai').css({animation: "ai 3s"});
                $('.skill__adobe-xd').css({animation: "xd 3s"});
                $('.skill__vscode').css({animation: "vscode 3s"});
                $('.skill__psd-mockup').css({animation: "psm 3s"});
                $('.skill__convert-psd2html').css({ animation: "cp2h 3s" });                
            });

            $('.about__me-photo').addClass('animated slideInUp');
        } else {
            // $('.skill__percentage').each(function(){
            //     $(this).css({animation: ""});
            // });
            // $('.about__me-photo').removeClass('animated slideInUp');
        }
    }, {
        offset: '85%'
    });
    
    // ========================================================
    //      One Page Design:  SmoothScroll + ScrollSpy (MENU)
    // ========================================================
    // Cache selectors
    var lastId,
        topMenu = $("#menu"),
        topMenuHeight = topMenu.outerHeight() + 1, //15
        // All list items
        menuItems = topMenu.find("a"),
        // Anchors corresponding to menu items
        scrollItems = menuItems.map(function () {
            var item = $($(this).attr("href"));
            if (item.length) {
                return item;
            }
        });

    // Bind click handler to menu items
    // so we can get a fancy scroll animation
    menuItems.click(function (e) {
        var href = $(this).attr("href"),
            offsetTop = href === "#" ? 0 : $(href).offset().top - topMenuHeight + 1;
        $('html, body').stop().animate({
            scrollTop: offsetTop
        }, 1000); //300
        e.preventDefault();
    });

    // Bind to scroll
    $(window).scroll(function () {
        // Get container scroll position
        var fromTop = $(this).scrollTop() + topMenuHeight;

        // Get id of current scroll item
        var cur = scrollItems.map(function () {
            if ($(this).offset().top < fromTop)
                return this;
        });
        // Get the id of the current element
        cur = cur[cur.length - 1];
        var id = cur && cur.length ? cur[0].id : "";

        if (lastId !== id) {
            lastId = id;
            // Set/remove active class
            menuItems
                .parent().removeClass("active")
                .end().filter("[href='#" + id + "']").parent().addClass("active");
        }
    });

    // =========================================================
    //                 Simple Filter
    // ========================================================= 
    var _createClass = function () {function defineProperties(target, props) {for (var i = 0; i < props.length; i++) {var descriptor = props[i];descriptor.enumerable = descriptor.enumerable || false;descriptor.configurable = true;if ("value" in descriptor) descriptor.writable = true;Object.defineProperty(target, descriptor.key, descriptor);}}return function (Constructor, protoProps, staticProps) {if (protoProps) defineProperties(Constructor.prototype, protoProps);if (staticProps) defineProperties(Constructor, staticProps);return Constructor;};}();function _classCallCheck(instance, Constructor) {if (!(instance instanceof Constructor)) {throw new TypeError("Cannot call a class as a function");}}var
    FilterGallery = function () {
    
        function FilterGallery() {_classCallCheck(this, FilterGallery);
            this.$filtermenuList = $('.filtermenu li');
            this.$container = $('.portfolio');
    
            this.updateMenu('all');
            this.$filtermenuList.on('click', $.proxy(this.onClickFilterMenu, this));
        }_createClass(FilterGallery, [{ key: 'onClickFilterMenu', value: function onClickFilterMenu(
    
            event) {
                var $target = $(event.target);
                var targetFilter = $target.data('filter');
    
                this.updateMenu(targetFilter);
                this.updateGallery(targetFilter);
            } }, { key: 'updateMenu', value: function updateMenu(
    
            targetFilter) {
                this.$filtermenuList.removeClass('active');
                this.$filtermenuList.each(function (index, element) {
                    var targetData = $(element).data('filter');
    
                    if (targetData === targetFilter) {
                        $(element).addClass('active');
                    }
                });
            } }, { key: 'updateGallery', value: function updateGallery(
    
            targetFilter) {var _this = this;
    
                if (targetFilter === 'all') {
                    this.$container.fadeOut(300, function () {
                        $('.portfolio__items').show();
                        _this.$container.fadeIn();
                    });
                } else {
                    this.$container.find('.portfolio__items').each(function (index, element) {
                        _this.$container.fadeOut(300, function () {
                            if ($(element).hasClass(targetFilter)) {
                                $(element).show();
                            } else {
                                $(element).hide();
                            }
                            _this.$container.fadeIn();
                        });
                    });
                }
            } }]);return FilterGallery;}();
            
    var filterGallery = new FilterGallery();

    // =========================================================
    //                 jQuery Validation
    // =========================================================
    $('#dropMessage').validate({
        rules: {
            fullname: {
                required: true,
                minlength: 4
            },
            email: {
                required: true,
                email: true
            },
            message: {
                required: true,
                minlength: 20
            }
        }
    });

    var   fullName = $('#fullname'),
            eMail = $('#email'),
            message = $('#message');
    
    $('.form__submit').on('click', function () {        
        if (fullName.val() === '' && fullName.val().length === 0) {
            fullName.addClass('animated shake').focus();     
        } else if (eMail.val() === '' && eMail.val().length === 0) {             
            eMail.addClass('animated shake').focus();            
        } else if (message.val() === '' && message.val().length === 0) { 
            message.addClass('animated shake').focus();
        }

        setTimeout(function () {
            fullName.removeClass('animated shake');
            eMail.removeClass('animated shake');
            message.removeClass('animated shake');
        }, 2500);
    })

    // =========================================================
    //                 Lightcase.js || LightBox
    // =========================================================
    $('a[data-rel^=lightcase]').lightcase();

    // =========================================================
    //                 jQuery AniView
    // =========================================================

    
})(jQuery);