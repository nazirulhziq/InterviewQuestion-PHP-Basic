<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>

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
.form-container
    {
        border: 2px solid black;
        width: 284px;
        height: 160px;
    }

.input-container
    {
        text-align: right;
        margin: 10px;
    }

.button-container
    {
        text-align: right;
    }   

#submit-Button
    {
        position: relative;
        border: none;
        padding: 5px 10px 5px 10px;
        width: 120px;
        color: white;
        background-color: #529f04;
        font-size: 17px;
        font-family: "Times New Roman", Times, serif;
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
                   
                <div class="form-container">
                    <div class="input-container">
                        
                        <div class="form-group">
                     
                       <label><b>User Name:</b> </label> <input type="text" id="username" placeholder=""/> 

                        </div>
                    </div>
                            <div class="button-container">
                      
                                <input type="button" id="submit-Button" value="Submit" onclick="postValue()"/>
                       

                                <p id="message"></p>

                            </div>
                </div>
        </form>
    </div>
</div>
<script src="verify_ajax.js"></script>
</body>
</html>
