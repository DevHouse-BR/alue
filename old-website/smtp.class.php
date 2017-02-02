<?

// Autor Desconhecido

class Smtp{

var $conn;
var $user;
var $pass;
var $debug;

function Smtp($host){
$this->conn = fsockopen($host, 587, $errno, $errstr, 30);
$this->Put("EHLO $host");
}
function Auth(){
$this->Put("AUTH LOGIN");
$this->Put(base64_encode($this->user));
$this->Put(base64_encode($this->pass));
}
function Send($to, $from, $subject, $msg){

$this->Auth();
$this->Put("MAIL FROM: " . $from);
$this->Put("RCPT TO: " . $to);
$this->Put("DATA");
$this->Put($this->toHeader($to, $from, $subject));
$this->Put("\r\n");
$this->Put($msg);
$this->Put(".");
$this->Close();
if(isset($this->conn)){
return true;
}else{
return false;
}
}
function Put($value){
return fputs($this->conn, $value . "\r\n");
}
function toHeader($to, $from, $subject){
$header = "Message-Id: <". date('YmdHis').".". md5(microtime()).".". strtoupper($from) ."> \r\n";
$header .= "From:\"ALUE ESQUADRIAS\" <" . $from . "> \r\n";
$header .= "To: <".$to."> \r\n";
$header .= "Subject: ".$subject." \r\n";
$header .= "Date: ". date('D, d M Y H:i:s O') ." \r\n";
$header .= "X-MSMail-Priority: High \r\n";
$header .= "Content-Type: text/html; charset=iso-8859-1";
return $header;
}
function Close(){
$this->Put("QUIT");
if($this->debug == true){
while (!feof ($this->conn)) {
fgets($this->conn) . "<br>\n";
}
}
return fclose($this->conn);
}
}

//***************************************************************
// CONFIGURAÇÃO DO SMTP MBENCHMARKING
//***************************************************************

/* Configuração da classe.smtp.php */
$host = "smtp.alueesquadrias.com.br"; /*host do servidor SMTP */
$smtp = new Smtp($host);
$smtp->user = "noreply@alueesquadrias.com.br"; /*usuario do servidor SMTP */
$smtp->pass = "q1w2e3r4"; /* senha dousuario do servidor SMTP*/
$smtp->debug =true; /* ativar a autenticação SMTP*/


/* envia uma mensagem */
$from= "comercial@alueesquadrias.com.br"; /* seu e-mail */


?>