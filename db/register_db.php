<?php
include "../backend/connections/auth.php";
include "../backend/connections/main_class.php";

$status = $main_class->register($_POST,$db);

if($status === 'missing_field'){
    echo json_encode([
		'error'=>'error',
		'message'=>'<p class="alert alert-danger">You missing some important fields</p>',
		
	]);

    header('Location:../register.php?error=some fields are missing');
}
else if($status === 'success'){
    echo json_encode([
		'success'=>'success',
		'message'=>'<p class="alert alert-success">You are now eligible to upload Notes and Assignments.</p>',
	    'url' => "./index.php",
		]);
}
else if($status === 'error'){
		echo json_encode([
			'error'=>'error',
			'message'=>'<p class="alert alert-danger">Failed to login</p>',	
		
		]);

}
else if($status === 'email_invalid'){
    echo json_encode([
        'error'=>'error',
        'message'=>'<p class="alert alert-danger">Email address is not valid</p>',	
    
    ]);
}
else{

    echo json_encode([
        'error'=>'error',
        'message'=>'<p class="alert alert-danger">Technical error please try again after some time</p>',	
    
    ]);

}


?>