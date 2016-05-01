"use strict";
var UnblockGA = {
    load: function(options){
        if(window.ga && ga.create) {
            if (options.logs === true) {
                console.log('Data sent to Google Analytics without UnblockGA.');
            }
        } else {
            if (options.logs === true) {
                console.log('Data sent to Google Analytics by UnblockGA.');
            }
            var img = document.createElement('img');
            img.setAttribute('style','width:0px;height:0px;display:none;');
            if (typeof options.scriptLocation != 'undefined') {
                img.src = options.scriptLocation + '?tid=' + options.trackingId;
            } else {
                img.src = 'unblockga.php?tid=' + options.trackingId;
            }
            document.body.appendChild(img);
        }  
    }
};