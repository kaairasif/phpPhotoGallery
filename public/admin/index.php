<?php
$page = "green";
$activePage="";
 require_once("../../includes/initialise.php");
 if (!$session->is_logged_in()) { redirect_to("login.php"); }

?>
<?php  include_layout_template("admin_header.php");?>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

<div class="clearfix"></div>
  <section class="page_content">
    <div class="container">
      <div class="innerContents">  
           <!-- Transition menu -->
           <nav>
               <ul>
                 <li class="sub-menu-parent">
                   <a href="#">Menu Item 1</a>
                   <ul class="sub-menu">
                     <li><a href="#">Sub Item 1</a></li>
                     <li><a href="#">Sub Item 2</a></li>
                     <li><a href="#">Sub Item 3</a></li>
                     <li><a href="#">Sub Item 4</a></li>
                   </ul>
                 </li>
                 <li class="sub-menu-parent"><a href="#">Menu Item 2</a>
                   <ul class="sub-menu">
                     <li><a href="#">Sub Item 1</a></li>
                     <li><a href="#">Sub Item 2</a></li>
                     <li><a href="#">Sub Item 3</a></li>
                     <li><a href="#">Sub Item 4</a></li>
                     <li><a href="#">Sub Item 5</a></li>
                     <li><a href="#">Sub Item 6</a></li>
                   </ul>
                 </li>
                 <li class="sub-menu-parent"><a href="#">Menu Item 3</a>
                   <ul class="sub-menu">
                     <li><a href="#">Sub Item 1</a></li>
                     <li><a href="#">Sub Item 2</a></li>
                   </ul></li>
               </ul>
             </nav> 

              
           <?php echo output_message($message); ?> 

           <h2 class="inner_page_title">PHOTO GALLERY</h2>

           
           <h3>Bubble sort</h3>
           <?php 


                function bubble_sort() {
                  $arr  = array(1,3,2,8,5,7,4,0);
                  $size = count($arr);

                    echo $size . "<br />";

                    // for ($i=0; $i<$size; $i++) {
                    //     for ($j=0; $j<$size-1-$i; $j++) {
                    //         if ($arr[$j+1] < $arr[$j]) {
                    //             swap($arr, $j, $j+1);
                    //         }
                    //     }
                    // }

                    for($i=0; $i<$size; $i++) {

                      if( $arr[$i] > $arr[$i+1] ) {
                        echo "big number found <br />";
                        $temp = $arr[$i+1];
                        $arr[$i+1] = $arr[$i];
                        $arr[$i] = $temp;
                      }
                    }
                    print_r ($arr);
                }

                //bubble_sort();

                // function swap(&$arr, $a, $b) {
                //     $tmp = $arr[$a];
                //     $arr[$a] = $arr[$b];
                //     $arr[$b] = $tmp;
                // }

                /* test bubble sort */

                // $arr = array(1,3,2,8,5,7,4,0);

                // print("Before sorting");
                // print_r($arr);

                // echo "<br />";

                // $arr = bubble_sort($arr);
                // print("After &nbsp; sorting");
                // print_r($arr);

                // echo "<br /> <br />";

                


                $level = 10;
                $column = $level*2 + 1 ;
                $mid = floor($column/2)  ;

                //echo "mid".$mid."\n";

                $arr = array();

                for($i=0; $i<$column; $i++){
                  $arr[] = '&nbsp;';
                }

                //print_r($arr); 

                for($i=0; $i<$level; $i++){
                  
                  for($j=0; $j<$column; $j++){
                      if($i==0){
                        $arr[$mid] = '*';    
                      }else{
                        $arr[$mid] = '*';
                        $arr[$mid-$i] = '*';
                        $arr[$mid+$i] = '*';
                      }
                    
                    
                  }//columns

                  echo "<span class='star'>" . implode(" ",$arr) . "</span>";
                 


                }//end of level
                 
           ?>

           <div class="row">
             <div class="col-md-3">
                 <div class="list-group">
                   <a href="list_photos.php" class="list-group-item">List Photos</a>           
                 </div>
             </div>
             <div class="col-md-9">                 
                     <div class="skeyCheck">                       
                            <div class="row">
                              <div class="col-md-3">
                                 <div class="l_area">                                   
                                 </div>
                              </div>
                              <div class="col-md-9">
                                  <div class="r_area">
                                    
                                  </div>
                              </div>
                            </div>
                     </div>

                      <!-- MAP AREA -->
                      <div class="map_area">
                          <div id="map"></div>
                          <div class="map_info">
                              <div class="container">
                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="col-md-3">
                                              <div class="map_address">
                                                  <img src="images/logo-sm.png" alt="">
                                                  <p>1523 Baker Street NY <br>
                                                      98 Tokyo, Japan Miku Zaji<br>
                                                      490000  Orleans<br>
                                                      +54 461287 1548 71<br>
                                                      hello@zevent7.com</p>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>                    
                          </div>
                      </div><!--END MAP-->


             </div>
           </div>
           <br />
           <div class="row">
              <div class="col-md-3">
                <aside class="zTop">
                <div class="trapezoid lft">Some dummy text.</div>    
              </aside>   
              </div>
              <div class="col-md-9">
               <aside class="zTop"> <div class="trapezoid">Some dummy text.</div> </aside>
              </div>
           </div> 


          <br />
          <hr>
          <span>Logged in as <?php  if(isset($_SESSION['username'])){ echo "<b>" . $_SESSION['username'] . "</b>"; } ?></span>  &nbsp;
          <a class="btn btn-danger" href="logout.php" >logout</a>           
      </div>
    </div><!-- / END CONTAINER -->
  </section>
<div class="clearfix"></div>

<section class="fullWidthSection animated">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <aside class="rightAngle">asas</aside>
      </div>
      <div class="col-md-2">
         <div id="lines1">0</div>
      </div>
      <div class="col-md-2">
         <div id="lines2">0</div>
      </div>
      <div class="col-md-2">
         <div id="lines3">0</div>
      </div>
      <div class="col-md-2">
         <div id="lines4">0</div>
      </div>
    </div>
  </div>
</section>
<?php  include_layout_template("admin_footer.php");?>	

	