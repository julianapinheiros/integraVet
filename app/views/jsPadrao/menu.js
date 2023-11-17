// const headerLinks = document.querySelectorAll("div .navbar-collapse ul a");

// headerLinks.forEach((link, index) => {
//   if(link.href === document.location.href) {
//     headerLinks[index].classList.add("current")
//   } else {
//     return;
//   }
// });

/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}