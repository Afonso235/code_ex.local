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


/* document.addEventListener("DOMContentLoaded", function () {
    var accordion = document.querySelectorAll(".accordion-list");
    
    accordion.forEach(function (accord) {
        accord.addEventListener("click", function (event) {
            event.preventDefault();
            console.log(accord);

            let parent = accord.parentElement;
            let sublist = parent.querySelector("ul");
            
            if (sublist.style.display === "block") {
                sublist.style.display = "none";
            } else {
                sublist.style.display = "block";
            }
        });
    });
}); */