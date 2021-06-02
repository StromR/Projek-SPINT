<?php

// Buat prosedur
$sql = "CALL filterumur($date1, $date2)";
                            <select name=year style="font-size:18px;" required>
								<?php
								$year = 1901;
								while ($year <= 2021) {
									echo "<option> $year
					        </option>";
									$year++;
								}
								?>
							</select>
							<select name=month style="font-size:18px;" required>
								<option>01</option>
								<option>02</option>
								<option>03</option>
								<option>04</option>
								<option>05</option>
								<option>06</option>
								<option>07</option>
								<option>08</option>
								<option>09</option>
								<option>10</option>
								<option>11</option>
								<option>12</option>
							</select>
                            <select name=day style="font-size:18px;" required>
								<?php

								$day = 1;
								while ($day <= 31) {
									echo "<option> $day
					                </option>";
									$day++;
								}
								?>
							</select>

// Filter game
$result = mysqli_query($con,"SELECT * FROM user WHERE email = '$email' and password='$password'");
SELECT game FROM user
EXCEPT
game = $choosegame


// DESC
$rankmmr = mysqli_query($con,"SELECT *, DENSE_RANK() OVER (ORDER BY mmr DESC) as rank FROM user");

// ASC
$rankmmr = mysqli_query($con,"SELECT *, DENSE_RANK() OVER (ORDER BY mmr ASC) as rank FROM user");


SELECT * FROM user ORDER BY username DESC;


else if(isset($_GET['rank'])){
  $query = mysql_query("SELECT *, DENSE_RANK() OVER (ORDER BY mmr ASC) as rank FROM user");

}



else if(isset($_GET['rank']))
                 {
                    $con = mysqli_connect('localhost','root','','spintdb');
                    $query = "SELECT *, DENSE_RANK() OVER (ORDER BY mmr DESC) as rank FROM user";
                    $query_run = mysqli_query($con, $query);

                  if(mysqli_num_rows($query_run) > 0)
                  {
                      foreach($query_run as $items)
                      {
                          ?>
                          <tr>
                              <td><?= $items['user_id']; ?></td>
                              <td><?= $items['username']; ?></td>
                              <td><?= $items['email']; ?></td>
                              <td><?= $items['birthday']; ?></td>
                              <td><?= $items['game']; ?></td>
                              <td><?= $items['mmr']; ?></td>
                          </tr>
                          <?php
                      }
                  }
                 }
?>