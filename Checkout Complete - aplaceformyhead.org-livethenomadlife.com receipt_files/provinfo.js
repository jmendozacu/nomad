define([], function() {
    'use strict';

    var provinfo = {"brand":"bluehost","cdn":"//bluehost-cdn.com","code":"bh","domain":"bluehost.com","name":"Bluehost","phone":["(888) 401-4678","(801) 765-9400"]};
    provinfo.cdn = location.protocol + provinfo.cdn;

    window.provinfo = provinfo;

    return provinfo;
});