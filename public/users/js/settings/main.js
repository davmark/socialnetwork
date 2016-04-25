$('.avatar__file__input').on('change',function(e)
{
    var _this = $(this);
    readURL(this);
});

function readURL(input)
{
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e)
        {
            $('.avatar__default')
                    .attr('src', e.target.result)
                    .width(256);
        };
        reader.readAsDataURL(input.files[0]);
    }
}
