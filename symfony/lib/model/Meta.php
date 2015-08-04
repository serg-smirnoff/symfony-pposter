<?php

class Meta extends BaseMeta
{
	public function __toString(){
		return $this->getTitle();
	}
}
