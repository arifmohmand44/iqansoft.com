$(function(){function t(e){"success"==e.result?($("form#reused_form").hide(),$("#success_message").show(),$("#error_message").hide()):($("#error_message").append("<ul></ul>"),jQuery.each(e.errors,function(e,t){$("#error_message ul").append("<li>"+e+":"+t+"</li>")}),$("#success_message").hide(),$("#error_message").show(),$('button[type="button"]',$form).each(function(){$btn=$(this),label=$btn.prop("orig_label"),label&&($btn.prop("type","submit"),$btn.text(label),$btn.prop("orig_label",""))}))}$("#reused_form").submit(function(e){e.preventDefault(),$form=$(this),$('button[type="submit"]',$form).each(function(){$btn=$(this),$btn.prop("type","button"),$btn.prop("orig_label",$btn.text()),$btn.text("Sending ...")});e=new FormData(this);$.ajax({type:"POST",url:"handler.php",data:e,success:t,dataType:"json",processData:!1,contentType:!1,cache:!1})})});