function menu(){
	var m = ['cadastro','produto','venda'];
	var html ='';
	for(var i=0; i<m.length;i++) {
		html += '<li id="page'+[i+1]+'"><a href="#" id="'+[i+1]+'" class="'+m[i]+'">'+ucwords(m[i])+'</a></li>';
	}
	$(".menus").html(html);
}

function ajaxInit( ) {
	var xmlhttp;
	try {
		xmlhttp = new XMLHttpRequest();
	} catch(ee){
		try{
			xmlhttp = new ActiveXObject ("Msxml2.XMLHTTP");
		} catch(e){
			try{
				xmlhttp = new ActiveXObject ("Microsoft.XMLHTTP");
			}catch (E){
				xmlhttp = false;
			}
		}
	}
	return xmlhttp;
}

function replaceAll(string, token, newToken){
    while(string.indexOf(token) != -1){
        string = string.replace(token, newToken);
    }
    return string;
}
function ucwords(palavras){	
	palavras = palavras.split("");
	var tmp="";
	for(i=0;i<palavras.length;i++){
		if(palavras[i-1]){
			if(palavras[i-1]==" "){
				palavras[i] = palavras[i].replace(palavras[i],palavras[i].toUpperCase());
			}
		} else{
			palavras[i] = palavras[i].replace(palavras[i],palavras[i].toUpperCase());
		}
		tmp+=palavras[i];
	}
	return tmp;
}

function ajax(field,caminho,txt){
	if(txt == null){
		txt = 'Carregando....';
	}
    var ajax = ajaxInit();
      ajax.onreadystatechange = function(){
        if(ajax.readyState != 4){
        	
        		$(field).load(caminho);
				$(field).css('background','url(img/fb-loading.gif) center no-repeat');
				$('title').text(txt);
        
        } else{
        	$(field).css('background','#F4f4f4');
			$('title').text('Projeto MRC');
        }
          
      }
      ajax.open("get", caminho);
      ajax.send();
      return false;
  }
var links = "#page1";
function addLink(data){
	$(links).removeClass('active');
	links = $(data).attr('id');
	links = "#page"+links;
	$(links).addClass('active');
}


$(document).ready(function(){
	menu();
	$("#btn-cancelar").click(function(){
		$("form").attr('action','cadastro/lista.php');
		$("form").submit();
	});
	
	
	$(".menus li a").click(function(){
		var id = $(this).attr('class');
		ajax('#table', 'index.php/'+id+'/pages/'+id);
		$(".acoes").attr('id', id);
		$('.acoes').html(id);
		/*$.ajax({
			type: "POST",
			url: id+"/lista.php",
			success: function(buscar){
				$("#table").html(buscar);
				$(this).parent().attr('class','active');
			}
		});*/
		$(".menus-crumb").html('<li><a href="">Home</a></li><li><a>'+ucwords(id)+'</a></li>');
		addLink(this);
	});

	$(".acoes").click(function(){
		var acoes = $(this).attr('id');
		//var codigo = $(this).attr('id');
		//var act = $(this).attr('act');
		ajax('#table','index.php/cadastro/save/');
		if(acoes.substr(-1) == 'a')
			$(".menus-crumb").html('<li><a href="">Home</a></li><li><a>'+ucwords(acoes)+'</a></li><li><a>'+ucwords('nova '+acoes)+'</a></li>');
		else
			$(".menus-crumb").html('<li><a href="">Home</a></li><li><a>'+ucwords(acoes)+'</a></li><li><a>'+ucwords('novo '+acoes)+'</a></li>');
	});
});