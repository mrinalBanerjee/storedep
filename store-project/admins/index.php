<html>  
<head>  
    <title>Admin :BSD</title>  
    
    <style>
    body {
 
}
     #frm{  
    border: solid gray 1px;  
    width:50%;  
    border-radius: 2px;  
    margin: 120px auto;  
    background: white;  
    padding: 50px;  
    background-color: #f4f0ec;
}  
     </style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head> 
<body>  
    <div id = "frm">  
        <h1>Login</h1> 
        <form name="f1" action = "admin.php" onsubmit = "return validation()" method = "POST">  
           <div class="container">
  UserName: <input  class="form-control" type = "text" id ="user" name= "user"><br>
  Password:  <input class="form-control" type = "password" id ="pass"  name="pass"><br>
  <input type="submit" class="btn btn-primary" name="sub" id = "btn" value = "Login" >

  </form>
  </div>
    </div>  
  
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>     
</html>  