function getPlace(zip){
    if (window.XMLHttpRequest){  
       var xhr = new XMLHttpRequest();
    }
    else{  
       var xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xhr.onreadystatechange = function(){ 
        if (xhr.readyState == 4 && xhr.status == 200){ 
            var result = xhr.responseText;
            var place = result.split(', ');
            document.getElementById("state").value = place[0];
            document.getElementById("city").value = place[1];
            document.getElementById("country").value = "USA";
        }
    }
    xhr.open("GET", "getCityState.php?zip=" + zip);
    xhr.send(null);
}
  
function getTax(zip){
    if (window.XMLHttpRequest){  
        var xhr = new XMLHttpRequest();
    }
    else{  
        var xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xhr.onreadystatechange = function(){ 
        if (xhr.readyState == 4 && xhr.status == 200){ 
            var result = xhr.responseText;
            var place = result.split(', ');
            var subtotal = parseFloat(document.getElementById("subtotal").value);
            document.getElementById("tax").value = Number(place[2]*subtotal).toFixed(2);
            document.getElementById("total").value = Number(subtotal + parseFloat(document.getElementById("tax").value)).toFixed(2);
            document.getElementById("shipping").value = '';
        }
    }
    xhr.open("GET", "getTax.php?zip=" + zip);
    xhr.send(null);
}

function getPrice(product){
    if (window.XMLHttpRequest){  
        var xhr = new XMLHttpRequest();
    }
    else{  
        var xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xhr.onreadystatechange = function(){ 
        if (xhr.readyState == 4 && xhr.status == 200){ 
            document.getElementById("subtotal").value = Number(this.responseText).toFixed(2);
            document.getElementById("total").value = Number(this.responseText).toFixed(2);
        }
    }
    xhr.open("GET", "getProduct.php?value=" + product);
    xhr.send(null);
}
  