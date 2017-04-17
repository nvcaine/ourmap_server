<?php
class PhotosProxy extends AbstractProxy {

	const TABLE_NAME = 'photos';

	public function getPhotos() {
		return $this->db->query('SELECT * FROM ' . self::TABLE_NAME);
	}

	public function getAlbumPhotos($albumId) {
		$params = array('album_id' => $albumId);
		return $this->db->query('SELECT * FROM ' . self::TABLE_NAME . ' WHERE album_id = :album_id', $params);
	}
}