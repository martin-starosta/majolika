var majolikaSiteController = {
    init: function() {
        majolikaSiteView.disableBodyScroll();
    }
}

var majolikaSiteView = {
    disableBodyScroll: function() {
        var leadspaceOnly = document.getElementsByClassName("leadspace-only");
        if (leadspaceOnly.length > 0){
            document.body.style = "overflow:hidden";
        }
    }
}

/** Initialize JavaScript */
document.addEventListener('DOMContentLoaded', function(){ 
    majolikaSiteController.init();
}, false);