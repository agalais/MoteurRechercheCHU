function RAZvalue()
{
	document.getElementById("zoneLibre").value = " ";
	document.getElementById("zoneResultat").innerHTML = " ";

	document.getElementById("selectLabo").value = "defaut";
	document.getElementById("selectMicroOrg").value = "defaut";
}

function ouvre(fichier) 
 {
    ff=window.open(fichier,"popup",
    "width=800,height=800,left=200,top=40")
 }


 function rechercheLettre(){

    var lettre = event.currentTarget.value;

    if (lettre != undefined && lettre != "")
    {
        var DATA = 'lettre=' + lettre;

        $.ajax({
            type: "POST",
            url: "/MoteurRechercheCHU/web/app_dev.php/rechercheIndex/rechercheLettre",
            data: DATA,
            cache: false,
            success: function(data){
               $('#zoneResultat').html(data);
            }
        });
    }
 }