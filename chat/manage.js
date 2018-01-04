function getMessages() {
    var div = $("#getMsg");
    $.get("../chat/messages.php", function(data) {
        //event.preventDefault();
        div.html(data);
    });
}

setInterval(getMessages, 10000);