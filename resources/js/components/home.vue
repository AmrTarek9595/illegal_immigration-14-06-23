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

<div class="row mb-n3 pt-4">
  <h2 class="mb-n1 font-30 color-highlight font-700 text-uppercase pt-1"></h2>
<div class="col-6">
  
 
  <i class="bi bi-cash" style='font-size:53px'></i>
<h5 class="pt-2">تمويل حكومي مالي</h5>
<p>
نساعدك في الوصول الي الجهات الحكوميه الخاصه بالتمويل المادي و الشروط المطلوبه
</p>
</div>
<div class="col-6">
  <i class="bi bi-currency-pound" style='font-size:53px'></i>
<h5 class="pt-2">تمويل خاص مالي</h5>
<p>
  نساعدك في الوصول الي الجهات الغير حكوميه الخاصه بالتمويل المادي و الشروط المطلوبه
</p>
</div>
<div class="col-6">
  <i class="bi bi-shield-fill-check" style='font-size:53px'></i>
<h5 class="pt-2">تمويل حكومي غير مالي</h5>
<p>
  نساعدك في الوصول الي الجهات الحكوميه الخاصه بالتمويل المعنوي و الشروط المطلوبه

</p>
</div>
<div class="col-6">
  <i class="bi bi-shield-fill-check" style='font-size:53px'></i>
<h5 class="pt-2">تمويل خاص غير مالي</h5>
<p>
  نساعدك في الوصول الي الجهات الغير حكوميه الخاصه بالتمويل المعنوي و الشروط المطلوبه
</p>
</div>
</div>
</div>
</div>


<div class="card card-style py-3">
<div class="content px-2 text-center" style="padding-bottom: 8%;">
<h2 class="mb-n1  color-highlight font-700 text-uppercase">بدء الخدمه</h2>
<h2>تحديد المحافظه المطلوب بها الدعم</h2>

<div class="dropdown">

  <form >
 
  <select  class="btn btn-secondary btn-lg dropdown-toggle"   aria-expanded="false" v-model="selectedGov" role="button" aria-haspopup="true" @change="onChange">
    <option disabled value="" style="color:white">Please select one</option>
    <option v-for="option in options" v-bind:key="option.value" v-bind:value="option.value" >
    {{ option.text }}
  </option>
  </select>


  
  <h2 v-if="display">تحديد المركز المطلوب بها الدعم</h2>

<!--الجزء الخاص بمراكز بمدينة سوهاج-->
<select  class="btn btn-secondary btn-lg dropdown-toggle"  aria-expanded="false" v-model= "selectedsohag" role="button" aria-haspopup="true" v-if="displaysohag" @change="onChange">
    <option disabled value="" style="color:white">Please select one</option>
    <option v-for="option in options2" v-bind:key="option.value" v-bind:value="option.value" >
    {{ option.text}}
  </option>
  </select>
    <br>
    <br>
<!--الجزء الخاص بقرية بمدينة سوهاج-->
<select  class="btn btn-secondary btn-lg dropdown-toggle"  aria-expanded="false" v-model= "selectedsohagKarya" role="button" aria-haspopup="true" v-if="displaysohag" @change="onChange">
    <option disabled value="" style="color:white">Please select one</option>
    <option v-for="option in options3 " v-bind:key="option.value" v-bind:value="option.value" >
    {{ option.text }}
  </option>
  </select>
  
<!--الجزء الخاص بمراكز بمدينة اسيوط-->
  <select  class="btn btn-secondary btn-lg dropdown-toggle"  aria-expanded="false" v-model= "selectedasuit" role="button" aria-haspopup="true" v-if="displayasuit" @change="onChange">
    <option disabled value="" style="color:white">Please select one</option>
    <option v-for="option in options4" v-bind:key="option.value" v-bind:value="option.value" >
    {{ option.text }}
  </option>
  </select>
  <br>
  <br>
  <!--الجزء الخاص بقرية بمدينة اسيوط-->
  <select  class="btn btn-secondary btn-lg dropdown-toggle"  aria-expanded="false" v-model= "selectedasuitKarya" role="button" aria-haspopup="true" v-if="displayasuit" @change="onChange">
    <option disabled value="" style="color:white">Please select one</option>
    <option v-for="option in options5" v-bind:key="option.value" v-bind:value="option.value" >
    {{ option.text }}
  </option>
  </select>
  <br>
  <br>
<input class="btn btn-secondary btn-lg dropdown-toggle" value="بحث" type="button" @click="GoResult" v-if="display"/>
</form>




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
      displaysohag:false,
      displayasuit:false,
      display:false,
      AbnoubHamam:false,
      AbotegDakran:false,
    
      selectedGov: '0',
      options: [
        { text: 'سوهاج', value: 'sohag' },
        { text: 'اسيوط', value: 'asuit' },
        
      ],
      selectedsohag: '0',
      
      options2: [
        { text: 'اخميم', value: 'akhmem' },
        
        
      ],
      selectedsohagKarya: '0',
      
      options3: [
        { text: 'الصوامعه شرق', value: 'elswamaa Sharq'},
        { text: 'السلاموني', value: 'elslamony' }
        
        
      ],
      selectedasuit: '0',
      
      options4: [
        { text: 'ابوتيج', value: 'abouteeg' },
        { text: 'ابنوب', value: 'abnoub' }
        
      ],
      selectedasuitKarya: '0',
      
      options5: [
        { text: 'دكران', value: 'dakran'},
        { text: 'الحمام', value: 'elhamam' }
        
        
      ],
      submitdisplaybutton:'false'
    }
  }, 
  mounted(){
  
  

  },
  methods:{
    onChange:function() {
      this.display=true;
            if(this.selectedGov =='sohag')
            {
              this.displaysohag=true
              this.displayasuit=false
            /*  console.log(this.selectedGov)
              console.log(this.selectedsohag)
              console.log(this.selectedsohagKarya)
              */

            }

       else if(this.selectedGov == 'asuit'){
        this.displayasuit=true
        this.displaysohag=false
        if(this.selectedasuit== 'abnoub')
        {
          
          this.options5=[{
            text: 'الحمام', value: 'elhamam'
          }];
     
         
        }
        else if(this.selectedasuit== 'abouteeg')
        {
          this.options5=[{
            text: 'دكران', value: 'dakran'
          }];
          
        }
        /*console.log(this.selectedGov)
        console.log(this.selectedasuit)
        console.log(this.selectedasuitKarya)*/

       }
       
       
            
        },

    GoResult:function(){
      let formData =new FormData();
      formData.append('gov',this.selectedGov);
      formData.append('selectedasuit',this.selectedasuit);
      formData.append('asuitkarya',this.selectedasuitKarya);
      formData.append('selectedsohag',this.selectedsohag);
      formData.append('sohagkarya',this.selectedsohagKarya);
      /*for (const value of formData.values()) {
  console.log(value);
}*/
     /* axios.post("http://127.0.0.1:8000/api/retrivedata",formData).then(
        response=>
        {
         this.responseData=response.data.message;
         this.response=true;
        //window.location.href=formData;
        }
     )*/

      window.location.href='result?gov='+this.selectedGov+'&asuitmarkaz='+this.selectedasuit+'&asuitkarya='+this.selectedasuitKarya+'&sohagmarkaz='+this.selectedsohag+'&sohagkarya='+this.selectedsohagKarya
      
        },
        checklang:function(){
          
        }
  }
}
</script>

<style>
.glow {
  font-size: 40px;
  color: navy;
  text-align: center;
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
  }
  
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
  }
}
</style>