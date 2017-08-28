
function getxhr(){
   var xhr=null;
  //  les navigateurs autre que IE
  if(window.XMLHttpRequest){
    xhr=new XMLHttpRequest();
  }else if(window.ActiveXobject)  //si c'est du IE
      //deux cas selon les versions
      try{
        xhr =new ActiveXobject("msxml2XMLHTTP");
      }
      catch(e){
        xhr = new ActiveXobject("microsoft.XMLHTTP");
      }
      else{
        alert("achetez-vous une autre machine");
        xhr=false;
      }
      return xhr;
}

function lorem(){    //une fonction pour faire le lien avec les donnees
var loremxhr = getxhr();
  loremxhr.onreadystatechange = function(){
    if(loremxhr.readyState == 4 && loremxhr.status == 200)
    {
      document.getElementById('root').innerHTML = loremxhr.responseText;
    }
  }
  loremxhr.open("GET","lorem.txt", true);//pour ne pas recharger la page
                                               //,besoin fichier ajax,qui affiche le resultat
  loremxhr.send(null);
}
