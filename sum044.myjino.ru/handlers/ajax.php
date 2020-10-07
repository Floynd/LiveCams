<?php

include_once('../DB/config_chat.php');

if (isset($_REQUEST['action'])) {
	switch ($_REQUEST['action']) {
		case "SendMessage":
			session_start();
			$query = $db->prepare("INSERT INTO chat SET login_user=?, message_user=?");
			$query->execute([$_SESSION['login'], $_REQUEST['message']]);
			echo 1;
			break;






		case "getChat":
			$query = $db->prepare("SELECT * from chat");
			$query->execute();
			$rs = $query->fetchAll(PDO::FETCH_OBJ);
			$chat = '';
			foreach ($rs as $r) {
				$r->date_message = date("j, n, Y");
				$chat .=  '<div class="siglemessage">' . '<span>[' . $r->date_message . '] </span>' . '<strong>' . $r->login_user . ': </strong>' . $r->message_user . '</div>';
			}
			echo $chat;
			break;
	}
}
