<?php
    require_once "db_connect.php";
    $result = $conn->query("SELECT * FROM Candies"); 
?>

<!DOCTYPE html>
<!-- CSS for text entry styling -->
<style type="text/css">
  form  { display: table;      }
  p     { display: table-row;  }
  label { display: table-cell; }
  input { display: table-cell; }
</style>

<html lang="en" dir="ltr">
  <head>
   	<meta charset="utf-8">
	  <title> CandyRus Order Form</title>
	  <link rel="stylesheet" href="order-page.css">
	  <script src="order-page.js"> </script>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  </head>
	<body>
	<div class="row">
		<div class="column left">
			<ul class="nav">
				<li><a href="candyTable.php">< Back</a></li>
			</ul>
			<h1>CandyRus Order Form <img src="companylogo.png"/></h1>
			<form id="orderForm" action="mailto:?subject=Thank You" method="POST" enctype="text/plain" >
			<p>
				<!--product entry-->
				<label for="product">Product:</label>
				<select id="product" name="product" onchange="getPrice(this.value)">
                <option style="display: none"></option>
                <?php
                    while ($rows = $result->fetch_assoc()){
                        $product_name = $rows['Name'];
                        echo "<option value='$product_name'>$product_name</option>";
                    }
                ?>
				</select>
			</p>
			<p>
				<!--quantity entry-->
				<label for="quantity">Quantity:</label>
				<input type="number" id="quantity" min="1" max="100" 
				name="quantity" value=1><br>
			</p>
			<h3> Contact Information </h3>
			<p>
				<!--firstname entry-->
				<label for="firstname">First name:</label>
				<input type="text" id="firstname" minlength="1" 
				name="firstname" >
			</p>
			<p>
				<!--lastname entry-->
				<label for="lastname">Last name:</label>
				<input type="text" id="lastname" minlength="1" 
				name="lastname" >
			</p>
			<p>
				<!--phonenumber entry-->
				<label for="phonenumber">Phone number:</label>
				<input type="tel" id="phonenumber" name="phonenumber" placeholder="e.g. 123-456-7890"  
				title="e.g. 123-456-7890">
			</p>
			<h3> Shipping Information </h3>
			<p>
				<!--address1 entry-->
				<label for="address1">Address Line 1:</label>
				<input type="text" id="street1" name="street" 
				placeholder="Street address, P.O.box, etc." 
				maxlength="30">
			</p>
			<p>
				<!--address2 entry-->
				<label for="address2">Address Line 2:</label>
				<input type="text" id="street2" name="street" maxlength="30">
			</p>
			<p>
				<!--zipcode entry-->
				<label for="zipcode">Zip Code:</label>
				<input type="text" id="zipcode" name="zipcode" 
				placeholder="e.g. 12345" maxlength="5" 
				onblur = "getPlace(this.value), getTax(this.value)">
			</p>
			<p>
				<!--city entry-->
				<label for="city">City:</label>
				<input type="text" id="city" name="city" 
				placeholder="e.g. Irvine" maxlength="30" >
			</p>
			<p>
				<!--state entry-->
				<label for="state">State/Province/Region:</label>
				<input type="text" id="state" name="state" 
				placeholder="e.g. CA" maxlength="30" >
			</p>
			<p>
				<!--country entry-->
				<label for="country">Country:</label>
				<input type="text" id="country" name="country" placeholder="e.g. USA" maxlength="30" >
			</p>
			<p>
				<!--shipment (duration) entry-->
				<label for="shipment">Shipping method:</label>
				<select id="shipment" name="shipment">
				<option style="display: none"></option>
				<option value="3.00">$3.00 - Standard Shipping (5-7 business days)</option>
				<option value="8.00">$8.00 - Express Shipping (2-5 business days)</option>
				</select>
			</p>
			<h3> Payment Information </h3>
			<p>
				<!--cardnumber entry-->
				<label for="cardnumber">Card Number:</label>
				<input type="text" id="cardnumber" name="cardnumber" placeholder="e.g. 1111-2222-3333-4444" 
				title="e.g. 1111-2222-3333-4444" >
			</p>
			<p>
				<!--expiration entry-->
				<label for="expiration">Expires:</label>
				<input type="text" id="expiration" name="expiration"
				placeholder="MM/YYYY"
				title="e.g. 02/2020" >
			</p>
			<p>
				<!--cvv entry-->
				<label for="cvv">CVV code:</label>
				<input type="text" id="cvv" name="cvv"
				title="CVV is the last 3 digits on the back of your card.">
			</p>
			<br/>
			<input type="submit">
			<input type="reset" value="Clear Order Form"/>
		</div>
		<div class="column right">
			<p>
				<!--subtotal entry-->
				<label for="subtotal">Subtotal: $</label>
				<input type="text" id="subtotal" name="subtotal" style="font-size: 14px;" readonly>
			</p>
			<p>
				<!--tax entry-->
				<label for="tax">Tax: $</label>
				<input type="number" id="tax" name="tax" style="font-size: 14px;" readonly>
			</p>
			<p>
				<!--shipping entry-->
				<label for="shipping">Shipping: $</label>
				<input type="number" id="shipping" name="shipping" style="font-size: 14px;" readonly>
			</p>
			<br/>
			<p>
				<!--total entry-->
				<label for="total"><b>Total: $</b></label>
				<input type="text" id="total" name="total" style="font-weight: bold; font-size: 16px;" readonly>
			</p>
			</form>
		</div>
	</div>
	</body>
</html>

<script>
	$('#product').change(function(){
        document.getElementById("quantity").value = 1;
        document.getElementById("tax").value = '';
        document.getElementById("shipping").value = '';
    });

    $('#quantity').blur(function(){
        var selectedQuantity = $('#quantity').val();
        document.getElementById("total").value = Number(parseFloat(document.getElementById("subtotal").value)*selectedQuantity).toFixed(2);
        document.getElementById("subtotal").value = Number(parseFloat(document.getElementById("subtotal").value)*selectedQuantity).toFixed(2);
    });

    $('#shipment').change(function(){
        var selectedShipment = $(this).children("option:selected").val();
        document.getElementById("shipping").value = selectedShipment;
        document.getElementById("total").value = Number(parseFloat(selectedShipment) + parseFloat(document.getElementById("total").value)).toFixed(2);
    });
	

	document.getElementById("orderForm").addEventListener('submit', function (event) {
		event.preventDefault()
		if (formValidation()) {
			document.getElementById("orderForm").submit()
		} 
	})

	function  formValidation(){
		var orderForm = document.getElementById("orderForm");
		var orderFormResponses = document.getElementById("orderForm").elements;
		var errorMessage = "";
		var requiredFieldMissing = false
		for(var i = 0; i < orderFormResponses.length - 1; i++){
			if(orderFormResponses[i].value == "" && i != 6){
				if(!requiredFieldMissing){
					errorMessage += "A required field has not been filled out.\n";
					requiredFieldMissing = true;
				}
			}
			if(i == 4 && orderFormResponses[4].value.match("[0-9]{3}-[0-9]{3}-[0-9]{4}" )==null){
				errorMessage += "Phone number must match the requested format. e.g. 123-456-7890\n";
			}
			if(i == 7 && orderFormResponses[7].value.match("[0-9]{4,5}" )==null){
				errorMessage += "Zip code must match the requested format. e.g. 12345\n";
			}
			if(i == 12 && orderFormResponses[12].value.match("[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}")==null){
				errorMessage += "Credit Card number must match the requested format. e.g. 1111-2222-3333-4444\n";
			}
			if(i == 13 && orderFormResponses[13].value.match("(0[1-9]|1[0-2])\/[12]\\d{3}")==null){
				errorMessage += "Expiration date must match the requested format. e.g. 02/2020\n";
			}
			if(i == 14 && orderFormResponses[14].value.match("[0-9]{3}")==null){
				errorMessage += "CVV must match the requested format. e.g. 123";
			}
		}
		if(errorMessage != ""){
			alert(errorMessage);
			return false;
		}
		else{
			return true;
		}
	}
	
</script>
<?php
    $conn = null;
?>