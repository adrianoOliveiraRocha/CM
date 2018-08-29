<?php
use Intervention\Image\ImageManager;

class Promotion
{
	private $id;
	private $image;

	public function setImage($url_image) {
		$this->image = $url_image;
	}

	public function getImage() {
		return $this->image;
	}

	public function save() {
		if (PromotionDAO::save($this)) {
			return true;
		} else {
			return false;
		}
	}

	public static function make_thumb($src, $dest, $fileName) {
		$manager = new ImageManager(array('driver' => 'imagick'));
		$image = $manager->make($src)->resize(100, 100);
		$dest = $dest . '/thumb/'. $fileName;
		$image->save($dest);
	}
}
?>
