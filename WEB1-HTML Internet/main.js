let htag = document.querySelectorAll(".htag");
const six = ["첫", "두", "세", "네", "다섯", "여섯"]; 

for (let i = 0; i < htag.length; i++) {
  (function (i) {
    htag[i].addEventListener("click", function () {
      alert(`${six[i]}번째 htag 입니다.`);
    });
  })(i); 
}

// for (var i=0; i<cashBankingAmountArray.length; i++) {
//   var t = i;
//   cashBankingAmountArray[i].addEventListener('DOMSubtreeModified', function(){alert(t)});
// }