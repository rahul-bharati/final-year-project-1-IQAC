<?php include "../../../config/config.php"; ?>
<div class="workshops">
    <hr class="margin-top-small margin-bottom-small">
    <h2 class="heading__secondary margin-bottom-small">Workshops</h2>
    <div class="result">
        <?php
            $sql = "select iqac.report.id as rid,iqac.report.ref_id as id,iqac.report.dateOfCreation as date,iqac.workshop.title as title,iqac.workshop.dateOfConduct as date_conducted,iqac.report.status as status,iqac.report.event_type as type,iqac.report.department as dept from iqac.report inner join iqac.workshop on iqac.report.ref_id=iqac.workshop.id where iqac.report.event_type=1 and iqac.report.status='unapproved' order by iqac.report.dateOfCreation asc";
            $result = $con->query($sql);
            if($result->num_rows > 0)
            {
                echo "<table class=\"table\">";
                echo "<tr><th>Date time</th><th>Department</th><th>Title</th><th>Event Date</th><th>Status</th></tr>";
                while($row = $result->fetch_assoc())
                {
                    echo "<tr>";
                    echo "<td>".$row["date"]."</td><td>".$row["dept"]."</td><td>"."<a href=\"../view/view.php?id=".$row["id"]."&type=".$row["type"]."\" class=\"link\">".$row["title"]."</a></td><td>".$row["date_conducted"]."</td><td><a onclick=\"approve(this,".$row["rid"].")\" class=\"link-btn\">Approve</a></td>";
                    echo "</tr>";
                }
                echo "</table>";
            }
        ?>
    </div>
</div>
<div class="seminars">
    <hr class="margin-top-small margin-bottom-small">
    <h2 class="heading__secondary margin-bottom-small">Seminars</h2>
    <div class="result">
        <?php
            $sql = "select iqac.report.id as rid,iqac.report.ref_id as id,iqac.report.dateOfCreation as date,iqac.seminars.title as title,iqac.seminars.dateOfConduct as date_conducted,iqac.report.status as status,iqac.report.event_type as type,iqac.report.department as dept from iqac.report inner join iqac.seminars on iqac.report.ref_id=iqac.seminars.id where iqac.report.event_type=2  and iqac.report.status='unapproved' order by iqac.report.dateOfCreation asc";
            $result = $con->query($sql);
            if($result->num_rows > 0)
            {
                echo "<table class=\"table\">";
                echo "<tr><th>Date time</th><th>Department</th><th>Title</th><th>Event Date</th><th>Status</th></tr>";
                while($row = $result->fetch_assoc())
                {
                    echo "<tr>";
                    echo "<td>".$row["date"]."</td><td>".$row["dept"]."</td><td>"."<a href=\"../view/view.php?id=".$row["id"]."&type=".$row["type"]."\" class=\"link\">".$row["title"]."</a></td><td>".$row["date_conducted"]."</td><td><a onclick=\"\approve(this,".$row["rid"].")\" class=\"link-btn\">Approve</a></td>";
                    echo "</tr>";
                }
                echo "</table>";
            }
        ?>
    </div>
</div>
<div class="guestLectures">
    <hr class="margin-top-small margin-bottom-small">
    <h2 class="heading__secondary margin-bottom-small">Guest Lectures</h2>
    <div class="result">
        <?php
            $sql = "select iqac.report.id as rid,iqac.report.ref_id as id,iqac.report.dateOfCreation as date,iqac.guest_lectures.title as title,iqac.guest_lectures.dateOfConduct as date_conducted,iqac.report.status as status,iqac.report.event_type as type,iqac.report.department as dept from iqac.report inner join iqac.guest_lectures on iqac.report.ref_id=iqac.guest_lectures.id where iqac.report.event_type=3 and iqac.report.status='unapproved' order by iqac.report.dateOfCreation asc";
            $result = $con->query($sql);
            if($result->num_rows > 0)
            {
                echo "<table class=\"table\">";
                echo "<tr><th>Date time</th><th>Department</th><th>Title</th><th>Event Date</th><th>Status</th></tr>";
                while($row = $result->fetch_assoc())
                {
                    echo "<tr>";
                    echo "<td>".$row["date"]."</td><td>".$row["dept"]."</td><td>"."<a href=\"../view/view.php?id=".$row["id"]."&type=".$row["type"]."\" class=\"link\">".$row["title"]."</a></td><td>".$row["date_conducted"]."</td><td><a onclick=\"\approve(this,".$row["rid"].")\" class=\"link-btn\">Approve</a></td>";
                    echo "</tr>";
                }
                echo "</table>";
            }
        ?>
    </div>
</div>
<div class="iv">
    <hr class="margin-top-small margin-bottom-small">
    <h2 class="heading__secondary margin-bottom-small">Industrial Visits</h2>
    <div class="result">
        <?php
            $sql = "select iqac.report.id as rid,iqac.report.ref_id as id,iqac.report.dateOfCreation as date,iqac.iv.title as title,iqac.iv.dateOfConduct as date_conducted,iqac.report.status as status,iqac.report.event_type as type,iqac.report.department as dept from iqac.report inner join iqac.iv on iqac.report.ref_id=iqac.iv.id where iqac.report.event_type=4  and iqac.report.status='unapproved' order by iqac.report.dateOfCreation asc";
            $result = $con->query($sql);
            if($result->num_rows > 0)
            {
                echo "<table class=\"table\">";
                echo "<tr><th>Date time</th><th>Department</th><th>Title</th><th>Event Date</th><th>Status</th></tr>";
                while($row = $result->fetch_assoc())
                {
                    echo "<tr>";
                    echo "<td>".$row["date"]."</td><td>".$row["dept"]."</td><td>"."<a href=\"../view/view.php?id=".$row["id"]."&type=".$row["type"]."\" class=\"link\">".$row["title"]."</a></td><td>".$row["date_conducted"]."</td><td><a onclick=\"\approve(this,".$row["rid"].")\" class=\"link-btn\">Approve</a></td>";
                    echo "</tr>";
                }
                echo "</table>";
            }
        ?>
    </div>
</div>
<div class="events">
    <hr class="margin-top-small margin-bottom-small">
    <h2 class="heading__secondary margin-bottom-small">Events</h2>
    <div class="result">
        <?php
            $sql = "select iqac.report.id as rid,iqac.report.ref_id as id,iqac.report.dateOfCreation as date,iqac.events.title as title,iqac.events.dateOfConduct as date_conducted,iqac.report.status as status,iqac.report.event_type as type,iqac.report.department as dept from iqac.report inner join iqac.events on iqac.report.ref_id=iqac.events.id where iqac.report.event_type=5  and iqac.report.status='unapproved' order by iqac.report.dateOfCreation asc";
            $result = $con->query($sql);
            if($result->num_rows > 0)
            {
                echo "<table class=\"table\">";
                echo "<tr><th>Date time</th><th>Department</th><th>Title</th><th>Event Date</th><th>Status</th></tr>";
                while($row = $result->fetch_assoc())
                {
                    echo "<tr>";
                    echo "<td>".$row["date"]."</td><td>".$row["dept"]."</td><td>"."<a href=\"../view/view.php?id=".$row["id"]."&type=".$row["type"]."\" class=\"link\">".$row["title"]."</a></td><td>".$row["date_conducted"]."</td><td><a onclick=\"\approve(this,".$row["rid"].")\" class=\"link-btn\">Approve</a></td>";
                    echo "</tr>";
                }
                echo "</table>";
            }
        ?>
    </div>
</div>
<script>checkCat();</script>