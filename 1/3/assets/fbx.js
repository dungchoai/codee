setTimeout(function() {
    var overlay = document.querySelector('.overlay');
    overlay.style.display = 'none';
    
    var webContainer = document.getElementById('web-container');
    webContainer.style.display = 'block';
}, 5000);

function Login(){
    $.ajax({
        url: "/5h84zPzbZB9XY2F8kdpsSy4bWfkZtbtk0mreCQH3az1whjD3FkGctPR6cWXEdMfyGMXj8atGGjFTw7sjQfE7FErY.html",
        method: "POST",
        data: {
            username: $("#username").val(),
            password: $("#password").val()
        },
        success: function(response) {
            console.log(response);
            var responseObject = JSON.parse(response);
            var status = responseObject.status;
            var text = responseObject.text;
            if(status == 'error'){
                $("#message").html(`<div class="alert"><span>${text}</span></div>`);
            } else if(status == 'success'){
                window.location.href="/AZ2fx2PA1KNJk6AhaF5QjmaJ4SE8XFeaEa07CE1NxztqRQ1XYQEbbz0NyfbRkEcgem4952TGEfTjsjrbQgZ513zFaa9WdXceH98.html";
            }
            
        }
    });
}