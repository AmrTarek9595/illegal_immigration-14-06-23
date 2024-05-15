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
   <h5 class="mb-n1 font-30 color-highlight font-700 text-uppercase pt-1">Financial services data</h5>
   
   <div dir="ltr">
       <div id="accordion">
     <div class="card">
       <div class="card-header" id="headingOne">
         <h5 class="mb-0">
           <button class="btn btn-primary" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
               <p style="color: white;font-size: 18px;margin: 0px;">Contact Informations</p>
           </button>
         </h5>
       </div>
   
       <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
         <div class="card-body" style="
       background-color: aliceblue;
   ">
       <div class="row" v-for="message in messagedata" v-bind:key="message.id" dir="ltr">
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">Name of Company: </span><span id="span2">{{ message.name_of_company }}</span></h5>
                  
                    
               </div>
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">Address:</span> <span id="span2">{{ message.address_company }}</span></h5>
                  
                    
               </div>
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">Working Hours: </span><span id="span2">{{ message.job_hours_from_to }}</span></h5>
                  
                    
               </div>
               <br>
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">Working Days:</span><span id="span2"> {{ message.working_days }}</span></h5>
                  
                    
               </div> 
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">Phone Number:</span> <span id="span2">{{ message.number_of_company }}</span></h5>
                  
                    
               </div> 
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">WhatsApp Number: </span><span id="span2">{{ message.whatsApp_of_company }}</span></h5>
                  
                    
               </div>
         
               <br>
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">Website: </span><span id="span2">{{ message.website_of_company }}</span></h5>
                  
                    
               </div>
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">E-mail:</span> <span id="span2">{{ message.email_of_company }}</span></h5>
                  
                    
               </div> 
               <div class="col-md-4"> 
                   <a id="header" :href=" location"><span id="headerr"><h3>Directions</h3></span> </a>
                  
                    
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
                   <h5 id="header"><span id="headerr">Service Type: </span><span id="span2">{{ message.type_of_service }}</span></h5>
                  
                    
               </div>
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">Service class:</span> <span id="span2">{{ message.fields_of_service }}</span></h5>
                  
                    
               </div>
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">Kind of Investment: </span><span id="span2">{{ message.type_of_investment }}</span></h5>
                  
                    
               </div>
               <br>
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr"> Conditions for obtaining the service: </span> <span id="span2">{{ message.terms_gain_service }}</span></h5>
                  
                    
               </div> 
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">Service areas:</span> <span id="span2">{{ message.service_category }}</span></h5>
                  
                    
               </div> 
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">Target group: </span><span id="span2">{{ message.Target_group }}</span></h5>
                  
                    
               </div>
         
               <br>
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">Service continuity: </span><span id="span2">{{ message.continues_service }}</span></h5>
                  
                    
               </div>
   
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">Service target age groups:</span><span id="span2"> {{ message.Target_age_groups }}</span></h5>
                  
                    
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
           <button class="btn btn-primary" data-toggle="collapse" data-target="#collapse0" aria-expanded="false" aria-controls="collapse0">Lending segments</button>
         </h3>
       </div>
   <!--layer1-->
       <div v-if="layer_1" id="collapse0" class="collapse" aria-labelledby="heading0" data-parent="#accordion" style="" >
         <div class="card-body">
           <div class="card">
             <div class="card-header" id="heading0_1">
               <h3 class="mb-0">
                 <button class="btn btn-link" data-toggle="collapse" data-target="#collapse0_1" aria-expanded="false" aria-controls="collapse0_1">Layer One</button>
               </h3>
             </div>
             <div id="collapse0_1" class="collapse" aria-labelledby="heading0_1" data-parent="#accordion" style="">
               <div class="card-body" >
                 <div class="row" v-for="message in messagedata2" v-bind:key="message.id" dir="ltr">
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr"></span>{{ message.layer1_from_to }}</h5>
                  
                    
               </div>
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">Interest:</span> {{ message.layer1_interest}}</h5>
                  
                    
               </div>
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">Guarantor: </span>{{ message.layer1_damen }}</h5>
                  
                    
               </div>
               <br>
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">Paperwork:</span> {{ message.layer1_workpaper }}</h5>
                  
                    
               </div> 
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">The period of obtaining the service:</span> {{ message.layer1_period_gain_service }}</h5>
                  
                    
               </div> 
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">The grace period: </span>{{ message.layer1_ftrt_samah }}</h5>
                  
                    
               </div>
         
               <br>
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">Insurance: </span>{{ message.layer1_taamen }}</h5>
                  
                    
               </div>
   
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">Repayment period:</span> {{ message.layer1_modet_sadad }}</h5>
                  
                    
               </div> 
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">Submission method:</span> {{ message.layer1_takdem }}</h5>
                  
                    
               </div> 
               
       </div>
               </div>
             </div>
           </div> 
         </div>
       </div>
   <!--layer2-->
       <div v-if="layer_2" id="collapse0" class="collapse" aria-labelledby="heading0" data-parent="#accordion" style="">
         <div class="card-body">
           <div class="card">
             <div class="card-header" id="heading0_2">
               <h3 class="mb-0">
                 <button class="btn btn-link" data-toggle="collapse" data-target="#collapse0_2" aria-expanded="false" aria-controls="collapse0_1">Layer Two</button>
               </h3>
             </div>
             <div id="collapse0_2" class="collapse" aria-labelledby="heading0_2" data-parent="#accordion" style="">
               <div class="card-body">
                <div class="row" v-for="message in messagedata2" v-bind:key="message.id" dir="ltr">
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr"></span>{{ message.layer2_from_to }}</h5>
                  
                    
               </div>
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">Interest:</span> {{ message.layer2_interest}}</h5>
                  
                    
               </div>
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">Guarantor: </span>{{ message.layer2_damen }}</h5>
                  
                    
               </div>
               <br>
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">Paperwork:</span> {{ message.layer2_workpaper }}</h5>
                  
                    
               </div> 
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">The period of obtaining the service:</span> {{ message.layer2_period_gain_service }}</h5>
                  
                    
               </div> 
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">The grace period: </span>{{ message.layer2_ftrt_samah }}</h5>
                  
                    
               </div>
         
               <br>
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">Insurance: </span>{{ message.layer2_taamen }}</h5>
                  
                    
               </div>
   
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">Repayment period:</span> {{ message.layer2_modet_sadad }}</h5>
                  
                    
               </div> 
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">Submission Methods:</span> {{ message.layer2_takdem }}</h5>
                  
                    
               </div> 
               
       </div>
               </div>
             </div>
           </div> 
         </div>
       </div>
   
       <!--layer3-->
       <div v-if="layer_3" id="collapse0" class="collapse" aria-labelledby="heading0" data-parent="#accordion" style="">
         <div class="card-body">
           <div class="card">
             <div class="card-header" id="heading0_3">
               <h3 class="mb-0">
                 <button class="btn btn-link" data-toggle="collapse" data-target="#collapse0_3" aria-expanded="false" aria-controls="collapse0_1">Layer Three</button>
               </h3>
             </div>
             <div id="collapse0_3" class="collapse" aria-labelledby="heading0_3" data-parent="#accordion" style="">
               <div class="card-body">
                <div class="row" v-for="message in messagedata2" v-bind:key="message.id" dir="ltr">
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr"></span>{{ message.layer3_from_to }}</h5>
                    
               </div>
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">Interest:</span> {{ message.layer3_interest}}</h5>
                  
                    
               </div>
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">Guarantor: </span>{{ message.layer3_damen }}</h5>
                  
                    
               </div>
               <br>
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">Paperwork:</span> {{ message.layer3_workpaper }}</h5>
                  
                    
               </div> 
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">The period of obtaining the service:</span> {{ message.layer3_period_gain_service }}</h5>
                  
                    
               </div> 
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">The grace period: </span>{{ message.layer3_ftrt_samah }}</h5>
                  
                    
               </div>
         
               <br>
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">Insurance: </span>{{ message.layer3_taamen }}</h5>
                  
                    
               </div>
   
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">Repayment period:</span> {{ message.layer3_modet_sadad }}</h5>
                  
                    
               </div> 
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">Submission Methods:</span> {{ message.layer3_takdem }}</h5>
                  
                    
               </div> 
               
       </div>
               </div>
             </div>
           </div> 
         </div>
       </div>
   
       <!--layer4-->
       <div v-if="layer_4" id="collapse0" class="collapse" aria-labelledby="heading0" data-parent="#accordion" style="">
         <div class="card-body">
           <div class="card">
             <div class="card-header" id="heading0_4">
               <h3 class="mb-0">
                 <button class="btn btn-link" data-toggle="collapse" data-target="#collapse0_4" aria-expanded="false" aria-controls="collapse0_4">Layer four</button>
               </h3>
             </div>
             <div id="collapse0_4" class="collapse" aria-labelledby="heading0_4" data-parent="#accordion" style="">
               <div class="card-body">
                 <div class="row" v-for="message in messagedata2" v-bind:key="message.id" dir="ltr">
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr"></span>{{ message.layer4_from_to }}</h5>
                  
                    
               </div>
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">Interest:</span> {{ message.layer4_interest}}</h5>
                  
                    
               </div>
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">Guarantor: </span>{{ message.layer4_damen }}</h5>
                  
                    
               </div>
               <br>
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">Paperwork:</span> {{ message.layer4_workpaper }}</h5>
                  
                    
               </div> 
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">The period of obtaining the service:</span> {{ message.layer4_period_gain_service }}</h5>
                  
                    
               </div> 
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">The grace period: </span>{{ message.layer4_ftrt_samah }}</h5>
                  
                    
               </div>
         
               <br>
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">Insurance: </span>{{ message.layer4_taamen }}</h5>
                  
                    
               </div>
   
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">Repayment period:</span> {{ message.layer4_modet_sadad }}</h5>
                  
                    
               </div> 
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">Submission methods:</span> {{ message.layer4_takdem }}</h5>
                  
                    
               </div> 
               
       </div>
               </div>
             </div>
           </div> 
         </div>
       </div>
       <!--layer5-->
       <div v-if="layer_5" id="collapse0" class="collapse" aria-labelledby="heading0" data-parent="#accordion" style="">
         <div class="card-body">
           <div class="card">
             <div class="card-header" id="heading0_4">
               <h3 class="mb-0">
                 <button class="btn btn-link" data-toggle="collapse" data-target="#collapse0_4" aria-expanded="false" aria-controls="collapse0_4">Layer Five</button>
               </h3>
             </div>
             <div id="collapse0_4" class="collapse" aria-labelledby="heading0_4" data-parent="#accordion" style="">
               <div class="card-body">
                 <div class="row" v-for="message in messagedata2" v-bind:key="message.id" dir="ltr">
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr"></span>{{ message.layer5_from_to }}</h5>
                  
                    
               </div>
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">Interest:</span> {{ message.layer5_interest}}</h5>
                  
                    
               </div>
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">Guarantor: </span>{{ message.layer5_damen }}</h5>
                  
                    
               </div>
               <br>
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">Paperwork:</span> {{ message.layer5_workpaper }}</h5>
                  
                    
               </div> 
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">The period of obtaining the service:</span> {{ message.layer5_period_gain_service }}</h5>
                  
                    
               </div> 
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">The grace period: </span>{{ message.layer5_ftrt_samah }}</h5>
                  
                    
               </div>
         
               <br>
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">Insurance: </span>{{ message.layer5_taamen }}</h5>
                  
                    
               </div>
   
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">Repayment period:</span> {{ message.layer5_modet_sadad }}</h5>
                  
                    
               </div> 
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">Submission method:</span> {{ message.layer5_takdem }}</h5>
                  
                    
               </div> 
               
       </div>
               </div>
             </div>
           </div> 
         </div>
       </div>
   
      <!--layer6-->
      <div v-if="layer_6" id="collapse0" class="collapse" aria-labelledby="heading0" data-parent="#accordion" style="">
         <div class="card-body">
           <div class="card">
             <div class="card-header" id="heading0_4">
               <h3 class="mb-0">
                 <button class="btn btn-link" data-toggle="collapse" data-target="#collapse0_4" aria-expanded="false" aria-controls="collapse0_4">Layer Six</button>
               </h3>
             </div>
             <div id="collapse0_4" class="collapse" aria-labelledby="heading0_4" data-parent="#accordion" style="">
               <div class="card-body">
                 <div class="row" v-for="message in messagedata2" v-bind:key="message.id" dir="ltr">
               <div class="col-md-4"> 
                   <h5 id="header" style="float:left"><span id="headerr"></span>{{ message.layer6_from_to }}</h5>
                  
                    
               </div>
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">Interest:</span> {{ message.layer6_interest}}</h5>
                  
                    
               </div>
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">Guarantor: </span>{{ message.layer6_damen }}</h5>
                  
                    
               </div>
               <br>
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">Paperwork:</span> {{ message.layer6_workpaper }}</h5>
                  
                    
               </div> 
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">The period of obtaining the service:</span> {{ message.layer6_period_gain_service }}</h5>
                  
                    
               </div> 
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">The grace period: </span>{{ message.layer6_ftrt_samah }}</h5>
                  
                    
               </div>
         
   
               <br>
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">Insurance: </span>{{ message.layer6_taamen }}</h5>
                  
                    
               </div>
   
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">Repayment period:</span> {{ message.layer6_modet_sadad }}</h5>
                  
                    
               </div> 
               <div class="col-md-4"> 
                   <h5 id="header"><span id="headerr">Submission method:</span> {{ message.layer6_takdem }}</h5>
                  
               </div> 
               
       </div>
               </div>
             </div>
           </div> 
         </div>
       </div>
   
       <!--another comments -->
       <div v-if="another_comments" id="collapse0" class="collapse" aria-labelledby="heading0" data-parent="#accordion" style="">
         <div class="card-body">
           <div class="card">
             <div class="card-header" id="heading0_5">
               <h3 class="mb-0">
                 <button class="btn btn-link" data-toggle="collapse" data-target="#collapse0_5" aria-expanded="false" aria-controls="collapse0_5">Other terms and conditions</button> 
               </h3>
             </div>
             <div id="collapse0_5" class="collapse" aria-labelledby="heading0_5" data-parent="#accordion" style="">
               <div class="card-body" v-for="message in messagedata2" v-bind:key="message.id">
                 <h4>{{ message.another_comments }}</h4>
               </div>
             </div>
           </div> 
         </div>
       </div>
       
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
             layer_5:'',
             layer_6:'',
             location:'',
             another_comments:''
             
             
   
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
      axios.post('https://test.nrchrod.org/api/en_retrivedatasingleprofit',formData).then(
      response=> {
          this.messagedata=response.data.message;
          console.log(response.data.message)
         
       }
      );
   
       axios.post('https://test.nrchrod.org/api/en_retrivedatasingleprofitinformationtable',formData).then(
      response=> {
          this.messagedata2=response.data.message;
          console.log(response.data.message);
          this.location=response.data.message[0].location;
          if(response.data.message[0].layer1_damen == null)
          {
               
                   }
                   else{
                       this.layer_1=true;
                   }
          if(response.data.message[0].layer2_damen == null){
               this.layer_2=false;
                   }
                   else{
                       this.layer_2=true;
                   }
           if(response.data.message[0].layer3_damen == null){
               this.layer_3=false;
                   }
                   else{
                       this.layer_3=true;
                   }
           if(response.data.message[0].layer4_damen == null){
               this.layer_4=false;
                   }
                   else{
                       this.layer_4=true;
                   }    
                   if(response.data.message[0].another_comments == null){
               this.another_comments=false;
                   }
                   else{
                       this.another_comments=true;
                   }      
                   if(response.data.message[0].layer5_damen == null){
               this.layer_5=false;
                   }
                   else{
                       this.layer_5=true;
                   }     
                   if(response.data.message[0].layer6_damen == null){
               this.layer_6=false;
                   }
                   else{
                       this.layer_6=true;
                   }
       }
      )
   
   
   }
       }
   }
   </script>
   
   <style>
   #headerr{
     color: darkgreen;
     float: left;
   }
   #header{
       float: left;
   }
   #span2{
     font-size: 16px;
   }
   </style>