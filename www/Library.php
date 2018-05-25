<?php
class library{
	public function __construct(){
		$this->db = new PDO('mysql:host=localhost;dbname=perpustakaan','root','');
	 }
	public function addBook($kode,$judul,$pengarang,$penernit){
		$sql = "INSERT INTO books(kodeBuku,judulBuku,pengarang,penrbit) VALUES('$kode','$judul','$pengarang','$penerbit')";
			$query = $this->query($sql);
			if(!$query){
				return "Failed";
			}
			else{
				return "Succes";
			}
		}
	public function editBook($kode){
		$sql = "SELEDT * FROM books WHERE kodeBuku='$kode'";
		$query = $this->db->query($sql);
		return $query;
	 }
	public function updateBook($kode,$judul,$pengarang,$penerbit){
		$sql = "UPDATE books SET judulBuku='$judul','pengarang='$pengarang',penerbit='$penerbit' WHERE kodeBuku='$kode'";
		$query = $this->db->query($sql);
		if(!$query){
			return "Failed";
			}
		else{
			return "Succes";
			}
	 }
	 public function deleteBook($kode){
		$sql = "DELETE FROM book WHERE kodeBuku='$kode'";
		$query = $this->db->query($sql);
		if(!$query){
			return "Failed";
			}
		else{
			return "success";
			}
	 }
	}
?>