<?php

class Parts extends BaseParts
{
	public function __toString(){
		return $this->getName();
	}
}
