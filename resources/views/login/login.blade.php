<html>


<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<link rel="stylesheet" href ="{{asset('css/styles.css')}}">

<html>


<title>
    Login Tomart
</title>

<body style="margin: 0;">
    <div class="loginbg">
        
    </div>

<div style="padding-left:1200px;padding-top:200px">
<div style="font-weight:bold;font-size:25px;font-family:'Poppins';padding-left:150px;">
    LOGIN

</div>



<div style="font-family:Poppins;padding-top:20px;">
<form action ="/login" method="post">
    @csrf
    

    <br>
    <input type="username" id="username" name="username" placeholder=" Username " style="font-size:20;padding:20px;">

    @error('username')
    <div class="invalid-feedback">
        {{$message}}

    </div>
@enderror
    <p>
   

    

    <br>
    <input type="password" id="password" name="password" placeholder=" Password " style="font-size:20;padding:20px;">
    @error('password')
    <div class="invalid-feedback">
        {{$message}}
    </div>
@enderror  
    <p>
    <div style="padding-left:90px;padding-top:50px;">
        <input type="submit" value="LOGIN" class="loginbutton">
    </div>
    
</form>   


</div>

</div>
</body>

</html>
