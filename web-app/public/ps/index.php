<?php
    if(!isset($topHtml)){
        function toAscii($string){
            return transliterator_transliterate("Any", $string);
        }
        function getString($key){
            return toAscii($GLOBALS["langJSON"][$key]);
        }
        function echoString($key){
            echo getString($key);
        }
        define("notmain", "");
        define("asciionly", "");
        define("imgext", "png");
        include($_SERVER["DOCUMENT_ROOT"] . "/index.php");
    }
?>
<!DOCTYPE html><html lang="en"><head><title>PS!</title><meta name="viewport" content="width=device-width,initial-scale=1.0"><meta charset="UTF-8"><style>body{text-align:center;}form{margin:1%;}form *:not(:first-child){margin-top:1%;}form,form *{max-width:90%;}form,.b{display:inline-block;padding:2px;border:2px solid #0000ff;}.b{font-size:25px;background:none;font-weight:bold;}.b:active{border-color:#0080ff;}</style></head><body><h1><a href="../" style="text-decoration:none;"><span style="color:#0000ff;">P</span><span style="color:#ff0000;">S!</span></a></h1><?php if(isset($topHtml)){echo $topHtml;} ?><form method="post" enctype="multipart/form-data"><label class="b" for="a"><img alt width="32" height="32" src="../images/photovideo.png">&nbsp;<?php echoString("choosefiles"); ?></label><br><input type="file" name="photovideo[]" accept="image/*,video/*" id="a" required multiple><br><label class="b" for="c"><img alt width="32" height="32" src="../images/uploadicon.png">&nbsp;<?php echoString("upload"); ?></label><br><input type="submit" name="ps" id="c"><br><label class="b" style="font-size:16px;font-weight:normal;"><input type="checkbox" name="location" value="1" checked><img alt width="16" height="16" src="../images/location.png"><img alt width="16" height="16" src="../images/uploadicon.png">&nbsp;<?php echoString("attachmylocation"); ?></label></form><form method="post"><label class="b" for="b"><img alt width="32" height="32" src="../images/link.png">&nbsp;<?php echoString("enterlink"); ?></label><br><input type="url" name="filelink" id="b" required><br><label class="b" for="d"><img alt width="32" height="32" src="../images/uploadicon.png">&nbsp;<?php echoString("upload"); ?></label><br><input type="submit" name="ps" id="d"><br><label class="b" style="font-size:16px;font-weight:normal;"><input type="checkbox" name="location" value="1"><img alt width="16" height="16" src="../images/location.png"><img alt width="16" height="16" src="../images/uploadicon.png">&nbsp;<?php echoString("attachmylocation"); ?></label></form><br><br><a href="/" class="b"><img alt width="32" height="32" src="../images/homepage.png">&nbsp;<span><?php echoString("gomainpage"); ?></span></a><?php if(isset($bottomHtml)){echo $bottomHtml;} ?><br><form method="get"><label><img alt width="26" height="26" src="/images/language.png"><?php echoString("language"); ?></string><select name="lang" required><option value="" disabled selected hidden>...</option><?php echo getLangOptions(); ?></select></label><button type="submit"><?php echoString("open"); ?></string></button></form></body></html>