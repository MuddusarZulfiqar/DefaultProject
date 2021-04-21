// Dropzone.autoDiscover = false;
$(document).ready(function() {
    aqarat.init({
        slick: $(".slick-instance"),
        selectPicker: $(".selectpicker"),
        datepicker_inline: $("#datepicker_inline"),
        datepicker: $("#datepicker,#datepicker2"),
        datepicker_filter: $("#datepicker_filter"),
        menuToggler: document.querySelector(".dashboard__left--toggler"),
    });
});
var self;
var aqarat = {
    init: function(options) {
        this.settings = options;
        self = this;

        this.utilities();
        this.loader();
        this.configureModal();
        this.uploadControls();
        this.changeImage();
        this.datetimePickers();
        this.stickyHeader();
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
    datetimePickers: function() {
        this.settings.datepicker.datepicker({
            orientation: 'bottom',
        });
        this.settings.datepicker_inline.datepicker({
            startDate: moment(new Date()).add(1, "M").format('M/DD/YYYY')
        });
        this.settings.datepicker_filter.datepicker({
            orientation: 'bottom',
            format: {
                toDisplay: function(date, format, language) {
                    var d = new Date(date);
                    d.setDate(d.getDate());
                    return moment(d).format('MMMM YYYY')
                },
                toValue: function(date, format, language) {
                    var d = new Date(date);
                    d.setDate(d.getDate());
                    return moment(d).format('1/MM/YYYY')
                }
            }
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
        $('.property__save').click(function(){
            $(this).toggleClass('active')
        });
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
    changeImage: function() {
        $(document).on("change", ".image_uploader--parent input[type='file']", function(e) {
           //console.log(e)
           var prnt = $(this).parent();
            var files = $(this)[0].files;
            var img = $(this).parents('.image_uploader--parent').find(".img-upload img")
            for (i = 0; i < files.length; i++) {
                var readImg = new FileReader();
                var file = files[i];
                
                if (file.type.match('image.*')) {
                    // var img = $(prnt).find("img");
                    $(this).parents('.image_uploader--parent').find('.img-upload').removeClass('d-none');
                    console.log(img);
                    readImg.onload = (function(file) {
                        return function(e) {
                            console.log(e.target.result);
                            //$(img).parents('.image_uploader--parent').find(".img-upload img").attr("src", e.target.result);
                            $(img).attr("src", e.target.result);
                        };
                    })(file);
                    readImg.readAsDataURL(file);
                }
                else{
                    alert('please Put Image File')
                    $(this).parents('.image_uploader--parent').find('input[type="file"]').val('')
                }
            }
        });
        $('.img-upload .delete').click(function(e){
            $(this).parent('.img-upload').addClass('d-none');
            $(this).parents('.image_uploader--parent').find('input[type="file"]').val('')
        })
    }
};

var lazyload = {
    load: function(wrapper, dataURL) {
        $(".marker-end")
            .on('lazyshow', function() {
                if ($("#loadmorecount").val() < 5) {
                    $.ajax({
                        url: dataURL,
                        dataType: "html",
                        success: function(responseText) {
                            console.log(responseText);
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