<?php
    class CapTreoNuHoang_admin_c extends controller{
        protected $dsct;
        function __construct()
        {
            $this->dsct=$this->model('CapTreoNuHoang_admin_m');
        }
        function Get_data(){
            $this->view('Masterlayout_admin',[
                'page'=>'CapTreoNuHoang_admin_v',
                'dulieu'=>$this->dsct->captreo_find(''),
                'email'=>$_SESSION['$email'],
            ]);
        }
        function timkiem(){
            if(isset($_POST['btnTimKiem'])){
                $tk=$_POST['txtTimKiem'];
                if($tk == ""){
                    echo "<script>alert('Vui lòng nhập thông tin tìm kiếm!')</script>";
                    $this->view('MasterLayout_admin',[
                        'page'=>'CCapTreoNuHoang_admin_v',
                        'dulieu'=>$this->dsct->captreo_find(''),
                        'email'=>$_SESSION['$email'],
                    ]);
                }else{
                    $this->view('MasterLayout_admin',[
                        'page'=>'CapTreoNuHoang_admin_v',
                        'dulieu'=>$this->dsct->captreo_find($tk),
                        'email'=>$_SESSION['$email'],
                    ]);  
                }
            }
            if(isset($_POST['btnTroVe'])){
                $this->view('MasterLayout_admin',[
                    'page'=>'CapTreoNuHoang_admin_v',
                    'dulieu'=>$this->dsct->captreo_find(''),
                    'email'=>$_SESSION['$email'],
                ]);
            }
            if(isset($_POST['btnThemCapTreo'])){
                $this->view('MasterLayout_admin',[
                    'page'=>'CapTreoNuHoang_admin_them_v',
                    'email'=>$_SESSION['$email'],
                ]);
            }
            if (isset($_POST['btnExport'])) {
                //code xuất excel
                $objExcel = new PHPExcel();
                $objExcel->setActiveSheetIndex(0);
                $sheet = $objExcel->getActiveSheet()->setTitle('DSTC');
                $rowCount = 1;
                //Tạo tiêu đề cho cột trong excel
                $sheet->setCellValue('A' . $rowCount, 'Mã Cáp Treo');
                $sheet->setCellValue('B' . $rowCount, 'Ảnh Cáp Treo');
                $sheet->setCellValue('C' . $rowCount, 'Tên Cáp Treo');
                $sheet->setCellValue('E' . $rowCount, 'Mô Tả Cáp Treo');
                //định dạng cột tiêu đề
                $sheet->getColumnDimension('A')->setAutoSize(true);
                $sheet->getColumnDimension('B')->setAutoSize(true);
                $sheet->getColumnDimension('C')->setAutoSize(true);
                $sheet->getColumnDimension('D')->setAutoSize(true);
                //gán màu nền
                $sheet->getStyle('A1:D1')->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('FAFAFA');
                //căn giữa
                $sheet->getStyle('A1:D1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                //Điền dữ liệu vào các dòng. Dữ liệu lấy từ DB
    
                $data = $this->dsct->captreo_export();
                while ($row = mysqli_fetch_array($data)) {
                    $rowCount++;
                    $sheet->setCellValue('A' . $rowCount, $row['MaCapTreo']);
                    $sheet->setCellValue('B' . $rowCount, $row['AnhCapTreo']);
                    $sheet->setCellValue('C' . $rowCount, $row['TenCapTreo']);
                    $sheet->setCellValue('D' . $rowCount, $row['MoTaCapTreo']);
                }
                //Kẻ bảng 
                $styleAray = array(
                    'borders' => array(
                        'allborders' => array(
                            'style' => PHPExcel_Style_Border::BORDER_THIN
                        )
                    )
                );
                $sheet->getStyle('A1:' . 'D' . ($rowCount))->applyFromArray($styleAray);
                $objWriter = new PHPExcel_Writer_Excel2007($objExcel);
                $fileName = 'ExportExcel.xlsx';
                $objWriter->save($fileName);
                header('Content-Disposition: attachment; filename="' . $fileName . '"');
                header('Content-Type: application/vnd.openxlmformatsofficedocument.speadsheetml.sheet');
                header('Content-Length: ' . filesize($fileName));
                header('Content-Transfer-Encoding:binary');
                header('Cache-Control: must-revalidate');
                header('Pragma: no-cache');
                readfile($fileName);
            }
        }
        function xoa($mct){
            $kq=$this->dsct->captreo_del($mct);
            if($kq){
                echo "<script>alert('Xóa thành công')</script>";
                $this->view('MasterLayout_admin', [
                    'page' => 'CapTreoNuHoang_admin_v',
                    'dulieu' => $this->dsct->captreo_find(''),
                    'email' => $_SESSION['$email'],
                ]);
            }
        }

        function themmoi(){
            if(isset($_POST['btnThem'])){
                $tct = $_POST['txtTenCapTreo'];
                $act = $_POST['txtAnhCapTreo'];
                $mtct = $_POST['txtMoTaCapTreo'];
                // echo "<script>alert('$tct,$act,$mtct')</script>";
                $check = $this->dsct->checktrung($tct);
                if($tct==""||$act==""||$mtct==""){
                    echo "<script>alert('Không được để khoảng trắng')</script>";
                    $this->view('MasterLayout_admin', [
                        'page' => 'CapTreoNuHoang_admin_them_v',
                        'email' => $_SESSION['$email'],
                        ]);
                }
                else{
                    if ($check){
                        echo "<script>alert('Tên đã tồn tại')</script>";
                        $this->view('MasterLayout_admin', [
                        'page' => 'CapTreoNuHoang_admin_them_v',
                        'email' => $_SESSION['$email'],
                        ]);
                    }else {
                        $kq = $this->dsct->captreo_ins($act, $tct, $mtct);
                        if ($kq) {
                            echo "<script>alert('Thêm mới thành công!')</script>";
                        } else {
                            echo "<script>alert('Thêm mới thất bại!')</script>";
                        }
                        $this->view('MasterLayout_admin', [
                            'page' => 'CapTreoNuHoang_admin_them_v',
                            'email' => $_SESSION['$email'],
                        ]);
                    }
                }
            }
            if (isset($_POST['btnTroVe'])) {
                $this->view('MasterLayout_admin', [
                    'page' => 'CapTreoNuHoang_admin_v',
                    'dulieu' => $this->dsct->captreo_find(''),
                    'email' => $_SESSION['$email'],
                ]);
            }
        }

        function sua($mct){
            $this->view('MasterLayout_admin', [
                'page' => 'CapTreoNuHoang_admin_sua_v',
                'dulieu' => $this->dsct->captreo_sua($mct),
                'email' => $_SESSION['$email'],
            ]);
        
        }
        function suadl(){
            if(isset($_POST['btnSua'])){
                $mct = $_POST['txtMaCapTreo'];
                $tct = $_POST['txtTenCapTreo'];
                $act = $_POST['txtAnhCapTreo'];
                $mtct = $_POST['txtMoTaCapTreo'];


                // echo "<script>alert('$mct,$tct,$act,$mtct')</script>";
                if($act == ""){
                    $act = $_POST['txtAnhCapTreoCu'];
                }
                $kq = $this->dsct->captreo_upd($mct,$act,$tct,$mtct);
                if ($kq) {
                    echo "<script>alert('Sửa thành công')</script>";
                } else {
                    echo "<script>alert('Sửa thất bại')</script>";
                }
                $this->view('MasterLayout_admin', [
                    'page' => 'CapTreoNuHoang_admin_v',
                    'dulieu' => $this->dsct->captreo_find(''),
                    'email' => $_SESSION['$email'],
                ]);
            }
            if(isset($_POST['btnTroVe'])) {
                $this->view('MasterLayout_admin', [
                    'page' => 'CapTreoNuHoang_admin_v',
                    'dulieu' => $this->dsct->captreo_find(''),
                    'email' => $_SESSION['$email'],
                ]);
            }
        }
        
    }
