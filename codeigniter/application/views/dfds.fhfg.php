function message(){
			$this->form_validation->set_rules( 'status', 'Status' , 'required');
			$this->form_validation->set_rules( 'remark', 'Remark' , 'required');
			$this->form_validation->set_rules( 'id', 'Recipients' , 'required');
			// $this->form_validation->set_rules( 'remark', 'Remark' , 'required');	
			if($this->form_validation->run()){
				$data = $this->input->post();
				unset($data['submit']);
				$this->load->model('Am');
				$this->queries->save($data);
				}
			else{
				echo "bye";
			}
		}	