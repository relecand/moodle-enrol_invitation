(function(tinymce){tinymce.create('tinymce.plugins.NanogongPlugin',{init:function(ed,url){var cls='mceNanogong';ed.addCommand('mceNanogong',function(){ed.windowManager.open({file:url+'/nanogong.php',width:320,height:180,inline:1},{plugin_url:url})});ed.addButton('nanogong',{title:'NanoGong',image:url+'/img/nanogong.gif',cmd:cls});ed.onInit.add(function(){if(ed.theme.onResolveName){ed.theme.onResolveName.add(function(g,h){if(h.node.nodeName=='IMG'&&ed.dom.hasClass(h.node,cls))h.name='nanogong'})}if(ed&&ed.plugins.contextmenu){ed.plugins.contextmenu.onContextMenu.add(function(plugin,menu,element){if(element.nodeName=='IMG'&&ed.dom.hasClass(element,cls)){menu.removeAll();menu.add({title:'Show NanoGong Voice',icon:'nanogong',cmd:'mceNanogong'});}})}});ed.onClick.add(function(g,h){h=h.target;if(h.nodeName==='IMG'&&g.dom.hasClass(h,cls))g.selection.select(h)});ed.onNodeChange.add(function(h,g,n){g.setActive('nanogong',n.nodeName==='IMG'&&h.dom.hasClass(n,cls))})},getInfo:function(){return{longname:'NanoGong',author:'The Gong Project',authorurl:'http://nanogong.ust.hk',infourl:'http://nanogong.ust.hk',version:tinymce.majorVersion+"."+tinymce.minorVersion}}});tinymce.PluginManager.add('nanogong',tinymce.plugins.NanogongPlugin)})(tinymce);