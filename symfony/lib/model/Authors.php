<?php

class Authors extends BaseAuthors
{
	public function __toString(){
		return $this->getName();
	}
}
