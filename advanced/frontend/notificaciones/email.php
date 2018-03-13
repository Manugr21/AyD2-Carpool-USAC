<?php

	function send_mail(){
		require_once("phpmailer/class.phpmailer.php");
		$texto_historias="";
		$dbh = new PDO('mysql:host=localhost;dbname=proyecto_scrum', 'root', 'jean11');
	    $dbh->exec("set names utf8;");

		$date = date("Y-m-d H:i:s");
		$sprint = $dbh->prepare("SELECT * FROM sprint_backlog WHERE (:fecha BETWEEN fh_inicio AND fh_fin) and (:fecha BETWEEN date_add(fh_fin, INTERVAL -2 DAY) AND fh_fin)");
		$sprint->bindParam(":fecha", $date);
		$sprint->execute();

		$sprint = $sprint->fetch(PDO::FETCH_ASSOC);

		if(!$sprint){
			print "no hay sprint corriendo";
		}else{
			$query_historias = $dbh->prepare("SELECT h.nombre as nombre FROM historia h, asignacion_sprint a WHERE h.id_historia = a.id_historia AND a.id_sprint = ".$sprint['id_sprint']);
			$query_historias->execute();
			if($historias = $query_historias->fetchAll()){
				foreach($historias as $historia){
					$texto_historias .= $historia['nombre']."<br/>";
				}
			}
		}


		$body = ' <html> 
					<head> 
					   <title>Prueba de correo</title> 
					</head> 
					<body> 
					<!--h1>Historias Proximas a !</h1--> 
					<p> 
					<b>A continuacion, se listan las historias de usuario proximas a vencer</b>. <br/>
					'.$texto_historias.'
					<br/>
					Se les recuerda que el sprint termina el dia de mañana.<br/><br/>

					Feliz dia.
					</p> 
					</body> 
					</html> '; 

	    $mail = new PHPMailer();
	    $mail->IsSMTP();
	    $mail->Mailer   = "smtp";			
	    $mail->From     = "soportescrummanager@gmail.com"; //"bibliotecavirtual@agexport.org.gt";
	    $mail->FromName = "Soporte Scrum Manager"; //"Biblioteca Virtual - INFOEXPORT";
	    $mail->Host     = "ssl://smtp.gmail.com"; //"ssl://smtp.gmail.com";
	    $mail->Password = "scrummanager"; //"";
	    $mail->Username = "soportescrummanager@gmail.com"; //"";
	    $mail->Subject  = "Historias proximas a vencer";
	    $mail->SMTPAuth = true; //"true";
	    $mail->CharSet  = "utf-8"; //"utf-8";
	    $mail->IsHTML(true);
	    $mail->Port = 465; //465;
	    $mail->Body = $body;
		$mail->AddAddress('jruizg96.11@gmail.com');
		$mail->AddAddress('dasensag@gmail.com @gmail.com');
		$mail->AddAddress('alidaryousef@gmail.com @gmail.com');
		$mail->AddAddress('manugr21@gmail.com @gmail.com');
		$mail->AddAddress('fabio.vasquez.24@gmail.com @gmail.com');
		$mail->AddAddress('soportescrummanager@gmail.com');


		if( ! $mail->Send() ) {
		  	echo "Mailer Error: " . $mail->ErrorInfo;
		  	return false;
		}else{
			return true;
		}

	}
		


?>