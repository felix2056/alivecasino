//----------------
if (!Prettify) {
  var Prettify = {};
}
//----------------

Prettify.JSON = (function () {
  var _json;

  function PrettyJson(json) {
    if(json) this.setStr(json);
  };

  PrettyJson.prototype.getJsonStr = function() {
    return _json;
  }

  PrettyJson.prototype.setJsonStr = function(json) {
    if(!isValidJson(json)) throw new Error('param of function "setJsonStr" is not a valid json');
    if(typeof json == 'string') json = JSON.parse(json);
    return _json = json;
  }

  PrettyJson.prototype.convert = function() {
    var jsonLine = /^( *)("[\w]+": )?("[^"]*"|[\w.+-]*)?([,[{])?$/mg;
    return JSON.stringify(_json, null, 3)
       .replace(/&/g, '&amp;').replace(/\\"/g, '&quot;')
       .replace(/</g, '&lt;').replace(/>/g, '&gt;')
       .replace(jsonLine, replacer);
  }

  PrettyJson.prototype.run = function(id) {
    document.getElementById(id).innerHTML = this.convert();
    //prettyPrint();
  }


  //most usable Functions
  //

  function isValidJson(obj) {
    try {
      if(typeof obj == 'string') {
        JSON.parse(obj);
      } else if(typeof obj == 'object') {
        JSON.stringify(obj);
      } else {
        throw new Error();
      }
    } catch (e) {
        return false;
    }
    return true;
  }

  function replacer(match, pIndent, pKey, pVal, pEnd) {
    var key = '<span class=json-key>';
    var val = '<span class=json-value>';
    var str = '<span class=json-string>';
    var r = pIndent || '';
    if (pKey)
       r = r + key + pKey.replace(/[": ]/g, '') + '</span>: ';
    if (pVal)
       r = r + (pVal[0] == '"' ? str : val) + pVal + '</span>';
    return r + (pEnd || '');
  }

  return PrettyJson;
}());