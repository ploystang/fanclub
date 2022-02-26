<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>fanclub activity</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>

</head>


<body>

    <style>
        .container-fluid {
            margin-top: 0px;
            padding: 0px 0px;
        }


        header {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            padding: 30px 100px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 10000;
        }




        header .logo {
            color: #fff;
            font-weight: 700;
            text-decoration: none;
            font-size: 2em;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        header ul {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 150px;
        }

        header ul li {
            list-style: none;
            margin-left: 80px;
        }

        header ul li a {
            text-decoration: none;
            padding: 6px 15px;
            color: #fff;
            border-radius: 20px;
        }

        header ul li a:hover,
        header ul li a.active {
            background: #fff;
            color: #e45;
        }



        section img#clouds {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 160%;
            object-fit: cover;
            z-index: -1;
            margin-top: 0px;
            padding: 0px 0px;

        }

        .bar a {
            position: absolute;
            top: -60px;
        }

        .bar a img {
            z-index: -1;
            position: absolute;
            top: 0;
            transition: all .5s ease-in-out;
        }


        body {
            background: linear-gradient(180deg, rgba(109, 18, 157, 0.72) 0%, rgba(255, 151, 135, 0.83) 100%);
            /* background-color: #f1e0ff ; */
        }
    </style>

    <body>

        <header>
            <center><a href="#" class="logo">FANCLUB</a></center>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Artist</a></li>
                <li><a href="#" class="active">Event</a></li>
                <li><a href="#">Profile</a></li>
            </ul>
        </header>

        <section>
            <div>
                <img src="https://bit.ly/3tb7807" id="clouds">
            </div>
        </section>


        <form action="" method="post">
            <?php
            include_once('functions.php');
            $activity = new activity();
            $sql = $activity->activity();
            while ($row = mysqli_fetch_array($sql)) {

            ?>
                <div class="container"><br><br><br><br><br>
                    <center><?php echo '<img src="data:imafe/jpg;base64,' . base64_encode($row['image']) 
                    . '"alt="Img"  width="700"  height="300">'; ?></center><br>
                </div>

                <div class="container">
                    <div class="panel-default bg-transparent">
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label>ประเภท</label><?php echo $row['eventType'] ?>
                            </div>

                            <div class="form-group col-md-2">
                                <label>หมายเลขกิจกรรม</label>
                                <?php echo $row['Event_ID'] ?>
                            </div>

                            <div class="form-group col-md-2">
                                <label>ศิลปิน</label>
                                <?php echo $row['artistName'] ?>
                            </div>

                            <div class="form-group col-md-4">
                                <label>ชื่อกิจกรรม</label>
                                <?php echo $row['eventName'] ?>
                            </div>
                        </div>



                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label>วันที่จัด</label>
                                <?php echo $row['eventDate'] ?>
                            </div>

                            <div class="form-group col-md-2">
                                <label>เวลาที่จัด</label>
                                <?php echo $row['TimeEvent'] ?>
                            </div>

                            <div class="form-group col-md-3">
                                <label>สถานที่จัด</label>
                                <?php echo $row['place'] ?>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label>วันที่เปิดจองบูธ</label>
                                <?php echo $row['booking_date'] ?>
                            </div>

                            <div class="form-group col-md-3">
                                <label>เวลาที่เปิดจองบูธ</label>
                                <?php echo $row['booking_time'] ?>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-10">
                                <label>รายละเอียดเพิ่มเติม</label>
                                <?php echo $row['detail'] ?>
                            </div>
                        </div>

                        </section>
                    <?php
                }
                    ?>

                    <?php

                    $bank = new bank();
                    $sqlb = $bank->bank();
                    while ($rowb = mysqli_fetch_array($sqlb)) {

                    ?>

                        <div class="container">
                            <div class="panel-default bg-transparent">
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label>เลขที่บัญชี</label>
                                        <?php echo $rowb['BankID'] ?>
                                    </div>


                                    <div class="form-group col-md-3">
                                        <label>ธนาคาร</label>
                                        <?php echo $rowb['BankName'] ?>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>ชื่อบัญชี</label>
                                        <?php echo $rowb['BankNameAcc'] ?>
                                    </div>

                                </div>

                            </div>
                        </div>

                    <?php
                    }
                    ?>

                    <?php
                    $fanart_meeting = new fanart_meeting();
                    $sqlf = $fanart_meeting->fanart_meeting();
                    while ($rowf = mysqli_fetch_array($sqlf)) {
                    ?>

                        <div class="container">
                            <div class="panel-default bg-transparent">
                                <div class="form-row">

                                    <div class="form-group col-md-3">
                                        <label>จำนวนที่เปิดจองบูธ</label>
                                        <?php echo $rowf['NumofBooth'], "  บูธ" ?>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label>จำนวนโซนที่เปิดจอง</label>
                                        <?php echo $rowf['NumofZone'], "  โซน" ?>
                                    </div>

                                </div>
       
                            <?php
                        }
                            ?>


                            </div>
                        </div>

                        <?php

                        $activity = new activity();
                        $sql = $activity->activity();
                        while ($row = mysqli_fetch_array($sql)) {

                        ?>
                            <center><?php echo '<img src="data:imafe/jpg;base64,' . base64_encode($row['chart_picture']) 
                            . '"alt="Img"  width="700"  height="300">'; ?></center>

                        <?php
                        }
                        ?>


                        <div class="container">

                            <table class="table">

                                <br>
                                <thead>
                                    <th class="badge badge-pill col-md-3" style="background-color:#011452 ">โซน</th>
                                    <th class="badge badge-pill col-md-3" style="background-color:#011452">จำนวน</th>
                                    <th class="badge badge-pill col-md-3" style="background-color:#011452">ราคา</th>
                                    <th class="badge badge-pill col-md-3" style="background-color:#011452">ขนาดบูธ</th>

                                </thead>

                                <tbody>
                                    <?php

                                    $datazone = new datazone();
                                    $sql1 = $datazone->datazone();
                                    while ($row1 = mysqli_fetch_array($sql1)) {

                                    ?>
                                        <tr>
                                            <center>
                                                <td class="badge col-md-3" style="background-color:#7d7e81 "><?php echo $row1['zone']; ?></td>
                                                <td class="badge col-md-3" style="background-color:#7d7e81 "><?php echo $row1['NumOfeachinZone']; ?></td>
                                                <td class="badge col-md-3" style="background-color:#7d7e81 "><?php echo $row1['PriceZone'], "  ต่อวัน"; ?></td>
                                                <td class="badge col-md-3" style="background-color:#7d7e81 "><?php echo $row1['area']; ?></td>
                                            </center>
                                        </tr>

                                    <?php
                                    }
                                    ?>

                                </tbody>
                            </table>

                        </div>
                        </section>


                        <center>
                            <button type="button" class="btn btn-success"><a href="/fanclub/booking.php" class="text-light" class="contianner text-center">จองบูธ</button>

                            <button type="button" class="btn btn-danger"><a href="/fanclub/booking.php" class="text-light" class="contianner text-center">ยกเลิก</button><br><br>
                        </center>

                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
                        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
                        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

    </body>

</html>