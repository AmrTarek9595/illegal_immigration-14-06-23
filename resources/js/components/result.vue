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
<div class="accordion" id="accordionExample" >
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0" >
        <button style="text-align: center !important;font-size:25px;font-style: italic;" class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          قائمة الخدمات الغير ماليه للمؤسسات
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <ul style="float: right;" dir="rtl">
    <li style="list-style-type: disclosure-closed;" v-for="message in messagedata" v-bind:key="message.id"><a :href="'/nonprofit?id='+message.id">{{ message.name_of_company }}</a></li>
  </ul>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button style="text-align: center !important;font-size:25px;font-style: italic;" class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          قائمة الخدمات  الماليه للمؤسسات
        </button>
      </h2>
    </div>

    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <div class="row">
        <ul style="float: right;" dir="rtl">
         
    <li style="list-style-type:none; " v-for="message in messagedata2.data" v-bind:key="message.id">
      <br><br>
      <p style="float: right;border-style: outset;"><a :href="'/profit?id='+message.id" >{{ message.name_of_company }}</a></p>
     
    </li>
    
  </ul>
  </div>
<div class="row" v-if="profitpagin">
  <ul  class=" " style="display: flow-root;">
              <li  class="li" v-for="(list,index) in last_page_profit" :key="index" style="list-style: none; display:inline;">
                <input type="button"  :value="list "  @click="changePageprofit(list)" > 
              
              </li>
 
            </ul>
</div>

          
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
         locationFilter : '',
          userFilter : '',
          typeFilter : '',
          messagedata:'',
          messagedata2:'',
          Gov:'',
          markaz:'',
          karya:'',
          next_url:'',
           back_url:'',
          currrent_page:'',
          last_page_profit:'',
          profitpagin:true
    }
  },
mounted(){
    this.setQueryStringDefaults();
    this.setQueryStringDefaults2();
},
methods:{

/**قوائم الخدمات الغير ماليه */
setQueryStringDefaults:function()
{
    let queryString = window.location.search;
    let urlParams = new URLSearchParams(queryString);
    console.log(queryString)
    let formData =new FormData();
    if( urlParams.has('gov') ){

      if(urlParams.get('gov')=="sohag"){


       if(urlParams.get('sohagmarkza')== "akhmem" ){
        if(urlParams.get('sohagkarya')== "elswamaa Sharq" ||urlParams.get('sohagkarya')== "elslamony" )
          {
          this.Gov=urlParams.get("gov"),
          this.markaz=urlParams.get('sohagmarkaz'),
          this.karya=urlParams.get('sohagkarya')
          formData.append('gov',this.Gov);
      formData.append('markaz',this.markaz);
      formData.append('karya',this.karya);
      axios.post("https://test.nrchrod.org/api/retrivedatasohag",formData).then(
        response=>
        {
          this.messagedata=response.data.message;
            
         //this.responseData=response.data.message;
        // this.response=true;
        //window.location.href=formData;
        })
          }
          else{
            this.Gov=urlParams.get("gov"),
        
          formData.append('gov',this.Gov);
  
  
      axios.post("https://test.nrchrod.org/api/retrivedatasohag",formData).then(
        response=>
        {
          this.messagedata=response.data.message;
         //this.responseData=response.data.message;
        // this.response=true;
        //window.location.href=formData;
        })
           
          }
       }
       else{ 
        this.Gov=urlParams.get("gov"),
        formData.append('gov',this.Gov);

      axios.post("https://test.nrchrod.org/api/retrivedatasohag",formData).then(
        response=>
        {
          this.messagedata=response.data.message;
         //this.responseData=response.data.message;
        // this.response=true;
        //window.location.href=formData;
        })
       }



    }
        else if(urlParams.get('gov')=="asuit"){
          if(urlParams.get('asuitmarkaz')== "abouteeg" ||urlParams.get('asuitmarkaz')== "abnoub" )
          {
            if(urlParams.get('asuitkarya')== "dakran" ||urlParams.get('asuitkarya')== "elhamam" )
              {
                
                this.Gov=urlParams.get("gov"),
          this.markaz=urlParams.get('asuitmarkaz'),
          this.karya=urlParams.get('asuitkarya')
          
      formData.append('gov',this.Gov);
      formData.append('markaz',this.markaz);
      formData.append('karya',this.karya);
      axios.post("https://test.nrchrod.org/api/retrivedataasuit",formData).then(
        response=>
        {
          this.messagedata=response.data.message;
          

        })

              }
              else{
              this.Gov=urlParams.get("gov"),
              this.markaz=urlParams.get('asuitmarkaz')
              formData.append('gov',this.Gov);
              formData.append('markaz',this.markaz);
              axios.post("https://test.nrchrod.org/api/retrivedataasuit",formData).then(
        response=>
        {
          this.messagedata=response.data.message;
          
          

        })

              }

          } 
          else
          { 
            this.Gov=urlParams.get("gov"),
     
               formData.append('gov',this.Gov);

      axios.post("https://test.nrchrod.org/api/retrivedataasuit",formData).then(
        response=>
        {
          this.messagedata=response.data.message;
          

        })
            
          }
        }
        else{
          this.messagedata="من فضلك اختار المحافظه اولا"
      console.log(this.messagedata)
        }
    
  }
else {
      this.messagedata="من فضلك اختار المحافظه اولا"
      console.log(this.messagedata)
    }








},
setQueryStringDefaults2:function()
{
    let queryString = window.location.search;
    let urlParams = new URLSearchParams(queryString);
    console.log(queryString)
    let formData =new FormData();
    if( urlParams.has('gov') ){

      if(urlParams.get('gov')=="sohag"){


       if(urlParams.get('sohagmarkza')== "akhmem" ){
        if(urlParams.get('sohagkarya')== "elswamaa Sharq" ||urlParams.get('sohagkarya')== "elslamony" )
          {
          this.Gov=urlParams.get("gov"),
          this.markaz=urlParams.get('sohagmarkza'),
          this.karya=urlParams.get('sohagkarya')
          formData.append('gov',this.Gov);
      formData.append('markaz',this.markaz);
      formData.append('karya',this.karya);
      axios.post("https://test.nrchrod.org/api/retrivedatasohagprofit",formData).then(
        response=>
        {

          this.messagedata2=response.data.message;
   
           this.last_page_profit=response.data.message.last_page

        })
          }

       }
       else{
            this.Gov=urlParams.get("gov"),
        this.markaz=urlParams.get("sohagmarkaz"),
          formData.append('gov',this.Gov);
  
  formData.append('markaz',this.markaz);
  
      axios.post("https://test.nrchrod.org/api/retrivedatasohagprofit",formData).then(
        response=>
        {
       
          this.messagedata2=response.data.message;
          this.last_page_profit=response.data.message.last_page
        })
           
          }
  



    }
        else if(urlParams.get('gov')=="asuit"){
          if(urlParams.get('asuitmarkaz')== "abouteeg" ||urlParams.get('asuitmarkaz')== "abnoub" )
          {
            if(urlParams.get('asuitkarya')== "dakran" ||urlParams.get('asuitkarya')== "elhamam" )
              {
                
                this.Gov=urlParams.get("gov"),
                this.markaz=urlParams.get('asuitmarkaz'),
                this.karya=urlParams.get('asuitkarya')
          
                formData.append('gov',this.Gov);
                formData.append('markaz',this.markaz);
                formData.append('karya',this.karya);
      axios.post("https://test.nrchrod.org/api/retrivedataasuitprofit",formData).then(
        response=>
        {
          this.messagedata2=response.data.message;
          this.last_page_profit=response.data.message.last_page

        })

              }
              else{
                 this.Gov=urlParams.get("gov"),
                this.markaz=urlParams.get('asuitmarkaz')
                   formData.append('gov',this.Gov);
                formData.append('markaz',this.markaz);

                 axios.post("https://test.nrchrod.org/api/retrivedataasuitprofit",formData).then(
        response=>
        {
          this.messagedata2= response.data.message;
          this.last_page_profit=response.data.message.last_page
          

        })
              }
          } 
          else
          { 
              this.Gov=urlParams.get("gov"),
     
               formData.append('gov',this.Gov);

      axios.post("https://test.nrchrod.org/api/retrivedataasuitprofit",formData).then(
        response=>
        {
          this.messagedata2=response.data.message;
          this.last_page_profit=response.data.message.last_page

        })
            
          }
        }
        else{
          this.messagedata="من فضلك اختار المحافظه اولا"
      console.log(this.messagedata2)
        }
    
  }
else {
      this.messagedata="من فضلك اختار المحافظه اولا"
      console.log(this.messagedata2)
    }








},
changePageprofit:function(id)
         {
          let queryString = window.location.search;
          let urlParams = new URLSearchParams(queryString);
            let formData=new FormData;
         
          if(urlParams.get('gov')=="sohag"){
            if(urlParams.get('sohagmarkaz') !=0)
            {
       
            formData.append('gov','sohag');
            formData.append('markaz',urlParams.get('sohagmarkaz'));
            
            axios.post("https://test.nrchrod.org/api/retrivedatasohagprofit?page="+id,formData).then(
        response=>
        {
          this.messagedata2=response.data.message;
              
        })
          }
          else{
            
            formData.append('gov','sohag');

            axios.post("https://test.nrchrod.org/api/retrivedatasohagprofit?page="+id,formData).then(
        response=>
        {
          this.messagedata2=response.data.message;
              
        })
          }
            
          }
          else if(urlParams.get('gov')=="asuit")
            {

            if(urlParams.get('asuitmarkaz') !=0)
            {
              formData.append('gov','asuit');
              formData.append('markaz',urlParams.get('asuitmarkaz'));
              axios.post("https://test.nrchrod.org/api/retrivedataasuitprofit?page="+id,formData).then(
                  response=>
                  {
                    this.messagedata2=response.data.message;

                  })

            }
            else{
              formData.append('gov','asuit');
            
              axios.post("https://test.nrchrod.org/api/retrivedataasuitprofit?page="+id,formData).then(
                  response=>
                  {
                    this.messagedata2=response.data.message;

                  })
            }




            }

          
         }
}
}

</script>

<style>

</style>