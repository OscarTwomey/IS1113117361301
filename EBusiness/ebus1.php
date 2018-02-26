<DOCTYPE! html>
    <html>
        <head>
            <style>




ul{
    list-style-type:none;
    margin:0;
    padding:0;
    overflow:hidden;
    background-color: 	#1E90FF;
}


li{
    float: left;
}

li a{
    display: block;
    color:white;
    text-align:center;
    padding: 10px 59px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}



.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
    .button1 {
    background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
}

.button1:hover {
    background-color: #4CAF50;
    color: white;
}
</style>

            <title> Select Product</title>
            
            
            
            <!--jQuery-->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script type="text/javascript" src="cost_calc.js"> </script>
        </head>
        
        <body>
            <body>

    
      <ul>
      <li> <a href="../homepage.html"> Home</a></li>
      <li> <a href="../CV_Page1.html"> Curriculum Vitae </a> </li>
      <li> <a href="../Interests/Interests.html"> Interests </a> </li>
      <li> <a href="../EBusiness/EBus1.php"> E-Business </a></li>
      </ul>

<h1> My E-Business </h1>



            <h4> Select a product </h4>
            <br/>
            <form method="POSt" action="EBus2.php">
                <label for="salesforce">
                    <input type ="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                    Salesforce @ $100
                </label>
                
                <br/>
                
                <label for="aws">
                    <input type="radio" id-"aws" name="product" onClick="disablebtnProceed()"/>
                    AWS @ $300
                </label>
                
                <br/>
                <br/>
                
                <label for="subtotal">
                    Sub Total
                    <input type="text" id="subtotal" value="0.00" readonly/>
                </label>
                
                <br/>
                
                <label for="total">
                    Total
                    <input type="text" id="total" value="0.00" readonly/>
                </label>
                
                <br/>
                
                <button type="submit" id="btnProceed" disabled> Add to Shopping Cart</button>
            
            </form>
            
            <br/>
            <button onClick"button" href="calcSub()" > Calculate Cost</button>
            <a role="button" href="Ebus.php"> Clear Choice</a>
            
        </body>
        
    </html>
</DOCTYPE>