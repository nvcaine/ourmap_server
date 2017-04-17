<?php
class AlbumsProxy extends AbstractProxy {

	const TABLE_NAME = 'albums';

	public function getAlbums() {

		return $this->db->query('SELECT * FROM ' . self::TABLE_NAME);
	}

	public function getLocationAlbums($locationId) {

		$params = array('location_id' => $locationId);

		return $this->db->query('SELECT * FROM ' . self::TABLE_NAME . ' WHERE location_id = :location_id', $params);
	}
}