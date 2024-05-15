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
   
   </div>
   <div class="accordion" id="accordionExample" >
     <div class="card">

   <form>
       <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
         <div class="card-body">
            <!--layer1-->
            <div>
            <div class="custom-control custom-radio">
                <h3 class="radio">:الشريحه الأولي</h3>
            </div>
            <div class="custom-control custom-radio">
                <h3 class="radio">:من </h3>
                    <input type="text"  v-model="layer1_from">
                    
            </div>
            <div class="custom-control custom-radio">
               
                <h3 class="radio">:الي </h3>
                    <input type="text"  v-model="layer1_to">
            </div>
            <div class="custom-control custom-radio">
                <h3 class="radio">:الفائده </h3>
               <input type="text"  v-model="layer1_interest">
              
            </div>
            <div class="custom-control custom-radio">
                <h3 class="radio">:الضامن </h3>
               <textarea cols="60" rows="12"  v-model="layer1_damen"></textarea>
             
            </div>
              <div class="custom-control custom-radio">
                <h3 class="radio">:الأوراق المطلوبه</h3>
            <textarea cols="120" row="12" v-model="layer1_workpaper"></textarea>
               
            </div>
            <div class="custom-control custom-radio">
               <h3 class="radio">:مدة الحصول علي الخدمه</h3>
               <input type="text"  v-model="layer1_period_gain_service">
            </div>
            <div class="custom-control custom-radio">
               <h3 class="radio">:فترة السماح</h3>
               <input type="text"  v-model="layer1_ftrt_samah">
            </div>
            
            <div class="custom-control custom-radio">
               <h3 class="radio">:مدة السداد</h3>
               <input type="text"  v-model="layer1_modet_sadad">
               
            </div>
            <div class="custom-control custom-radio">
               <h3 class="radio">:التأمين</h3>
               <input type="text"  v-model="layer1_taamen">
            </div>
            
            <div class="custom-control custom-radio">
                <h3 class="radio">:التقديم</h3>
               <input type="checkbox" value="يدوي" v-model="layer1_takdem">
               <label>يدوي</label>
            </div>
          <div class="custom-control custom-radio">
          
               <input type="checkbox" value="الكتروني" v-model="layer1_takdem">
               <label>الكتروني</label>
            </div>
        </div>

 <!--layer2-->
 <div>
            <div class="custom-control custom-radio">
                <h3 class="radio">:الشريحه الثانيه</h3>
            </div>
            <div class="custom-control custom-radio">
                <h3 class="radio">:من </h3>
                    <input type="text"  v-model="layer2_from">
                    
            </div>
            <div class="custom-control custom-radio">
               
                <h3 class="radio">:الي </h3>
                    <input type="text"  v-model="layer2_to">
            </div>
            <div class="custom-control custom-radio">
                <h3 class="radio">:الفائده </h3>
               <input type="text"  v-model="layer2_interest">
              
            </div>
            <div class="custom-control custom-radio">
                <h3 class="radio">:الضامن </h3>
               <textarea cols="60" rows="12"  v-model="layer2_damen"></textarea>
             
            </div>
              <div class="custom-control custom-radio">
                <h3 class="radio">:الأوراق المطلوبه</h3>
            <textarea cols="120" row="12" v-model="layer2_workpaper"></textarea>
               
            </div>
            <div class="custom-control custom-radio">
               <h3 class="radio">:مدة الحصول علي الخدمه</h3>
               <input type="text"  v-model="layer2_period_gain_service">
            </div>
            <div class="custom-control custom-radio">
               <h3 class="radio">:فترة السماح</h3>
               <input type="text"  v-model="layer2_ftrt_samah">
            </div>
            
            <div class="custom-control custom-radio">
               <h3 class="radio">:مدة السداد</h3>
               <input type="text"  v-model="layer2_modet_sadad">
               
            </div>
            <div class="custom-control custom-radio">
               <h3 class="radio">:التأمين</h3>
               <input type="text"  v-model="layer2_taamen">
            </div>
            
            <div class="custom-control custom-radio">
                <h3 class="radio">:التقديم</h3>
               <input type="checkbox" value="يدوي" v-model="layer2_takdem">
               <label>يدوي</label>
            </div>
          <div class="custom-control custom-radio">
          
               <input type="checkbox" value="الكتروني" v-model="layer2_takdem">
               <label>الكتروني</label>
            </div>
        </div>

<!--layer3-->
<div>
            <div class="custom-control custom-radio">
                <h3 class="radio">:الشريحه الثالثه</h3>
            </div>
            <div class="custom-control custom-radio">
                <h3 class="radio">:من </h3>
                    <input type="text"  v-model="layer3_from">
                    
            </div>
            <div class="custom-control custom-radio">
               
                <h3 class="radio">:الي </h3>
                    <input type="text"  v-model="layer3_to">
            </div>
            <div class="custom-control custom-radio">
                <h3 class="radio">:الفائده </h3>
               <input type="text"  v-model="layer3_interest">
              
            </div>
            <div class="custom-control custom-radio">
                <h3 class="radio">:الضامن </h3>
               <textarea cols="60" rows="12"  v-model="layer3_damen"></textarea>
             
            </div>
              <div class="custom-control custom-radio">
                <h3 class="radio">:الأوراق المطلوبه</h3>
            <textarea cols="120" row="12" v-model="layer3_workpaper"></textarea>
               
            </div>
            <div class="custom-control custom-radio">
               <h3 class="radio">:مدة الحصول علي الخدمه</h3>
               <input type="text"  v-model="layer3_period_gain_service">
            </div>
            <div class="custom-control custom-radio">
               <h3 class="radio">:فترة السماح</h3>
               <input type="text"  v-model="layer3_ftrt_samah">
            </div>
            
            <div class="custom-control custom-radio">
               <h3 class="radio">:مدة السداد</h3>
               <input type="text"  v-model="layer3_modet_sadad">
               
            </div>
            <div class="custom-control custom-radio">
               <h3 class="radio">:التأمين</h3>
               <input type="text"  v-model="layer3_taamen">
            </div>
            
            <div class="custom-control custom-radio">
                <h3 class="radio">:التقديم</h3>
               <input type="checkbox" value="يدوي" v-model="layer3_takdem">
               <label>يدوي</label>
            </div>
          <div class="custom-control custom-radio">
          
               <input type="checkbox" value="الكتروني" v-model="layer3_takdem">
               <label>الكتروني</label>
            </div>
        </div>
        <!--layer4-->
         <div>
            <div class="custom-control custom-radio">
                <h3 class="radio">:الشريحه الرابعه</h3>
            </div>
            <div class="custom-control custom-radio">
                <h3 class="radio">:من </h3>
                    <input type="text"  v-model="layer4_from">
                    
            </div>
            <div class="custom-control custom-radio">
               
                <h3 class="radio">:الي </h3>
                    <input type="text"  v-model="layer4_to">
            </div>
            <div class="custom-control custom-radio">
                <h3 class="radio">:الفائده </h3>
               <input type="text"  v-model="layer4_interest">
              
            </div>
            <div class="custom-control custom-radio">
                <h3 class="radio">:الضامن </h3>
               <textarea cols="60" rows="12"  v-model="layer4_damen"></textarea>
             
            </div>
              <div class="custom-control custom-radio">
                <h3 class="radio">:الأوراق المطلوبه</h3>
            <textarea cols="120" row="12" v-model="layer4_workpaper"></textarea>
               
            </div>
            <div class="custom-control custom-radio">
               <h3 class="radio">:مدة الحصول علي الخدمه</h3>
               <input type="text"  v-model="layer4_period_gain_service">
            </div>
            <div class="custom-control custom-radio">
               <h3 class="radio">:فترة السماح</h3>
               <input type="text"  v-model="layer4_ftrt_samah">
            </div>
            
            <div class="custom-control custom-radio">
               <h3 class="radio">:مدة السداد</h3>
               <input type="text"  v-model="layer4_modet_sadad">
               
            </div>
            <div class="custom-control custom-radio">
               <h3 class="radio">:التأمين</h3>
               <input type="text"  v-model="layer4_taamen">
            </div>
            
            <div class="custom-control custom-radio">
                <h3 class="radio">:التقديم</h3>
               <input type="checkbox" value="يدوي" v-model="layer4_takdem">
               <label>يدوي</label>
            </div>
          <div class="custom-control custom-radio">
          
               <input type="checkbox" value="الكتروني" v-model="layer4_takdem">
               <label>الكتروني</label>
            </div>

        </div>

     <!--layer5-->
     <div>
            <div class="custom-control custom-radio">
                <h3 class="radio">:الشريحه الخامسه</h3>
            </div>
            <div class="custom-control custom-radio">
                <h3 class="radio">:من </h3>
                    <input type="text"  v-model="layer5_from">
                    
            </div>
            <div class="custom-control custom-radio">
               
                <h3 class="radio">:الي </h3>
                    <input type="text"  v-model="layer5_to">
            </div>
            <div class="custom-control custom-radio">
                <h3 class="radio">:الفائده </h3>
               <input type="text"  v-model="layer5_interest">
              
            </div>
            <div class="custom-control custom-radio">
                <h3 class="radio">:الضامن </h3>
               <textarea cols="60" rows="12"  v-model="layer5_damen"></textarea>
             
            </div>
              <div class="custom-control custom-radio">
                <h3 class="radio">:الأوراق المطلوبه</h3>
            <textarea cols="120" row="12" v-model="layer5_workpaper"></textarea>
               
            </div>
            <div class="custom-control custom-radio">
               <h3 class="radio">:مدة الحصول علي الخدمه</h3>
               <input type="text"  v-model="layer5_period_gain_service">
            </div>
            <div class="custom-control custom-radio">
               <h3 class="radio">:فترة السماح</h3>
               <input type="text"  v-model="layer5_ftrt_samah">
            </div>
            
            <div class="custom-control custom-radio">
               <h3 class="radio">:مدة السداد</h3>
               <input type="text"  v-model="layer5_modet_sadad">
               
            </div>
            <div class="custom-control custom-radio">
               <h3 class="radio">:التأمين</h3>
               <input type="text"  v-model="layer5_taamen">
            </div>
            
            <div class="custom-control custom-radio">
                <h3 class="radio">:التقديم</h3>
               <input type="checkbox" value="يدوي" v-model="layer5_takdem">
               <label>يدوي</label>
            </div>
          <div class="custom-control custom-radio">
          
               <input type="checkbox" value="الكتروني" v-model="layer5_takdem">
               <label>الكتروني</label>
            </div>

        </div>
        
     <!--layer6-->
     <div>
            <div class="custom-control custom-radio">
                <h3 class="radio">:الشريحه السادسه</h3>
            </div>
            <div class="custom-control custom-radio">
                <h3 class="radio">:من </h3>
                    <input type="text"  v-model="layer6_from">
                    
            </div>
            <div class="custom-control custom-radio">
               
                <h3 class="radio">:الي </h3>
                    <input type="text"  v-model="layer6_to">
            </div>
            <div class="custom-control custom-radio">
                <h3 class="radio">:الفائده </h3>
               <input type="text"  v-model="layer6_interest">
              
            </div>
            <div class="custom-control custom-radio">
                <h3 class="radio">:الضامن </h3>
               <textarea cols="60" rows="12"  v-model="layer6_damen"></textarea>
             
            </div>
              <div class="custom-control custom-radio">
                <h3 class="radio">:الأوراق المطلوبه</h3>
            <textarea cols="120" row="12" v-model="layer6_workpaper"></textarea>
               
            </div>
            <div class="custom-control custom-radio">
               <h3 class="radio">:مدة الحصول علي الخدمه</h3>
               <input type="text"  v-model="layer6_period_gain_service">
            </div>
            <div class="custom-control custom-radio">
               <h3 class="radio">:فترة السماح</h3>
               <input type="text"  v-model="layer6_ftrt_samah">
            </div>
            
            <div class="custom-control custom-radio">
               <h3 class="radio">:مدة السداد</h3>
               <input type="text"  v-model="layer6_modet_sadad">
               
            </div>
            <div class="custom-control custom-radio">
               <h3 class="radio">:التأمين</h3>
               <input type="text"  v-model="layer6_taamen">
            </div>
            
            <div class="custom-control custom-radio">
                <h3 class="radio">:التقديم</h3>
               <input type="checkbox" value="يدوي" v-model="layer6_takdem">
               <label>يدوي</label>
            </div>
          <div class="custom-control custom-radio">
          
               <input type="checkbox" value="الكتروني" v-model="layer6_takdem">
               <label>الكتروني</label>
            </div>

        </div>

        <!--another comments and location-->
        <div>
         <div class="custom-control custom-radio">
               <h3 class="radio">:بنود و شروط أخري</h3>
               <textarea cols="120" rows="12" v-model="another_comments"></textarea>
               
            </div>
            <div class="custom-control custom-radio">
               <h3 class="radio">:لوكيشن</h3>
               <textarea cols="120" rows="12" v-model="location"></textarea>
               
            </div>
        </div>
         </div>
       </div>
       <input type="button" value="clickme" @click="setQueryStringDefaults2()">
    </form>                     
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
            keys:'',
            layer1_from:'',
            layer1_to:'',
            layer1_interest:'',
            layer1_damen:'',
            layer1_workpaper:'',
            layer1_period_gain_service:'',
            layer1_ftrt_samah:'',
            layer1_modet_sadad:'',
            layer1_taamen:'',
            layer1_takdem:[],
            layer2_from:'',
            layer2_to:'',
            layer2_interest:'',
            layer2_damen:'',
            layer2_workpaper:'',
            layer2_period_gain_service:'',
            layer2_ftrt_samah:'',
            layer2_modet_sadad:'',
            layer2_taamen:'',
            layer2_takdem:[],
            layer3_from:'',
            layer3_to:'',
            layer3_interest:'',
            layer3_damen:'',
            layer3_workpaper:'',
            layer3_period_gain_service:'',
            layer3_ftrt_samah:'',
            layer3_modet_sadad:'',
            layer3_taamen:'',
            layer3_takdem:[],
            layer4_from:'',
            layer4_to:'',
            layer4_interest:'',
            layer4_damen:'',
            layer4_workpaper:'',
            layer4_period_gain_service:'',
            layer4_ftrt_samah:'',
            layer4_modet_sadad:'',
            layer4_taamen:'',
            layer4_takdem:[],
            layer5_from:'',
            layer5_to:'',
            layer5_interest:'',
            layer5_damen:'',
            layer5_workpaper:'',
            layer5_period_gain_service:'',
            layer5_ftrt_samah:'',
            layer5_modet_sadad:'',
            layer5_taamen:'',
            layer5_takdem:[],
            layer6_from:'',
            layer6_to:'',
            layer6_interest:'',
            layer6_damen:'',
            layer6_workpaper:'',
            layer6_period_gain_service:'',
            layer6_ftrt_samah:'',
            layer6_modet_sadad:'',
            layer6_taamen:'',
            layer6_takdem:[],
            another_comments:'',
            location:''
     
       }
     },
   mounted(){
       this.setQueryStringDefaults();
      
   },
   methods:{
   
   /**قوائم الخدمات الغير ماليه */
   setQueryStringDefaults:function()
   {
       let queryString = window.location.search;
       let urlParams = new URLSearchParams(queryString);
        
      
      
                 this.keys =urlParams.get("id");
    
             
             },
    setQueryStringDefaults2:function()
   {
        let formData =new FormData();
        
         formData.append('layer1_from_to',' من: '+this.layer1_from+' الي: '+this.layer1_to);
         formData.append("layer1_interest",this.layer1_interest);
         formData.append("layer1_damen",this.layer1_damen);
         formData.append("layer1_workpaper",this.layer1_workpaper);
         formData.append("layer1_period_gain_service",this.layer1_period_gain_service);
         formData.append("layer1_ftrt_samah",this.layer1_ftrt_samah);
         formData.append("layer1_modet_sadad",this.layer1_modet_sadad);
         formData.append("layer1_taamen",this.layer1_taamen);
         formData.append("layer1_takdem",this.layer1_takdem);
        


         formData.append('layer2_from_to',' من: '+this.layer2_from+' الي: '+this.layer2_to);
         formData.append("layer2_interest",this.layer2_interest);
         formData.append("layer2_damen",this.layer2_damen);
         formData.append("layer2_workpaper",this.layer2_workpaper);
         formData.append("layer2_period_gain_service",this.layer2_period_gain_service);
         formData.append("layer2_ftrt_samah",this.layer2_ftrt_samah);
         formData.append("layer2_modet_sadad",this.layer2_modet_sadad);
         formData.append("layer2_taamen",this.layer2_taamen);
         formData.append("layer2_takdem",this.layer2_takdem);



         formData.append('layer3_from_to',' من: '+this.layer3_from+' الي: '+this.layer3_to);
         formData.append("layer3_interest",this.layer3_interest);
         formData.append("layer3_damen",this.layer3_damen);
         formData.append("layer3_workpaper",this.layer3_workpaper);
         formData.append("layer3_period_gain_service",this.layer3_period_gain_service);
         formData.append("layer3_ftrt_samah",this.layer3_ftrt_samah);
         formData.append("layer3_modet_sadad",this.layer3_modet_sadad);
         formData.append("layer3_taamen",this.layer3_taamen);
         formData.append("layer3_takdem",this.layer3_takdem);


         formData.append('layer4_from_to',' من: '+this.layer4_from+' الي: '+this.layer4_to);
         formData.append("layer4_interest",this.layer4_interest);
         formData.append("layer4_damen",this.layer4_damen);
         formData.append("layer4_workpaper",this.layer4_workpaper);
         formData.append("layer4_period_gain_service",this.layer4_period_gain_service);
         formData.append("layer4_ftrt_samah",this.layer4_ftrt_samah);
         formData.append("layer4_modet_sadad",this.layer4_modet_sadad);
         formData.append("layer4_taamen",this.layer4_taamen);
         formData.append("layer4_takdem",this.layer4_takdem);

         formData.append('layer5_from_to',' من: '+this.layer5_from+' الي: '+this.layer5_to);
         formData.append("layer5_interest",this.layer5_interest);
         formData.append("layer5_damen",this.layer5_damen);
         formData.append("layer5_workpaper",this.layer5_workpaper);
         formData.append("layer5_period_gain_service",this.layer5_period_gain_service);
         formData.append("layer5_ftrt_samah",this.layer5_ftrt_samah);
         formData.append("layer5_modet_sadad",this.layer5_modet_sadad);
         formData.append("layer5_taamen",this.layer5_taamen);
         formData.append("layer5_takdem",this.layer5_takdem);


         formData.append('layer6_from_to',' من: '+this.layer6_from+' الي: '+this.layer6_to);
         formData.append("layer6_interest",this.layer6_interest);
         formData.append("layer6_damen",this.layer6_damen);
         formData.append("layer6_workpaper",this.layer6_workpaper);
         formData.append("layer6_period_gain_service",this.layer6_period_gain_service);
         formData.append("layer6_ftrt_samah",this.layer6_ftrt_samah);
         formData.append("layer6_modet_sadad",this.layer6_modet_sadad);
         formData.append("layer6_taamen",this.layer6_taamen);
         formData.append("layer6_takdem",this.layer6_takdem);
formData.append("another_comments",this.another_comments);

formData.append("location",this.location);



         formData.append('keys',this.keys)
               // console.log(formData)
               axios.post("https://test.nrchrod.org/api/insertdataprofit2",formData).then(response=>{
               window.location.href="/displayallprofit"
            })
             }
          
          }
       }

   
   </script>
   
   <style>
   .radio{
  margin-bottom: 0px;
  padding-bottom: 0px;
  margin-block: 0px;
}
   </style>