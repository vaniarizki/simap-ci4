var keyword1=document.getElementById('keyword1');
var container=document.getElementById('view1');

keyword1.addEventListener('keyup', function(){
	var xhr=new XMLHttpRequest();
	xhr.onreadystatechange=function(){
		if(xhr.readyState==4 && xhr.status==200){
			container.innerHTML=xhr.responseText;
		}
	}
	xhr.open('GET', 'view_harga.php?keyword1='+keyword1.value,true);
	xhr.send();
	
});

	