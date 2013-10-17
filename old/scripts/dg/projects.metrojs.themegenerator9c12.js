// set a global variable for global.js to use the .preview container, because its the widest element on the page
window.contentWidthSel = ".preview";
$(document).ready(function () {
        var files = {
            'variables': '/scripts/metrojs/src/css/variables.less?v=' + window.MetroJsVersion,
            'liveTile': '/scripts/metrojs/src/css/liveTile.less?v=' + window.MetroJsVersion,
            'theme': '/scripts/metrojs/src/css/theme.less?v=' + window.MetroJsVersion,
            'appbar': '/scripts/metrojs/src/css/appbar.less?v=' + window.MetroJsVersion
        };
        var variablesLess;
        $.get(files["variables"], function (data) {
            variablesLess = data;
        });
        function compileFile(filename, callback) {
            var key = filename;
            filename = files[key];
            var result = '',
                minify = $("#minify").is(":checked"),
                parser = new less.Parser({
                    filename: filename,
                    paths: ['/scripts/metrojs/src/css/']
                });
            $.get(filename, function (data) {
                // handle the imports locally
                data = data.replace('@import "variables.less";', variablesLess);
                parser.parse(data, function (err, tree) {
                    if (err) {
                        result += "ERROR: "
                        for (var i in err)
                            result += err[i];
                        callback(result, key);
                        parser = null;
                    } else {
                        result += tree.toCSS({
                            compress: minify
                        });
                        callback(result, key);
                        parser = null;
                    }
                });
            });
        }
        function compileCss(callback) {
            var results = {
                    liveTile: '',
                    theme: '',
                    appbar: '',
                },
                srcFiles = {},
                hits = 0;
            $(".less-files").find("input[type=checkbox]").each(function () {
                if ($(this).is(":checked")) {                    
                    srcFiles[$(this).val()] = $(this).val();
                    hits++;
                }
            });
            if (hits === 0) {
                alert('Please select a file');
                return;
            }
            function complete(){
                hits--;
                if (hits <= 0)
                    callback(results.liveTile + results.theme + results.appbar);
            }
            // update the variables file
            variablesLess = variablesLess.replace(/@height: .+?;/, "@height: " + $("#height").val() + ";");
            variablesLess = variablesLess.replace(/@width: .+?;/, "@width: " + $("#width").val() + ";");
            variablesLess = variablesLess.replace(/@margin: .+?;/, "@margin: " + $("#margin").val() + ";");
            // compile each file
            for (var i in srcFiles) {
                var key = i;
                compileFile(key, function (data, k) {
                    results[k] = data;                    
                    complete();
                });
            }
        }
        $('.generate').click(function () {
            var css = '',
                $msg = $(".message").text("compiling...");
            compileCss(function (data) {
                css = data;                
                if (!$("#theme").is(":checked")) {
                    // add some css to make sure the tiles are visible
                    css += ".live-tile>div { background-color:red;  } .tile-group:after{ content:'red background appended'; color:red; font-size:.8em; font-style:italic; white-space:nowrap; }";
                }
                $("#results").val(data);
                injectHtmlIntoFrame(css);
                var d = new Date();
                var dstring = ("0" + d.getHours()).slice(-2) + ":" + ("0" + d.getMinutes()).slice(-2) + ":" + ("0" + d.getSeconds()).slice(-2);
                $msg.text("complete @" + dstring);
                $(".preview, .results").slideDown();
            });
        });
        function injectHtmlIntoFrame(css) {
            var tiles = "<div class=\"live-tile accent red\"><div>example default tile size</div></div><div class=\"live-tile two-wide accent green\"><div>example two-wide size</div></div>";
            tiles += "<div class=\"live-tile half-tall accent mango\"><div>example half-tall size</div></div>";
            tiles += "<div class=\"live-tile half-tile accent cobalt\"><div>half-tile</div></div>";
            var content = "<!DOCTYPE html><html lang=\"en\"><head><meta charset=\"utf-8\" /><style type=\"text/css\">" + css + "</style></head><body><div class=\"tile-group four-wide\">" + tiles + "</div></body></html>";
            var iframe = document.createElement("iframe");
            iframe.style.width = "960px";
            iframe.style.height = "240px";
            var placeHolder = document.getElementById('previewPlaceHolder');
            while (placeHolder.firstChild) {
                placeHolder.removeChild(placeHolder.firstChild);
            }
            placeHolder.appendChild(iframe);
            var frameDoc = iframe.document;
            if (iframe.contentWindow)
                frameDoc = iframe.contentWindow.document; // IE
            // Write into iframe
            frameDoc.open();
            frameDoc.writeln(content);
            frameDoc.close()
        }        
    });