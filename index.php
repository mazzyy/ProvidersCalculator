<!DOCTYPE html>
<html>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

<head>
    <title></title>
</head>
<style type="text/css">
    
.btn{

width: 140px !important;

}
    
body{
  width: 100%;
  height: 100vh;
  background-repeat: no-repeat;
  background: linear-gradient(-90deg, #cddfe9 0%, #7d99a4 100%)!important;
}
.cal{
  box-shadow: 0.5px 0.5px 10px #1c34499e;
}
.headercss{
  background: linear-gradient(to left, #1e76ad 0%, #1695a0 100%)!important;
  color: white;
  
  margin-left:-0.2ch;
  margin-right:-0.2ch;
  padding-top: 10%;
}

</style>
<body>


<div class="container">
<br>  <p class="text-center">SPECTRUM CALCULATOR</p>
<hr>

<div class="row shadow-lg">
<aside class="col-6  ">
                  


                  <div class="card cal">
                      <article class="card-group-item shadow-lg">
                          <header class="card-header">
                              <h6 class="title">SPECTRUM  </h6>
                          </header>
                          <div class="   headercss   ">
                          <h6 class="   mb-4">CALCULATOR </h6>
                          </div>
                          
                         

                          
                          <div class="filter-content">
                        
                              <div class="card-body">
                              <form>
                            <span class="">
                                  <label class="border-right border-bottom btn-sm ">
                                          <input class="" id="internet"  type="checkbox" value="0">
                                          <span class="form-check-label">
                                            Internet
                                          </span>
                                  </label>

                                   <label class=" border-bottom  border-right btn-sm">
                                          <input class=" " id="internetAssit"  type="checkbox" value="0">
                                          <span class="form-check-label">
                                            Internet Assit
                                          </span>
                                    </label> <!-- form-check.// -->
                                    
                                 
                                    
                                   <label class=" border-bottom  border-right btn-sm">
                                          <input class=" " id="internetUltra"  type="checkbox" value="0">
                                          <span class="form-check-label">
                                            Internet Ultra
                                          </span>
                                    </label> <!-- form-check.// -->
                                    
                                    
                                  
                            </span>       
                      <div class=""  style="padding-left:4%">          
                     
                      <label class=" border-right border-bottom btn-sm ">
                                    <input class=" form-check-input" id="tv" type="checkbox" value="0">
                                    <span class="form-check-label">
                                      TV
                                    </span>
                      </label>  <!-- form-check.// -->

                      &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                      <label class=" border-right border-bottom btn-sm  ">
                                    <input class=" form-check-input" id="tvlatino" type="checkbox" value="0">
                                    <span class="form-check-label">
                                      Mi Plan Latino TV
                                    </span>
                      </label>  <!-- form-check.// -->

                      </div>         

                      <div class=""  style="padding-left:1.5%">          
                            
                                  <label class="form-check">
                                    <input class="form-check-input" id='phone' type="checkbox" value="0">
                                    <span class="form-check-label">
                                      PHONE
                                    </span>
                                  </label>  <!-- form-check.// -->
                      </div>  
                                  <div>
                    
                                  </div>
                              </form>

                              </div> <!-- card-body.// -->
                          </div>
                      </article> <!-- card-group-item.// -->
                      
                      <article class="card-group-item">
                          <header class="card-header">
                              <h6 class="title">Choose type </h6>
                          </header>
                          <div class="filter-content">
                              
                              <div class="card-body">
                                  <div class="row">
                                  <div class="col-md-6">
                              <div class="form-group ">
                                <label>No of TVs</label>
                                <input type="number" class="form-control" id="tvs" >
                              </div>
                              
                                  <label class="btn btn-warning">
                                    <input class="" type="checkbox" id="gold" value="">
                                    <span class="form-check-label">GOLD</span>
                                  </label>
                                  <label class="btn btn-info">
                                    <input class="" type="checkbox" id="wifi"  value="">
                                    <span class="form-check-label" >&nbsp;WIFI</span>
                                  </label>
                            </div>
                            <div>
                   
                            </div>
                  <div class="col-md-6">
                      <div class="form-group">
                                <label>No. of DVR </label>
                                <input type="number"  class="form-control" id="dvr" >
                              </div>
                                



                                  <input type="hidden" id="price" value="">
                                  <input type="hidden" id="latino" value="0">
                                  <input type="hidden" id="broadcast" value="0">

                                  <label class="btn btn-dark">
                                    <input class="" type="checkbox" id="silver"  value="">
                                    <span class="form-check-label">SILVER</span>
                                  </label>
                                  </div>
                                  </div>
                              </div> <!-- card-body.// -->
                          </div>
                          <button id='submit' class="btn btn-success btn-block" style="width: 540px  !important;height:50px " >Total </button>
                      </article> <!-- card-group-item.// -->
                  </div> <!-- card.// -->




</aside> <!-- col.// -->
<div class="col-sm-6 border m-0 p-0 card cal">
        
            <div ><center><h1 class="bg-light m-0 p-0  ">RESULT</h1></center></div>

            <center><h1 id='providerName' style="height:3.4ch" class="headercss m-0 p-0 " >TV</h1></center>


            <table class="table w-50 borderless"  >
              <thead>
                <tr>
                  <td scope="col" >Wifi</th>
                  <td scope="col" style="float:right"  id="wifiid">0.00</th>
                </tr>
                <tr>
                  <td scope="col" >Silver|Gold </th>
                  <td scope="col" style="float:right"  id="upgradeid">0.00 </th>
                </tr>
                <tr>
                  <td scope="col" >TVs price</th>
                  <td scope="col" style="float:right" id="tvsid">0.00 </th>
                </tr>
                <tr>
                <tr>
                  <td scope="col" >Dvr </th>
                  <td scope="col" style="float:right" id="Bundleid">0.00 </th>
                </tr>
                <tr>
                  <td scope="col" >Price  </th>
                  <td  scope="col" style="float:right"  id="priceid">0.00</th>
                </tr>
                <tr>
                <tr>
                <td  scope="col" >Broadcast Fee </th>
                <td  scope="col" style="float:right"  id="broadcastid">0.00</th>
                </tr>
                <tr>
                  <th scope="col" >Total</th>
                  <th scope="col" style="float:right"  id="totalid">0.00</th>
                </tr>
            
              </thead>
              <tbody>
                <tr>


      </div>




</div> 
</div> 
<!--container end.//-->

<br><br>
<article class="bg-secondary mb-3">  

</article>
</body>
<script>
$(document).ready(function(){
        $('input[type="checkbox"]').click(function(){
          

     // internet
              if($('#internet').prop("checked") == true || $('#internetAssit').prop("checked") == true || $('#internetUltra').prop("checked") == true ){
                console.log("Checkbox is checked.internet");
                // $("#wifi").prop('disabled', true);
                       $("#gold").prop('disabled', true);
                       $("#silver").prop('disabled',true);
                       $("#tvs").prop('disabled', true);
                       $("#dvr").prop('disabled', true);
                       
                       if($('#internet').prop("checked") == true ){
                       $("#internetAssit").prop('disabled', true);
                       $("#internet50").prop('disabled', true);
                       $("#internetUltra").prop('disabled', true);
                       $("#tvs").prop('disabled', true);
                       $("#dvr").prop('disabled', true);
                       document.getElementById("price").value = "49.99";   
                       
                       }
                       else if($('#internetAssit').prop("checked") == true ){
                      
                       $("#internet").prop('disabled', true);
                       $("#internet50").prop('disabled', true);
                       $("#internetUltra").prop('disabled', true);
                       $("#tv").prop('disabled', true);
                       $("#tvlatino").prop('disabled', true);
                       document.getElementById("price").value = "17.99";   

                       }
                      
                      else if($('#internetUltra').prop("checked") == true ){
                      
                      $("#internet").prop('disabled', true);
                      $("#internetAssit").prop('disabled', true);
                      $("#internet50").prop('disabled', true);
                      $("#tv").prop('disabled', true);
                      $("#tvlatino").prop('disabled', true);
                        $("#phone").prop('disabled', true);
                      document.getElementById("price").value = "69.99";   

                      }
                   

                      //  $("#gold").prop("checked", false);
                      //  $("#silver").prop("checked", false);
                       document.getElementById("tvs").value=0;
                       document.getElementById("dvr").value=0;
                       document.getElementById("broadcast").value = "0";   
            }
            else if($('#internet').prop("checked")== false){
                console.log("Checkbox is unchecked.internet");
                // $("#wifi").prop('disabled', false)
                       $("#gold").prop('disabled', false);
                       $("#silver").prop('disabled', false);
                       $("#tvs").prop('disabled', false);
                       $("#dvr").prop('disabled', false);

                       $("#internet").prop('disabled', false);
                       $("#internetAssit").prop('disabled', false);
                       $("#internet50").prop('disabled', false);
                       $("#internetUltra").prop('disabled', false);
                       
                       $("#tv").prop('disabled', false);
                       $("#tvlatino").prop('disabled', false);
                       $("#phone").prop('disabled', false);
                       document.getElementById("price").value = "0";
            }

            if($('#tv').prop("checked")== true || $('#tvlatino').prop("checked")== true){
                    console.log("Checkbox is checked.tv");


                    if($('#tvlatino').prop("checked")== true){

                      $("#wifi").prop('disabled', true);
              
                        document.getElementById("broadcast").value = "16.45"; 

                        document.getElementById("price").value = "34.99";   
                      }
                  
                    if($('#tv').prop("checked")== true){
                     
                       $("#wifi").prop('disabled', true);
                
                       document.getElementById("broadcast").value = "16.45"; 
                      
                       document.getElementById("price").value = "44.99";   
                   }

                 
            }
            if($('#phone').prop("checked")== true){
              document.getElementById("price").value = "12.99";   
            }
            
            else if($('#tv').prop("checked")== false || $('#tvlatino').prop("checked")== false){
                console.log("Checkbox is unchecked.tv");
                       $("#wifi").prop('disabled', false)
                      //  $("#tv").prop('disabled', false)
                      //  $("#tvlatino").prop('disabled', false)
                      //  document.getElementById("price").value = "0";
            }     
            // interner and tv
                 if($('#tv').prop("checked")== true  && $('#internet').prop("checked") == true ){
                    console.log("Checkbox is unchecked.tv && internet");
                      $("#wifi").prop('disabled', false);
                      $("#gold").prop('disabled', false);
                       $("#silver").prop('disabled', false);
                       $("#tvs").prop('disabled', false);
                       $("#dvr").prop('disabled', false);
                       $("#tvlatino").prop('disabled', true);
                       document.getElementById("price").value = "74..98";
                       document.getElementById("broadcast").value = "16.45"; 
                }else{

                  $("#wifi").prop('disabled', false);
                      $("#gold").prop('disabled', false);
                       $("#silver").prop('disabled', false);
                       $("#tvs").prop('disabled', false);
                       $("#dvr").prop('disabled', false);
                      

                }

                 // interner and tvlatino
                if($('#tvlatino').prop("checked")== true  && $('#internet').prop("checked") == true ){
                    console.log("Checkbox is unchecked.tv && internet");
                      $("#wifi").prop('disabled', false);
                      $("#gold").prop('disabled', false);
                       $("#silver").prop('disabled', false);
                       $("#tvs").prop('disabled', false);
                       $("#dvr").prop('disabled', false);
                       $("#tv").prop('disabled', true);
                       document.getElementById("price").value = "64.98";
                       document.getElementById("broadcast").value = "16.45"; 
                } else{
                  // $("#tv").prop('disabled', false);

                }
                      // interner and phone
                if($('#internet').prop("checked")== true  && $('#phone').prop("checked") == true){
                    console.log("Checkbox is unchecked.tv && phone");
                     

                       $("#wifi").prop('disabled', false);
                      $("#gold").prop('disabled', true);
                       $("#silver").prop('disabled',true);
                       $("#tvs").prop('disabled', true);
                       $("#dvr").prop('disabled', true);
                       document.getElementById("price").value = "62.98";
                       document.getElementById("broadcast").value = "0"; 
                       
                } 
                 // tv and phone
                if($('#tv').prop("checked")== true  && $('#phone').prop("checked") == true){
                    console.log("Checkbox is unchecked.tv && phone");
                    $("#wifi").prop('disabled', true);
                      $("#gold").prop('disabled', false);
                       $("#silver").prop('disabled',false);
                       $("#tvs").prop('disabled', false);
                       $("#dvr").prop('disabled', false);
                       document.getElementById("price").value = "57.98";
                       document.getElementById("broadcast").value = "16.45";  
                } 
                if($('#tvlatino').prop("checked")== true  && $('#phone').prop("checked") == true){
                    console.log("Checkbox is unchecked.tv && phone");
                    $("#wifi").prop('disabled', true);
                      $("#gold").prop('disabled', false);
                       $("#silver").prop('disabled',false);
                       $("#tvs").prop('disabled', false);
                       $("#dvr").prop('disabled', false);
                       document.getElementById("price").value = "47.98";
                       document.getElementById("broadcast").value = "16.45";  
                } 
                 // tv , phone and internet
                if($('#tv').prop("checked")== true  && $('#phone').prop("checked") == true && $('#internet').prop("checked") == true){
                    console.log("Checkbox is unchecked.tv && phone");
                    $("#wifi").prop('disabled', false);
                      $("#gold").prop('disabled', false);
                       $("#silver").prop('disabled',false);
                       $("#tvs").prop('disabled', false);
                       $("#dvr").prop('disabled', false);
                       document.getElementById("price").value = "102.97";
                       document.getElementById("broadcast").value = "16.45"; 
                } 
                // tvlatino , phone and internet
                if($('#tvlatino').prop("checked")== true  && $('#phone').prop("checked") == true && $('#internet').prop("checked") == true){
                    console.log("Checkbox is unchecked.tv && phone");
                    $("#wifi").prop('disabled', false);
                      $("#gold").prop('disabled', false);
                       $("#silver").prop('disabled',false);
                       $("#tvs").prop('disabled', false);
                       $("#dvr").prop('disabled', false);
                       document.getElementById("price").value = "77.97";
                       document.getElementById("broadcast").value = "16.45"; 
                } 

                if($('#internetAssit').prop("checked")== true  && $('#phone').prop("checked") == true){
                    console.log("Checkbox is unchecked.tv && phone");
                     

                       $("#wifi").prop('disabled', false);
                      $("#gold").prop('disabled', true);
                       $("#silver").prop('disabled',true);
                       $("#tvs").prop('disabled', true);
                       $("#dvr").prop('disabled', true);
                       document.getElementById("price").value = "30.98";
                       document.getElementById("broadcast").value = "0"; 
                       
                }     if($('#internet50').prop("checked")== true  && $('#phone').prop("checked") == true){
                    console.log("Checkbox is unchecked.tv && phone");
                     

                       $("#wifi").prop('disabled', false);
                      $("#gold").prop('disabled', true);
                       $("#silver").prop('disabled',true);
                       $("#tvs").prop('disabled', true);
                       $("#dvr").prop('disabled', true);
                       document.getElementById("price").value = "42.98";
                       document.getElementById("broadcast").value = "0"; 
                       
                } 


                // $("#tvs").on("keyup change", function(e) {
                //   var str = $("#tvs").val();
                //   var dvr = $("#dvr").val();
                //        console.log(str);
                //        console.log(dvr);

                // })
                
                // $("#dvr").on("keyup change", function(e) {
                //   var str = $("#tvs").val();
                //   var dvr = $("#dvr").val();
                //        console.log(str);
                //        console.log(dvr);

                // })
            
         

                $( "#submit" ).on( "click", function() {
                  var tvsInput = $("#tvs"). val();
                  var dvrInput = $("#dvr"). val();
                  var latino =0;
                  var upgrade=0;
                  var wifi=0;
                  var tvsTotal=0;
                 var dvrTotal=0;
                  if($('#silver').prop("checked") == true)
                  {
                    upgrade=30;
                  }
                  if($('#gold').prop("checked") == true)
                  {
                    upgrade=50;
                  }
                  if($('#wifi').prop("checked") == true)
                  {
                    wifi=5;
                  }

                  var tvsTotal= tvsInput*7.9;
                  var dvrTotal;
          
                   
                        price=document.getElementById("price").value;
                        broadcast=document.getElementById("broadcast").value;
                        price=parseFloat(price);
                     
                if(dvrInput==1)
                {
                   dvrTotal= 12.99;
                }
                else if(dvrInput>1)
                {
                  dvrTotal= 19.99;
                }     
                  console.log('wifi='+wifi);
                  console.log('upgrade='+upgrade);
                  console.log('tvsTotal='+tvsTotal);
                  console.log('dvrTotal='+dvrTotal);
                  console.log(broadcast);
                  sum=wifi+upgrade+tvsTotal+dvrTotal+price;
                  console.log(price);
                  console.log('sum='+sum);
                  // document.getElementById("Pricing").innerHTML=sum;
                 
                  // document.getElementById("broadcastView").innerHTML=broadcast;
                 
                  broadcast=parseFloat(broadcast);
                  monthly=sum+broadcast;
                  console.log(monthly);
                  // document.getElementById("monthly").innerHTML=monthly;



                  document.getElementById("wifiid").innerHTML=wifi;
                  document.getElementById("upgradeid").innerHTML=upgrade;
                  document.getElementById("tvsid").innerHTML=tvsTotal;
                  document.getElementById("Bundleid").innerHTML=dvrTotal;
                  document.getElementById("priceid").innerHTML=sum;
                  document.getElementById("broadcastid").innerHTML=broadcast;
                  document.getElementById("totalid").innerHTML=monthly;


               })

                
              });
              
    });

</script>
</html>