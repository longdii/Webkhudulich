<?php
class ThongKe extends controller{
    protected $tk;
    function __construct()
    {
        $this->tk=$this->model('QuanLyDonHang');
    }
    function Get_data(){
        $this->view('Masterlayout_admin',[
            'page'=>'ThongKe_admin_v',
            'ngaybd'=>date('Y-m-d'),
            'ngaykt'=>date('Y-m-d'),
            'email' => $_SESSION['$email'],
            'dulieu'=>$this->tk->ThongKe('',date('Y-m-d'))
            
        ]);
    }
    function thongke(){
        $bd = $_POST['txtNgaybd'];
        $kt =$_POST['txtNgaykt'];
        if(isset($_POST['btnthongke'])){
            $this->view('Masterlayout_admin',[
                'page'=>'ThongKe_admin_v',
                'ngaybd'=>date($bd),
                'ngaykt'=>date($kt),
                'email' => $_SESSION['$email'],
             'dulieu'=> $this->tk->ThongKe($bd,$kt)
            ]);
        }

        if (isset($_POST['btnExport'])) {
            //code xuất excel
            $objExcel = new PHPExcel();
            $objExcel->setActiveSheetIndex(0);
            $sheet = $objExcel->getActiveSheet()->setTitle('DSTC');
            $rowCount = 1;
            //Tạo tiêu đề cho cột trong excel
            $sheet->setCellValue('A' . $rowCount, 'TenVe');
            $sheet->setCellValue('B' . $rowCount, 'Email');
            $sheet->setCellValue('C' . $rowCount, 'SoLuong');
            $sheet->setCellValue('D' . $rowCount, 'DonGia');
            $sheet->setCellValue('E' . $rowCount, 'ThanhTien');
            $sheet->setCellValue('F' . $rowCount, 'Ngay');
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

            $data = $this->tk->thongke_export();
            while ($row = mysqli_fetch_array($data)) {
                $rowCount++;
                $sheet->setCellValue('A' . $rowCount, $row['TenVe']);
                $sheet->setCellValue('B' . $rowCount, $row['Email']);
                $sheet->setCellValue('C' . $rowCount, $row['SoLuong']);
                $sheet->setCellValue('D' . $rowCount, $row['DonGia']);
                $sheet->setCellValue('E' . $rowCount, $row['ThanhTien']);
                $sheet->setCellValue('F' . $rowCount, $row['Ngay']);
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
            $fileName = 'BangThongke.xlsx';
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

    }