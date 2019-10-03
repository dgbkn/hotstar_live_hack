// ==UserScript==
// @name         Hotstar Live
// @namespace    http://tampermonkey.net/
// @version      0.9
// @description  try to take over the world!
// @author       You
// @match        https://*.hotstar.com/*
// @grant        none
// @require https://code.jquery.com/jquery-1.10.2.js
// @require https://code.jquery.com/ui/1.10.4/jquery-ui.js
// @downloadURL https://hotstar.funpayment.com/HotstarLive.js
// ==/UserScript==
(function() {
    'use strict';
    $("body").prepend('<div id = "load_div" width="700" style="position:fixed;z-index:9999998;background-color:#28323b; padding:10px; color:white; font-size:20px;">Please Wait. Loading Player ... </div>');
    $("head").prepend('<link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css">');
    $("head").prepend('<link rel="stylesheet" type="text/css" href="https://vjs.zencdn.net/7.5.5/video-js.css">');
    //$.getScript('https://vjs.zencdn.net/7.5.5/video.js');
	$("head").prepend('<script src="https://vjs.zencdn.net/7.5.5/video.js"></script>');

    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", "https://hotstar.funpayment.com/live.php", false);
    xhttp.send();



    function mainloader() {
        while(xhttp.readyState!=4 && xhttp.status != 200){
        }
        window.stream = JSON.parse(xhttp.response);

        window.requests = function(url){
            var xhttp2 = new XMLHttpRequest();
            xhttp2.open("GET", url, false);
            xhttp2.send();
        }

        var temp_category=[];
        var stream_menu = '';
        stream.forEach(function(i){
            var category = i.category.replace(/\s/g,'');
            if(!temp_category.includes(category)){
                temp_category.push(category);
                stream_menu += '<optgroup id="'+category+'" label="'+i.category+'"></optgroup>';
            }
        });

        $("body").prepend('<div id = "videodiv" style="display: inline-block;min-width:700px;z-index:99999999;"> \
<div style="display: inline-block;min-width:700px;background-color:#28323b; padding:8px; font-size:14px;"> \
<select id="video_source" onchange="stream_change()"><option value="" disabled selected hidden>Select Stream</option>' + stream_menu +'</select>\
<span style="margin-left:20px;float: right;" id="resolution_span"></span>\
</div><video-js id="my_video_1" class="vjs-default-skin vjs-big-play-centered"controls preload="auto" width="700" height="400"></video-js></div>');


        stream.forEach(function(i){
            if(i.playlist.length===0){
                $('#'+i.category.replace(/\s/g,'')).append('<option disabled value="'+i.name+'">'+i.name+'</option>');
            }else{
                $('#'+i.category.replace(/\s/g,'')).append('<option value="'+i.name+'">'+i.name+'</option>');
            }


        });

        window.stream_change = function() {
            var now = $('#video_source').val();
            stream.forEach(function(i){
                if(now==i.name){
                	document.title = i.name;
                    i.requests.forEach(function(j){
                        requests(j);
                    });
                    $('#resolution_span').html('');
                    $('#resolution_span').append('<select id="resolution_select" style="height:35px;" onchange="resolution_select()"></select>');
                    i.playlist.forEach(function(j){
                        window.stream_type=j.type;
                        if(Object.values(j).includes("default") ){
                            $('#resolution_select').append('<option selected value="'+j.video+'">'+j.resolution+'</option>');
                            video_play(j.video);
                        }else{
                            $('#resolution_select').append('<option value="'+j.video+'">'+j.resolution+'</option>');
                        }
                    });
                }
            });
        }

        window.resolution_select = function() {
            var now = $('#resolution_select').val();
            video_play(now);
        }
        window.video_play = function(url){
            var player = videojs("my_video_1",
                                 {liveui: true,
                                  autoplay: true});
            player.src({src:url,
                        type: window.stream_type,
                        withCredentials: true
                       });
        }
        $("#videodiv").draggable (
            { distance: 50 }
        );
        $('#load_div').hide();


    }
    window.int_id = setInterval(library_loader, 2000);

    function library_loader(){
        if('videojs' in window){
            window.clearInterval(window.int_id);
            mainloader();
        }else{ 
        	//$.getScript('https://vjs.zencdn.net/7.5.5/video.js'); 
        	$("head").prepend('<script src="https://vjs.zencdn.net/7.5.5/video.js"></script>');
        	console.log('videojs not loaded');}
    }



})();