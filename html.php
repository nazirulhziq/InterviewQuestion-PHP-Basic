<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
    <title>Question Part A</title>
    <!-- below we are including the jQuery and jQuery plugin .js files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



</head>
<body>

<style type="text/css">




.grandParentContaniner
    {
        display:table; 
        height:100%; 
        margin: 0 auto;
    }
input[type="text"]
    {
        height: 30px;
        border: 2px solid black;
    } 

.parentContainer
    {
        vertical-align:middle;
    }
.formContainer
    {
        border: 2px solid black;
        width: 284px;
        height: 160px;
    }

.inputContainer
    {
        text-align: right;
        margin: 10px;
    }

.btncontainer
    {
        text-align: right;
    }   

#btnsubmit
    {

        background-color: #4CAF50; /* Green */
        border: none;
        color: white;


        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        padding: 5px 10px 5px 10px;
        width: 120px;
        text-align: left;
        margin: 5px 10px 10px 0;
    }

#message
    {
        text-align: left;
        margin-left: 15px;
        margin-bottom: 10px;
        font-size: 17px;
    }
</style>
<div class="grandParentContaniner">
    <div class="parentContainer">
        <form>
                   
                <div class="formContainer">
                    <div class="inputContainer">
                        
                        <div class="form-group">
                     
                      <p>
                <label for="username">User Name:</label>
                <input id="username" name="username" type="text"></input>
            </p>

                        </div>
                    </div>
                            <div class="btncontainer">
                      
                                <input class="btn" id="btnsubmit" type="button"  value="Submit" onclick="postValue()"/>
                       

                                <p id="message"></p>

                            </div>
                </div>
        </form>
    </div>
</div>
<!-- Including verify_ajax.js jQuery Script -->
<script src="verify_ajax.js"></script>
</body>
</html>
