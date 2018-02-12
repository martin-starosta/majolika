(function($) {
    var majolikaSiteController = {
        init: function() {
            majolikaSiteView.disableBodyScroll();
        }
    };

    var majolikaSiteView = {
        disableBodyScroll: function() {
            var leadspaceOnly = document.getElementsByClassName('leadspace-only');
            if (leadspaceOnly.length > 0) {
                document.body.style = 'overflow:hidden';
            }
        }
    };

    var popupView = {
        popupId: '2per_popup',

        init: function() {
            if ($('.show-popup').length === 0) {
                return;
            }

            if (cookieHelper.checkCookie('popupSeen')) {
                return;
            }
            var source = $('#modal-template').html();
            var template = Handlebars.compile(source);
            var context = { modal_id: this.popupId, modal_title: 'Darujte 2% z dane', modal_body: "<img class='img-responsive' src='//majolikamodra.sk/wp-content/uploads/darujte_2018.png' />" };
            var html = template(context);
            $('body').append(html);

            var self = this;
            setTimeout(function() {
                self.show();
            }, 500);
        },

        show: function() {
            $('#' + this.popupId).modal();

            $('#' + this.popupId).on('hidden.bs.modal', function(e) {
                cookieHelper.setCookie('popupSeen', 'true', 5);
            });
        }
    };

    var cookieHelper = {
        setCookie: function(key, value, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            var expires = 'expires=' + d.toUTCString();
            document.cookie = key + '=' + value + ';' + expires + ';path=/';
        },

        getCookie: function(key) {
            var value = key + '=';
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(value) == 0) {
                    return c.substring(value.length, c.length);
                }
            }
            return '';
        },

        checkCookie: function(key) {
            var value = this.getCookie(key);
            return (value !== '') ? true : false;
        }
    };

    /** Initialize JavaScript */
    document.addEventListener('DOMContentLoaded', function() {
        majolikaSiteController.init();
        popupView.init();
    }, false);
})(jQuery);