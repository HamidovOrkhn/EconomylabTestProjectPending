<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Asar|Caudex|Cormorant|Cormorant+Garamond|Cormorant+Infant|Cormorant+SC|Cormorant+Unicase|Cormorant+Upright|Domine|EB+Garamond|Judson|Libre+Baskerville|Maitree|Merriweather|Montserrat|Montserrat+Alternates|Noticia+Text|Noto+Serif|Old+Standard+TT|Podkova|Pridi|Rasa|Rokkitt|Taviraj|Tinos|Trirong|Yrsa&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/errorpg.css">
    </head>
    <style>
        body{
    margin: 0;
    padding: 0;
    font-family: 'Montserrat';
    font-weight: 100;

}
.error{
    position: relative;
    align-items: center;
    display: flex;
    justify-content: center;
    height: 100vh;
    width: 100%;
    overflow: hidden;
}

.error1{
    border-right: 2px solid;
    font-size: 36px;
    padding:0 15px 0 15px ;
    text-align: center;

}
div{
    display: block;
}

.notfound{
  font-size: 36px;
  padding: 0 15px 0 15px;
  text-align: center;  
}
a{
    text-decoration: none;
    color: #000;
}
a:hover{
    color: white;
    z-index: 1;
}
.return{
    position: relative;
    border: 2px solid;
    align-items: center;
    text-align: center;
    justify-content: center;
    background-color: #fff;
    width: 20%;
    border-radius: 10px;
    font-size: 30px;
    padding: 15px;
    margin: -18% auto 0 auto;
    
}
.return:hover, a:hover{
    background-color: black;
    transform:scale(1.06);
    color: white !important;
}

    </style>
    <title>Error 404</title>
    <body>
    <div class="error">
        <div class="error1">
            Error 404
        </div>
        <div class="notfound">
            Not Found
        </div>
    </div>

    <div class="return">
        <a href="{{url('/')}}">Əsas Səhifə Qayıdın</a>
    </div>
    </body>
</html>