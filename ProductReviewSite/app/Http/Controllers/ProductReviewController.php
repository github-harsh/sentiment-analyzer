<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Traits\GetReviewsForPhoneTrait;
use File;

class ProductReviewController extends Controller
{

	use GetReviewsForPhoneTrait;

    public function insertPhoneReview(Request $request, $phone_id) 
    {
        // Insert Review into database.
    	DB::table('reviews')->insert(
    		[
    			'review' => $request->review_textarea,
    			'p_id'   => $phone_id
    		]
    	);


        // Get Phone Details from database.
        $phone_details = DB::select('select * from phone_specs where phone_id = ?',[$phone_id]);
        $phone_name = DB::select('select phone_name from phones where phone_id = ?',[$phone_id]);


        // Call to trait GetReviewsForPhoneTrait method 
    	$phone_reviews =  $this->get_reviews_for_phone($phone_id);

        // Get count of reviews.
        $total_reviews = count($phone_reviews);

        // Create a text file and put all reviews in it.
        foreach ($phone_reviews as $reviews) 
        {
            File::append(
                "C:\\xampp\\cgi-bin\\Reviews_From_PHP_Code\\phone_id_$phone_id.txt", 
                $reviews->review.PHP_EOL
                );
        }


        // Call to Python script test_sentiment.py to compute sentiment of reviews.
        $result = shell_exec("C:\\Users\\HARSH\\Anaconda2\\python.exe C:\\xampp\\cgi-bin\\test_sentiment.py  $phone_id" );

        // Call to delete the created file with reviews.
        File::delete("C:\\xampp\\cgi-bin\\Reviews_From_PHP_Code\\phone_id_$phone_id.txt");

        $rating_of_phone  = $this->review_sentiment_processing($phone_reviews , $total_reviews , $result);
        $rating_of_phone  = round($rating_of_phone,1);
        
        //Go to page to show details of the selected phone. 
        return view('show_phone', [
            'phone_details'   => $phone_details, 
            'phone_name'      => $phone_name, 
            'phone_reviews'   => $phone_reviews,
            'total_reviews'   => $total_reviews,
            'rating_of_phone' => $rating_of_phone
            ]
        );

    }


    public function review_sentiment_processing($phone_reviews , $total_reviews , $result)
    {
        // Converting the recieved result into required format
        $result = ltrim($result , '[');
        $result = str_replace("]" , "" , $result);
        $result = str_replace("'" , "" , $result);
        $result  = str_replace(" ","", $result);
        $result = str_getcsv($result);

        // Getting total number of positive and negative reviews.
        $positive_reviews = 0;
        $negative_reviews = 0;
        foreach ($result as $key)
        {
            if ($key  == 'pos') 
            {
                $positive_reviews++;
            }
            if ($key  == 'neg') 
            {
                $negative_reviews++;
            }
        }
        return ( (10 * $positive_reviews) / $total_reviews );           
    }






}
    
