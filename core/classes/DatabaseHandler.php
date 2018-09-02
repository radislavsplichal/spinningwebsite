<?php
namespace CMSCore;
interface DatabaseHander{
	private $conn;
	function establishConnection();
	private function executeQuerry($sql);
	public function createObject($type,$objectName,$arguments);
	public function saveObject ($type,$arguments,$values);
	public function deleteObject($id,$type);
	public function editObject($id,$type,$arguments,$values);
	public function readObject($sql);

}
?>
