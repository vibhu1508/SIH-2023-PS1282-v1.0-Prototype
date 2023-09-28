function acceptRequest(requestId) {
    var request = document.getElementById(requestId);
    if (request) {
        request.style.backgroundColor = "rgb(0 255 0 / 52%)";



        var textElements = request.querySelectorAll('*');
        if (textElements) {
            textElements.forEach(function (textElement) {
                textElement.style.color = "black";
            });
        }
    }
}

function rejectRequest(requestId) {
    var request = document.getElementById(requestId);
    if (request) {
        request.style.transition = "opacity 0.5s ease-out"; 
        request.style.opacity = "0"; 
        setTimeout(function () {
            request.style.display = "none"; 
        }, 500); 
    }
}