PositionX = 10;
PositionY = 10;
defaultWidth  = 100;
defaultHeight = 100;

//kinda important
var AutoClose = true;

//don't touch
function popImage(imageURL,imageTitle){
  var imgWin = window.open('','_blank','scrollbars=no,resizable=1,width='+defaultWidth+',height='+defaultHeight+',left='+PositionX+',top='+PositionY);
window.focus();
  if( !imgWin ) { return true; } //popup blockers should not cause errors
  imgWin.document.write('<html><head><title>'+imageTitle+'<\/title><script type="text\/javascript">\n'+
    'function resizeWinTo() {\n'+
    'if( !document.images.length ) { document.images[0] = document.layers[0].images[0]; }'+
    'var oH = document.images[0].height, oW = document.images[0].width;\n'+
    'if( !oH || window.doneAlready ) { return; }\n'+ //in case images are disabled
    'window.doneAlready = true;\n'+ //for Safari and Opera
    'var x = window; x.resizeTo( oW + 200, oH + 200 );\n'+
    'var myW = 0, myH = 0, d = x.document.documentElement, b = x.document.body;\n'+
    'if( x.innerWidth ) { myW = x.innerWidth; myH = x.innerHeight; }\n'+
    'else if( d && d.clientWidth ) { myW = d.clientWidth; myH = d.clientHeight; }\n'+
    'else if( b && b.clientWidth ) { myW = b.clientWidth; myH = b.clientHeight; }\n'+
    'if( window.opera && !document.childNodes ) { myW += 16; }\n'+
    'x.resizeTo( oW = oW + ( ( oW + 200 ) - myW ), oH = oH + ( (oH + 200 ) - myH ) );\n'+
    'var scW = screen.availWidth ? screen.availWidth : screen.width;\n'+
    'var scH = screen.availHeight ? screen.availHeight : screen.height;\n'+
    'if( !window.opera ) { x.moveTo(Math.round((scW-oW)/2),Math.round((scH-oH)/2)); }\n'+
    '}\n'+
    '<\/script>'+
    '<\/head><body onload="resizeWinTo();"'+(AutoClose?' onblur="self.close();"':'')+'>'+
    (document.layers?('<layer left="0" top="0">'):('<div style="position:absolute;left:0px;top:0px;display:table;">'))+
    '<img src="'+imageURL+'" alt="Loading image ..." title="" onload="resizeWinTo();">'+
    (document.layers?'<\/layer>':'<\/div>')+'<\/body><\/html>');
  imgWin.document.close();
  if( imgWin.focus ) { imgWin.focus(); }
  return false;
}


function getRefToDivMod( divID, oDoc ) {
  if( !oDoc ) { oDoc = document; }
  if( document.layers ) {
    if( oDoc.layers[divID] ) { return oDoc.layers[divID]; } else {
      for( var x = 0, y; !y && x < oDoc.layers.length; x++ ) {
        y = getRefToDivMod(divID,oDoc.layers[x].document); }
      return y; } }
  if( document.getElementById ) { return oDoc.getElementById(divID); }
  if( document.all ) { return oDoc.all[divID]; }
  return document[divID];
}

function openPerfectPopup(oW,oTitle,oContent) {
  var x = window.open('','windowName','width=10,height=10,resizable=1');
  if( !x ) { return true; }
  x.document.open();
  x.document.write('<html><head><title>'+oTitle+'<\/title><\/head><body>'+
    (document.layers?('<layer left="0" top="0" width="'+oW+'" id="myID">')
      :('<div style="position:absolute;left:0px;top:0px;display:table;width:'+oW+'px;" '+
      'id="myID">'))+
    oContent+(document.layers?'<\/layer>':'<\/div>')+'<\/body><\/html>');
  x.document.close();
  var oH = getRefToDivMod( 'myID', x.document ); if( !oH ) { return false; }
  var oH = oH.clip ? oH.clip.height : oH.offsetHeight; if( !oH ) { return false; }
  x.resizeTo( oW + 200, oH + 200 );
  var myW = 0, myH = 0, d = x.document.documentElement, b = x.document.body;
  if( x.innerWidth ) { myW = x.innerWidth; myH = x.innerHeight; }
  else if( d && d.clientWidth ) { myW = d.clientWidth; myH = d.clientHeight; }
  else if( b && b.clientWidth ) { myW = b.clientWidth; myH = b.clientHeight; }
  if( window.opera && !document.childNodes ) { myW += 16; }
 x.resizeTo( oW = oW + ( ( oW + 200 ) - myW ), oH = oH + ( (oH + 200 ) - myH ) );
  var scW = screen.availWidth ? screen.availWidth : screen.width;
  var scH = screen.availHeight ? screen.availHeight : screen.height;
  x.moveTo(Math.round((scW-oW)/2),Math.round((scH-oH)/2));
  if( x.focus ) { x.focus(); }
  return false;
}


// Automatically attach a listener to the window onload, to convert the treesaddEvent(window,"load",convertTrees);// Utility function to add an event listenerfunction addEvent(o,e,f){	if (o.addEventListener){ o.addEventListener(e,f,true); return true; }	else if (o.attachEvent){ return o.attachEvent("on"+e,f); }	else { return false; }}// utility function to set a global variable if it is not already setfunction setDefault(name,val) {	if (typeof(window[name])=="undefined" || window[name]==null) {		window[name]=val;	}}// Full expands a tree with a given IDfunction expandTree(treeId) {	var ul = document.getElementById(treeId);	if (ul == null) { return false; }	expandCollapseList(ul,nodeOpenClass);}// Fully collapses a tree with a given IDfunction collapseTree(treeId) {	var ul = document.getElementById(treeId);	if (ul == null) { return false; }	expandCollapseList(ul,nodeClosedClass);}// Expands enough nodes to expose an LI with a given IDfunction expandToItem(treeId,itemId) {	var ul = document.getElementById(treeId);	if (ul == null) { return false; }	var ret = expandCollapseList(ul,nodeOpenClass,itemId);	if (ret) {		var o = document.getElementById(itemId);		if (o.scrollIntoView) {			o.scrollIntoView(false);		}	}}// Performs 3 functions:// a) Expand all nodes// b) Collapse all nodes// c) Expand all nodes to reach a certain IDfunction expandCollapseList(ul,cName,itemId) {	if (!ul.childNodes || ul.childNodes.length==0) { return false; }	// Iterate LIs	for (var itemi=0;itemi<ul.childNodes.length;itemi++) {		var item = ul.childNodes[itemi];		if (itemId!=null && item.id==itemId) { return true; }		if (item.nodeName == "LI") {			// Iterate things in this LI			var subLists = false;			for (var sitemi=0;sitemi<item.childNodes.length;sitemi++) {				var sitem = item.childNodes[sitemi];				if (sitem.nodeName=="UL") {					subLists = true;					var ret = expandCollapseList(sitem,cName,itemId);					if (itemId!=null && ret) {						item.className=cName;						return true;					}				}			}			if (subLists && itemId==null) {				item.className = cName;			}		}	}}// Search the document for UL elements with the correct CLASS name, then process themfunction convertTrees() {	setDefault("treeClass","mktree");	setDefault("nodeClosedClass","liClosed");	setDefault("nodeOpenClass","liOpen");	setDefault("nodeBulletClass","liBullet");	setDefault("nodeLinkClass","bullet");	setDefault("preProcessTrees",true);	if (preProcessTrees) {		if (!document.createElement) { return; } // Without createElement, we can't do anything		uls = document.getElementsByTagName("ul");		for (var uli=0;uli<uls.length;uli++) {			var ul=uls[uli];			if (ul.nodeName=="UL" && ul.className==treeClass) {				processList(ul);			}		}	}}// Process a UL tag and all its children, to convert to a treefunction processList(ul) {	if (!ul.childNodes || ul.childNodes.length==0) { return; }	// Iterate LIs	for (var itemi=0;itemi<ul.childNodes.length;itemi++) {		var item = ul.childNodes[itemi];		if (item.nodeName == "LI") {			// Iterate things in this LI			var subLists = false;			for (var sitemi=0;sitemi<item.childNodes.length;sitemi++) {				var sitem = item.childNodes[sitemi];				if (sitem.nodeName=="UL") {					subLists = true;					processList(sitem);				}			}			var s= document.createElement("SPAN");			var t= '\u00A0'; // &nbsp;			s.className = nodeLinkClass;			if (subLists) {				// This LI has UL's in it, so it's a +/- node				if (item.className==null || item.className=="") {					item.className = nodeClosedClass;				}				// If it's just text, make the text work as the link also				if (item.firstChild.nodeName=="#text") {					t = t+item.firstChild.nodeValue;					item.removeChild(item.firstChild);				}				s.onclick = function () {					this.parentNode.className = (this.parentNode.className==nodeOpenClass) ? nodeClosedClass : nodeOpenClass;					return false;				}			}			else {				// No sublists, so it's just a bullet node				item.className = nodeBulletClass;				s.onclick = function () { return false; }			}			s.appendChild(document.createTextNode(t));			item.insertBefore(s,item.firstChild);		}	}}