<?php

class Claim extends Model
{
	public function save()
	{
		if ($this->isNewRecord) {
			$sql = "INSERT INTO claims (name, address, email, phone, message) VALUES ('".$this->fields['name']."', '".$this->fields['address']."', '".$this->fields['email']."', '".$this->fields['phone']."', '".$this->fields['message']."');";
			$this->db->query($sql);
		} else {
			$sql = "UPDATE claims SET name='".$this->fields['name']."', address='".$this->fields['address']."', email='".$this->fields['email']."', phone='".$this->fields['phone']."', message='".$this->fields['message']."' WHERE id = ".$this->fields['id'].";";
			$this->db->query($sql);
		}
	}

	public function find($params = [])
	{
		$sql = "SELECT * FROM claims";

		foreach($params as $param) {

		}

		$sql .= ";";

		$result = [];
		foreach($this->db->query($sql) as $row) {
			array_push($result, $row);
		}
		return $result;
	}

	public function delete($id = false)
	{
		if ($id) {
			$sql = "DELETE FROM claims WHERE id = $id;";
			$this->db->query($sql);
		}
	}

	public function getOne($id = false)
	{
		if ($id) {
			$sql = "SELECT * FROM claims WHERE id = $id LIMIT 1;";

			foreach($this->db->query($sql) as $row) {
				$this->fields = $row;
				$this->isNewRecord = false;
			}
		}
	}
}
