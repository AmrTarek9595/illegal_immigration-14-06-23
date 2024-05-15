<template>
  <div>
   <div class="page-content header-clear-medium">
 <div class="splide single-slider slider-no-dots slider-no-arrows slider-boxed text-center mt-n2" id="single-slider-3">
 <div class="splide__track">
 <div class="splide__list">
 
 
 
 </div>
 </div>
 </div>
 <div class="card card-style">
  <div class="row">
    <div class="col-12" style="text-align:center">
  <img src="https://test.nrchrod.org/public/images/header.png" class="logo" style="width:66%;padding-top: 1%;">
</div>

  </div>
 <div class="card-body text-center">
  <h5 class="mb-n1 font-30 color-highlight font-700 text-uppercase pt-1">A project to combat the root causes of irregular migration in Upper Egypt</h5>
 <br>
 <h2>Childhood and Development Association in Assiut, in cooperation with Plan Misr</h2>

 <div>
 
 </div>
 
 
 </div>
 </div>
 <div class="card card-style">
 <div class="card-body text-center">
 <h5 class="mb-n1 font-30 color-highlight font-700 text-uppercase pt-1">Non-financial services data</h5>
 
 <div>
     <div id="accordion">
   <div class="card">
     <div class="card-header" id="headingOne">
       <h5 class="mb-0">
         <button class="btn btn-primary" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
             <p style="color: white;font-size: 18px;margin: 0px;">Contact Information</p>
         </button>
       </h5>
     </div>
 
     <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
       <div class="card-body" style="
     background-color: aliceblue;">
     <div class="row" v-for="message in messagedata" v-bind:key="message.id" dir="ltr">
             <div class="col-md-4"> 
                 <h5 id="header"><span id="headerr">Name of Company: </span>{{ message.name_of_company }}</h5>
                
                  
             </div>
             <div class="col-md-4"> 
                 <h5 id="header"><span id="headerr">Address: </span> {{ message.address_company }}</h5>
                
                  
             </div>
             <div class="col-md-4"> 
                 <h5 id="header"><span id="headerr">Working Hours: </span>{{ message.job_hours_from_to }}</h5>
                
                  
             </div>
             <br>
             <div class="col-md-4"> 
                 <h5 id="header"><span id="headerr">Working Days: </span> {{ message.working_days }}</h5>
                
                  
             </div> 
             <div class="col-md-4"> 
                 <h5 id="header"><span id="headerr">Phone Number: </span> {{ message.number_of_company }}</h5>
                
                  
             </div> 
             <div class="col-md-4"> 
                 <h5 id="header"><span id="headerr">WhatsApp Number: </span>{{ message.whatsApp_of_company }}</h5>
                
                  
             </div>
       
             <br>
             <div class="col-md-4"> 
                 <h5 id="header"><span id="headerr">Website: </span>{{ message.website_of_company }}</h5>
                
                  
             </div>
             <div class="col-md-4"> 
                 <h5 id="header"><span id="headerr">E-mail: </span> {{ message.email_of_company }}</h5>
                
                  
             </div> 
              
             
     </div>
       </div>
     </div>
   </div>
   <div class="card">
     <div class="card-header" id="headingTwo">
       <h5 class="mb-0">
         <button class="btn btn-primary"  data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Investment Information
         </button>
       </h5>
     </div>
     <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
       <div class="card-body" style="background-color: aliceblue;">
         <div class="row" v-for="message in messagedata" v-bind:key="message.id" dir="ltr">
             <div class="col-md-4"> 
                 <h5 id="header"><span id="headerr">Service Type: </span>{{ message.type_of_service }}</h5>
                
                  
             </div>
             <div class="col-md-4"> 
                 <h5 id="header"><span id="headerr">Service class: </span> {{ message.fields_of_service }}</h5>
                
                  
             </div>
             <div class="col-md-4"> 
                 <h5 id="header"><span id="headerr">Covered areas : </span>{{ message.covered_area }}</h5>
                
                  
             </div>
             <br>
             <div class="col-md-4"> 
                 <h5 id="header"><span id="headerr">Conditions for obtaining the service: </span> {{ message.terms_gain_service }}</h5>
                
                  
             </div> 
             <div class="col-md-4"> 
                 <h5 id="header"><span id="headerr">Service areas: </span> {{ message.service_category }}</h5>
                
                  
             </div> 
             <div class="col-md-4"> 
                 <h5 id="header"><span id="headerr">Target group: </span>{{ message.Target_group }}</h5>
                
                  
             </div>
       
             <br>
             <div class="col-md-4"> 
                 <h5 id="header"><span id="headerr">Service continuity: </span>{{ message.continues_service }}</h5>
                
                  
             </div>
 
             <div class="col-md-4"> 
                 <h5 id="header"><span id="headerr">Service target age groups: </span> {{ message.Target_age_groups }}</h5>
                
                  
             </div> 
              
             
     </div>
       </div>
     </div>
   </div>
 
 </div>
 </div>
 
 <div id="accordion">
   <div class="card">
     <div class="card-header" id="heading0">
       <h3 class="mb-0">
         <button class="btn btn-primary" data-toggle="collapse" data-target="#collapse0" aria-expanded="false" aria-controls="collapse0">Service data</button>
       </h3>
     </div>
 <!--layer1-->
   
       <div class="card-body">
         <div class="card">

           <div id="collapse0" class="collapse" aria-labelledby="heading0_1" data-parent="#accordion" style="">
             <div class="card-body " dir="ltr">
              <section>
    <div class="table-responsive text-nowrap" dir="ltr">
        <!--Table-->
        <table class="table table-striped" >
            <!--Table head-->
            <thead>
                <tr>
                    <th>#</th>
                    <th>Service type</th>
                    <th>Service advantages</th>
                    <th>Paperwork</th>
                    <th>The period of obtaining the service</th>
                    <th>Service cost</th>
                    <th>Submission method</th>
                </tr>
            </thead>
            <!--Table head-->

            <!--Table body-->
            <tbody>
                <tr v-for="( message , index ) in messagedata2" v-bind:key="message.id">
                  
                    <th scope="row">{{index+1}}</th>
                    <td>{{ message.type_of_service }}</td>
                    <td>{{ message.benifits_of_service}}</td>
                    <td>{{ message.requirments}}</td>
                    <td>{{ message.period_of_gain_service}}</td>
                    <td>{{ message.cost_of_service}}</td>
                    <td>{{ message.ways_to_apply}}</td>
                </tr>
  

  
   
      

            </tbody>
            <!--Table body-->
        </table>
        <!--Table-->
    </div>
</section>
             </div>
           </div>
         </div> 
       </div>
    

 
     <!--layer3-->

 
     <!--layer4-->

 
 
     <!--layer5-->
     
   </div>
 </div>
 </div>
 </div>
 
 
 </div>
 
 
 
 </div>
 </template>
 
 <script>
 import axios from 'axios';
 
 export default {
     data() {
     return {
 
           messagedata:'',
           messagedata2:'',
           layer_1:'',
           layer_2:'',
           layer_3:'',
           layer_4:'',
           
           
 
     }
   },
 mounted(){
 this.setQueryStringDefaults();
 },
     methods:{
         setQueryStringDefaults:function()
 {
     let queryString = window.location.search;
     let urlParams = new URLSearchParams(queryString);
    //console.log(queryString)
     //console.log(urlParams)
     let formData =new FormData();
    formData.append("id",urlParams.get("id"));
    console.log(urlParams.get("id"))
    axios.post('https://test.nrchrod.org/api/en_retrivedatasinglenonprofit',formData).then(
    response=> {
        this.messagedata=response.data.message;
        console.log(response.data.message)
        

     }
    );
 
     axios.post('https://test.nrchrod.org/api/en_retrivedatasinglenonprofittable',formData).then(
    response=> {
        this.messagedata2=response.data.message;
      
          console.log(this.messagedata2)
     }
    )
 
 
 }
     }
 }
 </script>
 
 <style>
 #headerr{
  color: darkgreen;
 }
 #header{
     float: left;
 }
 </style>