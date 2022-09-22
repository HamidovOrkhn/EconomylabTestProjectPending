
@extends('admin')
@section('content')

<div class="page-wrapper bg-dark p-t-100 p-b-50" style="background-color: #343A40;">
        <div class="wrapper wrapper-w900" style="width: 80%;margin-left: 10%;">
            <div class="card card-6">
             
                <div class="card-heading">
                    <h2 class="title">Add new Article</h2>
                </div>
                <div class="card-body">
                    <form  action="{{url('/home/addarticle')}}" method="post">
                        @csrf
                        <div class="form-row">
                            <div class="name">Name Article</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="name_article">
                               @error('name_article')
                               <span style="color: red;">{{$message}}</span>
                               @enderror
                            </div>
                        </div>


                        
                        <div class="form-row">
                            <div class="name" style="padding-top: 40px; font-size: 20px;">Article body</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="textarea--style-6" name="body_article" placeholder="Article send by Admin"></input>
                                    @error('body_article')
                                    <span style="color: red;">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    <select style="font-family:'Arimo'; 
                                   padding: .2%;
                                   font-size: 15px;
                                   margin-left: 10%;
                                   margin-top: 2%;
                                    " name="category">
                      <option value="">Other</option>
                      <option value="dunyagundemi">dunyagundemi</option>
                      <option value="olkeiqtisadiyyati">olkeiqtisadiyyati</option>
                      <option value="trendler">trendler</option>
                      <option value="iqtisadianaliz">iqtisadianaliz</option>
                      <option value="sahibkarliq">sahibkarliq</option>
                      <option value="ecosozluk">ecosozluk</option>

                    
                    </select><br>
                    @error('category')
                               <span  style="color: red; margin-left: 10%;">{{$message}}</span>
                    @enderror
                     <input style="margin: 7% auto  auto  10%;" type="file" name="image_article">
                     @error('image_article')
                     <span style="color: red; margin-left: 10%;">{{$message}}</span>
                     @enderror
                        
                    
                </div>
                <div class="card-footer">
                    <button class="btn btn--radius-2 btn--blue-2" type="submit">Print Article</button>
                </div>
            </form>
            </div>
        </div>
@endsection