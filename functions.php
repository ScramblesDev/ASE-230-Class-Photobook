<?php
    //FUNCTIONS
    function calculateAge($birthdate) {
        $date1=date_create($birthdate);
        $todaysdate = date_create(date('Y-m-d', time()));

        $diff=date_diff($date1, $todaysdate);
        $days = $diff->format("%a");

        $years = (int)($days/365);

        echo 'This person is ' . $years . ' years old.';
    }

    function calculateHowLongAgo($birthdate) {
        $date1=date_create($birthdate);
        $todaysdate = date_create(date('Y-m-d', time()));

        $diff=date_diff($date1, $todaysdate);
        $days = $diff->format("%a");

        $years = (int)($days/365);
        $months = (int)(($days%365)/30);
        $numdays = (int)(($days%365)%30);

        if($numdays != 0) {
            echo $years . " years, " . $months . " months, and " . $numdays . " days.";
        }
        else {
            echo $years . " years, and " . $months . " months.";
        }
    }
    //remember to use echo calculateHowLongAgo($students[0]['dateofbirth']);

    function renderCard($student,$i) {
        ?>
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <!-- Team Thumb-->
                <div class="advisor_thumb"><img src="<?php echo $student['picture']; ?>" alt="">
                    <!-- Social Info-->
                    <div class="social-info"><a href="https://www.facebook.com/seth.beesley.7"><i class="fa fa-facebook"></i></a><a href="https://twitter.com/scramblesart"><i class="fa fa-twitter"></i></a><a href="https://www.linkedin.com/in/seth-beesley-2369b41b2/"><i class="fa fa-linkedin"></i></a></div>
                </div>
                <!-- Team Details-->
                <div class="single_advisor_details_info">
                    <h6><?php echo $student['name']; ?></h6>
                    <h6>Age: <?php calculateAge($student['dateofbirth']); ?></h6>
                    <h6>Exact age: <?php calculateHowLongAgo($student['dateofbirth']); ?></h6>
                    <a href="detail.php?id=<?= $i ?>&name=<?= $student['name'] ?>">View Student</a>
                </div>
            </div>
        </div>

        <?php
    }
?>