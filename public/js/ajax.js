var keyword=document.getElementById('keyword');
var container=document.getElementById('ubah');

keyword.addEventListener('keyup', function(){
	var xhr=new XMLHttpRequest();
	xhr.onreadystatechange=function(){
		if(xhr.readyState==4 && xhr.status==200){
			container.innerHTML=xhr.responseText;
		}
	}
	xhr.open('GET', '../view.php?keyword='+keyword.value,true);
	xhr.send();
	
});

	