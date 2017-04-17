<?php
class ThumbSection extends AbstractSection {

	public function runGetMethod($params) {

		if(!isset($params['url'])) {
			echo json_encode(array('result' => 'No image file specified.'));
			return;
		}

		header("Content-Type: image/jpeg");

		$helper = new ThumbnailHelper();

		$helper->createThumbnail($params['url'], 200, 200);
		$helper->displayThumbnail();
	}
}