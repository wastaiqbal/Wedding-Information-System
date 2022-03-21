<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings_model extends CI_Model {

    public function getSetting(){
        return $this->db->get('settings')->row_array();
    }

    public function general(){
      return $this->db->get('general')->row_array();
    }

    public function getRekening(){
        return $this->db->get('rekening');
    }

    public function getRekeningById($id){
        return $this->db->get_where('rekening', ['id' => $id])->row_array();
    }

    public function getPages(){
        return $this->db->get('pages');
    }

    public function getCouple(){
      return $this->db->get('couple')->row_array();
    }

    public function getLovestory(){
      return $this->db->get('lovestory')->row_array();
    }

    public function getSosmed(){
      return $this->db->get('sosmed');
    }

    public function getSosmedById($id){
      return $this->db->get_where('sosmed', ['id' => $id])->row_array();
    }

    public function getFooterInfo(){
      $this->db->select("distinct(page), pages.title AS title, pages.slug AS slug");
      $this->db->from("footer");
      $this->db->join("pages", "footer.page=pages.id");
      $this->db->where('footer.type', 1);
      return $this->db->get();
    }

    public function getFooterHelp(){
      $this->db->select("distinct(page), pages.title AS title, pages.slug AS slug");
      $this->db->from("footer");
      $this->db->join("pages", "footer.page=pages.id");
      $this->db->where('footer.type', 2);
      return $this->db->get();
    }

    public function getPageById($id){
      return $this->db->get_where('pages', ['id' => $id])->row_array();
    }

    public function getBanner(){
      return $this->db->get('banner');
    }

    public function getEmailAccount(){
      return $this->db->get('subscriber');
    }

    public function getCostDelivery(){
      $this->db->order_by('id', 'desc');
      return $this->db->get('cost_delivery');
    }

    public function getCostDeliveryById($id){
      return $this->db->get_where('cost_delivery', ['id' => $id])->row_array();
    }

    public function getCOD(){
      $this->db->order_by('id', 'desc');
      return $this->db->get('cod');
    }

    public function getRegency(){
      $curl = curl_init();
      curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api.rajaongkir.com/starter/city",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
          "key: ". $this->Settings_model->general()["api_rajaongkir"]
      ),
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);

      curl_close($curl);

      if ($err) {
          echo "cURL Error #:" . $err;
      } else {
          $response =  json_decode($response, true);
          return $response['rajaongkir']['results'];
      }
    }

    public function getRegencyById(){
      $getDB = $this->db->get('settings')->row_array();
      $curl = curl_init();
      curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api.rajaongkir.com/starter/city?id=".$getDB['regency_id'],
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
          "key: ". $this->Settings_model->general()["api_rajaongkir"]
      ),
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);

      curl_close($curl);

      if ($err) {
          echo "cURL Error #:" . $err;
      } else {
          $response =  json_decode($response, true);
          return $response['rajaongkir']['results'];
      }
    }

    public function insertPage(){
        $title = $this->input->post('title');
        $content = $this->input->post('description');
        $slug = $this->input->post('slug');
        $data = [
            'title' => $title,
            'content' => $content,
            'slug' => $slug
        ];
        $this->db->insert('pages', $data);
    }

    public function updatePage($id){
        $title = $this->input->post('title');
        $content = $this->input->post('description');
        $slug = $this->input->post('slug');
        $data = [
            'title' => $title,
            'content' => $content,
            'slug' => $slug
        ];
        $this->db->where('id', $id);
        $this->db->update('pages', $data);
    }

    public function getPageBySlug($slug){
        return $this->db->get_where('pages', ['slug' => $slug])->row_array();
    }

    public function uploadlogo(){
      $config['upload_path'] = './assets/images/logo/';
      $config['allowed_types'] = 'jpg|png|jpeg|image/png|image/jpg|image/jpeg';
      $config['max_size'] = '2048';
      $config['file_name'] = round(microtime(true)*1000);

      $this->load->library('upload', $config);
      if($this->upload->do_upload('logo')){
          $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
          return $return;
      }else{
          $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
          return $return;
      }
    }

    public function updateLogo($upload){
      $db = $this->db->get('settings')->row_array();
      $logo = $db['logo'];
      unlink("./assets/images/logo/$logo");
      $img = $upload['file']['file_name'];
      $this->db->set('logo', $img);
      $this->db->update('settings');
    }

    public function updateLogo2($upload){
      $db = $this->db->get('settings')->row_array();
      $logo = $db['logo2'];
      unlink("./assets/images/logo/$logo");
      $img = $upload['file']['file_name'];
      $this->db->set('logo2', $img);
      $this->db->update('settings');
    }

    public function updateLogo3($upload){
      $db = $this->db->get('settings')->row_array();
      $logo = $db['logo3'];
      unlink("./assets/images/logo/$logo");
      $img = $upload['file']['file_name'];
      $this->db->set('logo3', $img);
      $this->db->update('settings');
    }

    public function updateLaki($upload){
      $db = $this->db->get('couple')->row_array();
      $logo = $db['laki_foto'];
      unlink("./assets/images/logo/$logo");
      $img = $upload['file']['file_name'];
      $this->db->set('laki_foto', $img);
      $this->db->update('couple');
    }

    public function updateFavicon($upload){
      $db = $this->db->get('settings')->row_array();
      $logo = $db['favicon'];
      unlink("./assets/images/logo/$logo");
      $img = $upload['file']['file_name'];
      $this->db->set('favicon', $img);
      $this->db->update('settings');
    }

    public function updateGeneral(){
      $title = $this->input->post('title');
      $slogan = $this->input->post('slogan');
      $whatsapp = $this->input->post('whatsapp');

      $data = [
        'app_name' => $title,
        'slogan' => $slogan,
        'whatsapp' => $whatsapp
      ];
      $this->db->update('general', $data);
    }
    
    public function uploadBannerPackage(){
      $config['upload_path'] = './assets/images/banner/';
      $config['allowed_types'] = 'jpg|png|jpeg';
      $config['max_size'] = '2048';
      $config['file_name'] = round(microtime(true)*1000);

      $this->load->library('upload', $config);
      if($this->upload->do_upload('img')){
          $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
          return $return;
      }else{
          $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
          return $return;
      }
    }

    public function insertPackage($upload){
      $title = $this->input->post('title');
      $banner = $upload['file']['file_name'];
      function textToSlug($text='') {
        $text = trim($text);
        if (empty($text)) return '';
        $text = preg_replace("/[^a-zA-Z0-9\-\s]+/", "", $text);
        $text = strtolower(trim($text));
        $text = str_replace(' ', '-', $text);
        $text = $text_ori = preg_replace('/\-{2,}/', '-', $text);
        return $text;
      }
      $slug = textToSlug($title);
      $data = [
        'title' => $title,
        'banner' => $banner,
        'slug' => $slug
      ];
      $this->db->insert('package', $data);
    }

    public function uploadBannerNews(){
      $config['upload_path'] = './assets/images/banner/';
      $config['allowed_types'] = 'jpg|png|jpeg';
      $config['max_size'] = '2048';
      $config['file_name'] = round(microtime(true)*1000);

      $this->load->library('upload', $config);
      if($this->upload->do_upload('img')){
          $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
          return $return;
      }else{
          $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
          return $return;
      }
    }

    public function insertNews($upload){
      $title = $this->input->post('title');
      $banner = $upload['file']['file_name'];
      $link = $this->input->post('link');
      $data = [
        'title' => $title,
        'banner' => $banner,
        'link' => $link
      ];
      $this->db->insert('news', $data);
    }

    public function uploadImg(){
      $config['upload_path'] = './assets/images/banner/';
      $config['allowed_types'] = 'jpg|png|jpeg|image/png|image/jpg|image/jpeg';
      $config['max_size'] = '2048';
      $config['file_name'] = round(microtime(true)*1000);

      $this->load->library('upload', $config);
      if($this->upload->do_upload('img')){
          $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
          return $return;
      }else{
          $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
          return $return;
      }
  }

    public function insertBanner($upload){
      $img = $upload['file']['file_name'];
      $url = $this->input->post('url', true);
      $info = getimagesize(base_url() . 'assets/images/banner/' . $img);
      if($info[0] != 1366 || $info[1] != 911){
        unlink("./assets/images/banner/$img");
        return false;
      }else{
        if($url == ""){
          $FixUrl = "#";
        }else{
          $FixUrl = $url;
        }
        $data = [
          'img' => $img,
          'url' => $FixUrl
        ];
        $this->db->insert('banner', $data);
        return true;
      }
    }

    
    public function editCouple(){
      $tglNikah = $this->input->post('tglNikah');
      $lakinama = $this->input->post('lakinama');
      $lakidesc = $this->input->post('lakidesc');
      $perempuannama = $this->input->post('perempuannama');
      $perempuandesc = $this->input->post('perempuandesc');
      $linkgmap = $this->input->post('linkgmap');
      $data = [
        'tgl_pernikahan' => $tglNikah,
        'laki_nama' => $lakinama,
        'laki_deskripsi' => $lakidesc,
        'perempuan_nama' => $perempuannama,
        'perempuan_deskripsi' => $perempuandesc,
        'link_gmap' => $linkgmap,
      ];
      $this->db->update('couple' , $data);
  }

  public function editLovestory(){
    $ofmLink = $this->input->post('ofmLink');
    $ofmTgl = $this->input->post('ofmTgl');
    $ofmDesc = $this->input->post('ofmDesc');

    $fdLink = $this->input->post('fdLink');
    $fdTgl = $this->input->post('fdTgl');
    $fdDesc = $this->input->post('fdDesc');

    $hpLink = $this->input->post('hpLink');
    $hpTgl = $this->input->post('hpTgl');
    $hpDesc = $this->input->post('hpDesc');
 
    $data = [
      'ofm_link' => $ofmLink,
      'ofm_tgl' => $ofmTgl,
      'ofm_desc' => $ofmDesc,

      'fd_link' => $fdLink,
      'fd_tgl' => $fdTgl,
      'fd_desc' => $fdDesc,

      'hp_link' => $hpLink,
      'hp_tgl' => $hpTgl,
      'hp_desc' => $hpDesc
    ];
    $this->db->update('lovestory' , $data);
}


    public function editDescription(){
        $desc = $this->input->post('desc', true);
        $this->db->set('short_desc', $desc);
        $this->db->update('settings');
    }

    public function addRekening(){
        $bank = $this->input->post('rekening', true);
        $name = $this->input->post('name', true);
        $number = $this->input->post('number', true);
        $data = [
            'rekening' => $bank,
            'name' => $name,
            'number' => $number
        ];
        $this->db->insert('rekening', $data);
    }

    public function editRekening($id){
        $bank = $this->input->post('rekening', true);
        $name = $this->input->post('name', true);
        $number = $this->input->post('number', true);
        $data = [
            'rekening' => $bank,
            'name' => $name,
            'number' => $number
        ];
        $this->db->where('id', $id);
        $this->db->update('rekening', $data);
    }

    public function addSosmed(){
      $name = $this->input->post('name', true);
      $icon = $this->input->post('icon', true);
      $link = $this->input->post('link', true);
      $data = [
          'name' => $name,
          'icon' => $icon,
          'link' => $link
      ];
      $this->db->insert('sosmed', $data);
    }

    public function editSosmed($id){
      $name = $this->input->post('name', true);
      $icon = $this->input->post('icon', true);
      $link = $this->input->post('link', true);
      $data = [
          'name' => $name,
          'icon' => $icon,
          'link' => $link
      ];
      $this->db->where('id', $id);
      $this->db->update('sosmed', $data);
    }

    public function editAddress(){
      $address = $this->input->post('address', true);
      $regency = $this->input->post('settingSelectRegency', true);
      $data = [
          'address' => $address,
          'regency_id' => $regency
      ];
      $this->db->update('settings', $data);
    }

    public function addDelivery(){
      $destination = $this->input->post('destination', true);
      $price = $this->input->post('price', true);
      $data = [
          'destination' => $destination,
          'price' => $price
      ];
      $this->db->insert('cost_delivery', $data);
    }

    public function addCOD(){
      $destination = $this->input->post('destination', true);
      $data = [
          'regency_id' => $destination
      ];
      $this->db->insert('cod', $data);
    }

    public function editDelivery($id){
      $destination = $this->input->post('destination', true);
      $price = $this->input->post('price', true);
      $data = [
          'destination' => $destination,
          'price' => $price
      ];
      $this->db->where('id', $id);
      $this->db->update('cost_delivery', $data);
    }

    public function addFooter(){
      $page = $this->input->post('page');
      $type = $this->input->post('type');
      $data = [
        'page' => intval($page),
        'type' => intval($type)
      ];
      $this->db->insert('footer', $data);
    }

}
