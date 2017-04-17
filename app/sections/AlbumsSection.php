<?php
class AlbumsSection extends AbstractSection {
	
	public function runGetMethod($params) {
		$albumsProxy = new AlbumsProxy(DBWrapper::cloneInstance());

		echo json_encode(array('albums' => $albumsProxy->getAlbums()));
	}
}