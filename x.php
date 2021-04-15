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
.custom-control{
  box-shadow: 0.5px 0.5px 4px #1c34499e;
}
.custom-control-input{
padding: 100px !important;
}
.custom-checkbox{

  background-image: ; 
}

</style>
<body>


<div class="container">
<br>  <p class="text-center"></p>
<hr>

<div class="row shadow-lg">
<aside class="col-7">
                  

                  


                  <div class="card cal">
                      <article class="card-group-item shadow-lg">
                          <header class="card-header">
                              <h6 class="title">XFINITY  </h6>
                          </header>
                          <header class="card-header headercss">
            <h6 class="title">Calculator </h6>
        </header>
                          
                         

                          
                          <div class="filter-content">
                        
                              <div class="card-body ">
                              <form>
                

                            <span class="">
                                  <label class="border-right border-bottom btn-sm ">
                                          <input class="" id="internet"  type="checkbox" value="0" id='internet'>
                                          <span class="form-check-label">
                                            INTERNET
                                          </span>
                                  </label>

                                  <label class="border-bottom  border-right btn-sm">
                                    <input class="" id='phone' type="checkbox" value="0" d='phone'>
                                    <span class="form-check-label">
                                      PHONE
                                    </span>
                                  </label>  <!-- form-check.// -->
                                    
                                 
                                    
                                   <label class=" border-bottom  border-right btn-sm">
                                         <input class="" id="tv" type="checkbox" value="0" id="tv">
                                    <span class="form-check-label">
                                      TV
                                    </span>
                                    </label> <!-- form-check.// -->
                                    
                                    
                                  
                            </span> 
                            <hr> 
                            <center><div class="row h5 pl-5 ml-5" id="extra" > </div>   </center >

                                   <div class="row " id='hs'>    
                                  
                      <div class="col-md-3" >          
                     

                                  <label for="clientName">packges</label>
                              <select class="form-control" name="Assigned_To" id="packagesDd" >
                                <option value="0">NONE</option>
                                <option value="SUPER">SUPER</option>
                                <option value="STANDARD">STANDARD</option>
                                <option value="SIGNATURE">SIGNATURE</option>
                                <option value="SELECT">SELECT</option>
                                <!-- <option value="Plan Latino">Plan Latino</option> -->
                                
                              </select>  <!-- form-check.// -->

                                

                      

                      </div>         

                      <div class="col-md-3" >          
                            
                              
                        <label for="clientName">tv</label>
                  <select class="form-control" name="Assigned_To" id="tvDd" >
                    <option value="0">NONE</option>
                    <option value="67.27">140+</option>
                    <option value="69.99">220+</option>
                    <option value="89.99">260+</option>
                    
                  </select>
                      </div>  
                        <div class="col-md-3" >          
                            
                              
                        <label for="clientName">phone</label>
                      <select class="form-control" name="Assigned_To" id="phoneDd"  >
                    <option value="0">NONE</option>
                   <option value="29.99">XFINITY VOICE UNLIMITED</option>
                   <option value="34.95">XFINITY VOICE LOCAL </option>
                  </select>
                      </div>
                       <div class="col-md-3" >          
                            
                              
                        <label for="clientName">internet</label>
                      <select class="form-control" name="Assigned_To"  id="internetDd" value="0">
                     <option value="0">NONE</option> 
                     <option value="34.99">200 Mbps</option>
                     <option value="59.99">400 Mbps</option>
                     <option value="69.99">800 Mbps</option>
                     <option value="79.99">1200 Mbps</option>
                     
                      </select>
                      </div>
                                  
                    
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
                              
                              <div class="card-body border-bottom ">
                                  <div class="row">
                                  <div class="col-md-6">
                              <div class="form-group ">
                                <label>No of TVs</label>
                                <input type="number" class="form-control" id="tvs" >
                              </div>
                              
                                                                
                            </div>
                            <div>
                   
                            </div>
                  <div class="col-md-6 pt-2">
                      <div class="form-group">
                               
                              
                                



                                  <input type="hidden" id="phonehidden" value="0">
                                  <input type="hidden" id="internethidden" value="0">
                                  <input type="hidden" id="tvhidden" value="0">
                                  <input type="hidden" id="packageshidden" value="0">
                                  <input type="hidden" id="itphidden" value="0">
                             
                                  <br >

                                    
    <label class="btn btn-info">

                                    <input class="" type="checkbox" id="wifi"  value="0">
                                    <span class="form-check-label" >&nbsp;WIFI</span>
                                  </label>
                                  </div>
                                  </div>
                                  </div>
                              </div> <!-- card-body.// -->
                          </div>
                          <div class="row text-light ">
                                                <div class="col-md-3 pb-1   ">
                                                    <div class="custom-control custom-checkbox image-checkbox shadow-lg pb-1" style="background-color:#1695a0 ">
                                                        <input type="checkbox" class="custom-control-input" id="LATINO"  value="17.95">
                                                        <label class="custom-control-label" for="LATINO">
                                                      <h5 class="m-0 p-0 border-bottom">LATINO </h5><p style="font-size: 13px; color:aliceblue" >17.95</p>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 pb-1">
                                                    <div class="custom-control custom-checkbox image-checkbox" style="background-color:#1695a0 ">
                                                        <input type="checkbox" class="custom-control-input" id="NETFLIX" value="10">
                                                        <label class="custom-control-label" for="NETFLIX">
                                                         <h5 class="m-0 p-0 border-bottom" >NETFLIX -</h5><p style="font-size: 13px; color:aliceblue" >10</p>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 pb-1">
                                                    <div class="custom-control custom-checkbox image-checkbox" style="background-color:#1695a0 ">
                                                        <input type="checkbox" class="custom-control-input" id="HBOMAX" value="14.99">
                                                        <label class="custom-control-label" for="HBOMAX">
                                                        <h5  class="m-0 p-0 border-bottom" >HBOMAX</h5><p style="font-size: 13px; color:aliceblue" >14.99</p>

                                                        </label>
                                                    </div>
                                                </div>
                                             
                                                <div class="col-md-3 pb-1">
                                                    <div class="custom-control custom-checkbox image-checkbox" style="background-color:#1695a0 ">
                                                        <input type="checkbox" class="custom-control-input" id="STARZ" value="8.99">
                                                        <label class="custom-control-label" for="STARZ">
                                                        <h5  class="m-0 p-0 border-bottom">STARZ </h5><p style="font-size: 13px; color:aliceblue" >8.99</p>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 pb-1">
                                                    <div class="custom-control custom-checkbox image-checkbox" style="background-color:#1695a0 ">
                                                        <input type="checkbox" class="custom-control-input" id="SHOWTIME" value="12.00">
                                                        <label class="custom-control-label" for="SHOWTIME">
                                                        <h5  class="m-0 p-0 border-bottom">SHOWTIME </h5><p style="font-size: 13px; color:aliceblue" >12.00</p>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 pb-1">
                                                    <div class="custom-control custom-checkbox image-checkbox" style="background-color:#1695a0 ">
                                                        <input type="checkbox" class="custom-control-input" id="REDZONE" value="9.95">
                                                        <label class="custom-control-label" for="REDZONE">
                                                         <h5  class="m-0 p-0 border-bottom">REDZONE </h5><p style="font-size: 13px; color:aliceblue" >9.95</p>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 pb-1">
                                                    <div class="custom-control custom-checkbox image-checkbox" style="background-color:#1695a0 ">
                                                        <input type="checkbox" class="custom-control-input" id="DEPORTES" value="5.00">
                                                        <label class="custom-control-label" for="DEPORTES">
                                                        <h5  class="m-0 p-0 border-bottom">DEPORTES</h5><p style="font-size: 13px; color:aliceblue" >5.00</p>
                                                        </label>
                                                    </div>
                                                </div>
                                               
                                                <div class="col-md-3 pb-1">
                                                    <div class="custom-control custom-checkbox image-checkbox" style="background-color:#1695a0 ">
                                                        <input type="checkbox" class="custom-control-input" id="epex" value="5.99">
                                                        <label class="custom-control-label" for="epex">
                                                        <h5  class="m-0 p-0 border-bottom">EPEX</h5><p style="font-size: 13px; color:aliceblue" >5.99</p>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 pb-1">
                                                    <div class="custom-control custom-checkbox image-checkbox" style="background-color:#1695a0 ">
                                                        <input type="checkbox" class="custom-control-input" id="MOVIE"  value="12.00">
                                                        <label class="custom-control-label" for="MOVIE">
                                                         <h5  class="m-0 p-0 border-bottom">MOVIE</h5><p style="font-size: 13px; color:aliceblue" >12.00</p>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 pb-1" style="width: 30px;">
                                                    <div class="custom-control custom-checkbox image-checkbox" style="background-color:#1695a0 ">
                                                        <input type="checkbox" class="custom-control-input" id="STAREAMPIX"  value="4.99">
                                                        <label class="custom-control-label" for="STAREAMPIX">
                                                        <h5  class="m-0 p-0 border-bottom">STAREAMPIX  </h5><p style="font-size: 13px; color:aliceblue" >4.99</p>
                                                        </label>
                                                    </div>
                                                </div> 
                                    </div>
                          <button id='submit' class="btn btn-success btn-block" style="width: 100%  !important;height:50px " >Total </button>
                      </article> <!-- card-group-item.// -->
                  </div> <!-- card.// -->




</aside> <!-- col.// -->
<div class="col-sm-5 border m-0 p-0 card cal">
        
            <div ><center><h1 class="bg-light m-0 p-0  ">RESULT</h1></center></div>

            <center><h1 id='providerName' style="height:4.4ch" class="headercss m-0 p-0 " >TV</h1></center>


            <table class="table w-50 borderless"  >
              <thead>
                <tr>

                  <td scope="col" >Wifi</th>
                  <td scope="col" style="float:right"  id="wifiid">0.00</th>
                </tr>
                <tr>
                  <td scope="col" >Tv</th>
                  <td scope="col" style="float:right"  id="tvid">0.00 </th>
                </tr>
                <tr>
                  <td scope="col" >Phone</th>
                  <td scope="col" style="float:right" id="phoneid">0.00 </th>
                </tr>
                <tr>
                <tr>
                  <td scope="col" >Internet</th>
                  <td scope="col" style="float:right" id="internetid">0.00 </th>
                </tr>
                <tr>
                  <td scope="col" >Packages  </th>
                  <td  scope="col" style="float:right"  id="priceid">0.00</th>
                </tr>
                <tr>
                <tr>
                <td  scope="col" >Tvs </th>
                <td  scope="col" style="float:right"  id="tvsid">0.00</th>
                </tr>
                <td  scope="col" >Channles</th>
                <td  scope="col" style="float:right"  id="channlesid">0.00</th>
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
        var internetvalue;
        var phonevalue;
        var tvvalue;
        var packagesvalue;

              // console.log('in.............................');

      // internet
                      if($('#internet').prop("checked") == true   ){
                          // alert('internet')
                          console.log('internet checked');
                          $("#internetDd").prop('disabled', false);
                           $("#packagesDd").prop('disabled', true);
                           $("#tvDd").prop('disabled',true);
                           $("#phoneDd").prop('disabled', true);
                           document.getElementById("itphidden").value=0;


                           $("#internetDd").change(function(){

                                pd=$( "#internetDd" ).val();
                                phonevalue=document.getElementById("phonehidden").value=0;
                                internetvalue=document.getElementById("internethidden").value=pd;
                                tvvalue=document.getElementById("tvhidden").value=0; 
                                packagesvalue=document.getElementById("packageshidden").value=0;
                               
                                console.log( 'phonevalue '+phonevalue);
                                console.log('internetvalue '+internetvalue);
                                console.log( 'tvvalue '+tvvalue);
                                console.log('packagesvalue '+packagesvalue);

                              });
                      
                        

                      }
                     
        // Phone               
                     else if($('#phone').prop("checked") == true ){
                          // alert('internet')
                          console.log('phone checked');
                        
                           $("#packagesDd").prop('disabled', true);
                           $("#tvDd").prop('disabled',true);
                           $("#phoneDd").prop('disabled', false);
                           $("#internetDd").prop('disabled', true);
                           document.getElementById("itphidden").value=0;

                                $("#phoneDd").change(function(){

                                  pd=$( "#phoneDd" ).val();
                                            phonevalue=document.getElementById("phonehidden").value=pd;
                                            internetvalue=document.getElementById("internethidden").value=0;
                                            tvvalue=document.getElementById("tvhidden").value=0;
                                            packagesvalue=document.getElementById("packageshidden").value=0;
                                            
                                            console.log( 'phonevalue '+phonevalue);
                                            console.log('internetvalue '+internetvalue);
                                            console.log( 'tvvalue '+tvvalue);
                                            console.log('packagesvalue '+packagesvalue);
 
                                  });

                     
                          //  internetvalue=0;
                      }
                      else if($('#tv').prop("checked") == true ){
                          // alert('internet')
                          console.log('tv checked');
                        
                           $("#packagesDd").prop('disabled', true);
                           $("#tvDd").prop('disabled',false);
                           $("#phoneDd").prop('disabled', true);
                           $("#internetDd").prop('disabled', true);
                           document.getElementById("itphidden").value=0;
                           $("#tvDd").change(function(){

                                            pd=$( "#tvDd" ).val();
                                            phonevalue=document.getElementById("phonehidden").value=0;
                                            internetvalue=document.getElementById("internethidden").value=0;
                                            tvvalue=document.getElementById("tvhidden").value=pd;
                                            packagesvalue=document.getElementById("packageshidden").value=0;
                                     
                                            console.log( 'phonevalue '+phonevalue);
                                            console.log('internetvalue '+internetvalue);
                                            console.log( 'tvvalue '+tvvalue);
                                            console.log('packagesvalue '+packagesvalue);

                                  });


                           

                      }
                      else{


                            $("#packagesDd").prop('disabled', false);
                            $("#tvDd").prop('disabled',false);
                            $("#phoneDd").prop('disabled', false);
                            $("#internetDd").prop('disabled', false);
                      }
                          
                      if($('#internet').prop("checked")== true  && $('#tv').prop("checked") == true){
                      console.log("internet + Tv");
                      document.getElementById("extra").innerHTML='';
                      document.getElementById("itphidden").value=0;
                      $("#hs").show();
             
                          $("#packagesDd").prop('disabled', false);
                           $("#tvDd").prop('disabled',true);
                           $("#phoneDd").prop('disabled', true);
                           $("#internetDd").prop('disabled', true);
                      }
                      if($('#tv').prop("checked")== true  && $('#phone').prop("checked") == true  ){
                      console.log("phone + Tv");
             
                          $("#packagesDd").prop('disabled', false);
                           $("#tvDd").prop('disabled',true);
                           $("#phoneDd").prop('disabled', true);
                           $("#internetDd").prop('disabled', true);
                      }
                      // internet  ANd phone
                      if($('#internet').prop("checked")== true  && $('#phone').prop("checked") == true && $('#tv').prop("checked") == false){
                      console.log("internet + phone");

                     
                           $("#hs").hide();
                              document.getElementById("extra").innerHTML='$59.99/month';
                              document.getElementById("itphidden").value=59.99;
                          //  $("#tvDd").hide();
                          //  $("#phoneDd").hide();
                          //  $("#internetDd").hide();
                              phonevalue=document.getElementById("phonehidden").value=0;
                              internetvalue=document.getElementById("internethidden").value=0;
                              tvvalue=document.getElementById("tvhidden").value=0;
                              packagesvalue=document.getElementById("packageshidden").value=0;

                      }

                      // tv  ANd phone
                     else if($('#tv').prop("checked")== true  && $('#phone').prop("checked") == true && $('#internet').prop("checked") == false){

                        console.log("tv + phone");
                      // alert("1");
                          $("#hs").hide();
                               document.getElementById("extra").innerHTML='$79.99/month';
                               document.getElementById("itphidden").value=79.99;
                               

                              phonevalue=document.getElementById("phonehidden").value=0;
                              internetvalue=document.getElementById("internethidden").value=0;
                              tvvalue=document.getElementById("tvhidden").value=0;
                              packagesvalue=document.getElementById("packageshidden").value=0;
                      }   // tv  ANd internet
                        else if($('#tv').prop("checked")== true  && $('#internet').prop("checked") == true && $('#phone').prop("checked") == false ){
                            console.log('tv + internet');
                            
                            
                            $("#packagesDd").change(function(){
                             var packages=document.getElementById("packagesDd").value;
                             document.getElementById("extra").innerHTML='';
                             document.getElementById("itphidden").value=0;
                             $("#hs").show();

                            //  console.log(packages);
                             if(packages=='SUPER'){
                              console.log('SUPER');
                              $pkg=document.getElementById("packageshidden").value=139.99;
                             
                             }
                            else if(packages=='STANDARD'){
                              console.log('STANDARD');
                              $pkg= document.getElementById("packageshidden").value=79.99;
                             }
                            else if(packages=='SIGNATURE'){
                              console.log('SIGNATURE');
                              $pkg=document.getElementById("packageshidden").value=119.99;
                             }
                            else if(packages=='SELECT'){
                              console.log('SELECT');
                              document.getElementById("packageshidden").value=89.99;
                             }   
                           
                           else{
                              console.log('else');
                              $pkg= document.getElementById("packageshidden").value=0;
                             }
                             console.log($pkg);

                            });
                        }
                        else if($('#tv').prop("checked")== true  && $('#internet').prop("checked") == true && $('#phone').prop("checked") == true ){
                            console.log('tv + internet + internet');
                            
                      
                            $("#packagesDd").change(function(){
                             var packages=document.getElementById("packagesDd").value;

                            //  console.log(packages);
                             if(packages=='SUPER'){
                              console.log('SUPER');
                              $pkg=document.getElementById("packageshidden").value=149.99;
                             
                             }
                            else if(packages=='STANDARD'){
                              console.log('STANDARD');
                              $pkg= document.getElementById("packageshidden").value=99.99;
                             }
                            else if(packages=='SIGNATURE'){
                              console.log('SIGNATURE');
                              $pkg=document.getElementById("packageshidden").value=129.99;
                             }
                            else if(packages=='SELECT'){
                              console.log('SELECT');
                              document.getElementById("packageshidden").value=99.99;
                             }   
                           
                           else{
                              console.log('else');
                              $pkg= document.getElementById("packageshidden").value=0;
                             }
                             console.log($pkg);

                            });
                        }
                      else{
                            $("#hs").show();
                            document.getElementById("extra").innerHTML='';
                          
                      }


                   
       

                      

                      
                     
                       




               
                      // console.log("phonevalue"+phonevalue);
                       $( "#submit" ).on( "click", function() {
                         
                        var tvsInput = $("#tvs"). val();
                        var wifi=0;
                        phvalue=document.getElementById("phonehidden").value;
                        netvalue=document.getElementById("internethidden").value;
                        tvalue=document.getElementById("tvhidden").value;
                        pgvalue=document.getElementById("packageshidden").value;
                        itpvalue= document.getElementById("itphidden").value

                        phvalue =parseFloat(phvalue);
                        netvalue =parseFloat(netvalue);
                        tvalue =parseFloat(tvalue);
                        pgvalue =parseFloat(pgvalue);
                        itpvalue =parseFloat(itpvalue);
                        
                        if($('#wifi').prop("checked") == true)
                          {
                            wifi=14;
                          }else{
                            wifi=0;
                          }

                        // console.log('phvalue'+phvalue)
                        // console.log('phvnetvaluealue'+netvalue)
                        // console.log('phvatvaluelue'+tvalue)
                        // console.log('pgvalue'+pgvalue)
                        var markedCheckbox = document.querySelectorAll('input[type="checkbox"]:checked');
                          var channelsSum=0;
                      for (var checkbox of markedCheckbox) {

                                value =parseFloat(checkbox.value);
                                console.log('tv channels='+ value);
                                channelsSum= channelsSum+value;  
                      
                      }
                      console.log('channelsSum='+ channelsSum);

                     

                        var tvsTotal= tvsInput*7.50;

                        total=phvalue+netvalue+tvalue+pgvalue+tvsTotal+itpvalue+wifi+channelsSum;
                        total = total.toFixed(2);
                        channelsSum = channelsSum.toFixed(2);
                        console.log('total='+total);     
                  document.getElementById("channlesid").innerHTML=channelsSum;
                  document.getElementById("wifiid").innerHTML=wifi;
                  document.getElementById("tvid").innerHTML=tvalue;
                  document.getElementById("phoneid").innerHTML=phvalue;
                  document.getElementById("internetid").innerHTML=netvalue;
                  if(pgvalue>0){
                    document.getElementById("priceid").innerHTML=pgvalue;
                  }
                  else if(itpvalue>0){
                    document.getElementById("priceid").innerHTML=itpvalue;

                  }else{
                    document.getElementById("priceid").innerHTML=0;

                  }              
                  document.getElementById("tvsid").innerHTML=tvsTotal;
                  document.getElementById("totalid").innerHTML=total;


                       });


                     
                  
        });
    });    

</script>
</html>