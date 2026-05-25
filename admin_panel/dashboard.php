<?php include('partials/_header.php') ?>

<!-- Sidebar -->
<?php include('partials/_sidebar.php') ?>
<input type="hidden" value="1" id="checkFileName">
<!-- End of Sidebar -->


<!-- Main Content -->
<div class="content">
    <!-- Navbar -->
    <?php include("partials/_navbar.php"); ?>
    <!-- End of Navbar -->

    <main>
        <div class="header">
            <div class="left">
                <h1>Dashboard</h1>
                <ul class="breadcrumb">
                    <li><a>
                            Analytics
                        </a></li>

                </ul>
            </div>
            <!-- <a href="#" class="report">
                <i class='bx bxs-file-pdf'></i>
                <span>Worksheet PDF</span>
            </a> -->
        </div>

        <!-- Insights -->
        <ul class="insights">
            <li onclick="showTeacherList()">
                <!-- <i class='bx bx-calendar-check'></i> -->
                <i class='bx bxs-user'></i>
                <span class="info">
                    <h3 class="text-center" id="teacherCount">_ _ _</h3>
                    <p>Teachers</p>
                </span>
            </li>
            <li onclick="showStudentList()">
                <i class='bx bxs-group'></i>
                <span class="info">
                    <h3  class="text-center" id="studentCount">_ _ _</h3>
                    <p>Students</p>
                </span>
            </li>
            
            <li onclick="showNoticeList()">
                <i class='bx bxs-bookmark'></i>
                <span class="info">
                    <h3 class="text-center"  id="noticeCount">_ _ _</h3>
                    <p>Notices</p>
                </span>
            </li>
        </ul>
        <!-- End of Insights -->

        <div class="bottom-data">
            <div class="orders">
                <div class="header">
                    <i class='bx bx-receipt'></i>
                    <h3 id="text-heading">Latest Notices</h3>
                    <i class='bx bx-filter'></i>
                    <a href="noticeboard.php" > <i class='bx bx-plus icon-hover-circle' id="plusIconNotification" style="font-size: 30px;"></i></a>
                </div>



                <table>
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Sender</th>
                        </tr>
                    </thead>
                    <tbody id="noticeTableBody">
                   
                    </tbody>
                </table>
            </div>

            
        </div>
 <br>
    </main>
</div>

<script src="../assets/js/dashboard.js"></script>
<?php include("partials/_footer.php");