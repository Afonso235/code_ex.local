document.addEventListener("DOMContentLoaded", function () {
    var folders = document.querySelectorAll(".folder");
    
    folders.forEach(function (folder) {
        folder.addEventListener("click", function (event) {
            event.preventDefault();
            var parent = folder.parentElement;
            var sublist = parent.querySelector("ul");
            
            if (sublist.style.display === "block") {
                sublist.style.display = "none";
            } else {
                sublist.style.display = "block";
            }
        });
    });
});
