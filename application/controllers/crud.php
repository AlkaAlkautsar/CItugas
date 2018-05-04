function edit($id){
	$where = array('id' => $id);
	$data['anggota'] = $this->m_data->edit_data($where,'anggota')->result();
	$this->load->view('v_edit',$data);
}
