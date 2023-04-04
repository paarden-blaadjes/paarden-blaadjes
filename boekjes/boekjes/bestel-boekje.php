
<!DOCTYPE html>
<html lang="nl" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>bestelling boekje</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="icon" type="image/x-icon" href="img//favicon.ico" />
	<link rel="stylesheet" type="text/css" href="../../centrale/stylesheet1-lijsten.css">
	<link rel="stylesheet" type="text/css" href="../../menus/horizontaal/droplist-flyout.css"  >
	<meta name="description" content="Springoefeningen in zakformaat bestellen.">
	<meta name="keywords"content="springoefeningen in zakformaat">
	<link rel="alternate" media="only screen and (max-width: 640px)"href="mobiel/boekjes/boekjes/bestel-springboekje.php" >

<!-- redirect -->
<script type="text/javascript">
(function(a,b){if(/android.+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|e\-|e\/|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|xda(\-|2|g)|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))b
})(navigator.userAgent||navigator.vendor||window.opera,'mobiel/boekjes/boekjes/bestel-springboekje.php');
</script>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>
    <script>
 $(document).ready(function () {
    var form = $('.bestelformulier'),
        elements = form.find('[data-price], [type="radio"], [type="checkbox"], select'),
        totalEl = $('.totaalprijs'),
        totaalSub = $('.subtotaalprijs'),
        totaaalSuub = $('.suubtotaalprijs');

       
    //function to calculate total
    var calculateTotal = function () {
        var total = 0;
        var totaal = 0;
        var totaaal = 0;
 



        $.each(elements, function () {
            var field = $(this),
                newVal,newSubval,newPorto;

            // switch type
            switch (field.prop('type')) {
                case 'text':
                    newVal = parseFloat(field.val() || 0) * field.data('price');
                    newVal = newVal.toFixed(2);
                    field.closest('td').next().find('span').text(newVal);
                    newSubVal = parseFloat(field.val() || 0) * field.data('price');
                    newSubVal = newSubVal.toFixed(2);
                    newSuubVal = parseFloat(field.val() || 0) * field.data('price');
                    newSuubVal = newSuubVal.toFixed(2);
                    field.closest('td').next().find('span').text(newSubVal);
                    break;


                case 'hidden':
var a=0;
var x=0;
var y=0;
var z=0;
var r=0;
var x = document.getElementById("Aantal1").value | 0;
var y = document.getElementById("Aantal2").value | 0; 
var z = document.getElementById("Aantal3").value | 0;
var r=x+y+z;
if  ( r > 1 ) {
a=r;}
document.getElementById('korting').value = a;
                    newSuubVal = parseFloat(field.val() || 0) * field.data('price');
                    newSuubVal = newSuubVal.toFixed(2);
                    newVal = parseFloat(field.val() || 0) * field.data('price');
                    newVal = newVal.toFixed(2);
                    field.closest('td').next().find('span').text(newVal);
                    break;


                case 'radio':
                    newVal = this.checked ? field.val() : 0;
                    var p = this.checked ? field.val() : 0;
var n=0;
var x = document.getElementById("Aantal1").value | 0;
var y = document.getElementById("Aantal2").value | 0; 
var z = document.getElementById("Aantal3").value | 0;
var r=x+y+z;
if (p=="Nederland" && r<7 ) {n=4.50;}
if (p=="Nederland" && r==1 ) {n=3.50;}
if (p=="Nederland"  && r>6) {n=7.00;}
if (p=="Buitenland" && r==1) {n=4.50;}
if (p=="Buitenland" && r==2) {n=8.00;}
if (p=="Buitenland" && r==3) {n=8.00;}
if (p=="Buitenland" && r==4) {n=9.00;}
if (p=="Buitenland" && r>4) {n=9.00;}
if (r==0 ) {n=0.00;}
                    newVal = n;
                    newVal = newVal.toFixed(2);
                    field.closest('td').next().find('span').text(newVal);
                    break;
            }



            newSubVal = parseFloat(newSubVal);
            totaal += newSubVal;

            newSuubVal = parseFloat(newSuubVal);
            totaaal += newSuubVal;

            newVal = parseFloat(newVal);
            total += newVal;


        });

        totaalSub.text(totaal.toFixed(2));
        totaaalSuub.text(totaaal.toFixed(2));
        totalEl.text(total.toFixed(2));


    };

    // bind events
    elements.on('change keyup', calculateTotal);
    

 
    elements.filter('[data-price]').on('keypress', function (ev) {
        var key = ev.keyCode || ev.which;

        if (key > 31 && (key < 48 || key > 57)) {
            ev.preventDefault();
        }
    });

    
});
    </script>

<div id="main">
	<div id="vergroten" align="center" >
Website vergroten/verkleinen: cltr-knop + scrollen
	</div>

  	<div id="achter-main_container">
		<div id="main_container_begrippen">

			<div id="header_container">
<div id="menubalk">

		<script type="text/javascript" src="../../menus/horizontaal/algemeen-plus-horizontaal.js"></script>
</div> <!-- sluit menubalk -->
			</div> <!-- sluit header_container -->




			<div id="content_container_begrippen">
				<div align="center">
<h2 id="top"></h2>
<h2 id="springboekje"></h2>
<br>

   <table width="850px">
   <tr>
   <td class="letterwit"  align="center">
<br>
<h1>Boekjes in zakformaat</h1>
<h3>Geef jezelf, je vriend(in) of een familielid een prachtig boekje cadeau!</h3><br>
<br>

	<table border="3">
	<tr>
	<td width="300" align="center" rowspan="2">
<img src='springboekje.png' width="300" border="0"><br>
	</td>
	<td class="letterwit" align="center">
<br>
<H3>Springoefeningen in zakformaat</H3>
<br>
<h1> &#8364;13,95 </h1><br>
<br>
Meer dan &#233&#233n boekje: <b>&#8364;12,95 per stuk</b><br>
<br>
<a class="speciaalwittekst" href="#verzendkosten">Verzendkosten</a><br>
<br>
	</td>
	</tr>
	<tr>
	<td class="letterwit">
		<table>
		<tr>
		<td colspan="2" class="letterwit">
<br>
<b>Springoefeningen in zakformaat</b><br>
ISBN-nummer: 978-90-823973-0-7<br>
auteur: B.v.d.Giessen<br>
uitgave: www.paarden-blaadjes.nl<br>
<br>
		</td>
		</tr>
		</table>
	</td>
	</tr>
	<tr>
	<td width="300" class="letterwit" align="center">
<br>
<img src='springoefeningen-in-zakformaat-2.jpg' width="300" border="0">
	</td>
	<td class="letterwit"  align="left">
<br>
<br>
<b>Een heel handig boekje om mee te nemen naar de manege of buitenbak om een springoefening op te bouwen.<br>
Bijzonder handig zijn de flappen die je kunt uitvouwen waarop de meest gebruikte afstanden staan voor zowel pony&#39;s als paarden.<br>
<br>
Deze paperback heeft het formaat van een zakboekje<br> (9 x 14 cm) en 100 pagina&#39;s.<br>
<br>
De inhoud bestaat uit: <br>
&#8226; cavaletti-oefeningen<br>
&#8226; verschillende opstellingen van hindernissen met verschillende mogelijke lijntjes<br> 
&#8226; enkele eenvoudige parcoursschetsen<br>
&#8226; praktische informatie over afstanden<br>
&#8226; ruimte om zelf aantekeningen te maken<br>
 </b><br>
<br>
<a class="speciaalwittekst" href="#bestellen">Bestellen?</a><br>
<br>
	</td>
	</tr>
 	</table>

<br>
<br>
<br>

<h2 id="dressuurboekje"></h2>



	<table border="3">
	<tr>
	<td width="330" align="center" rowspan="2">
<img src='dressuurboekje.png' width="300" border="0"><br>
<br>
	</td>
	<td class="letterwit" align="center">
<br>
<H3>Dressuuroefeningen in zakformaat</H3>

<br>
<h1> &#8364;13,95 </h1><br>
<br>
Meer dan &#233&#233n boekje: <b>&#8364;12,95 per stuk</b><br>
<br>
<a class="speciaalwittekst" href="#verzendkosten">Verzendkosten</a><br>
<br>
	</td>
	</tr>
	<tr>
	<td class="letterwit">
		<table>
		<tr>
		<td colspan="2" class="letterwit">
<br>
<b>Dressuuroefeningen in zakformaat</b><br>
ISBN-nummer: 978-90-823973-1-4<br>
auteur: B.v.d.Giessen<br>
uitgave: www.paarden-blaadjes.nl<br>
<br>
		</td>
		</tr>
		</table>
	</td>
	</tr>
	<tr>
	<td width="330" class="letterwit" align="center">
<br>
<img src='dressuuroefeningen-in-zakformaat-2.jpg' width="300" border="0"><br>
<br>
	</td>
	<td class="letterwit"  align="left">
<br>
<br>
<b>Een heel handig boekje om mee te nemen naar de manege of buitenbak.<br>
Bijzonder handig is de flap die je kunt uitvouwen waarop de gemiddelde afstanden staan voor het gebruik van cavaletti.<br>
<br>
<br>
Deze paperback heeft het formaat van een zakboekje<br> (9 x 14 cm) en 100 pagina&#39;s.<br>
<br>
De inhoud bestaat uit:<br>
&#8226; cavaletti-oefeningen, met af en toe wat informatie <br>
&#8226; oefeningen zonder balkjes<br>
&#8226; rijbaanfiguren met theoretische uitleg<br>
&#8226; een heel klein beetje praktische informatie betreffende de theorie van de dressuur<br>
</b>
<br>
<a class="speciaalwittekst" href="#bestellen">Bestellen?</a><br>
<br>
	</td>
	</tr>
 	</table>

<h2 id="hulpenboekje"></h2>
<br>
<br>


	<table border="3">
	<tr>
	<td width="330" align="center" rowspan="2">
<img src='hulpenboekje.png' width="300" border="0"><br>
	</td>
	<td class="letterwit" align="center">
<br>
<H3>Hulpen dressuur in zakformaat</H3>

<br>
<h1> &#8364;13,95 </h1><br>
<br>
Meer dan &#233&#233n boekje: <b>&#8364;12,95 per stuk</b><br>
<br>
<a class="speciaalwittekst" href="#verzendkosten">Verzendkosten</a><br>
<br>
	</td>
	</tr>
	<tr>
	<td class="letterwit">
		<table>
		<tr>
		<td colspan="2" class="letterwit">
<br>
<b>Hulpen dressuur in zakformaat</b><br>
ISBN-nummer: 978-90-823973-2-1<br>
auteur: B.v.d.Giessen<br>
uitgave: www.paarden-blaadjes.nl<br>
<br>
		</td>
		</tr>
		</table>
	</td>
	</tr>
	<tr>
	<td width="330" class="letterwit" align="center">
<br>
<img src='hulpendressuur-in-zakformaat-2.jpg' width="300" border="0"><br>
<br>
	</td>
	<td class="letterwit"  align="left">
<br>
<br>
<b>Een heel handig boekje om mee te nemen naar de manege of buitenbak.<br>
<br>
Deze paperback heeft het formaat van een zakboekje<br> (9 x 14 cm) en 100 pagina&#39;s.<br>
<br>
De inhoud bestaat uit:<br>
&#8226; tekeningen met schematische weergave van de hulpen<br>
&#8226; korte beschrijvingen van de hulpen<br>
&#8226; alles op alfabetische volgorde per onderdeel<br>
&#8226; een heel klein beetje praktische informatie betreffende de theorie van de hulpen<br>
</b>
<br>
<a class="speciaalwittekst" href="#bestellen">Bestellen?</a><br>
<br>
	</td>
	</tr>
 	</table>
<br>
<br>
<br>
<br>

<br>
<br>
<h2 id="verzendkosten"></h2>
<br>


	<table border="2">
	<tr>
	<td colspan="2" class="letterwit" align="center">
<h1>VERZENDKOSTEN</h1>
	</td>
	</tr>
	<tr>
	<td width="330" class="letterwit" align="center">
<br>
<b>NEDERLAND</b><br>
<br>
	</td>
	<td width="330" class="letterwit" align="center">
<br>
<b>EUROPA</b><br>
<br>
	</td>
	</tr>
	<tr>
	<td class="letterwit"  align="left">
		<table>
		<tr>
		<td class="letterwit"  align="left">
1 boekje
		</td>
		<td class="letterwit"  align="left">
&#8364; 3,50
		</td>
		</tr>
		<tr>
		<td class="letterwit"  align="left">
2 t/m 6 boekjes
		</td>
		<td class="letterwit"  align="left">
&#8364; 4,50
		</td>
		</tr>
		<tr>
		<td class="letterwit"  align="left">
meer dan 6 boekjes
		</td>
		<td class="letterwit"  align="left">
&#8364; 7,00
		</td>
		</tr>
		</table>
<br>
	</td>
	<td class="letterwit"  align="left">
<br>
		<table>
		<tr>
		<td class="letterwit"  align="left">
1 boekje
		</td>
		<td class="letterwit"  align="left">
&#8364;  4,50
		</td>
		</tr>
		<tr>
		<td class="letterwit"  align="left">
2,3  boekjes
		</td>
		<td class="letterwit"  align="left">
&#8364;  8,00
		</td>
		</tr>
		</tr>
		<tr>
		<td class="letterwit"  align="left">
meer dan 3 boekjes
		</td>
		<td class="letterwit"  align="left">
&#8364; 9,00
		</td>
		</tr>
		</table>
<br>
	</td>
	</tr>
 	</table>
<br>
<br>
<h2 id="bestellen"></h2>
<br>

   <form class="bestelformulier" method="post" action="freecontactformprocess.php" onsubmit="return validate.check(this)">


  
	<table width="600px" class="letterwit">
	<tr>
	<td colspan="2">
<br><b>Hier kunt een boekje bestellen:</b><br>	  
	 <div class="freecontactformmessage">Gemarkeerde velden <span class="required_star"> * </span> graag invullen.</div>
<br>
<br>	  
	 </td>
	 </tr>
	 <tr>
	 <td valign="top" align="left" colspan="2">
<label style=" font-size: 18px; line-height:25px; color:#FFFFCC;">  Springoefeningen in zakformaat</label><br><br>
		<table  width="100%">
	 	<td align="left" width="80px">
	  	<label for="Aantal1" class="required" style=" font-size: 16px; line-height:35px; color:#FFFFCC;">Aantal<span class="required_star"> * </span></label>
	 	</td>
	  	<td><input type="text" id="Aantal1" name="Aantal1"  maxlength="3" size="4" data-price="13.95" value="0"/></td>
                <td align="right" width="50px">&euro; <span class="subtotaal"></span></td>
		</tr>
		</table>
<br>
<br>
	</td>
	</tr>
	<tr>
	 <td valign="top" align="left" colspan="2">
<label style=" font-size: 18px; line-height:25px; color:#FFFFCC;">  Dressuuroefeningen in zakformaat</label><br>
		<table  width="100%">
	 	<td  align="left" width="80px">
	  	<label for="Aantal2" class="required" style=" font-size: 16px; line-height:35px; color:#FFFFCC;">Aantal<span class="required_star"> * </span></label>
	 	</td>
	  	<td><input type="text" id="Aantal2" name="Aantal2"  maxlength="3" size="4" data-price="13.95" value="0"/></td>
                <td align="right" width="50px">&euro; <span class="subtotaal"></span></td>
		</tr>
		</table>
<br>
<br>
	</td>
	</tr>
	<tr>
	<td valign="top" align="left" colspan="2">
<label style=" font-size: 18px; line-height:25px; color:#FFFFCC;">  Hulpen dressuur in zakformaat</label><br>

		<table  width="100%">
	 	<td  align="left" width="80px">
	  	<label for="Aantal3" class="required" style=" font-size: 16px; line-height:35px; color:#FFFFCC;">Aantal<span class="required_star"> * </span></label>
	 	</td>
	  	<td><input type="text" id="Aantal3" name="Aantal3"  maxlength="3" size="4" data-price="13.95" value="0"/></td>
                <td align="right" width="50px">&euro; <span class="subtotaal"></span></td>
		</tr>
		</table>
<br
	</td>
	</tr>
	<tr>
	<td  align="left" >
<br>
	</td>
	<td  align="right" >
_______________
	</td>
	</tr>
	<tr>
	<td  align="left" colspan="2">
		<table >
	  	<td><input type="text"  readonly maxlength="1" size="1" data-price="0"  style="background: transparent; border: none;"/></td>
		</tr>
		</table>
	 </td>
	</tr>
	<tr>
	<td valign="top" align="left" colspan="2">

		<table width="100%">
	        <tr> 
	 	<td valign="top" align="right">
    <span style=" font-size: 18px; line-height:25px; color:#FFFFCC;"><b>Subtotaal: </b></span>
	 	</td>
		<td  align="right">&euro; <span  class="subtotaalprijs"></span>
		</td>
		</tr>
		</table>
	 </td>
	 </tr>
	 <tr>      
	 <td valign="top" align="left" colspan="2"> 

		<table  width="100%">
	        <tr>     
                <td align="right" style=" font-size: 18px; line-height:25px; color:#FFFFCC;">korting<input type="hidden" id="korting" placeholder="korting" maxlength="3" size="4" data-price="-1" value="" /></td>
                <td align="right">&euro; <span class="subtotaal"></span></td>
		</tr>
		</table>
<br>
	 </td>	</tr>
	<tr>
	<td  align="left" >
<br>
	</td>
	<td  align="right" >
_______________
	</td>
	</tr>
	<tr>
	<td  align="left" colspan="2">
		<table >
	  	<td><input type="hidden"  readonly maxlength="1" size="1" data-price="0"  style="background: transparent; border: none;"/></td>
		</tr>
		</table>
	 </td>
	 </tr>
	 <tr>
	 <td valign="top" align="left" colspan="2">
		<table width="100%">
	        <tr> 
	 	<td valign="top" align="right">
                 <span style=" font-size: 18px; line-height:25px; color:#FFFFCC;"><b>Subtotaal: </b></span>
	 	<td align="right" width="50px">&euro; <span  class="suubtotaalprijs"></span></td>
		</tr>
		</table>
	 </td>
	 </tr>
	 <tr>
	 <td valign="top" align="left" colspan="2">
                <table style="width:100%">
	        <tr>
                <td align="left" style=" font-size: 18px; line-height:35px; color:#FFFFCC;">
                Verzendkosten <span class="required_star"> * </span>
                </td>
	        </tr>
	        <tr>        
	        <td  align="left" style=" font-size: 16px; line-height:35px; color:#FFFFCC;">
                <INPUT TYPE="radio" name="Land" id="Land" value="Buitenland">  Buitenland (Europa)
                </td>
                <td align="right" width="50px">&euro; <span class="porto"></span></td>
	        </tr>
	        <tr> 	
	        <td  align="left" style=" font-size: 16px; line-height:35px; color:#FFFFCC;">
                <INPUT TYPE="radio" name="Land" id="Land" value="Nederland">  Nederland<br>
                </td>
                <td align="right" width="50px">&euro; <span class="porto"></span></td>
                </tr>
                </table>
         </td>
	 </tr>
	 <tr>
	 <td valign="top" align="left" colspan="2">
		<table width="100%">
	        <tr> 
	 	<td  align="right">
    <span style=" font-size: 18px; line-height:25px; color:#FFFFCC;"><b>Totaalprijs: </b></span>
	 	</td>
		<td align="right" width="50px">&euro; <span  class="totaalprijs"></span></td>
		</tr>
		</table>
	 </td>
	 </tr>
	 <tr>
	 <td valign="top" align="left" colspan="2">
<br>
<br>
<br>
	 </td>
	 </tr>
         <tr>
	 <td valign="top" align="left">
	  <label for="Voornaam" class="required">Voornaam<span class="required_star"> * </span></label>
	 </td>
	 <td valign="top" align="left" >
	  <input type="text" name="Voornaam" id=Voornaam" maxlength="400" style="width:400px">
	 </td>
	</tr>
	<tr>
	 <td valign="top" align="left">
	  <label for="Full_Name" class="required">Achternaam<span class="required_star"> * </span></label>
	 </td>
	 <td valign="top" align="left" >
	  <input type="text" name="Full_Name" id="Full_Name" maxlength="400" style="width:400px">
	 </td>
	</tr>
	<tr>
	 <td valign="top" align="left">
	  <label for="Email_Address" class="required">E-mail<span class="required_star"> * </span></label>
	 </td>
	 <td valign="top" align="left">
	  <input type="text" name="Email_Address" id="Email_Address" maxlength="400" style="width:400px">
	 </td>
	</tr>
	<tr>
	</tr>
	<tr>
	 <td valign="top" align="left">
	  <label for="Adres" class="required">Adres<span class="required_star"> * </span></label>
	 </td>
	 <td valign="top" align="left">
	  <input type="text" name="Adres" id="Adres" maxlength="400" style="width:400px">
	 </td>
	</tr>
	<tr>
	 <td valign="top" align="left">
	  <label for="Postcode" class="required"  >Postcode<span class="required_star"> * </span></label>
	 </td>
	 <td valign="top" align="left">
	  <input type="text" name="Postcode" id="Postcode" maxlength="60" style="width:60px">
	 </td>
	</tr>
	<tr>
	 <td valign="top" align="left">
	  <label for="Woonplaats" class="required">Woonplaats<span class="required_star"> * </span></label>
	 </td>
	 <td valign="top" align="left">
	  <input type="text" name="Woonplaats" id="Woonplaats" maxlength="400" style="width:400px">
	 </td>
	</tr>
	<tr>
	 <td valign="top" align="left" >
	  <label for="Thuisland" class="required">Land<span class="required_star"> * </span></label>
	 </td>
	 <td valign="top" align="left">
	  <input type="text" name="Thuisland" id="Thuisland" maxlength="400" style="width:400px">
	 </td>
	</tr>
	<tr>
	 <td valign="top" align="left">
	  <label for="Your_Message" class="not-required">Opmerkingen</label>
	 </td>
	 <td valign="top" align="left">
	  <textarea style="width:230px;height:160px" name="Your_Message" id="Your_Message" maxlength="2000"></textarea>
	 </td>
	</tr>
  
      <tr>

	 <td colspan="2" style="text-align:center" >
	  <div class="antispammessage">
<br>
<br>
	  Beantwoord a.u.b de volgende vraag om automatische SPAM te voorkomen.
	  <br /><br />
		  <div class="antispamquestion">
		   <span class="required_star"> * </span>
		   Hoeveel is 10 plus 15? &nbsp; 
		   <input type="text" name="AntiSpam" id="AntiSpam" maxlength="100" style="width:30px">
		  </div>
	  </div>
	 </td>
	</tr>
	<tr>

	 <td colspan="2" style="text-align:center" >
	 <br /><br />
	  <input type="submit" value="Bestel" style="width:200px;height:40px">
	  <br /><br />

	  <br /><br />
	 </td>
	</tr>
	</table>
	</form>


<br>
<br>
<br>

   </td>
   </tr>
   </table>




</div> <!-- sluit content_tekstweetjes -->
</div> <!-- sluit content_container -->
</div> <!-- sluit main_container -->
</div> <!-- sluit achter-main_container -->
</div> <!-- sluit main -->





<div id="footer_container">


<div id="footer">
	<div id="tekstreclame">
		<iframe id="iframereclame-footer" name="iframereclame-footer" class="iframereclame-footer" src="../../centrale/reclame-footer.html"  frameborder="0" allowtransparency="true" scrolling=no>
		</iframe>
	</div>
	<div id="infomenu">
		<iframe id="iframeinfo" name="iframereinfo" class="iframeinfo" src="../../centrale/infomenu.html"  frameborder="0" allowtransparency="true" scrolling=no>
		</iframe>
	</div>
	<div id="webdesign">
Webdesign: ELJO
	</div>

</div>
</div> <!-- sluit footer_container -->





</body>
</html>
