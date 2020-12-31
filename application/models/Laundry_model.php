<?php 

use GuzzleHttp\Client;

class Laundry_model extends CI_model {

    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/kucek/index.php/'
        ]);

    }

    public function getAllLaundry()
    {
        //return $this->db->get('tb_laundry')->result_array();
        
        $response = $this->_client->request('GET','laundry',[
            'query' => [
                'KODE-API' => '9876543'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(),true);
        return $result['data'];
    }

    public function getLaundryById($id)
    {
        return $this->db->get_where('tb_laundry', ['kd_laundry' => $id])->row_array();
                
        //$response = $this->_client->request('GET','laundry',[
          //  'query' => [
          //    'KODE-API' => '9876543',
          //  'kd_laundry' => $id
          //  ]
        //]);

        //$result = json_decode($response->getBody()->getContents(),true);
        //return $result['data'][0];
    }


    public function tambahDataLaundry()
    {
        $data = [
            'kd_laundry' => $this->input->post('kode', true),
            'nama_laundry' => $this->input->post('nama', true),
            'alamat' => $this->input->post('alamat', true),
            'kontak' => $this->input->post('kontak', true)
            //'KODE-API' => '9876543' 
        ];

        $this->db->insert('tb_laundry', $data);
        //$response = $this->_client->request('POST','laundry',[
        //    'form_params' => $data

        //]);

        //$result = json_decode($response->getBody()->getContents(),true);
        //return $result;
    }

    public function hapusDataLaundry($id)
    {
        //$this->db->delete('tb_laundry', ['kd_laundry' => $id]);
        $response = $this->_client->request('DELETE','laundry',[
            'form_params' => [
                'KODE-API' => '9876543',
                'kode'=>$id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(),true);
        return $result;
    }


    public function ubahDataLaundry()
    {
        $data = [
            'kd_laundry' => $this->input->post('kode', true),
            'nama_laundry' => $this->input->post('nama', true),
            'alamat' => $this->input->post('alamat', true),
            'kontak' => $this->input->post('kontak', true)
            //'KODE-API' => '9876543'
        ];

        $this->db->where('kd_laundry', $this->input->post('kode'));
        $this->db->update('tb_laundry', $data);
        //$response = $this->_client->request('PUT','laundry',[
        //    'form_params' => $data

        //]);

        //$result = json_decode($response->getBody()->getContents(),true);
        //return $result;
    }

    public function cariDataLaundry()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('kd_laundry', $keyword);
        $this->db->or_like('nama_laundry', $keyword);
        $this->db->or_like('alamat', $keyword);
        $this->db->or_like('kontak', $keyword);
        return $this->db->get('tb_laundry')->result_array();
    }
}