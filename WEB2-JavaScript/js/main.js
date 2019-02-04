// let nightBtn = document.querySelector("#night");
// let dayBtn = document.querySelector("#day");
let toggleBtn = document.querySelectorAll(".toggle");
let body = document.querySelector("body");
console.log(toggleBtn)


// nightBtn.addEventListener("click", function () {
//   body.style.background = "black";
//   body.style.color = "white";
//   body.style.transition = "all 0.2s";
// });
// dayBtn.addEventListener("click", function () {
//   body.style.background = "white";
//   body.style.color = "black";
//   body.style.transition = "all 0.2s";
// });

for (let i = 0; i < toggleBtn.length; i++) {
  toggleBtn[i].addEventListener("click", function(){
  
    if (this.value === "night") {
      body.style.background = "black";
      body.style.color = "white";
      body.style.transition = "all 0.2s";
      this.value = "day";
    } else {
      body.style.background = "white";
      body.style.color = "black";
      body.style.transition = "all 0.2s";
      this.value = "night";
    }
    
  });
}
