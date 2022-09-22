<!Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Asar|Caudex|Cormorant|Cormorant+Garamond|Cormorant+Infant|Cormorant+SC|Cormorant+Unicase|Cormorant+Upright|Domine|EB+Garamond|Judson|Libre+Baskerville|Maitree|Merriweather|Montserrat|Montserrat+Alternates|Noticia+Text|Noto+Serif|Old+Standard+TT|Podkova|Pridi|Rasa|Rokkitt|Taviraj|Tinos|Trirong|Yrsa&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
<style>
  a{
    text-decoration: none;
    color: black;
  }
  a:hover{
    color: black;
    
  }

  
</style>
    <title>EconomyLab</title>
  </head>
  <body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/notify.min.css" />
    <script src="js/notify.min.js"></script>
    



<header>
        <div class="menu-toggle" onclick="myFunction()" id="hamburger">
            <i class="fas fa-bars"></i>
        </div>
        <div class="overlay"></div>
        <div class="container">
            <nav>
                <a href="index.html"><img src="img/logo.png" class="headerlogo"></a>
                <ul>
                    <li><a href="{{url('/')}}">Əsas</a></li>
                    <li><a href="{{url('/meqaleler')}}">Məqalələr</a></li>
                    <li><a style="cursor: pointer;" class="elaqe">Əlaqə</a></li>
                </ul>
            </nav>
        </div>

</header>

{{-- <script type="text/javascript">
	var open = document.getElementById('hamburger');
var changeIcon = true;

open.addEventListener("click", function(){

    var overlay = document.querySelector('.overlay');
    var nav = document.querySelector('nav');
    var icon = document.querySelector('.menu-toggle i');

    overlay.classList.toggle("menu-open");
    nav.classList.toggle("menu-open");

    if (changeIcon) {
        icon.classList.remove("fa-bars");
        icon.classList.add("fa-times");

        changeIcon = false;
    }
    else {
        icon.classList.remove("fa-times");
        icon.classList.add("fa-bars");
        changeIcon = true;
    }
});
</script> --}}

<script>
function myFunction() {
  var x = document.getElementById("hersey");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>

<div id="hersey">
<div class="grid-konteynr">
  <div id="hamburger2"><i class="fas fa-bars"></i></div>

<div class="list" id="item2" >

  <ul style="padding-left: 22%;">
    <li>
        <a href="{{url('/meqaleler')}}" class="1">Məqalələr</a>
        <a href="{{url('/meqalaler')}}" class="2"><i class="fas fa-pen"></i></a>
    </li>
    <li>
        <a href="{{url('/dunyagundemi')}}" class="1">Dünya gündəmi</a>
        <a href="{{url('/dunyagundemi')}}" class="2"><i class="fas fa-book-open"></i></a>
    </li>
    <li>
        <a href="{{url('/olkeiqtisadiyyati')}}" class="1">Ölkə iqtisadiyyatı</a>
        <a href="{{url('/olkeiqtisadiyyati')}}" class="2"><i class="fas fa-book"></i></a>
    </li>
    <li>
        <a href="{{url('/trendler')}}" class="1">Trendlər</a>
        <a href="{{url('/trendler')}}" class="2"><i class="fas fa-bookmark"></i></a>
    </li>
    <li>
        <a href="{{url('/iqtisadianaliz')}}" class="1">İqtisadi analiz</a>
        <a href="{{url('/iqtisadianaliz')}}" class="2"><i class="fas fa-chart-line"></i></a>
    </li>
    <li>
        <a href="{{url('/sahibkarliq')}}" class="1">Sahibkarliq</a>
        <a href="{{url('/sahibkarliq')}}" class="2"><i class="fas fa-user-tie"></i></a>
    </li>
    <li>
        <a href="{{url('/ecosozluk')}}" class="1">Ecosözlük</a>
        <a href="{{url('/ecosozluk')}}" class="2"><i class="fas fa-globe"></i></a>
    </li>
</ul>
</div>

<div class="card-columns" id="item3">
  
  @foreach($datas as $data)

     <a href="http://localhost:8000/meqale{{$data->name_article}}">
     <div class="card">
      <img src="img/{{$data->image_article}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h3 class="card-title">{{$data->name_article}}</h3>
      <h5 style="color: gray;">{{$data->published_at}}</h5>
      <hr>

      <p class="card-text">{{ \Illuminate\Support\Str::limit($data->body_article,200) }}</p>
    </div>
  </div>
  </a>
  @endforeach


  
  
  
 
  </div>

</div>


<div>
  <img class="open-button"  id="chatbox" src="img/chat.svg">
  <div class="chat-popup" >
    <form class="form-container">
      <h3 style="margin:3%" >Bizimlə Əlaqə</h3>

      <label for="msg"><b></b></label>
      <input type="text" id="message" class="mesaj" placeholder="Mesajınızı daxil edin" name="message">
      <span id="ermessage" style="color: red;font-family: 'Montserrat';"></span> 
      <input type="text" id="name" class="mesaj" placeholder="Adınız və Soyadınız"       name="name"> 
      <span id="ername" style="color: red;font-family: 'Montserrat';"></span>                 
      <input type="text" id="email" class="mesaj" placeholder="Mailiniz"                 name="email">
        <span id="eremail" style="color: red;font-family: 'Montserrat';"></span>                    


      <input type="submit" class="btn" id="submit" value="Göndər" name="">
      <input type="submit" class="btn cancel" value="Bağlamaq" name="">
     
    </form>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $('#hamburger2').click(function(){
      $('#item2').toggle(100);

    });
    $('.open-button').click(function(){$('.chat-popup').show();});
    $(".gonderis").click(function(e){ e.preventDefault(); $('.chat-popup').show();});
    $(".elaqe").click(function(e){ e.preventDefault(); $('.chat-popup').show();});
    $('.cancel').click(function(e){ 
    e.preventDefault();      
      $('.chat-popup').hide();
    
              $('#eremail').empty();
              $('#email').css("border","none");
              $('#name').css("border","none");
              $('#ername').empty();
              $('#message').css("border","none");
              $('#ermessage').empty();




    });
    $('#submit').click(function(e){
      e.preventDefault();


                      $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

            }
          });
                        var message = $('#message').val();
                        var name = $('#name').val();
                        var email = $('#email').val();


                     $.ajax({

           type:'post',

           url:'/sendmes',

            data:{message:message,name:name,email:email},

           success:function(data){ 
            if (data['errors']!=null) {
            $.each(data['errors'],function(key, val){
              
              $('#ername').text(data['errors']['name']);
            
              $('#eremail').text(data['errors']['email']);
             
              $('#ermessage').text(data['errors']['message']);


              }); 

              }else {
                notify({
                    message: 'Your message succesfully sended !',
                    color: 'success',
                    timeout: 5000
                  });
                 $('#ername').empty();
                  $('#name').val('');
                  $('#email').val('');
                  $('#message').val('');
                 $('#eremail').empty();
                 $('#ermessage').empty();
              }

         }
                       

                
               });
          

               });
              

           });


       
  
</script>



<footer class="footer1" id="item5">
  <div class="footer-blok">
    <div class="solteref">
      <a href="index.html"><img class="footerlogo" src="img/logo.png"></a>
      <div class="sosial-medya">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
      </div>
      <p class="sehifehuquqlari">© Developed By Osman Ahmedov And Orkhan Hamidov. All Rights Reserved</p>
    </div>

    <div class="sagteref">
      <h1 align="center">Bizim Mesaj qutumuz</h1>
      <div class="mailqutusu"></div>
      <P align="center">info@economylab.az</P>
      <form action="" class="mesajformu">
        <input type="submit" class="gonderis" value="Bizə Yazın">
      </form>

    </div>
  </div>

 </footer>
</div>
</div>

  </body>
</html>
