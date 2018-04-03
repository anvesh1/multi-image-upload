var triggerMe = function(id){
  $('#'+id).trigger('click');
  //$('#'+id).css('pointer-events', 'all');
}


$('#submitfiles').click(function(){
    $('.dz-remove').hide();
});



var zoomCheck = false;
function addImage(img){
    /*
    if(!zoomCheck){
        var image_name=$(img).attr('src');
        //console.log(image_name);
        var imageTag='<div style="position:absolute; class="zoomPic">'+'<img src="'+image_name+'" alt="image" style="width: 200%;" />'+'</div>';
        $(img).parent('div').parent('div').append(imageTag);
        zoomCheck = true;
    }
    */
    var image_name=$(img).attr('alt');
    //console.log(image_name);
    var imageTag='<div style="width:200% class="zoomPic">'+'<img src="'+image_name+'" alt="image" style="width: 90%;margin: 5%" />'+'</div>';
    $('.imageContent').html(imageTag);
}


function removeImage(img){
        zoomCheck = false;
        $('.zoomPic').remove();
}

/*

function setContent(){
    $('.imageContent').html($('.modelContent'));
    $('.modelContent').show();
}
*/