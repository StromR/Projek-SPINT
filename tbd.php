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


?>