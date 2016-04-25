/**
 * Initialize global variables
 * 
 * @var baseUrl - keeps the information about laravel url()
 * @var token   - keeps the information about laravel csrf_token()
 */
var baseUrl   = $('#ajax__request__data').data('url'); //
var token = $('#ajax__request__data').data('token');

/**
 * This function showing the information about errors
 * 
 * @var string block  - keeps the blck where must be showing the error messages
 * @var object result - the object where keeps the server response result
 * @return void
 */
function showErrorMessages( block, result )
{
    console.log(result);
}

/**
 * Depending on the variable processing, enables or disables loder
 * 
 * @var string block      - keeps the blck where must be showing the gif loader
 * @var boolean processing - the object where keeps enables or disables loder
 * @return void
 */
function loading( block, processing )
{
    if(typeof processing == 'undefined')
        processing = false;
    var img = "<img class='loader' src='http://www.turismoinliguria.it/images/loader.gif'/>";
    if( processing )
        $(block).append(img);
    else
        $(block + ' img.loader').remove();
}
/**
 * Add loader gif after click on button
 */
$('.btn-submit').on('click',function(e){
    loading( this, true )
})