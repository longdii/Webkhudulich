<?php
class Ve_c extends controller
{
    protected $dsve;
    protected $cvrong;
    protected $cvnuoc;
    protected $captreo;
    function __construct()
    {
        $this->dsve = $this->model('Ve_m');
        $this->cvrong = $this->model('congvienrong');
        $this->cvnuoc = $this->model('congviennuoc');
        $this->captreo = $this->model('CapTreoNuHoang_admin_m');
    }

    function Get_data()
    {
        $this->view('MasterLayout_admin', [
            'page' => 'Ve_v',
            'dulieu' => $this->dsve->ve_find(''),
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
                    'page' => 'Ve_v',
                    'dulieu' => $this->dsve->ve_find(''),
                    'email' => $_SESSION['$email'],
                ]);
            } else {
                $this->view('MasterLayout_admin', [
                    'page' => 'Ve_v',
                    'dulieu' => $this->dsve->ve_find($tk),
                    'email' => $_SESSION['$email'],
                ]);
            }
        }
        if (isset($_POST['btnTroVe'])) {
            $this->view('MasterLayout_admin', [
                'page' => 'Ve_v',
                'dulieu' => $this->dsve->ve_find(''),
                'email' => $_SESSION['$email'],
            ]);
        }

        if (isset($_POST['btnThemVe'])) {
            $this->view('MasterLayout_admin', [
                'page' => 'Ve_them_v',
                'cvrong' => $this->cvrong->congvienrong_list(),
                'cvnuoc' => $this->cvnuoc->congviennuoc_list(),
                'captreo' => $this->captreo->captreo_list(),
                'email' => $_SESSION['$email'],
                'tenve' => '',
                'anhve' => '',
                'giave' => '',
                'khuvuichoi' => ''
            ]);
        }

        if (isset($_POST['btnExport'])) {
            //code xuất excel
            $objExcel = new PHPExcel();
            $objExcel->setActiveSheetIndex(0);
            $sheet = $objExcel->getActiveSheet()->setTitle('DSTC');
            $rowCount = 1;
            //Tạo tiêu đề cho cột trong excel
            $sheet->setCellValue('A' . $rowCount, 'Mã Trò Chơi');
            $sheet->setCellValue('B' . $rowCount, 'Ảnh Trò Chơi');
            $sheet->setCellValue('C' . $rowCount, 'Tên Trò Chơi');
            $sheet->setCellValue('D' . $rowCount, 'Giá Vé');
            $sheet->setCellValue('E' . $rowCount, 'Khu Vui Chơi');
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

            $data = $this->dsve->ve_export();
            while ($row = mysqli_fetch_array($data)) {
                $rowCount++;
                $sheet->setCellValue('A' . $rowCount, $row['MaVe']);
                $sheet->setCellValue('B' . $rowCount, $row['AnhVe']);
                $sheet->setCellValue('C' . $rowCount, $row['TenVe']);
                $sheet->setCellValue('D' . $rowCount, $row['GiaVe']);
                $sheet->setCellValue('E' . $rowCount, $row['KhuVuiChoi']);
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

        if (isset($_POST['btnImport'])) {
            $this->view('MasterLayout_admin', [
                'page' => 'Ve_import_v',
                'email' => $_SESSION['$email'],
            ]);
        }
    }

    function xoa($mave)
    {
        $kq = $this->dsve->ve_del($mave);
        if ($kq) {
            echo "<script>alert('Xóa thành công')</script>";
            $this->view('MasterLayout_admin', [
                'page' => 'Ve_v',
                'dulieu' => $this->dsve->ve_find(''),
                'email' => $_SESSION['$email'],
            ]);
        }
    }

    function themmoi()
    {
        if (isset($_POST['btnThem'])) {
            $tenve = $_POST['txtTenVe'];
            $anhve = $_POST['txtAnhVe'];
            $giave = $_POST['txtGiaVe'];
            $khuvuichoi = $_POST['txtKhuVuiChoi'];

            if ($tenve == "" || $anhve == "" || $giave < 100000 || $khuvuichoi == "") {
                echo "<script>alert('Các trường không để trống và giá vé lớn hơn 100000 nghìn đồng')</script>";
                $this->view('MasterLayout_admin', [
                    'page' => 'Ve_them_v',
                    'cvrong' => $this->cvrong->congvienrong_list(),
                    'cvnuoc' => $this->cvnuoc->congviennuoc_list(),
                    'captreo' => $this->captreo->captreo_list(),
                    'email' => $_SESSION['$email'],
                    'tenve' => $tenve,
                    'anhve' => $anhve,
                    'giave' => $giave,
                    'khuvuichoi' => $khuvuichoi
                ]);
            } else {
                $check = $this->dsve->checktrung($tenve);
                if ($check) {
                    echo "<script>alert('Tên vé đã tồn tại')</script>";
                    $this->view('MasterLayout_admin', [
                        'page' => 'Ve_them_v',
                        'cvrong' => $this->cvrong->congvienrong_list(),
                        'cvnuoc' => $this->cvnuoc->congviennuoc_list(),
                        'captreo' => $this->captreo->captreo_list(),
                        'email' => $_SESSION['$email'],
                        'tenve' => $tenve,
                        'anhve' => $anhve,
                        'giave' => $giave,
                        'khuvuichoi' => $khuvuichoi
                    ]);
                } else {
                    $kq = $this->dsve->ve_ins($anhve, $tenve, $giave, $khuvuichoi);
                    if ($kq) {
                        echo "<script>alert('Thêm mới thành công!')</script>";
                    } else {
                        echo "<script>alert('Thêm mới thất bại!')</script>";
                    }
                    $this->view('MasterLayout_admin', [
                        'page' => 'Ve_them_v',
                        'cvrong' => $this->cvrong->congvienrong_list(),
                        'cvnuoc' => $this->cvnuoc->congviennuoc_list(),
                        'captreo' => $this->captreo->captreo_list(),
                        'email' => $_SESSION['$email'],
                        'tenve' => '',
                        'anhve' => '',
                        'giave' => '',
                        'khuvuichoi' => ''
                    ]);
                }
            }
        }

        if (isset($_POST['btnTroVe'])) {
            $this->view('MasterLayout_admin', [
                'page' => 'Ve_v',
                'dulieu' => $this->dsve->ve_find(''),
                'email' => $_SESSION['$email'],
            ]);
        }
        // upload file

        if (isset($_POST['btnUploadFile'])) {
            $file = $_FILES['txtFile']['tmp_name'];
            $objReader = PHPExcel_IOFactory::createReaderForFile($file);
            $objExcel = $objReader->load($file);
            //Lấy sheet hiện tại
            $sheet = $objExcel->getSheet(0);
            $sheetData = $sheet->toArray(null, true, true, true);
            for ($i = 2; $i <= count($sheetData); $i++) {
                $anhve = $sheetData[$i]["B"];
                $tenve = $sheetData[$i]["C"];
                $giave = $sheetData[$i]["D"];
                $khuvuichoi = $sheetData[$i]["E"];
                $this->dsve->ve_ins($anhve, $tenve, $giave, $khuvuichoi);
            }
            echo "<script>alert('Thêm mới thành công!')</script>";
            $this->view('MasterLayout_admin', [
                'page' => 'Ve_v',
                'dulieu' => $this->dsve->ve_find(''),
                'email' => $_SESSION['$email'],
            ]);
        }
    }

    function sua($mave)
    {
        $this->view('MasterLayout_admin', [
            'page' => 'Ve_sua_v',
            'dulieu' => $this->dsve->ve_sua($mave),
            'email' => $_SESSION['$email'],
        ]);
    }

    function suadl()
    {
        if (isset($_POST['btnSua'])) {
            $mave = $_POST['txtID'];
            $tenve = $_POST['txtTenVe'];
            $anhve = $_POST['txtAnhVe'];
            $giave = $_POST['txtGiaVe'];
            $khuvuichoi = $_POST['txtKhuVuiChoi'];

            if ($anhve == $_POST['txtAnhVeCu']) {
                echo "<script>alert('Ảnh vé đã tồn tại')</script>";
                // echo "<script>window.location.href = 've_sua_v.php';</script>";
                $this->view('MasterLayout_admin', [
                    'page' => 'Ve_sua_v',
                    'dulieu' => $this->dsve->ve_sua($mave),
                    'email' => $_SESSION['$email'],
                ]);
            } else {
                if ($anhve == "") {
                    $anhve = $_POST['txtAnhVeCu'];
                }

                $kq = $this->dsve->ve_upd($mave, $anhve, $tenve, $giave, $khuvuichoi);
                if ($kq) {
                    echo "<script>alert('Sửa thành công')</script>";
                } else {
                    echo "<script>alert('Sửa thất bại')</script>";
                }
                $this->view('MasterLayout_admin', [
                    'page' => 'Ve_v',
                    'dulieu' => $this->dsve->ve_find(''),
                    'email' => $_SESSION['$email'],
                ]);
            }
        }
        if (isset($_POST['btnTroVe'])) {
            $this->view('MasterLayout_admin', [
                'page' => 'Ve_v',
                'dulieu' => $this->dsve->ve_find(''),
                'email' => $_SESSION['$email'],
            ]);
        }
    }
}
