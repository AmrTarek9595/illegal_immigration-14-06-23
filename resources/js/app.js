

require('./bootstrap');

import {createApp} from "vue";
import { createWebHistory, createRouter } from "vue-router";
import layout from './components/layout';

import home from './components/home';

import result from './components/result';
import singleinfo from './components/companyInformationSingle';
import singleinfoprofit from './components/profitcompanyinformationsingle';
/**non profit insert and display all data and insert foriegn key */
import addnewnonprofit from './components/adminaddpage/addnewnonprofit';
import displayallnonprofit from './components/adminaddpage/displayallnonprofit';
import inserttableinformationnonprofit from './components/adminaddpage/insertnonprofitinformationtable';
/**profit insertdata */
import addnewprofit from './components/adminaddpage/addnewprofit.vue';
import displayallprofit from './components/adminaddpage/displayallprofit.vue';
import insertprofitinformationtable from './components/adminaddpage/insertprofitinformationtable.vue';
/**english section */

import en_home from './components/en/en_home.vue';
import en_result from './components/en/en_result.vue';
import en_addnewprofit from './components/admin_en/en_addnewprofit.vue';
import en_displayallprofit from './components/admin_en/en_displayallprofit.vue';
import en_insertprofitinformationtable from './components/admin_en/en_insertprofitinformationtable.vue';
import en_addnewnonprofit from './components/admin_en/en_addnewnonprofit.vue';
import en_displayallnonprofit from './components/admin_en/en_displayallnonprofit.vue';
import en_insertnonprofittable from './components/admin_en/en_insertnonprofitinformationtable.vue';
import en_profitcompanyinformationsingle from './components/en/en_profitcompanyinformationsingle.vue';
import en_companyInformationSingle from './components/en/en_companyInformationSingle.vue';


const router = createRouter({
    history: createWebHistory(),
    routes:[
      {
        path: "/",  // <-- notice the colon
        name: "index",
        component: home,
      },
     
      {
        path: '/result/',  // <-- notice the colon
      
        component: result,
      },
      {
        path: '/nonprofit/',  // <-- notice the colon
      
        component: singleinfo,
      },
      {
        path: '/profit/',  // <-- notice the colon
      
        component: singleinfoprofit,
      } , {
        path: '/addnewnonprofit',  // <-- Admin Page Begining
      
        component: addnewnonprofit,
      }, {
        path: '/displayallnonprofit',  // <-- notice the colon
      
        component: displayallnonprofit,
      }, {
        path: '/inserttableinformationnonprofit',  // <-- notice the colon
      
        component: inserttableinformationnonprofit,
      }, {
        path: '/addnewprofit',  // <-- notice the colon
      
        component: addnewprofit,
      }, {
        path: '/displayallprofit',  // <-- notice the colon
      
        component: displayallprofit,
      }, {
        path: '/insertprofitinformationtable',  // <-- notice the colon
      
        component: insertprofitinformationtable,
      },
      /**english routes */
      {
        path: '/en',
        component: en_home,
        
      }  ,   {
        path: '/en/result',
        component: en_result,
        
      },
      {
        path: '/en/addnewprofit',
        component: en_addnewprofit,
        
      },  

      {
        path: '/en/en_displayallprofit',
        component: en_displayallprofit,
        
      },  

      {
        path: '/en/en_insertprofittable',
        component: en_insertprofitinformationtable,
        
      },  

      {
        path: '/en/en_addnewnonprofit',
        component: en_addnewnonprofit,
        
      },  

      {
        path: '/en/en_displayallnonprofit',
        component: en_displayallnonprofit,
        
      },  

      {
        path: '/en/en_insertnonprofittable',
        component: en_insertnonprofittable,
        
      },  

      {
        path: '/en/en_profitcompanyinformationsingle',
        component:en_profitcompanyinformationsingle,
        
      },  

      {
        path: '/en/en_companyInformationSingle',
        component:en_companyInformationSingle,
        
      }
    ],
  });
 
  createApp(layout).use(router).mount("#app");

  
