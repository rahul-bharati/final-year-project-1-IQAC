<?php include "includes/header.php"; ?>

            <div class="form-container">
                <h2 class="heading__secondary margin-bottom-small">Change Password</h2>
                <form action="ajax/calls/change.php" class="form" method="POST">
                <div class="form__group">
                    <select name="Department" id="dep" class="form__select">
                        <option value="">--Select--</option>
                        <?php
                            $sql = "select Department_name from iqac.facultyDept";
                            $result = $con->query($sql);
                            if($result->num_rows > 0)
                            {
                                while($row = $result->fetch_assoc())
                                {
                                    echo "<option>".$row["Department_name"]."</option>";
                                }
                            }
                        ?>
                    </select>
                </div>
                <div class="form__group">
                    <input type="password" name="password" id="password" class="form__input" placeholder="New Password" required autocomplete="off">
                    <label for="password" class="form__label">New Password</label>
                </div>
                <div class="form__group margin-top-small">
                    <button class="btn">Change Password &rarr;</button>`
                </div>
            </div>
<?php include "includes/footer.php"; ?>