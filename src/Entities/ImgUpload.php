<?php
class Image
{

	private $name;
	private $type;
	private $tmp_name;
	private $error;
	private $size;
//  private $ext;
//	private $hashedName;
//	private $finalPath;

/*	function __construct(array $data,$xPath)
	{

		$this->Ext = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
    $this->HashedName = md5(($_FILES['avatar']['name'])). '.' . $this->Ext;
		$this->FinalPath = $xPath . $this->HashedName;
	}*/

	public function setName(string $name)
	{
		$this->name = $name;
	}
	public function setType(string $type)
	{
		$this->type = $type;
	}
	public function setTmpName(string $tmp_name)
	{
		$this->name = $name;
	}
	public function getName() : string
	{
		return $this->name;
	}
	public function getType() : string
	{
		return $this->type;
	}
	public function getTmpName() : string
	{
		return $this->$tmp_name;
	}
}
?>
