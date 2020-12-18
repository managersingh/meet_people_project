<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Common extends Model
{
    //

    /**
     * Insert data into database.
     *
     */
	public static function insertData($table='',$dataSet=[]){
		$insertData = DB::table($table)->insertGetId($dataSet);	
		if(!empty($insertData)){
			return $insertData;	
		}else{
			return false;
		}
	}

    /**
     * Fetch data from single table in database.
     *
     */
    public static function listingData($where=[],$table='',$data=[], $orderBy='',$ordering){
        if(!empty($where)){
           $allData = DB::table($table)->select($data)->where($where)->orderby($orderBy, $ordering)->get();
        }else{
           $allData = DB::table($table)->select($data)->orderby($orderBy, $ordering)->get();
        }
        if(!empty($allData)){
            return $allData;
        }else{
            return "No data found!";
        }
    }

	/**
     * Get single data.
     *
     */
    public static function getSingelData($table='',$uId="", $getId="") {
        //Get single data
        $getData = DB::table($table)->where($uId, $getId)->first();
        if(!empty($getData)){
        	return $getData;
        }else{
        	return false;	
        }
        
    }

    /**
     * Update single data.
     *
     */
    public static function updateData($table="",$uId = "", $getId="", $data = []) {
        //Update slngle data
        $updateData = DB::table($table)->where($uId, $getId)->update($data);
        //return $updateData; die;
        if(!empty($updateData)){
           
        	return $updateData;
        }else{
        	return false;
        }
    }

    /**
     * Delete single data by unique id.
     *
     */
    public static function deleteData($table="",$uId="", $getId="") {
        //Delete  data
        $deleteData = DB::table($table)->where($uId, $getId)->delete();
        if($deleteData){
        	return true;
        }else{
        	return false;	
        } 
    }

    public static function makeHash($id = "") {
        //encrypt  data
        $encryptedData = encrypt($id);
        if($encryptedData){
        	return $encryptedData;
        }else{
        	return false;	
        } 
    }

    public static function removeHash($id = "") {
        //decrypt  data
        $decryptedData = decrypt($id);
        if($decryptedData){
        	return $decryptedData;
        }else{
        	return false;	
        } 
    }

   


}
