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
  <h5 class="mb-n1 font-30 color-highlight font-700 text-uppercase pt-1">مشروع مناهضة الهجرة غير النظامية بصعيد مصر
</h5>
 <br>
 <h2>جمعية الطفوله و التنمية بأسيوط بالتعاون مع بلان انترناشيونال ايجيبت </h2>
 <div>
 
 </div>
 
 
 </div>
 </div>
 <div class="card card-style">
 <div class="card-body text-center">
 <h5 class="mb-n1 font-30 color-highlight font-700 text-uppercase pt-1">بيانات الخدمات الغير الماليه </h5>
 
 <div>
     <div id="accordion">
   <div class="card">
     <div class="card-header" id="headingOne">
       <h5 class="mb-0">
         <button class="btn btn-primary" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
             <p style="color: white;font-size: 18px;margin: 0px;">بيانات الأتصال</p>
         </button>
       </h5>
     </div>
 
     <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
       <div class="card-body" style="
      background-color: aliceblue;">
     <div class="row" v-for="message in messagedata" v-bind:key="message.id" dir="rtl">
      
             <div class="col-md-4"> 
                 <h5 id="header1"><span id="headerr1">الإسم: </span>{{ message.name_of_company }}</h5>
                
                  
             </div>
             <div class="col-md-4"> 
                 <h5 id="header1"><span id="headerr1">العنوان: </span> {{ message.address_company }}</h5>   
             </div>
             <div class="col-md-4"> 
                <a :href=" location "><img src="https://logos-download.com/wp-content/uploads/2016/05/Google_Maps_logo_icon.png" style="width:14%"></a>
        

             </div>
             <div class="col-md-4"> 
                 <h5 id="header1"><span id="headerr1">مواعيد العمل : </span>{{ message.job_hours_from_to }}</h5>
                
                  
             </div>
        
             <br>
  
             <div class="col-md-4"> 
                 <h5 id="header1"><span id="headerr1">ايام العمل: </span> {{ message.working_days }}</h5>
                
                  
             </div> 
             <div class="col-md-4"> 
                 <h5 id="header1"><span id="headerr1"> رقم للتواصل: </span> {{ message.number_of_company }}</h5>
                
                  
             </div> 
             <div class="col-md-4"> 
                 <h5 id="header1"><span id="headerr1">رقم واتس اب: </span>{{ message.whatsApp_of_company }}</h5>
                
                  
             </div>
       
             <br>
             <div class="col-md-4"> 
                 <h5 id="header1"><span id="headerr1">الموقع الإلكتروني: </span>{{ message.website_of_company }}</h5>
                
                  
             </div>
             <div class="col-md-4"> 
                 <h5 id="header1"><span id="headerr1">البريد الإلكتروني: </span> {{ message.email_of_company }}</h5>
                
                  
             </div> 
              
             
     </div>
       </div>
     </div>
   </div>
   <div class="card">
     <div class="card-header" id="headingTwo">
       <h5 class="mb-0">
         <button class="btn btn-primary"  data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
           بيانات التمويل
         </button>
       </h5>
     </div>
     <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
       <div class="card-body" style="background-color: aliceblue;">
         <div class="row" v-for="message in messagedata" v-bind:key="message.id" dir="rtl">
             <div class="col-md-4"> 
                 <h5 id="header1"><span id="headerr1">نوع الخدمه : </span>{{ message.type_of_service }}</h5>
                
                  
             </div>
             <div class="col-md-4"> 
                 <h5 id="header1"><span id="headerr1">فئة الخدمه : </span> {{ message.fields_of_service }}</h5>
                
                  
             </div>
             <div class="col-md-4"> 
                 <h5 id="header1"><span id="headerr1">  المناطق التي تغطيها الخدمه : </span>{{ message.covered_area }}</h5>
                
                  
             </div>
             <br>
             <div class="col-md-4" style="padding-right: 3px;"> 
                 <h5 id="header1"><span id="headerr1"> شروط الحصول علي الخدمه : </span> {{ message.terms_gain_service }}</h5>
                
                  
             </div> 
             <div class="col-md-4"> 
                 <h5 id="header1"><span id="headerr1">  مجالات الخدمه : </span> {{ message.service_category }}</h5>
                
                  
             </div> 
             <div class="col-md-4"> 
                 <h5 id="header1"><span id="headerr1">  الفئه المستهدفه : </span>{{ message.Target_group }}</h5>
                
                  
             </div>
       
             <br>
             <div class="col-md-4"> 
                 <h5 id="header1"><span id="headerr1"> استمرارية الخدمه : </span>{{ message.continues_service }}</h5>
                
                  
             </div>
 
             <div class="col-md-4"> 
                 <h5 id="header1"><span id="headerr1">فئات السن المستهدفه بالخدمه : </span> {{ message.Target_age_groups }}</h5>
                
                  
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
          <button class="btn btn-primary" data-toggle="collapse" data-target="#collapse0" aria-expanded="false" aria-controls="collapse0"> بيانات الخدمه الغير ماليه</button>
        </h3>
      </div>
 <!--layer1-->
   
       <div class="card-body">
         <div class="card">

           <div id="collapse0" class="collapse" aria-labelledby="heading0_1" data-parent="#accordion" style="">
             <div class="card-body " dir="rtl">
              <section>
    <div class="table-responsive " dir="rtl">
        <!--Table-->
        <table class="table table" >
            <!--Table head-->
            <thead>
                <tr>
                  
                    <th>#</th>
                    <th class="">نوع الخدمه</th>

                </tr>
            </thead>
            <!--Table head-->

            <!--Table body-->
            <tbody>
                <tr v-for="( message , index ) in messagedata2" v-bind:key="message.id">
                  <th scope="row">{{index+1}}</th>
                  <td style="display:flow-root"> 
                     <div class="card-header" :id="'heading10'" style="float:right;
                     background-color:transparent !important;
                     border-bottom: none !important;">

          
          <button class="btn btn-primary" data-toggle="collapse" :data-target="'#collapse'+index+1" aria-expanded="true" :aria-controls="'collapse'+index+1"> 
            
                    {{ message.type_of_service }}</button>
       
                   </div>
    </td>












      <div :id="'collapse'+index+1" class="collapse" :aria-labelledby="'heading10'" data-parent="#accordion" style="">
             <div class="card-body " dir="rtl">
              <section style="
    display: grid;
">
  
        <!--Table-->
    
            
           

    
    <td>
      <p style="font-style: italic;color: #1d8370;font-size:24px"> مزايا الخدمة:</p>
      <p style="font-size: x-large;">{{ message.benifits_of_service}}</p>
    </td>

    <td>
      <p style="font-style: italic;color: #1d8370;font-size:24px">الأوراق المطلوبه</p>
      <p style="font-size: x-large;">{{ message.requirments}}</p>
    </td>
    <td>
      <p style="font-style: italic;color: #1d8370;font-size:24px">مدة الحصول علي الخدمه</p>
      <p style="font-size: x-large;">{{ message.period_of_gain_service}}</p>
    </td>
    <td>
      <p style="font-style: italic;color: #1d8370;font-size:24px">تكلفة الخدمه</p>
      <p style="font-size: x-large;">{{ message.cost_of_service}}</p>
    </td>
    <td>
      <p style="font-style: italic;color: #1d8370;font-size:24px">طريقة التقديم</p>
      <p style="font-size: x-large;">{{ message.ways_to_apply}}</p>
    
    </td>
                
  

  
   
      

           
            <!--Table body-->
     
  
</section>
             </div>
           </div>
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
           location:'',
           
 
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
    axios.post('https://test.nrchrod.org/api/retrivedatasinglenonprofit',formData).then(
    response=> {
        this.messagedata=response.data.message;
        console.log(response.data.message)
        

     }
    );
 
     axios.post('https://test.nrchrod.org/api/retrivedatasinglenonprofittable',formData).then(
    response=> {
        this.messagedata2=response.data.message;
      
          this.location=this.messagedata2[0].location
     }
    )
 
 
 }
     }
 }
 </script>
 
 <style>
 #headerr11{
  color: darkgreen;
 }
 #header1{
     float: right;
 }
 </style>