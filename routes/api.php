<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



    /**Insert Data Into Non-profit Organizations */
        /**admin add data non-profit */
    Route::post('adddatanonprofit', 'App\Http\Controllers\amr_test@adddatanonprofit');
    Route::post('displayallnonprofit', 'App\Http\Controllers\amr_test@displayallnonprofit');
    Route::post('insertdatanonprofit2', 'App\Http\Controllers\amr_test@non_profit_insert_table_information'); 

 /**Insert Data Into profit Organizations */
 Route::post('insertdataprofit', 'App\Http\Controllers\amr_test@profit_insert_company_information');

 Route::post('displayallprofit', 'App\Http\Controllers\amr_test@displayallprofit');

  Route::post('insertdataprofit2', 'App\Http\Controllers\amr_test@profit_insert_table_information');
/**end admin section */

    /**Retrive Data From non-profit Organizations with search */
    Route::post('retrivedatasohag', 'App\Http\Controllers\amr_test@retrive_datasohag');
    Route::post('retrivedataasuit', 'App\Http\Controllers\amr_test@retrive_dataasuit');
/**retrive data from non-profit company information */
    Route::post('retrivedatasinglenonprofit', 'App\Http\Controllers\amr_test@retrive_customdata_nonprofit');
    
/**retrive data from non-profit table information with ID */
Route::post('retrivedatasinglenonprofittable', 'App\Http\Controllers\amr_test@retrive_customdata_nonprofitinformationtable');
    

 /**Retrive Data From profit Organizations with search */
    Route::post('retrivedatasohagprofit', 'App\Http\Controllers\amr_test@retrive_datasohagprofit');
    Route::post('retrivedataasuitprofit', 'App\Http\Controllers\amr_test@retrive_dataasuitprofit');

    /**retrive single company page */
    Route::post('retrivedatasingleprofit', 'App\Http\Controllers\amr_test@retrive_customdata_profit');

      /**retrive single profit information table  */
    
    Route::post('retrivedatasingleprofitinformationtable', 'App\Http\Controllers\amr_test@retrive_customdata_profit_informationtable');










    /**english data */
    /**insert profit data  */

    
Route::post('en_insertdataprofit', 'App\Http\Controllers\amr_en@profit_insert_company_information');
Route::post('en_displayallprofit', 'App\Http\Controllers\amr_en@displayallprofit');
Route::post('en_insertdataprofit2', 'App\Http\Controllers\amr_en@profit_insert_table_information');


    /**Insert Data Into Non-profit Organizations */
      
Route::post('en_adddatanonprofit', 'App\Http\Controllers\amr_en@adddatanonprofit');
Route::post('en_displayallnonprofit', 'App\Http\Controllers\amr_en@displayallnonprofit');
Route::post('en_insertdatanonprofit2','App\Http\Controllers\amr_en@non_profit_insert_table_information'); 


    /**Retrive Data From non-profit Organizations with search */
Route::post('en_retrivedatasohag', 'App\Http\Controllers\amr_en@retrive_datasohag');
Route::post('en_retrivedataasuit', 'App\Http\Controllers\amr_en@retrive_dataasuit');


 /**Retrive Data From profit Organizations with search */
 Route::post('en_retrivedatasohagprofit', 'App\Http\Controllers\amr_en@retrive_datasohagprofit');
 Route::post('en_retrivedataasuitprofit', 'App\Http\Controllers\amr_en@retrive_dataasuitprofit');

 
    /**retrive single company page */
    Route::post('en_retrivedatasingleprofit', 'App\Http\Controllers\amr_en@retrive_customdata_profit');

      /**retrive single profit information table  */
    
    Route::post('en_retrivedatasingleprofitinformationtable', 'App\Http\Controllers\amr_en@retrive_customdata_profit_informationtable');



/**retrive data from non-profit company information */
    Route::post('en_retrivedatasinglenonprofit', 'App\Http\Controllers\amr_en@retrive_customdata_nonprofit');
    
/**retrive data from non-profit table information with ID */
Route::post('en_retrivedatasinglenonprofittable', 'App\Http\Controllers\amr_en@retrive_customdata_nonprofitinformationtable');
