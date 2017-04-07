<?php
class IndexSection extends AbstractSection {
	
	public function runGetMethod($params) {

		$locationsProxy = new LocationsProxy(DBWrapper::cloneInstance());

		echo json_encode(array('locations' => $locationsProxy->getLocations()));
	}
}