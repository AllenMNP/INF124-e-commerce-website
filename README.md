# INF124-e-commerce-website

## Website URL
http://localhost:11678/CandyServlet/NewCandyTable.jsp

## Group Members

Cass Tao 51347211

Ryan Nguyen 92807810

Bridgitte Ly 83171294

Allen Pagsibigan 21923050

## Requirement Fulfillments

Assignment 4

1. The NewCandyHome.jsp is the jsp file for the listing of products on our home page. It integrates html and java get and set operations to and from a java server. In the java server there are setters and getters to get and set the information for each product requested from the database.

2.GET - The Jersey REST API impelementation for GET is implemented in the Maven Project "candyrusREST". The GET method is used when the user clicks on a specific product and performs a GET request and returns the database JSON information for that product id. This allows the client to grab the JSON information to load the HTML for the webpage correctly. If a resource is not found, the page will throw a 404 - Not Found response.

POST -

DELETE - Not necessary to be implemented.

POST - Not necessary to be implemented.

3. (1) ... (2) In ProductDetails.java, the page will retrieve the product name from the JSON using ProductPageService.java, ProductPageResource.java, and ProductPage.java to grab all the information for that product to generate each individual HTML page after the user clicks on a product on the home page. 

 i.    GET
 
 ii.   Request URL.
 - http://localhost:11678/candyrusREST/api/ProductDetails/{id} (id being the Product Name)
 
 iii.  Sample Response.
 - Response for: http://localhost:11678/candyrusREST/api/ProductDetails/Candy%20Canes
 {"price":"3.56","desc1":"3 pack - 1.75 oz. size","desc2":"Vegetarian, gluten-free and kosher. Jumbo 1.75 oz size","desc3":"Manufactured in a facility that processes: egg, milk, mustard, peanuts, sesame, soy, sulfites, tree nuts and wheat","name":"Candy Canes","image3":"candyImages/candycanes3.png","image2":"candyImages/candycanes2.jpg","image1":"candyImages/CandyCanes.png"}
 
iv. Sample Request (if applicable)
- N/A

## Acknowledgements

Text Entry Allignment on order forms - [stackoverflow post](https://stackoverflow.com/questions/4309950/how-to-align-input-forms-in-html)

Button Styling for Form Submissions  - [w3schools](https://www.w3schools.com/css/css3_buttons.asp)

Regex MM/YYYY Date Matching - [link](https://www.thewebblinders.in/programming/article/JavaScript-regular-expressions-for-validating-YYYYMM-and-MMYYYY-patterns-6010)

Mailto after Form Validation - [sitepoint](https://www.sitepoint.com/community/t/how-to-validate-a-form-with-javascript-prior-to-mailto-action-or-change-a-form-action-using-javascript/308475)

Mailto - [rapidtables](https://www.rapidtables.com/web/html/mailto.html)

CSS Stylistic Properties - [w3schools](https://www.w3schools.com/cssref/)

Web Safe Font Combinations - [w3schools](https://www.w3schools.com/cssref/css_websafe_fonts.asp)

Image Mouse Hover Effect - [w3schools](https://www.w3schools.com/jsref/event_onmouseover.asp)

Navigational Link - [w3schools](https://www.w3schools.com/css/css_inline-block.asp)

SQL Prepared Statements - [w3schools](https://www.w3schools.com/php/php_mysql_prepared_statements.asp)

PHP - AJAX and MYSQL - [w3schools](https://www.w3schools.com/pHP/php_ajax_database.asp)

PHP - Parsing csv file - [php manual](https://www.php.net/manual/en/function.fgetcsv.php)

AJAX select - [tutorialrepublic](https://www.tutorialrepublic.com/faq/how-to-get-the-value-of-selected-option-in-a-select-box-using-jquery.php)

Servlet Sessions - [ntu.edu.sg](https://www.ntu.edu.sg/home/ehchua/programming/java/JavaServlets.html)

HttpSession - [beginners book](https://beginnersbook.com/2013/05/http-session/)

Request Dispatcher - [javatpoint](https://www.javatpoint.com/requestdispatcher-in-servlet)

ResultSet - [oracle](https://docs.oracle.com/javase/7/docs/api/java/sql/ResultSet.html)

Java Servlets, JDBC, MySql - [geeksforgeeks](https://www.geeksforgeeks.org/java-servlet-and-jdbc-example-insert-data-in-mysql/)

HTML to Servlet - [coderjava](https://www.codejava.net/java-ee/servlet/handling-html-form-data-with-java-servlet)

Submit form programatically - [stackoverflow](https://stackoverflow.com/questions/1691296/how-to-submit-a-form-programmatically-in-java-servlet)

**Photos and Product Descriptions Sources**
- [Amazon (primary source)](https://www.amazon.com/)
- [Ralphs](https://www.ralphs.com/p/rice-krispies-treats-original-crispy-marshmallow-squares/0003800007781)
- [Walmart](https://www.walmart.com/ip/Almond-Joy-Coconut-and-Almond-Standard-Candy-Bar-1-61-Oz/48533974?selected=true&irgwc=1&sourceid=imp_0TSSzBUwsxyOWUpwUx0Mo34BUki2x50NuWjt380&veh=aff&wmlspartner=imp_78091&clickid=0TSSzBUwsxyOWUpwUx0Mo34BUki2x50NuWjt380)
- [a couple cooks](https://www.acouplecooks.com/perfect-homemade-peanut-butter-cups/)
- [Hammond's](https://hammondscandies.com/products/raspberry-candy-cane-filled-with-chocolate)
- [Hershey's(Almond Joy, Reese's Pieces)](https://www.hersheys.com/en_us/home.html)
