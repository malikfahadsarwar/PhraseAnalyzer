<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnalyzerController extends Controller
{  
    public function analyzer(Request $request)
    {
    
       
        $phrase = strtolower($request->phrase);
        $phrase_s = strtolower($request->phrase);
        
        $chracters = str_split($phrase);
        
        $analyse=[];
        $flag=[];
        $i=0;
    
        
        foreach ($chracters as $chracter) {
            
            if(trim($chracter))
            {
               
                $repeat     = substr_count($phrase,$chracter);
             
                if(!isset($analyse[$chracter]['repeat'])) $analyse[$chracter]['repeat'] = $repeat;
    
             
                if($repeat>1){
                   
                    $fp = stripos($phrase,$chracter);
                   
                    $lp = strripos($phrase,$chracter);
                   
                    $analyse[$chracter]['flag'] = $lp-$fp>=10 ? 1 : 0;

                }

                else
                    $analyse[$chracter]['flag'] = 0;
    
               
                $postion = explode($chracter, $phrase_s);
                $before  = '';
                $after   = '';
    
               
                if(isset($postion[0])){
                    foreach (str_split($postion[0]) as  $value) {
                        if(trim($value)) $before .= $value.',';
                    }
                }
                
          
                if(isset($postion[1])){
                    foreach (str_split($postion[1]) as  $value) {
                    if(trim($value)) $after .= $value.',';
                    }
                }
    
                
                if(!isset($analyse[$chracter]['before']))
                $analyse[$chracter]['before'] =$before!='' ? $before : 'none';
                if(!isset($analyse[$chracter]['after']))
                $analyse[$chracter]['after'] =$after!='' ? $after : 'none';
    
            }
        }
    
      
        return view('output',[
            'analyse'=>$analyse,
            'title'=>$request->phrase
        ]);
    

   } 


}