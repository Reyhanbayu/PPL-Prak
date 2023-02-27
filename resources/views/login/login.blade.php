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
<div style="font-weight:bold;font-size:25px;font-family:'Poppins">
    LOGIN

</div>

<div style="font-size:17px;padding-top:10px;font-family:'Poppins">
    Silakan isi data akun yang telah terdaftar <br> sebelumnya

</div>

<div style="font-family:Poppins;padding-top:20px;">
<form action ="/login" method="post">
    @csrf
    <label for="email"><b>Email</b></label>

    <br>
    <input type="email" id="email" name="email" placeholder="contoh@gmail.com">

    @error('email')
    <div class="invalid-feedback">
        {{$message}}

    </div>
@enderror
    <p>
    
    <label for="password"><b>Password</b></label>

    

    <br>
    <input type="password" id="password" name="password" placeholder="Password">
    @error('password')
    <div class="invalid-feedback">
        {{$message}}
    </div>
@enderror  
    <p>
    <input type="submit" value="Masuk">
</form>   

<div style="font-family:'Poppins'">
Belum mempunyai akun ? 
<a href="/register"> <b> Daftar Sekarang </b> </a>
</div>
</div>

</div>
</body>

</html>
