# INF124-e-commerce-website

## Website URL

http://circinus-34.ics.uci.edu:8080/project1/candyTable.html

## Group Members

Cass Tao 51347211

Ryan Nguyen 92807810

Bridgitte Ly 83171294

Allen Pagsibigan 21923050

## Requirement Fulfillments
Assignment 1
1. An overview of our business, the products we sell, the management team - basically the about page information is on the index.html page.  
2. On candyTable.html, there are 10 candies displayed along with their name and the price of each item in a separate cell. 
3. On candyTable.html, there is also an image placed for each item. 
4. Prices are listed on the "Candy Shop" page (candyTable.html) for each product item as well as the amount of candy contained in one order.
5. Users can click on a product on the "Candy Shop" page (candyTable.html) and it will link them to a new page for the product (i.e. Candy Canes -> candy-canes.html) that contain 3 pictures for each product as well as more detailed descriptions.
6. Users can click on the "Buy Now" button located on a product page and this will link them to an order page (order-page.html) where they can fill out a form (with input verification) to order their desired candy.
7. Whenever the user finishes filling out the form, clicking on the submit button will trigger a validation function. After the validations have been passed, then the form will call the mailto: action. This, in turn, will open the user's default mailing application. This was tested with Microsoft mail. However, a mailing client will not appear if one is not set. The javascript for this function can be found in (order-page.html).
8. Once the user finishes filling out the form and clicks on submit, a validation function will be called. Inside the validation function, it will access all of the input fields found within the form. Each mandatory field is then tested to see if there are values inside the field. If there is a missing value, then a message is appended to the errorMessage variable. Afterwards each input that requires a specific format is checked to see if the value follows the format. This is done through the use of RegEx. If it does not follow the format then another error message is appended. If there are no errors, then the submit button proceeds. An alert pops up on the top detailing all of the errors if one is found. Afterwards, the page is refreshed. The JavaScript for this function can be found at (order-page.html). 
9. For our website, we added CSS stylistic properties to the homepage (main.css), each of the product's description pages (product.css), the index (index.css), and the order form (order-page.css). These properties include: background-color, color, font-family, font-size, text-align, margin-(left, right, top, bottom), list-style-type, padding, display, border, text-decoration, width and height. On our homepage, the font color and size of the title is customized, as well as the background color for the header/navigation bar. The title and prices of each product is aligned to be centered, and the color of the names are also customized. When a user hovers over each product, the background color changes to show which item they are currently looking at. Similarly on each product page, we chose specific font families, sizes and colors, and adjusted the width and height of the images. The "buy now" button color was made to match the rest of the page. Our index and order form page have the text aligned to the left, customized fonts and colors as well. We added a back button to each page to make navigation on the website smoother. 
10. On each product's description page, the user can hover over the three photos and the size of the images will increase. When the user moves their mouse off the photos, the images will return back to their normal size (product.js).
11. Our names and student IDs can be found on the "About Us" page (index.html) that is linked on the homepage to the right of the Candy Shop title.

Assignment 2

1. The information of the products are all stored inside mariaDB and data is received using PHP. Static HTML pages are renamed to be PHP and the SQL database is populated on the homepage of it has not been populated before. 

2. Once the user has filled out all the required form fields in order-page.php, the user's inputs are verified before submission and sent through POST to order-database.php where they are inserted into the Orders table in the database.

3. After the information is stored in the database, the users are redirected to confirmation-page.php. On the confirmation page, it shows various details about the order like the name, address, product, phone, last 4 of the credit card, quantity, subtotal, and total. 

4. To make our website dynamic, we used ajax on the order form page (order-page.php, order-page.js). When a user types in their zip code, the city, state, and country will automatically fill-in (getCityState.php). Additionally, the corresponding tax rate will show up (getTax.php). As another feature, when the user updates the quantity of the product they want, the price on the subtotal will increase accordingly (getProduct.php). Once they choose their shipping method, the total price will add up the subtotal, tax, and shipping together. 

Assignment 3

1. MyServlet.java is is the servlet that returns the HTML for the homepage, which was previously known as candyTable.html. When that servlet is called, it reads the database to get the data to put it in the appropriate places within the html response. HistoryServlet.java is the servlet that works with session data and adds Product names to a list saved in the session to keep track of the 5 (or less) most recent products viewed. The user can view what products have recently been viewed by clicking on a "Show Recently Viewed" button on the main Candy Table page. HistoryServlet is then sent to the ProductDetails.java servlet using "include" to transfer the request/response information from HistoryServlet.

2. In ProductDetails.java, the page takes the product name as the identifer to gather information such as the descriptions, prices, and images from the database and prints out the html page for each product. When a user presses on the Add To Cart button, the item name will be added and stored in their cart (AddToCart.java).

3. After the user adds items to the cart, then clicking on the cart button will tkae users to the CartServlet.java. CartServlet.java will display the items in the cart while also showing the total price of all the items. Users can then fill out all the fields in the page. Once the user fills out the fields in the page, the form calls Checkout.java. In Checkout.java, the data is inserted into the database and the response is forwarded to ConfirmationServlet.java. In ConfirmationServlet.java, the fields that were inserted into the database are displayed. These fields include the items bought, the total price, and some contact information previously provided by the user. 

Assignment 3
1.
2.
3.
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
