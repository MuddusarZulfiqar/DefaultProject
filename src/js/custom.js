// Dropzone.autoDiscover = false;
$(document).ready(function() {
    aqarat.init({
        slick: $(".slick-instance"),
        selectPicker: $(".selectpicker"),
        // datepicker_inline: $("#datepicker_inline"),
        // datepicker: $("#datepicker,#datepicker2"),
        // datepicker_filter: $("#datepicker_filter"),
        timepicker: $("#timepicker, #timepicker2"),
        datepicker: $("#datepicker, #datepicker1"),
        datepicker2: $("#datepicker2"),
        datetimepicker3: $("#datetimepicker3"),
        datetimepicker4: $("#datetimepicker4"),
        filterToggle: $(".propertyListing__filter--icon, .propertyListing__filter--close"),
    });
});
var self;
var aqarat = {
    init: function(options) {
        this.settings = options;
        self = this;
        lazyload.load(" .table__body", 'src/data/properties.html');
        this.bindEvents();
        this.utilities();
        this.loader();
        this.datepickers();
        this.configureModal();
        this.uploadControls();
        this.uploadImage();
        // this.datetimePickers();
        this.stickyHeader();
        
        //this.filters();
    },
    bindEvents: function(){
        this.settings.filterToggle.on("click", this.filters)
    },
    loader: function() {
        setTimeout(function() {
            $('body').addClass('loaded');
        }, 3500);
    },
    stickyHeader: function() {
        $(window).scroll(function() {
            // if($(window).width() > 767){

            // }
            if ($(this).scrollTop() > 250) {
                $("header").addClass("sticky");
            } else {
                $("header").removeClass("sticky");
            }
        });
        $(window).scroll(function() {
            if ($(this).scrollTop() > 60) {
                $('.dashboard__left').addClass("sticky");
            } else {
                $('.dashboard__left').removeClass("sticky");
            }
        });
    },
    datepickers: function() {
        this.settings.timepicker.datetimepicker({
            format: 'LT',
            ignoreReadonly: true,
            keepOpen: false
        });
        // this.settings.datepicker_inline.datetimepicker({
        //      inline: true,
        //      format: 'DD/MM/YYYY'
        //  });
        this.settings.datepicker.datetimepicker({
            format: 'L',
            keepOpen: false,
            ignoreReadonly: true

        });
        this.settings.datepicker2.datetimepicker({
            keepOpen: false,
            ignoreReadonly: true
        });
        this.settings.datetimepicker3.datetimepicker({
            keepOpen: false,
            ignoreReadonly: true,
            format: "YYYY"
        });
        this.settings.datetimepicker4.datetimepicker({
            keepOpen: false,
            ignoreReadonly: true,
            format: "MM",
        });

    },
    utilities: function() {
        // aos Animation
        AOS.init({
            delay: 100, // values from 0 to 3000, with step 50ms
            duration: 900, // values from 0 to 3000, with step 50ms
        });
        // mCustomScrollbar
        $(".inner-scroll").mCustomScrollbar();
        // mCustomScrollbar
        // Slick slider default initializtion
        this.settings.slick.slick();

        // Bootstrap Selectpicker

        $.fn.selectpicker.Constructor.BootstrapVersion = '4';
        if (/Android|webOS|iPhone|BlackBerry/i.test(navigator.userAgent)) {
            $.fn.selectpicker.Constructor.DEFAULTS.mobile = true;
        }
        $(".selectpicker").selectpicker({
            container: 'body',
            size: 8,
            liveSearch: true,
            liveSearchPlaceholder: 'Search'
        });
        $('.property__item--save').click(function(){
            $(this).toggleClass('active')
        });
    },
    uploadControls: function() {
        $(document).on("change", '.file-wrapper input[type="file"]', function(e) {
            var fileName = e.target.files[0].name;
            $(this).parents(".type-file").find(".file-name .file_name").text(fileName);
            let str = $('.file-name .file_name').text();
            let text =  str.slice(0, 10);
            var file_ext = fileName.split(".")
            var checkText = file_ext[0]
            if(checkText.length>=15){
                file_ext =  file_ext[file_ext.length-1]
                $(this).parents(".type-file").find(".file-name .file_name").text(`${text}...${file_ext}`);
            }
            
            $(this).parents(".type-file").find(".file-name").addClass("active");
        });
        $(".file-name .cross").click(function(e) {
            e.preventDefault();
            $(this).parents('.type-file').find('input[type="file"]').val('')
            $(this).parent(".file-name").removeClass("active");
        });
    },
    uploadImage: function() {
        $(document).on("change", ".uploadFile__item--file input[type='file']", function(e) {           
            var prnt = $(this).parent();
            var files = $(this)[0].files;
            for (i = 0; i < files.length; i++) {
                var readImg = new FileReader();
                var file = files[i];
                if (file.type.match('image.*')) {
                    readImg.onload = (function(file) {
                        return function(e) {
                            $(prnt).find(".uploadFile__item--image").remove();
                            $(prnt).append(`<div class="uploadFile__item--image"><img src="${e.target.result}"><span class="delete"></span></div>`);
                        };
                    })(file);
                    readImg.readAsDataURL(file);
                }
                else{
                    prnt.find('input[type="file"]').val('');
                }
            }
        });
        $(document).on("click", '.uploadFile__item--image .delete', function(e){
            var prnt = $(this).parents(".uploadFile__item--file");
            $(this).parent().remove();
            $(prnt).find('input[type="file"]').val('')
        })
    },
    filters: function(){
        event.preventDefault();        
        $(this).parents(".propertyListing__filter").toggleClass("toggle");
    },
    configureModal: function () {
        $("body").on("click", "*[data-toggle='custom-modal']", function (e) {
            e.preventDefault();
            $(".custom-modal").removeClass("large");
            var url = $(this).attr("data-path");
            var size = $(this).attr("data-size");
            var class_name = $(this).attr("data-class");
            $(".custom-modal").removeClass("large");
            $(".custom-modal").removeClass("medium");
            $(".custom-modal").removeClass("small");
            $.get(url, function (data) {
                $(".custom-modal").modal("show");
                $(".custom-modal .modal-body").html(data);
                
                if (size) {
                    $(".custom-modal").addClass(size);
                }
                if (class_name) {
                    $(".custom-modal").addClass(class_name);
                }
                setTimeout(function () {
                    $(".custom-modal .modal-body").addClass("show");
                }, 200);
                $("body").addClass("remove-scroll");
            });
        });
        $(".modal").on("hidden.bs.modal", function () {
            $(".custom-modal .modal-body").removeClass("show");
            $(".custom-modal .modal-body").empty();
            $(".custom-modal").removeClass("account-modal");
            $("body").removeClass("remove-scroll");
            $(".custom-modal").removeClass("large");
                    $(".custom-modal").removeClass("medium");
                    $(".custom-modal").removeClass("small");
        });
    },
    
};

var lazyload = {
    load: function(wrapper, dataURL) {
        $(".marker-end")
            .on('lazyshow', function() {
                if ($("#loadmorecount").val() < 3) {
                    $.ajax({
                        url: dataURL,
                        dataType: "html",
                        success: function(responseText) {
                            setTimeout(function() {
                                if (responseText != "") {
                                    $(wrapper).append($.parseHTML(responseText));
                                    $(window).lazyLoadXT();
                                    $('.marker-end').lazyLoadXT({ visibleOnly: false, checkDuplicates: false });
                                } else {
                                    $('.marker-end').hide();
                                }
                            }, 700);

                        },
                        complete: function() {
                            $("#loadmorecount").val(parseInt($("#loadmorecount").val()) + 1);
                        }
                    })
                } else {
                    $('.marker-end').hide();
                }
            })
            .lazyLoadXT({ visibleOnly: false });
    }
};