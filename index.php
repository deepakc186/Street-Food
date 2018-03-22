<?php
     $currentPage = 'Home'; // current page is about, do the same for other page
    include('header.php');
    
?>
        <header class="jumbotron">
            <div class="container jumbo">
                <div class="row row-header">
                    <div class="col-2 col-md-6 col-sm-8">		
                        <br/><br/> <h3 style="color: #000;background-color: #ccccff">Pull up a chair. Take a taste. Come join us. Life is so endlessly delicious. </h3>                   
                    </div>			
                </div>
                <div class="row row-con">

                    <form class="form-inline" method="POST" action="search.php">
                        <div class="col-8 col-sm-4">
                            <div class="form-group mb-2">
                                <select class="custom-select form-control" id="area" name="area">
                                    <option selected>Area...</option>
                                    <option value="Kalani Nagar">Kalani Nagar</option>
                                    <option value="Rajendra Nagar">Rajendra Nagar</option>
                                    <option value="3">Bhawarkua</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div></div>
                        <div class="col-12 col-sm">
                            <div class="form-group mx-sm-6 mb-2">
                                <label for="inputPassword2" class="sr-only">Search for your flavour...</label>
                                <input type="text" class="form-control" id="foody" name="foody" placeholder="Search for your taste...">
                            </div></div>
                        <div class="col-12 col-sm"> 
                            <button name="submit-form" type="submit" class="btn btn-primary mb-2">Search</button></div>
                    </form>

                </div>     
            </div>
        </header>
</div>
        
        <div class="container">
            <div class="row row-content">
                <div class="col-8">
                    <div id="mycarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active" > 
                                
                                    
                                        <img class="d-block img-fluid"
                                             src="img/jalebi.jpg">
                             
                            </div>
                            <div class="carousel-item" >
                                <img class="d-block img-fluid"
                                     src="img/pani_puri.jpg" alt="pani_puri">
                                
                                </div>
                            
                            <div class="carousel-item" >
                                <img class="d-block img-fluid"
                                     src="img/vada_pav.jpg" alt="vada">
                                <div class="carousel-caption d-none d-md-block">
                                    
                                </div>
                            </div>
                        </div>
                        </div>
                        <ul class="carousel-indicators">
                            <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#mycarousel" data-slide-to="1"></li>
                            <li data-target="#mycarousel" data-slide-to="2"></li>
                        </ul>
                        <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon">
                        </a>
                        <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon">
                        </a>
                    </div>
                </div>
            </div>	
            
<div class="container">
            <div class="row row-content align-items-center">
                <div class="col-sm-4 push-sm-8 col-md-3 push-md-9">
                    <h3>Street FOOD | An antidote to fast food</h3>
                </div>
                <div class="col-sm pull-sm-4 col-md pull-md-3">
                    <div class="media">
                        <img class="d-felx mr-3 img-thumbnail align-self-center" src="img/chai.jpg"
                             alt="uthappizza" width="200" height="100">
                        <div class="media-body align-self-center">
                            <h2 class="mt-0">CHAi</h2>
                            <p>Chai is not just a cup of tea, but it’s a hot and soothing brew that offers a time to take a rest from
                                the chaotic streets of the city, to slowly sip and enjoy.
                                Drinking cups of hot chai on the side of the street is one of the joys of visiting India.A
                                cup should cost anywhere from 5 – 15 Rupees depending on where you are and the size of the cup
                                </p>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <div class="row row-content align-items-center">
                <div class="col-sm-4 push-sm-8 col-md-3 push-md-9">
                    <img class="d-felx mr-3 img-thumbnail align-self-center" src="img/girl.jpg"
                             alt="uthappizza" width="200" height="100">
                   
                </div>
                <div class="col-sm pull-sm-4 col-md pull-md-3">
                    <div class="media">
                        <h3 class="mt-0 align-self-center mr-4">Chaat <br>ChouPatI</h3>
                        <div class="media-body align-self-center">
                            <h3 class="mt-0"> a spicy treat to kill the heat</h3>
                             <p>Chaat literally means to lick, which is exactly what a nice plate of flavourful chaat 
                                compels us to do! From licking our fingers to licking down the plate, a delicious plate 
                                of chaat is the one which leaves no remnants behind. From aloo chaat, to dahi bhalle,
                                papri chaat,dahi puri, bedmi, ragda patties, phuchka, bhel puri and pav Bhaji, we as a
                                nation are collectively obsessed with chaat and the love affair is not the kind to die 
                                anytime soon. </p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row row-content align-items-center">
                <div class="col-sm-4 push-sm-8 col-md-3 push-md-9">
                    <h3>BoN APEtIT!</h3>
                </div>
                <div class="col-sm pull-sm-4 col-md pull-md-3">
                    <div class="media">
                        <img class="d-flex  mr-3 img-thumbnail align-self-center" src="img/momo.gif"
                             alt="alberto">
                        <div class="media-body align-self-center">
                            
                            <h4>SuppeR</h4>
                            <p>Indian streets are famous for tasty and reasonably priced varieties of street food; one
                                just has to keep their taste buds ready for the yummy treats coming their way. </p>
                        </div>
                    </div>
                </div>
            </div>
</div>

       <?php
        require_once 'Footer.php';
        ?> 

<script>
    $(document).ready(function(){
       $('#foody').keyup(function() {
           var txt = $(this).val();
           if(txt != '')
           {
               
           }else{
               
           }
    });    
    });
    </script>
    </body>
</html>

