var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

elems.forEach(function (html) {
    var switchery = new Switchery(html, {
        size: 'small',
        color: '#3598dc'
    });
});

$(document).ready(function () {
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.video-thumbnail').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
            $('.video-thumbnail').css("width","100%");
            $('.video-thumbnail').attr("controls",true);
        }
    }

    $("#video-uploader").change(function (e) {
        readURL(this);
        console.log(e.target.files[0].name);
        var ext = e.target.files[0].name.split('.').pop();
        console.log(ext);
    });

    function readURLimage(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.img-thumbnail').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#image-uploader").change(function () {
        readURLimage(this);
    });

    $("#free-switch").change(function () {
        if($(this).is(":checked")){
            $('#cost').attr('disabled',true);
            $('#cost').removeAttr('required');
            $('#cost').val(0);
        }
        else {
            $('#cost').attr('disabled',false);
            $('#cost').attr('required',true);
            $('#cost').val('');
        }
    });

    $("#sale-switch").change(function () {
        if($(this).is(":checked")){
            $('#saleCost').attr('disabled',false);
            $('#saleCost').attr('required',true);
            $('#saleCost').val('');
        }
        else {
            $('#saleCost').attr('disabled',true);
            $('#saleCost').removeAttr('required');
            $('#saleCost').val(0);
        }
    });
});

