var i=0;
var hindernis =new Array();
var foto =new Array();
var info=new Array();
var titel=new Array();
			
var myimgarr=new Array(
"../sponsoren2/de-vries-mechanisatie.jpg",
"../sponsoren2/kalis.jpg",
"../sponsoren2/knippen.jpg",
"../sponsoren2/da-vinci.jpg",
"../sponsoren2/valkenhof.jpg",
"../sponsoren2/valkenhof.jpg",
"../sponsoren2/dakar.jpg",
"../sponsoren2/de boer pesse.jpg",
"../sponsoren2/Fikkertakkerbouw.jpg",
"../sponsoren2/kiela.jpg",
"../sponsoren2/kok1.jpg",
"../sponsoren2/kok2.jpg",
"../sponsoren2/reinders.jpg",
"../sponsoren2/paardenfonds-westerbork.jpg",
"../sponsoren2/rabobank.jpg",
"../sponsoren2/dolmans.jpg",
"../sponsoren2/slofstra.jpg",
"../sponsoren2/drefa.jpg",
"../sponsoren2/drefa.jpg",
"../sponsoren2/borker-servicedienst.jpg",
"../sponsoren2/gils.jpg",
"../sponsoren2/kaasbank.jpg",
"../sponsoren2/smidt.jpg",
"../sponsoren2/smidt.jpg",
"../sponsoren2/kaasbank.jpg",
"../sponsoren2/rijsdijk.jpg",
"../sponsoren2/strijker.jpg",
"../sponsoren2/santing.jpg",
"../sponsoren2/nomadis.jpg",
"../sponsoren2/epplejeck.jpg",
"../sponsoren2/paardenfonds-westerbork.jpg",
"../sponsoren2/HSL.jpg",
"../sponsoren2/valkenhof.jpg",
"../sponsoren2/hebo.jpg",
"../sponsoren2/welkoop.jpg",
"../sponsoren2/rijsdijk.jpg",

"../sponsoren2/HSL.jpg",
"../sponsoren2/de-vries-mechanisatie.jpg",
"../sponsoren2/kalis.jpg",
"../sponsoren2/da-vinci.jpg",
"../sponsoren2/knippen.jpg",
"../sponsoren2/smidt.jpg",
"../sponsoren2/vandijk.jpg",
"../sponsoren2/dakar.jpg",
"../sponsoren2/de boer pesse.jpg",
"../sponsoren2/Fikkertakkerbouw.jpg",
"../sponsoren2/smidt.jpg",
"../sponsoren2/kaasbank.jpg",
"../sponsoren2/reinders.jpg",
"../sponsoren2/dolmans.jpg",
"../sponsoren2/da-vinci.jpg",
"../sponsoren2/epplejeck.jpg",
"../sponsoren2/welkoop.jpg",
"../sponsoren2/rijsdijk.jpg",
"../sponsoren2/hebo.jpg",
"../sponsoren2/reinders.jpg"
);

var myimgarrfoto=new Array(
'fotos/start.jpg' ,
'fotos/sprong-op-wal-blauw.jpg',
'fotos/oxer-bij-zwembad.jpg',
'fotos/valkenhof-dubbel.jpg',
'fotos/uilensprong-bij-camping.jpg',
'fotos/valkenhof-dubbel.jpg',
'fotos/punt-aan-de-bosrand.jpg',
'fotos/steil-aan-de-bosrand.jpg',
'fotos/boompjes-voor-waterbak.jpg',
'fotos/bomen-voor-waterbak.jpg',
'fotos/drie-bloembakken.jpg',
'fotos/sprong-op-wal.jpg',
'fotos/camping-huppel.jpg',
'fotos/punt-in-het-bos.jpg',
'fotos/ukkie-na-waterbak.jpg',
'fotos/heuvel-jump.jpg',
'fotos/sky-jump.jpg',
'fotos/gestapelde-bomen.jpg',
'fotos/oxer-bij-de-weg.jpg',
'fotos/dikke-boom-voor-waterbak.jpg',
'fotos/waterbakcombinatiegroengeel.jpg',
'fotos/waterbakcombinatie.jpg',
'fotos/slagboom1.jpg',
'fotos/landhekken.jpg',
'fotos/sprong-op-walgeelgroen.jpg',
'fotos/omas-eettafel.jpg',
'fotos/gruune-sprongies.jpg',
'fotos/breed-naar-smal.jpg',
'fotos/kromme-bomen.jpg',
'fotos/houtstapel-bij-zwembad.jpg',
'fotos/breed-naar-smal.jpg',
'fotos/dikke-blokken1.jpg',
'fotos/dikke-blokken2.jpg',
'fotos/driesprong-na-heide.jpg',
'fotos/opas-hekje.jpg',
'fotos/steil-voor-bosrandpunt.jpg',
'fotos/steil-voor-bosrandsteil.jpg',
'fotos/drentse-bezem.jpg',
'fotos/drentse-paddestoelen.jpg',
'fotos/turn-kast.jpg',
'fotos/heide-dubbel.jpg',
'fotos/slagboom2.jpg',
'fotos/de-laatste.jpg',
'fotos/trakehner.jpg',
'fotos/in-opas-bosje.jpg',
'fotos/coffin.jpg',
'fotos/in-opas-bosjegeel.jpg',
'fotos/uilensprong-na-waterbak.jpg',
'fotos/berken-triple.jpg',
'fotos/slagboom2.jpg',
'fotos/waterbakcombinatieroodzwart.jpg',
'fotos/op-pad.jpg',
'fotos/breed-beeld.jpg',
'fotos/gruune-sprongies1.jpg',
'fotos/gruune-sprongies2.jpg',
'fotos/sprong-na-coffin.jpg'
);

var myimgarrtitel=new Array(
'titels/titel-start.jpg' ,
'titels/titel-sprong-op-wal-blauw.jpg',
'titels/titel-oxer-bij-zwembad.jpg',
'titels/titel-valkenhof-dubbel.jpg',
'titels/titel-uilensprong-bij-camping.jpg',
'titels/titel-valkenhof-dubbel.jpg',
'titels/titel-bosrandkwartet.jpg',
'titels/titel-bosrandkwartet.jpg',
'titels/titel-boompjes-voor-waterbak.jpg',
'titels/titel-bomen-voor-waterbak.jpg',
'titels/titel-drie-bloembakken.jpg',
'titels/titel-sprong-op-wal.jpg',
'titels/titel-camping-huppel.jpg',
'titels/titel-punt-in-het-bos.jpg',
'titels/titel-ukkie-na-waterbak.jpg',
'titels/titel-heuvel-jump.jpg',
'titels/titel-sky-jump.jpg',
'titels/titel-gestapelde-bomen.jpg',
'titels/titel-oxer-bij-de-weg.jpg',
'titels/titel-dikke-boom-voor-waterbak.jpg',
'titels/titel-waterbakcombinatiegroengeel.jpg',
'titels/titel-waterbakcombinatie.jpg',
'titels/titel-slagboom1.jpg',
'titels/titel-landhekken.jpg',
'titels/titel-sprong-op-wal.jpg',
'titels/titel-omas-eettafel.jpg',
'titels/titel-gruune-sprongies.jpg',
'titels/titel-breed-naar-smal.jpg',
'titels/titel-kromme-bomen.jpg',
'titels/titel-houtstapel-bij-zwembad.jpg',
'titels/titel-breed-naar-smal.jpg',
'titels/titel-dikke-blokken.jpg',
'titels/titel-dikke-blokken.jpg',
'titels/titel-driesprong-na-heide.jpg',
'titels/titel-opas-hekje.jpg',
'titels/titel-bosrandkwartet.jpg',
'titels/titel-bosrandkwartet.jpg',
'titels/titel-drentse-bezem.jpg',
'titels/titel-drentse-paddestoelen.jpg',
'titels/titel-turn-kast.jpg',
'titels/titel-heide-dubbel.jpg',
'titels/titel-slagboom2.jpg',
'titels/titel-de-laatste.jpg',
'titels/titel-trakehner.jpg',
'titels/titel-in-opas-bosje.jpg',
'titels/titel-coffin.jpg',
'titels/titel-in-opas-bosje.jpg',
'titels/titel-uilensprong-na-waterbak.jpg',
'titels/titel-berken-triple.jpg',
'titels/titel-finish.jpg',
'titels/titel-waterbakcombinatieroodzwart.jpg',
'titels/titel-op-pad.jpg',
'titels/titel-breed-beeld.jpg',
'titels/titel-gruune-sprongies.jpg',
'titels/titel-gruune-sprongies.jpg',
'titels/titel-sprong-na-coffin.jpg'
);


var myimgarrinfo=new Array(
'info/zwart-vlak.jpg',
'info/zwart-vlak.jpg',
'info/zwart-vlak.jpg',
'info/zwart-vlak.jpg',
'info/zwart-vlak.jpg',
'info/zwart-vlak.jpg',
'info/zwart-vlak.jpg',
'info/zwart-vlak.jpg',
'info/zwart-vlak.jpg',
'info/zwart-vlak.jpg',
'info/zwart-vlak.jpg',
'info/zwart-vlak.jpg',
'info/zwart-vlak.jpg',
'info/zwart-vlak.jpg',
'info/zwart-vlak.jpg',
'info/zwart-vlak.jpg',
'info/zwart-vlak.jpg',
'info/zwart-vlak.jpg',
'info/zwart-vlak.jpg',
'info/zwart-vlak.jpg',
'info/zwart-vlak.jpg',
'info/zwart-vlak.jpg',
'info/zwart-vlak.jpg',
'info/zwart-vlak.jpg',
'info/zwart-vlak.jpg',
'info/zwart-vlak.jpg',
'info/gruune-sprongies.jpg',
'info/zwart-vlak.jpg',
'info/zwart-vlak.jpg',
'info/zwart-vlak.jpg',
'info/zwart-vlak.jpg',
'info/zwart-vlak.jpg',
'info/zwart-vlak.jpg',
'info/zwart-vlak.jpg',
'info/zwart-vlak.jpg',
'info/zwart-vlak.jpg',
'info/zwart-vlak.jpg',
'info/zwart-vlak.jpg',
'info/zwart-vlak.jpg',
'info/zwart-vlak.jpg',
'info/zwart-vlak.jpg',
'info/zwart-vlak.jpg',
'info/zwart-vlak.jpg',
'info/zwart-vlak.jpg',
'info/zwart-vlak.jpg',
'info/zwart-vlak.jpg',
'info/zwart-vlak.jpg',
'info/zwart-vlak.jpg',
'info/berken-triple.jpg',
'info/zwart-vlak.jpg',
'info/zwart-vlak.jpg',
'info/zwart-vlak.jpg',
'info/zwart-vlak.jpg'
);

function dd()

{
var i = opener.document.displayForm.advertentie.value;
document.getElementById("myimg(i)").src=myimgarr[i++];

var i = opener.document.displayForm.advertentie.value;
document.getElementById("myimgfoto(i)").src=myimgarrfoto[i++];

var i = opener.document.displayForm.advertentie.value;
document.getElementById("myimgtitel(i)").src=myimgarrtitel[i++];

var i = opener.document.displayForm.advertentie.value;
document.getElementById("myimginfo(i)").src=myimgarrinfo[i++];

}
						



var Urlpop= new Array();
var hindernis = new Array();
var naamhindernis = new Array();
var foto = new Array();
var naam = new Array();
var title =  "Hindernis"
var autoclose = true
var beIE = document.all?true:false
var i=0;


function openFrameless()
{
urlPop ="hindernis.html";
nfw=window.open(urlPop,"nfw",'width=600,height=700,left=0,top=0,scrollbars=0,toolbar=0,titlebar=0,menubar=0,location=0,status=0');
nfw.focus();   
}






