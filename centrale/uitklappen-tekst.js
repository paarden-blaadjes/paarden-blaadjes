var onthouden="aan" 		// actuele status bijhouden met sessie-cookie (aan/uit)
var vorige_verbergen="ja"   // bij nieuw item vorige geopende item dichtvouwen(ja/nee)

if (document.getElementById){
document.write('<style type="text/css">')
document.write('.wisselen{display:none;}')
document.write('</style>')}

function getElementbyClass(classname){
ophalen=new Array()
var teller=0
var alleTags=document.all? document.all : document.getElementsByTagName("*")
for (i=0; i<alleTags.length; i++){
if (alleTags[i].className==classname)
ophalen[teller++]=alleTags[i]}}

function dichtvouwen(omit){
var teller=0
while (ophalen[teller]){
if (ophalen[teller].id!=omit)
ophalen[teller].style.display="none"
teller++}}

function uitvouwen(cid){
if (typeof ophalen!="undefined"){
if (vorige_verbergen=="ja")
dichtvouwen(cid)
document.getElementById(cid).style.display=(document.getElementById(cid).style.display!="block")? "block" : "none"}}

function vernieuwen(){
dichtvouwen("alles")
selectedItem=getselectedItem()
selectedComponents=selectedItem.split("|")
for (i=0; i<selectedComponents.length-1; i++)
document.getElementById(selectedComponents[i]).style.display="block"}

function get_cookie(Name) { 
var search = Name + "="
var returnvalue = "";
if (document.cookie.length > 0) {
offset = document.cookie.indexOf(search)
if (offset != -1) { 
offset += search.length
end = document.cookie.indexOf(";", offset);
if (end == -1) end = document.cookie.length;
returnvalue=unescape(document.cookie.substring(offset, end))}}
return returnvalue;}

function getselectedItem(){
if (get_cookie(window.location.pathname) != ""){
selectedItem=get_cookie(window.location.pathname)
return selectedItem}
else return ""}

function status_opslaan(){
var teller=0, selectedItem=""
while (ophalen[teller]){
if (ophalen[teller].style.display=="block")
selectedItem+=ophalen[teller].id+"|"
teller++}
document.cookie=window.location.pathname+"="+selectedItem}

function do_onload(){
getElementbyClass("wisselen")
if (onthouden=="aan" && typeof ophalen!="undefined")
vernieuwen()}

if (window.addEventListener)
window.addEventListener("load", do_onload, false)
else if (window.attachEvent)
window.attachEvent("onload", do_onload)
else if (document.getElementById)
window.onload=do_onload

if (onthouden=="aan" && document.getElementById)
window.onunload=status_opslaan