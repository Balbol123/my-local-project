let link1 = document.getElementById("lnk1");
let link2 = document.getElementById("lnk2");
let link3 = document.getElementById("lnk3");

lnk1 = "http://localhost/project_1/main_files/home";
lnk2 = "http://localhost/project_1/main_files/login";
lnk3 = "http://localhost/project_1/main_files/signup";

if (window.location.href == lnk2) {
  link2.style.color = "#0088a9";
} else if (window.location.href == lnk3) {
  link3.style.color = "#0088a9";
} else if (window.location.href == lnk1) {
  link1.style.color = "#0088a9";
}
