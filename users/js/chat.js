$( document ).ready(function(){
    /**
     * Send message form submit event fired here
     */
    $('.user__chat__form').on('submit',function(event){
        event.preventDefault();
        addMessage('.chat__message__block',{msg:'aaaaa'});
        
    })
});

/**
 * Add message into block
 * 
 * @param {string} block
 * @param {object} result
 * @returns {void}
 */
function addMessage(block,result)
{
    var html = '';

    html +='<p>';
    html +=result.msg;
    html +='</p>';
    $(block).append(html);
}
