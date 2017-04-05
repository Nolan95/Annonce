
(function(){
    document.addEventListener('DOMContentLoaded', function(){
      var pls = document.querySelectorAll(".plus")
      var plsCat = document.querySelectorAll(".plusCat")
      var plusCategorie = function (cat, plus){
        plus.addEventListener('click', function(e){
          e.preventDefault();
          if(cat.style.display == "none"){
            var children = cat.children;
            for (var i = 0; i < children.length; i++) {
              children[i].className = "fa fa-hand-o-right"
            }
            cat.style.display = 'block'
            plus.innerHTML = ' Moins de categories'
            plus.className = 'fa fa-minus-circle plus'
          }else {
            cat.style.display = 'none'
            plus.innerHTML = ' Plus de categories'
            plus.className = 'fa fa-plus-circle plus'
          }
        })
      }

      for (var i = 0; i < pls.length; i++) {
        plusCategorie(plsCat[i], pls[i])
      }

    })
})()




/*var plus = document.querySelector('.plus')
plus.addEventListener('click', function (){
  if(document.querySelector('.plusCat').style.display == 'none'){
    document.querySelector('.plusCat').style.display = 'block'
    plus.innerHTML = ' Moins de cat'
    plus.className = 'fa fa-minus'
  }else {
    document.querySelector('.plusCat').style.display = 'none'
    plus.innerHTML = ' Plus de categories'
    plus.className = 'fa fa-plus'
  }

})*/
