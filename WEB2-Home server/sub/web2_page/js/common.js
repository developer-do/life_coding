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
  let list = `<ul>`;
  let menu = document.querySelector(".menu");
  
  for (let i = 0; i < menuList.length; i++) {
    list += `<li class="list${i}"><a href="Home-server-${i + 1}.html">${listFix + menuList[i]}</a></li>`;
  }
  list += `</ul>`;
  list += `<p class="clickHide">마우스 휠을 건드리시거나 이곳을 클릭하시면 메뉴바가 사라집니다.</p>`;
  menu.innerHTML = list;
}
arrListOutput();



/* fixedSpan 메뉴 클릭할 시에  */
function menuClick() {
  let fixedSpan = document.getElementById("fixedSpan");
  fixedSpan.addEventListener("click", menuShow);
}
function menuShow() {
  let menu = document.querySelector(".menu");
  menu.classList.remove("disNone");
  menu.classList.add("disBlock");
}
menuClick();

function menuHide() {
  let clickHide = document.querySelector(".clickHide");
  clickHide.addEventListener("click", hideOpt);
  let body = document.querySelector("body");
  body.addEventListener("mousewheel", wheelHide);
}
/* wheel을 올리거나 내리면 menu 숨기기 */
function wheelHide(e) {
  if (e.wheelDelta !== 0 || e.wheelDeltaY === -120 || e.wheelDeltaY === 120) {
    hideOpt();
  }
}

function hideOpt() {
  let menu = document.querySelector(".menu");
  menu.classList.add("disNone");
  menu.classList.remove("disBlock");
}

menuHide();
