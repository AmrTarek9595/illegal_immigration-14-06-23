<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\en\en_profit_table_information;
use App\Models\en\en_profit_company_information;

use App\Models\en\en_company_information;
use App\Models\en\en_table_information;

use Illuminate\Support\Facades\Validator;
class amr_en extends Controller
{
  /**start admin section */
    public function profit_insert_company_information(Request $request){
        $new=new en_profit_company_information;
       
    
       $rules = 
         [
     
            'GOV'           =>    'required',
         
            'Day_Of_collection'        =>     'required',
            'date'        => 'required',
            'name_of_company'         =>      'required', 
            'address_company'           =>    'required',
            'name_of_source_data'        =>     'required',
            'source_job_title'        => 'required',
            
            'job_hours_from_to'           =>    'required',
            'working_days'        =>     'required',
            'type_of_service'        => 'required',
            
            'fields_of_service'         =>      'required',
            'service_category'         =>      'required',
            'terms_gain_service'         =>      'required',
            'Target_group'         =>      'required',
            'continues_service'         =>      'required',
            
            'Target_age_groups'         =>      'required',
            
            'number_of_company'         =>      'required',
            'investment'         =>      'required',
          
                ];

        $new->Gov=Request('GOV');
        $new->markaz=Request('markaz');
        $new->karya=Request('karya');
        $new->madina=Request('madina');
        $new->name_of_data_collection=Request('name_of_data_collection');
        $new->Day_Of_collection=Request('Day_Of_collection');
        $new->date=Request('date');
        $new->name_of_company=Request('name_of_company');
        $new->address_company=Request('address_company');
        $new->name_of_source_data=Request('name_of_source_data');
        $new->source_job_title=Request('source_job_title');
        $new->PhoneNumber_his=Request('PhoneNumber_his');
        $new->job_hours_from_to=Request('job_hours_from_to');
        $new->working_days=Request('working_days');
        $new->service_category=$request->service_category;
        $new->type_of_service=Request('type_of_service');
        $new->type_of_investment	=Request('investment');
        $new->fields_of_service=Request('fields_of_service');
        $new->terms_gain_service=Request('terms_gain_service');
        $new->Target_group=Request('Target_group');
        $new->covered_area=Request('covered_area');
        $new->continues_service=Request('continues_service');
        $new->Target_age_groups=Request('Target_age_groups');
        $new->number_of_company=Request('number_of_company'); 
        $new->whatsApp_of_company=Request('whatsApp_of_company');
        $new->website_of_company=Request('website_of_company');
        $new->email_of_company=Request('email_of_company');
    
        try { 
           //$new->save();
           $validate =  Validator::make($request->all(),$rules);
           if($validate->fails()){
            return response()->json(["errors"=>$validate->messages()]);
        }
        else{
            $new->save();
            return response()->json(['id'=>$new->id,'message'=>'new record are inserted']);
        }
          } catch(Exception  $ex){ 
          dd($ex->getMessage());
       
            // Note any method of class PDOException can be called on $ex.
          }
    
    
    
        
    
    
    } 

    public function displayallprofit(){
        $new= en_profit_company_information::get();
        return response()->json(["message"=>$new]);
    }
    public function profit_insert_table_information(Request $request)
    {

          $table=new en_profit_table_information;
          $table->keys=$request->keys;
            $table->layer1_from_to=$request->layer1_from_to;
            $table->layer1_interest=$request->layer1_interest;
            $table->layer1_damen=$request->layer1_damen;
            $table->layer1_workpaper=$request->layer1_workpaper;
            $table->layer1_period_gain_service=$request->layer1_period_gain_service;
            $table->layer1_ftrt_samah=$request->layer1_ftrt_samah;
            $table->layer1_modet_sadad=$request->layer1_modet_sadad;
            $table->layer1_taamen=$request->layer1_taamen;
            $table->layer1_takdem=$request->layer1_takdem;
            
    

        $table->layer2_from_to=$request->layer2_from_to;
        $table->layer2_interest=$request->layer2_interest;
        $table->layer2_damen=$request->layer2_damen;
        $table->layer2_workpaper=$request->layer2_workpaper;
        $table->layer2_period_gain_service=$request->layer2_period_gain_service;
        $table->layer2_ftrt_samah=$request->layer2_ftrt_samah;
        $table->layer2_modet_sadad=$request->layer2_modet_sadad;
        $table->layer2_taamen=$request->layer2_taamen;
        $table->layer2_takdem=$request->layer2_takdem;
      
        $table->layer3_from_to=$request->layer3_from_to;
        $table->layer3_interest=$request->layer3_interest;
        $table->layer3_damen=$request->layer3_damen;
        $table->layer3_workpaper=$request->layer3_workpaper;
        $table->layer3_period_gain_service=$request->layer3_period_gain_service;
        $table->layer3_ftrt_samah=$request->layer3_ftrt_samah;
        $table->layer3_modet_sadad=$request->layer3_modet_sadad;
        $table->layer3_taamen=$request->layer3_taamen;
        $table->layer3_takdem=$request->layer3_takdem;
        
        $table->layer4_from_to=$request->layer4_from_to;
        $table->layer4_interest=$request->layer4_interest;
        $table->layer4_damen=$request->layer4_damen;
        $table->layer4_workpaper=$request->layer4_workpaper;
        $table->layer4_period_gain_service=$request->layer4_period_gain_service;
        $table->layer4_ftrt_samah=$request->layer4_ftrt_samah;
        $table->layer4_modet_sadad=$request->layer4_modet_sadad;
        $table->layer4_taamen=$request->layer4_taamen;
        $table->layer4_takdem=$request->layer4_takdem;

        $table->layer5_from_to=$request->layer5_from_to;
        $table->layer5_interest=$request->layer5_interest;
        $table->layer5_damen=$request->layer5_damen;
        $table->layer5_workpaper=$request->layer5_workpaper;
        $table->layer5_period_gain_service=$request->layer5_period_gain_service;
        $table->layer5_ftrt_samah=$request->layer5_ftrt_samah;
        $table->layer5_modet_sadad=$request->layer5_modet_sadad;
        $table->layer5_taamen=$request->layer5_taamen;
        $table->layer5_takdem=$request->layer5_takdem;

        $table->layer6_from_to=$request->layer6_from_to;
        $table->layer6_interest=$request->layer6_interest;
        $table->layer6_damen=$request->layer6_damen;
        $table->layer6_workpaper=$request->layer6_workpaper;
        $table->layer6_period_gain_service=$request->layer6_period_gain_service;
        $table->layer6_ftrt_samah=$request->layer6_ftrt_samah;
        $table->layer6_modet_sadad=$request->layer6_modet_sadad;
        $table->layer6_taamen=$request->layer6_taamen;
        $table->layer6_takdem=$request->layer6_takdem;


        $table->another_comments=$request->another_comments;
          $table->location=$request->location;
        
        return $table->save();
      return response()->json(["message"=>$table]);







    } 


    /**non profit section */

    public function adddatanonprofit(Request $request)
    {
    
      $row=new en_company_information;
      $row->Gov=$request->GOV;
      $row->markaz=$request->markaz;
      $row->karya=$request->karya;
      $row->madina=$request->madina;
      $row->name_of_data_collection=$request->name_of_data_collection;
      $row->Day_Of_collection=$request->Day_Of_collection;
      $row->date=$request->date;
      $row->name_of_company=$request->name_of_company;
      $row->address_company=$request->address_company;
      $row->name_of_source_data=$request->name_of_source_data;
      $row->source_job_title=$request->source_job_title;
      $row->PhoneNumber_his=$request->PhoneNumber_his;
  
      $row->job_hours_from_to=$request->job_hours_from_to;
      
      $row->working_days=$request->working_days;
      $row->type_of_service=$request->type_of_service;
      $row->service_category=$request->service_category;
      $row->fields_of_service=$request->fields_of_service;
      $row->terms_gain_service=$request->terms_gain_service;
      $row->Target_group=$request->Target_group;
      $row->continues_service=$request->continues_service;
      $row->covered_area=$request->covered_area;
      $row->Target_age_groups=$request->Target_age_groups;
      $row->Advertising_method=$request->Advertising_method;
      $row->number_of_company=$request->number_of_company;
      $row->whatsApp_of_company=$request->whatsApp_of_company;
      $row->website_of_company=$request->website_of_company;
      $row->email_of_company=$request->email_of_company;
          
      try { 
  
       
       $row->save(); 
        return response()->json(['message'=>$request->all()]);
   
      } catch(Exception  $ex){ 
       return response()->json(['message'=>$ex->getMessage()]);
   
        // Note any method of class PDOException can be called on $ex.
      }
        //return response()->json(["message"=>$request->all()]);
           
    }
    public function displayallnonprofit(Request $request){
      $row=en_company_information::get();
  
  
  
          
      try { 
  
       
       
        return response()->json(['message'=>$row]);
   
      } catch(Exception  $ex){ 
       return response()->json(['message'=>$ex->getMessage()]);
   
        // Note any method of class PDOException can be called on $ex.
      }
        //return response()->json(["message"=>$request->all()]);
           
  }
  public function non_profit_insert_table_information(Request $request){
    $new=new en_table_information;

    $rules = [
        'type_of_service'        => 'required',
        'benifits_of_service'         =>      'required',
        'requirments'           =>    'required',
        'period_of_gain_service'        =>     'required',
        'cost_of_service'        => 'required',
        'ways_to_apply'         =>      'required',
      

      
        ];
        /**نوع الخدمه المقدمه */
       

        $new->keys=$request->keys;
        $new->type_of_service=$request->type_of_service;
        $new->benifits_of_service=$request->benifits_of_service;
        $new->period_of_gain_service=$request->period_of_gain_service;
        $new->cost_of_service=$request->cost_of_service;
        $new->ways_to_apply=$request->ways_to_apply;
        $new->requirments=$request->requirments;
        $new->another_comments=$request->another_comments;

        $new->location=$request->location;

    try { 
       //$new->save();
       $validate =  Validator::make($request->all(),$rules);
       if($validate->fails()){
        return $validate->messages();
    }
    else{
        $new->save();
        return json_encode(['message=>'=>'new record are inserted']);
    }
      } catch(Exception  $ex){ 
      dd($ex->getMessage());
   
        // Note any method of class PDOException can be called on $ex.
      }



    


  } 
/**end admi section */

/**start result page response Non-profit */

public function retrive_datasohag(Request $request){

  if($request->gov == "sohag" && $request->markaz == 'akhmem' )
  {
      if($request->gov == "sohag" && $request->markaz == 'akhmem' && $request->karya !== "0")
      {
      $query= en_company_information::Where('karya','=',$request->karya)
      ->where('Gov','=',$request->gov)
      ->where('markaz','=',$request->markaz)
      ->orderBy('name_of_company')
      ->get();
      return response()->json(['message'=>$query]);
      }
      else{
          $query= en_company_information::where('Gov', $request->gov)
      ->where('markaz',$request->markaz)
      ->orderBy('name_of_company')
     ->get();
          return response()->json(['message'=>$query]);
      }
          
  } 
  

                                      
      else{
  $query= en_company_information::where('Gov', $request->gov)
  ->orderBy('name_of_company')
      ->get();
  return response()->json(['message'=>$query]);
  
      }





}

public function retrive_dataasuit(Request $request){


  if($request->gov == "asuit" && ($request->markaz == 'abouteeg' || $request->markaz == 'abnoub') )
  {
     
      $query= en_company_information::where('Gov','=',$request->gov)
      ->where('markaz','=',$request->markaz)
      ->orderBy('name_of_company')
      ->get();
      return response()->json(['message'=>$query]);
          
  } 
  else{
      $query= en_company_information::where('Gov', $request->gov)
 
      ->orderBy('name_of_company')
  ->get();
      return response()->json(['message'=>$query]);
  }

}
/**end result page response Non-profit*/

/**start result page response profit*/
public function retrive_datasohagprofit(Request $request){

  if($request->gov == "sohag" && $request->markaz == 'akhmem' )
  {
      if($request->gov == "sohag" && $request->markaz == 'akhmem' && $request->karya !== "0")
      {
      $query= en_profit_company_information::Where('karya','=',$request->karya)
      ->where('Gov','=',$request->gov)
      ->where('markaz','=',$request->markaz)
      ->orderBy('name_of_company')
      ->paginate(6);
      return response()->json(['message'=>$query]);
      }
      else{
          $query= en_profit_company_information::where('Gov', $request->gov)
      ->where('markaz',$request->markaz)
      ->orderBy('name_of_company')
     ->paginate(6);
          return response()->json(['message'=>$query]);
      }
          
  } 
  

                                      
      else{
  $query= en_profit_company_information::where('Gov', $request->gov)
  ->orderBy('name_of_company')
      ->paginate(6);
  return response()->json(['message'=>$query]);
  
      }





}

public function retrive_dataasuitprofit(Request $request){


  if($request->gov == "asuit" && ($request->markaz == 'abouteeg' || $request->markaz == 'abnoub') && $request->karya==null)
  {
     
      $query= en_profit_company_information::where('Gov','=',$request->gov)
      ->where('markaz','=',$request->markaz)
      ->orderBy('name_of_company')
      ->paginate(6);
      return response()->json(['message'=>$query]);
          
  } 
  else if($request->gov == "asuit" && ($request->markaz == 'abouteeg' || $request->markaz == 'abnoub') && ($request->karya) )
  {
     
      $query= en_profit_company_information::where('Gov','=',$request->gov)
       ->where('karya','=',$request->karya)
      ->where('markaz','=',$request->markaz)
      ->orderBy('name_of_company')
      ->paginate(6);
      return response()->json(['message'=>$query]);
      
          
  } 
  else{
      $query= en_profit_company_information::where('Gov', $request->gov)->orderBy('name_of_company')
 ->orderBy('name_of_company')
  
  ->paginate(6);
      return response()->json(['message'=>$query]);
  }

}
/**end result page response profit*/


/**retrive signle data from profit table */
public function retrive_customdata_profit(Request $request){


  $query= en_profit_company_information::where('id',$request->id)->get();

  return response()->json(['message'=>$query]);
}
/**retrive data from profit information table */
public function retrive_customdata_profit_informationtable(Request $request){
  $query=en_profit_table_information::where('keys',$request->id)->get();
  return response()->json(['message'=>$query]);
}
/**select custom row in non-profit table */
public function retrive_customdata_nonprofit(Request $request){


  $query= en_company_information::where('id',$request->id)->get();

  return response()->json(['message'=>$query]);
}
/**retrive custom data from non-profit table information */
public function retrive_customdata_nonprofitinformationtable(Request $request){


  $query= en_table_information::where('keys',$request->id)->get();

  return response()->json(['message'=>$query]);
}
  }
