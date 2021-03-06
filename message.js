$(document).on('click','#message',function(){
    $('#message').hide();
    $('.profile-header').append('<textarea id="msg_content" rows="6" cols="30" maxlength="320" placeholder="your message"></textarea>').append('<button class="send_msg btn-sm btn-success">send</button>');
    $('.send_msg').on('click',function(){
        send_message();
    });
});

function send_message(){
    var content = $("#msg_content").val();
    console.log("content: " , content);
    $.ajax({
        url: "message_handler.php",
        dataType:'json',
        data: {content:content},
        method: "post",
        success: function (response){
                if (response.message == "success") {
                    // $(".profile-friends").append("<li class='img-list-style'><img name='" + user_obj.username + "' class='user_img_items' src='" + user_obj.image + "'/>" + user_obj.name + "</li>");
                    $("#msg_content").val("").remove();
                    function setTimeout(){
                        //this will let the user know the message has been sent
                    }
                    $('.send_msg').remove();
                    // $('#message').show().text('').append('<li><a id="A" class="class" value="A">A</a><a id="B" class="class" value="B">B</a><a id="C" class="class" value="C">C</a><a id="C" class="class" value="Q">Q</a></li>')

                }
        },
        error: function(response){
            console.log("there was an error: ", response );
        }
    })
}