<?php

class Cltvo_Page extends Cltvo_PostType_Master {

	public function setMetas() {
		if (isChildOfPage(specialPage(__('acerca',TRANSDOMAIN)), $this->post->ID)) {
			$this->gallery = Cltvo_Galeria_taller::getImages($this->post);
		}
	}
}
