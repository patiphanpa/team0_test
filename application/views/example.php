        
        <div class="page-wrapper">
            
            <div class="container-fluid">
                <!-- สำหรับ navigator -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">ไปพิมพ์เอง</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item active">ไปพิมพ์เอง</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- สิ้นสุด navigator -->

                <!-- สำหรับใส่ข้อมูล -->
                <button id="sa-confirm" type="button" class="btn waves-effect waves-light btn-info">Modal</button>
                <!-- สิ้นสุดข้อมูล -->


            </div>

        </div>


        
    <!-- สำหรับใส่ JS -->
    <script src="<?php echo base_url() . 'public/assets/node_modules/jquery/dist/jquery.min.js'?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url() . 'public/assets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js'?>"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url() . 'public/eliteadmin/dist/js/perfect-scrollbar.jquery.min.js'?>"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url() . 'public/eliteadmin/dist/js/waves.js'?>"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url() . 'public/eliteadmin/dist/js/sidebarmenu.js'?>"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url() . 'public/assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js'?>"></script>
    <script src="<?php echo base_url() . 'public/assets/node_modules/sparkline/jquery.sparkline.min.js'?>"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url() . 'public/eliteadmin/dist/js/custom.min.js' ?>"></script>
    <!-- Sweet-Alert  -->
    <script src="<?php echo base_url() . 'public/assets/node_modules/sweetalert2/dist/sweetalert2.all.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'public/assets/node_modules/sweetalert2/sweet-alert.init.js' ?>"></script>
    <script>
        // $('#sa-warning').click(function () {
        //     Swal.fire({
        //         title: "แน่ใจ?",
        //         text: "ยืนยันการทำอะไรสักอย่าง",
        //         type: "warning",
        //         showCancelButton: true,
        //         confirmButtonColor: "#DD6B55",
        //         confirmButtonText: "ยืนยัน",
        //         cancelButtonColor: "#F8F9FA",
        //         cancelButtonText: "<div style='color:black;'>ยกเลิก</div>",
        //         closeOnConfirm: false
        //     }, function () {
        //         swal("Deleted!", "Your imaginary file has been deleted.", "success");
        //     });
        // });

        $("#sa-confirm").click(function () {
            Swal.fire({
                title: 'แน่ใจ?',
                text: "ต้องการทำอะไร!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#F8F9FA',
                confirmButtonText: 'ยืนยัน',
                cancelButtonText: "<div style='color:black;'>ยกเลิก</div>",
            }).then((result) => {
                if (result.value) {
                    Swal.fire({
                        title: 'ทำสำเร็จ',
                        text: "ทำอะไรสำเร็จ!",
                        type: 'success',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'ยืนยัน',
                    })
                }
            })
        });
    </script>