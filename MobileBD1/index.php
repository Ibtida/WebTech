

  	<?php 
  		require 'header.php';
  	 ?>

<!-- Image Slider -->
<!-- <script type="text/javascript">
  $( "#search" ).keyup(function() {
    var value= $('#b').val();
    alert(value);
    $.ajax({
            url: "search.php",
            method: "post",
            data: $('#search_form').serialize(),
            success: function(Result){
                    $('#a').addClass('hidden');
                    $('#a').removeClass('show');
                    $('#b').addClass('show');
                    $('#b').removeClass('hidden');
                  
                    $('#b').html(Result);
            }
        });

});
</script>
 -->

<!--  <script type="text/javascript">
   jQuery(document).ready(function($){

   $('.live-search-list div').each(function(){
   $(this).attr('data-search-term', $(this).text().toLowerCase());
   });

   $('.live-search-box').on('keyup', function(){

   var searchTerm = $(this).val().toLowerCase();

       $('.live-search-list div').each(function(){

           if ($(this).filter('[data-search-term *= ' + searchTerm + ']').length > 0 || searchTerm.length < 1) {
               $(this).show();
           } else {
               $(this).hide();
           }

       });

   });

   });
 </script> -->




<div class="show puredata" id="puredata">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>

    <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="sliderimage" src="images/image1.jpg" alt="...">
                <div class="carousel-caption">
                ...
                </div>
            </div>
            <div class="item">
                <img class="sliderimage" src="images/image2.jpg" alt="...">
                <div class="carousel-caption">
                ...
                </div>
            </div>

            <div class="item">
                <img class="sliderimage" src="images/imagegif.gif" alt="...">
                <div class="carousel-caption">
                ...
                </div>
            </div>

            <div class="item">
                <img class="sliderimage" src="images/apple2image.gif" alt="...">
                <div class="carousel-caption">
                ...
                </div>
            </div>
            ...
      </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <!--sql-->
  <?php
  require 'config.php';

  $sql = "SELECT * FROM product1 order by Product_id desc limit 6";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) 
      { ?>

  <div class="container">
      <div id="products" class="row view-group">

              <?php
                  // output data of each row
                  while($row = $result->fetch_assoc()) 
                  {
                      // echo "<br> id: ". $row["Product_id"]. " -- Name: ". $row["Product_Name"]. "--Price " . $row["Price"] ." -- Details: ". $row["Details"]." -- image: ". $row["Image"]. "<br>";

                      // $dbimage=$row['Image'];  
                      // $dbproductname=$row["Product_Name"];

              ?>

  <!-- Product Grid View -->
                  
                          <div class="item col-xs-4 col-lg-4">
                              <div class="thumbnail card">
                                  <div class="img-event" style="border:3px solid #6f6868">
                                      <img class="group aaa list-group-image img-fluid" src=<?=$row['Image']?> alt="" />
                                  </div>
                                  <div class="caption card-body">
                                      <h4 class="group card-title inner list-group-item-heading">
                                          <?php echo $row['Product_Name']; ?></h4>
                                      <p class="group inner list-group-item-text">
                                          <?php echo $row['Details']; ?></p>
                                      <div class="row">
                                          <div class="col-xs-12 col-md-6">
                                              <p class="lead">
                                                  <?php echo $row['Price']; ?></p>
                                          </div>
                                          <div class="col-xs-12 col-md-6">
                                              <a class="btn btn-success" href=<?="buyDetails.php?Product_id=".$row['Product_id']?>>Buy</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <?php
                  }
                      } 
                      else
                       {
                          echo "0 results";
                      }

                      $conn->close();
                      ?> 
          </div>

  <!-- footer View -->

  <div class="container">
      <hr>
          <div class="text-center center-block">
              <p class="txt-railway">- MobileBD.com -</p>
              <br />
                  <a href="#"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
                  <b1 style="color: white">-----</b1>
                <a href="#"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
                <b1 style="color: white">-----</b1>
                <a href="#"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
                <b1 style="color: white">-----</b1>
                <a href="#"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
      </div>
      <hr>
  </div>
</div>
   
</div>

<br />

<!-- <link href="css/" rel="stylesheet"> -->



  <script src="js/jquery-1.12.5.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/my.js"></script>

  </body>
</html>