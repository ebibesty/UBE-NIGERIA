	<?php 


					while ($row = mysqli_fetch_assoc($result))
					{
					?>
					<td><?php echo $row ['id'];?></td>
					<td><?php "UPDATE `messagedb`.`message` SET `name` = '$name' WHERE `message`.`name` =$name" $row ['name'];?></td>
					<td><?php "UPDATE `messagedb`.`message` SET `body` = '$body' WHERE `message`.`body` =$body" $row ['body'];?></td>
					<td><?php "UPDATE `messagedb`.`message` SET `priority` = '$priority' WHERE `message`.`priority` =$priority" $row ['priority'];?></td>
					<td><?php "UPDATE `messagedb`.`message` SET `type` = '$type' WHERE `message`.`type` =name" $row ['type'];?></td>
					<!-- <td><button class="del">Delete</button></td> -->
					<td><a href="view.php?name=<?php  echo $row["name"]  ?>">Edit</td>
					<td><a href="view.php?id=<?php  echo $row["id"]  ?>">Delete</td>

					</tr>
					<?php
					}
					?>
