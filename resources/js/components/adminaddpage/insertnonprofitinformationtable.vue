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
            <div class="custom-control custom-radio">
                <h3 class="radio">:نوع الخدمه</h3>
                    <input type="checkbox" value="تدريب تبريد وتكيف" v-model="no3_el5edma">
                    <label>تدريب تبريد وتكيف</label>
            </div>
            <div class="custom-control custom-radio">
               
                    <input type="checkbox" value="تدريب صيانة محمول" v-model="no3_el5edma">
                    <label>تدريب صيانة محمول</label>
            </div>
            <div class="custom-control custom-radio">
               
               <input type="checkbox" value="تدريب صيانة أجهزة كهربائية" v-model="no3_el5edma">
               <label>تدريب صيانة أجهزة كهربائية</label>
            </div>
            <div class="custom-control custom-radio">
               
               <input type="checkbox" value="تدريب تعلم النجارة" v-model="no3_el5edma">
               <label>تدريب تعلم النجارة</label>
            </div>
            <div class="custom-control custom-radio">
               
               <input type="checkbox" value="تدريب تعلم الكهرباء" v-model="no3_el5edma">
               <label>تدريب تعلم الكهرباء</label>
            </div>
              <div class="custom-control custom-radio">
               
               <input type="checkbox" value="تدريب صيانة ماكينات تصوير " v-model="no3_el5edma">
               <label>تدريب صيانة ماكينات تصوير </label>
            </div>


            <div class="custom-control custom-radio">
               
               <input type="checkbox" value="تدريبات تنمية بشرية" v-model="no3_el5edma">
               <label>تدريبات تنمية بشرية</label>
            </div>
            <div class="custom-control custom-radio">
               
               <input type="checkbox" value="استخراج شهادة صحية" v-model="no3_el5edma">
               <label>استخراج شهادة صحية</label>
            </div>
            <div class="custom-control custom-radio">
               
               <input type="checkbox" value="استخراج سجل تجارى وبطاقة ضريبية" v-model="no3_el5edma">
               <label>استخراج سجل تجارى وبطاقة ضريبية</label>
            </div>
            <div class="custom-control custom-radio">
               
               <input type="checkbox" value="استخراج تراخيص" v-model="no3_el5edma">
               <label>استخراج تراخيص</label>
            </div>
            <div class="custom-control custom-radio">
               
               <input type="checkbox" value="تدريب إدارة مشروعات" v-model="no3_el5edma">
               <label>تدريب إدارة مشروعات</label>
            </div>



            <div class="custom-control custom-radio">
                <h3 class="radio">:مزايا الخدمه</h3>
                    <input type="checkbox" value="شهادة معتمدة" v-model="benifits">
                    <label>شهادة معتمدة</label>
            </div>
            <div class="custom-control custom-radio">
                
                    <input type="checkbox" value="متابعة بعد التدريب" v-model="benifits">
                    <label>متابعة بعد التدريب</label>
            </div>
            <div class="custom-control custom-radio">
                
                    <input type="checkbox" value="المساعدة في التسويق" v-model="benifits">
                    <label>المساعدة في التسويق</label>
            </div>
            <div class="custom-control custom-radio">
                
                    <input type="checkbox" value="بدل نقدى اثناء التدريب" v-model="benifits">
                    <label>بدل نقدى اثناء التدريب</label>
            </div>
            <div class="custom-control custom-radio">
               
                    <input type="checkbox" value="بريك اثناء التدريب" v-model="benifits">
                    <label>بريك اثناء التدريب</label>
            </div>

            <div class="custom-control custom-radio">
                <h3 class="radio">:الأوراق المطلوبه</h3>
                    <textarea cols="120" rows="12" v-model="requirmints" dir="rtl"></textarea> 
                    
                
            </div>


                <div class="custom-control custom-radio">
                                <h3 class="radio">:مدة الحصول على الخدمة</h3>
                                    <input type="text" v-model="period"> 
                                    
                                
                            </div>

                <div class="custom-control custom-radio">
                                <h3 class="radio">:تكلفة الخدمة (رسوم الخدمة )</h3>
                                    <input type="text" v-model="price" dir="rtl"> 
                                    
                                
                            </div>

                <div class="custom-control custom-radio">
                                <h3 class="radio">:طريقة التقديم</h3>
                                    <input type="radio" value="يدوي" v-model="apply"> 
                                    
                                <label>يدوي</label>
                            </div>
     <div class="custom-control custom-radio">
                                
                                    <input type="radio" value="الكتروني" v-model="apply"> 
                                    <label >الكتروني</label>
                                
                            </div>
                            <div class="custom-control custom-radio">
                                <h3 class="radio">شروط و بنود أخري</h3>
                                <textarea cols="120" rows="12"  v-model="another_comments"></textarea> 
                                
                            
                        </div>
                            <div class="custom-control custom-radio">
                                <h3 class="radio">لوكيشن</h3>
                                <textarea cols="120" rows="12"  v-model="location"></textarea> 
                                
                            
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
             no3_el5edma:[],
             benifits:[],
             requirmints:'',
             period:'',
             price:'',
             apply:'',
             messagedata:'',
             location:'',
             another_comments:''
             
     
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
        
       let formData =new FormData();
      
                 this.keys =urlParams.get("id");
    
             
             },
    setQueryStringDefaults2:function()
   {
        let formData =new FormData();
    
                formData.append('keys',this.keys);
                formData.append('type_of_service',this.no3_el5edma);
                formData.append('benifits_of_service',this.benifits);
                formData.append('requirments',this.requirmints);
                formData.append('period_of_gain_service',this.period);
                formData.append('cost_of_service',this.price);
                formData.append('ways_to_apply',this.apply);
                formData.append('location',this.location);
                formData.append('another_comments',this.another_comments);
         axios.post("https://test.nrchrod.org/api/insertdatanonprofit2",formData).then(
           response=>
           {
            
             window.location.href="/displayallnonprofit";
             
          
            //this.responseData=response.data.message;
           // this.response=true;
           //window.location.href=formData;
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