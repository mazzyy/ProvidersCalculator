<!DOCTYPE html>
<html>


<head>
    <title></title>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

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
  
  margin-left: -0.6ch;
  margin-right: -0.6ch;
  padding-top: 10%;
}
</style>
<body>


<div class="container">
<br>  <p class="text-center"></p>
<hr>

<div class="row">
    <aside class="col-sm-4">



<div class="card p-1 cal">
<ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#home" data-toggle="pill">Direct TV</a></li>
                  <li class="nav-item"><a class="nav-link" href="#hhome" data-toggle="pill">AT&TV</a></li>
                </ul>

  <!-- <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">direct tv</a>
  </li>
  
    <li class="nav-item">
    <a class="nav-link " id="hhome-tab" data-toggle="tab" href="#hhome" role="tab" aria-controls="hhome" aria-selected="false">direct internet</a>
  </li>
  
</ul> -->


<div class="tab-content">
  <div class="tab-pane active" id="home">
    <div class="card">
    <article class="card-group-item" >
        <header class="card-header headercss" >
            <h6 class="title">TV </h6>
        </header>
        <div class="filter-content">
            <div class="card-body">
            <form>
               <div class="form-group">
                        <label>Select a pakeges </label>
                        <select class="form-control" id="packageDtv">
                          <option value="0" >Select a pakeges on directv </option>
                          <option value="54.99">Select</option>
                          <option value="59.99">Entertainment</option>
                          <option value="74.99">Choice</option>
                          <option value="79.99">XTRA</option>
                          <option value="89.99">Ultimate</option>
                           <option value="139.99">Premier</option>
                        </select>
                      </div>

                 <div class="form-group ">
              <label>No of TVs</label>
              <input type="number" class="form-control" id="tvsDtv" placeholder="0" value="0">
            </div>
                <label class="form-check">
                  <input class="form-check-input" type="checkbox" id="payDtv" value="1">
                  <span class="form-check-label">
                    Auto Pay (Y or N)
                  </span>
                </label>  <!-- form-check.// -->

                <label class="form-check">
                  <input class="form-check-input" type="radio" name="radio1"value="0" checked>
                  <span class="form-check-label">
                  None
                  </span>
                </label>
                 <label class="form-check">
                  <input class="form-check-input" type="radio" name="radio1"value="59.99">
                  <span class="form-check-label">
                    AT&T Bundle
                  </span>
                </label>
                 <label class="form-check">
                  <input class="form-check-input" type="radio" name="radio1"value="85">
                  <span class="form-check-label">
                   Windstream Bundle
                  </span>
                </label>
                 <label class="form-check">
                  <input class="form-check-input" type="radio"name="radio1" value="54.99">
                  <span class="form-check-label">
                    Frontier Bundle
                  </span>
                </label>
                 <label class="form-check">
                  <input class="form-check-input" type="radio" name="radio1"value="99.99">
                  <span class="form-check-label">
                    Exede Bundle
                  </span>
                </label>
                 <label class="form-check">
                  <input class="form-check-input" type="radio" name="radio1"value="95">
                  <span class="form-check-label">
                    Century Link Bundle
                  </span>
                </label>
<button type="button" class="btn btn-block btn-success btn-lg" id="btnDtv" >Success</button>
            </form>

            </div> <!-- card-body.// -->
        </div>
    </article> <!-- card-group-item.// -->
    


   
  </div>
    </div>


 <div id="hhome" class="tab-pane" id="hhome">
    <article class="card-group-item" >
        <header class="card-header headercss">
            <h6 class="title">AT&TV </h6>
        </header>
        <div class="filter-content">
            <div class="card-body">
            <form>
               <div class="form-group">
                        <label >Select a pakeges </label>
                        <select class="form-control" id="packageatv">
                          <option value='0'>Select a pakeges </option>
                          <option value="54.99">Select</option>
                          <option value="59.99">Entertainment</option>
                          <option value="74.99">Choice</option>
                          <option value="79.99">XTRA</option>
                          <option value="89.99">Ultimate</option>
                           <option value="139.99">Premier</option>
                        </select>
                      </div>
                      


                 <div class="form-group ">
              <label>No of TVs</label>
              <input type="number" class="form-control" id="tvsatv" placeholder="0" value="0">
             </div>
                <label class="form-check">
                  <input class="form-check-input" type="checkbox" id="payatv" value="5">
                  <span class="form-check-label">
                    Auto Pay (Y or N)
                  </span>
                </label>  <!-- form-check.// -->

                <label class="form-check">
                  <input class="form-check-input" type="radio" name="radio2"value="0" checked>
                  <span class="form-check-label">
                    None
                  </span>
                </label>

                 <label class="form-check">
                  <input class="form-check-input" type="radio" name="radio2"value="40">
                  <span class="form-check-label">
                    AT&T Bundle
                  </span>
                </label>
                 <label class="form-check">
                  <input class="form-check-input" type="radio" name="radio2"value="65">
                  <span class="form-check-label">
                   Windstream Bundle
                  </span>
                </label>
                 <label class="form-check">
                  <input class="form-check-input" type="radio"name="radio2" value="54.99">
                  <span class="form-check-label">
                    Frontier Bundle
                  </span>
                </label>
                 <label class="form-check">
                  <input class="form-check-input" type="radio" name="radio2"value="79.99">
                  <span class="form-check-label">
                    Exede Bundle
                  </span>
                </label>
                 <label class="form-check">
                  <input class="form-check-input" type="radio" name="radio2"value="60">
                  <span class="form-check-label">
                    Century Link Bundle
                  </span>
                </label>
<button type="button" class="btn btn-block btn-success btn-lg" id="btnAtv">Success</button>
            </form>

            </div> <!-- card-body.// -->
        </div>
    </article> <!-- card-group-item.// -->
    

          </div>


  </div>
</div> <!-- card.// -->




    </aside> <!-- col.// -->

      <div class="col-sm-8 border m-0 p-0 card cal">
        
            <div ><center><h1 class="bg-light m-0 p-0  ">CALCULATOR</h1></center></div>

            <center><h1 id='providerName' style="height:3.4ch" class="headercss m-0 p-0 " >TV</h1></center><br><br><br>


            <table class="table w-50 borderless"  >
              <thead>
                <tr>
                  <td scope="col" >Package</th>
                  <td scope="col" style="float:right"  id="Package">0.00</th>
                </tr>
                <tr>
                  <td scope="col" >TVs price </th>
                  <td scope="col" style="float:right"  id="tvsprice">0.00 </th>
                </tr>
                <tr>
                  <td scope="col" >Auto Pay </th>
                  <td scope="col" style="float:right" id="autopay">0.00 </th>
                </tr>
                <tr>
                <tr>
                  <td scope="col" >Bundle </th>
                  <td scope="col" style="float:right" id="Bundle">0.00 </th>
                </tr>
                <tr>
                  <th scope="col" >Monthly Bill</th>
                  <th scope="col" style="float:right"  id="monthly">0.00</th>
                </tr>
            
              </thead>
              <tbody>
                <tr>


      </div>


</div> <!-- row.// -->

</div> 
<!--container end.//-->

<br><br>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- <script>
  $(function () {
    $('#myTab li:last-child a').tab('show')
  })
</script> -->


<script>
$(document).ready(function(){
     

         
         
  $( "#btnDtv" ).on( "click", function() {
         var  bundle=0;
         var payDtv=0;
         var  packageDtv=0;
         var tvsDtv=0;

         var packageDtv= $( "#packageDtv" ).val();
         var tvsDtv= $( "#tvsDtv" ).val();
         bundle=$('input[name="radio1"]:checked').val();
         if(tvsDtv>1){
          tvsDtv= tvsDtv*7-7;
         }
         else if(tvsDtv==1){
          tvsDtv=0;
         }
     
    

         packageDtv=parseFloat(packageDtv);
         tvsDtv=parseFloat(tvsDtv);
         bundle=parseFloat(bundle);

        if($('#payDtv').prop("checked")== true){
          payDtv=5;
        }
   

  
          console.log("packageDtv"+packageDtv);
          console.log("tvsDtv"+tvsDtv);
          console.log("payDtv"+payDtv);
          console.log("bundle"+bundle);
 
          sum=packageDtv+tvsDtv-payDtv+bundle;
          
          bill=packageDtv+tvsDtv-payDtv;
          console.log('bill='+bill);
          console.log('sum='+sum);

          
          // document.getElementById("bundle").innerHTML=sum;
          // document.getElementById("monthly").innerHTML=bill;
          // document.getElementById("providerName").innerHTML='SPECTRUM';


          
          document.getElementById("Package").innerHTML=packageDtv;
          document.getElementById("tvsprice").innerHTML=tvsDtv;
          document.getElementById("autopay").innerHTML=payDtv;
          document.getElementById("Bundle").innerHTML=bundle;

          document.getElementById("monthly").innerHTML=sum;
          document.getElementById("totalbill").innerHTML=bill;

          document.getElementById("providerName").innerHTML='Spectrum';
 

        })



                 
  $( "#btnAtv" ).on( "click", function() {

         var  bundle=0;
         var payatv=0;
         var  packageatv=0;
         var tvsatv=0;

         var packageatv= $( "#packageatv" ).val();

         var tvsatv= $( "#tvsatv" ).val();
         bundle=$('input[name="radio2"]:checked').val();
         
         if(tvsatv>1){
          tvsatv= tvsatv*7-7;
         }
         else if(tvsatv==1){
          tvsatv=0;
         }
         else if(tvsatv){
          tvsatv=0;
         }
     
    

         packageatv=parseFloat(packageatv);
         tvsatv=parseFloat(tvsatv);
         bundle=parseFloat(bundle);

        if($('#payatv').prop("checked")== true){
      
          payatv=5;
        }
   

  
          console.log("packageatv"+packageatv);
          console.log("tvsatv"+tvsatv);
            console.log("payatv"+payatv);
          console.log("bundle"+bundle);


          bill=packageatv+tvsatv-payatv;
          sum=packageatv+tvsatv-payatv+bundle;
          
         
          console.log('bill='+bill);
          console.log('sum='+sum);


          
          
          document.getElementById("Package").innerHTML=packageatv;
          document.getElementById("tvsprice").innerHTML=tvsatv;
          document.getElementById("autopay").innerHTML=payatv;
          document.getElementById("Bundle").innerHTML=bundle;

          // document.getElementById("monthly").innerHTML=sum;
          document.getElementById("totalbill").innerHTML=bill;
          document.getElementById("providerName").innerHTML='AT&T';
        

        })
        
})

</script>
</body>
</html>