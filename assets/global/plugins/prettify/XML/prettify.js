//----------------
if (!Prettify) {
  var Prettify = {};
}
//----------------

Prettify.XML = (function () {
  var xmlStr;

  function PrettyXML(xml) {
    if(xml) this.setStr(xml);
  };

  PrettyXML.prototype.getXmlStr = function() {
    return xmlStr;
  }

  PrettyXML.prototype.setXmlStr = function(xml) {
    if(!(xml instanceof XMLDocument)) throw new Error('param of function "setXmlStr" is not a xml object');
    xmlStr = (new XMLSerializer()).serializeToString(xml);
    xmlStr = xmlStr.replace(/^(\<\?){1}.*(\?\>){1}/g, '');

    return xmlStr;
  }

  PrettyXML.prototype.convert = function() {
    return textToHtml(vkbeautify.xml(xmlStr));
  }

  PrettyXML.prototype.run = function(id) {
    var elem = document.getElementById(id); 
    elem.className = elem.className.replace("prettyprinted", "");
    elem.innerHTML = this.convert();
    
    prettyPrint();
  }


  //most usable Functions
  //

  function textToHtml(str) {
    return str
           //.replace(/&/g, '&amp;')
           .replace(/</g, '&lt;')
           .replace(/>/g, '&gt;')
           .replace(/"/g, '&quot;')
           .replace(/'/g, '&apos;');
  };

  return PrettyXML;
}());