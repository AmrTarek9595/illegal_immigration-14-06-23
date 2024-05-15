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
   <div class="card-body text-center">
   <h5 class="mb-n1 font-30 color-highlight font-700 text-uppercase pt-1">مشروع مناهضة الهجره الغير شرعيه</h5>
   <br>
   <h2>جمعية الطفوله والأمومه بأسيوط بالتعاون مع بلان مصر </h2>
   <div>
      <a href="/en/en_addnewnonprofit">إضافة استمارة خدمة غير ماليه جديده</a>
   </div>
   <div class="accordion" id="accordionExample" >
     <div class="card">
       <div class="card-header" id="headingOne">
         <h2 class="mb-0" >
           <button style="text-align: center !important;font-size:25px;font-style: italic;" class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
             قائمة الخدمات الغير ماليه للمؤسسات
           </button>
         </h2>
       </div>
   
       <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
         <div class="card-body">
           <ul style="float: right;" dir="rtl">
       <li style="list-style-type: none" v-for="message in messagedata" v-bind:key="message.id"><a :href="'/en/en_insertnonprofittable?id='+message.id">{{ message.name_of_company }}</a></li>
     </ul>
         </div>
       </div>
     </div>

     
   </div>
   
   </div>
   </div>
   
   
   
   </div>
   
   
   
   </div></template>
   
   <script>
   import axios from 'axios';
   export default {
       data() {
       return {
     
             messagedata:'',
     
       }
     },
   mounted(){
       this.setQueryStringDefaults();
      
   },
   methods:{
   
   /**قوائم الخدمات الغير ماليه */
   setQueryStringDefaults:function()
   {
       
         axios.post("https://test.nrchrod.org/api/en_displayallnonprofit").then(
           response=>
           {
             this.messagedata=response.data.message;
               
            //this.responseData=response.data.message;
           // this.response=true;
           //window.location.href=formData;
           })
             }
          
          }
   
   
   
   
       }

   
            
          
    
 
   
   
   
   
   
   
   


 
   
   </script>
   
   <style>
   
   </style>