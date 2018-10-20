<?php
namespace App\Http\Traits;
use Illuminate\Support\Facades\DB;


trait GetReviewsForPhoneTrait
{
	/**
	Trait for getting reviews for the selected phone.
	Called when viewing phone specifications 
	and inserting a review in the database.
	**/
	public function get_reviews_for_phone($phone_id)
    {
    	// return DB::select("select review from reviews where p_id = '$phone_id'");
    	return DB::select("select review from reviews where p_id = ".$phone_id."");
    }
}