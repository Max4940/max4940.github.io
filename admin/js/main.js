$("#add-input").click(function(){

    var count_input = 1;
    count_input++;

    $('<div id="addimage'+count_input+'" class="addimage"><input type="hidden" name="MAX_FILE_SIZE" value="2000000"/><input type="file" name="galleryimg[]" /><br><a class="delete-input" rel="'+count_input+'" >Удалить</a><br><br></div>').fadeIn(300).appendTo('#objects'); 

});


$(document).on('click', '.delete-input', function() {
    var rel = $(this).attr("rel");
    $("#addimage"+rel).fadeOut(300, function(){
    $("#addimage"+rel).remove();
    });
});