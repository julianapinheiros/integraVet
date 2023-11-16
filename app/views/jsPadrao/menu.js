const headerLinks = document.querySelectorAll("div .navbar-collapse ul a");

headerLinks.forEach((link, index) => {
  if(link.href === document.location.href) {
    headerLinks[index].classList.add("current")
  } else {
    return;
  }
});