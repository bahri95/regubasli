
function getBaseURL() {
    var url = location.href;  // entire url including querystring - also: window.location.href;
    var baseURL = url.substring(0, url.indexOf('/', 14));

    if (baseURL.indexOf('http://localhost') != -1) {
        // Base Url for localhost
        var url = location.href;  // window.location.href;
        var pathname = location.pathname;  // window.location.pathname;
        var index1 = url.indexOf(pathname);
        var index2 = url.indexOf("/", index1 + 1);
        var baseLocalUrl = url.substr(0, index2);

        return baseLocalUrl + "/";
    }
    else {
        // Root Url for domain name
        return baseURL + "/";
    }

}
$(document).ready(function(){
    var baseURL = getBaseURL();
    new jPlayerPlaylist({
        jPlayer: "#jquery_jplayer_1",
        cssSelectorAncestor: "#jp_container_1",
        
  ssSelector: {
            stop: ''
        }
    }, [
        {  
            mp3:baseURL+"doc/audio/dmsisound.mp3",
            oga:baseURL+"doc/audio/dmsisound.ogg"
        }
    ], 


    {
         playlistOptions: {
                autoPlay: true,
                enableRemoveControls: true
              },
        swfPath: "js",
        supplied: "oga, mp3",
        wmode: "window",
        smoothPlayBar: true,
        keyEnabled: true,
        
        

    });

  

});