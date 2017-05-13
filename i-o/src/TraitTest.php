<?php
trait TraitTest {
	public function setData($data)
  {
    $this->data = $data;
  }
  public function getData()
  {
		return $this->data;
	}
}