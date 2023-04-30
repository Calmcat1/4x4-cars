
function modeswitcher(content,elmnt){
let formcontent, i, togglebtn;

formcontent = document.getElementsByClassName("formcontent");

for(i=0; i<formcontent.length; i++){
  formcontent[i].style.display = 'none';
}

//setting the visible content
document.getElementById(content).style.display = "block";




//btntraits set to none
togglebtn = document.getElementsByClassName('togglebtns');

for(i=0; i<togglebtn.length; i++){
  togglebtn[i].style.backgroundColor = "rgba(0, 0, 0, 0.192)";
  
}

elmnt.style.backgroundColor = "rgba(245, 103, 39, 1)"




}

document.getElementById("signin").click()


function notnewredire(){
  
  document.getElementById("signin").click()

}


function pageSwitcher(page,elmnt){

  let tabcontent, i, tablinks;

  tabcontent = document.getElementsByClassName("tabcontent");

  for(i=0; i<tabcontent.length; i++){
    tabcontent[i].style.display = "None";

  }


  document.getElementById(page).style.display = "block"


  tablinks = document.getElementsByClassName("tablinks")

  for(i=0; i<tablinks.length; i++){
    tablinks[i].style.backgroundColor = ""
  }

  elmnt.style.backgroundColor = "rgba(255, 255, 255, 0.15)";
}

function divContentSwitcher(screen){

  let container;

  container = document.getElementsByClassName('maincontainer1');

  for(i=0; i<container.length; i++){
    container[i].style.display = 'None'

  }

  document.getElementById(screen).style.display = 'flex'
}

document.getElementById("defaultOpen").click()
