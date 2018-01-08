<?php
class News_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_news($slug_or_id = FALSE)
    {
        if ($slug_or_id === FALSE) {
            $query = $this->db->get('news');
            return $query->result_array();
        }

        $query = is_numeric($slug_or_id)
            ? $this->db->get_where('news', array('id' => $slug_or_id))
            : $this->db->get_where('news', array('slug' => $slug_or_id));

        return $query->row_array();
    }

    public function set_news()
    {
        $this->load->helper('url');

        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'text' => $this->input->post('text')
        );

        return $this->db->insert('news', $data);
    }
}
