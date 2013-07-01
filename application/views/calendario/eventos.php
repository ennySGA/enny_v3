<?php $data['title']="Eventos"; ?>
<?php $data['events']=$eventos; ?>
<?php $this->load->view('calendario/load_calendar', $data) ?>