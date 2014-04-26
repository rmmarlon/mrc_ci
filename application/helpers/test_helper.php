<?
	if(! function_exists('test_html'))
	{
		function prototype($tag = '', $type = '', $data = '', $ext = '')
		{
			if($tag == 'input'){
				return '<'.$tag.' type="'.$type.'" value="'.$data.'" '.$ext.'/>';
			}
			return '<'.$tag.' '.$ext.'>'.$data.'</'.$tag.'>';
		}
	}
?>