<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/test.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin panel</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset("css/test.css")}}" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Amiko|Andika|Anton|Arimo|Asap|Basic|Cabin|Cabin+Condensed|Cantora+One|Didact+Gothic|Fira+Sans|Fira+Sans+Condensed|Fira+Sans+Extra+Condensed|Francois+One|Jaldi|Kanit|Libre+Franklin|Maven+Pro|Mitr|Montserrat|Montserrat+Alternates|Muli|News+Cycle|Noto+Sans|Nunito|Nunito+Sans|Oswald|Pattaya|Prompt|Quicksand|Raleway|Roboto+Condensed|Sansita|Source+Sans+Pro|Varela+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{URL::asset("css/fontawesome.min.css")}}"> 
    <link rel="stylesheet" type="text/css" href="{{URL::asset("css/all.min.css")}}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    

</head>


    
  

    



<body style="background-color: #343A40;">
    <div class="headr" style="position: relative;">
        <a style="text-decoration: none;" id="first" href="{{url('/home/admin')}}"> Adding Page</a>
        <a style="text-decoration: none;" href="{{url('/home/table')}}"> Table Page</a>
    </div>
    
   <div id="bacc" style="display: none;"></div> 
        <div id="req" class="wrapper wrapper-w900" style="width: 50%; height: 100px; position: absolute;margin-left: 25%; margin-top: 2%;   z-index: 3; display: none;">
            <div class="card card-6" >
             
                <div class="card-heading" >
                    <h2 id="category" class="title"></h2>
                    <a id="close" style="color: white;margin-left: 95%; font-size: 30px;"><i   class="fas fa-times"></i></a>
                    <h3 id="published_at" style="margin-top: -2%;
                               margin-bottom: 2%;
                               color: white;


                    ">19-20-12</h3>
                </div>
                <div class="card-body">
                    <form>
                        
                        <div class="form-row">
                            <div class="name">Name Article</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="name_article" id="name_article">
                                <span id="ername" style="color: red; font-family: 'Montserrat';"></span>
                              
                            </div>
                        </div>
                        <input type="hidden" name="id" id="idd">


                        
                        <div class="form-row">
                            <div class="name">Body Article</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="body_article" id="body_article">
                                 <span id="erbody" style="color: red; font-family: 'Montserrat';"></span>
                             
                            </div>
                        </div>
                        <input style="margin: 7% auto  1%  10%;" type="file" id="image_article"  name="image_article" value="orx">
                         <span style="color: red; font-family:'Montserrat';" id="erimg"></span>
                        <span id="image_article" style="margin: 7% auto  auto  10%;color: black; font-family: 'Open Sans';"></span>
                    
                        
                    
                </div>
                <div class="card-footer">
                    <button class="btn btn--radius-2 btn--blue-2" id="submit" type="submit">Edit </button>
                </div>
              </form>
            </div>
        </div>
       <div style="width: 80%; height:450px; margin-left:10%; margin-top: 5%; position: relative; overflow-y: scroll; background-color: white;">
        <table style="background-color: white;width: 1195px; ">
            <thead>
                <tr>
                    <th align="center">Name Article </th>
                    <th align="center">Body Article</th>
                    <th align="center">Category</th>
                    <th align="center">Published at</th>
                    <th align="center">Updated at</th>
                    <th align="center">Image</th>
                    <th align="center">Clicks</th>
                </tr>
                
            </thead>
            <tbody id="data" >
                @foreach($datas as $data)
                <tr>
                    <td align="center">{{$data->name_article}}</td>
                    <td align="center">{{ \Illuminate\Support\Str::limit($data->body_article,10) }}</td>
                    <td align="center">{{$data->category}}</td>
                    <td align="center">{{$data->published_at}}</td>
                    <td align="center">{{$data->updated_at}}</td>
                    <td align="center">{{$data->image_article}}</td>
                    <td align="center">{{$data->clicks}}</td>
                    <td>
                        <a style="font-size: 20px; margin-left:10%;" id="{{$data->id}}" class="update"><i class="fas fa-pen"></i></a>
                        <a style="font-size: 20px; margin-left:10%;" id="{{$data->id}}" href="http://localhost:8000/home/table/deletearticle/{{$data->id}}" class="delete"><i class="fas fa-trash"></i></a>
                    </td>

                  
                   
                    
                </tr>
                @endforeach


                       
                      
                       
                   

            </tbody>
        </table>
    </div>

       <div id="messages" style="width: 80%; height:450px; margin-left:10%; margin-top: 5%; position: absolute; z-index: 4; top: 100px; overflow-y: scroll; background-color: white; display: none;">
        <a id="closemes" style="color: red;margin-left: 0%; margin-right: 0px; margin-top: -6%; font-size: 30px; border:solid 1px red; padding: 10px;"><i   class="fas fa-times"></i></a>
        <a id="trashmes" href="{{url('/home/table/deletemessage')}}" style="color: red;margin-left: 0%; font-size: 30px; border:solid 1px red; padding: 10px;"><i   class="fas fa-trash"></i></a>
        <table style="background-color: white;width: 1195px;  ">

            <thead>
                <tr>
                    <th align="center">Name </th>
                    <th align="center">Email</th>
                    <th align="center">Message</th>
                    
                </tr>
                
            </thead>
            <tbody  >
                @foreach($messages as $message)
                <tr>
                    <td align="center">{{$message->name}}</td>
                    <td align="center">{{$message->email}}</td>
                    <td align="center">{{$message->message}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <img class="open-button" style="width: 100px;" id="chatbox" src="{{URL::asset("img/chat.svg")}}">

    
    
    




    


    <nav style="margin-top: 5%; margin-left: 10%;" class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    
                        <!-- Authentication Links -->
                        
                                

                                <div style="
                                 
                                 width: 40%;
                                 margin-left: 2%;
                                 font-size: 36px; 
                                 font-family: 'Montserrat';
                                 

                                   " class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a id="logout" style="color: white;" class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            
                        
                    
                </div>
            </div>
        </nav>
<script src="{{URL::asset("jquery-3.4.1.min.js")}}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.open-button').click(function(){
            $('#bacc').fadeIn(300);
            $('#messages').fadeIn(300);

        });
        $('#closemes').click(function(){
            $('#bacc').fadeOut(300);
            $('#messages').fadeOut(300);
        });





        $('.update').click(function(){
                
                
                var id = $(this).attr('id');
                
             
                      $.ajax({

           type:'GET',

            url:'/home/table/getupdate/'+id,
        

            datatype:'json',

            success: function(data){
            
                var name_article = data['art_n'][0]['name_article'];
                var body_article = data['art_b'][0]['body_article'];
                var category = data['c_a'][0]['category'];
                var published_at = data['pub_a'][0]['published_at'];
                var image_article = data['art_i'][0]['image_article'];
                var id = data['id'][0]['id'];



                $('#name_article').val(name_article);
                $('#idd').val(id);
                $('#body_article').val(body_article);
                $('#category').html('Change Article category : '+category);
                $('#published_at').html(published_at);
                $('#image_article').html('Default : '+image_article);

            
             

                 $('#bacc').fadeIn(300);
                 $('#req').fadeIn(300);
         
               
               
             

            
           

           }

         });
            });
         $('#close').click(function(e){
                e.preventDefault();
                $('#bacc').fadeOut(300);
                $('#req').fadeOut(300,function(){
                       $('#ername').empty();
                       $('#erbody').empty();
                       $('#erimg').empty();
                });
                
            });
         $('#submit').click(function(e){
            e.preventDefault();
            var id = $("#idd").val();
            var name_article = $("#name_article").val();
            var body_article = $("#body_article").val();
            var image_article = $('#image_article').val();






                            $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

            }
          });


                     $.ajax({

           type:'post',

           url:'/home/table/setupdate',

            data:{id:id,name_article:name_article,body_article:body_article,image_article:image_article} ,

           success:function(data){ 



            
             if (data['errors']!=null) {
               $('#ername').text(data['errors']['name_article']);
               $('#erbody').text(data['errors']['body_article']);
               $('#erimg').text(data['errors']['image_article']);

             } else {
                location.reload(true);
               $('#ername').empty();
               $('#eremail').empty();
               $('#erpassword').empty();

               alert('Succesfully Edited !');

              
             }
            
             
            

              

           }


        });








         });
   


    });
</script>







<style type="text/css">
    
</style>







  </body>
</html>