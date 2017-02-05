/**
 * Created by storyteller on 12/19/14.
 */
;(function($) {
    $(document).ready(function() {
        if(banner_gallery.length==0){
            banner_gallery = [
                site.theme_path + "/img/b1.jpg",
                site.theme_path + "/img/b16.jpg",
                site.theme_path + "/img/b20.jpg"
            ];
        }
        $(".banner").backstretch(banner_gallery, {duration: 3000, fade: 750});

        /** Navigation Fix when there is no menu in Primary Menu location **/

        if (!$("div#navigation>div>ul").hasClass("list-inline")) {
            $("div#navigation>div>ul").addClass("pull-right list-inline");
        }

    });
})(jQuery);