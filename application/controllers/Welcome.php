<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();

		// load model
		$this->load->model('informasi_model');
		$this->load->model('artikel_model');
		$this->load->model('kontak_model');
		$this->load->model('kategori_model');
		$this->load->model('program_model');
		$this->load->model('video_model');
		$this->load->model('playlist_model');

		// load library pagination
		$this->load->library('pagination');
	}

	public function index()
	{
		$data = array(
			'page_title' => 'Welcome',
			'informasi'	=> $this->informasi_model->get(),
			'artikels'	=> $this->artikel_model->limit_empat(),
		);

		$this->load->view('frontend/index',$data);
	}

	public function contact()
	{
		$data = array(
			'page_title' => 'Contact',
			'informasi'	=> $this->informasi_model->get(),
		);

		$this->load->view('frontend/contact',$data);
	}

	public function article()
	{
		// config pagination
		$config['base_url'] 	= site_url('welcome/article');
		$config['total_rows'] 	= $this->artikel_model->count();
		$config['per_page'] 	= 10;
		$from = $this->uri->segment(3);

		// style config pagination
		$config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

		$this->pagination->initialize($config);

		// parsing data
		$data = array(
			'page_title'=> 'Article',
			'informasi'	=> $this->informasi_model->get(),
			'artikels'	=> $this->artikel_model->recent($config['per_page'],$from),
			'kategoris'	=> $this->kategori_model->all(),
			'recents'	=> $this->artikel_model->recent_limit(),
			'populars'	=> $this->artikel_model->popular_limit(),
		);

		$this->load->view('frontend/article',$data);
	}

	public function article_read($slug)
	{
		$hits 	= $this->artikel_model->where_slug($slug);

		$array = array('hits_artikel' => $hits->hits_artikel+1, );
		$this->db->update('artikel', $array, array('slug_artikel' => $slug));

		// parsing data
		$data = array(
			'page_title'=> 'Article Read',
			'informasi'	=> $this->informasi_model->get(),
			'kategoris'	=> $this->kategori_model->all(),
			'recents'	=> $this->artikel_model->recent_limit(),
			'populars'	=> $this->artikel_model->popular_limit(),
			'artikel'	=> $this->artikel_model->where_slug($slug),
		);

		$this->load->view('frontend/article-read',$data);
	}

	public function article_search()
	{
		// parsing data
		$data = array(
			'page_title'=> 'Search Article',
			'informasi'	=> $this->informasi_model->get(),
			'artikels'	=> $this->artikel_model->search(),
			'kategoris'	=> $this->kategori_model->all(),
			'recents'	=> $this->artikel_model->recent_limit(),
			'populars'	=> $this->artikel_model->popular_limit(),
		);

		$this->load->view('frontend/article-search',$data);
	}

	public function article_category($slug)
	{
		// parsing data
		$data = array(
			'page_title'=> 'Article By Category',
			'informasi'	=> $this->informasi_model->get(),
			'artikels'	=> $this->artikel_model->article_by_category($slug)->result(),
			'kategoris'	=> $this->kategori_model->all(),
			'recents'	=> $this->artikel_model->recent_limit(),
			'populars'	=> $this->artikel_model->popular_limit(),
		);

		$this->load->view('frontend/article-category',$data);
	}

	public function program()
	{
		// config pagination
		$config['base_url'] 	= site_url('welcome/program');
		$config['total_rows'] 	= $this->program_model->count();
		$config['per_page'] 	= 10;
		$from = ($this->uri->segment(3)) ? ($this->uri->segment(3) - 1) : 0;

		// style config pagination
		$config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        
		$this->pagination->initialize($config);

		// parsing data
		$data = array(
			'page_title'	=> 'Prorgam',
			'informasi'		=> $this->informasi_model->get(),
			'programs'		=> $this->program_model->recent($config['per_page'],$from),
		);

		$this->load->view('frontend/program',$data);
	}

	public function program_view($slug)
	{
		// parsing data
		$data = array(
			'page_title'		=> 'Program View',
			'informasi'			=> $this->informasi_model->get(),
			'kategoris'			=> $this->kategori_model->all(),
			'recents'			=> $this->artikel_model->recent_limit(),
			'populars'			=> $this->artikel_model->popular_limit(),
			'program'			=> $this->program_model->where_slug($slug),
			'recent_program'	=> $this->program_model->program_recent(),
		);

		$this->load->view('frontend/program-view',$data);
	}

	public function video()
	{
		// config pagination
		$config['base_url'] 	= site_url('welcome/video');
		$config['total_rows'] 	= $this->video_model->count();
		$config['per_page'] 	= 10;
		$from = ($this->uri->segment(3)) ? ($this->uri->segment(3) - 1) : 0;

		// style config pagination
		$config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        
		$this->pagination->initialize($config);

		// parsing data
		$data = array(
			'page_title'	=> 'Video',
			'informasi'		=> $this->informasi_model->get(),
			'playlists'		=> $this->playlist_model->all(),
			'recent_video'	=> $this->video_model->video_recent(),
			'videos'		=> $this->video_model->recent($config['per_page'],$from),
		);

		$this->load->view('frontend/video',$data);
	}

	public function video_playlist($slug)
	{
		// parsing data
		$data = array(
			'page_title'	=> 'Video By Playlist',
			'informasi'		=> $this->informasi_model->get(),
			'playlists'		=> $this->playlist_model->all(),
			'recent_video'	=> $this->video_model->video_recent(),
			'videos'		=> $this->video_model->playlist_slug($slug),
		);

		$this->load->view('frontend/video-playlist',$data);
	}

	public function video_view($slug)
	{
		// parsing data
		$data = array(
			'page_title'	=> 'Video',
			'informasi'		=> $this->informasi_model->get(),
			'playlists'		=> $this->playlist_model->all(),
			'recent_video'	=> $this->video_model->video_recent(),
			'video'			=> $this->video_model->where_slug($slug),
		);

		$this->load->view('frontend/video-view',$data);
	}
}
