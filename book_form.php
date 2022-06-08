<?php
   require 'PHPMailer/PHPMailerAutoload.php';
   require 'config.php';

   $connection = mysqli_connect('localhost','root','','book_db');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['leaving'];
      $currDate = $_POST['currentDate'];

      $request = " insert into book_form(name, email, phone, address, location, guests, arrivals, leaving) values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving') ";
      mysqli_query($connection, $request);

      $mail = new PHPMailer();

      // SMTP settings
      $mail->isSMTP();
      $mail->Host = $host;
      $mail->SMTPAuth = true;
      $mail->Username = $emailUsername;
      
      $mail->Password = $emailPassword;
      $mail->SMTPSecure = 'ssl';
      $mail->SMTPDebug = 3;
      $mail->Port = $port;

      // Email settings
      $mail->setFrom('consultancy@alwayssahi.com', 'Travel.');
      $mail->addAddress($email, $name);
      // $mail->addAddress('ellen@example.com');
      $mail->addReplyTo('consultancy@alwayssahi.com', 'Travel.');
      // $mail->addCC('cc@example.com');
      // $mail->addBCC('');
      // if(isset($_FILES['file']) && $_FILES['file']['error'] == UPLOAD_ERR_OK) {
      //   $mail->addAttachment($_FILES['file']['tmp_name']);
      // }
      // $mail->addAttachment($path);
      // $mail->addAttachment($offerletter, 'new.jpg'); 
      
      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = 'Request Registered | Travel.';
      $mail->Body    = "
      
         <!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' '\http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
         <html xmlns=\"http://www.w3.org/1999/xhtml\" xmlns:o=\"urn:schemas-microsoft-com:office:office\" style=\"font-family:arial, 'helvetica neue', helvetica, sans-serif\"> 
         <head> 
         <meta charset=\"UTF-8\"> 
         <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\"> 
         <meta name=\"x-apple-disable-message-reformatting\"> 
         <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"> 
         <meta content=\"telephone=no\" name=\"format-detection\"> 
         <title>customer</title><!--[if (mso 16)]>
            <style type=\"text/css\">
            a {text-decoration: none;}
            </style>
            <![endif]--><!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]--><!--[if gte mso 9]>
         <xml>
            <o:OfficeDocumentSettings>
            <o:AllowPNG></o:AllowPNG>
            <o:PixelsPerInch>96</o:PixelsPerInch>
            </o:OfficeDocumentSettings>
         </xml>
         <![endif]--><!--[if !mso]><!-- --> 
         <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,700,700i\" rel=\"stylesheet\"><!--<![endif]--> 
         <style type=\"text/css\">
         #outlook a {
            padding:0;
         }
         .es-button {
            mso-style-priority:100!important;
            text-decoration:none!important;
         }
         a[x-apple-data-detectors] {
            color:inherit!important;
            text-decoration:none!important;
            font-size:inherit!important;
            font-family:inherit!important;
            font-weight:inherit!important;
            line-height:inherit!important;
         }
         .es-desk-hidden {
            display:none;
            float:left;
            overflow:hidden;
            width:0;
            max-height:0;
            line-height:0;
            mso-hide:all;
         }
         [data-ogsb] .es-button {
            border-width:0!important;
            padding:10px 20px 10px 20px!important;
         }
         .es-button-border:hover a.es-button, .es-button-border:hover button.es-button {
            background:#56d66b!important;
            border-color:#56d66b!important;
         }
         .es-button-border:hover {
            border-color:#42d159 #42d159 #42d159 #42d159!important;
            background:#56d66b!important;
         }
         @media only screen and (max-width:600px) {p, ul li, ol li, a { line-height:150%!important } h1, h2, h3, h1 a, h2 a, h3 a { line-height:120% } h1 { font-size:30px!important; text-align:left } h2 { font-size:24px!important; text-align:left } h3 { font-size:20px!important; text-align:left } .es-header-body h1 a, .es-content-body h1 a, .es-footer-body h1 a { font-size:30px!important; text-align:left } .es-header-body h2 a, .es-content-body h2 a, .es-footer-body h2 a { font-size:24px!important; text-align:left } .es-header-body h3 a, .es-content-body h3 a, .es-footer-body h3 a { font-size:20px!important; text-align:left } .es-menu td a { font-size:14px!important } .es-header-body p, .es-header-body ul li, .es-header-body ol li, .es-header-body a { font-size:14px!important } .es-content-body p, .es-content-body ul li, .es-content-body ol li, .es-content-body a { font-size:14px!important } .es-footer-body p, .es-footer-body ul li, .es-footer-body ol li, .es-footer-body a { font-size:14px!important } .es-infoblock p, .es-infoblock ul li, .es-infoblock ol li, .es-infoblock a { font-size:12px!important } *[class=\"gmail-fix\"] { display:none!important } .es-m-txt-c, .es-m-txt-c h1, .es-m-txt-c h2, .es-m-txt-c h3 { text-align:center!important } .es-m-txt-r, .es-m-txt-r h1, .es-m-txt-r h2, .es-m-txt-r h3 { text-align:right!important } .es-m-txt-l, .es-m-txt-l h1, .es-m-txt-l h2, .es-m-txt-l h3 { text-align:left!important } .es-m-txt-r img, .es-m-txt-c img, .es-m-txt-l img { display:inline!important } .es-button-border { display:inline-block!important } a.es-button, button.es-button { font-size:18px!important; display:inline-block!important } .es-adaptive table, .es-left, .es-right { width:100%!important } .es-content table, .es-header table, .es-footer table, .es-content, .es-footer, .es-header { width:100%!important; max-width:600px!important } .es-adapt-td { display:block!important; width:100%!important } .adapt-img { width:100%!important; height:auto!important } .es-m-p0 { padding:0px!important } .es-m-p0r { padding-right:0px!important } .es-m-p0l { padding-left:0px!important } .es-m-p0t { padding-top:0px!important } .es-m-p0b { padding-bottom:0!important } .es-m-p20b { padding-bottom:20px!important } .es-mobile-hidden, .es-hidden { display:none!important } tr.es-desk-hidden, td.es-desk-hidden, table.es-desk-hidden { width:auto!important; overflow:visible!important; float:none!important; max-height:inherit!important; line-height:inherit!important } tr.es-desk-hidden { display:table-row!important } table.es-desk-hidden { display:table!important } td.es-desk-menu-hidden { display:table-cell!important } .es-menu td { width:1%!important } table.es-table-not-adapt, .esd-block-html table { width:auto!important } table.es-social { display:inline-block!important } table.es-social td { display:inline-block!important } }
         </style> 
         </head> 
         <body data-new-gr-c-s-loaded=\"14.1016.0\" style=\"width:100%;font-family:arial, 'helvetica neue', helvetica, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0\"> 
         <div class=\"es-wrapper-color\" style=\"background-color:#F6F6F6\"><!--[if gte mso 9]>
                  <v:background xmlns:v=\"urn:schemas-microsoft-com:vml\" fill=\"t\">
                     <v:fill type=\"tile\" color=\"#f6f6f6\"></v:fill>
                  </v:background>
               <![endif]--> 
            <table class=\"es-wrapper\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top\"> 
            <tr> 
               <td valign=\"top\" style=\"padding:0;Margin:0\"> 
               <table class=\"es-header\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top\"> 
                  <tr> 
                  <td align=\"center\" style=\"padding:0;Margin:0\"> 
                  <table class=\"es-header-body\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#ffffff\" align=\"center\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px\"> 
                     <tr> 
                     <td align=\"left\" bgcolor=\"#efefef\" style=\"Margin:0;padding-top:5px;padding-bottom:5px;padding-left:20px;padding-right:20px;background-color:#efefef\"> 
                        <table cellspacing=\"0\" cellpadding=\"0\" width=\"100%\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> 
                        <tr> 
                           <td align=\"left\" style=\"padding:0;Margin:0;width:560px\"> 
                           <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" role=\"presentation\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> 
                              <tr> 
                              <td align=\"center\" style=\"padding:0;Margin:0\"><h1 style=\"Margin:0;line-height:60px;mso-line-height-rule:exactly;font-family:'source sans pro', 'helvetica neue', helvetica, arial, sans-serif;font-size:40px;font-style:normal;font-weight:normal;color:#000000;text-align:center\">Travel.</h1></td> 
                              </tr> 
                           </table></td> 
                        </tr> 
                        </table></td> 
                     </tr> 
                  </table></td> 
                  </tr> 
               </table> 
               <table class=\"es-content\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%\"> 
                  <tr> 
                  <td align=\"center\" style=\"padding:0;Margin:0\"> 
                  <table class=\"es-content-body\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#ffffff\" align=\"center\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px\"> 
                     <tr> 
                     <td align=\"left\" style=\"padding:0;Margin:0;padding-top:20px;padding-left:20px;padding-right:20px\"> 
                        <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> 
                        <tr> 
                           <td valign=\"top\" align=\"center\" style=\"padding:0;Margin:0;width:560px\"> 
                           <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" role=\"presentation\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> 
                              <tr> 
                              <td align=\"center\" style=\"padding:0;Margin:0;font-size:0px\"><img class=\"adapt-img\" src=\"https://pvuwmt.stripocdn.email/content/guids/CABINET_88a9efa3c4a5bb29cbadddf0850c6e23/images/3969587.jpeg\" alt style=\"display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic\" width=\"400\" height=\"320\"></td> 
                              </tr> 
                              <tr> 
                              <td align=\"center\" style=\"padding:0;Margin:0;font-size:0px\"><img class=\"adapt-img\" src=\"https://pvuwmt.stripocdn.email/content/guids/CABINET_88a9efa3c4a5bb29cbadddf0850c6e23/images/request_JdV.png\" alt style=\"display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic\" width=\"500\" height=\"222\"></td> 
                              </tr> 
                           </table></td> 
                        </tr> 
                        </table></td> 
                     </tr> 
                  </table></td> 
                  </tr> 
               </table> 
               <table class=\"es-footer\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top\"> 
                  <tr> 
                  <td align=\"center\" style=\"padding:0;Margin:0\"> 
                  <table class=\"es-footer-body\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#ffffff\" align=\"center\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px\"> 
                     <tr> 
                     <td align=\"left\" bgcolor=\"#efefef\" style=\"Margin:0;padding-top:20px;padding-bottom:20px;padding-left:20px;padding-right:20px;background-color:#efefef\"> 
                        <table cellspacing=\"0\" cellpadding=\"0\" width=\"100%\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> 
                        <tr> 
                           <td align=\"left\" style=\"padding:0;Margin:0;width:560px\"> 
                           <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" role=\"presentation\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> 
                              <tr> 
                              <td align=\"center\" style=\"padding:0;Margin:0;padding-bottom:15px\"><p style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:30px;color:#333333;font-size:20px\">Thank You for contacting us!<br>Our team will reach out to you within 24hrs.<br></p></td> 
                              </tr> 
                              <tr> 
                              <td align=\"left\" style=\"padding:0;Margin:0;padding-bottom:5px\"><p style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:24px;color:#333333;font-size:16px\">Following are the detail's you mentioned:</p></td> 
                              </tr> 
                              <tr> 
                              <td align=\"left\" style=\"padding:0;Margin:0\"> 
                              <ul> 
                                 <li style=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:16px;Margin-bottom:15px;margin-left:0;color:#333333;font-size:16px\"><p style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:14px;color:#333333;font-size:14px\"><span style=\"font-size:16px;line-height:16px\"></span><strong>Name:&nbsp;</strong>".$name."</p></li> 
                              </ul></td> 
                              </tr> 
                              <tr> 
                              <td align=\"left\" style=\"padding:0;Margin:0\"> 
                              <ul> 
                                 <li style=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:16px;Margin-bottom:15px;margin-left:0;color:#333333;font-size:16px\"><p style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:14px;color:#333333;font-size:14px\"><strong>Email:&nbsp;</strong>".$email."</p></li> 
                              </ul></td> 
                              </tr> 
                              <tr> 
                              <td align=\"left\" style=\"padding:0;Margin:0\"> 
                              <ul> 
                                 <li style=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:16px;Margin-bottom:15px;margin-left:0;color:#333333;font-size:16px\"><p style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:14px;color:#333333;font-size:14px\"><strong>Phone:&nbsp;</strong>".$phone."</p></li> 
                              </ul></td> 
                              </tr> 
                              <tr> 
                              <td align=\"left\" style=\"padding:0;Margin:0\"> 
                              <ul> 
                                 <li style=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:16px;Margin-bottom:15px;margin-left:0;color:#333333;font-size:16px\"><p style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:14px;color:#333333;font-size:14px\"><strong>Address:&nbsp;</strong>".$address."</p></li> 
                              </ul></td> 
                              </tr> 
                              <tr> 
                              <td align=\"left\" style=\"padding:0;Margin:0\"> 
                              <ul> 
                                 <li style=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:16px;Margin-bottom:15px;margin-left:0;color:#333333;font-size:16px\"><p style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:14px;color:#333333;font-size:14px\"><strong>Where To:&nbsp;</strong>".$location."</p></li> 
                              </ul></td> 
                              </tr> 
                              <tr> 
                              <td align=\"left\" style=\"padding:0;Margin:0\"> 
                              <ul> 
                                 <li style=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:16px;Margin-bottom:15px;margin-left:0;color:#333333;font-size:16px\"><p style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:14px;color:#333333;font-size:14px\"><strong>How Many:&nbsp;</strong>".$guests."</p></li> 
                              </ul></td> 
                              </tr> 
                              <tr> 
                              <td align=\"left\" style=\"padding:0;Margin:0\"> 
                              <ul> 
                                 <li style=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:16px;Margin-bottom:15px;margin-left:0;color:#333333;font-size:16px\"><p style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:14px;color:#333333;font-size:14px\"><strong>Arrivals:&nbsp;</strong>".$arrivals."</p></li> 
                              </ul></td> 
                              </tr> 
                              <tr> 
                              <td align=\"left\" style=\"padding:0;Margin:0\"> 
                              <ul> 
                                 <li style=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:16px;Margin-bottom:15px;margin-left:0;color:#333333;font-size:16px\"><p style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:14px;color:#333333;font-size:14px\"><strong>Leaving:&nbsp;</strong>".$leaving."</p></li> 
                              </ul></td> 
                              </tr> 
                           </table></td> 
                        </tr> 
                        </table></td> 
                     </tr> 
                  </table></td> 
                  </tr> 
               </table></td> 
            </tr> 
            </table> 
         </div>  
         </body>
         </html>
      
      ";
      $mail->AltBody = '<h2>Travel.</h2><br><br><h4>YOUR REQUEST IS REGISTERED SUCCESSFULLY</h4><br>Thank you for contacting us!<br>Our team will reach out to you within 24hrs.<br><br>Following are the details you mentioned:<br><ul><li><strong>Name:&nbsp;</strong>'.$name.'</li><li><strong>Email:&nbsp;</strong>'.$email.'</li><li><strong>Phone:&nbsp;</strong>'.$phone.'</li><li><strong>Address:&nbsp;</strong>'.$address.'</li><li><strong>Where To:&nbsp;</strong>'.$location.'</li><li><strong>How Many:&nbsp;</strong>'.$guests.'</li><li><strong>Arrivals:&nbsp;</strong>'.$arrivals.'</li><li><strong>Leaving:&nbsp;</strong>'.$leaving.'</li><ul>';

      if(!$mail->send()) {
         echo "<script>alert('Message could not be sent! Mailer Error: ".$mail->ErrorInfo." !');</script>";
      } else {
         // echo "<script>alert('Message has been sent! to Recipient: ".$email."');</script>";
      }

      // -----------------------------------------------------------------------

      $mailNew = new PHPMailer();
      // SMTP settings
      $mailNew->isSMTP();
      $mailNew->Host = $host;
      $mailNew->SMTPAuth = true;
      $mailNew->Username = $emailUsername;
      $mailNew->Password = $emailPassword;
      $mailNew->SMTPSecure = 'ssl';
      $mailNew->SMTPDebug = 3;
      $mailNew->Port = $port;

      // Email settings
      $mailNew->setFrom('consultancy@alwayssahi.com', 'Travel.');
      $mailNew->addAddress('mandeepdalavi@gmail.com', 'Mandeep');
      // $mNewail->addAddress('ellen@example.com');
      $mailNew->addReplyTo('consultancy@alwayssahi.com', 'Travel.');
      // $mail->addCC('cc@example.com');
      // $mail->addBCC('');
      // if(isset($_FILES['file']) && $_FILES['file']['error'] == UPLOAD_ERR_OK) {
      //   $mail->addAttachment($_FILES['file']['tmp_name']);
      // }
      // $mail->addAttachment($path);
      // $mail->addAttachment($offerletter, 'new.jpg'); 
      
      //Content
      $mailNew->isHTML(true);                                  //Set email format to HTML
      $mailNew->Subject = 'Request Registered | Travel.';
      $mailNew->Body    = "
      
         <!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
         <html xmlns=\"http://www.w3.org/1999/xhtml\" xmlns:o=\"urn:schemas-microsoft-com:office:office\" style=\"font-family:arial, 'helvetica neue', helvetica, sans-serif\"> 
         <head> 
         <meta charset=\"UTF-8\"> 
         <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\"> 
         <meta name=\"x-apple-disable-message-reformatting\"> 
         <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"> 
         <meta content=\"telephone=no\" name=\"format-detection\"> 
         <title>Enquiry</title><!--[if (mso 16)]>
            <style type=\"text/css\">
            a {text-decoration: none;}
            </style>
            <![endif]--><!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]--><!--[if gte mso 9]>
         <xml>
            <o:OfficeDocumentSettings>
            <o:AllowPNG></o:AllowPNG>
            <o:PixelsPerInch>96</o:PixelsPerInch>
            </o:OfficeDocumentSettings>
         </xml>
         <![endif]--><!--[if !mso]><!-- --> 
         <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,700,700i\" rel=\"stylesheet\"><!--<![endif]--> 
         <style type=\"text/css\">
         #outlook a {
            padding:0;
         }
         .es-button {
            mso-style-priority:100!important;
            text-decoration:none!important;
         }
         a[x-apple-data-detectors] {
            color:inherit!important;
            text-decoration:none!important;
            font-size:inherit!important;
            font-family:inherit!important;
            font-weight:inherit!important;
            line-height:inherit!important;
         }
         .es-desk-hidden {
            display:none;
            float:left;
            overflow:hidden;
            width:0;
            max-height:0;
            line-height:0;
            mso-hide:all;
         }
         [data-ogsb] .es-button {
            border-width:0!important;
            padding:10px 20px 10px 20px!important;
         }
         .es-button-border:hover a.es-button, .es-button-border:hover button.es-button {
            background:#56d66b!important;
            border-color:#56d66b!important;
         }
         .es-button-border:hover {
            border-color:#42d159 #42d159 #42d159 #42d159!important;
            background:#56d66b!important;
         }
         @media only screen and (max-width:600px) {p, ul li, ol li, a { line-height:150%!important } h1, h2, h3, h1 a, h2 a, h3 a { line-height:120% } h1 { font-size:30px!important; text-align:left } h2 { font-size:24px!important; text-align:left } h3 { font-size:20px!important; text-align:left } .es-header-body h1 a, .es-content-body h1 a, .es-footer-body h1 a { font-size:30px!important; text-align:left } .es-header-body h2 a, .es-content-body h2 a, .es-footer-body h2 a { font-size:24px!important; text-align:left } .es-header-body h3 a, .es-content-body h3 a, .es-footer-body h3 a { font-size:20px!important; text-align:left } .es-menu td a { font-size:14px!important } .es-header-body p, .es-header-body ul li, .es-header-body ol li, .es-header-body a { font-size:14px!important } .es-content-body p, .es-content-body ul li, .es-content-body ol li, .es-content-body a { font-size:14px!important } .es-footer-body p, .es-footer-body ul li, .es-footer-body ol li, .es-footer-body a { font-size:14px!important } .es-infoblock p, .es-infoblock ul li, .es-infoblock ol li, .es-infoblock a { font-size:12px!important } *[class=\"gmail-fix\"] { display:none!important } .es-m-txt-c, .es-m-txt-c h1, .es-m-txt-c h2, .es-m-txt-c h3 { text-align:center!important } .es-m-txt-r, .es-m-txt-r h1, .es-m-txt-r h2, .es-m-txt-r h3 { text-align:right!important } .es-m-txt-l, .es-m-txt-l h1, .es-m-txt-l h2, .es-m-txt-l h3 { text-align:left!important } .es-m-txt-r img, .es-m-txt-c img, .es-m-txt-l img { display:inline!important } .es-button-border { display:inline-block!important } a.es-button, button.es-button { font-size:18px!important; display:inline-block!important } .es-adaptive table, .es-left, .es-right { width:100%!important } .es-content table, .es-header table, .es-footer table, .es-content, .es-footer, .es-header { width:100%!important; max-width:600px!important } .es-adapt-td { display:block!important; width:100%!important } .adapt-img { width:100%!important; height:auto!important } .es-m-p0 { padding:0px!important } .es-m-p0r { padding-right:0px!important } .es-m-p0l { padding-left:0px!important } .es-m-p0t { padding-top:0px!important } .es-m-p0b { padding-bottom:0!important } .es-m-p20b { padding-bottom:20px!important } .es-mobile-hidden, .es-hidden { display:none!important } tr.es-desk-hidden, td.es-desk-hidden, table.es-desk-hidden { width:auto!important; overflow:visible!important; float:none!important; max-height:inherit!important; line-height:inherit!important } tr.es-desk-hidden { display:table-row!important } table.es-desk-hidden { display:table!important } td.es-desk-menu-hidden { display:table-cell!important } .es-menu td { width:1%!important } table.es-table-not-adapt, .esd-block-html table { width:auto!important } table.es-social { display:inline-block!important } table.es-social td { display:inline-block!important } }
         </style> 
         </head> 
         <body data-new-gr-c-s-loaded=\"14.1016.0\" style=\"width:100%;font-family:arial, 'helvetica neue', helvetica, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0\"> 
         <div class=\"es-wrapper-color\" style=\"background-color:#F6F6F6\"><!--[if gte mso 9]>
                  <v:background xmlns:v=\"urn:schemas-microsoft-com:vml\" fill=\"t\">
                     <v:fill type=\"tile\" color=\"#f6f6f6\"></v:fill>
                  </v:background>
               <![endif]--> 
            <table class=\"es-wrapper\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top\"> 
            <tr> 
               <td valign=\"top\" style=\"padding:0;Margin:0\"> 
               <table class=\"es-header\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top\"> 
                  <tr> 
                  <td align=\"center\" style=\"padding:0;Margin:0\"> 
                  <table class=\"es-header-body\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#ffffff\" align=\"center\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px\"> 
                     <tr> 
                     <td align=\"left\" bgcolor=\"#efefef\" style=\"Margin:0;padding-top:10px;padding-bottom:10px;padding-left:20px;padding-right:20px;background-color:#efefef\"><!--[if mso]><table style=\"width:560px\" cellpadding=\"0\" cellspacing=\"0\"><tr><td style=\"width:350px\" valign=\"top\"><![endif]--> 
                        <table cellspacing=\"0\" cellpadding=\"0\" align=\"left\" class=\"es-left\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left\"> 
                        <tr> 
                           <td class=\"es-m-p20b\" align=\"left\" style=\"padding:0;Margin:0;width:300px\"> 
                           <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" role=\"presentation\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> 
                              <tr> 
                              <td align=\"center\" style=\"padding:0;Margin:0\"><p style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'source sans pro', 'helvetica neue', helvetica, arial, sans-serif;line-height:45px;color:#333333;font-size:30px;text-align:left\">Travel.</p></td> 
                              </tr> 
                           </table></td> 
                        </tr> 
                        </table><!--[if mso]></td><td style=\"width:20px\"></td><td style=\"width:190px\" valign=\"top\"><![endif]--> 
                        <table cellpadding=\"0\" cellspacing=\"0\" class=\"es-right\" align=\"right\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right\"> 
                        <tr> 
                           <td align=\"left\" style=\"padding:0;Margin:0;width:250px\"> 
                           <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;border-bottom:2px solid #028efe\" role=\"presentation\"> 
                              <tr> 
                              <td align=\"left\" style=\"padding:0;Margin:0;padding-top:10px;padding-left:10px\"><p style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:28px;color:#333333;font-size:14px\"><strong>Date:</strong>&nbsp;".$currDate."</p></td> 
                              </tr> 
                           </table></td> 
                        </tr> 
                        </table><!--[if mso]></td></tr></table><![endif]--></td> 
                     </tr> 
                  </table></td> 
                  </tr> 
               </table> 
               <table class=\"es-content\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%\"> 
                  <tr> 
                  <td align=\"center\" style=\"padding:0;Margin:0\"> 
                  <table class=\"es-content-body\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#ffffff\" align=\"center\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px\"> 
                     <tr> 
                     <td align=\"left\" style=\"padding:0;Margin:0;padding-top:20px;padding-left:20px;padding-right:20px\"> 
                        <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> 
                        <tr> 
                           <td valign=\"top\" align=\"center\" style=\"padding:0;Margin:0;width:560px\"> 
                           <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" role=\"presentation\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> 
                              <tr> 
                              <td align=\"center\" style=\"padding:0;Margin:0;font-size:0px\"><img class=\"adapt-img\" src=\"https://pvuwmt.stripocdn.email/content/guids/CABINET_f18baddb53736bb3d68076652c362798/images/enquiryremovebgpreview.png\" alt style=\"display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic\" width=\"560\" height=\"222\"></td> 
                              </tr> 
                           </table></td> 
                        </tr> 
                        </table></td> 
                     </tr> 
                  </table></td> 
                  </tr> 
               </table> 
               <table class=\"es-footer\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top\"> 
                  <tr> 
                  <td align=\"center\" style=\"padding:0;Margin:0\"> 
                  <table class=\"es-footer-body\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#ffffff\" align=\"center\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px\"> 
                     <tr> 
                     <td align=\"left\" style=\"Margin:0;padding-top:20px;padding-bottom:20px;padding-left:20px;padding-right:20px\"> 
                        <table cellspacing=\"0\" cellpadding=\"0\" width=\"100%\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> 
                        <tr> 
                           <td align=\"left\" style=\"padding:0;Margin:0;width:560px\"> 
                           <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" role=\"presentation\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px\"> 
                              <tr> 
                              <td align=\"left\" style=\"padding:5px;Margin:0\"><p style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:24px;color:#333333;font-size:16px\"><strong>Name:&nbsp;</strong>".$name."</p></td> 
                              </tr> 
                              <tr> 
                              <td align=\"left\" style=\"padding:5px;Margin:0\"><p style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:24px;color:#333333;font-size:16px\"><strong>Email:&nbsp;</strong>".$email."</p></td> 
                              </tr> 
                              <tr> 
                              <td align=\"left\" style=\"padding:5px;Margin:0\"><p style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:24px;color:#333333;font-size:16px\"><strong>Phone:&nbsp;</strong>".$phone."</p></td> 
                              </tr> 
                              <tr> 
                              <td align=\"left\" style=\"padding:5px;Margin:0\"><p style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:24px;color:#333333;font-size:16px\"><strong>Address:&nbsp;</strong>".$address."</p></td> 
                              </tr> 
                              <tr> 
                              <td align=\"left\" style=\"padding:5px;Margin:0\"><p style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:24px;color:#333333;font-size:16px\"><strong>Where TO:&nbsp;</strong>".$location."</p></td> 
                              </tr> 
                              <tr> 
                              <td align=\"left\" style=\"padding:5px;Margin:0\"><p style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:24px;color:#333333;font-size:16px\"><strong>How Many:&nbsp;</strong>".$guests."</p></td> 
                              </tr> 
                              <tr> 
                              <td align=\"left\" style=\"padding:5px;Margin:0\"><p style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:24px;color:#333333;font-size:16px\"><strong>Arrivals:&nbsp;</strong>".$arrivals."</p></td> 
                              </tr> 
                              <tr> 
                              <td align=\"left\" style=\"padding:5px;Margin:0\"><p style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:24px;color:#333333;font-size:16px\"><strong>Leaving:&nbsp;</strong>".$leaving."</p></td> 
                              </tr> 
                           </table></td> 
                        </tr> 
                        </table></td> 
                     </tr> 
                  </table></td> 
                  </tr> 
               </table></td> 
            </tr> 
            </table> 
         </div>  
         </body>
         </html>
      
      ";
      $mailNew->AltBody = '<h2>Travel.</h2><br><br><h4>NEW ENQUIRY RAISED</h4><br><strong>DATE:&nbsp;'.$currDate.'</strong><br>Details mentioned by customer:<br><ul><li><strong>Name:&nbsp;</strong>'.$name.'</li><li><strong>Email:&nbsp;</strong>'.$email.'</li><li><strong>Phone:&nbsp;</strong>'.$phone.'</li><li><strong>Address:&nbsp;</strong>'.$address.'</li><li><strong>Where To:&nbsp;</strong>'.$location.'</li><li><strong>How Many:&nbsp;</strong>'.$guests.'</li><li><strong>Arrivals:&nbsp;</strong>'.$arrivals.'</li><li><strong>Leaving:&nbsp;</strong>'.$leaving.'</li><ul>';

      if(!$mailNew->send()) {
         echo "<script>alert('Message could not be sent! Mailer Error: ".$mailNew->ErrorInfo." !');</script>";
      } else {
         echo "<script>alert('Your Request has been sent!');</script>";
         // echo "<script>alert('Message has been sent! to Recipient: ".$email."');</script>";
      }

      header('location:book.php'); 

   }else{
      echo "<script>alert('something went wrong please try again!')</script>";
   }

?>