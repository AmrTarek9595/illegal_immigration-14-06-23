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


<h2 class="mb-n1 font-30 color-highlight font-700 text-uppercase pt-1">استمارة حصر الخدمات الغير ماليه</h2>
<br>
    <form dir="">
      <!-- Default unchecked -->
     
<div class="custom-control custom-radio">
  <p class="radio">:المحافظه</p>
  <input type="radio" class="" id="" name="defaultExampleRadios" v-model="gov" value="sohag">
  <label class="" for="" >سوهاج</label>
</div>

<!-- Default checked -->
<div class="">
  <input type="radio" class="" id="" name="defaultExampleRadios" v-model="gov" value="asuit">
  <label class="" for="">اسيوط</label>
</div>
<br>




<!--markaaaz-->
<div class="">
  <p class="radio">:المركز</p>
  <input type="radio" class="" id="" name="" v-model="markaz" value="akhmem">
  <label class="" for="" >اخميم</label>
</div>

<div class="">
  <input type="radio" class="" id="" name="" v-model="markaz" value="abouteeg">
  <label class="" for="" >ابوتيج</label>
</div>

<div class="">
<input type="radio" class="" id="" name="" v-model="markaz" value="abnoub">
<label class="" for="" >ابنوب</label>
</div>

<!--karyaa-->
<br>
<div class="custom-control custom-radio">
  <p class="radio">:القريه</p>
  <input type="radio"    v-model="karya" value="elswamaa Sharq">
  <label class=" " >الصوامعه شرق</label>
</div>

<div class="custom-control custom-radio">

  <input type="radio"   v-model="karya" value="elslamony">
  <label class=" "  >السلامون </label>
</div>
<div class="custom-control custom-radio">

  <input type="radio"    v-model="karya" value="dakran">
  <label class=" "  >دكران</label>
</div>
<div class="custom-control custom-radio">

  <input type="radio"    v-model="karya" value="elhamam">
  <label class=" "  > الحمام</label>
</div>
<br>



<!--madinaaaa-->
<div class="custom-control custom-radio">
  <p class="radio">:المدينه</p>
  <input type="radio"    v-model="madina" value="sohag">
  <label class=" "  >سوهاج</label>
</div>

<div class="custom-control custom-radio">
  
  <input type="radio"    v-model="madina" value="akhmem">
  <label class=" "  >اخميم</label>
</div>


<div class="custom-control custom-radio">

  <input type="radio"    v-model="madina" value="asuit">
  <label class=" "  > اسيوط</label>
</div>



<div class="custom-control custom-radio">

  <input type="radio"    v-model="madina" value="abouteeg">
  <label class=" "  >ابو تيج </label>
</div>

<div class="custom-control custom-radio">

<input type="radio"    v-model="madina" value="abnoub">
<label class=" "  > ابنوب </label>
</div>

<!--name of collector-->
<div class="custom-control custom-radio">
  <p class="radio">:اسم جامع البيانات</p>
  <input type="text" class="custom-control-text" id="defaultUnchecked" name="" v-model="name_of_collector">
  
</div>

<div class="custom-control custom-radio">
  <p class="radio">:  تاريخ التطبيق</p>
  <select v-model="day">
    <option value="السبت">السبت</option>
    <option value="الأحد">الأحد</option>
    <option value="اثنين">اثنين</option>
    <option value="ثلاثاء">ثلاثاء</option>
    <option value="الأربعاء">الأربعاء</option>
    <option value="الخميس">الخميس</option>
    <option value="الجمعه">الجمعه</option>
  </select>
  <label ><span> اليوم </span></label>

</div>
<div class="custom-control custom-radio">
  
  <input type="date" class="custom-control-text" id="defaultUnchecked" name="" v-model="date">
  <label ><span> التاريخ </span></label>

</div>


<div class="custom-control custom-radio">
  <p class="radio">:اسم الجهه مقدمة الخدمه</p>
  <input type="text"   id="defaultUnchecked" name="defaultExampleRadios" v-model="companyName" >
  
</div>

<div class="custom-control custom-radio">
  <p class="radio">:عنوان الجهه مقدمة الخدمه</p>
  <input type="text"   id="defaultUnchecked" name="defaultExampleRadios" v-model="companyAddress" >
  
</div>

<div class="custom-control custom-radio">
  <p class="radio">:اسم مصدر المعلومات</p>
  <input type="text"   id="defaultUnchecked" name="defaultExampleRadios" v-model="name_source_data" >
  
</div>

<div class="custom-control custom-radio">
  <p class="radio">:وظيفة مصدر المعلومات</p>
  <input type="text"   id="defaultUnchecked" name="defaultExampleRadios" v-model="title_source" >
  
</div>

<div class="custom-control custom-radio">
  <p class="radio">:رقم مصدر المعلومات</p>
  <input type="text"   id="defaultUnchecked" name="defaultExampleRadios" v-model="mobile_source" >
  
</div>

<div class="custom-control custom-radio">
  <p class="radio">:ايام العمل</p>
  <p>من</p>
  <select  v-model="working_days_from" >
    <option value="السبت">السبت</option>
    <option value="الأحد">الأحد</option>
    <option value="الإثنين">الإثنين</option>
    <option value="ثلاثاء">ثلاثاء</option>
    <option value="الأربعاء">الأربعاء</option>
    <option value="الخميس">الخميس</option>
    <option value="الجمعه">الجمعه</option>
  </select>
  
</div>
<div class="custom-control custom-radio">
  
  <p>الي</p>
  <select  v-model="working_days_to" >
    <option value="السبت">السبت</option>
    <option value="الأحد">الأحد</option>
    <option value="الإثنين">الإثنين</option>
    <option value="ثلاثاء">ثلاثاء</option>
    <option value="الأربعاء">الأربعاء</option>
    <option value="الخميس">الخميس</option>
    <option value="الجمعه">الجمعه</option>
  </select>
  
</div>

<div class="custom-control custom-radio">
  <p class="radio">:ساعات العمل</p>
  <p>من</p>
  <input type="text"   id="defaultUnchecked" name="defaultExampleRadios" v-model="working_hours_from" >
  
</div>

<div class="custom-control custom-radio">

  <p>الي</p>
  <input type="text"   id="defaultUnchecked" name="defaultExampleRadios" v-model="working_hours_to" >
  
</div>

<div class="custom-control custom-radio">
  <p class="radio">: نوع الخدمه</p>

  <input type="radio"   id="defaultUnchecked" name="defaultExampleRadios" v-model="no3_el5edma" value="غير مالي حكومي">
  <label>غير مالي حكومي</label>
</div>

<div class="custom-control custom-radio">
 
  <input type="radio"   id="defaultUnchecked" name="defaultExampleRadios" v-model="no3_el5edma" value="غير مالي غير حكومي">
  <label>غير مالي غير حكومي</label>
</div>


<div class="custom-control custom-radio">
 <p>فئة الخدمه</p>
 <input type="checkbox"   id="defaultUnchecked" name="defaultExampleRadios" v-model="fe2t_el5edma" value="مراكز تدريب">
 <label>مراكز تدريب </label>
</div>

<div class="custom-control custom-radio">
 
 <input type="checkbox"   id="defaultUnchecked" name="defaultExampleRadios" v-model="fe2t_el5edma" value="مديريات خدميه">
 <label> مديريات خدميه </label>
</div>


<div class="custom-control custom-radio">
 
 <input type="checkbox"   id="defaultUnchecked" name="defaultExampleRadios" v-model="fe2t_el5edma" value="جمعيات أهليه">
 <label>  جمعيات أهليه </label>
</div>
<!--mgalat el 5edma-->
<div class="custom-control custom-radio">
 <p>مجالات الخدمه </p>
 <input type="checkbox"   id="defaultUnchecked" name="defaultExampleRadios" v-model="mgalat_el5edma" value="صناعي">
 <label> صناعي </label>
</div>

<div class="custom-control custom-radio">

 <input type="checkbox"   id="defaultUnchecked" name="defaultExampleRadios" v-model="mgalat_el5edma" value="زراعي">
 <label> زراعي </label>
</div>

<div class="custom-control custom-radio">

 <input type="checkbox"   id="defaultUnchecked" name="defaultExampleRadios" v-model="mgalat_el5edma" value="تجاري">
 <label> تجاري </label>
</div>

<div class="custom-control custom-radio">
 
 <input type="checkbox"   id="defaultUnchecked" name="defaultExampleRadios" v-model="mgalat_el5edma" value="خدمي">
 <label> خدمي </label>
</div>

<div class="custom-control custom-radio">

 <input type="checkbox"   id="defaultUnchecked" name="defaultExampleRadios" v-model="mgalat_el5edma" value="إدارة مشروعات">
 <label> إدارة مشروعات </label>
</div>

<div class="custom-control custom-radio">

 <input type="checkbox"   id="defaultUnchecked" name="defaultExampleRadios" v-model="mgalat_el5edma" value="حيواني">
 <label> حيواني </label>
</div>

<div class="custom-control custom-radio">

 <input type="checkbox"   id="defaultUnchecked" name="defaultExampleRadios" v-model="mgalat_el5edma" value="تنمية بشرية">
 <label> تنمية بشرية </label>
</div>

<div class="custom-control custom-radio">
 
 <input type="checkbox"   id="defaultUnchecked" name="defaultExampleRadios" v-model="mgalat_el5edma" value="تسويق تسويق">
 <label>  تسويق </label>
</div>



<div class="custom-control custom-radio">
 <p>شروط الحصول علي الخدمه</p>
 <textarea cols="100" rows="12" v-model="terms"> </textarea>
 
</div>


<div class="custom-control custom-radio">
 <p>الفئة المستهدفه </p>
 <input type="checkbox" value="الشباب" v-model="target_group">
 <label>الشباب</label>
</div>

<div class="custom-control custom-radio">

 <input type="checkbox" value="المرأة" v-model="target_group">
 <label>المرأه</label>
</div>


<div class="custom-control custom-radio">
 
 <input type="checkbox" value="أصحاب المشاريع" v-model="target_group">
 <label>أصحاب المشاريع</label>
</div>


<div class="custom-control custom-radio">
 <p> استمرارية الخدمه </p>
 <input type="checkbox" value="مستمره لأقل من 6 أشهر" v-model="continous_service">
 <label>مستمره لأقل من 6 أشهر</label>
</div>



<div class="custom-control custom-radio">
 
 <input type="checkbox" value="مستمره لسنه" v-model="continous_service">
 <label>مستمره لسنه</label>
</div>

<div class="custom-control custom-radio">
 
 <input type="checkbox" value="مستمره لأكثر من سنه" v-model="continous_service">
 <label> مستمره لأكثر من سنه</label>
</div>

<div class="custom-control custom-radio">
 <p>  المناطق التي تغطيها الخدمه </p>
<textarea name="" id="" cols="30" rows="10" v-model="covered_area"></textarea>

</div>




<div class="custom-control custom-radio">
 <p> فئات السن المستهدفه بالخدمه </p>
 <input type="text"  v-model="target_age_group">
</div>

<div class="custom-control custom-radio">
 <p> طريقة الإعلان عن الخدمه </p>
 <input type="text"  v-model="advertising_method">
</div>



<div class="custom-control custom-radio">
 <p>رقم تيليفون الجهه مقدمة الخدمه</p>
 <input type="text"  v-model="phone_number">
</div>


<div class="custom-control custom-radio">
 <p>رقم واتس(إن وجد)</p>
 <input type="text"  v-model="whatsnumber">
</div>

<div class="custom-control custom-radio">
 <p>موقع إلكتروني (إن وجد)</p>
 <input type="text"  v-model="website">
</div>

<div class="custom-control custom-radio">
 <p>ايميل -فاكس (إن وجد)</p>
 <input type="text"  v-model="email">
</div>
<input type="button" value="clickme" @click="testcheckbox()">
</form>

</div>
</div>
</div>
  </div>
</div>

</template>

<script>
export default {
    data() {
    return {
         
        
        
        gov:'',
        markaz:'',
        karya:'',
        madina:'',
        name_of_collector:'',
        day:'',
        date:'',
        companyName:'',
        companyAddress:'',
        name_source_data:'',
        title_source:'',
        mobile_source:'',
        working_days_from:'',
        working_days_to:'',
        working_hours_from:'',
        working_hours_to:'',
        no3_el5edma:'',
        fe2t_el5edma:[],
        mgalat_el5edma:[],
        terms:'',
        target_group:[],
        continous_service:[],
        covered_area:'',
        target_age_group:'',
        advertising_method:'',
        phone_number:'',
        whatsnumber:'',
        website:'',
        email:''



    }
  },
methods:{
    testcheckbox:function(){
         
        /*for(let i=0;i<3;i++){
        //console.log(this.checkedNames[i]);
       this.new =this.checkedNames[i]+'--';
            console.log(this.new)
    }*/
    let formData =new FormData();
  
        formData.append("GOV",this.gov)
        formData.append("markaz",this.markaz)
        formData.append("karya",this.karya)
        formData.append("madina",this.madina)
        formData.append("name_of_data_collection",this.name_of_collector)
        formData.append("Day_Of_collection",this.day)
        formData.append("date",this.date)
        formData.append("name_of_company",this.companyName)
        formData.append("address_company",this.companyAddress)
        formData.append("name_of_source_data",this.name_source_data)
        formData.append("source_job_title",this.title_source)
        formData.append("PhoneNumber_his",this.mobile_source)
        formData.append("job_hours_from_to",' من '+this.working_hours_from+' الي'+this.working_hours_to)
        formData.append("working_days",' من '+this.working_days_from+' الي '+ this.working_days_to)
        formData.append("type_of_service",this.no3_el5edma)
        formData.append("service_category",this.fe2t_el5edma)
        formData.append("fields_of_service",this.mgalat_el5edma)
        formData.append("terms_gain_service",this.terms)
        formData.append("Target_group",this.target_group)
        formData.append("continues_service",this.continous_service)
        formData.append("covered_area",this.covered_area)
        formData.append("Target_age_groups",this.target_age_group)
       
   
      
        
      
 formData.append("Advertising_method",this.advertising_method)
        formData.append("number_of_company",this.phone_number)
        formData.append("whatsApp_of_company",this.whatsnumber)
        formData.append("website_of_company",this.website)
        formData.append("email_of_company",this.email)

  

   axios.post('https://test.nrchrod.org/api/adddatanonprofit',formData).then(
   response=> {
       
          window.location.href="/displayallnonprofit"
    }
   )
    //console.log(this.checkedNames);
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