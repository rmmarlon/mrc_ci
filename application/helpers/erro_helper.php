<?
	if ( ! function_exists('ERROR'))
	{
	    function ERROR($id=500,$message="Internal Server Error")
	    {
	        return array(
	          "type"=>"error",
	          "code"=> $id,
	          "message"=> $message
	          );
	    }
	}
?>