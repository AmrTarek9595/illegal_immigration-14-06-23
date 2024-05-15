<template>
    <div>


<div id="page">

    <div class="header-bar header-fixed header-app header-bar-detached">
      <div class="dropdown">

  <a  class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi-globe"></i></a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <router-link class="dropdown-item" to="/">العربيه</router-link>
    <router-link class="dropdown-item" to="/en">english</router-link>

  </div>
</div>


</div>

<div id="footer-bar" class="footer-bar footer-bar-detached">
<a href="#"><span></span></a>
<a href="#"><span></span></a>
<router-link to="/" class="active-nav"><i class="bi bi-house-fill font-16"></i><span>Home</span></router-link >
<a href="#"></a>
<a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-main"></a>
</div>  





        
<router-view></router-view>



</div>
</div>
</template>

<script>



    export default {
data(){
return{
    isloading:true
}
},
mounted(){
document.onreadystatechange = () => { 
    if (document.readyState == "complete") { 
        this.isloading=false;
    } 
  }
}
    }
</script>
<style scoped>
.sidebar {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  padding: 58px 0 0; /* Height of navbar */
  box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
  width: 100%;
  z-index: 600;
}

@media (max-width: 991.98px) {
  .sidebar {
    width: 100%;
  }
}
.sidebar .active {
  border-radius: 5px;
  box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
}

.sidebar-sticky {
  position: relative;
  top: 0;
  height: calc(100vh - 48px);
  padding-top: 0.5rem;
  overflow-x: hidden;
  overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
}
</style>
