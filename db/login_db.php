<?php
include "../backend/connections/auth.php";
include "../backend/connections/main_class.php";

$status = $main_class->login($_POST,$db);

if($status === 'success'){
    echo json_encode([
		'success'=>'success',
		'message'=>'<p class="alert alert-success">Successfully Login</p>',
	    'url' => "./index.php",
		]);
}
else if($status === 'error'){
		echo json_encode([
			'error'=>'error',
			'message'=>'<p class="alert alert-danger">Failed to login</p>',	
		
		]);

}
else{

    echo json_encode([
        'error'=>'error',
        'message'=>'<p class="alert alert-danger">Technical error please try again after some time</p>',	
    
    ]);

}


?>