<?php
class ThumbnailHelper
{
	private $thumbNail;

	public function createThumbnail($fileName, $width = 100, $height = 100)
	{
		$img = imagecreatefromjpeg($fileName);

		$thumbCoordinates = $this->getCoordinates(imagesx($img), imagesy($img));
		$this->thumbNail = imagecreatetruecolor($width, $height);

		imagecopyresampled($this->thumbNail, $img, 0, 0, $thumbCoordinates->startX, $thumbCoordinates->startY, $width, $height, $thumbCoordinates->endX, $thumbCoordinates->endY);
	}

	public function displayThumbnail()
	{
		//header("Content-Type: image/jpeg");

		imagejpeg($this->thumbNail);
	}

	private function getCoordinates($origWidth, $origHeight)
	{
		$result = (object)array("startX" => 0,
								"startY" => 0,
								"endX" => $origWidth,
								"endY" => $origHeight);

		$min = min($origWidth, $origHeight);

		$result->startX = floor(($origWidth / 2) - ($min / 2));
		$result->startY = floor(($origHeight / 2) - ($min / 2));
		$result->endX = $min;
		$result->endY = $min;

		return $result;
	}
}

?>
