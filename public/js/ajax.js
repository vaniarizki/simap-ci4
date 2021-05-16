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

  function Wishlist(id, bool) {
    var xhttp = new XMLHttpRequest();
		
    if (bool) {
      xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById(id).classList.remove("active");
				}
			};
			xhttp.open("DELETE", "/user/wishlist/delete/" + id, true);
			xhttp.send();
    } else {
			xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById(id).classList.add("active");
				}
			};
			xhttp.open("POST", "/user/wishlist/save/" + id, true);
			xhttp.send();
    }
    
  }