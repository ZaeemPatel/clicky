jQuery(document).ready(function(a) {
    // Gallery filter
    jQuery( function($) {

        var paged = 1;
        var pagination_active = false;

        $(".gallery-filter .filter-row a").on("click", function() {

            //reset paged to 1 if not pagination trigger
            if(pagination_active == false){
                paged=1;
                $('.gallery-loop ul').empty();
            }
            pagination_active = false;

            var taxonomy = $(this).attr('id');

            var data = {
                action: 'gallery_filter',
                security : MyAjax.security,
                data: {$taxonomy : taxonomy},
                dataType: "json"
            };
                    
            //ajax response     
            $.post(MyAjax.ajaxurl, data, function(response) {
                var object = JSON.parse(response);
                if(object != null){ 
                    console.log('done');
                    $('.gallery-loop ul').append(object);
                    $('.gallery-loop').addClass('filtered');
                    $('.gallery-loop').attr("id", taxonomy);
                    $('.load_more_btn').show();
                }
            }); 

        });

        var $loading = $('#ajax-overlay').hide();
        $(document)
            .ajaxStart(function () {
                $('.gallery-loop').css("min-height", "395px");
                $loading.show();
            })
            .ajaxStop(function () {
                $('.gallery-loop').css("min-height", "unset");
                $loading.hide();
            });

    });
     // Gallery load more
    jQuery( function($) {
        //var paged = 1;
        //var pagination_active = false;
        $(".gallery_loop .load_more_btn").on("click", function() {

            var t = $(this);
            var page = t.data('page');
            var new_page = page + 1;
            var taxonomy = $('.gallery-loop').attr('id');

            //reset paged to 1 if not pagination trigger
            //if(pagination_active == false){
                //paged=1;
                //$('.gallery-loop').empty();
            //}
            //pagination_active = false;

            var data = {
                action: 'gallery_load_more',
                security : MyAjax.security,
                data: {
                    page: page,
                    taxonomy: taxonomy
                },
                dataType: "json"
            };
                    
            //ajax response     
            $.post(MyAjax.ajaxurl, data, function(response) {
                var object = JSON.parse(response);
                if(object != null){ 
                    console.log('done');
                    $('.gallery-loop ul').append(object);
                    t.data("page", new_page);
                }
            }); 

        });

        var $loading = $('#ajax-overlay').hide();
        $(document)
            .ajaxStart(function () {
                $('.gallery-loop').css("min-height", "395px");
                $loading.show();
            })
            .ajaxStop(function () {
                $('.gallery-loop').css("min-height", "unset");
                $loading.hide();
            });

    });
});