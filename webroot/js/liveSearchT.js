function myFunction() {


const list = document.querySelector('#myList');
const searchBar = document.getElementById("search");
searchBar.addEventListener('keyup',function(e){
const term = e.target.value.toLowerCase();
const terms = list.getElementsByTagName('li');
  Array.from(terms).forEach(function(obj){
    //debugger;
    const title = obj.firstElementChild.firstElementChild.firstElementChild.textContent;
    const regexCase1 = /á/gm;
    const regexCase2 = /é/gm;
    const regexCase3 = /í/gm;
    const regexCase4 = /ó/gm;
    const regexCase5 = /ú/gm;
    if (regexCase1.exec(title) !== null) {

        if(title.replace(regexCase1, "a").toLowerCase().indexOf(term) != -1)
        {
          obj.style.display = 'block';
        }else {
          obj.style.display = 'none';
        }
    }else if (regexCase2.exec(title) !== null) {
      if(title.replace(regexCase2, "e").toLowerCase().indexOf(term) != -1)
      {
        obj.style.display = 'block';
      }else {
        obj.style.display = 'none';
      }
    }else if (regexCase3.exec(title) !== null) {
      if(title.replace(regexCase3, "i").toLowerCase().indexOf(term) != -1)
      {
        obj.style.display = 'block';
      }else {
        obj.style.display = 'none';
      }
    }else if (regexCase4.exec(title) !== null) {
      if(title.replace(regexCase4, "o").toLowerCase().indexOf(term) != -1)
      {
        obj.style.display = 'block';
      }else {
        obj.style.display = 'none';
      }
    }else if (regexCase5.exec(title) !== null) {
      if(title.replace(regexCase5, "u").toLowerCase().indexOf(term) != -1)
      {
        obj.style.display = 'block';
      }else {
        obj.style.display = 'none';
      }
    }else {
      if(title.toLowerCase().indexOf(term) != -1)
      {
        obj.style.display = 'block';
      }else {
        obj.style.display = 'none';
      }
    }




  });
});



const sections = document.querySelectorAll('section');
for (var i = 0; i < sections.length; i++) {
  sections[i].addEventListener('click',function(e){
    $(this).toggle();
    });
	}

console.log(sections);
}
