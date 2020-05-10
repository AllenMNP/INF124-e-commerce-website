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
        if (document.getElementById("state").value == "")
          document.getElementById("state").value = place[0];
        if (document.getElementById("city").value == "")
          document.getElementById("city").value = place[1];
        if (document.getElementById("country").value == "")
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
        if (document.getElementById("tax").value == "")
          document.getElementById("tax").value = place[2];
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
        //var result = xhr.responseText;
        //var place = result.split(', ');
        if (document.getElementById("subtotal").value == "")
          document.getElementById("subtotal").value = this.responseText;
      }
    }
    xhr.open("GET", "getTax.php?zip=" + zip);
    xhr.send(null);
  }
  
  function getTotal() {
    var f1 = parseInt(document.getElementById('tax').value);
    var f2 = parseInt(document.getElementById('shipping').value);
    var res = f1 + f2;
    document.getElementById('total').value = res;
  }
  
  