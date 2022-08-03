
        <div class="page-wrapper">
            
            <div class="container-fluid">
                <!-- สำหรับ navigator -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <div class="text-themecolor" style="font-size: 22px; font-weight: 700;">ไปใส่เอง</div>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item active" style="font-weight: 700;">ไปใส่เอง</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- สิ้นสุด navigator -->

                <!-- สำหรับใส่ข้อมูล -->
                <div class="row">
                    <div class="col-12">
                        
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title" style="font-size: 24px; font-weight: 700;">ทดสอบ</div>
                                
                                <p class="card-subtitle">ทดสอบการเรียกข้อมูลใส่ตาราง</p>
                                <div class="overflow-auto">
                                    <table class="table" id="editable-datatable">
                                        <thead>
                                            <tr>
                                                <th style="font-weight: bold;">ชื่อ-นามสกุล</th>
                                                <th style="font-weight: bold;">อีเมล</th>
                                                <th style="font-weight: bold;">เบอร์โทรศัพท์</th>
                                                <th style="font-weight: bold;">ตำแหน่ง</th>
                                                <th><button type="button" class="btn waves-effect waves-light btn-success">ปุ่มทดสอบ</button></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($data as $data){ ?>
                                            <tr id="1" class="gradeX">
                                                <td><a class="goto" href="<?php echo base_url() ?>"><?php echo $data->user_fullname ?></a>
                                                </td>
                                                <td><?php echo $data->user_email ?></td>
                                                <td><?php echo $data->user_tel ?></td>
                                                <td><?php echo $data->user_level ?></td>
                                                <td class="center">X</td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
    <!-- Editable -->
    <script src="<?php echo base_url() . 'public/assets/node_modules/jquery-datatables-editable/jquery.dataTables.js'?>"></script>
    <script src="<?php echo base_url() . 'public/assets/node_modules/datatables/media/js/dataTables.bootstrap.js'?>"></script>
    <script src="<?php echo base_url() . 'public/assets/node_modules/tiny-editable/mindmup-editabletable.js'?>"></script>
    <script src="<?php echo base_url() . 'public/assets/node_modules/tiny-editable/numeric-input-example.js'?>"></script>
    <script>
    
    $(document).ready( function() {
        var oTable = $('#editable-datatable').DataTable( {
            "language": {
                "oPaginate": {
                    "sPrevious": "ถอยกลับ",
                    "sNext": "ถัดไป"
                },
                "sInfo": "แสดง _START_ ถึง _END_ จาก _TOTAL_ รายการ",
                "sLengthMenu": "แสดง _MENU_ รายการ",
                "sSearch": "ค้นหา ",
                "sPageButtonActive": "test",
            }
           
	    } );
	} );
    </script>