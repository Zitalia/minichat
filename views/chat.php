<?php

				$allmsg = $bdd->Query('SELECT pseudo, message FROM user, messages WHERE user.id=messages.userID ORDER BY messages.ID ASC LIMIT 0,20');
				while($msg = $allmsg->Fetch())
				{
				

				 echo  $msg['pseudo'] . ' : ' . $msg['message'] . '<br />';

				
				}

			?>