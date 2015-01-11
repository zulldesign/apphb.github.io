<?php
// Program Oleh Zulf @www.apphb.com 11 Januari 2015
// Penyambungan ke MySQL database
require_once "connect_to_mysql.php";
// Buat SQL string sebuah table
$sqlString ="CREATE TABLE chats(
					id int(11) NOT NULL auto_increment,
					user_ip varchar(255) NOT NULL,
					user_name varchar(255) NOT NULL,
					chat_body text NULL,
					date_time datetime NULL,
					PRIMARY KEY(id)
					)";
// Baris fungsi mysql_query() untuk membuat sebuah table khusus SQL string
$queryResult = mysql_query($sqlString);
// Lampiran untuk lihat pertanyaan query sukses diprogram atau sebaliknya
if($queryResult === TRUE){
	print "<br /><br />TABLE database sukses di programkan! Selamat Mencuba!";
}else{
	print "<br /><br />Tiada TABLE di PROGARAM. Perhatikan syntax dan struktur sql string.";
}
// Penyambungan mysql berakhir
mysql_close();
?>					