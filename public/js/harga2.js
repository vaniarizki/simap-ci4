var keyword2=document.getElementById('keyword2');
var container=document.getElementById('view');

keyword2.addEventListener('keyup', function(){
	var xhr=new XMLHttpRequest();
	xhr.onreadystatechange=function(){
		if(xhr.readyState==4 && xhr.status==200){
			container.innerHTML=xhr.responseText;
		}
	}
	xhr.open('GET', 'view_harga2.php?keyword2='+keyword2.value,true);
	xhr.send();
	
});

	