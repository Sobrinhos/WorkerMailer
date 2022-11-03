<?php

namespace Gustavo\WorkerMailer\src;

include_once "../vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;

  echo "to aqui";

  $phpmailer = new PHPMailer();
  $phpmailer->isSMTP();
  $phpmailer->Host = 'smtp.mailtrap.io';
  $phpmailer->SMTPAuth = true;
  $phpmailer->Port = 2525;
  $phpmailer->Username = 'd2800210e6ab99';
  $phpmailer->Password = 'f597be385f5c18';

  $phpmailer->createBody();

  $phpmailer->send();
