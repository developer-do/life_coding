
let toggleBtn = document.querySelectorAll(".toggle");
let body = document.querySelector("body");


var links = {
  setColor(color) {
    let alist = document.querySelectorAll('a');
    for (let i = 0; i < alist.length; i++) {
      console.log(alist[i]);
      alist[i].style.color = color;
      alist[i].style.transition = "all 1.5s";
    }
  }
}

var bodyColor = {
  setColor(color) {
    body.style.color = color;
  },
  setBgc(color) {
    body.style.backgroundColor = color;
  }
};


function night() {
  for (let i = 0; i < toggleBtn.length; i++) {
    toggleBtn[i].addEventListener("click", function(){
    
      if (this.value === "night") {
        bodyColor.setColor("white");
        bodyColor.setBgc("black");
        body.style.transition = "all 1.5s";
        this.value = "day";

        links.setColor("powderblue");
      } else {
        bodyColor.setColor("black");
        bodyColor.setBgc("white");
        body.style.transition = "all 1.5s";
        this.value = "night";
        
        links.setColor("blue");
      }
      
    });
  }
}

night(this);

// let alist = document.querySelectorAll('a');
// for (let i = 0; i < alist.length; i++) {
//   console.log(alist[i]);
//   alist[i].style.color = "powderblue";
// }

