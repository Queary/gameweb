//alert("ds")
'use strict'
function connect_file_core(url) {
        var script = document.createElement('script');
        script.src = url;
        document.getElementsByTagName('head')[0].appendChild(script);
    }
//может эт f перебросить в redu
function next(path) {
  return document.location.href =path
}
connect_file_core("JS/Lib/redu.js");
connect_file_core("JS/main.js");
