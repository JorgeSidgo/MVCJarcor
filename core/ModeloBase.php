<?php

class ModeloBase extends EntidadBase
{
	private $table;

	function __construct($table)
	{
		$this->table = $table;
		parent:: __construct($table);
	}

	public function ejecutarSQL($query)
	{
		$query = $this->db()->query($query);

		if($query)
		{
			if($query->num_rows > 1)
			{
				while($row = $query->fetch_object())
				{
					$resulset[] = $row;
				}
			}
			elseif ($query->num_rows == 1) {
				$resulset = $row;
			}
			else{
				$resulset = false;
			}
		}
		else{
			$resulset = false;
		}

		return $resulset;
	}
}