<?php
class IndexSection extends AbstractSection {
	
	public function runGetMethod($params) {

		$locationsProxy = new LocationsProxy(DBWrapper::cloneInstance());
		$locations = $locationsProxy->getLocations();

		$locations = $this->parseLocationsAndAddPhotos($locations);

		echo json_encode(array('locations' => $locations), JSON_PRETTY_PRINT);
	}

	private function parseLocationsAndAddPhotos($locations) {

		return array_map(array($this, 'parseLocation'), $locations);
	}

	private function parseLocation($location) {

		$albumsProxy = new AlbumsProxy(DBWrapper::cloneInstance());
		$location['albums'] = $albumsProxy->getLocationAlbums($location['id']);

		return $location;
	}
}