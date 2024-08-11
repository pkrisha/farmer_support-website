function toggleSidebar() {
    var sidebar = document.getElementById("sidebar");
    if (sidebar.style.width === "200px") {
        sidebar.style.width = "0";
        document.querySelector(".content").style.marginLeft = "0";
    } else {
        sidebar.style.width = "200px";
        document.querySelector(".content").style.marginLeft = "250px";
    }
}

// function showContent(option) {
//     var content = document.querySelector(".content");
//     content.innerHTML = "";
//     switch (option) {
      
//         case "SOIL PROFILE":
//             content.innerHTML = "<h1>Dashboard</h1><p>Welcome to the dashboard!</p>";
//             break;
//         case "SHOPPING":
//             content.innerHTML = "<h1>HOD Chat</h1><p>This is the HOD chat page.</p>";
//             break;
//         case "SCHEME":
//             content.innerHTML = "";
//             break;
//         case "WEATHER":
//             content.innerHTML = "<h1>Attendence</h1><p>This is the attendence page.</p>";
//             break;
//         case "LOGOUT":
//             content.innerHTML = "<h1>Logout</h1><p>You have been logged out.</p>";
//             break;
//         default:
//             content.innerHTML = "<h1>Error</h1><p>Invalid option.</p>";
//     }
// }
// var sidebtns = document.getElementsByClassName("sidebtn");
// for (var i = 0; i < sidebtns.length; i++) {
//     sidebtns[i].addEventListener("click", function(e) {
//         e.preventDefault();
//         var option = this.textContent;
//         showContent(option);
//         // toggleSidebar();
//     });
// }