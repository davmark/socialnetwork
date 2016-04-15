/**
 * User send request button click fired hire
 */
$(document).on('click', '.send__request', function(event)
{
    var _this = $(this);
    _this.removeClass('btn-success');
    var url = baseUrl+'/user/friends/send-request';
    var data = {
        _token    : token,
        user_id   : _this.data('user_id'),
    };
    $.ajax({
        url    : url,
        method : 'POST',
        data   : data,
        success: function(result)
        {
            _this.addClass('btn-warning');
            _this.parents('td').html('<p class="warning">Request sent</p>');
            _this.parents('button').remove();
            
        },
        error  : function(data)
        {
            console.log(data)
            _this.addClass('btn-success');
        }
    });
})