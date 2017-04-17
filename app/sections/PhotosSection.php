<?php
class PhotosSection extends AbstractSection {

	public function runGetMethod($params) {
		$photosProxy = new PhotosProxy(DBWrapper::cloneInstance());

		if(isset($params['album_id'])) {
			echo json_encode(array('photos' => $photosProxy->getAlbumPhotos($params['album_id'])));
		} else {
			echo json_encode(array('photos' => $photosProxy->getPhotos()));
		}
	}
}