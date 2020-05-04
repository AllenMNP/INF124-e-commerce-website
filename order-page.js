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
  
  function run() {
    document.getElementById("shipping").value == document.getElementById("shipment").value;
    console.log(document.getElementById("shipping").innerHTML = document.getElementById("shipment").value)
  }