<?php 

//  File upload helper function 
function upload_file($files, $allowed_exs, $path){
    // get data and store them in var
   $file_name = $files['name'];
   $tmp_name  = $files['tmp_name'];
   $error     = $files['error'];

    // if there is no error occurred while uploading
   if ($error === 0) {
   	  
   	//    get file extension store it in var
   	  $file_ex = pathinfo($file_name, PATHINFO_EXTENSION);

   	//   Convert into lowercase and store it in variable
	  $file_ex_lc = strtolower($file_ex);

	//   Checking if the file exists
		if (in_array($file_ex_lc, $allowed_exs)) {
			// Renaming the file with string at random
			$new_file_name = uniqid("",true).'.'.$file_ex_lc;

			//  assigning upload path
			$file_upload_path = '../uploads/'.$path.'/'.$new_file_name;
			// Moving uploaded file to main directory
			move_uploaded_file($tmp_name, $file_upload_path);

			// Success message with linked array
            $sm['status'] = 'success';
	        $sm['data']   = $new_file_name;

	        //   Return the sm array
	        return $sm;
            
		}else{
		//  Error message
	      $em['status'] = 'error';
	      $em['data']   = "You can't upload files of this type";

	    //    Return the em array
	      return $em;
		}
   }else {
   	//  Error message
      $em['status'] = 'error';
      $em['data']   = 'Error occurred while uploading!';

        // Return the em array
      return $em;
   }
}