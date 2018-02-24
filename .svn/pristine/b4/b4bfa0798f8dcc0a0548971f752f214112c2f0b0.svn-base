<?php
/*
 * +----------------------------------------------------------------------
 * | PHPExcel拓展
 * +----------------------------------------------------------------------
 * | Copyright (c) 2015 summer All rights reserved.
 * +----------------------------------------------------------------------
 * | Author: wjp <18975137813@163.com> <qq540728685>
 * +----------------------------------------------------------------------
 * | This is not a free software, unauthorized no use and dissemination.
 * +----------------------------------------------------------------------
 * | Date 2017-06-02
 * +----------------------------------------------------------------------
 */

define('PHPEXCEL_ROOT', dirname(__FILE__) . '/');
include PHPEXCEL_ROOT . 'PHPExcel.php';

class PHPExcel_Lite{
    /**
     * 数据导出
     * @param $array
     * @param $list_type 1用户列表，数据统计列表
     * @throws PHPExcel_Exception
     */
    public function Export($array,$list_type){
        $levelArray = [
            1=>'管理员',
            2=>'联合运营商',
            3=>'总代理',
            4=>'代理',
            5=>'推广人',
            6=>'直属玩家'
        ];
        $objPHPExcel = new PHPExcel();
        // Set document properties
        $objPHPExcel->getProperties()
            ->setCreator("Phpmarker")
            ->setLastModifiedBy("Phpmarker")
            ->setTitle("Phpmarker")
            ->setSubject("Phpmarker")
            ->setDescription("Phpmarker")
            ->setKeywords("Phpmarker")
            ->setCategory("Phpmarker");
        if($list_type == 1){
            $objPHPExcel->setActiveSheetIndex(0)
                ->setCellValue('A1', '序号')
                ->setCellValue('B1', '游戏ID')
                ->setCellValue('C1', '名称')
                ->setCellValue('D1', '代理等级')
                ->setCellValue('E1', '比例')
                ->setCellValue('F1', '手机号')
                ->setCellValue('G1', '玩家数')
                ->setCellValue('H1', '推广人数')
                ->setCellValue('I1', '代理数')
                ->setCellValue('J1', '总代理数')
                ->setCellValue('K1', '佣金')
                ->setCellValue('L1', '用户余额')
                ->setCellValue('M1', '日期')
                ->setCellValue('N1', '所属上级昵称');


            // Rename worksheet
            $objPHPExcel->getActiveSheet()->setTitle('Phpmarker-' . date('Y-m-d'));

            // Set active sheet index to the first sheet, so Excel opens this as the first sheet
            $objPHPExcel->setActiveSheetIndex(0);
            $objPHPExcel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(15);
            $objPHPExcel->getActiveSheet()->freezePane('A2');
            $i = 2;
//            print_r($array);exit;
            foreach($array as $data) {
                $objPHPExcel->getActiveSheet()->setCellValue('A' . $i, $data['id']);
                $objPHPExcel->getActiveSheet()->setCellValue('B' . $i, $data['game_id']);
                $objPHPExcel->getActiveSheet()->setCellValue('C' . $i, $data['name']);
                $objPHPExcel->getActiveSheet()->setCellValue('D' . $i, $levelArray[$data['level']]);
                $objPHPExcel->getActiveSheet()->setCellValue('E' . $i, $data['proportion'].'%');
                $objPHPExcel->getActiveSheet()->setCellValue('F' . $i, $data['phone']);
                $objPHPExcel->getActiveSheet()->setCellValue('G' . $i, $data['agent_6']);
                $objPHPExcel->getActiveSheet()->setCellValue('H' . $i, $data['agent_5']);
                $objPHPExcel->getActiveSheet()->setCellValue('I' . $i, $data['agent_4']);
                $objPHPExcel->getActiveSheet()->setCellValue('J' . $i, $data['agent_3']);
                $objPHPExcel->getActiveSheet()->setCellValue('K' . $i, $data['commission']);
                $objPHPExcel->getActiveSheet()->setCellValue('L' . $i, $data['balance']);
                $objPHPExcel->getActiveSheet()->setCellValue('M' . $i, $data['create_time']);
                $objPHPExcel->getActiveSheet()->setCellValue('N' . $i, $data['pid_name']);


//            $objPHPExcel->getActiveSheet()->setCellValue('D' . $i, $levelArray[$data['level']], PHPExcel_Cell_DataType::TYPE_STRING);
//            $objPHPExcel->getActiveSheet()->getStyle('D' . $i)->getNumberFormat()->setFormatCode("@");
                // 设置文本格式
//            $objPHPExcel->getActiveSheet()->setCellValueExplicit('E'. $i, $data[4],PHPExcel_Cell_DataType::TYPE_STRING);
//            $objPHPExcel->getActiveSheet()->getStyle('E' . $i)->getAlignment()->setWrapText(true);
                $i ++;
            }
            $objActSheet = $objPHPExcel->getActiveSheet();
            $objActSheet->getColumnDimension('A')->setWidth(8.5);
            $objActSheet->getColumnDimension('B')->setWidth(23.5);
            $objActSheet->getColumnDimension('C')->setWidth(12);
            $objActSheet->getColumnDimension('D')->setWidth(12);
            $objActSheet->getColumnDimension('E')->setWidth(12);
            $objActSheet->getColumnDimension('F')->setWidth(12);
            $objActSheet->getColumnDimension('G')->setWidth(12);
            $objActSheet->getColumnDimension('H')->setWidth(12);
            $objActSheet->getColumnDimension('I')->setWidth(12);
            $objActSheet->getColumnDimension('J')->setWidth(12);
            $objActSheet->getColumnDimension('K')->setWidth(12);
            $objActSheet->getColumnDimension('L')->setWidth(18.5);
        }

        if($list_type == 2){
            $objPHPExcel->setActiveSheetIndex(0)
                ->setCellValue('A1', '序号')
                ->setCellValue('B1', '游戏ID')
                ->setCellValue('C1', '名称')
                ->setCellValue('D1', '代理等级')
                ->setCellValue('E1', '门票消耗')
                ->setCellValue('F1', '日期');


            // Rename worksheet
            $objPHPExcel->getActiveSheet()->setTitle('Phpmarker-' . date('Y-m-d'));

            // Set active sheet index to the first sheet, so Excel opens this as the first sheet
            $objPHPExcel->setActiveSheetIndex(0);
            $objPHPExcel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(15);
            $objPHPExcel->getActiveSheet()->freezePane('A2');
            $i = 2;
            foreach($array as $data) {
                $objPHPExcel->getActiveSheet()->setCellValue('A' . $i, $data['id']);
                $objPHPExcel->getActiveSheet()->setCellValue('B' . $i, $data['game_id']);
                $objPHPExcel->getActiveSheet()->setCellValue('C' . $i, $data['name']);
                $objPHPExcel->getActiveSheet()->setCellValue('D' . $i, $levelArray[$data['level']]);
                $objPHPExcel->getActiveSheet()->setCellValue('E' . $i, $data['AgentSpend']);
                $objPHPExcel->getActiveSheet()->setCellValue('F' . $i, $data['create_time']);
//                $objPHPExcel->getActiveSheet()->setCellValue('G' . $i, $data['playerSpend']+$data['AgentSpend']);
//                $objPHPExcel->getActiveSheet()->setCellValue('G' . $i, $data['create_time']);
//            $objPHPExcel->getActiveSheet()->setCellValue('D' . $i, $levelArray[$data['level']], PHPExcel_Cell_DataType::TYPE_STRING);
//            $objPHPExcel->getActiveSheet()->getStyle('D' . $i)->getNumberFormat()->setFormatCode("@");
                // 设置文本格式
//            $objPHPExcel->getActiveSheet()->setCellValueExplicit('E'. $i, $data[4],PHPExcel_Cell_DataType::TYPE_STRING);
//            $objPHPExcel->getActiveSheet()->getStyle('E' . $i)->getAlignment()->setWrapText(true);
                $i ++;
            }
            $objActSheet = $objPHPExcel->getActiveSheet();
            $objActSheet->getColumnDimension('A')->setWidth(8.5);
            $objActSheet->getColumnDimension('B')->setWidth(23.5);
            $objActSheet->getColumnDimension('C')->setWidth(12);
            $objActSheet->getColumnDimension('D')->setWidth(12);
            $objActSheet->getColumnDimension('E')->setWidth(12);
            $objActSheet->getColumnDimension('F')->setWidth(12);
//            $objActSheet->getColumnDimension('G')->setWidth(12);
            $objActSheet->getColumnDimension('G')->setWidth(18.5);
        }

        $filename = 'QM_'.time();
        ob_end_clean();//清除缓冲区,避免乱码
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'.$filename.'.xls"');
        header('Cache-Control: max-age=0');
        // If you're serving to IE 9, then the following may be needed
        header('Cache-Control: max-age=1');
        // If you're serving to IE over SSL, then the following may be needed
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
        header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
        header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
        header('Pragma: public'); // HTTP/1.0
        $objWriter = new PHPExcel_Writer_Excel5($objPHPExcel);
        $objWriter->save('php://output');
    }


    /**
     * 数据导出
     * @param $array
     * @throws PHPExcel_Exception
     */
    public function MicroblogExport($array){
        $HeadArray = [
            1=>'用户名',
            2=>'性别',
            3=>'发帖时间',
            4=>'图文',
            5=>'阅读量',
            6=>'评论数量',
            7=>'点赞数量'
        ];
        $objPHPExcel = new PHPExcel();
        // Set document properties
        $objPHPExcel->getProperties()
            ->setCreator("Phpmarker")
            ->setLastModifiedBy("Phpmarker")
            ->setTitle("Phpmarker")
            ->setSubject("Phpmarker")
            ->setDescription("Phpmarker")
            ->setKeywords("Phpmarker")
            ->setCategory("Phpmarker");

        $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1',$HeadArray[1])
            ->setCellValue('B1',$HeadArray[2])
            ->setCellValue('C1',$HeadArray[3])
            ->setCellValue('D1',$HeadArray[4])
            ->setCellValue('E1',$HeadArray[5])
            ->setCellValue('F1',$HeadArray[6])
            ->setCellValue('G1',$HeadArray[7]);
        // Rename worksheet
        $objPHPExcel->getActiveSheet()->setTitle('Phpmarker-' . date('Y-m-d'));
        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $objPHPExcel->setActiveSheetIndex(0);
        $objPHPExcel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(15);
        $objPHPExcel->getActiveSheet()->freezePane('A2');
        $i = 2;
//            print_r($array);exit;
        foreach($array as $data) {
            switch($data['sex']){
                case 1:
                    $sex = '男';
                    break;
                case 2:
                    $sex = '女';
                    break;
                default:
                    $sex = '未知';
            }

            $objPHPExcel->getActiveSheet()->setCellValue('A' . $i, $data['nickname']);
            $objPHPExcel->getActiveSheet()->setCellValue('B' . $i, $sex);
            $objPHPExcel->getActiveSheet()->setCellValue('C' . $i, $data['create_time']);
            $objPHPExcel->getActiveSheet()->setCellValue('D' . $i, strval($data['content']));
            $objPHPExcel->getActiveSheet()->setCellValue('E' . $i, $data['read']);
            $objPHPExcel->getActiveSheet()->setCellValue('F' . $i, $data['comment']);
            $objPHPExcel->getActiveSheet()->setCellValue('G' . $i, $data['like']);

//            $objPHPExcel->getActiveSheet()->setCellValue('D' . $i, $levelArray[$data['level']], PHPExcel_Cell_DataType::TYPE_STRING);
//            $objPHPExcel->getActiveSheet()->getStyle('D' . $i)->getNumberFormat()->setFormatCode("@");
            // 设置文本格式
//            $objPHPExcel->getActiveSheet()->setCellValueExplicit('E'. $i, $data[4],PHPExcel_Cell_DataType::TYPE_STRING);
//            $objPHPExcel->getActiveSheet()->getStyle('E' . $i)->getAlignment()->setWrapText(true);
            $i ++;
        }
        $objActSheet = $objPHPExcel->getActiveSheet();
        $objActSheet->getColumnDimension('A')->setWidth(8.5);
        $objActSheet->getColumnDimension('B')->setWidth(8.5);
        $objActSheet->getColumnDimension('C')->setWidth(23.5);
        $objActSheet->getColumnDimension('D')->setWidth(23.5);
        $objActSheet->getColumnDimension('E')->setWidth(12);
        $objActSheet->getColumnDimension('F')->setWidth(12);
        $objActSheet->getColumnDimension('G')->setWidth(12);


        $filename = 'QM_'.time();
        ob_end_clean();//清除缓冲区,避免乱码
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'.$filename.'.xls"');
        header('Cache-Control: max-age=0');
        // If you're serving to IE 9, then the following may be needed
        header('Cache-Control: max-age=1');
        // If you're serving to IE over SSL, then the following may be needed
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
        header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
        header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
        header('Pragma: public'); // HTTP/1.0
        $objWriter = new PHPExcel_Writer_Excel5($objPHPExcel);
        $objWriter->save('php://output');
    }

    /**
     * 推广人数据导出
     * @param $array
     * @throws PHPExcel_Exception
     */
    public function PromoterExport($array){
        $HeadArray = [
            1=>'姓名',
            2=>'游戏id',
            3=>'电话',
            4=>'申请时间',
            5=>'内容',
            6=>'是否处理',
        ];
        $objPHPExcel = new PHPExcel();
        // Set document properties
        $objPHPExcel->getProperties()
            ->setCreator("Phpmarker")
            ->setLastModifiedBy("Phpmarker")
            ->setTitle("Phpmarker")
            ->setSubject("Phpmarker")
            ->setDescription("Phpmarker")
            ->setKeywords("Phpmarker")
            ->setCategory("Phpmarker");

        $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1',$HeadArray[1])
            ->setCellValue('B1',$HeadArray[2])
            ->setCellValue('C1',$HeadArray[3])
            ->setCellValue('D1',$HeadArray[4])
            ->setCellValue('E1',$HeadArray[5])
            ->setCellValue('F1',$HeadArray[6]);
        // Rename worksheet
        $objPHPExcel->getActiveSheet()->setTitle('Phpmarker-' . date('Y-m-d'));
        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $objPHPExcel->setActiveSheetIndex(0);
        $objPHPExcel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(15);
        $objPHPExcel->getActiveSheet()->freezePane('A2');
        $i = 2;
//            print_r($array);exit;
        foreach($array as $data) {
            switch($data['type']){
                case 1:
                    $type = '未处理';
                    break;
                case 2:
                    $type = '已处理';
                    break;
                default:
                    $type = '未知';
            }

            $objPHPExcel->getActiveSheet()->setCellValue('A' . $i, $data['name']);
            $objPHPExcel->getActiveSheet()->setCellValue('B' . $i, $data['game_id']);
            $objPHPExcel->getActiveSheet()->setCellValue('C' . $i, $data['phone']);
            $objPHPExcel->getActiveSheet()->setCellValue('D' . $i, $data['create_time']);
            $objPHPExcel->getActiveSheet()->setCellValue('E' . $i, $data['content']);
            $objPHPExcel->getActiveSheet()->setCellValue('F' . $i, $type);

//            $objPHPExcel->getActiveSheet()->setCellValue('D' . $i, $levelArray[$data['level']], PHPExcel_Cell_DataType::TYPE_STRING);
//            $objPHPExcel->getActiveSheet()->getStyle('D' . $i)->getNumberFormat()->setFormatCode("@");
            // 设置文本格式
//            $objPHPExcel->getActiveSheet()->setCellValueExplicit('E'. $i, $data[4],PHPExcel_Cell_DataType::TYPE_STRING);
//            $objPHPExcel->getActiveSheet()->getStyle('E' . $i)->getAlignment()->setWrapText(true);
            $i ++;
        }
        $objActSheet = $objPHPExcel->getActiveSheet();
        $objActSheet->getColumnDimension('A')->setWidth(8.5);
        $objActSheet->getColumnDimension('B')->setWidth(8.5);
        $objActSheet->getColumnDimension('C')->setWidth(23.5);
        $objActSheet->getColumnDimension('D')->setWidth(23.5);
        $objActSheet->getColumnDimension('E')->setWidth(12);
        $objActSheet->getColumnDimension('F')->setWidth(12);



        $filename = 'QM_'.time();
        ob_end_clean();//清除缓冲区,避免乱码
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'.$filename.'.xls"');
        header('Cache-Control: max-age=0');
        // If you're serving to IE 9, then the following may be needed
        header('Cache-Control: max-age=1');
        // If you're serving to IE over SSL, then the following may be needed
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
        header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
        header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
        header('Pragma: public'); // HTTP/1.0
        $objWriter = new PHPExcel_Writer_Excel5($objPHPExcel);
        $objWriter->save('php://output');
    }

    /**
     * 用户数据导出
     * @throws PHPExcel_Exception
     */
    public function UserExport($array){
        $HeadArray = [
            1=>'用户id',
            2=>'用户名',
            3=>'游戏id',
            4=>'手机号码',
            5=>'创建时间',
            6=>'接受打赏',
            7=>'交流中心操作',
            8=>'比赛中心操作',
            9=>'评论操作',
            10=>'比赛中心发帖',
        ];
        $objPHPExcel = new PHPExcel();
        // Set document properties
        $objPHPExcel->getProperties()
            ->setCreator("Phpmarker")
            ->setLastModifiedBy("Phpmarker")
            ->setTitle("Phpmarker")
            ->setSubject("Phpmarker")
            ->setDescription("Phpmarker")
            ->setKeywords("Phpmarker")
            ->setCategory("Phpmarker");

        $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', $HeadArray[1])
            ->setCellValue('B1', $HeadArray[2])
            ->setCellValue('C1', $HeadArray[3])
            ->setCellValue('D1', $HeadArray[4])
            ->setCellValue('E1', $HeadArray[5])
            ->setCellValue('F1', $HeadArray[6])
            ->setCellValue('G1', $HeadArray[7])
            ->setCellValue('H1', $HeadArray[8])
            ->setCellValue('I1', $HeadArray[9])
            ->setCellValue('J1', $HeadArray[10]);

        // Rename worksheet
        $objPHPExcel->getActiveSheet()->setTitle('Phpmarker-' . date('Y-m-d'));
        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $objPHPExcel->setActiveSheetIndex(0);
        $objPHPExcel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(15);
        $objPHPExcel->getActiveSheet()->freezePane('A2');
        $i = 2;
//            print_r($array);exit;
        foreach($array as $data) {

            $objPHPExcel->getActiveSheet()->setCellValue('A' . $i, $data['id']);
            $objPHPExcel->getActiveSheet()->setCellValue('B' . $i, $data['name']);
            $objPHPExcel->getActiveSheet()->setCellValue('C' . $i, $data['game_id']);
            $objPHPExcel->getActiveSheet()->setCellValue('D' . $i, $data['phone']);
            $objPHPExcel->getActiveSheet()->setCellValue('E' . $i, $data['create_time']);
            $objPHPExcel->getActiveSheet()->setCellValue('F' . $i, $data['role_reward']==1?'有':'无');
            $objPHPExcel->getActiveSheet()->setCellValue('G' . $i, $data['role_exchange']==1?'有':'无');
            $objPHPExcel->getActiveSheet()->setCellValue('H' . $i, $data['role_match']==1?'有':'无');
            $objPHPExcel->getActiveSheet()->setCellValue('I' . $i, $data['role_comment']==1?'有':'无');
            $objPHPExcel->getActiveSheet()->setCellValue('J' . $i, $data['role_matchpost']==1?'有':'无');


//            $objPHPExcel->getActiveSheet()->setCellValue('D' . $i, $levelArray[$data['level']], PHPExcel_Cell_DataType::TYPE_STRING);
//            $objPHPExcel->getActiveSheet()->getStyle('D' . $i)->getNumberFormat()->setFormatCode("@");
            // 设置文本格式
//            $objPHPExcel->getActiveSheet()->setCellValueExplicit('E'. $i, $data[4],PHPExcel_Cell_DataType::TYPE_STRING);
//            $objPHPExcel->getActiveSheet()->getStyle('E' . $i)->getAlignment()->setWrapText(true);
            $i ++;
        }
        $objActSheet = $objPHPExcel->getActiveSheet();
        $objActSheet->getColumnDimension('A')->setWidth(8.5);
        $objActSheet->getColumnDimension('B')->setWidth(23.5);
        $objActSheet->getColumnDimension('C')->setWidth(12);
        $objActSheet->getColumnDimension('D')->setWidth(12);
        $objActSheet->getColumnDimension('E')->setWidth(12);
        $objActSheet->getColumnDimension('F')->setWidth(12);
        $objActSheet->getColumnDimension('G')->setWidth(12);
        $objActSheet->getColumnDimension('H')->setWidth(12);
        $objActSheet->getColumnDimension('I')->setWidth(12);
        $objActSheet->getColumnDimension('J')->setWidth(12);


        $filename = 'QM_'.time();
        ob_end_clean();//清除缓冲区,避免乱码
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'.$filename.'.xls"');
        header('Cache-Control: max-age=0');
        // If you're serving to IE 9, then the following may be needed
        header('Cache-Control: max-age=1');
        // If you're serving to IE over SSL, then the following may be needed
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
        header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
        header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
        header('Pragma: public'); // HTTP/1.0
        $objWriter = new PHPExcel_Writer_Excel5($objPHPExcel);
        $objWriter->save('php://output');
    }

    /**
     * 打赏导出
     * @param $array
     * @throws PHPExcel_Exception
     */
    public function RewardExport($array){
        $HeadArray = [
            1=>'用户',
            2=>'管理员',
            3=>'打赏钻石数量',
            4=>'打赏时间',
            5=>'账户信息',
            6=>'金额',
            7=>'打赏比例',
            8=>'财务处理时间',
            9=>'驳回理由',
        ];
        $objPHPExcel = new PHPExcel();
        // Set document properties
        $objPHPExcel->getProperties()
            ->setCreator("Phpmarker")
            ->setLastModifiedBy("Phpmarker")
            ->setTitle("Phpmarker")
            ->setSubject("Phpmarker")
            ->setDescription("Phpmarker")
            ->setKeywords("Phpmarker")
            ->setCategory("Phpmarker");

        $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', $HeadArray[1])
            ->setCellValue('B1', $HeadArray[2])
            ->setCellValue('C1', $HeadArray[3])
            ->setCellValue('D1', $HeadArray[4])
            ->setCellValue('E1', $HeadArray[5])
            ->setCellValue('F1', $HeadArray[6])
            ->setCellValue('G1', $HeadArray[7])
            ->setCellValue('H1', $HeadArray[8])
            ->setCellValue('I1', $HeadArray[9]);

        // Rename worksheet
        $objPHPExcel->getActiveSheet()->setTitle('Phpmarker-' . date('Y-m-d'));
        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $objPHPExcel->setActiveSheetIndex(0);
        $objPHPExcel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(15);
        $objPHPExcel->getActiveSheet()->freezePane('A2');
        $i = 2;
//            print_r($array);exit;
        foreach($array as $data) {

            $objPHPExcel->getActiveSheet()->setCellValue('A' . $i, $data['name']);
            $objPHPExcel->getActiveSheet()->setCellValue('B' . $i, $data['pay_name']);
            $objPHPExcel->getActiveSheet()->setCellValue('C' . $i, $data['gc']);
            $objPHPExcel->getActiveSheet()->setCellValue('D' . $i, $data['create_time']);
            $objPHPExcel->getActiveSheet()->setCellValue('E' . $i, $data['account']);
            $objPHPExcel->getActiveSheet()->setCellValue('F' . $i, $data['rmb']);
            $objPHPExcel->getActiveSheet()->setCellValue('G' . $i, $data['fee']);
            $objPHPExcel->getActiveSheet()->setCellValue('H' . $i, $data['update_time']);
            $objPHPExcel->getActiveSheet()->setCellValue('I' . $i, $data['content']);

//            $objPHPExcel->getActiveSheet()->setCellValue('D' . $i, $levelArray[$data['level']], PHPExcel_Cell_DataType::TYPE_STRING);
//            $objPHPExcel->getActiveSheet()->getStyle('D' . $i)->getNumberFormat()->setFormatCode("@");
            // 设置文本格式
//            $objPHPExcel->getActiveSheet()->setCellValueExplicit('E'. $i, $data[4],PHPExcel_Cell_DataType::TYPE_STRING);
//            $objPHPExcel->getActiveSheet()->getStyle('E' . $i)->getAlignment()->setWrapText(true);
            $i ++;
        }
        $objActSheet = $objPHPExcel->getActiveSheet();
        $objActSheet->getColumnDimension('A')->setWidth(8.5);
        $objActSheet->getColumnDimension('B')->setWidth(23.5);
        $objActSheet->getColumnDimension('C')->setWidth(12);
        $objActSheet->getColumnDimension('D')->setWidth(23.5);
        $objActSheet->getColumnDimension('E')->setWidth(23.5);
        $objActSheet->getColumnDimension('F')->setWidth(12);
        $objActSheet->getColumnDimension('G')->setWidth(12);
        $objActSheet->getColumnDimension('H')->setWidth(23.5);
        $objActSheet->getColumnDimension('I')->setWidth(23.5);

        $filename = 'QM_'.time();
        ob_end_clean();//清除缓冲区,避免乱码
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'.$filename.'.xls"');
        header('Cache-Control: max-age=0');
        // If you're serving to IE 9, then the following may be needed
        header('Cache-Control: max-age=1');
        // If you're serving to IE over SSL, then the following may be needed
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
        header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
        header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
        header('Pragma: public'); // HTTP/1.0
        $objWriter = new PHPExcel_Writer_Excel5($objPHPExcel);
        $objWriter->save('php://output');
    }

    /**
     * 时间导出
     * @param $array
     * @throws PHPExcel_Exception
     */
    public function TimeExport($array){
        $HeadArray = [
            1=>'时间',
            2=>'金额',
        ];
        $objPHPExcel = new PHPExcel();
        // Set document properties
        $objPHPExcel->getProperties()
            ->setCreator("Phpmarker")
            ->setLastModifiedBy("Phpmarker")
            ->setTitle("Phpmarker")
            ->setSubject("Phpmarker")
            ->setDescription("Phpmarker")
            ->setKeywords("Phpmarker")
            ->setCategory("Phpmarker");

        $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', $HeadArray[1])
            ->setCellValue('B1', $HeadArray[2]);


        // Rename worksheet
        $objPHPExcel->getActiveSheet()->setTitle('Phpmarker-' . date('Y-m-d'));
        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $objPHPExcel->setActiveSheetIndex(0);
        $objPHPExcel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(15);
        $objPHPExcel->getActiveSheet()->freezePane('A2');
        $i = 2;
//            print_r($array);exit;
        foreach($array as $data) {

            $objPHPExcel->getActiveSheet()->setCellValue('A' . $i, $data['start'].' - 到 - '.$data['end']);
            $objPHPExcel->getActiveSheet()->setCellValue('B' . $i, $data['rmb']);


//            $objPHPExcel->getActiveSheet()->setCellValue('D' . $i, $levelArray[$data['level']], PHPExcel_Cell_DataType::TYPE_STRING);
//            $objPHPExcel->getActiveSheet()->getStyle('D' . $i)->getNumberFormat()->setFormatCode("@");
            // 设置文本格式
//            $objPHPExcel->getActiveSheet()->setCellValueExplicit('E'. $i, $data[4],PHPExcel_Cell_DataType::TYPE_STRING);
//            $objPHPExcel->getActiveSheet()->getStyle('E' . $i)->getAlignment()->setWrapText(true);
            $i ++;
        }
        $objActSheet = $objPHPExcel->getActiveSheet();
        $objActSheet->getColumnDimension('A')->setWidth(43.5);
        $objActSheet->getColumnDimension('B')->setWidth(23.5);


        $filename = 'QM_'.time();
        ob_end_clean();//清除缓冲区,避免乱码
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'.$filename.'.xls"');
        header('Cache-Control: max-age=0');
        // If you're serving to IE 9, then the following may be needed
        header('Cache-Control: max-age=1');
        // If you're serving to IE over SSL, then the following may be needed
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
        header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
        header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
        header('Pragma: public'); // HTTP/1.0
        $objWriter = new PHPExcel_Writer_Excel5($objPHPExcel);
        $objWriter->save('php://output');
    }



    /**
     * 数据导出
     * @param $array
     * @param $list_type 1用户列表，数据统计列表
     * @throws PHPExcel_Exception
     */
    public function AgentTimeExport($array,$list_type){

        $levelArray = [
            1=>'管理员',
            2=>'联合运营商',
            3=>'总代理',
            4=>'代理',
            5=>'推广人',
            6=>'直属玩家'
        ];
        $objPHPExcel = new PHPExcel();
        // Set document properties
        $objPHPExcel->getProperties()
            ->setCreator("Phpmarker")
            ->setLastModifiedBy("Phpmarker")
            ->setTitle("Phpmarker")
            ->setSubject("Phpmarker")
            ->setDescription("Phpmarker")
            ->setKeywords("Phpmarker")
            ->setCategory("Phpmarker");
        //日列表
        if($list_type == 1){
            $objPHPExcel->setActiveSheetIndex(0)
                ->setCellValue('A1', '日期')
                ->setCellValue('B1', '当日佣金')
                ->setCellValue('C1', '当日盈利');

            // Rename worksheet
            $objPHPExcel->getActiveSheet()->setTitle('Phpmarker-' . date('Y-m-d'));

            // Set active sheet index to the first sheet, so Excel opens this as the first sheet
            $objPHPExcel->setActiveSheetIndex(0);
            $objPHPExcel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(15);
            $objPHPExcel->getActiveSheet()->freezePane('A2');
            $i = 2;
//            print_r($array);exit;
            foreach($array as $data) {
                $objPHPExcel->getActiveSheet()->setCellValue('A' . $i, $data['start']);
                $objPHPExcel->getActiveSheet()->setCellValue('B' . $i, $data['new_commission']);
                $objPHPExcel->getActiveSheet()->setCellValue('C' . $i, $data['profit']);

//            $objPHPExcel->getActiveSheet()->setCellValue('D' . $i, $levelArray[$data['level']], PHPExcel_Cell_DataType::TYPE_STRING);
//            $objPHPExcel->getActiveSheet()->getStyle('D' . $i)->getNumberFormat()->setFormatCode("@");
                // 设置文本格式
//            $objPHPExcel->getActiveSheet()->setCellValueExplicit('E'. $i, $data[4],PHPExcel_Cell_DataType::TYPE_STRING);
//            $objPHPExcel->getActiveSheet()->getStyle('E' . $i)->getAlignment()->setWrapText(true);
                $i ++;
            }
            $objActSheet = $objPHPExcel->getActiveSheet();
            $objActSheet->getColumnDimension('A')->setWidth(22.5);
            $objActSheet->getColumnDimension('B')->setWidth(12);
            $objActSheet->getColumnDimension('C')->setWidth(12);

        }

        if($list_type == 2){
//            print_r($array);exit;
            $objPHPExcel->setActiveSheetIndex(0)
                ->setCellValue('A1', '序号')
                ->setCellValue('B1', '游戏ID')
                ->setCellValue('C1', '消费用户游戏ID')
                ->setCellValue('D1', '消费用户昵称')
                ->setCellValue('E1', '消费类型')
                ->setCellValue('F1', '本人盈利')
                ->setCellValue('G1', '获取佣金')
                ->setCellValue('H1', '日期');


            // Rename worksheet
            $objPHPExcel->getActiveSheet()->setTitle('Phpmarker-' . date('Y-m-d'));

            // Set active sheet index to the first sheet, so Excel opens this as the first sheet
            $objPHPExcel->setActiveSheetIndex(0);
            $objPHPExcel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(15);
            $objPHPExcel->getActiveSheet()->freezePane('A2');
            $i = 2;
            foreach($array as $data) {
                $objPHPExcel->getActiveSheet()->setCellValue('A' . $i, $data['id']);
                $objPHPExcel->getActiveSheet()->setCellValue('B' . $i, $data['game_id']);
                $objPHPExcel->getActiveSheet()->setCellValue('C' . $i, $data['pay_game_id']);
                $objPHPExcel->getActiveSheet()->setCellValue('D' . $i, $data['pay_name']);
                $objPHPExcel->getActiveSheet()->setCellValue('E' . $i, $data['class']==1?'发卡':'个人');
                $objPHPExcel->getActiveSheet()->setCellValue('F' . $i, $data['profit']);
                $objPHPExcel->getActiveSheet()->setCellValue('G' . $i, $data['new_commission']);
                $objPHPExcel->getActiveSheet()->setCellValue('H' . $i, $data['create_time']);
//            $objPHPExcel->getActiveSheet()->setCellValue('D' . $i, $levelArray[$data['level']], PHPExcel_Cell_DataType::TYPE_STRING);
//            $objPHPExcel->getActiveSheet()->getStyle('D' . $i)->getNumberFormat()->setFormatCode("@");
                // 设置文本格式
//            $objPHPExcel->getActiveSheet()->setCellValueExplicit('E'. $i, $data[4],PHPExcel_Cell_DataType::TYPE_STRING);
//            $objPHPExcel->getActiveSheet()->getStyle('E' . $i)->getAlignment()->setWrapText(true);
                $i ++;
            }
            $objActSheet = $objPHPExcel->getActiveSheet();
            $objActSheet->getColumnDimension('A')->setWidth(15);
            $objActSheet->getColumnDimension('B')->setWidth(12);
            $objActSheet->getColumnDimension('C')->setWidth(12);
            $objActSheet->getColumnDimension('D')->setWidth(25);
            $objActSheet->getColumnDimension('E')->setWidth(12);
            $objActSheet->getColumnDimension('F')->setWidth(12);
//            $objActSheet->getColumnDimension('G')->setWidth(12);
            $objActSheet->getColumnDimension('G')->setWidth(18.5);
        }

        $filename = 'QM_'.time();
        ob_end_clean();//清除缓冲区,避免乱码
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'.$filename.'.xls"');
        header('Cache-Control: max-age=0');
        // If you're serving to IE 9, then the following may be needed
        header('Cache-Control: max-age=1');
        // If you're serving to IE over SSL, then the following may be needed
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
        header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
        header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
        header('Pragma: public'); // HTTP/1.0
        $objWriter = new PHPExcel_Writer_Excel5($objPHPExcel);
        $objWriter->save('php://output');
    }

}