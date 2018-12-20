<html>
   <head>
      <title>Mail System Gietkaryaneeti.in</title>
   </head>
   <body>
      <?php
         //including file
         include("connect_online.php");
         // stablishing connection
         mysql_connect($hostname,$username,$pwd);
         // selecting database
         mysql_select_db($db);
         // preparing select query
         $event_name="'artgallery'";
         $event_name_subject="Art-Gallery";
         $work_as="'leader'";
         $select="SELECT email,group_name,event_name,first_name,last_name FROM function WHERE event_name=$event_name AND work_as=$work_as";
        // echo "<br>$select";
         $res=mysql_query($select);
         $count=mysql_num_rows($res);
         if ($count>0) 
         {
            $i=1;
            while($row=mysql_fetch_assoc($res))
            {
               // to
               $to = $row['email'];
               echo $i."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$to."&nbsp;&nbsp;&nbsp;&nbsp;";
               // subject
               $subject = $event_name_subject." - GietKaryneet.in";
               // message header 
               $message = "<font color='#454'><h1 align='center'>GIETKARKYANEETI 2K17</h1></font>";
               if (!($row['group_name']==""))
               {
                  $message.="<p>Hello &nbsp;:-&nbsp;<b>".ucfirst($row['group_name'])."</b></p>";
               }
               else
               {
                  $message.="<p>Hello &nbsp;&nbsp;&nbsp;:-&nbsp;&nbsp;".ucfirst($row['first_name'])." ".ucfirst($row['last_name'])."</p>";
               }
               $message.="<p>Your Event Is On <b>02-09-2017</b> @ <b>04:30 PM</b></p>";
               $message.="<h3>Venue :- EB CORRIDOR(First-floor)</h3>";
          /*     $message.="<pre>
                              your message
                              like address and other details
                              santosh
                           </pre>";  */
               $message.="<p>Please Come On Time<br><b>Technical Team <a href='http://gietkaryaneeti.in' target='_blank'>GietKaryaneeti.in</a></b></p>";
               //message footer
               $message.="<p><b>Don't Reply</b><br>This Is System Generated Mail.<br>If You Have Any Query Please Contact To <b>Department Of Electronics</b></p>";
               $header = "From:GietKaryaneeti.in<onsihero@gmail.com> \r\n";
               $header .= "Cc:GietKaryaneeti.in<onsihero@gmail.com> \r\n";
               $header .= "MIME-Version: 1.0\r\n";
               $header .= "Content-type: text/html\r\n";   
               $retval = mail ($to,$subject,$message,$header);
               if( $retval == true ) 
               {
                  echo "Message sent successfully...<br>";
               }
               else 
               {
                  echo "Message could not be sent... please look here<br>";
               }
               $i++;   
            }
         } 
      ?>
   </body>
</html>