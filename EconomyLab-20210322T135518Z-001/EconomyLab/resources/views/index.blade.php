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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  
	<style type="text/css">
		nav ul li a:hover{
			color: black;}
			
			@media screen and (max-width: 700px){
				nav ul li a:hover{
			color: white;

			}
      .gununmeqalesi{
    padding: 2.5rem;
    flex-direction: column;

  }

  .gununmeqalesi-sekli {
    min-width: 100%;
    max-width: 100%;
    transform: translateY(-5rem);

  }
}


	</style>

    <title>EconomyLab</title>
  </head>
  <body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   {{--  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> --}}
    <script type="text/javascript" src="jquery-3.4.1.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> --}}
  



<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
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
                    <li><a href="#k2" >Mövzular</a></li>
                    <li><a style="cursor: pointer;" class="elaqe">Əlaqə</a></li>
                </ul>
            </nav>
        </div>
</header>

<script type="text/javascript">
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
</script>

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
<div class="haqqimizda">
  <h1 align="center">
    Haqqımızda
  </h1>
  <p align="center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa ipsa exercitationem reprehenderit reiciendis iste debitis repudiandae, magnam aut praesentium facilis? Autem eius odit eligendi libero ducimus maxime quasi vitae a.</p>
</div>



<div class="blok" align="center">
  <div id="k1" class="kart">
    <div class="face face1">
      <div class="kontent">
        <div class="catg1" style="position: absolute; top: 35%; font-size: 17px; background-color: white;display: none;">Kateqoriya</div>
        <div class="catg1" style="position: absolute; top: 55%; font-size: 17px; background-color: white;display: none;">Dünya Gündəmi</div>
        <img src="img/kart1.jpg">
     

      </div>

    </div>

    <div class="face face2">
      <div class="kontent">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.</p>
        <a href="{{url('/dunyagundemi')}}">Ətraflı oxuyun</a>
      </div>

    </div>

  </div>

  <div id="k2" class="kart">
    <div class="face face1">
      <div class="kontent">
        <div class="catg2" style="position: absolute; top: 35%; font-size: 17px; background-color: white;display: none;">Kateqoriya</div>
        <div class="catg2" style="position: absolute; top: 55%; font-size: 17px; background-color: white;display: none;">Ölkə İqtisadiyyatı</div>
        <img src="img/kart2.jpg">
        


      </div>

    </div>

    <div class="face face2">
      <div class="kontent">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.</p>
        <a href="{{url('/olkeiqtisadiyyati')}}">Ətraflı oxuyun</a>
      </div>

    </div>

  </div>


  <div id="k3" class="kart">
    <div class="face face1">
      <div class="kontent">
        <div class="catg3" style="position: absolute; top: 35%; font-size: 17px; background-color: white;display: none;">Kateqoriya</div>
        <div class="catg3" style="position: absolute; top: 55%; font-size: 17px; background-color: white;display: none;">Trendlər</div>
        <img src="img/kart3.jpg">
      </div>

    </div>

    <div class="face face2">
      <div class="kontent">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.</p>
        <a href="{{url('/trendler')}}">Ətraflı oxuyun</a>
      </div>

    </div>

  </div>
</div>

<div class="blok" align="center">
  <div id="k4" class="kart">
    <div class="face face1">
      <div class="kontent">
        <div class="catg4" style="position: absolute; top: 35%; font-size: 17px; background-color: white;display: none;">Kateqoriya</div>
        <div class="catg4" style="position: absolute; top: 55%; font-size: 17px; background-color: white;display: none;">İqtisadi Analiz</div>
        <img src="img/kart4.jpg">
        

      </div>

    </div>

    <div class="face face2">
      <div class="kontent">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.</p>
        <a href="{{url('/iqtisadianaliz')}}">Ətraflı oxuyun</a>
      </div>

    </div>

  </div>

  <div id="k5" class="kart">
    <div class="face face1">
      <div class="kontent">
        <div class="catg5" style="position: absolute; top: 35%; font-size: 17px; background-color: white;display: none;">Kateqoriya</div>
        <div class="catg5" style="position: absolute; top: 55%; font-size: 17px; background-color: white;display: none;">Sahibkarlıq</div>
        <img src="img/kart5.jpg">
      
      </div>

    </div>

    <div class="face face2">
      <div class="kontent">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.</p>
        <a href="{{url('/sahibkarliq')}}">Ətraflı oxuyun</a>
      </div>

    </div>

  </div>


  <div id="k6" class="kart">
    <div class="face face1">
      <div class="kontent">
        <div class="catg6" style="position: absolute; top: 35%; font-size: 17px; background-color: white;display: none;">Kateqoriya</div>
        <div class="catg6" style="position: absolute; top: 55%; font-size: 17px; background-color: white;display: none;">Ecosözlük</div>
        <img src="img/card1.jpeg">
       

      </div>

    </div>

    <div class="face face2">
      <div class="kontent">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.</p>
        <a href="{{url('/ecosozluk')}}">Ətraflı oxuyun</a>
      </div>

    </div>

  </div>
</div>


@foreach($datas as $data)
<div id="encox" style="display: none;" class="gununmeqalesi">
  <div class="gununmeqalesi-sekli">
    <img src="img/{{$data->image_article}}">
  </div>
  <div class="gununmeqalesi-info">
    <div class="gununmeqalesi-vaxt">
      <span>Dərc olundu : {{$data->published_at}}</span>
      <span>Yeniləndi : {{$data->updated_at}}</span>
    </div>
    <h1 style="color: black;" class="meqalebasligi">{{$data->name_article}}</h1>
    <p class="meqalesozleri">{{ \Illuminate\Support\Str::limit($data->body_article,200) }}</p>
    <a href="http://localhost:8000/meqale{{$data->name_article}}" class="meqaleardi">Ətraflı Oxuyun</a>
  </div>
</div>
@endforeach







<div>
  <img class="open-button"  id="chatbox" src="img/chat.svg">
  <div class="chat-popup" >
    <form class="form-container">
      <h3 style="margin:3%;">Bizimlə Əlaqə</h3>

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

    $('#k1').mouseover(function(){
      $('.catg1').show();
    });
     $('#k1').mouseout(function(){
      $('.catg1').hide();
    });
      $('#k2').mouseover(function(){
      $('.catg2').show();
    });
     $('#k2').mouseout(function(){
      $('.catg2').hide();
    });
      $('#k3').mouseover(function(){
      $('.catg3').show();
    });
     $('#k3').mouseout(function(){
      $('.catg3').hide();
    });
      $('#k4').mouseover(function(){
      $('.catg4').show();
    });
     $('#k4').mouseout(function(){
      $('.catg4').hide();
    });
      $('#k5').mouseover(function(){
      $('.catg5').show();
    });
     $('#k5').mouseout(function(){
      $('.catg5').hide();
    });
      $('#k6').mouseover(function(){
      $('.catg6').show();
    });
     $('#k6').mouseout(function(){
      $('.catg6').hide();
    });
    $(window).scroll(function(){
      var pos = $(document).scrollTop();
      if (pos>=536) {
      $('#encox').fadeIn(1000);

    } 

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
 



 <footer class="footer1">
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
  </body>
</html>
