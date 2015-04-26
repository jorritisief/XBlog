<?php

abstract class Model_DataEntryHolder {
	
	protected $id, $dataEntry;
	
	public function getID () { return $this->id; }
	public function getDataEntry () { return $this->dataEntry; }
	public function isDisposed () { return $this->dataEntry == null; }
	
}