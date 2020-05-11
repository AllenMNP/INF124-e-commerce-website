# INF124-e-commerce-website

## Website URL

http://circinus-34.ics.uci.edu:8080/project1/candyTable.html

## Group Members

Cass Tao 51347211

Ryan Nguyen 92807810

Bridgitte Ly 83171294

Allen Pagsibigan 21923050

## Requirement Fulfillments
Assignment one
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

Assignment two

1.

2.

3.

4. To make our website dynamic, we used ajax on the order form page. When a user types in their zip code, the city, state, and country will automatically fill-in. Additionally, the corresponding tax rate will show up. As another feature, when the user updates the quantity of the product they want, the price on the subtotal will increase accordingly. Once they choose their shipping method, the total price will add up the subtotal, tax, and shipping together. 
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

PHP - Parsing csv files - [php manual](https://www.php.net/manual/en/function.fgetcsv.php)

AJAX Select - [tutorialrepublic](https://www.tutorialrepublic.com/faq/how-to-get-the-value-of-selected-option-in-a-select-box-using-jquery.php)

**Photos and Product Descriptions Sources**
- [Amazon (primary source)](https://www.amazon.com/)
- [Ralphs](https://www.ralphs.com/p/rice-krispies-treats-original-crispy-marshmallow-squares/0003800007781)
- [Walmart](https://www.walmart.com/ip/Almond-Joy-Coconut-and-Almond-Standard-Candy-Bar-1-61-Oz/48533974?selected=true&irgwc=1&sourceid=imp_0TSSzBUwsxyOWUpwUx0Mo34BUki2x50NuWjt380&veh=aff&wmlspartner=imp_78091&clickid=0TSSzBUwsxyOWUpwUx0Mo34BUki2x50NuWjt380)
- [a couple cooks](https://www.acouplecooks.com/perfect-homemade-peanut-butter-cups/)
- [Hammond's](https://hammondscandies.com/products/raspberry-candy-cane-filled-with-chocolate)
- [Hershey's(Almond Joy, Reese's Pieces)](https://www.hersheys.com/en_us/home.html)
