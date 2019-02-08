const listFix = "WEB2-Home server-";
let menuList = [
  "1.수업소개",
  "2.공유기",
  "3.NAT",
  "4.IP 주소 알아내기",
  "5.port",
  "6.port forwarding",
  "7.Dynamic & Static",
  "8.DHCP(1/2)",
  "8.DHCP(2/2)",
  "10.수업을 마치며"
];

/* title */
function titleOutput(num) {
  document.title = `${listFix + menuList[Number(num) - 1]}`;
}
titleOutput(document.title);

/* menu list */
function arrListOutput() {
  for (let i = 0; i < menuList.length; i++) {
    document.write(`<li class="list${i}"><a href="Home-server-${i + 1}.html">${listFix + menuList[i]}</a></li>`);
  }
}
arrListOutput();




function menuClick() {
  let fixedSpan = document.getElementById("fixedSpan");
  fixedSpan.addEventListener("click", menuShow);
}

function menuShow() {
  let menu = document.querySelector(".menu");
  menu.classList.remove("disNone");
  menu.classList.add("disBlock");
}

function menuHide() {
  let body = document.querySelector("body");
  body.addEventListener("mousewheel", wheelHide);
}

menuHide();

function wheelHide(e) {
  if (e.wheelDelta !== 0 || e.wheelDeltaY === -120 || e.wheelDeltaY === 120) {
    let menu = document.querySelector(".menu");
    menu.classList.add("disNone");
    menu.classList.remove("disBlock");
  }
}

menuClick();


console.log(fixedSpan);