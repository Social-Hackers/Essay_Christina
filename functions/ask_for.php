<?php



function askFor($system) {
	
	$ask_name 		= $system->gets('ask_name');
	$mail_address 	= $system->gets('mail_address');
	$question 		= $system->gets('question');
	
	if ($ask_name !== '' && $mail_address !== '' && $question !== '') {
		$db = $system->db('essay');
		$db->setBindValues(false);
		$db->insert([
			'questionor', 'mail_address', 'question', 'question_timing'
		],'ask_for_question');
		$valus = [];
		$values[] = [$ask_name, $mail_address, $question, 'NOW()'];
		$db->values($values);
		$db->result();
		
		//$system->log($db->sqlLogs(), 'essay');
		//$system->log($db->msg(), 'essay');
	}
}



function asked($system) {
	
	$ask_name 		= $system->gets('ask_name');
	$mail_address 	= $system->gets('mail_address');
	$question 		= $system->gets('question');
	$asked = true;
	
	if ($ask_name === '' && $mail_address === '' && $question === '') {
		$asked = false;
	}
	
	return $asked;
}


function stringIsset($gets, $index) {
	return isset($gets[$index]) && is_string($gets[$index]) ? $gets[$index] : '';
}
