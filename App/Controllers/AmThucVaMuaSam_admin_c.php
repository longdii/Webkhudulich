<?php
class AmThucVaMuaSam_admin_c extends controller
{
    protected $dsat;
    function __construct()
    {
        $this->dsat = $this->model('AmThucVaMuaSam_admin_m');
    }
    function Get_data()
    {
        $this->view('Masterlayout_admin', [
            'page' => 'AmThucVaMuaSam_admin_v',
            'dulieu' => $this->dsat->amthuc_find(''),
            'email' => $_SESSION['$email'],
        ]);
    }
    function timkiem()
    {
        if (isset($_POST['btnTimKiem'])) {
            $tk = $_POST['txtTimKiem'];
            if ($tk == "") {
                echo "<script>alert('Vui lòng nhập thông tin tìm kiếm!')</script>";
                $this->view('MasterLayout_admin', [
                    'page' => 'AmThucVaMuaSam_admin_v',
                    'dulieu' => $this->dsat->amthuc_find(''),
                    'email' => $_SESSION['$email'],
                ]);
            } else {
                $this->view('MasterLayout_admin', [
                    'page' => 'AmThucVaMuaSam_admin_v',
                    'dulieu' => $this->dsat->amthuc_find($tk),
                    'email' => $_SESSION['$email'],
                ]);
            }
        }
        if (isset($_POST['btnTroVe'])) {
            $this->view('MasterLayout_admin', [
                'page' => 'AmThucVaMuaSam_admin_v',
                'dulieu' => $this->dsat->amthuc_find(''),
                'email' => $_SESSION['$email'],
            ]);
        }
        if (isset($_POST['btnThemAmThuc'])) {
            $this->view('MasterLayout_admin', [
                'page' => 'AmThucVaMuaSam_admin_them_v',
                'email' => $_SESSION['$email'],
            ]);
        }
        if (isset($_POST['btnExport'])) {
            //code xuất excel
            $objExcel = new PHPExcel();
            $objExcel->setActiveSheetIndex(0);
            $sheet = $objExcel->getActiveSheet()->setTitle('DSTC');
            $rowCount = 1;
            //Tạo tiêu đề cho cột trong excel
            $sheet->setCellValue('A' . $rowCount, 'Mã Ẩm Thực');
            $sheet->setCellValue('B' . $rowCount, 'Ảnh Ẩm Thưc');
            $sheet->setCellValue('C' . $rowCount, 'Tên Ẩm Thực');
            $sheet->setCellValue('D' . $rowCount, 'Địa Chỉ Ẩm Thực');
            $sheet->setCellValue('E' . $rowCount, 'Mô Tả Ẩm Thực');
            //định dạng cột tiêu đề
            $sheet->getColumnDimension('A')->setAutoSize(true);
            $sheet->getColumnDimension('B')->setAutoSize(true);
            $sheet->getColumnDimension('C')->setAutoSize(true);
            $sheet->getColumnDimension('D')->setAutoSize(true);
            $sheet->getColumnDimension('E')->setAutoSize(true);
            //gán màu nền
            $sheet->getStyle('A1:E1')->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('FAFAFA');
            //căn giữa
            $sheet->getStyle('A1:E1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            //Điền dữ liệu vào các dòng. Dữ liệu lấy từ DB

            $data = $this->dsat->amthuc_export();
            while ($row = mysqli_fetch_array($data)) {
                $rowCount++;
                $sheet->setCellValue('A' . $rowCount, $row['MaAmThuc']);
                $sheet->setCellValue('B' . $rowCount, $row['AnhAmThuc']);
                $sheet->setCellValue('C' . $rowCount, $row['TenAmThuc']);
                $sheet->setCellValue('D' . $rowCount, $row['DiaChiAmThuc']);
                $sheet->setCellValue('E' . $rowCount, $row['MoTaAmThuc']);
            }
            //Kẻ bảng 
            $styleAray = array(
                'borders' => array(
                    'allborders' => array(
                        'style' => PHPExcel_Style_Border::BORDER_THIN
                    )
                )
            );
            $sheet->getStyle('A1:' . 'E' . ($rowCount))->applyFromArray($styleAray);
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
    function xoa($mat)
    {
        $kq = $this->dsat->amthuc_del($mat);
        if ($kq) {
            echo "<script>alert('Xóa thành công')</script>";
            $this->view('MasterLayout_admin', [
                'page' => 'AmThucVaMuaSam_admin_v',
                'dulieu' => $this->dsat->amthuc_find(''),
                'email' => $_SESSION['$email'],
            ]);
        }
    }

    function themmoi()
    {
        if (isset($_POST['btnThem'])) {
            $aat = $_POST['txtAnhAmThuc'];
            $tat = $_POST['txtTenAmThuc'];
            $dcat = $_POST['txtDiaChiAmThuc'];
            $mtat = $_POST['txtMoTaAmThuc'];
            $check = $this->dsat->checktrung($tat);
            if ($aat == "" || $tat == "" || $dcat == "" || $mtat == "") {
                echo "<script>alert('Không được để khoảng trắng')</script>";
                $this->view('MasterLayout_admin', [
                    'page' => 'AmThucVaMuaSam_admin_them_v',
                    'email' => $_SESSION['$email'],
                ]);
            } else {
                if ($check) {
                    echo "<script>alert('Tên đã tồn tại')</script>";
                    $this->view('MasterLayout_admin', [
                        'page' => 'AmThucVaMuaSam_admin_them_v',
                        'email' => $_SESSION['$email'],
                    ]);
                } else {
                    $kq = $this->dsat->amthuc_ins($aat, $tat, $dcat, $mtat);
                    if ($kq) {
                        echo "<script>alert('Thêm mới thành công!')</script>";
                    } else {
                        echo "<script>alert('Thêm mới thất bại!')</script>";
                    }
                    $this->view('MasterLayout_admin', [
                        'page' => 'AmThucVaMuaSam_admin_them_v',
                        'email' => $_SESSION['$email'],
                    ]);
                }
            }
        }
        if (isset($_POST['btnTroVe'])) {
            $this->view('MasterLayout_admin', [
                'page' => 'AmThucVaMuaSam_admin_v',
                'dulieu' => $this->dsat->amthuc_find(''),
                'email' => $_SESSION['$email'],
            ]);
        }
    }

    function sua($mat)
    {
        $this->view('MasterLayout_admin', [
            'page' => 'AmThucVaMuaSam_admin_sua_v',
            'dulieu' => $this->dsat->amthuc_sua($mat),
            'email' => $_SESSION['$email'],
        ]);
    }
    function suadl()
    {
        if (isset($_POST['btnSua'])) {
            $mat = $_POST['txtMaAmThuc'];
            $aat = $_POST['txtAnhAmThuc'];
            $tat = $_POST['txtTenAmThuc'];
            $dcat = $_POST['txtDiaChiAmThuc'];
            $mtat = $_POST['txtMoTaAmThuc'];


            // echo "<script>alert('$mct,$tct,$act,$mtct')</script>";
            if ($aat == "") {
                $aat = $_POST['txtAnhAmThucCu'];
            }
            $kq = $this->dsat->amthuc_upd($mat, $aat, $tat, $dcat, $mtat);
            if ($kq) {
                echo "<script>alert('Sửa thành công')</script>";
            } else {
                echo "<script>alert('Sửa thất bại')</script>";
            }
            $this->view('MasterLayout_admin', [
                'page' => 'AmThucVaMuaSam_admin_v',
                'dulieu' => $this->dsat->amthuc_find(''),
                'email' => $_SESSION['$email'],
            ]);
        }
        if (isset($_POST['btnTroVe'])) {
            $this->view('MasterLayout_admin', [
                'page' => 'AmThucVaMuaSam_admin_v',
                'dulieu' => $this->dsat->amthuc_find(''),
                'email' => $_SESSION['$email'],
            ]);
        }
    }
    
}
