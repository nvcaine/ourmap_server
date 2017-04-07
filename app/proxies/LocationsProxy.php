<?php
class LocationsProxy extends AbstractProxy {
	
	const TABLE_NAME = 'locations';

	//https://maps.googleapis.com/maps/api/geocode/json?address=[]&key=AIzaSyAgKOoI-oBb7Uc1-oPFTqegCAygtD6TjMs
	public function getLocations() {
		// . ' WHERE subID = :id', array('id' => $subID));
		return $this->db->query('SELECT * FROM ' . self::TABLE_NAME);
	}
}