<?php

class Erporderitem extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
		
	];

	// Don't forget to fill this array
	protected $fillable = [];

	public function erporder(){

		return $this->belongsTo('Erporder');
	}

	public function item(){
		return $this->belongsTo('Item');
	}

	public static function getInvoice($id){
	        if($id > 0){
			$erporderitem = Erporderitem::find($id);
	        return $erporderitem->status;
	        }
	}

}