<?php
class fileUpload
{

	private $upFile;
	private $sizeLimit;
	private $typeLimit;
	private $final_path;
	private $result;
 //$ext= pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);

	function __construct($xFile)
	{

		$this->upFile = $xFile;
		$this->sizeLimit = 2048;
		$this->typeLimit = array("jpeg", "jpg", "png");
		$this->result = "Subiendo archivo";


	}

	public function setSizeLimit($xSizeLimit)
	{
		$this->sizeLimit = $xSizeLimit;
	}

	public function setTypeLimit($xTypeLimit)
	{
		$this->typeLimit = $xTypeLimit;
	}

	public function upload($xPath)
	{
		if(is_uploaded_file($this->upFile['tmp_name']))
		{
			if($this->upFile['size'] / 1024 <= $this->sizeLimit)
			{
				$fileType = $this->upFile['type'];
				$typeOK = false;

				for($i = 0; $i <= count($this->typeLimit) - 1; $i++)
				{
					if(strpos(strtolower($fileType), strtolower($this->typeLimit[$i])))
					{
						$typeOK = true;
						break;
					}
				}

				if($typeOK)
				{
					if(!file_exists($xPath."/".$this->upFile['name']))
					{
						if(is_writable($xPath))
						{
							if(copy($this->upFile['tmp_name'], $xPath."/".$this->upFile['name']))
							{
								$this->result = "Archivo subido.";
							}
							else
							{
								$this->result = "Error: Ya existe un archivo con el mismo nombre.";
							}
						}
						else
						{
							$this->result = "Error: La carpeta de destino no tiene permisos.";
						}
					}
					else
					{
						$this->result = "Error: Ya existe un archivo con el mismo nombre.";
					}
				}
				else
				{
					$this->result = "Error: No se permiten este tipo de archivos.";
				}
			}
			else
			{
				$this->result = "Error: El archivo es demasiado grande.";
			}
		}
		else
		{
			$this->result = "Error: El archivo no se puede subir.";
		}
	}

	public function showResult()
	{
		echo $this->result;
	}
}
?>
