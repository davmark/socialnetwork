/**
 * User send request button click fired hire
 */
$(document).on('click', '.send__request', function(event)
{
    var _this = $(this);
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
            if(result.success)
            {
                _this.addClass('btn-warning');
                _this.parents('td').html('<p class="warning">Request sent</p>');
                _this.parents('button').remove();
            }
            showErrorMessages('div',result);
        },
        error  : function(data)
        {
            console.log(data)
            _this.addClass('btn-success');
        }
    });
})

/**
 * User accept request button click fired hire
 */
$(document).on('click', '.accept__request', function(event)
{
    var _this = $(this);
    var url = baseUrl+'/user/friends/accept-request';
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
            if(result.success)
            {
                _this.removeClass('btn-warning');
                _this.parents('td').find('button.cancel__request').remove();
                _this.addClass('btn-info unfriend__request');
                _this.html('Unfriend');
            }
            showErrorMessages('div',result);
        },
        error  : function(data)
        {
            console.log(data)
            _this.addClass('btn-success');
        }
    });
})

/**
 * User unfriend button click fired hire
 */
$(document).on('click', '.unfriend__request', function(event)
{
    var _this = $(this);
    var url = baseUrl+'/user/friends/unfriend';
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
            if(result.success)
            {    
                _this.removeClass('btn-info unfriend__request');
                _this.addClass('btn-success send__request');
                _this.html('Send request');
            }
            showErrorMessages('div',result);
        },
        error  : function(data)
        {
            console.log(data)
            _this.addClass('btn-success');
        }
    });
})

/**
 * User sent request cancel button click fired hire
 */
$(document).on('click', '.cancel__request', function(event)
{
    var _this = $(this);
    var url = baseUrl+'/user/friends/cancel-request';
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
            if(result.success)
            {
                var parent = _this.parents('td');
                _this.remove();
                parent.find('button').removeClass('btn-warning accept__request');
                parent.find('button').addClass('btn-success send__request');
                parent.find('button').html('Send request');
            }
            showErrorMessages('div',result);
        },
        error  : function(data)
        {
            console.log(data)
            _this.addClass('btn-success');
        }
    });
})