<?php include("../conn.php"); ?>

<div class="col-12 col-sm-11 col-md-9 bg-light py-3">
    <h1>Admin Dashboard</h1>
    <div class="row">
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-start-primary py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col me-2">
                            <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>Today bookings</span></div>
                            <div class="text-dark fw-bold h5 mb-0"><span>55</span></div>
                        </div>
                        <div class="col-auto"><i class="fas fa-ticket-alt fa-2x text-gray-300" style="color: var(--bs-purple);"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-start-success py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col me-2">
                            <div class="text-uppercase text-success fw-bold text-xs mb-1"><span>Total no of&nbsp; bus listed</span></div>
                            <div class="text-dark fw-bold h5 mb-0"><span>
                                    <?php
                                    $query = "SELECT COUNT(*) AS student_count FROM vehicledetails WHERE VehicleType = 'BUS'";
                                    $result = mysqli_query($conn, $query);
                                    if ($result) {
                                        $row = mysqli_fetch_assoc($result);
                                        $studentCount = $row['student_count'];
                                        echo  $studentCount;
                                    } else {
                                        echo "0";
                                    }

                                    ?>
                                </span></div>
                        </div>
                        <div class="col-auto"><i class="fas fa-bus fa-2x text-gray-300"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-start-info py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col me-2">
                            <div class="text-uppercase text-info fw-bold text-xs mb-1"><span>total number of taxi listed</span></div>
                            <div class="row g-0 align-items-center">
                                <div class="col-auto">
                                    <div class="text-dark fw-bold h5 mb-0 me-3"><span>

                                            <?php
                                            $query = "SELECT COUNT(*) AS student_count FROM vehicledetails WHERE VehicleType = 'TAXI'";
                                            $result = mysqli_query($conn, $query);
                                            if ($result) {
                                                $row = mysqli_fetch_assoc($result);
                                                $studentCount = $row['student_count'];
                                                echo  $studentCount;
                                            } else {
                                                echo "0";
                                            }

                                            ?>


                                        </span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto"><i class="fas fa-taxi fa-2x text-gray-300"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-start-warning py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col me-2">
                            <div class="text-uppercase text-warning fw-bold text-xs mb-1"><span>agent Pending Requests</span></div>
                            <div class="text-dark fw-bold h5 mb-0"><span>
                                    <?php
                                    $query = "SELECT COUNT(*) AS student_count FROM agentregistration WHERE status = 'NA'";
                                    $result = mysqli_query($conn, $query);
                                    if ($result) {
                                        $row = mysqli_fetch_assoc($result);
                                        $studentCount = $row['student_count'];
                                        echo  $studentCount;
                                    } else {
                                        echo "0";
                                    }

                                    ?>


                                </span></div>
                        </div>
                        <div class="col-auto"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -32 576 576" width="1em" height="1em" fill="currentColor" class="fa-2x text-gray-300">
                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M208 48C208 74.51 186.5 96 160 96C133.5 96 112 74.51 112 48C112 21.49 133.5 0 160 0C186.5 0 208 21.49 208 48zM152 352V480C152 497.7 137.7 512 120 512C102.3 512 88 497.7 88 480V256.9L59.43 304.5C50.33 319.6 30.67 324.5 15.52 315.4C.3696 306.3-4.531 286.7 4.573 271.5L62.85 174.6C80.2 145.7 111.4 128 145.1 128H174.9C208.6 128 239.8 145.7 257.2 174.6L302.1 249.3C285.1 266.9 273.4 287.7 265.5 310.8C263.6 308.9 261.1 306.8 260.6 304.5L232 256.9V480C232 497.7 217.7 512 200 512C182.3 512 168 497.7 168 480V352L152 352zM288 368C288 288.5 352.5 224 432 224C511.5 224 576 288.5 576 368C576 447.5 511.5 512 432 512C352.5 512 288 447.5 288 368zM432 464C445.3 464 456 453.3 456 440C456 426.7 445.3 416 432 416C418.7 416 408 426.7 408 440C408 453.3 418.7 464 432 464zM415.1 288V368C415.1 376.8 423.2 384 431.1 384C440.8 384 447.1 376.8 447.1 368V288C447.1 279.2 440.8 272 431.1 272C423.2 272 415.1 279.2 415.1 288z"></path>
                            </svg></div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row align-items-center no-gutters">


                    </div>
                </div>
                <div class="card-body">
                    <div class="row align-items-center no-gutters">


                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row"></div>
    <div class="row"></div>
</div>
</div>



</div>
</div>
</div>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/bs-init.js"></script>