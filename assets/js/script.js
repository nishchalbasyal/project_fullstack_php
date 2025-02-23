
//code for mobile menu
const mobile = document.getElementById("hamburg");
const mobilemenu = document.getElementById("mobile-menu");
const closeMobileMenu = document.getElementById("closeMobileMenu");

let isMobileMenuOpened = false;

mobile.addEventListener("click", function () {
  if (isMobileMenuOpened) {
    mobilemenu.style.display = "none";
    isMobileMenuOpened = false;
  } else {
    mobilemenu.style.display = "flex";
    isMobileMenuOpened = true;
  }
});

closeMobileMenu.addEventListener("click", () => {
if (isMobileMenuOpened) {
    mobilemenu.style.display = "none";
    isMobileMenuOpened = false;
}
});
