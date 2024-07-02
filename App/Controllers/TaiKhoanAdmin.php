<?php
class TaiKhoanAdmin extends controller
{
    protected $tk;

    function __construct()
    {
        $this->tk = $this->model('TaiKhoan');
    }

    function Get_data()
    {
        $this->view('MasterLayout_admin', [
            'page' => 'TaiKhoanAdmin_v',
            'dulieu' => $this->tk->TaiKhoanadmin_find(''),
            'email' => $_SESSION['$email'],
        ]);
    }
    function timkiem()
    {
        if (isset($_POST['btnTimKiem'])) {
            $tk = $_POST['txtTimKiem'];
            if ($tk == "") {
                echo "<script>alert('Vui lòng nhập thông tin tìm kiếm')</script>";
                $this->view('MasterLayout_admin', [
                    'page' => 'TaiKhoanAdmin_v',
                    'dulieu' => $this->tk->TaiKhoanadmin_find(''),
                    'email' => $_SESSION['$email'],
                ]);
            } else {
                $this->view('MasterLayout_admin', [
                    'page' => 'TaiKhoanAdmin_v',
                    'dulieu' => $this->tk->TaiKhoanadmin_find($tk),
                    'email' => $_SESSION['$email'],
                ]);
            }
        }
        if (isset($_POST['btnTroVe'])) {
            $this->view('MasterLayout_admin', [
                'page' => 'TaiKhoanAdmin_v',
                'dulieu' => $this->tk->TaiKhoanadmin_find(''),
                'email' => $_SESSION['$email'],
            ]);
        }

        if (isset($_POST['btnthem'])) {
            $this->view('MasterLayout_admin', [
                'page' => 'TaiKhoan_them_v',
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
            $sheet->setCellValue('A' . $rowCount, 'MaTaiKhoan');
            $sheet->setCellValue('B' . $rowCount, 'Email');
            $sheet->setCellValue('C' . $rowCount, 'MatKhau');
            $sheet->setCellValue('D' . $rowCount, '	HoTen');
            $sheet->setCellValue('E' . $rowCount, '	DienThoai');
            $sheet->setCellValue('F' . $rowCount, '	DiaChi');
            //định dạng cột tiêu đề
            $sheet->getColumnDimension('A')->setAutoSize(true);
            $sheet->getColumnDimension('B')->setAutoSize(true);
            $sheet->getColumnDimension('C')->setAutoSize(true);
            $sheet->getColumnDimension('D')->setAutoSize(true);
            $sheet->getColumnDimension('E')->setAutoSize(true);
            $sheet->getColumnDimension('F')->setAutoSize(true);
            //gán màu nền
            $sheet->getStyle('A1:F1')->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('FAFAFA');
            //căn giữa
            $sheet->getStyle('A1:F1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            //Điền dữ liệu vào các dòng. Dữ liệu lấy từ DB

            $data = $this->tk->taikhoan_export();
            while ($row = mysqli_fetch_array($data)) {
                $rowCount++;
                $sheet->setCellValue('A' . $rowCount, $row['MaTaiKhoan']);
                $sheet->setCellValue('B' . $rowCount, $row['Email']);
                $sheet->setCellValue('C' . $rowCount, $row['MatKhau']);
                $sheet->setCellValue('D' . $rowCount, $row['HoTen']);
                $sheet->setCellValue('E' . $rowCount, $row['DienThoai']);
                $sheet->setCellValue('F' . $rowCount, $row['DiaChi']);
            }
            //Kẻ bảng 
            $styleAray = array(
                'borders' => array(
                    'allborders' => array(
                        'style' => PHPExcel_Style_Border::BORDER_THIN
                    )
                )
            );
            $sheet->getStyle('A1:' . 'F' . ($rowCount))->applyFromArray($styleAray);
            $objWriter = new PHPExcel_Writer_Excel2007($objExcel);
            $fileName = 'BangTaiKhoan.xlsx';
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







    function xoa($mtk)
    {
        $kq = $this->tk->TaiKhoan_del($mtk);
        if ($kq) {
            echo "<script>alert('Xóa thành công')</script>";
            $this->view('MasterLayout_admin', [
                'page' => 'TaiKhoanAdmin_v',
                'dulieu' => $this->tk->TaiKhoanadmin_find(''),
                'email' => $_SESSION['$email'],
            ]);
        }
    }

    function themmoi()
    {
        $email = $_POST['txtEmail'];
        $mk = $_POST['txtMatkhau'];
        $hoten = $_POST['txtHoten'];
        $dt = $_POST['txtDienthoai'];
        $dc = $_POST['txtDiachi'];
        if (isset($_POST['btnThem'])) {
        if($email==""||$mk==""||$hoten==""||$dt==""||$dc==""){
            echo "<script>alert('Không được để trống các trường!')</script>";
            $this->view('MasterLayout_admin',[
                'page'=>'TaiKhoan_them_v',
                'email' => $_SESSION['$email'],
            ]);
        }else{
            $data = $this->tk->CheckEmail($email);
            if ($data) {
                echo "<script>alert('Email đã tồn tại!!!')</script>";
                $this->view('MasterLayout_admin', [
                    'page' => 'TaiKhoan_them_v',
                    'email' => $_SESSION['$email'],
                ]);
            } else {
                $this->tk->taikhoan_ins($email, $mk, $hoten, $dc, $dt);
                echo "<script>alert('Đăng kí thành công!!!')</script>";
                $this->view('MasterLayout_admin', [
                    'page' => 'TaiKhoanAdmin_v',
                    'dulieu' => $this->tk->TaiKhoanadmin_find(''),
                    'email' => $_SESSION['$email'],
                ]);
            }
        }
        }
       

        if (isset($_POST['btnTroVe'])) {
            $this->view('MasterLayout_admin', [
                'page' => 'TaiKhoanAdmin_v',
                'dulieu' => $this->tk->TaiKhoanadmin_find(''),
                'email' => $_SESSION['$email'],
            ]);
        }
    }
}
