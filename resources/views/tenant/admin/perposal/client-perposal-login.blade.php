<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    
<link href="https://fonts.googleapis.com/css?family=Questrial|Roboto&amp;display=swap" rel="stylesheet">
    <style>
        body{
            font-family: Roboto,Helvetica,Arial,sans-serif !important;
            margin:0;
        }
        .got-otp {
    width: 40%;
    margin: auto;
    position: absolute;
    top: 45%;
    left: 50%;
    transform: translate(-50%, -50%);
}
h5.confirmation {
    font-size: 15px;
    color: green;
    text-align:center;
    margin-top:0;
}
form.login-otp input {
    width: 100%;
    border: none;
    border-bottom: 1px solid #ddd;
    height: 61px;
    padding: 10px;
    box-sizing: border-box;
    background: #e7f1fa;
}
button.smt {
    margin-top: 20px;
    background: #073156;
    border: none;
    color: #fff;
    padding: 9px 35px;
    border-radius: 5px;
}
form.login-otp {
    padding: 20px;
    background: #e7f1fa;
    border-radius: 7px;
}
    </style>
  </head>
  <body>
      <div class="got-otp">
           <h5 class="confirmation">OTP has been send to registered Email</h5>
    <form class="login-otp" action="#">
      <input type="email" placeholder="Email" id="email" />
      <input type="text" placeholder="OTP" id="otp" />
      <button type="submit" class="smt">Submit</button>
    </form>

      </div>
   
  </body>
</html>
