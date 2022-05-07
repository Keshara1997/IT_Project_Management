<div class="ul-sidebar-panel" id="asideProfile" data-position="right">
        <div class="pt-lg pb-md px-lg">
            <div class="ul-sidebar-panel-top mb-md">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="heading-label p-0">Profile</div>
                    <div class="flex-grow-1"></div><i class="material-icons icon icon-sm hover-gray ul-sidebar-panel-close">close</i>
                </div>
            </div>
            <div data-perfect-scrollbar="" data-suppress-scroll-x="true" style="height: calc(100vh - 112px)">
                <div class="ul-sidebar-aside-profile d-flex mb-xxl align-items-center">
                    <img class="rounded-circle avatar-lg" src="assets/images/faces/1.png" alt="" />
                    <div class="ul-sidebar-aside-info ml-md"><a class="link-alt">
                            <div class="font-weight-semi"><?php echo $_SESSION['Fname']; ?> <?php echo $_SESSION['Lname']; ?></div></a>
                    </div>
                </div>
                <div class="heading-label">Bio </div>
                <div class="d-flex justify-content-between"><span class="badge rounded-circle badge-primary mr-sm"><i class="fas fa-user-circle"></i></span>
                    <div class="flex-grow-1">
                        <p class="font-weight-semi m-0">Name</p>
                        <p class="text-muted text-small"><?php echo $_SESSION['Fname']; ?> <?php echo $_SESSION['Lname']; ?></p>
                    </div>
                </div>
                <?php
                    $CID = $_SESSION['STCID'];
                                                
                    $result = $mysqli->query("SELECT * FROM tbcourse WHERE CID=$CID") or die($mysqli->error);
                    while ($row = $result->fetch_assoc()):
                        $CourseName = $row['COURSE_NAME'];
                    endwhile;
                ?>
                <div class="d-flex justify-content-between"><span class="badge rounded-circle badge-primary mr-sm"><i class="fas fa-flag"></i></span>
                    <div class="flex-grow-1">
                        <p class="font-weight-semi m-0">Course</p>
                        <p class="text-muted text-small"><?php echo $CourseName; ?></p>
                    </div>
                </div>
                <div class="d-flex justify-content-between"><span class="badge rounded-circle badge-primary mr-sm"><i class="fas fa-id-card-alt"></i></span>
                    <div class="flex-grow-1">
                        <p class="font-weight-semi m-0">Student ID</p>
                        <p class="text-muted text-small"><?php echo $_SESSION['STID']; ?></p>
                    </div>
                </div>
                <div class="d-flex justify-content-between"><span class="badge rounded-circle badge-primary mr-sm"><i class="fas fa-id-card-alt"></i></span>
                    <div class="flex-grow-1">
                        <p class="font-weight-semi m-0">School</p>
                        <p class="text-muted text-small"><?php echo $_SESSION['SCHOOL']; ?></p>
                    </div>
                </div>
                <div class="d-flex justify-content-between"><span class="badge rounded-circle badge-primary mr-sm"><i class="fas fa-phone-volume"></i></span>
                    <div class="flex-grow-1">
                        <p class="font-weight-semi m-0">Mobile Phone </p>
                        <p class="text-muted text-small"><?php echo $_SESSION['MobileNo']; ?></p>
                    </div>
                </div>
                <div class="d-flex justify-content-between"><span class="badge rounded-circle badge-primary mr-sm"><i class="fas fa-map-marked-alt"></i></span>
                    <div class="flex-grow-1">
                        <p class="font-weight-semi m-0">Address</p>
                        <p class="text-muted text-small"><?php echo $_SESSION['Address']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>