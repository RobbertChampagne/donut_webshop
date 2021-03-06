window.addEventListener("load", loaded);

function loaded() {

  if (window.innerWidth < 874) {

    document.getElementById("hamburgerMenuA").addEventListener("click", showOrHideDropdownMenu);

    function showOrHideDropdownMenu() {
      let navbar = document.getElementById("navbar");
      let usedClass = navbar.getAttribute("class");

      if (usedClass === "navbarHide") {
        navbar.setAttribute("class", "navbarShow");
      } else {
        navbar.setAttribute("class", "navbarHide");
      }
    }
  }
}

window.addEventListener("resize", windowResize);

function windowResize() {
  location.reload();
}
