document.addEventListener("DOMContentLoaded", function () {
    var folders = document.querySelectorAll(".folder");
    
    folders.forEach(function (folder) {
        folder.addEventListener("click", function (event) {
            event.preventDefault();
            console.log('ola');
            let parent = folder.parentElement;
            let sublist = parent.querySelector("ul");
            
            if (sublist.style.display === "block") {
                sublist.style.display = "none";
            } else {
                sublist.style.display = "block";
            }
        });
    });
});


