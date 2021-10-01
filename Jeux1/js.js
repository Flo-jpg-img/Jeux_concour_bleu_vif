//console.log('ok');
$('#btn-partage').click(function(){
    $('.envois').addClass("block");
    
  })

  var nbClick=0;
  var nbClickMax=4;
  function compter()
  {
    nbClick++;
    if(nbClick===nbClickMax)
       {
           document.getElementById('compteur').disabled=true;
           $('#compteur').addClass("dn");
           $('#btnverif').addClass("btnverifdp");
           
       }
  }
  var nbClickk=0;
  var nbClickMaxx=1;
  function compterr()
  {
    nbClickk++;
    if(nbClickk===nbClickMaxx)
       {
        header('location:http://localhost/jeux_concour_bleu_vif/admin/Participants/action.php');
           
           
       }
  }

  
  
const input = document.querySelector('#in').value;
const btn = document.querySelector('#btn');

btn.addEventListener('click' , () => {
 navigator.clipboard.writeText(input)
  alert('lien du concour copié dans le presse-papier');
})

  

  
 
  