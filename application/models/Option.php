<?php
/**
 * Created by PhpStorm.
 * User: UBS
 * Date: 11-May-16
 * Time: 14:15
 */
class Option extends CI_Model{

    //Convert Date+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    public $th = array('มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม');
    public $en = array('January','February','March','April','May','June','July','August','September','October','November','December');
    public $shot_th = array('ม.ค.','ก.พ.','มี.ค.','เม.ย.','พ.ค.','มิ.ย.','ก.ค.','ส.ค.','ก.ย.','ต.ค.','พ.ย.','ธ.ค.');
    public $shot_en = array('Jan.','Feb.','Mar.','Apr','May.','Jun.','Jul.','Aug.','Sep.','Oct.','Nov.'.'Dec.');
    public $year_thai = 543;
    public function getDateTH($data = null,$type = 'TH'){ //EN TH
        if($type == 'TH'){
            $y = (int)substr($data,0,4)+$this->year_thai;
            $m = (int)substr($data,5,2);
            $d = substr($data,8,2);
           return $d.' '.$this->th[$m-1].' '.$y;
        }else if($type == 'EN'){
            $y = (int)substr($data,0,4);
            $m = (int)substr($data,5,2);
            $d = substr($data,8,2);
            return $d.' '.$this->en[$m-1].' '.$y;
        }
echo $data;
    }


//    //Layouts Fig project+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//    public $themeloginheader = ""; //หน้าเข้าระบบ
//    public $themeloginfooter = ""; //หน้าเข้าระบบ
//    public $thememanagerheader = "layouts/home/home_header"; //หน้าจัดการเว็บ
//    public $thememanagerfooter = "layouts/home/home_footer"; //หน้าจัดการเว็บ
//    public $themeadminheader = ""; //หน้าผู้ดูแลระบบ
//    public $themeadminfooter = ""; //หน้าผู้ดูแลระบบ
//    //Render
//    // ส่งค่าไปยัว วิว         ที่อยู้    layouts  ข้อมูล
//    public function render($view,$view = 1,$data = null){ // view normol
//        $this->load->view($this->thememanagerheader);
//        $this->load->view($view,$data);
//        $this->load->view($this->thememanagerfooter);
//    }
//    public function renderPartial($view,$data = null){ // view normol
//        $this->load->view('user/'.$view,$data);
//    }


}//end class