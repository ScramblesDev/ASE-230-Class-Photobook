<?php
    $students = [
        [
            'name' => 'Seth Beesley',
            'year' => '3',
            'picture' => 'https://media-exp1.licdn.com/dms/image/C5603AQHZUFNBdtTHnQ/profile-displayphoto-shrink_200_200/0/1657853623221?e=1667433600&v=beta&t=wPbXk1nDxBycVUh2Gcmfhw_YioMPFLr4x5egJ5u6P2o'
        ],
        [
            'name' => 'Trevor Erwin',
            'year' => '1',
            'picture' => 'https://media-exp1.licdn.com/dms/image/C5603AQHzKFBFPeE_nw/profile-displayphoto-shrink_200_200/0/1625721961776?e=1668643200&v=beta&t=U-TIrrAa_J1h0A7rNjrJ19bTrHjsOueL7BJXq8XV26w'
        ],
        [
            'name' => 'Alex Nguyen',
            'year' => '2',
            'picture' => 'https://media-exp1.licdn.com/dms/image/C5603AQE6LnQO5uam4w/profile-displayphoto-shrink_200_200/0/1604636270628?e=1668643200&v=beta&t=A7X53Qh-d9akCZxvge2a9VWEwppVb-36lLPXOBIZoRI'
        ],
        [
            'name' => 'David Rodriguez',
            'year' => '4',
            'picture' => 'https://media-exp1.licdn.com/dms/image/C5603AQFnFWwkD1d2Pw/profile-displayphoto-shrink_200_200/0/1517251281944?e=1668643200&v=beta&t=9CCRKo87tqBLfgo0xhz9xAqPHGj4JJn2lhOZ9zSgRJs'
        ]
    ];
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- https://www.bootdey.com/snippets/view/single-advisor-profile#html -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="assets/css/index.css" />
        <title><?php echo "ASE 230 - class of Fall 2022"; ?></title>
    </head>

    <body>
        <div class="container text-center">
            <h1> <?php echo "This is ASE 230 - class of Fall 2022"; ?></h1>
        </div>

        <div class="container">
            
            <div class="row justify-content-center">
                <div class="col-12 col-sm-8 col-lg-6">
                    <!-- Section Heading-->
                    <div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <h3>Our Creative <span> Team</span></h3>
                        <p>Appland is completely creative, lightweight, clean &amp; super responsive app landing page.</p>
                        <div class="line"></div>
                    </div>
                </div>
            </div>

            <!--List each student from the array-->
            <div class="row">
                <?php
                foreach ($students as $student) { ?>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                            <!-- Team Thumb-->
                            <div class="advisor_thumb"><a href="detail.php"><img src="<?php echo $student['picture']; ?>" alt=""></a>
                                <!-- Social Info-->
                                <div class="social-info"><a href="https://www.facebook.com/seth.beesley.7"><i class="fa fa-facebook"></i></a><a href="https://twitter.com/scramblesart"><i class="fa fa-twitter"></i></a><a href="https://www.linkedin.com/in/seth-beesley-2369b41b2/"><i class="fa fa-linkedin"></i></a></div>
                            </div>
                            <!-- Team Details-->
                            <div class="single_advisor_details_info">
                                <h6><?php echo $student['name']; ?></h6>
                                <p>YEAR <?php echo $student['year'] ?></p>
                                <p class="designation">Software Engineering Student</p>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    </body>
</html>