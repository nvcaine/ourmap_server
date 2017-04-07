<?php
class IndexSection extends AbstractSection {
	
	public function runGetMethod($params) {
		echo json_encode(array('response' => 'all ok'));
	}
}